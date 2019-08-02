<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="header">
      @yield('partials/header')
    </div>
      @section ('content')
    <div class="footer">
      @yield('partials/footer')
    </div>
  </body>
</html>
