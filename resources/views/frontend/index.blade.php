@extends('frontend.master')
@section('content')


@include('frontend.body.slider')


<!--=====================================-->
<!--=            Banner Start           =-->
<!--=====================================-->
<section class="banner-wrap2">
    <div class="container">
        <div class="background-image1">
            <img src="{{asset('assets/img/figure/figure69.png')}}" alt="banner" width="183" height="137">
        </div>
        <div class="background-image2">
            <img src="{{asset('assets/img/figure/figure70.png')}}" alt="banner" width="404" height="180">
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-box2">
                    <div class="media">
                        <h2 class="section-title">Need Any Business Consulting Facilities? Contact With Us </h2>
                        <div class="media-body">
                            <div class="item-button">
                                <a href="about.html" class="item-btn">Request a Call Back<i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=====================================-->
<!--=            Financo Start          =-->
<!--=====================================-->
<section class="financo-activities-wrap2">
    <div class="background-shape69">
        <img src="{{asset('assets/img/figure/figure68.png')}}" alt="figure" width="1920" height="267">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="financo-activities-box2">
                    <div class="item-img">
                        <a href="#"><img src="{{asset('assets/img/financo/financo1.jpg')}}" alt="financo" width="510" height="360"></a>
                    </div>
                    <div class="financo-box-layout1">
                        <div class="financo-layout1">
                            <div class="financo-img">
                                <img src="{{asset('assets/img/figure/figure65.png')}}" alt="figure" width="44" height="46">
                            </div>
                            <h2 class="heading-title"><a href="service2.html">Business Consulting</a></h2>
                            <p>Finance when unknown printer took a galley of type.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="financo-activities-box2">
                    <div class="item-img">
                        <a href="#"><img src="{{asset('assets/img/financo/financo2.jpg')}}" alt="financo" width="510" height="360"></a>
                    </div>
                    <div class="financo-box-layout1">
                        <div class="financo-layout1">
                            <div class="financo-img">
                                <img src="{{asset('assets/img/figure/figure66.png')}}" alt="figure" width="44" height="46">
                            </div>
                            <h2 class="heading-title"><a href="service2.html">Business Consulting</a></h2>
                            <p>Finance when unknown printer took a galley of type.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-lg-block d-none">
                <div class="financo-activities-box2">
                    <div class="item-img">
                        <a href="#"><img src="{{asset('assets/img/financo/financo3.jpg')}}" alt="financo" width="510" height="360"></a>
                    </div>
                    <div class="financo-box-layout1">
                        <div class="financo-layout1">
                            <div class="financo-img">
                                <img src="{{asset('assets/img/figure/figure67.png')}}" alt="figure" width="32" height="49">
                            </div>
                            <h2 class="heading-title"><a href="service2.html">Business Consulting</a></h2>
                            <p>Finance when unknown printer took a galley of type.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=====================================-->
<!--=            About-finnaco Start    =-->
<!--=====================================-->
<section class="about-finnaco-wrap2">
    <div class="container">
        {{-- <div class="background-image">
            <img src="{{asset('assets/img/figure/figure64.png')}}" alt="figure" width="174" height="173">
        </div> --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="about-box3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item-img">
                                <img src="{{asset('assets/img/service/service9.jpg')}}" alt="service" width="690" height="835">
                                <div class="shape-box">
                                    <div class="item-shape">
                                        <div class="item-icon"><i class="fas fa-phone-alt"></i></div>
                                        <ul class="item-estimate">
                                            <li>Let's call us to get a free estimate</li>
                                            <li><span>(+123) 456-7890</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-box8">
                                <h2 class="heading-title">Our Consulting For All Kind Of Finance Services</h2>
                                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining unchanged.</p>
                                <div class="media">
                                    <ul class="about-list">
                                        <li><i class="fas fa-check"></i>Web And Mobile Application</li>
                                        <li><i class="fas fa-check"></i>New Domain Registration</li>
                                        <li><i class="fas fa-check"></i>Data Text Synchronization</li>
                                        <li><i class="fas fa-check"></i>Web Development</li>
                                    </ul>
                                    <div class="media-body">
                                        <div class="grubh-img">
                                            <img src="{{asset('assets/img/figure/figure63.png')}}" alt="figure" width="136" height="137">
                                        </div>
                                    </div>
                                </div>
                                <p class="item-paragraph">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries unchanged.</p>
                                <div class="media">
                                    <div class="about-img">
                                        <img src="{{asset('assets/img/about/about2.png')}}" alt="about" width="110" height="110">
                                    </div>
                                    <div class="media-body2">
                                        <h3 class="item-title">Michard Wizer</h3>
                                        <h4 class="item-subtitle">CEO & Founder</h4>
                                    </div>
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
<!--=          Consulting Start         =-->
<!--=====================================-->
<section class="consulting-service-wrap2" style="background-image: url({{asset('assets/img/team/team4.jpg')}});">
    <div class="container">
        <div class="background-image1">
            <img src="{{asset('assets/img/figure/figure57.png')}}" alt="png" width="164" height="461">
        </div>
        <div class="background-image2">
            <img src="{{asset('assets/img/figure/figure58.png')}}" alt="png" width="257" height="752">
        </div>
        <p class="section-subtitle">What We Do</p>
        <div class="row gutters-50">
            <div class="col-lg-5">
                <div class="consulting-top1">
                    <h2 class="section-title">Our Business & Financial Consulting Services</h2>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="consulting-top2">
                    <p>Bookan unknown printer took a galley of type and scrambled make It has survived not only five centuries.Lorem ipsum dolor sitam consectetur adipiscg sedo eiusmod tempor incididuntlabore dolor ipsum dolor sit amet, consectetur.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($services as $service)
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="consulting-service4">
                    <h3 class="heading-title">{{$service->title}}</h3>
                    <div class="item-img">
                        <img src="{{asset('upload/service_icon/' .$service->icon)}}" alt="figure">
                    </div>
                    <p>{{$service->description}}</p>
                    <div class="consulting-button">
                        <a href="service2.html" class="consulting-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <br>
        <br>
    </div>
</section>

<!--=====================================-->
<!--=            Team Start             =-->
<!--=====================================-->
<section class="team-wrap-layout1">
    <div class="background-image2">
        <img src="{{asset('assets/img/figure/figure14.png') }}" alt="figure" width="490" height="945">
    </div>
    <div class="background-image3">
        <img src="{{asset('assets/img/figure/figure15.png') }}" alt="figure" width="501" height="870">
    </div>
    <div class="container">
        <div class="section-heading">
            <p class="item-subtitle">Our Team Member</p>
            <h2 class="heading-title">Our Expertise Will Help You</h2>
            <p>Bookan unknown printer took a galley of type and scrambled make It has survived not only five centuries.</p>
        </div>
        <div class="row">
            @foreach ($members as $member)
                <div class="col-lg-4 col-md-6">
                    <div class="team-box1">
                        <div class="item-shape"></div>
                        <div class="item-img">
                            <a href="#"><img src="{{asset('upload/our_team/'.$member->profile_picture) }}" alt="team" width="510" height="500"></a>
                            <ul class="team-social">
                                <li><a href="{{$member->fb_link }}"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="{{$member->twitter_link }}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{$member->linkedin_link }}"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="{{$member->insta_link }}"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{$member->skype_link }}"><i class="fab fa-skype"></i></a></li>
                            </ul>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="team1.html">{{$member->name }}</a></h3>
                            <h4 class="item-subtitle">{{$member->designation }}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
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
                                    <div class="item-number">{{isset($companyInfo->mobile)}}</div>
                                </div>
                            </div>
                            <div class="item-icon-box item-icon-box2">
                                <div class="item-icon"><i class="far fa-envelope"></i></div>   
                                <div class="banner-content">
                                    <div class="item-hotline">Send Us Email</div>
                                    <div class="item-number">{{isset($companyInfo->email)}}</div>
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
<section class="project-wrap-layout1">
    <div class="container">
        <p class="section-subtitle">Our Experiences</p>
        <div class="row">
            <div class="col-lg-5">
                <div class="project-box1">
                    <h2 class="section-title">We’ve Done Lot’s Of Awesome Projects</h2>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="project-box2">
                    <p>Bookan unknown printer took a galley of type and scrambled make It has survived not only five centuries.Lorem ipsum dolor sitam consectetur adipiscg sedo eiusmod tempor incididuntlabore dolor ipsum dolor sit amet, consectetur.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row no-gutters">
            @php
                $sl = 1;
            @endphp
            @foreach ($projects as $project)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="portfolio-box1">
                        <div class="item-img">
                            <a href="#"><img src="{{asset('upload/project/'.$project->image) }}" alt="blog" width="570" height="650"></a>
                            <div class="item-content">
                                <div class="item-number">0{{$sl++}}</div>
                                <p class="heading-subtitle">{{$project->projectCategory->name}}</p>
                                <h3 class="heading-title">{{$project->title}}</h3>
                                <p class="portfolio-para">{{$project->sub_title}}</p>
                                <div class="item-button">
                                    <a href="{{route('projects')}}" class="item-btn">+ <span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!--=====================================-->
<!--=            Profit Start           =-->
<!--=====================================-->
<section class="company-profit-wrap1">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="company-profit-box1">
                    <p class="section-subtitle">Company Profit Chart</p>
                    <h2 class="section-title">Finbuzz Offers the Best Business Solutions</h2>
                    <p>Finance when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuriFinance.</p>
                    <div class="item-button">
                        <a href="single-service1.html" class="item-btn">Get Survey Today<i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="company-profit-box2">
                    <div class="item-img">
                        <img src="{{asset('assets/img/figure/figure13.png') }}" alt="figure" width="586" height="283">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=====================================-->
<!--=            Pricing Start          =-->
<!--=====================================-->
<section class="pricing-table-wrap"style="background-image: url({{asset('assets/img/team/team4.jpg')}});">
    <div class="container">
        <div class="section-heading">
            <h2 class="section-title text-white">Pricing & Plane</h2>
            <h3 class="section-subtitle text-white"><span>Save Over</span> <span class="colorful-bg">25%</span>  When You Select Annual Billing</h3>
        </div>
        <div class="tab-area2">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#monthly" role="tab" aria-selected="true">Monthly</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#annualy" role="tab" aria-selected="false">Annualy</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="monthly" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-table-box">
                                <div class="background-imagae">
                                    <img src="{{asset('assets/img/figure/figure93.png')}}" alt="figure">
                                </div>
                                <h3 class="heading-title">Starter Plan</h3>
                                <p>Financa dummy text of the printing and typesetting industry. </p>
                                <div class="item-price">
                                    <div class="item-number"><span class="item-dollar">$</span>19<span class="item-currency">.00</span><span class="item-duration">Per Month</span></div>
                                </div>
                                <ul class="pricing-list">
                                    <li><i class="fas fa-circle"></i>Finance Consulting</li>
                                    <li><i class="fas fa-circle"></i>Business Economiext printing </li>
                                    <li><i class="fas fa-circle"></i>Investment  typesetting </li>
                                    <li><i class="fas fa-circle"></i>industr um has been</li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="#" class="pricing-btn">Buy This Plan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-table-box">
                                <div class="background-imagae">
                                    <img src="{{asset('assets/img/figure/figure93.png')}}" alt="figure">
                                </div>
                                <h3 class="heading-title">Agency Plan</h3>
                                <p>Financa dummy text of the printing and typesetting industry. </p>
                                <div class="item-price">
                                    <div class="item-number"><span class="item-dollar">$</span>49<span class="item-currency">.00</span><span class="item-duration">Per Month</span></div>
                                </div>
                                <ul class="pricing-list">
                                    <li><i class="fas fa-circle"></i>Finance Consulting</li>
                                    <li><i class="fas fa-circle"></i>Business Economiext printing </li>
                                    <li><i class="fas fa-circle"></i>Investment  typesetting </li>
                                    <li><i class="fas fa-circle"></i>industr um has been</li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="#" class="pricing-btn">Buy This Plan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-table-box">
                                <div class="background-imagae">
                                    <img src="{{asset('assets/img/figure/figure93.png')}}" alt="figure">
                                </div>
                                <h3 class="heading-title">Enterprice Plan</h3>
                                <p>Financa dummy text of the printing and typesetting industry. </p>
                                <div class="item-price">
                                    <div class="item-number"><span class="item-dollar item-dollar2">$</span>199<span class="item-currency item-currency2">.00</span><span class="item-duration">Per Month</span></div>
                                </div>
                                <ul class="pricing-list">
                                    <li><i class="fas fa-circle"></i>Finance Consulting</li>
                                    <li><i class="fas fa-circle"></i>Business Economiext printing </li>
                                    <li><i class="fas fa-circle"></i>Investment  typesetting </li>
                                    <li><i class="fas fa-circle"></i>industr um has been</li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="#" class="pricing-btn">Buy This Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="annualy" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-table-box">
                                <div class="background-imagae">
                                    <img src="{{asset('assets/img/figure/figure93.png')}}" alt="figure">
                                </div>
                                <h3 class="heading-title">Starter Plan</h3>
                                <p>Financa dummy text of the printing and typesetting industry. </p>
                                <div class="item-price">
                                    <div class="item-number"><span class="item-dollar">$</span>19<span class="item-currency">.00</span><span class="item-duration">Per Month</span></div>
                                </div>
                                <ul class="pricing-list">
                                    <li><i class="fas fa-circle"></i>Finance Consulting</li>
                                    <li><i class="fas fa-circle"></i>Business Economiext printing </li>
                                    <li><i class="fas fa-circle"></i>Investment  typesetting </li>
                                    <li><i class="fas fa-circle"></i>industr um has been</li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="#" class="pricing-btn">Buy This Plan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-table-box">
                                <div class="background-imagae">
                                    <img src="{{asset('assets/img/figure/figure93.png')}}" alt="figure">
                                </div>
                                <h3 class="heading-title">Agency Plan</h3>
                                <p>Financa dummy text of the printing and typesetting industry. </p>
                                <div class="item-price">
                                    <div class="item-number"><span class="item-dollar">$</span>49<span class="item-currency">.00</span><span class="item-duration">Per Month</span></div>
                                </div>
                                <ul class="pricing-list">
                                    <li><i class="fas fa-circle"></i>Finance Consulting</li>
                                    <li><i class="fas fa-circle"></i>Business Economiext printing </li>
                                    <li><i class="fas fa-circle"></i>Investment  typesetting </li>
                                    <li><i class="fas fa-circle"></i>industr um has been</li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="#" class="pricing-btn">Buy This Plan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-table-box">
                                <div class="background-imagae">
                                    <img src="{{asset('assets/img/figure/figure93.png')}}" alt="figure">
                                </div>
                                <h3 class="heading-title">Enterprice Plan</h3>
                                <p>Financa dummy text of the printing and typesetting industry. </p>
                                <div class="item-price">
                                    <div class="item-number"><span class="item-dollar item-dollar2">$</span>199<span class="item-currency item-currency2">.00</span><span class="item-duration">Per Month</span></div>
                                </div>
                                <ul class="pricing-list">
                                    <li><i class="fas fa-circle"></i>Finance Consulting</li>
                                    <li><i class="fas fa-circle"></i>Business Economiext printing </li>
                                    <li><i class="fas fa-circle"></i>Investment  typesetting </li>
                                    <li><i class="fas fa-circle"></i>industr um has been</li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="#" class="pricing-btn">Buy This Plan</a>
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
<!--=            Call-back Start        =-->
<!--=====================================-->
<section class="call-back-wrap">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-5 col-md-12">
                <div class="call-back-box1">
                    <h3 class="section-title">Request a Call Back</h3>
                    <form class="message-box" id="contactForm">
                        @csrf
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control" id="inputAddress1" name="name" placeholder="Name" value="{{ old('name') }}" autocomplete="off">
                                <span class="text-danger" id="name_error"></span>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="email" class="form-control" id="inputAddress2" name="email" placeholder="Email" value="{{ old('email') }}" autocomplete="off">
                                <span class="text-danger" id="email_error"></span>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control" id="inputAddress3" name="phone" placeholder="Phone" value="{{ old('phone') }}" autocomplete="off">
                                <span class="text-danger" id="phone_error"></span>
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea id="message" class="form-control" name="message" placeholder="Message" cols="30" rows="4"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" id="submitBtn" class="item-btn">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="call-back-box2">
                    <div class="item-img">
                        <img src="{{asset('assets/img/blog/blog4.jpg') }}" alt="blog" width="690" height="582">
                        <div class="call-img">
                            <img src="{{asset('assets/img/figure/figure11.png') }}" alt="figure" width="145" height="295">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=====================================-->
<!--=            Location Start         =-->
<!--=====================================-->
<section class="location-wrap-layout1">
    <div class="container">
        <div class="item-heading">
            <p class="item-subtitle">Our Trusted Clients</p>
            <h2 class="section-heading">We’ve Situated in Different Countries</h2>    
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="location-box">
                    <div class="item-img">
                        <img src="{{asset('assets/img/figure/figure10.png') }}" alt="figure" width="805" height="377">
                        <div class="map-icon">
                            <ul>
                                <li><i class="fas fa-map-marker-alt"></i></li>
                                <li><i class="fas fa-map-marker-alt"></i></li>
                                <li><i class="fas fa-map-marker-alt"></i></li>
                                <li><i class="fas fa-map-marker-alt"></i></li>
                                <li><i class="fas fa-map-marker-alt"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=====================================-->
<!--=            Testimonial Start      =-->
<!--=====================================-->
<section class="testimonial-wrap1">
    <div class="container">
        <div class="testimonial-box1">
            <div class="slick-carousel slick-slider" data-slick='{"arrows": true, "slidesToShow": 1, "autoplay": false, "vertical": true}'>
                @foreach ($testimonials as $info)
                    <div class="slick-slide">
                        <div class="media">
                            <div class="item-img">
                                <img src="{{asset('upload/testimonals/'.$info->slider_img) }}" alt="blog" width="285" height="276">
                                <div class="shape-box">{{$info->client->name}}</div>
                            </div>
                            <div class="media-body">
                                <blockquote class="item-quotation">“ {{$info->testimonial}}”</blockquote>
                                <div class="quotation-marks"><i class="fas fa-quote-right"></i></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!--=====================================-->
<!--=            Blog Start             =-->
<!--=====================================-->
<section class="blog-wrap-layout1">
    <div class="section-top-img">
        <img src="{{asset('assets/img/figure/figure7.png') }}" alt="figure" width="309" height="147">
    </div>
    <div class="container">
        <p class="section-subtitle">Latest News & Blogs</p>
        <div class="blog-top-area">
            <div class="row">
                <div class="col-lg-5">
                    <h2 class="section-title">What’s New in Business Area to Know</h2>
                </div>
                <div class="col-lg-7">
                    <p>Bookan unknown printer took a galley of type and scrambled make It has survived not only five centuries.Lorem ipsum dolor sitam consectetur adipiscg sedo eiusmod tempor incididuntlabore dolor ipsum dolor sit amet, consectetur.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="blog-box1">
                    <div class="item-img">
                        <a href="#"><img src="{{asset('assets/img/blog/blog1.jpg') }}"" alt="blog" width="641" height="428"></a>
                    </div>
                    <div class="content-box">
                        <div class="entry-meta">
                            <ul>
                                <li><a href="single-blog.html"><i class="fas fa-user"></i>by admin</a></li>
                                <li><a href="single-blog.html"><i class="fas fa-tag"></i>Finance, News</a></li>
                            </ul>
                        </div>
                        <h2 class="heading-title"><a href="single-blog.html">Control allows you create Finance where users can upload</a></h2>
                        <div class="blog-date">25 <span>Oct</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="blog-box1">
                    <div class="item-img">
                        <a href="#"><img src="{{asset('assets/img/blog/blog2.jpg') }}"" alt="blog" width="641" height="428"></a>
                    </div>
                    <div class="content-box">
                        <div class="entry-meta">
                            <ul>
                                <li><a href="single-blog.html"><i class="fas fa-user"></i>by admin</a></li>
                                <li><a href="single-blog.html"><i class="fas fa-tag"></i>Finance, News</a></li>
                            </ul>
                        </div>
                        <h2 class="heading-title"><a href="single-blog.html">Control allows you create Finance where users can upload</a></h2>
                        <div class="blog-date">25 <span>Oct</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
         
            $("#contactForm").on('submit',function(e){
                e.preventDefault();

                // Error Message Hide
                $("#name_error").text('');
                $("#email_error").text('');
                $("#phone_error").text('');
                // END Error Message Hide

                let contactForm = document.querySelector('#contactForm');

                var data = new FormData(contactForm);
                axios.post('/contact/store', data)
                    .then(response => {
                        
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })

                        Toast.fire({
                            icon: 'success',
                            title: 'Message Send Successfully..!!'
                        })

                        contactForm.reset();
                    })
                    .catch(error  => {
                        if(error.response?.status === 422){
                            const errors = error.response?.data?.errors;
                            $("#name_error").text(errors.name?.[0]);
                            $("#email_error").text(errors.email?.[0]);
                            $("#phone_error").text(errors.phone?.[0]);
                        }
                    })
            });
        });
        
    </script>
@endsection