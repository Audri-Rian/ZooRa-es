<div class="p-16">
    <h2 class="text-3xl mb-6 mt-6">Browse by Category</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 space-x-2">
        @foreach ($categories as $ProductCategory)

        <div class="bg-white p-4 rounded-full shadow-md flex w-[400px] space-x-5">
            <img src="{{ asset('images/portion dog.png') }}" alt="" class="w-24 h-24">
            <div class="flex flex-col p-4">
                <h3 class="font-semibold text-xl">{{ $ProductCategory->name }}</h3>
                <p class="text-gray-600">{{ $ProductCategory->desc }}</p>
            </div>
            <div class="flex items-center justify-center ml-4">
                <a href="#"><i class="fa-solid fa-arrow-right border-2 border-gray-100 rounded-full p-2"></i></a>
            </div>
        </div>
        @endforeach
    </div>
</div>