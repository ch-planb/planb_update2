@extends('admin.admin_master')
@section('admin_content')



  

    <!-- Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add sub menu</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route('admin.submenu.submit') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-5 col-5 ml-1">
                                   
                                       
                                    <select class="js-example-basic-single" name="sub_menu_id">
                                        @foreach ($menus as $menu)
                                            
                                        
                                        <option value="{{$menu->id}}">{{$menu->name}}</option>
                                        @endforeach 
                                       
                                      </select>

                                 
                                        
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <div class="form-group">
                                        <label for="first-name-column">Sub Menu Name</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            placeholder="First Name" name="sub_menu">
                                        <small class="text-danger">{{ $errors->first('sub_menu') }}</small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Sub menu Slug Name</label>
                                        <input type="text" id="last-name-column" class="form-control"
                                            placeholder="Last Name" name="sub_menu_slug">
                                        <small class="text-danger"> {{ $errors->first('sub_menu_slug') }} </small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="city-column">Sub menu Url link</label>
                                        <input type="text" id="city-column" class="form-control" placeholder="City"
                                            name="sub_menu_ulr">

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

        <div class="row">
            <div class="content-body ">
                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12 ml-1">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Table Basic</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    List for the menus
                                </p>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Url</th>
                                            <th>Action-edit</th>
                                            <th>Action-delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allSubMenu as $menu)


                                            <tr>

                                                <td>{{ optional($menu)->sub_menu }}</td>
                                                <td>{{ optional($menu)->sub_menu_slug }}</td>
                                                <td>{{ optional($menu)->sub_menu_ulr }}</td>
                                                <td><a href="{{route('admin.submenu.edit',$menu->id)}}" class="d-flex align-items-center" target="_self">edit</a></td>
                                                <td><a href="{{route('admin.submenu.delete',$menu->id)}}" class="d-flex align-items-center" target="_self">delete</a></td>


                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Tables end -->
            </div>
        </div>
    
    <!-- Basic Floating Label Form section end -->
    @push('child-scripts')
     <script src="{{asset('admin_assets/app-assets/js/scripts/components/components-dropdowns.js')}}"></script>
   
   
    @endpush

   


@endsection
