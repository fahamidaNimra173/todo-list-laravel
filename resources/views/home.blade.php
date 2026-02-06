@extends('layouts.index')
@section('title', 'Home Page')

@section('content')
<div>
    <div class="overflow-x-auto translate-y-1/2 mx-5 mt-20 bg-gray-900/10 text-white shadow rounded-lg">
        <table class="min-w-full border border-gray-800">

            <thead class="bg-gray-900 border-b border-gray-800">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-orange-400">#</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-orange-400">Name</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-orange-400">Price</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-orange-400">Status</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-orange-400">Action</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-800">
                <tr class="">
                    <td class="px-4 py-3 text-black ">1</td>
                    <td class="px-4 py-3 text-black ">Buy Milk</td>
                    <td class="px-4 py-3 text-black ">$10</td>
                    <td class="px-4 py-3 text-orange-400 font-semibold">Pending</td>
                    <td class="px-4 py-3">
                        <button class="text-green-600 hover:underline">Edit</button>
                        <button class="text-red-500 hover:underline ml-3">Delete</button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-800">
                    <td class="px-4 py-3 text-black">1</td>
                    <td class="px-4 py-3 text-black">Buy Milk</td>
                    <td class="px-4 py-3 text-black">$10</td>
                    <td class="px-4 py-3 text-orange-400 font-semibold">Pending</td>
                    <td class="px-4 py-3">
                        <button class="text-green-600 hover:underline">Edit</button>
                        <button class="text-red-500 hover:underline ml-3">Delete</button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-800">
                    <td class="px-4 py-3 text-black">1</td>
                    <td class="px-4 py-3 text-black">Buy Milk</td>
                    <td class="px-4 py-3 text-black">$10</td>
                    <td class="px-4 py-3 text-orange-400 font-semibold">Pending</td>
                    <td class="px-4 py-3">
                        <button class="text-green-600 hover:underline">Edit</button>
                        <button class="text-red-500 hover:underline ml-3">Delete</button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-800">
                    <td class="px-4 py-3 text-black">1</td>
                    <td class="px-4 py-3 text-black">Buy Milk</td>
                    <td class="px-4 py-3 text-black">$10</td>
                    <td class="px-4 py-3 text-orange-400 font-semibold">Pending</td>
                    <td class="px-4 py-3">
                        <button class="text-green-600 hover:underline">Edit</button>
                        <button class="text-red-500 hover:underline ml-3">Delete</button>
                    </td>
                </tr>


            </tbody>

        </table>
    </div>


</div>
@endsection