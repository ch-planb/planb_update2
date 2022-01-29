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
<!--=          Why-Choose Start         =-->
<!--=====================================-->
<section class="why-choose-us-wrap1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="choose-us-box1">
                    <h2 class="section-title">Why Choose Us</h2>
                    <p>Dorem ipsum dolor sit amet, consectetur adipiscing elitsed do eiusmod tempor incididunt.</p>
                    <div id="accordion" class="accordion">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="heading-title" data-toggle="collapse" data-target="#collapseOne" 
                                    aria-expanded="true">How do you answer for consulting?</h4>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Behen an unknown printer took a galley of type and scramble itto make a type specimen book. It has survived not only arey five centuriesBehen an unknown printer took a galley of type itto make a type specimen book.</p> 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="heading-title collapsed" data-toggle="collapse" data-target="#headingtwo" 
                                    aria-expanded="true">How do you answer for consulting?</h4>
                            </div>
                            <div id="headingtwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Behen an unknown printer took a galley of type and scramble itto make a type specimen book. It has survived not only arey five centuriesBehen an unknown printer took a galley of type itto make a type specimen book.</p> 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="heading-title collapsed" data-toggle="collapse" data-target="#headingthree" 
                                    aria-expanded="true">How do you answer for consulting?</h4>
                            </div>
                            <div id="headingthree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Behen an unknown printer took a galley of type and scramble itto make a type specimen book. It has survived not only arey five centuriesBehen an unknown printer took a galley of type itto make a type specimen book.</p> 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="heading-title collapsed" data-toggle="collapse" data-target="#headingfour" 
                                    aria-expanded="true">How do you answer for consulting?</h4>
                            </div>
                            <div id="headingfour" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Behen an unknown printer took a galley of type and scramble itto make a type specimen book. It has survived not only arey five centuriesBehen an unknown printer took a galley of type itto make a type specimen book.</p> 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="heading-title collapsed" data-toggle="collapse" data-target="#headingfive" 
                                    aria-expanded="true">How do you answer for consulting?</h4>
                            </div>
                            <div id="headingfive" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Behen an unknown printer took a galley of type and scramble itto make a type specimen book. It has survived not only arey five centuriesBehen an unknown printer took a galley of type itto make a type specimen book.</p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="consulation-box1" style="background-image: url({{asset('assets/img/service/consulation1.png')}});">
                    <h2 class="section-title">We Love To Hear From You</h2>
                    <p>Please call or email contact form and we will be happy to assist you.</p>
                    <form class="message-box" id="contactForm2">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" autocomplete="off">
                                <label>Name</label>
                                <div class="help-block with-errors text-danger" id="name_error"></div>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" autocomplete="off">
                                <label>Email</label>
                                <div class="help-block with-errors text-danger" id="email_error"></div>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}" autocomplete="off">
                                <label>Number</label>
                                <div class="help-block with-errors text-danger" id="phone_error"></div>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control" name="subject" id="subject" value="{{ old('subject') }}" autocomplete="off">
                                <label>Subject</label>
                                <div class="help-block with-errors text-danger" id="subject_error"></div>
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea name="message" id="message" class="form-control" cols="30" rows="6"></textarea>
                                <label>Message</label>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" class="item-btn">Send message</button>
                            </div>
                        </div>
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

