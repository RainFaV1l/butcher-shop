<x-layout>
    <x-slot:title>Корзина</x-slot:title>
    <x-layout-nohome>
        <x-header-nohome name="Корзина товаров" btn="" src="/"/>
        <div class="mt-[50px]">
            <div class="bg-[#1C1D1F] flex flex-col text-white">
                <div class="p-[30px] flex flex-col gap-[15px] border-b border-opacity-[0.5]">
                    <h1 class="text-[18px]">Состав заказа</h1>
                    <div class="flex flex-col gap-[15px]">
                        <div class="text-opacity-[0.5] text-[16px] flex flex-wrap gap-[30px]">
                            <p class="text-white text-opacity-[0.5]">1</p>
                            <p class="text-white text-opacity-[0.5]">Вареная колбаса</p>
                            <p class="text-white text-opacity-[0.5]">1200 ₽ за кг.</p>
                            <p class="text-white text-opacity-[0.5]">4 кг.</p>
                        </div>
                        <div class="text-opacity-[0.5] text-[16px] flex flex-wrap gap-[30px]">
                            <p class="text-white text-opacity-[0.5]">1</p>
                            <p class="text-white text-opacity-[0.5]">Вареная колбаса</p>
                            <p class="text-white text-opacity-[0.5]">1200 ₽ за кг.</p>
                            <p class="text-white text-opacity-[0.5]">4 кг.</p>
                        </div>
                    </div>
                </div>
                <h1 class="p-[30px] text-[18px]">Итоговая сумма: 5600 ₽</h1>
            </div>
            <form method="POST" class="bg-[#1C1D1F] p-[40px] text-white flex flex-col gap-[30px] mt-[30px]">
                <h1 class="text-[36px]">Оформление заказа</h1>
                <div class="grid grid-cols-1 600:grid-cols-2 gap-[30px] w-full 600:w-[89%]">
                    <x-input-form2 type="text" name="name" placeholder="Имя"/>
                    <x-input-form2 type="text" name="surname" placeholder="Фамилия"/>
                    <x-input-form2 type="number" name="phone" placeholder="Телефон"/>
                    <x-input-form2 type="text" name="checked" placeholder="Оптовая закупка? (да, нет)"/>
                </div>
                <button class="bg-[#DC272C] px-[50px] py-[14px] w-full 600:w-[163px]">
                    Оформить
                </button>
            </form>
        </div>
    </x-layout-nohome> 
</x-layout>