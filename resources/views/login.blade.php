@extends('master')
@section('content')
<div class="container">
<div class="col-sm-4 col-sn-offset">
<form action="/login" method="Post">
@csrf
</form>
</div>
</div>
@endsection()