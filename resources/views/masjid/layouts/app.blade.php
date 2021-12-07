<!DOCTYPE html>
<html lang="en">

@include('masjid.layouts.partials.head')

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        @include('masjid.layouts.partials.header')
        <!-- END HEADER DESKTOP-->
        @include('masjid.layouts.partials.sidebar')
        <!-- HEADER MOBILE-->
      
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
        @yield('content')
        </div>

</div>



</body>
@include('masjid.layouts.partials.footer')
</html>
<!-- end document-->
