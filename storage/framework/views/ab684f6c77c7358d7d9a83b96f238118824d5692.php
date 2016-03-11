<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php echo $__env->yieldContent('title'); ?></title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo asset('css/materialize.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo asset('css/style.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  
  <?php echo $__env->yieldContent('nav'); ?>
  
  <?php echo $__env->yieldContent('content'); ?>
  
  <?php echo $__env->yieldContent('footer'); ?>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo asset('js/materialize.js'); ?>"></script>
  <script src="<?php echo asset('js/init.js'); ?>"></script>

  </body>
</html>
