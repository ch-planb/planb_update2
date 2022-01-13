@extends('admin.admin_master')
@section('admin_content')
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
                            <th>Description</th>
                            <th>Icon</th>
                            <th>Action-edit</th>
                            <th>Action-delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $data)


                            <tr>

                                <td>{{ optional($data)->title }}</td>
                                <td>{{ optional($data)->description }}</td>
                                <td><img style="width: 80px; height:90px; border-radius:50%" src="{{ asset(optional($data)->icon )}}" alt="Icon"></td>
                                <td><a href="{{route('service.edit',$data->id)}}" class="d-flex align-items-center" target="_self">Edit</a></td>
                                <td><a href="{{route('service.delete',$data->id)}}" class="d-flex align-items-center text-danger" id="delete" target="_self">Delete</a></td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection