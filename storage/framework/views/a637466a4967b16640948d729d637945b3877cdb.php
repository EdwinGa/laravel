<?php $__env->startSection('title','Welcome'); ?>

<?php echo $__env->make('nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>

<form method="POST" action="/auth/login">
    <?php echo csrf_field(); ?>


    <div>
        Email
        <input type="email" name="email" value="<?php echo e(old('email')); ?>">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>