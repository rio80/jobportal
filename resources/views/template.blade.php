<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ 'img/apple-touch-icon.png' }}">
    <link rel="icon" type="image/png" href="{{ 'img/favicon.ico' }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        Jobseekers
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/floating-labels.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/sidebar.css') }}" rel="stylesheet" />



    <script src="{{ URL::asset('js/core/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('js/custom.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('js/sweetalert.min.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://select2.github.io/select2-bootstrap-theme/css/select2-bootstrap.css">

</head>
@yield('navbar')
@yield('page')

@include('sweet::alert')
<footer class="footer footer-default">
    <div class="container">
        <nav>
            <ul>
                <li><a href="javascript:void(0);">Tentang kami</a></li>
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            </ul>
        </nav>
        <div class="copyright" id="copyright">
            &copy;
            <script>
                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))

            </script> Jobseekers Company, Designed by
            <a href="javascript:void(0);" target="_blank">tDesigner</a>. Coded by
            <a href="javascript:void(0);" target="_blank">tCoder</a>.
        </div>
    </div>
</footer>

{{-- </div> --}}

<script src="{{ URL::asset('js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/plugins/bootstrap-switch.js') }}"></script>
<script src="{{ URL::asset('js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/plugins/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/now-ui-kit.js?v=1.2.0') }}" type="text/javascript"></script>
</body>

</html>
