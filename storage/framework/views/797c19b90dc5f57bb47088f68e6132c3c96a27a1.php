<?php $__env->startSection('title', 'Страница авторизации'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container p-4">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <form action="<?php echo e(route('register')); ?>" method="post" >
                    <?php if(session()->has('Success')): ?>
                        <h3>Операция регистрации успешно выполнена</h3>
                    <?php endif; ?>
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Ваше имя</label>
                        <input type="text"
                               class="form-control"
                               id="inputName"
                               name="name">
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Ваше почта</label>
                        <input type="email"
                               class="form-control"
                               id="inputEmail"
                               name="email">
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Ваш пароль</label>
                        <input type="password"
                               class="form-control"
                               id="inputPassword"
                               name="password">
                    </div>
                        <div class="mb-3">
                            <label for="inputPasswordConfirmation" class="form-label">Ваш пароль повторно</label>
                            <input type="password"
                                   class="form-control <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid@enderror"
                                   id="inputPasswordConfirmation"
                                   name="password_confirmation"
                                   aria-describedby="invalidPasswordConfirmation">
                            <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div id="invalidPasswordConfirmation" class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    <button type="submit" class="btn btn-primary">Регистрация</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\is42-dimahovde\PhpstormProjects\Laravel\resources\views/register.blade.php ENDPATH**/ ?>