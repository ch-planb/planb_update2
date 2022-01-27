<footer class="footer-area1" style="background-image: url({{asset('assets/img/figure/figure5.png')}});background-position-y: -280px; background-repeat: no-repeat; background-position-x: 439px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="{{url('/')}}"><img src="{{asset('upload/logo/'.$companyInfo->footer_logo )}}" alt="logo" width="180" height="45"></a>
                    </div>
                    <p>{{$companyInfo->short_description}}</p>
                    <div class="footer-social">
                        <ul>
                            <li>
                                <a href="{{$companyInfo->fb_link}}" class="fb"><i class="fab fa-facebook-square"></i></a>
                                <a href="{{$companyInfo->twitter_link}}" class="twit"><i class="fab fa-twitter"></i></a>
                                <a href="{{$companyInfo->linkedin_link}}" class="linkin"><i class="fab fa-linkedin-in"></i></a>
                                <a href="{{$companyInfo->insta_link}}" class="pint"><i class="fab fa-instagram"></i></a>
                                <a href="{{$companyInfo->skype_link}}" class="skype"><i class="fab fa-skype"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                <div class="footer-middle">
                    <h2 class="footer-title">What We Do</h2>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <ul class="footer-list">
                                <li><a href="#"><i class="fas fa-angle-right"></i>Financial Advice</a></li>
                                <li><a href="#"><i class="fas fa-angle-right"></i>Planning Strategies</a></li>
                                <li><a href="#"><i class="fas fa-angle-right"></i>Taxation Planning</a></li>
                                <li><a href="#"><i class="fas fa-angle-right"></i>Investment Trading</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <ul class="footer-list2">
                                <li><a href="#"><i class="fas fa-angle-right"></i>Wealth Marketing</a></li>
                                <li><a href="#"><i class="fas fa-angle-right"></i>Our Services</a></li>
                                <li><a href="#"><i class="fas fa-angle-right"></i>Stats Element</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                <div class="footer-right">
                    <h2 class="footer-title">Get Updates!</h2>
                    <p>Sign up for our latest news & articles. We won’t give you spam mails.</p>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter your Email">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright-area">
                        <p> © Plan-B Ltd, 2022. All Rights Reserved </p>
                        <div class="copyright-img1">
                            <img src="{{asset('assets/img/figure/figure4.png')}}" alt="figure" width="20" height="20">
                        </div>
                        <div class="copyright-img2">
                            <img src="{{asset('assets/img/figure/figure4.png')}}" alt="figure" width="20" height="20">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>