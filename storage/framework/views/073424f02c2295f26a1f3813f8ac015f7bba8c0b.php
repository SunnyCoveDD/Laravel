<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Страница авторизации</title>
</head>
<body>
<form action="<?php echo e(route('login')); ?>" method="post" >

    <?php if(session()->has('errorSuccess')): ?>
        <h3><?php echo e(session()->get('errorSuccess')); ?></h3>
    <?php endif; ?>
    <?php echo csrf_field(); ?>
    <input type="email" name="email" placeholder="Ваша почта"><br>
    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <input type="password" name="password" placeholder="Ваш пароль"><br>
    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <input type="submit" value="Войти">
</form>
</body>
</html>
<?php /**PATH C:\Users\is42-dimahovde\PhpstormProjects\Laravel\resources\views/login.blade.php ENDPATH**/ ?>