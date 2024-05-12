@props(['date', 'title', 'description', 'price', 'img', 'edit', 'delete'])
<div class="flex flex-col bg-[#1C1D1F] w-[361px] items-center px-[30px] py-[40px] gap-[20px]">
    <img class="h-[182px] w-full object-contain" src={{ asset('/images/'. $img) }} alt="">
    <div class="flex flex-col">
        <p class="text-[16px] text-white opacity-[0.5] font-neucha">Изготовлен: {{$date}}</p>
        <h3 class="text-[24px] text-white mt-[15px] font-neucha">{{$title}}</h3>
        <p class="text-[16px] text-white opacity-[0.5] mt-[15px] font-neucha">{{$description}}</p>
        <p class="text-[16px] text-white mt-[30px] font-neucha">{{$price}} ₽ за кг.</p>
        <button class="mt-[15px] text-[#DC272C] text-[16px] flex gap-[10px] items-center relative font-neucha">
            Добавить в корзину
            <x-heroicon-o-arrow-long-right class="transition-transform transform hover:translate-x-1" color="#DC272C" width="30"/>
        </button>
        @if($edit && $delete)
            <div class="flex gap-[15px] mt-[30px]">
                <a href="{{$edit}}" class="bg-white text-[12px] 400:text-[16px] py-[14px] px-[20px] 400:px-[50px]">Редактировать товар</a>
                <a href="{{$delete}}" class="bg-[#DC272C] py-[11px] px-[14px]"><x-monoicon-delete width="24" color="white"/></a>
            </div>
        @endif
    </div>
</div>