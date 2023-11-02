<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />



</head>

<body class="antialiased">
    <h1>ADIDAS COLLECTIONS</h1>

    <div class=" md:container md:mx-auto prose">
        <?php $__currentLoopData = $Jerseys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jersey): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <ul role="list" class="divide-y divide-gray-100">
            <li class="flex justify-between gap-x-6 py-5">
                <div class="flex min-w-0 gap-x-4">
                    <img class="h-50 w-70 flex-none rounded-full" src="data:image/jpeg;base64,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" alt="">
                    <img class="h-50 w-70 flex-none rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSS5nMLFqdgJgckxaqh0jBoI_R20M6pRC97w&usqp=CAU" alt="">

                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900"><?php echo e($jersey->title); ?></p>
                        <p class="mt-1 text-xs leading-5 text-gray-500"><?php echo e($jersey->description); ?></p>
                    </div>
                </div>

                <div class="flex min-w-0 gap-x-4">
                    <img class="h-50 w-90 flex-none rounded-full" src="data:image/jpeg;base64,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" alt="">
                    <img class="h-50 w-90 flex-none rounded-full" src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfqikGwOjyfLEoxTWeou3_OT9UcLtnKd-y8Q&usqp=CAU" alt="">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900"><?php echo e($jersey->title); ?></p>
                        <p class="mt-1 text-xs leading-5 text-gray-500"><?php echo e($jersey->description); ?></p>
                    </div>
                </div>

            </li>
        </ul>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</body>

</html><?php /**PATH C:\day-1\resources\views/jersey.blade.php ENDPATH**/ ?>