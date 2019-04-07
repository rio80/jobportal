<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .kotak{
            position:fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ff5151;
            color: #000;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            padding: 6px 8px 6px 8px;
        }
        a {
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="kotak">
        Terima kasih sudah registrasi<hr>
        Dengan diterimanya email ini, maka anda sudah terdaftar di system kami<br>
        Untuk bisa login, maka anda harus aktivasi akun terlebih dahulu<br>
        Berikut link untuk aktivasi :
        <a href="{{  route('verify', ['token_verifikasi' => $registrasi->token_verifikasi ])}}">
            Verify Email</a>
        <hr>
       <a href="www.jobportal.com" target="_blank">www.jobportal.com</a>
    </div>
</body>
</html>
