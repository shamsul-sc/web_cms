<?php $__env->startSection('title', 'Project Categories | Treatment Community Foundation'); ?>

<?php $__env->startSection('content'); ?>

<section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-6 m-0" style="background-image: url('<?php echo e(asset('img/backgrounds/background-4.webp')); ?>'); background-size: cover; background-position: center;">
    <div class="container py-4">
        <div class="row">
            <div class="col text-center">
                <h1 class="text-color-light font-weight-bold text-10">Project Categories</h1>
            </div>
        </div>
    </div>
</section>

<div class="container py-5 my-5">
    <div class="row row-gutter-sm justify-content-center">
        <?php if($categories && $categories->count()): ?>
            <div class="col-lg-11 text-center text-4 pb-2 mb-2">
                <p>মানুষের মৌলিক চাহিদার গুরুত্বপূর্ণ একটি হলো চিকিৎসা। ট্রিটমেন্ট কমিউনিটি ফাউন্ডেশন বাংলাদেশের একটি অরাজনৈতিক ও অলাভজনক স্বেচ্ছাসেবী সংগঠন হিসেবে রোগীদের কল্যাণে অনলাইন ও অফলাইন উভয় মাধ্যমে কাজ করে যাচ্ছে। আমাদের সেবাসমূহঃ</p>
            </div>        
            <?php $animation_delay = 100; ?>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="<?php echo e($animation_delay); ?>">
                    <a href="<?php echo e(url('project/category',$category->slug)); ?>" class="text-decoration-none">
                        <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                            <div class="card-body text-center px-4 py-5">
                                <img class="mt-2 mb-4 pb-3" width="60" src="<?php echo e(asset('img/demos/law-firm-2/icons/icon-heart-hands.svg')); ?>" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-primary custom-stroke-width-1 mt-2 mb-4 pb-3'}" />
                                <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3"><?php echo e(app()->getLocale() == 'en' ? $category->category_name : $category->category_name_bn); ?></h2>
                                <span class="custom-read-more d-inline-flex justify-content-center align-items-center text-3 font-weight-medium svg-fill-color-primary">
                                    VIEW CASE
                                    <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <polygon stroke="#777" stroke-width="0.1" fill="#777" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php $animation_delay = $animation_delay+100; ?>
        <?php else: ?>
        <div class="col-md-12 text-center">
            <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">Sorry! No data found.</h2>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LARAVEL\web_cms\resources\views/pages/projectCategories.blade.php ENDPATH**/ ?>