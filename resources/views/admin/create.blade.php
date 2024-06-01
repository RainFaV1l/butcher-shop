<x-layout>
    <x-layout-nohome>
        <x-header-nohome name="Панель администратора" btn="К товарам" routeName="admin.products.index"/>
        <x-form action="{{ route('admin.products.store') }}" class="flex flex-col gap-[30px]" has-files>
            <div class="mt-[50px] grid grid-col-1 600:grid-cols-2 gap-[30px] w-full 600:w-[82%]">
                <x-error field="preview" class="text-red-500"/>
                <x-input class="input" type="file" name="preview" placeholder="Изображение"/>
                <x-error field="name" class="text-red-500"/>
                <x-input class="input" type="text" name="name" placeholder="Название"/>
                <x-error field="description" class="text-red-500"/>
                <x-input class="input" type="text" name="description" placeholder="Описание"/>
                <x-error field="developed_date" class="text-red-500"/>
                <x-input class="input" type="date" name="developed_date" placeholder="Дата изготовления"/>
                <x-error field="price" class="text-red-500"/>
                <x-input class="input" type="number" name="price" placeholder="Цена за кг."/>
                <x-error field="in_stock" class="text-red-500"/>
                <select class="input appearance-none cursor-pointer" name="in_stock">
                    <option class="text-black" selected disabled>В наличии?</option>
                    <option class="text-black" value="0">Нет</option>
                    <option class="text-black" value="1">Да</option>
                </select>
            </div>
            <button type="submit" class="py-[14px] text-white px-[50px] bg-[#DC272C] w-[159px] button">
                Добавить
            </button>
        </x-form>
    </x-layout-nohome>
</x-layout>
