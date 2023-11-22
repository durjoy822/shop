@if (Session::has('message'))
    <script>
        Swal.fire({
        title: 'Error!',
        text: 'Do you want to continue',
        icon: 'error',
        confirmButtonText: 'Cool'
        })
    </script>
@endif
