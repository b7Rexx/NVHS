$(document).ready(function () {
    tinymce.init({
        selector: '#details',
        height: 200
    })
});

//DATE TIME PICKER
$('.form_datetime').datetimepicker({
    weekStart: 1,
    todayBtn: 1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    forceParse: 0,
    showMeridian: 1
});
