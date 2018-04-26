<script src="<?= URL::to('js/app.js') ?>"></script>
<!-- jQuery -->
<script src="<?= asset('js/jquery.min.js') ?>"></script>
<!-- Bootstrap -->
<script src="<?= asset('js/bootstrap.min.js') ?>"></script>
<!-- NProgress -->
<script src="<?= asset('lib/nprogress/nprogress.js') ?>"></script>
<script type="text/javascript" src="<?= URL::to('lib/select2/dist/js/select2.min.js') ?>"></script>
<!-- Custom Theme Scripts -->
<script src="<?= URL::to('js/custom.min.js') ?>"></script>
<!-- Date Time Picker-->
<script type="text/javascript" src="{{URL::to('lib/tinymce/tinymce.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('lib/datetimepicker/js/bootstrap-datetimepicker.js')}}"></script>

<script type="text/javascript" src="{{URL::to('js/backend-custom.js')}}"></script>
@yield('my-script')

</body>
</html>
