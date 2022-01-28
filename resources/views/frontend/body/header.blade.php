<!--=====================================-->
<!--=            Header Start           =-->
<!--=====================================-->
<header class="header">
    <style>
        .hideLogo{
            display: none;
        }
        .divRemove{
            display: none;
        }
    </style>
    <div id="header-topbar" class="header-topbar-layout2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2">
                    <div class="logo-area2">
                        <a href="index.html" class="temp-logo">
                            @isset($companyInfo->logo)
                                <img src="{{asset('upload/logo/' .$companyInfo->logo)}}" alt="logo" class="img-fluid" width="180" height="45">
                             @endisset     
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-flex justify-content-center">
                    <div class="topbar-left topbar-left2">
                        <p class="item-paragraph item-paragraph2">Are you ready to grow up your business?</p>
                        <div class="header-button header-button2">
                            <a href="{{route('contact')}}">Contact With Us <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 d-flex justify-content-end">
                    <div class="topbar-right2">
                        <ul>
                            <li>
                                <div class="media">
                                    <div class="item-icon">
                                        <i class="far fa-comments"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="item-label">Hotline Number</div>
                                        <div class="item-number">{{isset($companyInfo->mobile)}}</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="header-right-button">
                                    <a href="#" class="header-btn">Find An Advicer</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="rt-sticky-placeholder"></div>
    <div id="header-menu" class="header-menu menu-layout1">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-2 col-lg-2 divRemove showDiv">
                    <div class="logo-area">
                        <a href="{{url('/')}}" class="temp-logo">
                            @isset($companyInfo->logo)
                            <img src="{{asset('upload/logo/' .$companyInfo->logo)}}" alt="logo" class="img-fluid" width="180" height="45">
                            @endisset 
                        </a>
                    </div>
                </div>
                <div class="col-xl-11 col-lg-11 d-flex addCol">
                    <nav id="dropdown" class="template-main-menu">
                        <ul>
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <a href="#">Services</a>
                            </li>
                            <li>
                                <a href="{{route('projects')}}">Projects</a>
                            </li>
                            <li>
                                <a href="{{route('pricing')}}">Price</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="{{route('our_team')}}">Our Team</a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-1 col-lg-1 d-flex justify-content-end">
                    <div class="header-action-layout1">
                        <ul>
                            <li class="search-btn">
                                <a href="#header-search" title="Search">
                                    <i class="fas fa-search"></i>
                                </a>
                            </li>
                            <li class="offcanvas-menu-trigger-wrap">
                                <button type="button" class="offcanvas-menu-btn menu-status-open">
                                    <span class="btn-icon-wrap">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>