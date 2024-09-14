<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <?php echo $__env->make('layouts._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card-header" style="background-color: rgb(93, 198, 93);">
                <h5 class="card-title mb-0">Category List</h5>
            </div>
            <div class="card-body">
                <div class="col-sm-12  d-flex justify-content-between">
                    <div id="scroll-vertical_filter" class="dataTables_filter">
                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder=""
                                aria-controls="scroll-vertical"></label>
                    </div>
                    <div class="mt-2 p-2">
                        <a class="btn btn-sm btn-primary" href="<?php echo e(route('dashboard.category_add')); ?>">Add New
                            Category</a>
                    </div>
                </div>
            </div>
            <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table"
                style="width:100%">
                <thead>
                    <tr>
                        <th>Category Name</th>
                        <th>Category Name BN.</th>
                        <th>Slug</th>
                        <th>Serial</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($getRecord && $getRecord->count()): ?>
                    <?php $__currentLoopData = $getRecord; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td><?php echo e($category->id); ?></td>
                        <td><?php echo e($category->category_name); ?></td>
                        <td><?php echo e($category->category_name_bn); ?></td>
                        <td><?php echo e($category->slug); ?></td>
                        <td><?php echo e($category->serial); ?></td>
                        <td>
                            <span
                                class="badge
                                <?php echo e($category->status === 'show' ? 'bg-info-subtle text-success' : 'bg-secondary-subtle text-warning'); ?>">
                                <?php echo e($category->status === 'show' ? 'Show' : 'Hide'); ?>

                            </span>
                        </td>
                        <td><?php echo e(date('d-m-Y h:i:A', strtotime($category->created_at))); ?></td>
                        <td>
                            <a href="<?php echo e(route('dashboard.category_edit',$category->id )); ?>"
                                class="btn btn-sm btn-info ">Edit</a>
                            <a href="<?php echo e(route('dashboard.category_deleted', $category->id)); ?>"
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
<?php echo $__env->make('admin_dashboard_includes.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LARAVEL\web_cms\resources\views/dashboard/project_category/category_list.blade.php ENDPATH**/ ?>