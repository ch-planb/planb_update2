@extends('admin.admin_master')
@section('admin_content')



    <!-- Basic multiple Column Form section start -->
    {{-- <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Multiple dddddd  Column</h4>
                    </div>
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Menu Name</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            placeholder="First Name" name="fname-column">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Slug Name</label>
                                        <input type="text" id="last-name-column" class="form-control"
                                            placeholder="Last Name" name="lname-column">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="city-column">Url link</label>
                                        <input type="text" id="city-column" class="form-control" placeholder="City"
                                            name="city-column">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="reset"
                                        class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <!-- Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Multiple Column</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route('admin.menu.submit') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Menu Name</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            placeholder="First Name" name="name">
                                        <small class="text-danger">{{ $errors->first('name') }}</small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Slug Name</label>
                                        <input type="text" id="last-name-column" class="form-control"
                                            placeholder="Last Name" name="slug">
                                        <small class="text-danger"> {{ $errors->first('slug') }} </small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="city-column">Url link</label>
                                        <input type="text" id="city-column" class="form-control" placeholder="City"
                                            name="url">

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

    </section>
            
    
    <!-- Basic Floating Label Form section end -->

@endsection
