<div id="todoModal" class="fixed z-10 hidden inset-0 bg-black/50  items-center justify-center">

    <div class="bg-white w-[400px] p-6 rounded-lg relative shadow-lg">

        <!-- cross button for close the modal -->
        <button onclick="closeModal()" type="button"
            class="absolute top-3 right-4 text-xl font-bold text-gray-500 hover:text-black">
            &times;
        </button>

        <h2 class="text-xl font-semibold mb-5">Create a Todo</h2>

        <form class="space-y-4" action="{{route('postTodos')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- toso name -->
            <div>
                <input type="text" name="name" placeholder="Enter Name"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <!-- todo description -->
            <div>
                <textarea name="price" placeholder="Enter Price"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 h-24 resize-none focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
            </div>

            <!-- todo image -->
            <div>
                <input type="file" name="image"
                    class="w-full text-sm border border-gray-300 rounded-md px-3 py-2 file:mr-3 file:py-1 file:px-3 file:border-0 file:bg-green-600 file:text-white file:rounded-md file:cursor-pointer hover:file:bg-green-700">
            </div>


            <div class="flex justify-end gap-3 pt-2">
                <button onclick="closeModal()" type="button"
                    class="px-4 py-2 bg-gray-300 rounded-md hover:bg-gray-400">
                    Decline
                </button>

                <button type="submit"
                    class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">
                    Create
                </button>
            </div>

        </form>

    </div>

</div>