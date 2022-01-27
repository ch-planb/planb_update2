@extends('admin.admin_master')
@section('admin_content')

    <!-- Responsive Datatable -->
    <section id="responsive-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Contacts List</h4>
                    </div>
                    <div class="card-datatable">
                        <table class="dt-responsive table">
                            <thead>
                                <tr>
                                    <th class="text-center">SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Message</th>
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
    </section>
    <!--/ Responsive Datatable -->




@endsection

@section('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            showdata();

            function showdata() {
                let sl = 1;
                $.ajax({
                    type: "GET",
                    url: "/show/contacts/data",
                    dataType: "json",
                    success: function(response) {
                        // console.log(response);

                        $('#tBody').html("");
                        $.each(response, function(key, data) {

                            $('#tBody').append(`
                            <tr>
                            <td class="text-center">${sl++}</td>
                            <td>${data.name}</td>
                            <td>${data.email}</td>
                            <td>${data.phone}</td>
                            <td>${data.message}</td>
                            <td>
                                <button type="button" data-value="${data.id}" class="btn btn-danger btn-sm waves-effect waves-float waves-light" id="delete_contact">Delete</button>
                            </td>
                        </tr>
                            
                            `);
                        });
                    }
                });
            };

            $(document).on('click', '#delete_contact', function() {

                var id = $(this).data('value');
                console.log(id);
                var url = "/contact/delete/" + id;


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
