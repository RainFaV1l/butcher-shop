<x-layout>
    <x-layout-nohome>
        <x-header-nohome name="Панель администратора" btn="Управление товарами" routeName="admin.products.index"/>
        <div class="flex flex-col gap-[50px] py-[50px]">
            <div class="flex flex-wrap items-center gap-[30px]">
                <a href="{{ asset(route('admin.statistics')) }}"
                   class="bg-[#DC272C] py-[14px] px-[50px] text-white text-[16px] button">Статистика</a>
                <a href="{{ asset(route('admin.reviews')) }}"
                   class="bg-[#DC272C] py-[14px] px-[50px] text-white text-[16px] button">Отзывы</a>
            </div>
            <div class="flex flex-wrap items-center gap-[30px]">
                <a href="{{ asset(route('admin.index')) }}"
                   class="border border-white py-[14px] px-[50px] text-white text-[16px] button {{ is_null(request('status')) ? 'bg-[#DC272C]' : '' }}">Все</a>
                @foreach($statuses as $status)
                    <a href="{{ asset(route('admin.index')) . '?status=' . $status }}"
                       class="border border-white py-[14px] px-[50px] text-white text-[16px] button {{ $status === request('status') ? 'bg-[#DC272C]' : '' }}">{{ $status }}</a>
                @endforeach
            </div>
            <div class="flex flex-col gap-[30px] items-end">
                @forelse($carts as $cart)
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
                @empty
                    <p class="text-white flex justify-start w-full text-xl">К сожалению, в данный момент нет заказов</p>
                @endforelse
            </div>
        </div>
    </x-layout-nohome>
</x-layout>
