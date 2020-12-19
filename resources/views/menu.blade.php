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
<div class="bg-white border shadow-sm">
    <div>
        <ul class="nav flex-row border list-group list-group-flush w-100 d-flex justify-content-center text-center pt-4">
            @foreach ($categories as $category)
            <li class="list-group-item bg-light"><a href="{{ route('category',['category'=> $category->name])}}">{{$category->name}}</a></li>       
            @endforeach
        </ul>
    </div>
    <div class="row">     
        @foreach ($items as $item)
            <div class="col-md-6">
                <h1>{{$item->name}}</h1>
                <p>{{$item->description}}</p>
                <p>{{$item->price}}</p>
                <button>Add to Cart</button>
            </div>
        @endforeach 
    </div>
    
</div>
@endsection

