<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <?php echo $__env->make('layouts._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card-header" style="background-color: rgb(93, 198, 93);">
                <h5 class="card-title mb-0">Case Study List</h5>
            </div>
            <div class="card-body">
                <div class="col-sm-12  d-flex justify-content-between">
                    <div id="scroll-vertical_filter" class="dataTables_filter">
                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder=""
                                aria-controls="scroll-vertical"></label>
                    </div>
                    <div class="mt-2 p-2">
                        <a class="btn btn-sm btn-primary" href="<?php echo e(route('dashboard.case_study_add')); ?>">Add New
                            Case Study</a>
                    </div>
                </div>
            </div>
            <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table"
                style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Case Title BN.</th>
                        <th>Case Summary BN</th>
                        <th>Case Approx Budget</th>
                        <th>Case Image</th>
                        <th>Joint Project</th>
                        <th>Featured Project</th>
                        <th>State</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($getCaseStudy && $getCaseStudy->count()): ?>
                    <?php $__currentLoopData = $getCaseStudy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case_study): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td><?php echo e($case_study->id); ?></td>
                        <td><?php echo e($case_study->case_title_bn); ?></td>
                        <td><?php echo $case_study->case_summary_bn; ?></td>
                        <td><?php echo e($case_study->case_approx_budget); ?></td>
                        <td><img src="/uploads/case_image/thumbnail/<?php echo e($case_study->case_image); ?>" width="100px"></td>

                        <td>
                            <span
                                class="badge
                                <?php echo e($case_study->urgent_case === 'Yes' ? 'bg-info-subtle text-info' : 'bg-secondary-subtle text-warning'); ?>">
                                <?php echo e($case_study->urgent_case === 'Yes' ? 'Yes' : 'No'); ?>

                            </span>
                        </td>
                        <td>
                            <span
                                class="badge
                                <?php echo e($case_study->featured_case === 'Yes' ? 'bg-info-subtle text-info' : 'bg-secondary-subtle text-warning'); ?>">
                                <?php echo e($case_study->featured_case === 'Yes' ? 'Yes' : 'No'); ?>

                            </span>
                        </td>

                        <td>
                            <span
                                class="badge
                                <?php echo e($case_study->state === 'Planning' ? 'bg-info-subtle text-info' : ($case_study->state === 'Running' ? 'bg-secondary-subtle text-warning' : 'bg-success-subtle text-success')); ?>">
                                <?php echo e($case_study->state === 'Planning' ? 'Planning' : ($case_study->state === 'Running' ?
                                'Running' : 'Finished')); ?>

                            </span>
                        </td>
                        <td><?php echo e(date('d-m-Y h:i:A', strtotime($case_study->created_at))); ?></td>
                        <td class='d-flex'>
                            <a href="<?php echo e(route('dashboard.case_study_edit',$case_study->id )); ?>"
                                class="btn btn-sm btn-info ">Edit</a>

                            <a href="<?php echo e(route('dashboard.case_study_deleted', $case_study->id)); ?>"
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
<?php echo $__env->make('admin_dashboard_includes.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LARAVEL\web_cms\resources\views/dashboard/case_study/list.blade.php ENDPATH**/ ?>