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
    <div class="row ">
        <div class="col-9">
            <div class="card">
                <div>
                    Welcome to Our Restaurant
                </div>
                <a href="{{ route('menu') }}">Order Now</a>
            </div>
        </div>
        <div class="col">
            This is the second column
        </div>
    </div>

</div>
<div class="container">
    <div class="row">

    </div>
</div>
@endsection
