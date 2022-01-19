@extends('admin.admin_master')
@section('admin_content')

<!-- Project Create Form section start -->

<section id="multiple-column-form">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Project Create Form</h4>
                    <a href="{{route('project.manage')}}" type="button" class="btn btn-primary">Manage Projects</a>
                </div>
                <div class="card-body">
                    <form class="form" id="projectForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="title">Porject Category</label>
                                    <select class="select2 form-control" name="pro_cat_id">
                                        <option value="" selected disabled>Select One</option>
                                        @foreach ($project_categories as $categories)
                                            <option value="{{$categories->id}}">{{$categories->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" class="form-control" placeholder="Project Title" name="title" value="{{ old('title')}}"/>

                                    {{-- Client ID --}}
                                    <input type="hidden" id="client_id" name="client_id" value="121"/>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="sub_title">Sub Title</label>
                                    <input type="text" id="sub_title" class="form-control" placeholder="Sub Title" name="sub_title" value="{{ old('sub_title')}}" />
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="details">Project Description</label>
                                    <textarea class="form-control" id="details" rows="3" name="details" placeholder="Write Here..."></textarea>
                                </div>
                            </div>
                            
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="target">Project Target</label>
                                    <textarea class="form-control" id="target" rows="3" name="target" placeholder="Write Here..."></textarea>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="link">Project URL</label>
                                    <input type="text" id="link" class="form-control" name="link" placeholder="Project URL" value="{{ old('link')}}"/>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="customFile">Project Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="image"/>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="fp-human-friendly">Project Start Date</label>
                                    <input type="text" id="fp-human-friendly" class="form-control flatpickr-human-friendly" name="start_date" placeholder="October 14, 2020" />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="fp-human-friendly">Project End Date</label>
                                    <input type="text" id="fp-human-friendly" class="form-control flatpickr-human-friendly" name="end_date" placeholder="October 14, 2020" />
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <button type="reset" id="submitData" class="btn btn-primary mr-1">Submit</button>
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
            $('#details').summernote({
                height: 200, 
                placeholder: 'Write Here...',
            });
            $('#target').summernote({
                height: 200, 
                placeholder: 'Write Here...',
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#submitData").click(function(e) {
                e.preventDefault();

                let AddForm = document.querySelector('#projectForm');
                
                var data = new FormData(AddForm);
                axios.post('/project/store', data)
                
                    .then(response => {
                        console.log(data);
                        Swal.fire(
                            'Created!',
                            'Your file has been created.',
                            'success'
                        )

                        AddForm.reset();
                    })
                    .catch(error => {
                        console.log(error)
                    })
                });
        });
    </script>

@endsection