<x-layout>
    <x-layout-nohome>
        <x-header-nohome name="Панель администратора" btn="К товарам" src="/admin/tovars"/>
        <div class="flex flex-col gap-[30px]">
            <div class="mt-[50px] grid grid-col-1 600:grid-cols-2 gap-[30px] w-full 600:w-[82%]">
                <x-input-form2 type="file" name="foto" placeholder="Изображение"/>
                <x-input-form2 type="text" name="name" placeholder="Название"/>
                <x-input-form2 type="text" name="description" placeholder="Описание"/>
                <x-input-form2 type="date" name="date" placeholder="Дата изготовления"/>
                <x-input-form2 type="number" name="price" placeholder="Цена за кг."/>
                <x-input-form2 type="text" name="checked" placeholder="В наличии?"/>
            </div>  
            <button class="py-[14px] text-white px-[50px] bg-[#DC272C] w-[159px]">
                Добавить
            </button>
        </div>          
    </x-layout-nohome>
</x-layout>