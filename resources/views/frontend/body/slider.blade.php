<!--=====================================-->
<!--=            Slider Start           =-->
<!--=====================================-->
<div class="slider-area2 slider-layout2">
    <div class="slider-bg-img1" data-sal="zoom-in" data-sal-duration="1500" data-sal-delay="300">
        <img src="{{ asset('assets/img/figure/figure98.png')}}" alt="figure" width="772" height="366"> 
    </div>
    <div class="slider-bg-img2">
        <img src="{{ asset('assets/img/figure/figure99.png')}}" alt="figure" data-sal="slide-up" data-sal-duration="1300" data-sal-delay="700" width="211" height="96"> 
    </div>
    
    <div class="bend niceties preview-1">
        @php
        $slider_direction_number = 1;
        $slider_direction_number_id = 1;
        $slide_class = 1;
        @endphp
        
        <div id="ensign-nivoslider-2" class="slides">
            @foreach ($sliders as $slider)
            <img src="{{ asset('/upload/slider_images/'.$slider->slider_img)}}" alt="slider" width="1920" height="720" title="#slider-direction-{{$slider_direction_number++}}" />
            @endforeach
        </div>

        @foreach ($sliders as $slider)
        <div id="slider-direction-{{$slider_direction_number_id++}}" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-{{$slide_class++}}">
                <div class="text-left title-container s-tb-c">
                    <div class="container">
                        <p class="item-subtitle">Find The Right Way</p>
                        <h2 class="item-title">{{$slider->title}}</h2>
                        <div class="item-paragraph">{{$slider->description}}</div>
                        <div class="slider-button">
                            <a href="service1.html" class="slider-btn">Get Started<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                        <div class="social-site">
                            <ul>
                                <li><span>Follow Us On :</span><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
   
</div>