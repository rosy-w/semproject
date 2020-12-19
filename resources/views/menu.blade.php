@extends('layouts.app')

@section('extra-nav')
<li class="nav-item">
    <a class="nav-link" href="{{ route('menu') }}">Menu</a>
    @role('admin')
    <a href="">Admin</a>
    @endrole
</li> 
@endsection

@section('content')
<div class="container">

</div>
@endsection
