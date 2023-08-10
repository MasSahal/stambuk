<!-- Plugin js for this page -->

{{-- <script src="{{ asset('ui') }}/vendors/jquery-bar-rating/jquery.barrating.min.js"></script><!-- container-scroller --> --}}
<!-- plugins:js -->
<script src="{{ asset('ui') }}/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->

<script src="{{ asset('ui') }}/vendors/chart.js/Chart.min.js"></script>
<script src="{{ asset('ui') }}/vendors/flot/jquery.flot.js"></script>
<script src="{{ asset('ui') }}/vendors/flot/jquery.flot.resize.js"></script>
<script src="{{ asset('ui') }}/vendors/flot/jquery.flot.categories.js"></script>
<script src="{{ asset('ui') }}/vendors/flot/jquery.flot.fillbetween.js"></script>
<script src="{{ asset('ui') }}/vendors/flot/jquery.flot.stack.js"></script>
<script src="{{ asset('ui') }}/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('ui') }}/js/off-canvas.js"></script>
{{-- <script src="{{ asset('ui') }}/js/hoverable-collapse.js"></script> --}}
<script src="{{ asset('ui') }}/js/misc.js"></script>
<script src="{{ asset('ui') }}/js/settings.js"></script>
<script src="{{ asset('ui') }}/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
{{-- <script src="{{ asset('ui') }}/js/dashboard.js"></script> --}}
<script src="{{ asset('ui') }}/vendors/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('ui') }}/vendors/datatables/dataTables.bootstrap4.min.js"></script>
<script>
    $(function() {
        $('.table').DataTable();
    })
</script>
<script>
    $(function() {
        $('#table').DataTable();
    })
</script>
<script src="{{ asset('ui') }}/vendors/select2/select2.min.js"></script>
<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
