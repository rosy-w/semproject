@extends('layouts.app')
@section('extra-nav') 
<li class="nav-item">
    @role('admin')
    <a class="nav-link" href="/admin">Admin</a>
    @endrole
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('menu') }}">Menu</a>
</li>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-9 border">
            This is the first column
        </div>
        <div class="col border">
            This is the second column
        </div>
    </div>
</div>
@endsection
