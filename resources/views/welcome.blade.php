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
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://dummyimage.com/1200x450/8c8/000000&text=1200x400" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h3><a href="{{ route('menu') }}">Order Now</a></h3>
                <p>This is a description for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://dummyimage.com/1200x450/88c/000000&text=1200x400" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Second Slide</h3>
                <p>This is a description for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://dummyimage.com/1200x450/888/000000&text=1200x400" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Third Slide</h3>
                <p>This is a description for the second slide.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" ></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" ></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container bg-white border shadow-sm">
    <div class="row">
        <div class="col-9">
            This is the first column
        </div>
        <div class="col">
            This is the second column
        </div>
    </div> 
</div>
@endsection
