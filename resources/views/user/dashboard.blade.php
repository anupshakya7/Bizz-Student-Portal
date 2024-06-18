@extends('layout.main')
@section('content')
<h2>Dashboard Page</h2>
@endsection
@section('script')
<script>
    @if(Session::has('login'))
        toastr.options = {
            "closeButton":true,
            "progressBar":true
        }
        toastr.success("{{session('login')}}")
    @endif
</script>
@endsection