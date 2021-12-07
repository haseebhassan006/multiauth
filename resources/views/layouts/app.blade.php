
<!DOCTYPE html>
@if (App::getLocale() == 'ur')
<html lang="ur" dir="rtl">
@else
<html lang="en" dir="ltr">
@endif
  @include('layouts.partials.head')
    <body>
        <main>
            <div id="preloader">
                <div class="preloader-inner">
                    <i class="preloader-icon thm-clr flaticon-kaaba"></i>
                </div>
            </div><!-- Page Loader -->
            @include('layouts.partials.header')
          <!-- Header -->
          @include('layouts.partials.navbar')
          <!-- Sticky Menu -->
           <!-- Responsive Header -->





        @yield('content')


          <!-- Footer -->
          <section>
                <div class="w-100 pt-90 pb-235 position-relative">
                    <img class="sec-botm-rgt-mckp img-fluid position-absolute" src="{{asset('frontend/assets/images/sec-botm-mckp.png')}}" alt="Sec Bottom Mockup">

                </div>
            </section>
            <div class="bottom-bar dark-bg2 text-center w-100">
                <p class="mb-0"><a href="index.html" title="Home">Maktab</a> - Copyright 2020. Design by <a href="https://themeforest.net/user/nauthemes/portfolio" title="Nauthemes" target="_blank">Nauthemes</a></p>
            </div><!-- Bottom Bar -->
        </main><!-- Main Wrapper -->
        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
    </body>
</html>
