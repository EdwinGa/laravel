#!/bin/sh

# This script check tables in the database.
# Additionaly you can supply a filter to check only certain tables.

user=tache_auto
pass=tache_auto
db=laravel
#filter=

mysql="/usr/bin/mysql -u$user -p$pass -s $db"
stats_method="SET myisam_stats_method=nulls_equal"

# Ok now do the check on each table
echo "Checking database $db ..."
echo "show tables like \"${filter}\"" | $mysql | while read table
do
echo "$stats_method;check table $table\G" | $mysql >> ~/scripts/query_output.log
error=`cat ~/scripts/query_output.log | grep Error`
count=`expr length "$error"`

if [ "$count" != "0" ]; then

echo "--------------------- Check Table Report ($table) `date`" >> ~/scripts/bad_tables.log
tail --lines=4 ~/scripts/query_output.log >> ~/scripts/bad_tables.log
echo "------------------------------------------------------------------------------------" >> ~/scripts/bad_tables.log

fi
done

echo "Checking database $db finished"
