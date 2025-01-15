<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            font-family: 'Rubik';
        }
    </style>

</head>
<body>
    


<?php $__env->startSection('content'); ?>

<div class="container-fluid p-0" style="background-image: url('images/bg2.jpg'); background-size: cover; background-position: center; height: 100vh;">
    <div class="row align-items-center pl-5">
        <img class="d-block mx-auto mt-5" src="images/thankyou.png" alt="Thank You" style="width: 500px; height:400px;">
        <h1 class="text-center fw-bold mt-5 mb-3" style="color: #001869;">Thank You for Your Interest</h1> 
        <p class="text-center fw-bold" style="color: #001869;">Our team will contact you within 5 working days</p> 
        <div class="d-flex justify-content-center mb-3 my-5">
            <a href="/home" class="btn shadow text-white fw-bold py-2 px-5" style="background-color: #32CD32">BACK TO HOMEPAGE</a>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

</body>
</html>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joshu\Documents\Skill Test CTI\Laravel 11\resources\views/thank.blade.php ENDPATH**/ ?>