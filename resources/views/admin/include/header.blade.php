<head>
<title>Adminty - Premium Admin Template by Colorlib </title>
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

<link rel="stylesheet" type="text/css" href="{{ url('assets/icon/feather/css/feather.css') }}">

<!--<link rel="stylesheet" type="text/css" href="{{ url('assets/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">-->

<link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('assets/css/jquery.mCustomScrollbar.css') }}">
    
    @if (!empty($plugincss)) 
    @foreach ($plugincss as $value) 
    @if(!empty($value))
    <link rel="stylesheet" href="{{ url('assets/bower_components/datatables.net-bs4/'.$value) }}">
    @endif
    @endforeach
    @endif

  

</head>