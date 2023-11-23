<script>
    @if(Session::has('message'))
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ Session::get('message') }}',
        });
    @endif
</script>
