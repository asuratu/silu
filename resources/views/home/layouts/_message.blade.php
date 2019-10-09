<script>
    @if (Session::has('message'))

    layer.alert('{{ Session::get('message') }}');

    @endif
</script>