@extends('admin.admin_master')
@section('admin_content')

<!-- Project Create Form section start -->

<section id="multiple-column-form">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Project Category Create Form</h4>
                    <a href="{{route('project.category.manage')}}" type="button" class="btn btn-primary">Back</a>
                </div>
                <div class="card-body">
                    <form class="form" id="projectCategoryForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="title">Project Category Name</label>
                                    <input type="text" id="name" class="form-control" placeholder="Project Category Name" name="name" value="{{ old('name')}}"/>
                                    <span class="text-danger" id="name_error"></span>
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

    <script>
        $(document).ready(function() {
            $("#submitData").click(function(e) {
                e.preventDefault();

                $("#name_error").text('');

                let AddForm = document.querySelector('#projectCategoryForm');
                
                var data = new FormData(AddForm);
                axios.post('/project/category/store', data)
                
                    .then(response => {
                        Swal.fire(
                            'Created!',
                            'Your file has been created.',
                            'success'
                        )

                        AddForm.reset();
                    })
                    .catch(error => {
                        if(error.response?.status === 422){
                            const errors = error.response?.data?.errors;
                            $("#name_error").text(errors.name?.[0]);
                        }
                    })
                });
        });
    </script>

@endsection