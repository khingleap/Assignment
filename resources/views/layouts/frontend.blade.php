<!DOCTYPE html>
<html lang="en">

<head>
  
  @include ('includes.header')

</head>

<body>

  @include('includes.menu')

  @yield('content')

  @include ('includes.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('includes.script')

</body>

</html>