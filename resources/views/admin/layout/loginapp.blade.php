<!DOCTYPE html>
<html lang="en">
<head>
<title>{{ $title }}</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="#">
<meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="#">

<link rel="icon" href="https://colorlib.com//polygon/adminty/files/assets/images/favicon.ico" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="{{ url('assets/bower_components/bootstrap/css/bootstrap.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{ url('assets/icon/themify-icons/themify-icons.css') }}">

<link rel="stylesheet" type="text/css" href="{{ url('assets/icon/icofont/css/icofont.css') }}">

<link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css') }}">
</head>
<body class="fix-menu"> 
    @yield('content')

    
<script  src="{{ url('assets/bower_components/jquery/js/jquery-3.1.1.min.js') }}"></script>
<script  src="{{ url('assets/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
<script  src="{{ url('assets/bower_components/popper.js/js/popper.min.js') }}"></script>
<script  src="{{ url('assets/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>

<script  src="{{ url('assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>

<script  src="{{ url('assets/bower_components/modernizr/js/modernizr.js') }}"></script>
<script  src="{{ url('assets/bower_components/modernizr/js/css-scrollbars.js') }}"></script>

<script  src="{{ url('assets/bower_components/i18next/js/i18next.min.js') }}"></script>
<script  src="{{ url('assets/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js') }}"></script>
<script  src="{{ url('assets/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js') }}"></script>
<script  src="{{ url('assets/bower_components/jquery-i18next/js/jquery-i18next.min.js') }}"></script>
<script  src="{{ url('assets/js/common-pages.js') }}"></script>

<script src="{{ url('assets/js/rocket-loader.min.js') }}" data-cf-settings="33cc65912afb604b28c6bcf5-|49" defer=""></script></body>
    @if(!@empty($js))
      @foreach($js as $value)
              <script src="{{ url('js/'.$value) }}" type="text/javascript"></script>
      @endforeach
    @endif  
    <script>
        jQuery(document).ready(function() {

            @if (!empty($funinit))
                @foreach ($funinit as $value)
                    {{ $value }}
                @endforeach
            @endif
        });
    </script>
</html>
