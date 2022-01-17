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
                    <form class="form" method="POST" action="{{route('admin.submenu.update',$submenu->id)}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-5 col-5  mt-2">
                               
                                   
                                <select class="js-example-basic-single" name="menu_id">
                                    @foreach ($menus as $menu)
                                        
                                    
                                    <option value="{{$menu->id}}">{{$menu->name}}</option>
                                    @endforeach 
                                   
                                  </select>

                             
                                    
                                </div>
                                <div class="col-md-6 col-6">
                                    <div class="form-group">
                                        <label for="first-name-column">Menu Name</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            placeholder="First Name" name="sub_menu" value="{{$submenu->sub_menu}}">
                                        <small class="text-danger">{{ $errors->first('sub_menu') }}</small>
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                          
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="last-name-column">Slug Name</label>
                                    <input type="text" id="last-name-column" class="form-control"
                                        placeholder="Last Name" name="sub_menu_slug" value="{{$submenu->sub_menu_slug}}">
                                    <small class="text-danger"> {{ $errors->first('sub_menu_slug') }} </small>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="city-column">Url link</label>
                                    <input type="text" id="city-column" class="form-control" placeholder="City"
                                        name="sub_menu_ulr"  value="{{$submenu->sub_menu_ulr}}">

                                    <small class="text-danger"> {{ $errors->first('sub_menu_ulr') }} </small>
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


