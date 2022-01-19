@extends('admin.admin_master')
@section('admin_content')


<!-- Basic Tables start -->
<div class="row" id="basic-table">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Projects List</h4>
                <a href="{{route('project.create')}}" type="button" class="btn btn-primary">Add Project</a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">SL</th>
                            <th>Project Image</th>
                            <th>Project Category Name</th>
                            <th>Client</th>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Project Description</th>
                            <th>Project Target</th>
                            <th>Project URL</th>
                            <th>Project Start Date</th>
                            <th>Project End Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="tBody">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Basic Tables end -->


@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        showdata();

        function showdata() {
            let sl = 1;
            $.ajax({
                type: "GET",
                url: "/show/projects",
                dataType: "json",
                success: function(response) {

                    $('#tBody').html("");
                    $.each(response, function(key, data) {

                        $('#tBody').append(`
                        <tr>
                        <td class="text-center">${sl++}</td>
                        <td>
                        <img src="/Upload/Images/Project/${data.image}" alt="Avatar" height="35" width="35" style="border-radius:50%">
                        </td>
                        <td>${data.pro_cat_id}</td>
                        <td>${data.pro_cat_id}</td>
                        <td>${data.title}</td>
                        <td>${data.sub_title}</td>
                        <td>${JSON.stringify(data.details)}</td>
                        <td>${data.target}</td>
                        <td>${data.link}</td>
                        <td>${data.start_date}</td>
                        <td>${data.end_date}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm text-white dropdown-toggle hide-arrow" data-toggle="dropdown">
                                    <i data-feather='more-vertical'></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <i data-feather="edit-2" class="mr-50"></i>
                                        <span>Edit</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <i data-feather='eye' class="mr-50"></i>
                                        <span>View</span>
                                    </a>
                                    <a class="dropdown-item" data-value="${data.id}" id="delete_project">
                                        <i data-feather="trash" class="mr-50"></i>
                                        <span>Delete</span>
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                        
                        `);
                    });
                }
            });
        };

        $(document).on('click', '#delete_project', function() {

            var id = $(this).data('value');
            var url = "/project/delete/" + id;


            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {

                if (result.isConfirmed) {
                    axios.post(url)
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                    showdata();
                }
            })
        });

    })
</script>
@endsection