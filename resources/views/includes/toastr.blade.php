
@if(Session::has("alert_status") && Session::has("alert_message"))
    toastr.options = {
        "progressBar": true,
        "closeButton": true
    }
    
    @if(Session::get("alert_status") == "success")
        toastr.success("{{ Session::get('alert_message') }}")
    @endif

    @if(Session::get("alert_status") == "error")
        toastr.error("{{ Session::get('alert_message') }}")
    @endif
@endif