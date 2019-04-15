$(document).ready(function () {
    $('#btn_submit_reg').attr('disabled', true);

    $('#password-repeat').keyup(function () {
        let pass_repeat = $('#password-repeat').val();
        let password = $('#password').val();
        if (pass_repeat === password) {
            $('#btn_submit_reg').removeAttr('disabled');
        }else{
            $('#btn_submit_reg').attr('disabled', true);
        }
    });

    console.log(reset);
});
