<x-layout>
    <x-slot:title>Авторизация</x-slot:title>
    <x-layout-nohome>
        <x-form action="{{ route('login') }}" class="border border-opacity-[0.5] w-full 550:w-[478px] flex flex-col mx-auto">
            <div class="px-[53px] py-[50px] font-neucha text-white text-center">
                <h1 class="text-[35px] 450:text-[64px]">Вход</h1>
                <p class="text-[16px]">Нет аккаунта? <a class="text-red-500 underline" href="{{ route('registerPage') }}">Зарегистрируйтесь!</a></p>
            </div>
            @error('email')<hr>@enderror
            <x-error field="email" class="text-red-500 mb-[15px] mt-[15px] pl-[30px]"/>
            <x-input type="email" name="email" placeholder="Email" class="input w-full"/>
            @error('password')<hr>@enderror
            <x-error field="password" class="text-red-500 mb-[15px] mt-[15px] pl-[30px]"/>
            <x-input type="password" name="password" placeholder="Пароль" class="input w-full"/>
            <x-form-button class="bg-[#DC272C] transition hover:bg-red-700 py-[16px] text-white text-[16px] border-t border-opacity-[0.5] font-neucha">Войти</x-form-button>
        </x-form>
    </x-layout-nohome>
</x-layout>
