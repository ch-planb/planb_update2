@extends('admin.admin_master')
@section('admin_content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">What We Do Content Edit</h4>
    </div>
    <div class="card-body">
        <form class="form" method="POST" action="{{ route('whatWeDo.update',$data->id) }}">
            {{-- <input type="hidden" name="_token" value=""> --}}
            @csrf
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="form-group">
                        <label for="first-name-column">Title</label>
                        <input type="text" id="first-name-column" class="form-control" placeholder="Add Title" value="{{ $data->title }}" name="title">
                        <small class="text-danger"></small>
                        @error('title')
                        <small class="text-danger">{{ $message }}</small>

                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="first-name-column">Long Description</label>
                        <input type="text" id="first-name-column" class="form-control" placeholder="Add Description" value = "{{ $data->description }}" name="description">
                        <small class="text-danger"></small>
                        @error('description')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
               

                <div class="col-12">
                    <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Update</button>
                   
                </div>
            </div>
        </form>
    </div>
</div>
@endsection