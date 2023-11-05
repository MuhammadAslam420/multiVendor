<header class="header-area header-style-1 header-style-5 header-height-2" wire:ignore>
    <div class="mobile-promotion">
        <span class="text-light">Grand opening, <strong class="text-light">up to 15%</strong> off all items. Only <strong class="text-light">3 days</strong> left</span>
    </div>
    <div class="header-top header-top-ptb-1 d-none d-lg-block" style="background: #ea270e;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info ">
                        <ul>
                            <li><a class="text-light" href="/about">About Us</a></li>
                            <li><a class="text-light" href="{{route('terms-services')}}">Privacy Policy</a></li>

                            <li><a class="text-light" href="{{route('track-order')}}">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">
                    <div class="text-center">
                        <div id="news-flash" class="d-inline-block">
                            <ul>
                                <li class="text-light">100% Secure delivery without contacting the courier</li>
                                <li class="text-light">Supper Value Deals - Save more with coupons</li>
                                <li class="text-light">Trendy 25silver jewelry, save up 35% off today</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info header-info-right">
                        <ul>
                            <li>
                                <a class="language-dropdown-active text-light" href="#">English </a>
                                {{-- <ul class="language-dropdown">
                                    <li>
                                        <a href="#"><img src="{{asset('assets/images/flag-fr.png')}}" alt="" />Français</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('assets/images/flag-dt.png')}}" alt="" />Deutsch</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('assets/images/flag-ru.png')}}" alt="" />Pусский</a>
                            </li>
                        </ul> --}}
                        </li>
                        <li>
                            <a class="language-dropdown-active text-light" href="#">PKR </a>
                            {{-- <ul class="language-dropdown">
                                    <li>
                                        <a href="#"><img src="{{asset('assets/images/flag-fr.png')}}" alt="" />INR</a>
                        </li>
                        <li>
                            <a href="#"><img src="{{asset('assets/images/flag-dt.png')}}" alt="" />MBP</a>
                        </li>
                        <li>
                            <a href="#"><img src="{{asset('assets/images/flag-ru.png')}}" alt="" />EU</a>
                        </li>
                        </ul> --}}
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1">
                    @php
                    $setting=DB::table('home_page_settings')->find(1);
                    @endphp
                    @if($setting)
                    <a href="/"><img src="{{asset('assets/images')}}/{{$setting->header_logo}}" alt="logo" /></a>
                    @else
                    <a href="/"><img src="{{asset('assets/images/default.svg')}}" alt="logo" /></a>
                    @endif

                </div>
                <div class="header-right">
                    @livewire('header-search-component')
                    <div class="header-action-right ml-1">
                        <div class="header-action-2">
                            @livewire('compare-count-component')
                            @livewire('wish-list-count-component')
                            @livewire('cart-count-component')
                            @if(Route::has('login'))
                            @Auth
                            @if(Auth::user()->atype === 'USR')
                            <div class="header-action-icon-2">
                                <a href="#">
                                    <img class="svgInject" alt="Nest" src="{{asset('assets/images/icon-user.')}}svg" />
                                </a>
                                <a href="#"><span class="lable ml-0">{{Auth::user()->name}}</span></a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                    <ul>
                                        <li>
                                            <a href="{{route('my.dashboard')}}"><i class="fa fa-user mr-10"></i>My Account</a>
                                        </li>
                                        <li>
                                            <a href="{{route('my.orders')}}"><i class="fa fa-shopping-bag mr-10"></i>My Orders</a>
                                        </li>
                                        <li><a href="{{route('track-order')}}"><i class="fa fa-shopping-cart mr-10">Track Your Order</i></a></li>
                                        <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                        <form id="logout-form" method="POST" action="{{route('logout')}}">
                                            @csrf
                                        </form>

                                    </ul>
                                </div>
                            </div>
                            @elseif(Auth::user()->atype === 'ADM')
                            <div class="header-action-icon-2">
                                <a href="#">
                                    <img class="svgInject" alt="Nest" src="{{asset('assets/images/icon-user.')}}svg" />
                                </a>
                                <a href="#"><span class="lable ml-0">{{Auth::user()->name}}</span></a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                    <ul>
                                        <li>
                                            <a href="{{route('admin.dashboard')}}"><i class="fa fa-user mr-10"></i>My Account</a>
                                        </li>

                                        <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                        <form id="logout-form" method="POST" action="{{route('logout')}}">
                                            @csrf
                                        </form>

                                    </ul>
                                </div>
                            </div>
                            @elseif(Auth::user()->atype === "VEN")
                            <div class="header-action-icon-2">
                                <a href="#">
                                    <img class="svgInject" alt="Nest" src="{{asset('assets/images/icon-user.')}}svg" />
                                </a>
                                <a href="#"><span class="lable ml-0">{{Auth::user()->name}}</span></a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                    <ul>
                                        <li>
                                            <a href="{{route('vendor.dashboard')}}"><i class="fa fa-user mr-10"></i>Vendor Account</a>
                                        </li>
                                        <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                        <form id="logout-form" method="POST" action="{{route('logout')}}">
                                            @csrf
                                        </form>

                                    </ul>
                                </div>
                            </div>
                            @endif
                            @else
                            <div class="header-action-icon-2">
                                <a href="page-account.html">
                                    <img class="svgInject" alt="Nest" src="{{asset('assets/images/icon-user.')}}svg" />
                                </a>
                                <a href="{{route('login')}}"><span class="lable ml-0">login/Register</span></a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                    <ul>
                                        <li>
                                            <a href="{{route('login')}}"><i class="fa fa-user mr-10"></i>Login</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="index.html"><img src="{{asset('assets/images/logo.svg')}}" alt="logo" /></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    @livewire('trending-categories-component')
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                        @livewire('menu-component')
                    </div>
                </div>
                <div class="hotline d-none d-lg-flex">
                    <img src="{{asset('assets/images/icon-headphone-white.svg')}}" alt="hotline" />
                    @if($setting)
                    @if($setting->hot_line)
                    <p>{{ $setting->hot_line }}<span>24/7 Support Center</span></p>
                    @else
                    <p>1900 - 888<span>24/7 Support Center</span></p>
                    @endif
                    @else
                    <p>1900 - 888<span>24/7 Support Center</span></p>
                    @endif
                </div>
                <div class="header-action-icon-2 d-block d-lg-none">
                    <div class="burger-icon burger-icon-white">
                        <span class="burger-icon-top"></span>
                        <span class="burger-icon-mid"></span>
                        <span class="burger-icon-bottom"></span>
                    </div>
                </div>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            <a href="shop-wishlist.html">
                                <img alt="Nest" src="{{asset('assets/images/icon-heart.svg')}}" />
                                @if(Cart::instance('wishlist')->count() > 0)
                                <span class="pro-count white">{{ Cart::instance('wishlist')->count()}}</span>
                                @else
                                <span class="pro-count white">0</span>
                                @endif
                            </a>
                        </div>
                        <div class="header-action-icon-2">
                            <a class="mini-cart-icon" href="#">
                                <img alt="Nest" src="{{asset('assets/images/icon-cart.svg')}}" />
                                @if(Cart::instance('cart')->count() > 0)
                                <span class="pro-count white">{{ Cart::instance('cart')->count() }}</span>
                                @else
                                <span class="pro-count white">0</span>
                                @endif
                            </a>
                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <ul>
                                    @if(Cart::instance('cart')->count() > 0)
                                    @foreach(Cart::instance('cart')->content() as $item)
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href=" {{ route('product-detail',['id'=>$item->id]) }}"><img alt="Nest" src="{{asset('assets/images')}}/{{ $item->model->front_image }}" /></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="{{ route('product-detail',['id'=>$item->id]) }}">{{ $item->name }}</a></h4>
                                            <h3><span>{{ $item->qty }} × </span>{{ $item->price }}</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fa fa-angle-down"></i></a>
                                        </div>
                                    </li>
                                    @endforeach
                                    @endif

                                </ul>
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>SubTotal <span>{{ Cart::subtotal() }}</span></h4>
                                        <h4>Total <span>{{ Cart::total() }}</span></h4>
                                    </div>
                                    <div class="shopping-cart-button">
                                        <a href="/cart">View cart</a>
                                        <a href="/checkout">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
