<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <?php echo $__env->make('layouts._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card-header" style="background-color: rgb(93, 198, 93);">
                <h5 class="card-title mb-0">Gallery Album List</h5>
            </div>
            <div class="card-body">
                <div class="col-sm-12  d-flex justify-content-between">
                    <div id="scroll-vertical_filter" class="dataTables_filter">
                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder=""
                                aria-controls="scroll-vertical"></label>
                    </div>
                    <div class="mt-2 p-2">
                        <a class="btn btn-sm btn-primary" href="<?php echo e(route('dashboard.gallery_album_add')); ?>">Add New
                            Gellary Album</a>
                    </div>
                </div>
            </div>
            <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table"
                style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Type ID.</th>
                        <th>Album Name</th>
                        <th>venue</th>
                        <th>Featured Image</th>
                        <th>Serial </th>
                        <th>Status</th>
                        <th>Album Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($getGalleryAlbum && $getGalleryAlbum->count()): ?>
                    <?php $__currentLoopData = $getGalleryAlbum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td><?php echo e($value->id); ?></td>
                        <td><?php echo e($value->type_id); ?></td>
                        <td><?php echo e($value->album_name); ?></td>
                        <td><?php echo e($value->venue); ?></td>
                        <td><img src="/uploads/gallery_Album_photo/thumbnail/<?php echo e($value->featured_image); ?>"
                                width="100px"></td>
                        <td><?php echo e($value->album_serial); ?></td>
                        <td><?php echo e(date('d-m-Y h:i:A', strtotime($value->date))); ?></td>


                        <td>
                            <span
                                class="badge
                                <?php echo e($value->album_status === 'Show' ? 'bg-info-subtle text-info' : 'bg-secondary-subtle text-warning'); ?>">
                                <?php echo e($value->album_status === 'Show' ? 'Show' : 'Hide'); ?>

                            </span>
                        </td>

                        <td>
                            <a href="<?php echo e(route('dashboard.gallery_album_edit',$value->id )); ?>"
                                class="btn btn-sm btn-info ">Edit</a>

                            <a href="<?php echo e(route('dashboard.gallery_album_deleted', $value->id)); ?>"
                                class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure you want to deleted?')">Delete</a>

                        </td>


                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_dashboard_includes.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LARAVEL\web_cms\resources\views/dashboard/gallery_album/list.blade.php ENDPATH**/ ?>