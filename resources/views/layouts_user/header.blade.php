<div class="sticky-header main-bar-wraper navbar-expand-lg">
    <div class="main-bar clearfix ">
        <div class="container-fluid clearfix">
            <!-- Website Logo -->
            <div class="logo-header mostion logo-dark">
                <a href=""><img src="{{asset('assets_user/images/logo/logo-pfi.png')}}" style="max-width: 115px"
                        alt=""></a>
            </div>

            <div class="logo-header mostion logo-white">
                <a href=""><img src="{{asset('assets_user/images/logo/logo-pfi.png')}}" style="max-width: 115px"
                        alt=""></a>
            </div>

            <!-- Nav Toggle Button -->
            <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <!-- Extra Nav -->
            <div class="extra-nav">
                <div class="extra-cell">
                    <ul>
                        <li>
                            <a href="javascript:void(0);" class="menu-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Extra Nav -->

            <div class="dz-quik-search">
                <form action="#">
                    <input name="search" value="" type="text" class="form-control" placeholder="Enter Your Keyword ...">
                    <span id="quik-search-remove"><i class="ti-close"></i></span>
                </form>
            </div>

            <div class="full-sidenav">
                <div class="flsbg">
                    <span class="bg-wrap">
                        <span></span>
                    </span>
                    <span class="bg-wrap">
                        <span></span>
                    </span>
                    <span class="bg-wrap">
                        <span></span>
                    </span>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="service-list">
                                <ul>
                                    <li>
                                        <i class="la la-phone"></i>
                                        <span>Make A Call</span>
                                        <h4 class="title">+1800-001-658</h4>
                                    </li>
                                    <li>
                                        <i class="la la-clock-o"></i>
                                        <span>Email Address</span>
                                        <h4 class="title">provenforcegroup.id@gmail.com<br>services@gmail.com</h4>
                                    </li>
                                    <li>
                                        <i class="la la-map"></i>
                                        <span>Location</span>
                                        <h4 class="title">Soho Pancoran, Tebet Bar., Kec. Tebet, Kota Jakarta
                                            Selatan, Daerah Khusus Ibukota Jakarta </h4>
                                    </li>
                                </ul>
                            </div>
                            <div class="social-menu">
                                <ul>
                                    <li><a class="fab fa-facebook-f" href="https://www.facebook.com/"></a></li>
                                    <li><a class="fab fa-twitter" href="https://twitter.com/?lang=en"></a></li>
                                    <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/"></a></li>
                                    <li><a class="fab fa-instagram" href="https://www.instagram.com/?hl=en"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h4>About Us</h4>
                            <p align="justify">Since its establishment in 2003 PT Proven Force Indonesia converted
                                opportunities into
                                success story. Our clients
                                praised PT Proven Force Indonesia Team for being able to work well with their
                                organizations and deliver the result.
                                Testimonies from Hitachi, Medco Group, Nippon Indosari Corporindo, Frisian Flag, Bentoel
                                Prima,Yupi Indo jelly gum,
                                among other, proved that the result show in their performance. After few years of
                                serving industries, PT Proven Force
                                Indonesia has proven itself a worthy partner for companies who are looking toward
                                continuous improvement.</p>
                            <a href="{{ route('user.about') }}" class="btn btn-primary">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                <div class="logo-header">
                    <a href=""><img src="{{asset('assets_user/images/logo.png')}}" alt=""></a>
                </div>
                <ul class="nav navbar-nav navbar navbar-left">
                    <li class=""><a href="{{route('user.home')}}"><span>Home</span></a>
                    </li>
                    <li class=""><a href="{{route('user.about')}}"><span>About Us</span></a>
                    </li>
                    <li class="has-mega-menu"><a href="javascript:void(0);">Services</a>
                        <ul class="mega-menu">
                            <li><a href="javascript:void(0);">Consulting</a>
                                <ul>
                                    <li><a href="{{route('user.consulting')}}">About Consulting</a></li>
                                    <li><a href="{{route('user.consulting.organizational')}}">Organizational Enhancement
                                            Program</a></li>
                                    <li><a href="{{route('user.consulting.performance')}}">Performance Management</a>
                                    </li>
                                    <li><a href="{{route('user.consulting.management')}}">Management Control System
                                            Development</a></li>
                                    <li><a href="{{route('user.consulting.lean')}}">Lean Process Development</a></li>
                                    <li><a href="{{route('user.consulting.digital')}}">Digital Transformation
                                            Program</a></li>
                                </ul>
                            </li>
                            <li> <a href="javascript:void(0);">Manpower Outsourcing</a>
                                <ul>
                                    <li><a href="{{route('user.manpower')}}">About Manpower Outsourcing</a></li>
                                    <li><a href="{{route('user.manpower.outsourcing')}}">Outsourcing Services</a></li>

                                </ul>
                            </li>
                            <li> <a href="javascript:void(0);">Training & Development</a>
                                <ul>
                                    <li><a href="{{route('user.training')}}">About Training & Development</a></li>
                                    <li><a href="{{route('user.training.inhouse')}}">In House Training Program</a></li>
                                    <li><a href="{{route('user.training.productivity')}}">Productivity Talent
                                            Managenent</a></li>
                                    <li><a href="{{route('user.training.outbound')}}">Outbound Training</a></li>
                                    <li><a href="{{route('user.training.public')}}">Public Training</a></li>

                                </ul>
                            </li>
                            <li> <a href="javascript:void(0);">Energy Efficiency</a>
                                <ul>
                                    <li><a href="{{route('user.energy')}}">About Energy Efficiency</a></li>
                                    {{-- <li><a href="pricing.html">List Sub Menu</a></li> --}}

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu-down"><a href="javascript:void(0);"><span>Articles</span></a>
                        <ul class="sub-menu">
                            {{-- <li><a href="{{ route('user.news')}}">News</a></li>
                            <li><a href="#">Blog</a></li> --}}
                            <li><a href="{{route('user.news')}}">News</a></li>
                            <li><a href="{{route('user.blog')}}">Blog</a></li>
                        </ul>
                    </li>
                    {{-- <li class=""><a href="#"><span>Gallery</span></a></li>
                    <li class=""><a href="#"><span>Contact</span></a></li> --}}
                    <li class=""><a href="{{route('user.gallery')}}"><span>Gallery</span></a></li>
                    <li class=""><a href="{{route('user.contact')}}"><span>Contact</span></a></li>
                </ul>
                <div class="dz-social-icon">
                    <ul>
                        <li><a class="fab fa-facebook-f" href="https://www.facebook.com/"></a></li>
                        <li><a class="fab fa-twitter" href="https://twitter.com/?lang=en"></a></li>
                        <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/"></a></li>
                        <li><a class="fab fa-instagram" href="https://www.instagram.com/?hl=en"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>