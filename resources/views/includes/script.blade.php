<!-- Vendor -->
<script src="{{ asset('vendor/plugins/js/plugins.min.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('js/theme.js') }}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{ asset('js/views/view.contact.js') }}"></script>

<!-- Demo -->
<script src="{{ asset('js/demos/demo-law-firm-2.js') }}"></script>

<!-- Material Design -->
<script src="{{ asset('js/material-forms.js') }}"></script>

<!-- Theme Custom -->
<script src="{{ asset('js/custom.js') }}"></script>

<!-- Theme Initialization Files -->
<script src="{{ asset('js/theme.init.js') }}"></script>

{{-- spinner --}}
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<!-- Include the Spin.js CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/spin.js/4.0.0/spin.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js">
</script>

<script>
    $(document).ready(function() {

        $('.loadButton').on('click', function() {
            $.LoadingOverlay("show");

            setTimeout(function() {
                $.LoadingOverlay("hide");
            }, 3000);
        });
    });
</script>

<script>
    $(document).ready(function() {
        // $('.dropdown-item').click(function(e){
        //     e.preventDefault();
        //     var selectedLang = $(this).data('lang');
        //     var selectedFlag = $(this).data('flag');

        //     // Update the flag and text
        //     $('#dropdownLanguage img').attr('class', 'flag ' + selectedFlag);
        //     $('#dropdownLanguage img').attr('alt', selectedLang);
        //     $('#dropdownLanguage img').attr('src', 'img/blank.gif'); // Ensure the correct src is set

        //     // Update the text
        //     $('#dropdownLanguage').html('<img src="img/blank.gif" class="flag ' + selectedFlag + '" alt="' + selectedLang + ' custom-font-size-1"> ' + selectedLang + ' <i class="fas fa-angle-down mx-1"></i>');
        // });
    });
</script>
