<section>
    <header class="mb-4">
        <h3 class="h5 mb-2">
            <?php echo e(__('Update Password')); ?>

        </h3>

        <p class="text-muted">
            <?php echo e(__('Ensure your account is using a long, random password to stay secure.')); ?>

        </p>
    </header>

    <form method="post" action="<?php echo e(route('password.update')); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>

        <div class="mb-3">
            <label for="current_password" class="form-label"><?php echo e(__('Current Password')); ?></label>
            <input id="current_password" name="current_password" type="password" 
                class="form-control <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
            <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label"><?php echo e(__('New Password')); ?></label>
            <input id="password" name="password" type="password" 
                class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label"><?php echo e(__('Confirm Password')); ?></label>
            <input id="password_confirmation" name="password_confirmation" type="password" 
                class="form-control" required>
        </div>

        <div class="d-flex align-items-center">
            <button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>

            <?php if(session('status') === 'password-updated'): ?>
                <p class="text-success mb-0 ms-3"><?php echo e(__('Saved.')); ?></p>
            <?php endif; ?>
        </div>
    </form>
</section>
<?php /**PATH C:\laragon\www\TareaCrudLaravel-Alexis Mansilla\resources\views/profile/partials/update-password-form.blade.php ENDPATH**/ ?>