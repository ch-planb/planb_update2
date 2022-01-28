@extends('admin.admin_master')
@section('admin_content')
<div class="row" id="basic-table">
            
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">About us</h4>
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
                            <th>Image</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($about as $data)
                            <tr>
                                <td>{{ optional($data)->title }}</td>
                                <td>{{ optional($data)->description }}</td>
                                <td><img style="width:120px;height:80px" src="{{asset($data->about_img)}}" alt="Image"></td>
                                <td><a href="{{route('aboutUs.delete',$data->id)}}" class="d-flex align-items-center text-danger" id="delete" target="_self">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection