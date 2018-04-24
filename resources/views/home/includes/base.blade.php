<!DOCTYPE html>
<html>
  @include('home.includes.head')
  <body id="body">
    @include('home.includes.header')
    @section('main-content')
    @show
    @include('home.includes.body')
    @include('home.includes.footer')
  </body>
</html>
