<x-layout>
    <x-layout-nohome>
        <x-header-nohome name="Панель администратора" btn="Добавить товар" routeName="admin.products.create"/>
        <div class="py-[50px] flex gap-6 flex-wrap justify-center 1171:justify-normal">
            @forelse($products as $product)
                <x-tovar
                    :id="$product->id"
                    :title="$product->name"
                    :date="$product->developed_date"
                    :description="$product->description"
                    :price="$product->price"
                    :img="$product->getImageUrlAttribute()"
                    delete="admin.products.destroy"
                    edit="admin.products.edit"
                />
            @empty
                <p class="text-red-500 font-lg text-center w-full">К сожалению ассортимент в данный момент пуст :(</p>
            @endforelse
        </div>
    </x-layout-nohome>
</x-layout>
