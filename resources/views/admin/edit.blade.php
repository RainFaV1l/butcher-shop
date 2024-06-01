<x-layout>
    <x-layout-nohome>
        <x-header-nohome name="Панель администратора" btn="К товарам" routeName="admin.products.index"/>
        <x-form has-files method="patch" action="{{ route('admin.products.update', $product->id) }}" class="flex flex-col gap-[30px] mt-[50px]">
            <img class="w-[299px] h-[182px]" src="{{ $product->getImageUrlAttribute() }}" alt="Изображение">
            <div class="grid grid-col-1 600:grid-cols-2 gap-[30px] w-full 600:w-[82%]">
                <x-error field="preview" class="text-red-500"/>
                <x-input class="input" type="file" name="preview" placeholder="Изображение"/>
                <x-error field="name" class="text-red-500"/>
                <x-input class="input" type="text" name="name" placeholder="Название" value="{{ $product->name }}"/>
                <x-error field="description" class="text-red-500"/>
                <x-input class="input" type="text" name="description" placeholder="Описание" value="{{ $product->description}}"/>
                <x-error field="developed_date" class="text-red-500"/>
                <x-input class="input" type="date" name="developed_date" placeholder="Дата изготовления" value="{{ !is_null($product->developed_date) ? date('Y-m-d', strtotime($product->developed_date)) : 'не указано' }}"/>
                <x-error field="price" class="text-red-500"/>
                <x-input class="input" type="number" name="price" placeholder="Цена за кг." value="{{ $product->price }}"/>
                <x-error field="in_stock" class="text-red-500"/>
                <select class="input appearance-none cursor-pointer" name="in_stock">
                    <option class="text-black" selected disabled>В наличии?</option>
                    <option class="text-black" @selected($product->in_stock === 0) value="0">Нет</option>
                    <option class="text-black" @selected($product->in_stock === 1) value="1">Да</option>
                </select>
            </div>
            <button type="submit" class="py-[14px] text-white px-[50px] bg-[#DC272C] w-[159px] button">Сохранить</button>
        </x-form>
    </x-layout-nohome>
</x-layout>
