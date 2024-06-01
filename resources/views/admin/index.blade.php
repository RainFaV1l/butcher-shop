<x-layout>
    <x-layout-nohome>
        <x-header-nohome name="Панель администратора" btn="Управление товарами" routeName="admin.products.index"/>
        <div class="flex flex-col gap-[50px] py-[50px]">
            <div class="flex flex-col gap-[30px] items-end">
                @foreach($carts as $cart)
                    <x-order :cart="$cart"/>
                    <x-form action="{{ route('admin.carts.accept', $cart->id) }}" class="flex flex-wrap items-end gap-[30px]">
                        <div class="flex flex-col gap-[5px]">
                            <x-error field="status" class="text-red-500"/>
                            <select name="status" class="appearance-none cursor-pointer input w-[200px]">
                                <option value="Отклонен" @selected($cart->status === 'Отклонен') class="text-black">Отклонен</option>
                                <option value="Оформлен" @selected($cart->status === 'Оформлен') class="text-black">Оформлен</option>
                                <option value="В доставке" @selected($cart->status === 'В доставке') class="text-black">В доставке</option>
                                <option value="Доставлен" class="text-black">Доставлен</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <x-error field="completion_date" class="text-red-500"/>
                            {{--<x-label for="дата_готовности"  class="text-white pl-[30px]"/>--}}
                            <x-input class="input w-[200px]" name="completion_date" id="дата_готовности" type="date" value="{{ !is_null($cart->completion_date) ? date('Y-m-d', strtotime($cart->completion_date)) : '' }}"/>
                        </div>
                        <button type="submit" class="py-[14px] text-white px-[50px] bg-[#DC272C] w-[167px] button">
                            Применить
                        </button>
                    </x-form>
                @endforeach
            </div>
        </div>
    </x-layout-nohome>
</x-layout>
