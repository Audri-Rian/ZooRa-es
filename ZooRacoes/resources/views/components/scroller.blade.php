<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<div class="p-8">

    <div class="relative -mx-8 my-8 w-[calc(100%+4rem)] bg-white border-y-2 border-gray-300 py-3">

        <div x-data="{}" x-init="$nextTick(() => {
            let ul = $refs.items;
            let containerWidth = ul.scrollWidth;
            let screenWidth = window.innerWidth;
            let clonesNeeded = Math.ceil(screenWidth / containerWidth) * 2;
        
            for (let i = 0; i < clonesNeeded; i++) {
                let clone = ul.cloneNode(true);
                ul.parentNode.appendChild(clone);
            }
        })" class="w-full flex overflow-hidden">

            <ul x-ref="items" role="list" aria-label="Lista de empresas"
                class="flex items-center animate-infinite-scroll">
                @foreach (['BRFPet', 'SpecialDog', 'Premierpet', 'TotalAlimentos', 'PurinaBrasil', 'RaçõesFVO',
                'AdimaxPet', 'RaçõesSupra', 'FriRibe'] as $company)
                <li class="flex items-center text-lg font-semibold text-gray-800 px-14 py-2 space-x-2 ">
                    <img src="/images/{{ strtolower($company) }}.png" alt="{{ $company }} logo"
                        class="w-16 h-16 object-contain">
                    <span>{{ $company }}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

</div>