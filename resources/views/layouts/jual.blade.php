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
@include('includes.jual.style')
@stack('addon-style')


    <title>@yield('title')</title>
  </head>
  <body>
   
<!-- navbar -->
@include('includes.navbar')




  <!-- content -->
 @yield('content')

@include('includes.footer')
    <!-- footer -->

    <!--  Separate Popper and Bootstrap JS  -->
   <!-- script -->

   @stack('prepend-script')
@include('includes.jual.script')
@stack('addon-script')
  </body>
</html>
