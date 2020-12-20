@extends('laratrust::panel.layout')

@section('title', 'Menu Items')

@section('content')
  <div class="flex flex-col">
    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
      <div class="mt-4 align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200 p-4">
        <span class="text-gray-700">Categories of Food Items</span>
        <div>
          <label class="block w-3/12">
            <select class="form-select block w-full mt-1" x-model="model">
              <option value="initial" disabled selected>Select a category</option>
              @foreach ($categories as $category)
                <option value="{{$category}}">{{$category->name}}</option>
              @endforeach
            </select>
          </label>
          <a href="{{route('add')}}" class=" float-right font-semibold hover:text-red py-2 px-4 my-2 border rounded">
            + New Food Item
        </a>
        </div>
        <div class="flex mt-4 align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg ">
          <table class="min-w-full">
            <thead>
              <tr>
                <th class="th">Id</th>
                <th class="th">Name</th>
                <th class="th">Description</th>
                <th class="th">Price</th>
                <th class="th">Quantity</th>
              </tr>
            </thead>
            <tbody class="bg-white">
              @foreach ($items as $item)
              <tr>
                <td class="td text-sm leading-5 text-gray-900">
                  {{$item->item_id}}
                </td>
                <td class="td text-sm leading-5 text-gray-900">
                  {{$item->name ?? 'The model doesn\'t have a `name` attribute'}}
                </td>
                <td class="td text-sm leading-5 text-gray-900">
                  {{$item->description}}
                </td>
                <td class="td text-sm leading-5 text-gray-900">
                  {{$item->price}}
                </td>
                <td class="td text-sm leading-5 text-gray-900">
                    {{$item->quantity}}
                </td>
                <td class="flex justify-end px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                    <a href="{{ route('edit', ['id' => $item->item_id]) }}"
                    class="text-blue-600 hover:text-blue-900">Edit
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
  {{ $items->links('laratrust::panel.pagination') }}
@endsection