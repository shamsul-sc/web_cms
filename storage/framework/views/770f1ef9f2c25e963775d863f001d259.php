<?php $__env->startSection('title', 'Project Details | Treatment Community Foundation'); ?>

<?php $__env->startSection('content'); ?>

<section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-6 m-0" style="background-image: url('<?php echo e(asset('img/backgrounds/background-4.webp')); ?>'); background-size: cover; background-position: center;">
    <div class="container py-4">
        <div class="row">
            <div class="col text-center">
                <h1 class="text-color-light font-weight-bold text-10"><?php echo e(app()->getLocale() == 'en' ?$getRecord->case_title : $getRecord->case_title_bn); ?></h1>
            </div>
        </div>
    </div>
</section>

<div class="spacer py-3 my-4"></div>
<div class="container">
    <div class="row pb-4">
        <div class="col-lg-8 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="100">
            <span class="font-weight-bold text-4 mb-4"><?php echo app()->getLocale() == 'en' ? $getRecord->introduction : $getRecord->introduction_bn; ?></span>
            <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                <div class="row pb-2 mb-2">
                    <div class="col-lg-12 mb-2 mb-lg-0">
                        <a class="d-flex img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0 custom-box-shadow-1" href="<?php echo e(asset('uploads/case_image/original/' . $getRecord->case_image)); ?>" style="background-image: url('<?php echo e(asset('uploads/case_image/thumbnail/' . $getRecord->case_image)); ?>'); background-size: cover; background-position: center; min-height: 300px;"></a>
                    </div>
                    <!-- <div class="col-lg-4 ps-lg-0">
                        <a class="d-flex img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0 custom-box-shadow-1" href="img/demos/law-firm-2/generic/generic-4-portrait.jpg" style="background-image: url(img/demos/law-firm-2/generic/generic-4-portrait.jpg); background-size: cover; background-position: center; min-height: 300px;"></a>
                    </div> -->
                </div>
            </div>
            <span style="color:#777 !important;"><?php echo app()->getLocale() == 'en' ? $getRecord->details : $getRecord->details_bn; ?></span>
        </div>
        <div class="col-lg-4 position-relative">
            <aside class="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 120}}">
                <?php if($categories && $categories->count()): ?>
                <div class="card border-0 border-radius-0 custom-box-shadow-1 px-2 mb-5">
                    <div class="card-body p-4 my-3">
                        <h3 class="text-transform-none font-weight-bold pb-3 mb-4">Project Category</h3>
                        <ul class="custom-list-style-1 list list-unstyled">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="<?php echo e($getRecord->category_id == $category->id ? 'active' : ''); ?>">
                                <a href="" class="text-decoration-none <?php echo e($getRecord->category_id == $category->id ? 'text-color-primary' : 'text-color-dark text-color-hover-primary'); ?>"><?php echo e(app()->getLocale() == 'en' ? $category->category_name : $category->category_name_bn); ?></a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>
            </aside>
        </div>
    </div>
</div>
<div class="spacer py-3 my-4"></div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LARAVEL\web_cms\resources\views/pages/caseStudyDetails.blade.php ENDPATH**/ ?>