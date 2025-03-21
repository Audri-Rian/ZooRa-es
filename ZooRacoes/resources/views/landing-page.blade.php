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
    <!-- Tem que colocar o caralho do background-image para continuar indo com a imagem-->
    <div class="p-32 -mt-24">
        <div class="h-screen w-full bg-cover bg-center rounded-3xl relative" id="background-image"
            style="background-image: url('{{ asset('images/racao-bg.jpg') }}');">
            <!-- Overlay escuro -->
            <div class="absolute inset-0 bg-black bg-opacity-50 rounded-3xl"></div>

            <!-- Conteúdo -->
            <div class="relative z-10 flex">
                <div class="p-16 mt-32 flex flex-col">
                    <h1 class="text-[#edd74d] text-8xl">Choose best food</h1>
                    <p class="text-white text-xl text-bold mt-10">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Id
                        aut in
                        itaque
                        eius.
                        Expedita <br>, aperiam
                        eius, error doloribus repellat nihil veritatis nisi animi quisquam alias ad unde quod autem aut.
                    </p>
                    <a href=""
                        class="p-6 border-2 border-rounded border-[#edd74d] text-[#edd74d] mt-80 w-48 flex justify-center items-center rounded-full hover:bg-[#edd74d] hover:text-black transition duration-300 ease-in-out">
                        Shop Now
                    </a>
                </div>

                <div class="flex flex-col bg-[#fcecec] p-8 rounded-3xl mt-32 mr-8">
                    <div class="bg-white">
                        <img src="{{ asset('images/domestic-pet-food-composition.jpg') }}" alt="Product"
                            class="w-[500px] h-[600px] ">
                    </div>
                    <h1 class="text-xl">Bark Buddies Playpen</h1>
                    <h2 class="text-gray-400 text-lg">R$ 128,00</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Blade Template: resources/views/specialist-services.blade.php -->

    <div class="bg-white py-16 px-4 sm:px-10 lg:px-20 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Partnered In-House Specialist Services</h2>
        <p class="text-gray-600 mb-12 max-w-2xl mx-auto">
            In addition to our in-house animal healthcare facilities, we also have access (by appointment) to a range of
            specialist veterinary care services for your furry friend.
        </p>

        <div class="grid md:grid-cols-3 gap-8 items-center">
            <!-- Left Column -->
            <div class="flex flex-col gap-10 items-end text-right">
                <div>
                    <div class="flex items-center gap-3 justify-end">
                        <img src="{{ asset('images/surgery-icon.png') }}" alt="Surgical Icon" class="w-6 h-6">
                        <span class="text-lg font-medium text-gray-700">Surgical Services</span>
                    </div>
                </div>
                <div>
                    <div class="flex items-center gap-3 justify-end">
                        <img src="{{ asset('images/physio-icon.png') }}" alt="Physio Icon" class="w-6 h-6">
                        <span class="text-lg font-medium text-gray-700">Animal Physiotherapy</span>
                    </div>
                </div>
                <div>
                    <div class="flex items-center gap-3 justify-end">
                        <img src="{{ asset('images/laser-icon.png') }}" alt="Laser Icon" class="w-6 h-6">
                        <span class="text-lg font-medium text-gray-700">Medical Laser Therapy</span>
                    </div>
                </div>
            </div>

            <!-- Center Image -->
            <div class="flex justify-center">
                <img src="{{ asset('images/WhiteDog.png') }}" alt="Dog" class="w-full max-w-xs">
            </div>

            <!-- Right Column -->
            <div class="flex flex-col gap-10 items-start text-left">
                <div>
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('images/medicine-icon.png') }}" alt="Medicine Icon" class="w-6 h-6">
                        <span class="text-lg font-medium text-gray-700">Small - Animal Medicine Specialist</span>
                    </div>
                </div>
                <div>
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('images/lab-icon.png') }}" alt="Lab Icon" class="w-6 h-6">
                        <span class="text-lg font-medium text-gray-700">External Laboratory Services</span>
                    </div>
                </div>
                <div>
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('images/cardiology-icon.png') }}" alt="Cardiology Icon" class="w-6 h-6">
                        <span class="text-lg font-medium text-gray-700">Cardiology Services</span>
                    </div>
                </div>
            </div>
        </div>

        <p class="text-sm text-gray-500 mt-12">
            Greystanes Vet Clinic works with IDEXX and Vetnostics who offer leading veterinary laboratory and pathology
            services in New South Wales.
        </p>

        <div class="mt-6">
            <a href="#"
                class="inline-flex items-center text-white bg-orange-500 hover:bg-orange-600 px-6 py-3 rounded-full text-lg font-medium transition">
                View Specialist Services
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>




</div>