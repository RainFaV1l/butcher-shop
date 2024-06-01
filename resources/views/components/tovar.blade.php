@props(['id', 'date', 'title', 'description', 'price', 'img', 'edit', 'delete'])
<div class="flex flex-col bg-[#1C1D1F] w-[361px] items-start px-[30px] py-[40px] gap-[20px]">
    <img class="h-[182px] w-full object-cover" src="{{ $img }}" alt="Изображение">
    <div class="flex flex-col">
        <p class="text-[16px] text-white opacity-[0.5] font-neucha">Изготовлен: {{ date('d-m-Y', strtotime($date)) }}</p>
        <h3 class="text-[24px] text-white mt-[15px] font-neucha">{{$title}}</h3>
        <p class="text-[16px] text-white opacity-[0.5] mt-[15px] font-neucha">{{$description}}</p>
        <p class="text-[16px] text-white mt-[30px] font-neucha">{{$price}} ₽ за кг.</p>
        <x-form-button action="{{ route('cart.store', $id) }}" class="mt-[15px] text-[#DC272C] text-[16px] flex gap-[10px] items-center relative font-neucha">
            Добавить в корзину
            <x-heroicon-o-arrow-long-right class="transition-transform transform hover:translate-x-1" color="#DC272C" width="30"/>
        </x-form-button>
        @if(isset($edit) && isset($delete))
            <div class="flex gap-[15px] mt-[30px]">
                <a href="{{ route($edit, $id) }}" class="bg-white text-[12px] 400:text-[16px] py-[14px] px-[20px] 400:px-[50px] transition duration-200 hover:bg-gray-300">Редактировать товар</a>
                <x-form-button method="DELETE" action="{{ route($delete, $id) }}" class="bg-red-500 rounded px-[14px] h-full button">
                    <x-heroicon-c-trash width="24" color="white"/>
                </x-form-button>
            </div>
        @endif
    </div>
</div>
