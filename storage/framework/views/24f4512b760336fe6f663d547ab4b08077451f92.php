<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col s12 m6">
                            <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                              <span class="card-title">Joueurs</span>
                            </div>
                            <div class="card-action">
                              <a href="list">Aficher</a>
                              <a href="#">Suprimer</a>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>