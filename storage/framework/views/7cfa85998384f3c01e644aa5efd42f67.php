<?php $__env->startSection('title', 'Albums | Treatment Community Foundation'); ?>

<?php $__env->startSection('content'); ?>

<section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-6 m-0" style="background-image: url('<?php echo e(asset('img/backgrounds/background-4.webp')); ?>'); background-size: cover; background-position: center;">
    <div class="container py-4">
        <div class="row">
            <div class="col text-center">
                <h1 class="text-color-light font-weight-bold text-10">Albums</h1>
            </div>
        </div>
    </div>
</section>

<div class="container py-5 my-4">
    <?php if($galleryTypes && $galleryTypes->count()): ?>        
        <div class="row">
            <div class="col">
                <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                    <li class="nav-item active" data-option-value="*"><a class="nav-link text-2-5 text-uppercase active" href="#">Show All</a></li>
                    <?php $__currentLoopData = $galleryTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <li class="nav-item" data-option-value=".<?php echo e($type->id); ?>"><a class="nav-link text-2-5 text-uppercase" href="#"><?php echo e($type->type_name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>

                <?php if($albums && $albums->count()): ?> 
                <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
                    <div class="row portfolio-list sort-destination" data-sort-id="portfolio">
                        <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12 col-sm-6 col-lg-3 isotope-item <?php echo e($album->type_id); ?>">
                            <div class="portfolio-item">
                                <a href="portfolio-single-wide-slider.html" aria-label="">
                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                        <span class="thumb-info-wrapper border-radius-0">
                                            <img src="/uploads/gallery_Album_photo/thumbnail/<?php echo e($album->featured_image); ?>" class="img-fluid border-radius-0" alt="">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner"><?php echo e($album->album_name); ?></span>
                                                <span class="thumb-info-type"><?php echo e($album->type_name); ?></span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>    
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LARAVEL\web_cms\resources\views/pages/albums.blade.php ENDPATH**/ ?>