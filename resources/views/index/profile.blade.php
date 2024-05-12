<x-layout>
    <x-slot:title>Профиль</x-slot:title>
    <x-layout-nohome>
        <form method="POST" class="bg-[#1C1D1F] p-[40px] text-white flex flex-col gap-[30px]">
            <h1 class="text-[36px]">Профиль</h1>
            <div class="grid grid-cols-1 600:grid-cols-2 gap-[30px] w-full 600:w-[89%]">
                <x-input-form2 type="text" name="name" placeholder="Имя"/>
                <x-input-form2 type="text" name="surname" placeholder="Фамилия"/>
                <x-input-form2 type="number" name="phone" placeholder="Телефон"/>
                <x-input-form2 type="email" name="email" placeholder="Email"/>
            </div>
            <button class="bg-[#DC272C] px-[50px] py-[14px] w-full 600:w-[163px]">
                Сохранить
            </button>
        </form>
    </x-layout-nohome>
    <x-layout-nohome>
        <x-header-block h1="История заказов" h3="Список ваших заявок"/>
        <div class="mt-[50px] flex flex-col gap-[30px]">
            <x-order />
            <x-order />
        </div>
    </x-layout-nohome>
</x-layout>    