<header class="stick style1 w-100">
                <div class="topbar bg-color1 d-flex flex-wrap justify-content-center w-100">
                    <ul class="topbar-info-list mb-0 list-unstyled d-inline-flex">
                        <li><i class="thm-clr flaticon-sun"></i>Sunrise At: <span class="thm-clr">5:05am</span></li>
                        <li><i class="thm-clr flaticon-moon"></i>Sunset At: <span class="thm-clr">7:14pm</span></li>
                    </ul>
                    <div class="social-links d-inline-flex">
                        <a href="https://twitter.com/" title="Twtiiter" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.youtube.com/" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.linkedin.com/" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div><!-- Topbar -->
                <div class="logo-menu-wrap d-flex flex-wrap justify-content-between w-100">
                    <div class="logo position-relative thm-layer opc7 back-blend-multiply thm-bg" style="background-image: url(assets/images/pattern-bg.jpg);"><h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="{{asset('frontend/assets/images/logo.png')}}" alt="Logo" srcset="{{asset('frontend/assets/images/retina-logo.png')}}"></a></h1></div><!-- Logo -->
                    <nav class="d-flex flex-wrap align-items-center justify-content-center">
                        <div class="header-left">
                            <ul class="mb-0 list-unstyled d-inline-flex">
                                <li><a href="{{route('home')}}">{{__('vocab.home')}}</a>

                                </li>


                                <li><a href="{{route('about')}}" title="">{{__('vocab.about')}}</a></li>
                                <li><a href="{{route('requests')}}" title="">{{__('vocab.mosque_request')}}</a></li>
                                <li><a href="{{route('urgent.donations')}}" title="">{{__('vocab.urgent_donation')}}</a></li>
                                <li><a href="{{route('contact')}}" title="">{{__('vocab.contact')}}</a></li>
                                @guest
                                <li class="menu-item-has-children"><a href="javascript:void(0);" title="">  {{ __('vocab.login') }} </a>
                                    <ul class="mb-0 list-unstyled">
                                        <li><a href="{{ route('login') }}" title="">  {{ __('vocab.login_as_donator') }}</a></li>
                                        <li><a  href="{{ route('serviceprovider.login') }}" title="">  {{ __('vocab.login_as_serviceprovider') }}</a></li>
                                        <li><a  href="{{ route('masjid.login') }}" title="">  {{ __('vocab.login_as_imam_masjid') }}</a></li>
                                    </ul>
                                </li>
                                @if (Route::has('register'))
                                <li class="menu-item-has-children"><a href="javascript:void(0);" title="">{{ __('vocab.register') }}</a>
                                    <ul class="mb-0 list-unstyled">
                                    <li><a href="{{ route('register') }}" title="">Register As Donator</a></li>
                                        <li><a href="{{ route('serviceprovider.register') }}" title="">Register As Service Provider</a></li>
                                        <li><a href="{{ route('masjid.register') }}" title="">Register As Imam Masjid</a></li>
                                    </ul>
                                </li>
                                @endif
                        @else
                             <li class="menu-item-has-children"><a href="#" title="">{{Auth::user()->name}}</a>
                                        <ul class="mb-0 list-unstyled">

                                            <li><a href="{{route('dashboard')}}" title="">{{__('Dashboard')}}</a></li>
                                                  <li><a href="{{route('profile')}}" title="">{{__('Profile')}}</a></li>
                                                        <li ><a href="{{ route('logout') }}" title=""  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>
                                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                                     </li>


                                        </ul>
                                    </li>

                        @endguest
                        <li class="menu-item-has-children"><a href="javascript:void(0);" title="">{{ Config::get('languages')[App::getLocale()] }}</a>
                                        <ul class="mb-0 list-unstyled">
                                             @foreach (Config::get('languages') as $lang => $language)
                                               @if ($lang != App::getLocale())
                                            <li><a href="{{ route('lang.switch', $lang) }}" title="">{{$language}}</a></li>
                                           @endif
                                            @endforeach
                                        </ul>
                                    </li>
                            </ul>
                        </div>
                        <div class="header-right">
                            <a class="thm-btn thm-bg" href="donation-detail.html" title="">{{ __('vocab.make_donation') }}<span></span><span></span><span></span><span></span></a>
                        </div>
                    </nav>
                </div><!-- Logo Menu Wrap -->
            </header>
