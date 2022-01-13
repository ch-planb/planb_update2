@extends('admin.admin_master')
@section('admin_content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">What We Do Content Add</h4>
    </div>
    <div class="card-body">
        <form class="form" method="POST" action="{{ route('whatWeDo.store') }}">
            {{-- <input type="hidden" name="_token" value=""> --}}
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
               

                <div class="col-12">
                    <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                    {{-- <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button> --}}
                </div>
            </div>
        </form>
    </div>
</div>
@endsection