<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>

    @include('layouts.navbar')

    @yield('content')

  @stack('before-scripts')
  
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  
  @stack('scripts')
  
</body>
</html>