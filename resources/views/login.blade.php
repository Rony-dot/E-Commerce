@extends('master')
@section('content')
<div class="container">
<div class="col-sm-4 col-sn-offset">
<form action="/login" method="Post">
@csrf
<h1>login form</h1>
</form>
</div>
</div>
@endsection