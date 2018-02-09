<!DOCTYPE html>
<html lang="en">
  @include('includes.head')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('includes.sidebar')

        @include('includes.headbar')

        <div class="right_col" role="main">
          @yield('content')
        </div>

        <footer>
          @include('includes.footer')
        </footer>
      </div>
    </div>

    @include('includes.bottomscript')
  </body>
</html>
