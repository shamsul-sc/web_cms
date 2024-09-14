<!-- JAVASCRIPT -->
<script src="<?php echo e(asset('js/jquery-3.5.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('libs/simplebar/simplebar.min.js')); ?>"></script>
<script src="<?php echo e(asset('libs/node-waves/waves.min.js')); ?>"></script>
<script src="<?php echo e(asset('libs/feather-icons/feather.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/pages/plugins/lord-icon-2.1.0.js')); ?>"></script>



<!-- projects js -->
<script src="<?php echo e(asset('js/pages/dashboard.init.js')); ?>"></script>
<!-- App js -->
<script src="<?php echo e(asset('js/app.js')); ?>"></script>

<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>

<script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>


<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>


<script>
    $( function() {
                $( "#sortable" ).sortable({
                revert: true
                });
            });
</script>>


<script>
    window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </scrip>

        <script>
            $(document).ready(function() {
                $('#topnav-hamburger-icon').click(function() {
                    $('body').toggleClass('menu');
                });
            });
</script>

<!-- TinyMCE -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.9/tinymce.min.js"></script>
<script>
    tinymce.init({
                selector: 'textarea',
                plugins: 'advlist autolink lists link image charmap print preview anchor',
                toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
                menubar: true
            });
</script><?php /**PATH E:\LARAVEL\web_cms\resources\views/admin_dashboard_includes/script.blade.php ENDPATH**/ ?>