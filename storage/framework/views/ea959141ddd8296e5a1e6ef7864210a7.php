<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/nunito/Nunito-Light.ttf')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/nunito/Nunito-Medium.ttf')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/nunito/Nunito-Regular.ttf')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/nunito/Nunito-SemiBold.ttf')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/nunito/Nunito-Bold.ttf')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/nunito/Nunito-ExtraBold.ttf')); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <link rel="stylesheet" href="<?php echo e(asset('assets/scss/style.css')); ?>">
</head>

<body>
    <div class="rc-main">
        <?php echo $__env->make('user.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="rc-content">
            <?php echo $__env->yieldContent('usercontent'); ?>
        </div>
        <?php echo $__env->make('user.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</body>

</html><?php /**PATH C:\laragon\www\royal\resources\views/user/layouts/app.blade.php ENDPATH**/ ?>