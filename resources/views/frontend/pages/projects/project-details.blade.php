@extends('frontend.master')
@section('content')

    <!--=====================================-->
    <!--=            Breadcrumb Start       =-->
    <!--=====================================-->
    <section class="breadcrumb-wrap" style="background-image: url({{asset('assets/img/breadcrumb1.png')}});">
        <div class="breadcrumb-img1">
            <img src="{{asset('assets/img/figure/figure79.png')}}" alt="figure" width="223" height="109">
        </div>
        <div class="breadcrumb-img2">
            <img src="{{asset('assets/img/figure/figure78.png')}}" alt="figure" width="185" height="56">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-box">
                        <h1 class="page-title"></h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="portfolio1.html">Projects</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Projects-Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!--=====================================-->
    <!--=            Portfolio Start        =-->
    <!--=====================================-->
    <section class="single-portfolio-wrap1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-portfolio-box1">
                        <div class="item-img">
                            <img src="{{asset('assets/img/portfolio/portfolio18.jpg')}}" alt="portfolio" width="1140" height="581">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            Portfolio Start        =-->
    <!--=====================================-->
    <section class="single-portfolio-wrap2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-portfolio-box2">
                        <p class="section-subtitle">{{$project->projectCategory->name}}</p>
                        <h2 class="section-title">{{$project->title}}</h2>
                        <div class="section-subtitle2">Dorem Ipsum has been the industry's standard dummy text ever since the unknown printer took a galley of type and scrambled.</div>
                        <p>Dorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived follow not only five c Lorem Ipsum has been the industry's standard dummy text ever sincewhen anareaprinter took a galley of type and scrambled it to make.</p>
                        <h3 class="section-title2">Project Target</h3>
                        <p>Dorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived follow not only five c Lorem Ipsum has been the industry.</p>
                        <ul class="portfolio-list">
                            <li><i class="fas fa-circle"></i>Acepteur sintas haecat sed non duiy</li>
                            <li><i class="fas fa-circle"></i>Proident sunt culpa sed ipsum tempor sed</li>
                            <li><i class="fas fa-circle"></i>Ut enim ad minim veniam quis nostrud exercitation</li>
                            <li><i class="fas fa-circle"></i>Laboris nisi ut aliquip exy ea consequat duis</li>
                        </ul>
                        <p>Dorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived follow not only five c Lorem Ipsum has been the industry.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget widget-details">
                        <div class="item-title">Project Details</div>
                        <ul class="project-list">
                            <li>Client Name:</li>
                            <li class="project-details-list">PSDBOSS Agency</li>
                            <li>Categoery:</li>
                            <li class="project-details-list">Corporate Finance</li>
                            <li>Start Date:</li>
                            <li class="project-details-list">10/08/2020</li>
                            <li>End Date:</li>
                            <li class="project-details-list">10/12/20</li>
                            <li>Website:</li>
                            <li class="project-details-list">www.psdboss.com</li>
                            <li>Share:</li>
                            <li class="project-social">
                                <ul>
                                    <li><a href="#" class="fb"><i class="fab fa-facebook-square"></i></a></li>
                                    <li><a href="#" class="twit"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="linkin"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" class="pint"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#" class="skype"><i class="fab fa-skype"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    <!--=====================================-->
    <!--=            Banner Start           =-->
    <!--=====================================-->
    <section class="banner-wrap1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-box1">
                        <div class="item-img">
                            <img src="{{asset('assets/img/blog/blog39.jpg') }}"" alt="blog" width="586" height="195">
                        </div>
                        <div class="bannar-details">
                            <h3 class="heading-title">Need Any Website Help!</h3>
                            <div class="contact-box2">
                                <div class="item-icon-box">
                                    <div class="item-icon"><i class="far fa-comments"></i></div>   
                                    <div class="banner-content">
                                        <div class="item-hotline">Hotline</div>
                                        <div class="item-number">{{$companyInfo->mobile}}</div>
                                    </div>
                                </div>
                                <div class="item-icon-box item-icon-box2">
                                    <div class="item-icon"><i class="far fa-envelope"></i></div>   
                                    <div class="banner-content">
                                        <div class="item-hotline">Send Us Email</div>
                                        <div class="item-number">{{$companyInfo->email}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            Project Start          =-->
    <!--=====================================-->
    <section class="project-wrap-layout1 project-wrap-layout2">
        <div class="container">
            <p class="section-subtitle section-subtitle-sm">Portfolio</p>
            <div class="row">
                <div class="col-lg-4">
                    <div class="project-box1">
                        <h2 class="section-title">More Related Projects We Done</h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="project-box2">
                        <p>Bookan unknown printer took a galley of type and scrambled make It has survived not only five centuries.Lorem ipsum dolor sitam consectetur adipiscg sedo eiusmod tempor incididuntlabore dolor ipsum dolor sit amet, consectetur.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="portfolio-box1">
                        <div class="item-img">
                            <a href="#"><img src="img/blog/blog5.jpg" alt="blog" width="570" height="650"></a>
                            <div class="item-content">
                                <div class="item-number">01</div>
                                <p class="heading-subtitle">Business Strategy</p>
                                <h3 class="heading-title">Investment Planning</h3>
                                <p class="portfolio-para">Bohen an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                <div class="item-button">
                                    <a href="portfolio2.html" class="item-btn">+ <span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="portfolio-box1">
                        <div class="item-img">
                            <a href="#"><img src="img/blog/blog6.jpg" alt="blog" width="570" height="650"></a>
                            <div class="item-content">
                                <div class="item-number">02</div>
                                <p class="heading-subtitle">Business Strategy</p>
                                <h3 class="heading-title">Investment Planning</h3>
                                <p class="portfolio-para">Bohen an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                <div class="item-button">
                                    <a href="portfolio2.html" class="item-btn">+ <span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="portfolio-box1">
                        <div class="item-img">
                            <a href="#"><img src="img/blog/blog7.jpg" alt="blog" width="570" height="650"></a>
                            <div class="item-content">
                                <div class="item-number">03</div>
                                <p class="heading-subtitle">Business Strategy</p>
                                <h3 class="heading-title">Investment Planning</h3>
                                <p class="portfolio-para">Bohen an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                <div class="item-button">
                                    <a href="portfolio2.html" class="item-btn">+ <span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="portfolio-box1">
                        <div class="item-img">
                            <a href="#"><img src="img/blog/blog8.jpg" alt="blog" width="570" height="650"></a>
                            <div class="item-content">
                                <div class="item-number">04</div>
                                <p class="heading-subtitle">Business Strategy</p>
                                <h3 class="heading-title">Investment Planning</h3>
                                <p class="portfolio-para">Bohen an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                <div class="item-button">
                                    <a href="portfolio2.html" class="item-btn">+ <span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
@endsection