<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from preview.uideck.com/items/classially/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Jun 2018 15:47:09 GMT -->
    @include('layouts.user.headmeta')

    <body>
        @include('layouts.user.header')
        
        @yield('content')

        <div id="content" class="section-padding">
        <div class="container">
            <div class="row">
                @include('layouts.user.sidebar')
                @yield('dashboard-space')
            </div>
        </div>
    </div>


        @include('layouts.user.footer')

        @include('layouts.user.footmeta')
    </body>

</html>