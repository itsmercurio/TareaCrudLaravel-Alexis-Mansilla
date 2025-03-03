<section>
    <header class="mb-4">
        <h3 class="h5 mb-2 text-danger">
            <?php echo e(__('Delete Account')); ?>

        </h3>

        <p class="text-muted">
            <?php echo e(__('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.')); ?>

        </p>
    </header>

    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmUserDeletion">
        <?php echo e(__('Delete Account')); ?>

    </button>

    <!-- Modal -->
    <div class="modal fade" id="confirmUserDeletion" tabindex="-1" aria-labelledby="confirmUserDeletionLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="post" action="<?php echo e(route('profile.destroy')); ?>" class="modal-content">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>

                <div class="modal-header">
                    <h5 class="modal-title" id="confirmUserDeletionLabel">
                        <?php echo e(__('Are you sure you want to delete your account?')); ?>

                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <p class="mb-3">
                        <?php echo e(__('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.')); ?>

                    </p>

                    <div class="mb-3">
                        <label for="password" class="form-label"><?php echo e(__('Password')); ?></label>
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
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <?php echo e(__('Cancel')); ?>

                    </button>
                    <button type="submit" class="btn btn-danger">
                        <?php echo e(__('Delete Account')); ?>

                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\TareaCrudLaravel-Alexis Mansilla\resources\views/profile/partials/delete-user-form.blade.php ENDPATH**/ ?>