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
<div class="bg-white border shadow-sm w-75 m-auto p-3">
    <div>
        <ul class="nav flex-row border list-group list-group-flush w-100 d-flex justify-content-center text-center pt-4">
            @foreach ($categories as $category)
            <li class="list-group-item px-5"><h3><a href="{{ route('category',['category'=> $category])}}">{{$category->name}}</a></h3></li>       
            @endforeach
        </ul>
    </div>
    <div class="row p-3">     
        @foreach ($items as $item)
            <div class="col-md-6">
                <div class="float-left p-2">
                    <img src={{ asset('storage/'.$item->image_url) }} alt="">
                </div>
                <h3 class="p-2">{{$item->name}}</h3>
                <p>{{$item->description}}</p>
                <p>Ksh. {{$item->price}}</p>
                <button class="float-right" >Add to Cart</button>
            </div>
        @endforeach 
    </div>
    
</div>
@endsection

