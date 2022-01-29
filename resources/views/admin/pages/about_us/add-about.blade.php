@extends('admin.admin_master')
@section('admin_content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Add About-Us Content </h4>
    </div>
    <div class="card-body">
        <form class="form" method="POST" action="{{ route('aboutUs.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="form-group">
                        <label for="first-name-column">Title</label>
                        <input type="text" id="first-name-column" class="form-control" placeholder="Add Title" name="title">
                        <small class="text-danger"></small>
                        @error('title')
                        <small class="text-danger">{{ $message }}</small>

                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="first-name-column">Long Description</label>
                        <input type="text" id="first-name-column" class="form-control" placeholder="Add Description" name="description">
                        <small class="text-danger"></small>
                        @error('description')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-6">
                    <div class="form-group">
                        <label for="first-name-column">Add Image</label>
                        <input type="file" id="first-name-column" class="form-control" name="image">
                        <small class="text-danger"></small>
                        @error('image')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>



            </div>

            <div class="col-md-6 col-6">
                <div class="button-form-group form-group">
                    <div>
                        <label for="first-name-column">Add Core Values</label>
                        <div class="d-flex mb-2">
                        <input type="text"  class="form-control" id="basicInput" name="core_values[]" value=""/>
                        <button class="add_button btn btn-primary mr-1 waves-effect waves-float waves-light">+</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            

                
               

                <div class="col-12">
                    <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                    
                </div>
            </div>
        </form>
    </div>
</div>



<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.button-form-group'); //Input field wrapper
        var fieldHTML = `<div class="d-flex mb-2">
                        <input type="text"  class="form-control" id="basicInput" name="core_values[]" value=""/>
                        <button class="remove_button btn btn-primary mr-1 waves-effect waves-float waves-light">-</button>
                    </div>`; //New input field html 
        var x = 1; //Initial field counter is 1
        
        //Once add button is clicked
        $(addButton).click(function(e){
            e.preventDefault();
            //Check maximum number of input fields
            if(x < maxField){ 
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });
        
        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
    </script>

@endsection

