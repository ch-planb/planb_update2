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

                  <!-- Basic table -->
                  <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <table class="datatables-basic table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Date</th>
                                            <th>Salary</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Modal to add new record -->
                    <div class="modal modal-slide-in fade" id="modals-slide-in">
                        <div class="modal-dialog sidebar-sm">
                            <form class="add-new-record modal-content pt-0">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title" id="exampleModalLabel">New Record</h5>
                                </div>
                                <div class="modal-body flex-grow-1">
                                    <div class="form-group">
                                        <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                        <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="basic-icon-default-post">Post</label>
                                        <input type="text" id="basic-icon-default-post" class="form-control dt-post" placeholder="Web Developer" aria-label="Web Developer" />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="basic-icon-default-email">Email</label>
                                        <input type="text" id="basic-icon-default-email" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com" />
                                        <small class="form-text text-muted"> You can use letters, numbers & periods </small>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="basic-icon-default-date">Joining Date</label>
                                        <input type="text" class="form-control dt-date" id="basic-icon-default-date" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="form-label" for="basic-icon-default-salary">Salary</label>
                                        <input type="text" id="basic-icon-default-salary" class="form-control dt-salary" placeholder="$12000" aria-label="$12000" />
                                    </div>
                                    <button type="button" class="btn btn-primary data-submit mr-1">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <!--/ Basic table -->

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
