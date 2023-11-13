<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISSUE TRACKER</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark">

        <!-- Links -->
        <ul class="navbar-nav">
            <?php if(auth()->guard()->guest()): ?>

            <li class="nav-item">
                <a class="nav-link text-light" href="/">Issue Tracker</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('Login')); ?>">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('Register-user')); ?>">Register</a>
            </li>
            <?php else: ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('signout')); ?>"><button class="btn btn-danger btn-sm float-end">Logout</button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('users')); ?>">All Users</a>
            </li>

            <?php endif; ?>
        </ul>
    </nav>
    <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success alert-block">
        <strong><?php echo e($message); ?></strong>
    </div>
    <?php endif; ?>
    <?php echo $__env->yieldContent('content'); ?>

</body>

</html><?php /**PATH C:\laragon\www\issue-traker\resources\views/layouts/header.blade.php ENDPATH**/ ?>