<script src="{{asset('admin')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('admin')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('admin')}}/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="{{asset('admin')}}/js/ruang-admin.min.js"></script>
  {{-- <script src="{{asset('admin')}}/vendor/chart.js/Chart.min.js"></script> --}}
  {{-- <script src="{{asset('admin')}}/js/demo/chart-area-demo.js"></script> --}}

  <script src="{{asset('admin')}}/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="{{asset('admin')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--image preview -->
  <script src="{{asset('admin')}}/img-preview/imoViewer-min.js"></script>
   <!-- Select2 -->
   <script src="{{asset('admin')}}/vendor/select2/dist/js/select2.min.js"></script>

   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

   <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<!--Ck editor -->
   <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
   <script>
    ClassicEditor
        .create( document.querySelector( '#editor2' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
<!--end ck editor-->

  <!--Data table -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
<!--image preview-->
<script>
    $(function () {
      $('#file-input').imoViewer({
        'preview' : '#image-previewer',
      })
    });
  </script>
<!--select 2 for multiple select-->
  <script>
     $('.select2-multiple').select2();
     $('.select2-single').select2();
  </script>

<script>
    $(document).ready(function(){
        $('.js-example-basic-single').select2({
            theme: "classic"
        });
    });
    </script>





