   <script src="{{asset('js/jquery-min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- <script src="{{asset('js/color-switcher.js')}}"></script> -->
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/wow.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/nivo-lightbox.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <!-- <script src="{{asset('js/form-validator.min.js')}}"></script> -->
    
    <script src="{{asset('js/summernote.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@1.5.4/src/loadingoverlay.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@1.5.4/extras/loadingoverlay_progress/loadingoverlay_progress.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script src="{{asset('js/iziToast.js')}}"></script>
    <script src="{{asset('js/iziwrapper.js')}}"></script>
    <script src="{{asset('js/auth.js')}}?version={{md5(date('his'))}}"></script>

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