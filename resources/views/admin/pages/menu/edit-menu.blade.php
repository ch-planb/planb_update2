@extends('admin.admin_master')
@section('admin_content')
<section id="multiple-column-form">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Multiple Column</h4>
                </div>
                <div class="card-body">
                    <form class="form" method="POST" action="{{ route('admin.menu.update',$menu->id) }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Menu Name</label>
                                    <input type="text" id="first-name-column" class="form-control"
                                        placeholder="First Name" name="name" value="{{$menu->name}}">
                                    <small class="text-danger">{{ $errors->first('name') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="last-name-column">Slug Name</label>
                                    <input type="text" id="last-name-column" class="form-control"
                                        placeholder="Last Name" name="slug" value="{{$menu->slug}}">
                                    <small class="text-danger"> {{ $errors->first('slug') }} </small>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="city-column">Url link</label>
                                    <input type="text" id="city-column" class="form-control" placeholder="City"
                                        name="url"  value="{{$menu->url}}">

                                    <small class="text-danger"> {{ $errors->first('url') }} </small>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit"
                                    class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                                <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection