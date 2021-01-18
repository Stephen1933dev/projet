<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>Mash Able - Bootstrap 4 Admin Template</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    
    

</head>

<body class="">

   <!-- mon fichier contenant le header -->   
    @include('layouts.partials._pre-loader')

    <!-- mon fichier contenant le header -->
    @include('layouts.partials._header')
    
    <!-- mon fichier contenant le menu enlever -->

    @include('layouts.partials._nav')

  

    <!-- milieu enlever (section ou contenue) --> 

    @yield('content')

    <!-- mon fichier contenant le footer  -->
    
    @include('layouts.partials._footer')
</body>

</html>