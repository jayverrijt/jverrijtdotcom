<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML ICON -->
    <link rel="icon" type="image/png" sizes="*" rel="noopener" target="_blank" href="<?php echo e(asset('store/pictures/logos/logo-500.png')); ?>">
    <link rel="icon" type="image/png" sizes="200x200" rel="noopener" target="_blank" href="<?php echo e(asset('store/pictures/logos/logo-200.png')); ?>">
    <link rel="icon" type="image/png" sizes="500x500" rel="noopener" target="_blank" href="<?php echo e(asset('store/pictures/logos/logo-500.png')); ?>">
    <link rel="icon" type="image/png" sizes="1000x1000" rel="noopener" target="_blank" href="<?php echo e(asset('store/pictures/logo/logo-1000.png')); ?>">
    <link rel="icon" type="image/png" rel="noopener" target="_blank" href="<?php echo e(asset('store/pictures/logos/logo-500.png')); ?>">

    <!-- Dynamic Title -->
    <title>Jay</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/global.css')); ?>">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="headerBlock">
        <h1>Breng je geweldige ideeen tot leven met Code</h1>
    </div>
    <div class="statsBlock">
        <div class="statOne"></div>
        <div class="statTwo"></div>
        <div class="statThree"></div>
    </div>
    <div class="navBlock">
        <i class="fas fa-bars"></i>
    </div>
    <div class="personalBlock">
        <div class="fotoHolder"></div>
        <div class="nameHolder"></div>
        <div class="locationHolder"></div>
        <div class="socialHolder"></div>
    </div>
    <div class="projectHolder"></div>
    <div class="aboutHolder"></div>
</div>
</body>
</html>
<?php /**PATH /Users/jayv/Projects/portfolio/resources/views/welcome.blade.php ENDPATH**/ ?>