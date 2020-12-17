@extends('layouts.app')

@section('extra-nav') 
<li>
    @role('admin')
    <a class="nav-link" href="">Admin</a>
    @endrole
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('menu') }}">Menu</a>
</li>
@endsection

@section('content')
<div class="container">

</div>
@endsection
