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
                        <h1 class="page-title">Our Compnay Projects</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Projects</li>
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
    <section class="portfolio-wrap2">
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
                                <div class="item-number">{{$sl++}}</div>
                                <p class="heading-subtitle">{{$project->projectCategory->name}}</p>
                                <a href="{{route('project-details', $project->id)}}"><h3 class="heading-title">{{$project->title}}</h3></a>
                                <p class="portfolio-para">{{$project->sub_title}}</p>
                                <div class="item-button">
                                    <a href="{{route('project-details', $project->id)}}" class="item-btn">+ <span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="portfolio-button">
                <a href="single-portfolio.html" class="portfolio-btn"><i class="fas fa-redo"></i>Load More</a>
            </div>   
        </div>
    </section>

@endsection

@section('scripts')
@endsection