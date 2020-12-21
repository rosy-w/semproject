@extends('laratrust::panel.layout')

@section('title', 'Add Food Item')

@section('content')
<div class="flex flex-col border">
    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-32">
        @csrf
        <form action="{{route('additem')}}" method="post">
            <label class="block my-4">
                <span class="text-gray-700">Food Name</span>
                <input
                  class="form-input mt-1 block w-full"
                  name="name"
                  autocomplete="off"
                  placeholder="Enter Food Name"
                >
            </label>
            <label class="block my-4">
                <span class="text-gray-700"> Category</span>
                <select class="form-select block w-full mt-1" x-model="model">
                  <option name="category" value="initial" disabled selected >Select a Category</option>
                  @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>
              </label>
            <label class="block my-4">
                <span class="text-gray-700">Description</span>
                <input
                  class="form-input mt-1 block w-full"
                  name="detail"
                  autocomplete="off"
                  placeholder="Enter a description"
                >
              </label>
              <label class="block my-4">
                <span class="text-gray-700">Price(in Ksh)</span>
                <input
                  class="form-input mt-1 block w-full"
                  name="price"
                  autocomplete="off"
                  placeholder="Price"
                  type="number"
                  min="1"
                >
              </label>
              <label class="block my-4">
                <span class="text-gray-700">Image</span>
                <input
                  class="form-input mt-1 block w-full"
                  name="image"
                  autocomplete="off"
                  placeholder="Enter a description"
                  type="file"
                >
              </label>

        <div class="flex justify-end mb-4">
          <a 
                href="{{route('admenu')}}" class="btn btn-red mr-4">Cancel
          </a>
          <button class="btn btn-blue" type="submit">Save</button>
   
        </div>
      </form>
    </div>
  </div>
  @endsection