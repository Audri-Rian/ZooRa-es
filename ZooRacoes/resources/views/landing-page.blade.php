<div>
    <section class="flex w-full">
        <div class=" w-2/5 p-12 text-textColor1 ml-10">
            <h1 class="text-6xl mb-8">Onde todos os <br>animais de <br>estimação <br> encontram conforto <br>e alegria!
            </h1>
            <a href="#" class=" text-xl ml-2 p-3 rounded-lg bg-[#141434] text-white"><button
                    class="w-80">Selecionar</button>
            </a>
            <div class="mt-20 ml-6 w-1/2 flex items-end">
                <div class="bg-[#F4745C]  w-1/2 rounded-tl-xl p-4">
                    <h1 class="text-black text-bold text-4xl mb-3">$2M</h1>
                    <p>Over $5milion in <br>pet products <br>sold worldwide</p>
                </div>
                <div class="bg-white h-60 w-1/2 rounded-t-xl p-4">
                    <h1 class="text-black text-bold text-4xl mb-4">96%</h1>
                    <p>Over $5milion in <br>pet products <br>sold worldwide</p>
                    <img src="{{ asset('images/dogsfamily.png') }}" alt="Cachorros" class="mt-4">
                </div>
            </div>
        </div>
        <div class="flex flex-col items-end space-x-10 p-12 w-3/5 ">
            <div class="flex items-end ">
                <div class="flex items-center justify-center h-[340px] bg-[#FCDC7C] w-[330px] rounded-xl mr-24">
                    <img src="{{ asset('images/WhiteDog.png') }}" alt="" class="h-[330px]">
                </div>

                <div class="h-[430px] w-[530px] rounded-xl bg-[#CCDC74] flex items-end justify-center">
                    <img src="{{ asset('images/Veterinarian_Dog.png') }}" alt="" class="h-[420px]">
                </div>
            </div>
            <div class="flex justify-end w-1/2 mt-3">
                <div class="bg-white mr-32 p-4 rounded-xl flex flex-col">
                    <i class="fa-solid fa-dog"></i>
                    Best Seller <br> product
                </div>

                <div class="bg-white rounded-xl flex">
                    <img src="{{ asset('images/portion dog.png') }}" alt=""
                        class="w-24 h-full border-r border-gray-200">
                    <div class="flex flex-col p-4">
                        <h1 class="text-bold text-sm">PetPedicure Nail Clippers</h1>
                        <p class="text-xs">Your Solution to maintaing your <br> pet`s paw perfection</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-browse-category :categories="$categories" />
    <!--View Product-->
    <div class="p-16">
        <div class="flex justify-between">
            <h2 class="text-3xl mb-6">Lastest Products</h2>
            <div class="space-x-4">
                <a href="">View All</a><i class="fa-solid fa-arrow-up-right-from-square"></i>
            </div>
        </div>
        <!--Component criado com nescessidade de ter logica relacionadas a product 
        e tamanho adpatado na div em que componhe para não quebrar o codigo -->
        <div class="flex justify-between">
            <div class="flex flex-col">
                <div class="bg-white flex justify-center items-center">
                    <img src="{{ asset('images/portion dog.png') }}" alt="Product" class="w-[400px] h-[500px]">
                </div>
                <h1 class="text-xl">Bark Buddies Playpen</h1>
                <h2 class="text-gray-400 text-lg">Price</h2>
            </div>
            <div class="flex flex-col ">
                <div class="bg-white">
                    <img src="{{ asset('images/portion dog.png') }}" alt="Product" class="w-[400px] h-[500px]">
                </div>
                <h1 class="text-xl">Bark Buddies Playpen</h1>
                <h2 class="text-gray-400 text-lg">Price</h2>
            </div>
            <div class="flex flex-col ">
                <div class="bg-white">
                    <img src="{{ asset('images/portion dog.png') }}" alt="Product" class="w-[400px] h-[500px]">
                </div>
                <h1 class="text-xl">Bark Buddies Playpen</h1>
                <h2 class="text-gray-400 text-lg">Price</h2>
            </div>
            <div class="flex flex-col ">
                <div class="bg-white">
                    <img src="{{ asset('images/portion dog.png') }}" alt="Product" class="w-[400px] h-[500px]">
                </div>
                <h1 class="text-xl">Bark Buddies Playpen</h1>
                <h2 class="text-gray-400 text-lg">Price</h2>
            </div>
        </div>
    </div>

    <x-scroller />

    <div class="p-16">
        <div class="h-screen w-full bg-cover bg-center rounded-3xl"
            style="background-image: url('{{ asset('images/racao-bg.jpg') }}');">
            <div class="flex">
                <div class="p-16">
                    <h1 class="text-yellow-500 text-8xl">Choose best food</h1>
                    <p></p>
                    <a href=""></a>
                </div>

                <div class="flex flex-col ">
                    <div class="bg-white">
                        <img src="{{ asset('images/portion dog.png') }}" alt="Product" class="w-[400px] h-[500px]">
                    </div>
                    <h1 class="text-xl">Bark Buddies Playpen</h1>
                    <h2 class="text-gray-400 text-lg">Price</h2>
                </div>
            </div>
        </div>
    </div>

</div>