<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-center align-items-center">
    <div class="col-xxl-6">
        <div class="card ">
            <?php echo $__env->make('layouts._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card-header align-items-center d-flex text-white" style="background-color: rgb(93, 198, 93);">
                <h4 class="card-title mb-0 flex-grow-1 ">Edit Gallery Album</h4>
            </div>
            <div class="card-body ">
                <div class="live-preview">
                    <form action="<?php echo e(route('dashboard.gallery_album_update',$getRecord->id)); ?>" method="POST"
                        enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>


                        <div class="row ">
                            <div class="col-md-12 outlined-input-container">
                                <input type="number" id="type_id" class="form-control" name="type_id"
                                    value="<?php echo e(old('type_id',$getRecord->type_id)); ?>" placeholder="">
                                <label for="type_id"> Album type Id<span class="required">*</span></label>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12 outlined-input-container">
                                <input type="text" id="album_name" class="form-control" name="album_name"
                                    value="<?php echo e(old('album_name',$getRecord->album_name)); ?>" placeholder="">
                                <label for="slider_text_last_bn"> Album Name<span class="required">*</span></label>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12 outlined-input-container">
                                <input type="date" id="date" class="form-control" name="date"
                                    value="<?php echo e(old('date',$getRecord->date)); ?>" placeholder="">
                                <label for="slider_text_last_bn"> Album Date<span class="required">*</span></label>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12 outlined-input-container">
                                <input type="text" id="venue" class="form-control" name="venue"
                                    value="<?php echo e(old('venue',$getRecord->venue)); ?>" placeholder="">
                                <label for="slider_text_last_bn"> Album venue<span class="required">*</span></label>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6 ">
                                <label for="image"> Album Image <span class="required">*</span></label>
                                <input type="file" id="featured_image" name="featured_image" class="form-control mb-1">
                                <?php if($getRecord && $getRecord->featured_image ): ?>
                                <img src="<?php echo e(asset('/uploads/gallery_Album_photo/thumbnail/' . $getRecord->featured_image )); ?>"
                                    alt=" Image" width="70">
                                <?php endif; ?>
                                <br>
                                <small class="form-text text-muted">Please upload a 600x340 pixels image.</small>
                            </div>
                        </div>
                        <div class="row mt-3 ">
                            <div class="col-md-12 outlined-input-container">
                                <input type="number" id="album_serial" class="form-control" name="album_serial"
                                    value="<?php echo e(old('album_serial',$getRecord->album_serial)); ?>" placeholder="  ">
                                <label for="slider_text_last_bn"> Album Serial <span class="required">*</span></label>
                            </div>
                        </div>

                        <div class="col-md-12 outlined-input-container">
                            <select class="form-select" name="album_status">
                                <option value="" disabled <?php echo e(old('album_status', $getRecord->album_status) === null ?
                                    'selected' :
                                    ''); ?>>
                                    Select Status
                                </option>
                                <option value="Show" <?php echo e(old('album_status', $getRecord->album_status) == 'Show' ?
                                    'selected' : ''); ?>>Show</option>
                                <option value="Hide" <?php echo e(old('album_status', $getRecord->album_status) == 'Hide' ?
                                    'selected' : ''); ?>>Hide</option>
                            </select>
                            <label> Status <span class="required">*</span></label>
                        </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center d-flex justify-content-between align-items-center">
                        <a href="<?php echo e(route('dashboard.gallery_album_list')); ?>" class="btn btn-danger px-5 rounded-pill">
                            <i class="ri-arrow-go-back-line"></i> Go to list
                        </a>
                        <button type="submit" class="btn btn-primary px-5 rounded-pill">
                            <i class="bi bi-plus-lg"></i> Submit
                        </button>
                    </div>
                </div>
            </div>

            </form>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_dashboard_includes.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LARAVEL\web_cms\resources\views/dashboard/gallery_album/edit.blade.php ENDPATH**/ ?>