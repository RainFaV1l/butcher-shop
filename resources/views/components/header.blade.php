<header class="w-[100%] fixed grid grid-cols-2 700:grid-cols-3 py-[30px] px-[20px] z-[999] bg-[#161719] bg-opacity-0 transition opacity-0"
        x-data="{ show: true,  scrolled: false }"
        @scroll.window="
        scrolled = (window.scrollY > 50 && window.scrollY > lastScrollPos);
        show = (window.scrollY === 0);
        lastScrollPos = window.scrollY;"
        :class="{
            'bg-opacity-0 opacity-0': scrolled,
            'bg-opacity-0 opacity-100': !scrolled && show,
            'bg-opacity-100 opacity-100': !scrolled && !show
        }"
        x-transition>
    <nav class="hidden 700:flex gap-[30px] text-white items-center font-neucha text-[18px]">
        <a href="{{ route('home') }}#catalog">Каталог</a>
        <a href="{{ route('home') }}#contacts">Контакты</a>
        <a href="{{ route('home') }}#about">О нас</a>
        <a href="{{ route('reviews.index') }}">Отзывы</a>
        @if(auth()->user() && auth()->user()->isAdmin())
            <a href="{{ route('admin.index') }}">Админка</a>
        @endif
    </nav>
    <a href="{{ route('home') }}" class="flex 700:justify-center items-center">
        <img src={{asset('/images/Logo.svg')}} alt="Логотип">
    </a>
    <div class="hidden 700:flex gap-[20px] justify-end items-center">
        <a href="{{ !empty(auth()->user()) ? route('profile') : route('loginPage') }}" class="w-[30px]">
            <x-heroicon-o-user color="white"/>
        </a>
        <a href="{{ route('cart.index') }}" class="w-[30px]">
            <x-grommet-cart color="white"/>
        </a>
        @auth
            <x-form action="{{ route('logout') }}">
                <x-form-button class="h-[30px] w-[30px] flex justify-center items-center">
                    <x-heroicon-s-arrow-left-end-on-rectangle  color="white"/>
                </x-form-button>
            </x-form>
        @endauth
    </div>
    <div class="700:hidden flex justify-end burger">
        <div class="flex justify-center flex-col gap-[5px] w-[30px] cursor-pointer">
            <div class="bg-white h-[2px] w-full"></div>
            <div class="bg-white h-[2px] w-full"></div>
            <div class="bg-white h-[2px] w-full"></div>
        </div>
    </div>
</header>
