@extends('admin.admin_master')
@section('admin_content')


<!-- Basic Tables start -->
<div class="row" id="basic-table">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Project Category List</h4>
                <a href="{{route('project.category.create')}}" type="button" class="btn btn-primary">Add Project Category</a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">SL</th>
                            <th>Name</th>
                            <th>Status</th>
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
                url: "/show/projects/categories",
                dataType: "json",
                success: function(response) {

                    $('#tBody').html("");
                    $.each(response, function(key, data) {

                        $('#tBody').append(`
                        <tr>
                        <td class="text-center">${sl++}</td>
                        <td>${data.name}</td>
                        <td>${data.status}</td>
                        <td>
                            <button type="button" data-value="${data.id}" class="btn btn-danger btn-sm waves-effect waves-float waves-light" id="delete_project_category">Delete</button>
                        </td>
                    </tr>
                        
                        `);
                    });
                }
            });
        };

        $(document).on('click', '#delete_project_category', function() {

            var id = $(this).data('value');
            console.log(id);
            var url = "/project/category/delete/" + id;


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