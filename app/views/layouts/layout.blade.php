<html>
    <body>
        <h1>Laravel Quickstart</h1>
          @if (Session::has('alert') or Session::has('error'))
            <div class="alert alert-info">{{Session::get('alert')}}</div>
            <div class="alert alert-error">{{Session::get('error')}}</div>
          @endif

          @yield('content')
    </body>
</html>