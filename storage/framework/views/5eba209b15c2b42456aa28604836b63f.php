<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="h4 mb-0">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="container py-4">
        <div class="card">
            <div class="card-body">
                <div class="mb-4">
                    <h3 class="h5 mb-3"><?php echo e(__('Project Management')); ?></h3>
                    <p class="text-muted mb-4"><?php echo e(__('Welcome to your project management dashboard. Here you can manage all your projects.')); ?></p>
                    <a href="<?php echo e(route('projects.index')); ?>" class="btn btn-primary">
                        <?php echo e(__('View All Projects')); ?>

                    </a>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card bg-primary bg-opacity-10 border-0">
                            <div class="card-body">
                                <h4 class="h6 mb-2"><?php echo e(__('Total Projects')); ?></h4>
                                <p class="h3 mb-0"><?php echo e(auth()->user()->projects()->count()); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-success bg-opacity-10 border-0">
                            <div class="card-body">
                                <h4 class="h6 mb-2"><?php echo e(__('Total Hours')); ?></h4>
                                <p class="h3 mb-0"><?php echo e(auth()->user()->projects()->sum('estimated_hours')); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-info bg-opacity-10 border-0">
                            <div class="card-body">
                                <h4 class="h6 mb-2"><?php echo e(__('Recent Projects')); ?></h4>
                                <p class="h3 mb-0"><?php echo e(auth()->user()->projects()->where('created_at', '>=', now()->subDays(7))->count()); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\TareaCrudLaravel-Alexis Mansilla\resources\views/dashboard.blade.php ENDPATH**/ ?>