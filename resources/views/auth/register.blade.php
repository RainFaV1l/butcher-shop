<x-layout>
    <x-slot:title>Регистрация</x-slot:title>
    <x-layout-nohome>
        <div class="pb-[50px]">
            <x-form action="{{ route('register') }}" class="border border-opacity-[0.5] w-full 550:w-[478px] flex flex-col mx-auto">
                <div class="px-[53px] py-[50px] font-neucha text-white text-center">
                    <h1 class="text-[35px] 450:text-[64px]">Регистрация</h1>
                    <p class="text-[16px]">Есть аккаунт? <a class="text-red-500 underline" href="{{ route('loginPage') }}">Авторизуйтесь!</a></p>
                </div>
                @error('name')<hr>@enderror
                <x-error field="name" class="text-red-500 mb-[15px] mt-[15px] pl-[30px]"/>
                <x-input type="text" name="name" placeholder="Имя" class="input w-full"/>
                @error('surname')<hr>@enderror
                <x-error field="surname" class="text-red-500 mb-[15px] mt-[15px] pl-[30px]"/>
                <x-input type="text" name="surname" placeholder="Фамилия" class="input w-full"/>
                @error('phone')<hr>@enderror
                <x-error field="phone" class="text-red-500 mb-[15px] mt-[15px] pl-[30px]"/>
                <x-input type="number" name="phone" placeholder="Телефон" class="input w-full"/>
                @error('email')<hr>@enderror
                <x-error field="email" class="text-red-500 mb-[15px] mt-[15px] pl-[30px]"/>
                <x-input type="email" name="email" placeholder="Email" class="input w-full"/>
                @error('password')<hr>@enderror
                <x-error field="password" class="text-red-500 mb-[15px] mt-[15px] pl-[30px]"/>
                <x-input type="password" name="password" placeholder="Пароль" class="input w-full"/>
                @error('password_confirmation')<hr>@enderror
                <x-error field="password_confirmation" class="text-red-500 mb-[15px] mt-[15px] pl-[30px]"/>
                <x-input type="password" name="password_confirmation" placeholder="Подтвердите пароль" class="input w-full"/>
                <button class="bg-[#DC272C] transition hover:bg-red-700 py-[16px] text-white text-[16px] border-t border-opacity-[0.5] font-neucha">
                    Создать
                </button>
            </x-form>
        </div>
    </x-layout-nohome>
</x-layout>
