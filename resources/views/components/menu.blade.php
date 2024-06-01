<div class="fixed flex flex-col w-[250px] px-[30px] py-[50px] gap-[20px] transition translate-x-[-250px] left-0 h-[100vh] text-[20px] bg-black text-white z-[10000000] menu">
    <a href="{{ route('home') }}#catalog">Каталог</a>
    <a href="{{ route('home') }}#contacts">Контакты</a>
    @if(auth()->user() && auth()->user()->isAdmin())
        <a href="{{ route('admin.index') }}">Админка</a>
    @endif
    <a href="{{ !empty(auth()->user()) ? route('profile') : route('loginPage') }}" class="flex items-center gap-3">
        <x-heroicon-o-user color="white" class="w-[30px]"/>
        {{ !empty(auth()->user()) ? 'Профиль' : 'Авторизация' }}
    </a>
    <a href="{{ route('cart.index') }}" class="flex items-center gap-3">
        <x-grommet-cart color="white" class="w-[30px]"/>
        Корзина
    </a>
    @auth
        <x-form-button action="{{ route('logout') }}" class="flex justify-center items-center gap-3">
            <x-heroicon-s-arrow-left-end-on-rectangle color="white" class="h-[30px] w-[30px]"/>
            Выход
        </x-form-button>
    @endauth
    <div class="close absolute top-[30px] right-[30px] w-[30px] cursor-pointer">
        <div class="bg-white w-[30px] h-[2px] rotate-[45deg] absolute"></div>
        <div class="bg-white w-[30px] h-[2px] rotate-[-45deg] absolute"></div>
    </div>
</div>
