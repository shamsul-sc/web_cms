<?php $__env->startSection('content'); ?>

<div class="">
    <div class="row">
        <div class="col-xl-12">
            <?php echo $__env->make('layouts._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card shadow-lg">
                <div class="card-header align-items-center d-flex text-white"
                    style="background-color: rgb(93, 198, 93);">
                    <h4 class="card-title mb-0 flex-grow-1 text-white">Edit a Testimonial</h4>
                </div>
                <div class="card-body mt-2">

                    <form action="<?php echo e(route('dashboard.testimonial_update',$getTestimonial->id)); ?>" method="POST"
                        enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="row mb-3">
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="company_name" name="company_name"
                                    value="<?php echo e(old('company_name',$getTestimonial->company_name)); ?>" class="form-control"
                                    required placeholder="" maxlength="255">
                                <label for="case_id">Company Name <span class="required">*</span></label>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <input type="url" id="company_url" name="company_url" class="form-control"
                                    value="<?php echo e(old('company_url',$getTestimonial->company_url)); ?>" placeholder=""
                                    maxlength="255">
                                <label for="case_id">Company Url <span class="required">*</span></label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 mt-4 outlined-input-container">
                                <input type="text" id="author_name" name="author_name" class="form-control"
                                    value="<?php echo e(old('author_name',$getTestimonial->author_name)); ?>" placeholder=""
                                    maxlength="255">
                                <label for="case_id">Author Name <span class="required">*</span></label>
                            </div>
                            <div class="col-md-6 ">
                                <label for="author_image">Author Image <span class="required">*</span></label>
                                <input type="file" id="author_image" name="author_image" class="form-control mb-1"
                                    placeholder="" maxlength="255">
                                <?php if($getTestimonial && $getTestimonial->author_image ): ?>
                                <img src="<?php echo e(asset('/uploads/author_image/thumbnail/' . $getTestimonial->author_image )); ?>"
                                    alt=" Image" width="70">
                                <?php endif; ?>
                                <br>

                                <small class="form-text text-muted">Please Upload square size image.</small>
                            </div>

                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="designation" class="form-control" name="designation"
                                    value="<?php echo e(old('designation',$getTestimonial->designation)); ?>" placeholder="  ">
                                <label for="serial">Designation <span class="required">*</span></label>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12  ">
                                <label for="content">Content</label>
                                <textarea id="content" name="content" class="form-control dynamic-char-count"
                                    placeholder="" rows="5"><?php echo old('content',$getTestimonial->content); ?></textarea>

                            </div>
                        </div>
                        <br>
                        <hr>

                        <div class="row mb-3">
                            <div class="col-md-6 outlined-input-container">
                                <input type="number" id="serial" class="form-control" name="serial" placeholder="  "
                                    value="<?php echo e(old('serial',$getTestimonial->serial)); ?>">

                                <label for="serial">Serial <span class="required">*</span></label>
                            </div>
                            <div class="col-md-6  outlined-input-container">
                                <select class="form-select" name="status" required>
                                    <option value="" disabled <?php echo e(old('status', $getTestimonial->status) === null ?
                                        'selected'
                                        :
                                        ''); ?>>
                                        Select Status
                                    </option>
                                    <option value="Show" <?php echo e(old('status', $getTestimonial->status) == 'Show' ?
                                        'selected' :
                                        ''); ?>>Show</option>
                                    <option value="Hide" <?php echo e(old('status', $getTestimonial->status) == 'Hide' ?
                                        'selected' :
                                        ''); ?>>Hide</option>
                                </select>
                                <label> Status <span class="required">*</span></label>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12 text-center d-flex justify-content-between align-items-center">
                                <a href="<?php echo e(route('dashboard.testimonial_list')); ?>"
                                    class="btn btn-danger px-5 rounded-pill">
                                    <i class="ri-arrow-go-back-line"></i> Go to list
                                </a>
                                <button type="submit" class="btn btn-primary px-5 rounded-pill">
                                    <i class="bi bi-plus-lg"></i> Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_dashboard_includes.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LARAVEL\web_cms\resources\views/dashboard/testimonial/testimonial_edit.blade.php ENDPATH**/ ?>