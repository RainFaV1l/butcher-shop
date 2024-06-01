<x-layout>
    <x-slot:title>Корзина</x-slot:title>
    <x-layout-nohome>
        <x-header-nohome name="Корзина товаров" btn="" src="/"/>
        <div class="py-[50px]">
            <div class="bg-[#1C1D1F] flex flex-col text-white">
                <div class="p-[30px] flex flex-col gap-[15px] border-b border-opacity-[0.5]">
                    <h1 class="text-[18px]">Состав заказа</h1>
                    <div class="flex flex-col gap-[15px]">
                        @forelse($cart as $index => $product)
                            <style>
                                @media (max-width: 656px) {
                                    .sm-flex-nowrap {
                                        flex-wrap: wrap;
                                    }
                                    .w50 {
                                        width: 50%;
                                    }
                                    .w40 {
                                        width: 40%;
                                    }
                                    .w30 {
                                        width: 30%;
                                    }
                                    .justify-start-sm {
                                        justify-content: flex-start;
                                    }
                                }
                            </style>
                            <div class="text-opacity-[0.5] text-[16px] flex items-center gap-[30px] overflow-auto w-full sm-flex-nowrap">
                                <p class="text-white text-opacity-[0.5] w-[10%]">{{ $index + 1 }}</p>
                                <p class="text-white text-opacity-[0.5] w-[30%]">{{ $product->name }}</p>
                                <p class="text-white text-opacity-[0.5] w-[18%] w30">{{ $product->price }} ₽ за кг.</p>
                                <div class="w-[20%] flex items-start gap-5 w50">
                                    <x-form-button action="{{ route('cart.plus', $product->id) }}">
                                        <x-heroicon-c-plus class="text-white text-opacity-[0.5] h-[20px] w-[20px] transition duration-300 hover:text-red-500"/>
                                    </x-form-button>
                                    <span class="text-white text-center text-opacity-[0.5] w-14">{{ $product->quantity }} кг.</span>
                                    <x-form-button action="{{ route('cart.minus', $product->id) }}">
                                        <x-heroicon-c-minus class="text-white text-opacity-[0.5] h-[20px] w-[20px] transition duration-300 hover:text-red-500"/>
                                    </x-form-button>
                                </div>
                                <div class="w-[10%] w40 flex justify-end justify-start-sm">
                                    <x-form-button method="DELETE" action="{{ route('cart.destroy', $product->id) }}">
                                        <x-heroicon-c-x-mark class="text-white text-opacity-[0.5] h-[30px] w-[30px] transition duration-300 hover:text-red-500"/>
                                    </x-form-button>
                                </div>
                            </div>
                        @empty
                            <span class="text-red-500">К сожалению, ваша корзина пуста :(</span>
                        @endforelse
                    </div>
                </div>
                <h1 class="p-[30px] text-[18px]">Итоговая сумма: {{ $total }} ₽</h1>
            </div>
            <x-form action="{{ route('cart.checkout') }}" class="bg-[#1C1D1F] p-[40px] text-white flex flex-col gap-[30px] mt-[30px]">
                <h1 class="text-[36px]">Оформление заказа</h1>
                <div class="grid grid-cols-1 600:grid-cols-2 gap-[30px] w-full 600:w-[89%]">
                    <div class="flex flex-col gap-4">
                        <x-error field="name" class="text-red-500 mb-[5px] pl-[30px]"/>
                        <x-input type="text" name="name" placeholder="Имя" class="input"/>
                    </div>
                    <div class="flex flex-col gap-4">
                        <x-error field="surname" class="text-red-500 mb-[5px] pl-[30px]"/>
                        <x-input type="text" name="surname" placeholder="Фамилия" class="input"/>
                    </div>
                    <div class="flex flex-col gap-4">
                        <x-error field="phone" class="text-red-500 mb-[5px] pl-[30px]"/>
                        <x-input type="number" name="phone" placeholder="Телефон" class="input"/>
                    </div>
                    <div class="flex flex-col gap-4">
                        <x-error field="is_wholesale" class="text-red-500 mb-[5px] pl-[30px]"/>
                        <x-input type="text" name="is_wholesale" placeholder="Оптовая закупка? (да, нет)" class="input"/>
                    </div>
                </div>
                <button class="bg-[#DC272C] px-[50px] py-[14px] w-full 600:w-[163px]">
                    Оформить
                </button>
            </x-form>
        </div>
    </x-layout-nohome>
</x-layout>
