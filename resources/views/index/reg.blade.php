<x-layout>
    <x-slot:title>Регистрация</x-slot:title>
    <x-layout-nohome>
        <form method="post" class="border border-opacity-[0.5] w-full 550:w-[478px] flex flex-col mx-auto">
            <div class="px-[53px] py-[50px] font-neucha text-white text-center">
                <h1 class="text-[35px] 450:text-[64px]">Регистрация</h1>
                <p class="text-[16px]">Создайте аккаунт, чтобы получить доступ к истории заказов</p>
            </div>            
            <x-input-form type="text" name="name" placeholder="Имя"/>
            <x-input-form type="text" name="surname" placeholder="Фамилия"/>
            <x-input-form type="number" name="phone" placeholder="Телефон"/>
            <x-input-form type="email" name="email" placeholder="Email"/>
            <x-input-form type="password" name="password" placeholder="Пароль"/>
            <button class="bg-[#DC272C] py-[16px] text-white text-[16px] border-t border-opacity-[0.5] font-neucha">
                Создать
            </button>
        </form>
    </x-layout-nohome>
</x-layout>    