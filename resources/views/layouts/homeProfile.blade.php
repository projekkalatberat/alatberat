<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
   <!-- style -->
   @stack('prepend-style')
@include('includes.navbar-online.style')
@stack('addon-style')


    <title>@yield('title')</title>
  </head>
  <body>
   
<!-- navbar -->
@include('includes.navbar-online.navbar')




  <!-- content -->
 @yield('content')

    <!-- footer -->

    @include('includes.footer')
    <!--  Separate Popper and Bootstrap JS  -->
   <!-- script -->

   @stack('prepend-script')
@include('includes.includes.navbar-online.style')
@stack('addon-script')
  </body>
</html>
