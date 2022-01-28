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
                    <h1 class="page-title">Consulting Pricing Table</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pricing Table</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=====================================-->
<!--=            Pricing Start          =-->
<!--=====================================-->
<section class="pricing-table-wrap-single"style="background: none;">
    <div class="container">
        <div class="section-heading">
            <h2 class="section-title">Pricing & Plane</h2>
            <h3 class="section-subtitle"><span>Save Over</span> <span class="colorful-bg">25%</span>  When You Select Annual Billing</h3>
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

@endsection

@section('scripts')
@endsection