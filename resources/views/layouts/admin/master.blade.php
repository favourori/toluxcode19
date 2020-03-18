<!DOCTYPE html>
<html>

    @include('layouts.admin.headmeta')

    <body>
        <div class="wrapper">
            
            @include('layouts.admin.navbar')
            @include('layouts.admin.sidebar')

            <div class="main-panel">
                <div class="content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>

            @include('layouts.admin.footer')

        </div>
        @include('layouts.admin.footmeta')

        @if(Session::has('success'))   
            <script>
            success('Good', "{{Session::get('success')}}")
            </script>
        @endif

        @if(Session::has('error'))
        <script>
            error('Oops!', "{{Session::get('error')}}")
        </script>
        @endif
    </body>
</html>