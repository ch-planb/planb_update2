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
                                <div class="col-md-6 col-6">
                                   
                                       
                                <section id="dropdown-directions">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Directions</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text mb-0">
                                                            You can use drop from different direction to use drop from bottom right use
                                                            <code>.dropdown-menu-right</code> with your <code>.dropdown-menu</code>. For drop up use
                                                            <code>.dropup</code> as a wrapper. For drop right use <code>.dropright</code> as wrapper. For drop left use
                                                            <code>.dropleft</code> as a wrapper.
                                                        </p>
                                                        <div class="demo-inline-spacing">
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Drop bottom right
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                                </div>
                                                            </div>
                                                            <div class="btn-group dropup">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Drop up
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                                    <a class="dropdown-item disabled" href="javascript:void(0);">Option 2</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                                </div>
                                                            </div>
                                                            <div class="btn-group dropright">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Drop right
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <h6 class="dropdown-header">Header</h6>
                                                                    <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                                </div>
                                                            </div>
                                                            <div class="btn-group dropleft">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Drop left
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                                    <a class="dropdown-item disabled" href="javascript:void(0);">Option 2</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                 
                                        
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

        {{-- <div class="row">
            <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
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
                                        @foreach ($allMenu as $menu)


                                            <tr>

                                                <td>{{ optional($menu)->name }}</td>
                                                <td>{{ optional($menu)->slug }}</td>
                                                <td>{{ optional($menu)->url }}</td>
                                                <td><a href="{{route('admin.menu.edit',$menu->id)}}" class="d-flex align-items-center" target="_self">edit</a></td>
                                                <td><a href="{{route('admin.menu.delete',$menu->id)}}" class="d-flex align-items-center" target="_self">delete</a></td>


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
        </div> --}}
    
    <!-- Basic Floating Label Form section end -->
    @push('child-scripts')
    <script src="{{asset('admin_assets/app-assets/js/scripts/components/components-dropdowns.js')}}"></script>
    @endpush
@endsection
