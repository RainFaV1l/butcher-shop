<x-layout>
    <x-layout-nohome>
        <x-header-nohome name="Панель администратора" btn="Управление товарами" src="/admin/tovars"/>
        <div class="flex flex-col gap-[50px] mt-[50px]">
            <div class="flex flex-col gap-[30px] items-end">
                <x-order />
                <div class="flex flex-wrap gap-[30px]">
                    <select name="" id="" class="bg-transparent py-[14px] px-[30px] w-[200px] border border-opacity-[0.5] text-opacity-[0.5] text-white text-[18px]">
                        <option value="" selected class="text-black">Оформлен</option>
                        <option value="" class="text-black">В пути</option>
                        <option value="" class="text-black">Доставлен</option>
                    </select>
                    <input class="py-[14px] bg-transparent px-[30px] text-white text-[18px] text-opacity-[0.5] w-[200px] border border-opacity-[0.5]" type="date" name="date" placeholder="Дата готовности">
                    <button class="py-[14px] text-white px-[50px] bg-[#DC272C] w-[167px]">
                        Применить
                    </button>
                </div>
            </div>
        </div>
    </x-layout-nohome>
</x-layout>