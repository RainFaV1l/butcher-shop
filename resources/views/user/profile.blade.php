<x-layout>
    <x-slot:title>Профиль</x-slot:title>
    <x-layout-nohome>
        <x-form class="bg-[#1C1D1F] p-[40px] text-white flex flex-col gap-[30px]">
            <h1 class="text-[36px]">Профиль</h1>
            <div class="grid grid-cols-1 600:grid-cols-2 gap-[30px] w-full 600:w-[89%]">
                <div class="flex justify-end flex-col gap-4">
                    <x-error field="name" class="text-red-500"/>
                    <x-input type="text" name="name" placeholder="Имя" value="{{ auth()->user()->name }}" class="input"/>
                </div>
                <div class="flex justify-end flex-col gap-4">
                    <x-error field="surname" class="text-red-500"/>
                    <x-input type="text" name="surname" placeholder="Фамилия" value="{{ auth()->user()->surname }}" class="input"/>
                </div>
                <div class="flex justify-end flex-col gap-4">
                    <x-error field="phone" class="text-red-500"/>
                    <x-input type="number" name="phone" placeholder="Телефон" value="{{ auth()->user()->phone }}" class="input"/>
                </div>
                <div class="flex justify-end flex-col gap-4">
                    <x-error field="email" class="text-red-500"/>
                    <x-input type="email" name="email" placeholder="Email" value="{{ auth()->user()->email }}" class="input"/>
                </div>
            </div>
            <x-form-button class="bg-[#DC272C] px-[50px] py-[14px] w-full 600:w-[163px] button">Сохранить</x-form-button>
        </x-form>
    </x-layout-nohome>
    <x-layout-nohome>
        <x-header-block h1="История заказов" h3="Список ваших заявок"/>
        <div class="py-[50px] flex flex-col gap-[30px]">
            @forelse($carts as $cart)
                <x-order :cart="$cart" />
            @empty
                <p class="text-red-500 text-center">К сожалению, список заказов пуст :(</p>
            @endforelse
        </div>
    </x-layout-nohome>
</x-layout>
