@if (session()->has('flash_notification.message'))
    <script type="text/javascript">
    toastr.{{session('flash_notification.level')}}('{!! session('flash_notification.message') !!}')
    </script>
@endif

