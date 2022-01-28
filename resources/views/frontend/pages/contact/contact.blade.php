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
                    <h1 class="page-title">Contact With Us</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=====================================-->
<!--=            Contact Start          =-->
<!--=====================================-->
<section class="contact-wrap1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-box1">
                    <h2 class="heading-title">Mail for information</h2>
                    <ul class="contact-list">
                        <li>info@gmail.com</li>
                        <li>info@gmail.com</li> 
                    </ul>
                    <div class="contact-icon">
                        <div class="item-icon"><i class="fas fa-envelope"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-box1">
                    <h2 class="heading-title">Office Phone Number</h2>
                    <ul class="contact-list">
                        <li>+ (123) 365-2907</li>
                        <li>+ (123) 129-1906</li> 
                    </ul>
                    <div class="contact-icon">
                        <div class="item-icon"><i class="fas fa-phone"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-box1 contact-box4">
                    <h2 class="heading-title">Location information</h2>
                    <ul class="contact-list2">
                        <li>PO Box Collins Street 5980,Australia</li>
                        <li>PO Box Collins Street 5980,Australia</li> 
                    </ul>
                    <div class="contact-icon">
                        <div class="item-icon"><i class="fas fa-map"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=====================================-->
<!--=            Contact Start          =-->
<!--=====================================-->
<section class="contact-wrap2">
    <div class="container">
        <div class="row gutters-40">
            <div class="col-lg-6">
                <div class="contact-box2">
                    <div id="googleMap" class="google-map" style="width:100%; height:612px; border-radius:4px;"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-box3">
                    <div class="contact-bg-image">
                        <img src="{{asset('assets/img/figure/figure94.png')}}" alt="figure" width="266" height="214">
                    </div>
                    <div class="item-heading">
                        <h2 class="item-title">We Love To Hear From You</h2>
                        <p>Please call or email contact form and we will be happy to assist you.</p>
                    </div>
                    <form class="message-box" id="contactForm2">
                        <div class="row gutters-10">
                            <div class="col-lg-12 form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Full Name" value="{{ old('name') }}" autocomplete="off">
                                <div class="help-block with-errors text-danger" id="name_error"></div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}" autocomplete="off">
                                <div class="help-block with-errors text-danger" id="email_error"></div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Contact Number" value="{{ old('phone') }}" autocomplete="off">
                                <div class="help-block with-errors text-danger" id="phone_error"></div>
                            </div>
                            <div class="col-lg-12 form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="{{ old('subject') }}" autocomplete="off">
                                <div class="help-block with-errors text-danger" id="subject_error"></div>
                            </div>
                            <div class="col-lg-12 form-group">
                                <textarea name="message" id="message" class="form-control" placeholder="Message" cols="30" rows="6"></textarea>
                            </div>
                            <div class="col-lg-12 form-group">
                                <button type="submit" class="item-btn">Send message</button>
                            </div>
                        </div>
                        <div class="form-response"></div>
                    </form>
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

<script>
    $(document).ready(function() {
     
        $("#contactForm2").on('submit',function(e){
            e.preventDefault();

            // Error Message Hide
            $("#name_error").text('');
            $("#email_error").text('');
            $("#phone_error").text('');
            $("#subject_error").text('');
            // END Error Message Hide

            let contactForm = document.querySelector('#contactForm2');

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
                        $("#subject_error").text(errors.subject?.[0]);
                    }
                })
        });
    });
    
</script>
@endsection

