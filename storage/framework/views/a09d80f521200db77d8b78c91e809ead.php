<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <?php echo $__env->make('layouts._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card-header" style="background-color: rgb(93, 198, 93);">
                <h5 class="card-title mb-0">Testimonial List</h5>
            </div>
            <div class="card-body">
                <div class="col-sm-12  d-flex justify-content-between">
                    <div id="scroll-vertical_filter" class="dataTables_filter">
                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder=""
                                aria-controls="scroll-vertical"></label>
                    </div>
                    <div class="mt-2 p-2">
                        <a class="btn btn-sm btn-primary" href="<?php echo e(route('dashboard.testimonial_add')); ?>">Add New
                            Testimonial</a>
                    </div>
                </div>
            </div>
            <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table"
                style="width:100%">
                <thead>
                    <tr>
                        <th>Id.</th>
                        <th>Company Name</th>
                        <th>Author Name</th>
                        <th>Author Image</th>
                        <th>Designation</th>
                        <th>Content</th>
                        <th>Serial</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($getTestimonial && $getTestimonial->count()): ?>
                    <?php $__currentLoopData = $getTestimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td><?php echo e($value->id); ?></td>
                        <td><?php echo e($value->company_name); ?></td>
                        <td><?php echo e($value->author_name); ?></td>
                        <td><img src="/uploads/author_image/thumbnail/<?php echo e($value->author_image); ?>" width="100px"></td>
                        <td><?php echo e($value->designation); ?></td>
                        <td><?php echo $value->content; ?></td>
                        <td><?php echo e($value->serial); ?></td>
                        <td>
                            <span
                                class="badge
                                <?php echo e($value->status === 'Show' ? 'bg-info-subtle text-success' : 'bg-secondary-subtle text-warning'); ?>">
                                <?php echo e($value->status === 'Show' ? 'Show' : 'Hide'); ?>

                            </span>
                        </td>
                        <td><?php echo e(date('d-m-Y h:i:A', strtotime($value->created_at))); ?></td>
                        <td>
                            <a href="<?php echo e(route('dashboard.testimonial_edit',$value->id )); ?>"
                                class="btn btn-sm btn-info ">Edit</a>
                            <a href="<?php echo e(route('dashboard.testimonial_deleted', $value->id)); ?>"
                                class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure you want to delete this category?')">Delete</a>
                        </td>
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
<?php echo $__env->make('admin_dashboard_includes.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LARAVEL\web_cms\resources\views/dashboard/testimonial/testimonial_list.blade.php ENDPATH**/ ?>