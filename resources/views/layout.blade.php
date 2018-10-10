<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'My Site')</title>
  </head>
  <body>
      <ul>
      <li><a href="/">Home </a> </li>
      <li><a href="contact">Contact </a> </li>
      <li><a href="about">About Us </a> </li>
    </ul>
    @yield('content')
  </body>
</html>
