<!-- jQuery -->
<script src="<?= asset('js/jquery.min.js') ?>"></script>
<!-- Bootstrap -->
<script src="<?= asset('js/bootstrap.min.js') ?>"></script>

<!-- NProgress -->
<script src="<?= asset('lib/nprogress/nprogress.js') ?>"></script>
<script type="text/javascript" src="<?= URL::to('lib/select2/dist/js/select2.min.js') ?>"></script>
<script type="text/javascript" src="<?= URL::to('lib/bootstrap-datetimepicker/moment.js') ?>"></script>
<script type="text/javascript" src="<?= URL::to('lib/bootstrap-datetimepicker/datetimepicker.min.js') ?>"></script>
<!-- Custom Theme Scripts -->
<script src="<?= URL::to('js/custom.min.js') ?>"></script>
<script src="<?= URL::to('js/app.js') ?>"></script>
<script type="text/javascript" src="{{URL::to('lib/tinymce/tinymce.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        tinymce.init({
            selector: '#details',
            height: 200
        })
    })
</script>
@yield('my-script')
</body>
</html>
