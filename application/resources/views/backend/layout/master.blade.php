<!DOCTYPE html>
<html lang="en">
  @include('backend.includes.head')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('backend.includes.sidebar')

        @include('backend.includes.headbar')

        <div class="right_col" role="main">
          @yield('content')
        </div>

        <footer>
          @include('backend.includes.footer')
        </footer>
      </div>
    </div>

    @include('backend.includes.bottomscript')
  </body>
</html>
