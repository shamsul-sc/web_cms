<footer id="footer" class="border-0 pt-4 mt-0">
    <div class="container py-5">
        <div class="row py-4">
            <div class="col-lg-3 mb-5 mb-lg-0">
                <h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">About Us</h5>
                <p class="text-3-5">মানুষের মৌলিক চাহিদার গুরুত্বপূর্ণ একটি হলো চিকিৎসা। ট্রিটমেন্ট কমিউনিটি ফাউন্ডেশন বাংলাদেশের একটি অরাজনৈতিক ও অলাভজনক স্বেচ্ছাসেবী সংগঠন হিসেবে রোগীদের কল্যাণে অনলাইন ও অফলাইন উভয় মাধ্যমে কাজ করে যাচ্ছে।</p>
            </div>
            <div class="col-lg-2 offset-lg-1 mb-5 mb-lg-0">
                <h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">Useful Links</h5>
                <ul class="list list-unstyled text-3-5 mb-0">
                    <li class="mb-2"><a href="#">Make a Donation</a></li>
                    <li class="mb-2"><a href="#">FAQs</a></li>
                    <li class="mb-2"><a href="#">Privacy Policy</a></li>
                    <li class="mb-2"><a href="#">Terms & Condition</a></li>
                    <li class="mb-0"><a href="#">Contact</a></li>
                </ul>
            </div>
            <?php if($projectCategories && $projectCategories->count()): ?>
            <div class="col-lg-3 mb-5 mb-lg-0">
                <h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">Category</h5>
                <ul class="list list-unstyled text-3-5 mb-0">
                    <?php $__currentLoopData = $projectCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="mb-2">
                        <a href="<?php echo e(url('project/category',$category->slug)); ?>">
                            <?php echo e(app()->getLocale() == 'en' ? $category->category_name : $category->category_name_bn); ?>

                        </a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
            </div>
            <div class="col-lg-3">
                <h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">Contact Us</h5>
                <ul class="list list-unstyled mb-4">
                    <li>
                        <i class="icons icon-phone text-color-primary text-5-5 position-relative top-2 me-2"></i>
                        <a href="tel:+8801516130562" class="text-color-light font-weight-bold text-decoration-none text-5">+88 01516-130562</a>
                    </li>
                    <li class="mb-3">
                        <i class="icons icon-envelope text-color-primary text-6 position-relative top-6 me-2"></i>
                        <a href="mailto:info@tcf.org.bd" class="text-color-light text-decoration-none text-4">info@tcf.org.bd</a>
                    </li>
                    <li class="text-color-light text-4">
                        <i class="icons icon-calendar text-color-primary text-5 position-relative top-3 me-2"></i>
                        Sun - Thurs 10am - 5pm
                    </li>
                </ul>
                <ul class="custom-social-icons-style-1 social-icons social-icons-clean">
                    <li class="social-icons-instagram">
                        <a href="http://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="social-icons-twitter mx-4">
                        <a href="http://www.twitter.com/" class="no-footer-css" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="social-icons-facebook">
                        <a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright py-4">
        <div class="container py-2">
            <div class="row">
                <div class="col">
                    <p class="text-center text-3 mb-0">Treatment Community Foundation © <?php echo e(now()->year); ?>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer><?php /**PATH E:\LARAVEL\web_cms\resources\views/includes/footer.blade.php ENDPATH**/ ?>