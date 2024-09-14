<?php $__env->startSection('content'); ?>

<div class="col-12">
    <div class="row">
        <div class="col-xl-12">
            <?php echo $__env->make('layouts._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card shadow-lg">
                <div class="card-header align-items-center d-flex text-white"
                    style="background-color: rgb(93, 198, 93);">
                    <h4 class="card-title mb-0 flex-grow-1 text-white">Edit a FAQ</h4>

                </div>

                <div class="card-body  mt-2">


                    <form action="<?php echo e(route('dashboard.faq_update',$getRecord->id)); ?>" method="POST"
                        enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>


                        <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <select id="faq_cat_id" name="faq_cat_id" class="form-select">
                                    <option value="">Select FAQ Category</option>
                                    <?php $__currentLoopData = $getFaqCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($faq_category->id); ?>" <?php echo e($faq_category->id ==
                                        $faq_category->id ?
                                        'selected' : ''); ?>><?php echo e($faq_category->faq_cat_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <label for="faq_cat_id">FAQ Category Name<span class="required">*</span></label>
                            </div>

                            <div class="col-md-6 outlined-input-container">
                                <input type="number" id="position" name="position" class="form-control" placeholder=""
                                    value="<?php echo e(old('position',$getRecord->position)); ?>" maxlength="255">
                                <label for="project_title">Position <span class="required">*</span></label>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="question" name="question" class="form-control" placeholder=""
                                    value="<?php echo e(old('question',$getRecord->question)); ?>" maxlength="255">
                                <label for="project_title">Question <span class="required">*</span></label>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="answer" name="answer" class="form-control" placeholder=""
                                    value="<?php echo e(old('answer',$getRecord->answer)); ?>" maxlength="100">
                                <label for="answer">Answer<span class="required">*</span></label>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="question_bn" name="question_bn" class="form-control"
                                    value="<?php echo e(old('question_bn',$getRecord->question_bn)); ?>" placeholder=""
                                    maxlength="255">
                                <label for="question_bn">Question BN.(Bangla) <span class="required">*</span></label>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="answer_bn" name="answer_bn" class="form-control" placeholder=""
                                    value="<?php echo e(old('answer_bn',$getRecord->answer_bn)); ?>" maxlength="100">
                                <label for="answer">Answer BN(Bangla)<span class="required">*</span></label>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <select class="form-select" name="status">
                                    <option value="" disabled <?php echo e(old('status', $getRecord->status) === null
                                        ? 'selected' :
                                        ''); ?>>
                                        Select Status
                                    </option>
                                    <option value="Show" <?php echo e(old('status', $getRecord->status) == 'Show' ?
                                        'selected' : ''); ?>>Show</option>
                                    <option value="Hide" <?php echo e(old('status', $getRecord->status) == 'Hide' ?
                                        'selected' : ''); ?>>Hide</option>
                                </select>
                                </select>
                                <label> Status <span class="required">*</span></label>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-12 text-center d-flex justify-content-between align-items-center">
                                <a href="<?php echo e(route('dashboard.faq_list')); ?>" class="btn btn-danger px-5 rounded-pill">
                                    <i class="ri-arrow-go-back-line"></i> Go to list
                                </a>
                                <button type="submit" class="btn btn-primary px-5 rounded-pill">
                                    <i class="bi bi-plus-lg"></i> Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_dashboard_includes.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LARAVEL\web_cms\resources\views/dashboard/faq/faq_edit.blade.php ENDPATH**/ ?>