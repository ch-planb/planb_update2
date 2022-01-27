@extends('admin.admin_master')
@section('admin_content')

<!-- Our Team Form section start -->

<section id="multiple-column-form">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Company Information Update Form</h4>
                </div>
                <div class="card-body">
                    <form class="form" id="companyInfo" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="name">Company Name</label>
                                    <input type="text" id="name" class="form-control" placeholder="Name" name="name" value="{{ $companyInfo->name }}"/>

                                    <input type="hidden" id="name" name="id" value="{{ $companyInfo->id }}"/>
                                    <span class="text-danger" id="name_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email">Company Email</label>
                                    <input type="email" id="email" class="form-control" placeholder="Email" name="email" value="{{ $companyInfo->email}}" />
                                    <span class="text-danger" id="email_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="mobile">Hotline Number</label>
                                    <input type="text" id="mobile" class="form-control" placeholder="Mobile" name="mobile" value="{{ $companyInfo->mobile}}" />
                                    <span class="text-danger" id="mobile_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="fb_link">Facebook Link</label>
                                    <input type="text" id="fb_link" class="form-control" placeholder="Facebook Link" name="fb_link" value="{{ $companyInfo->fb_link }}" />
                                    <span class="text-danger" id="fb_link_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="twitter_link">Twitter Link</label>
                                    <input type="text" id="twitter_link" class="form-control" placeholder="Twitter Link" name="twitter_link" value="{{ $companyInfo->twitter_link}}" />
                                    <span class="text-danger" id="twitter_link_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="linkedin_link">Linkedin Link</label>
                                    <input type="text" id="linkedin_link" class="form-control" placeholder="Linkedin Link" name="linkedin_link" value="{{ $companyInfo->linkedin_link}}" />
                                    <span class="text-danger" id="linkedin_link_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="insta_link">Instagram Link</label>
                                    <input type="text" id="insta_link" class="form-control" placeholder="Instagram Link" name="insta_link" value="{{ $companyInfo->insta_link}}" />
                                    <span class="text-danger" id="insta_link_error"></span>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="skype_link">Skype Link</label>
                                    <input type="text" id="skype_link" class="form-control" placeholder="Skype Link" name="skype_link" value="{{ $companyInfo->skype_link}}" />
                                    <span class="text-danger" id="skype_link_error"></span>
                                </div>
                            </div>

                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="skype_link">Short Description</label>
                                    <textarea class="form-control" name="short_description" id="" placeholder="Write here.." cols="30" rows="5">{{ $companyInfo->short_description }}</textarea>
                                    <span class="text-danger" id="short_description_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="customFile">Company Logo (Resulation 510 x 500 px)</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="logo" value="{{ $companyInfo->logo }}"/>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    <span class="text-danger" id="logo_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <img src="{{asset('upload/logo/'.$companyInfo->logo )}}" alt="Logo" class="w-50">
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="customFile">Footer Logo (Resulation 510 x 500 px)</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="footer_logo" value="{{ $companyInfo->footer_logo }}"/>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    <span class="text-danger" id="footer_logo_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <img src="{{asset('upload/logo/'.$companyInfo->footer_logo )}}" alt="Logo" class="w-50">
                                </div>
                            </div>
                            
                            
                            <div class="col-12">
                                <button type="submit" id="submitData" class="btn btn-primary mr-1">Update Info</button>
                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Project Create Form section end -->

@endsection

@section('scripts')

    <script>
        $(document).ready(function() {
            $("#submitData").click(function(e) {
                e.preventDefault();

                // Error Message Hide
                $("#name_error").text('');
                $("#email_error").text('');
                $("#fb_link_error").text('');
                $("#twitter_link_error").text('');
                $("#linkedin_link_error").text('');
                $("#insta_link_error").text('');
                $("#skype_link_error").text('');
                $("#short_description_error").text('');
                $("#logo_error").text('');
                // END Error Message Hide

                let AddForm = document.querySelector('#companyInfo');
                
                var data = new FormData(AddForm);
                console.log(data);
                axios.post('/company-info/update', data)
                
                    .then(response => {
                        console.log(data);
                        Swal.fire(
                            'Updated!',
                            'Your file has been Updated.',
                            'success'
                        )

                        AddForm.reset();
                    })
                    .catch(error  => {
                        if(error.response?.status === 422){
                            const errors = error.response?.data?.errors;
                            $("#name_error").text(errors.name?.[0]);
                            $("#email_error").text(errors.email?.[0]);
                            $("#fb_link_error").text(errors.fb_link?.[0]);
                            $("#twitter_link_error").text(errors.twitter_link?.[0]);
                            $("#linkedin_link_error").text(errors.linkedin_link?.[0]);
                            $("#insta_link_error").text(errors.insta_link?.[0]);
                            $("#skype_link_error").text(errors.skype_link?.[0]);
                            $("#short_description_error").text(errors.short_description?.[0]);
                            $("#logo_error").text(errors.logo?.[0]);
                        }
                    })
                });
        });
    </script>

@endsection