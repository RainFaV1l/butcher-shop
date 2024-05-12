<header class="w-[100%] fixed grid grid-cols-2 700:grid-cols-3 py-[30px] px-[20px] z-[999]">
    <nav class="hidden 700:flex gap-[30px] text-white items-center font-neucha text-[18px]">
        <a href="#catalog">Каталог</a>
        <a href="#contacts">Контакты</a>
    </nav>
    <div class="flex 700:justify-center items-center">
        <img src={{asset('/images/Logo.svg')}} alt="">
    </div>
    <div class="hidden 700:flex gap-[20px] justify-end items-center">
        <a href="#" class="w-[30px]">
            <x-heroicon-o-user color="white"/>
        </a>
        <a href="#" class="w-[30px]">
            <x-grommet-cart color="white"/>
        </a>
        <a href="#" class="w-[30px]">
            <x-polaris-exit-icon  color="white"/>
        </a>
    </div>
    <div class="700:hidden flex justify-end burger">
        <div class="flex justify-center flex-col gap-[5px] w-[30px] cursor-pointer">
            <div class="bg-white h-[2px] w-full"></div>
            <div class="bg-white h-[2px] w-full"></div>
            <div class="bg-white h-[2px] w-full"></div>
        </div>
    </div>
</header>
