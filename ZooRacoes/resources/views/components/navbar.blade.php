<nav>
    <div class="flex justify-center items-center w-full bg-navColor">
        <!-- Logo -->
        <a href="">
            <img src="{{ asset('images/logo.png') }}" alt="ZooRações a loja do seu cão" class="w-48 h-24 mr-12">
        </a>
        <div class="hidden md:flex items-center w-full max-w-xl bg-gray-100 rounded-3xl px-4 py-2">
            <label for="search" class="flex items-center cursor-pointer">
                <svg class="w-6 h-6 text-gray-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35m2.35-6.65a8 8 0 11-16 0 8 8 0 0116 0z"></path>
                </svg>
            </label>
            <input id="search" type="text" placeholder="Pesquisar..." class="w-full bg-transparent focus:outline-none">
        </div>
        <div class="hidden md:flex justify-center items-center text-white space-x-8 ml-16 mr-14">
            <a href="" class="hover:text-gray-300 transition">Atendimento</a>
            <a href="" class="hover:text-gray-300 transition">Sobre nós</a>
            <a href="" class="hover:text-gray-300 transition">A Budega de Urbano</a>
        </div>
        <div class="flex text-white space-x-3">
            <a href=""
                class="rounded-full border-2 border-gray-100 w-10 h-10 flex items-center justify-center hover:bg-gray-300 transition">
                <i class="fa-solid fa-user"></i>
            </a>
            <a href=""
                class="rounded-full border-2 border-gray-100 w-10 h-10 flex items-center justify-center hover:bg-gray-300 transition">
                <i class="fa-solid fa-right-from-bracket"></i>
            </a>
        </div>
        <button id="menu-toggle" class="md:hidden text-white focus:outline-none ml-4" aria-label="Abrir menu">
            <i class="fa-solid fa-bars text-2xl"></i>
        </button>
    </div>
    <div id="mobile-menu" class="hidden md:hidden bg-navGreen p-4 text-black">
        <a href="" class="block  hover:text-gray-300 transition mb-2">Atendimento</a>
        <a href="" class="block  hover:text-gray-300 transition mb-2">Sobre nós</a>
        <a href="" class="block  hover:text-gray-300 transition mb-4">A Budega de Urbano</a>
        <hr class="border-1 border-gray-100 mb-3">
        <div class="flex flex-col text-black space-y-2">
            <a href="" class=" hover:text-gray-300 transition">Medicamentos</a>
            <a href="" class=" hover:text-gray-300 transition">Acessórios</a>
            <a href="" class=" hover:text-gray-300 transition">Hormônios</a>
            <a href="" class=" hover:text-gray-300 transition">Pets</a>
            <a href="" class=" hover:text-gray-300 transition">Rações e Petiscos</a>
            <a href="" class=" hover:text-gray-300 transition">Pragas e Insetos</a>
            <a href="" class=" hover:text-gray-300 transition">Ofertas</a>
        </div>
    </div>
    <div class="hidden md:flex items-center justify-center bg-background text-black p-1 space-x-24 text-tiny">
        <a href="" class="hover:text-gray-300 transition">Medicamentos</a>
        <a href="" class="hover:text-gray-300 transition">Acessórios</a>
        <a href="" class="hover:text-gray-300 transition">Hormônios</a>
        <a href="" class="hover:text-gray-300 transition">Pets</a>
        <a href="" class="hover:text-gray-300 transition">Rações e Petiscos</a>
        <a href="" class="hover:text-gray-300 transition">Pragas e Insetos</a>
        <a href="" class="hover:text-gray-300 transition">Ofertas</a>
    </div>
</nav>
<script>
document.getElementById('menu-toggle').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
});
</script>