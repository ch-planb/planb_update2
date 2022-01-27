@extends('admin.admin_master')
@section('admin_content')

<!-- Our Team Form section start -->

<section id="multiple-column-form">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Our Team Create Form</h4>
                    <a href="" type="button" class="btn btn-primary">Manage Team</a>
                </div>
                <div class="card-body">
                    <form class="form" id="ourTeamForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" class="form-control" placeholder="Name" name="name" value="{{ old('name')}}"/>
                                    <span class="text-danger" id="name_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="designation">Designation</label>
                                    <input type="text" id="designation" class="form-control" placeholder="Designation" name="designation" value="{{ old('designation')}}" />
                                    <span class="text-danger" id="designation_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="fb_link">Facebook Link</label>
                                    <input type="text" id="fb_link" class="form-control" placeholder="Facebook Link" name="fb_link" value="{{ old('fb_link')}}" />
                                    <span class="text-danger" id="fb_link_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="twitter_link">Twitter Link</label>
                                    <input type="text" id="twitter_link" class="form-control" placeholder="Twitter Link" name="twitter_link" value="{{ old('twitter_link')}}" />
                                    <span class="text-danger" id="twitter_link_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="linkedin_link">Linkedin Link</label>
                                    <input type="text" id="linkedin_link" class="form-control" placeholder="Linkedin Link" name="linkedin_link" value="{{ old('linkedin_link')}}" />
                                    <span class="text-danger" id="linkedin_link_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="insta_link">Instagram Link</label>
                                    <input type="text" id="insta_link" class="form-control" placeholder="Instagram Link" name="insta_link" value="{{ old('insta_link')}}" />
                                    <span class="text-danger" id="insta_link_error"></span>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="skype_link">Skype Link</label>
                                    <input type="text" id="skype_link" class="form-control" placeholder="Skype Link" name="skype_link" value="{{ old('skype_link')}}" />
                                    <span class="text-danger" id="skype_link_error"></span>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="fp-human-friendly">Join Date</label>
                                    <input type="text" id="fp-human-friendly" class="form-control flatpickr-human-friendly" name="join_date" placeholder="October 14, 2020" />
                                    <span class="text-danger" id="join_date_error"></span>
                                </div>
                            </div>

                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="customFile">Profile Picture (Resulation 510 x 500 px)</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="profile_picture"/>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    <span class="text-danger" id="profile_picture_error"></span>
                                </div>
                            </div>
                            
                            
                            <div class="col-12">
                                <button type="submit" id="submitData" class="btn btn-primary mr-1">Submit</button>
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

<script src="{{asset('admin_assets/app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('admin_assets/app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('admin_assets/app-assets/vendors/js/pickers/pickadate/picker.time.js')}}"></script>
<script src="{{asset('admin_assets/app-assets/vendors/js/pickers/pickadate/legacy.js')}}"></script>
<script src="{{asset('admin_assets/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('admin_assets/app-assets/js/scripts/forms/pickers/form-pickers.js')}}"></script>



    <script>
        $(document).ready(function() {
            $("#submitData").click(function(e) {
                e.preventDefault();

                // Error Message Hide
                $("#name_error").text('');
                $("#designation_error").text('');
                $("#fb_link_error").text('');
                $("#twitter_link_error").text('');
                $("#linkedin_link_error").text('');
                $("#insta_link_error").text('');
                $("#skype_link_error").text('');
                $("#profile_picture_error").text('');
                $("#join_date_error").text('');

                // END Error Message Hide

                let AddForm = document.querySelector('#ourTeamForm');
                
                var data = new FormData(AddForm);
                axios.post('/our-team/store', data)
                
                    .then(response => {
                        console.log(data);
                        Swal.fire(
                            'Created!',
                            'Your file has been created.',
                            'success'
                        )

                        AddForm.reset();
                    })
                    .catch(error  => {
                        if(error.response?.status === 422){
                            const errors = error.response?.data?.errors;
                            $("#name_error").text(errors.name?.[0]);
                            $("#designation_error").text(errors.designation?.[0]);
                            $("#fb_link_error").text(errors.fb_link?.[0]);
                            $("#twitter_link_error").text(errors.twitter_link?.[0]);
                            $("#linkedin_link_error").text(errors.linkedin_link?.[0]);
                            $("#insta_link_error").text(errors.insta_link?.[0]);
                            $("#skype_link_error").text(errors.skype_link?.[0]);
                            $("#profile_picture_error").text(errors.profile_picture?.[0]);
                            $("#join_date_error").text(errors.join_date?.[0]);
                        }
                    })
                });
        });
    </script>

@endsection