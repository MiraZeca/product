@if ($message = Session::get('update'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            M.toast({
                html: '{{ $message }}',
                classes: 'rounded'
            });
        });
    </script>
@endif

@if ($message = Session::get('delete'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            M.toast({
                html: '{{ $message }}',
                classes: 'rounded'
            });
        });
    </script>
@endif


@if ($message = Session::get('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            M.toast({
                html: '{{ $message }}',
                classes: 'rounded'
            });
        });
    </script>
@endif

@if ($message = Session::get('create'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            M.toast({
                html: '{{ $message }}',
                classes: 'rounded'
            });
        });
    </script>
@endif






