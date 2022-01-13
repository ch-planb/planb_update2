
<!-- BEGIN: Vendor JS-->
<script src="{{asset('admin_assets/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('admin_assets/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('admin_assets/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js')}}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>



<script src="{{asset('admin_assets/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
<script src="{{asset('admin_assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('admin_assets/app-assets/vendors/js/tables/datatable/jszip.min.js')}}"></script>
<script src="{{asset('admin_assets/app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
<script src="{{asset('admin_assets/app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
<script src="{{asset('admin_assets/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin_assets/app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
<script src="{{asset('admin_assets/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js')}}"></script>
<!-- END: Page Vendor JS-->


<!-- BEGIN: Page JS-->
<script src="{{ asset('admin_assets/app-assets/js/scripts/tables/table-datatables-basic.js')}}"></script>
<script src="{{ asset('admin_assets/app-assets/js/scripts/tables/table-datatables-advanced.js')}}"></script>
<!-- END: Page JS-->

<script src="{{asset('admin_assets/app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('admin_assets/app-assets/js/scripts/extensions/ext-component-sweet-alerts.js')}}"></script>

<!-- Start: Page JS-->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<!-- BEGIN: Theme JS-->
<script src="{{asset('admin_assets/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('admin_assets/app-assets/js/core/app.js')}}"></script>

<script src="{{asset('admin_assets/app-assets/js/scripts/components/components-dropdowns.js')}}"></script>
<!-- END: Theme JS-->
{{--------------- summer note js ---------------------}}
<script src="{{asset('admin_assets/summernote/summernote.min.js')}}"></script>

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>


{{-- for toaster and sweetalert --}}

<!-- toster cdn  -->
<script  src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
  @if(Session::has('message'))
  var type = "{{ Session::get('alert-type', 'info')}}"
   switch (type) {

       case 'info':
       toastr.info(" {{ Session::get('message') }} ");
           break;

      case 'success':
      toastr.success(" {{ Session::get('message') }} ");
           break;

      case 'warning':
      toastr.warning(" {{ Session::get('message') }} ");
           break;

      case 'error':
      toastr.error(" {{ Session::get('message') }} ");


            break;
            default:
          break;
  }

   @endif

  </script>

{{-- sweet alert note.... --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(function(){
  $(document).on('click','#delete',function(e){
      e.preventDefault();
      var link = $(this).attr("href");
              Swal.fire({
                  title: 'Are you sure?',
                  text: "Delete This Data?",
                  icon: 'warning',
                  showCancelButton: false,
                  confirmButtonColor: '#3085D6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                  if (result.isConfirmed) {
                  window.location.href = link
                  Swal.fire(
                      'Deleted!',
                      'Your file has been deleted.',
                      'success'
                  )
                  }
              })
  });
});// main funcations end
</script>

{{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
{{-- for toaster and sweetalert --}}