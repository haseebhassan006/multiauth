<header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="{{asset('assets/admin/images/icon/logo-white.png')}}" alt="CoolAdmin" />
                        </a>
                    </div>
                    @guest

                    @else
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="{{route('masjid.dashboard')}}">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="bot-line"></span>
                                </a>

                            </li>

                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-copy"></i>
                                    <span class="bot-line"></span>Requests</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="">Your Requests</a>
                                    </li>
                                    <li>
                                        <a href="">Create Request</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-desktop"></i>
                                    <span class="bot-line"></span>Messages</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="button.html">Create Message</a>
                                    </li>
                                    <li>
                                        <a href="badge.html">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="tab.html">Outbox</a>
                                    </li>



                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-desktop"></i>
                                    <span class="bot-line"></span>{{ Config::get('languages')[App::getLocale()] }}</a>
                                <ul class="header3-sub-list list-unstyled">
                                    @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                                                        <li><a href="{{ route('lang.switch', $lang) }}" title="">{{$language}}</a></li>
                                                                       @endif
                                @endforeach



                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="header-button-item has-noti js-item-menu">
                            <i class="zmdi zmdi-notifications"></i>
                            <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                                <div class="notifi__title">
                                    <p>You have 3 Notifications</p>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a email notification</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c2 img-cir img-40">
                                        <i class="zmdi zmdi-account-box"></i>
                                    </div>
                                    <div class="content">
                                        <p>Your account has been blocked</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c3 img-cir img-40">
                                        <i class="zmdi zmdi-file-text"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a new file</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__footer">
                                    <a href="#">All notifications</a>
                                </div>
                            </div>
                        </div>
                        <div class="header-button-item js-item-menu">
                            <i class="zmdi zmdi-settings"></i>
                            <div class="setting-dropdown js-dropdown">
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>


                                </div>

                            </div>
                        </div>
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="{{asset('assets/admin/images/icon/avatar-01.jpg')}}" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="{{asset('assets/admin/images/icon/avatar-01.jpg')}}" alt="John Doe" />
                                            </a>
                                        </div>
                                        <div class="content">
                                        @if(Auth::user())
                                            <h5 class="name">
                                                <a href="#"> {{ Auth::user()->name }} </a>
                                            </h5>
                                            <span class="email"> {{ Auth::user()->email}} </span>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Profile</a>
                                        </div>


                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="{ route('masjid.logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="zmdi zmdi-power"></i>  {{ __('Logout') }}</a>

                                            <form id="logout-form" action="{{ route('masjid.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endguest
                </div>
            </div>
        </header>
