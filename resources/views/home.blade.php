@extends('layouts.index')
@section('title', 'Home Page')

@section('content')
<div>
    <h1 class="text-orange-600 mt-20 font-bold text-3xl text-center my-5 ">List of your works</h1>
    <div class="overflow-x-auto mb-40 mx-5   text-white shadow rounded-lg">

        <table class="min-w-full border border-gray-400">

            <thead class="bg-green-600/10 border-b border-gray-400 w-full">
                <tr>
                    <th class="px-4 py-3 text-left  font-semibold text-orange-600">#</th>
                    <th class="px-4 py-3 text-left  font-semibold text-orange-600">Image</th>
                    <th class="px-4 py-3 text-left  font-semibold text-orange-600">Name</th>
                    <th class="px-4 py-3 text-left  font-semibold text-orange-600">Price</th>
                    <th class="px-4 py-3 text-left  font-semibold text-orange-600">Status</th>
                    <th class="px-4 py-3 text-left  font-semibold text-orange-600">Action</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-400">
                @foreach($todos as $singleTodo)

                <tr class="">
                    <td class="px-4 py-3 text-black ">{{$singleTodo->id}}</td>
                    <td class="px-4 py-3 text-black ">
                        <img class="w-15 h-15" src="images/{{$singleTodo->image}}" alt="">
                    </td>
                    <td class="px-4 py-3 text-black ">{{$singleTodo->name}}</td>
                    <td class="px-4 py-3 text-black ">{{$singleTodo->price}}</td>
                    <td class="px-4 py-3 {{$singleTodo->complete?'text-green-600':'text-orange-600'}} font-semibold cursor-pointer">
                        <a href="{{route('status',$singleTodo->id)}}"> {{$singleTodo->complete?'Completed':'Pending'}}</a>

                    </td>
                    <td class="px-4 py-3">
                        <a href="{{route('update',$singleTodo->id)}}" class="text-green-600 hover:underline cursor-pointer">Edit</a>

                        <a href="{{route('delete',$singleTodo->id)}}" class="text-red-500 hover:underline ml-3 cursor-pointer">Delete</a>
                    </td>
                </tr>
                @endforeach



            </tbody>

        </table>
    </div>


</div>
@endsection