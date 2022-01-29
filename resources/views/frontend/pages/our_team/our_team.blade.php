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
                    <h1 class="page-title">Meet Our Advisors Team</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Team</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=====================================-->
<!--=            Team Start             =-->
<!--=====================================-->
<section class="team-wrap-layout1 team-wrap-layout3">
    <div class="background-image12">
        <img src="{{asset('assets/img/figure/figure14.png')}}" alt="figure">
    </div>
    <div class="background-image13">
        <img src="{{asset('assets/img/figure/figure15.png')}}" alt="figure">
    </div>
    <div class="container">
        <div class="row">
            @foreach ($members as $member)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team-box1 team-box3">
                    <div class="item-shape"></div>
                    <div class="item-img">
                        @isset($member->profile_picture)
                        <a href="#"><img src="{{asset('upload/our_team/' .$member->profile_picture)}}" alt="team" width="510" height="500"></a>
                            
                        @endisset
                        <ul class="team-social">
                            <li><a href="{{isset($member->fb_link))}}"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="{{isset($member->twitter_link)}}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{isset($member->linkedin_link)}}"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="{{isset($member->insta_link)}}"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="{{isset($member->skype_link)}}"><i class="fab fa-skype"></i></a></li>
                        </ul>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title"><a href="single-team.html">{{isset($member->name)}}</a></h3>
                        <h4 class="item-subtitle">{{isset($member->designation)}}</h4>
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

@endsection

@section('scripts')


@endsection

