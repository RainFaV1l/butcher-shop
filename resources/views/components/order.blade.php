@props([
    'cart'
])

<div class="bg-[#1C1D1F] flex flex-col text-white w-full">
    <h1 class="border-b border-opacity-[0.5] p-[30px] text-3xl">Заказ № {{ $cart->id }}</h1>
    <div class="p-[30px] flex flex-col gap-[15px] border-b border-opacity-[0.5]">
        <h1 class="text-xl">Контактные данные</h1>
        <div class="flex flex-wrap gap-[40px] text-xl">
            <p class="text-white">Фамилия: {{ $cart->surname }}</p>
            <p class="text-white">Имя: {{ $cart->name }}</p>
            <p class="text-white">Телефон: {{ $cart->phone }}</p>
            <p class="text-white">Дата оформления: {{ date('d.m.Y', strtotime($cart->created_at)) }}</p>
            <p class="text-white">Статус: {{ $cart->status }}</p>
            <p class="text-white">Дата готовности: {{ !is_null($cart->completion_date) ? date('d.m.Y', strtotime($cart->completion_date)) : 'не указано' }}</p>
        </div>
    </div>
    <div class="p-[30px] flex flex-col gap-[15px] border-b border-opacity-[0.5]">
        <h1 class="text-[18px]">Состав заказа</h1>
        <div class="flex flex-col gap-[15px]">
            @foreach($cart->cartProducts as $product)
                <div class="text-xl flex items-center flex-wrap gap-[30px]">
                    <p class="text-white">{{ $product->product->id }}</p>
                    <p class="text-white size-[50px]"><img class="h-full w-full object-cover" src="{{ asset($product->product->getImageUrlAttribute()) }}" alt="Изображение"></p>
                    <p class="text-white">{{ $product->product->name }}</p>
                    <p class="text-white">{{ $product->product->price }} ₽ за кг.</p>
                    <p class="text-white">{{ $product->quantity }} кг.</p>
                </div>
            @endforeach
        </div>
    </div>
    <h1 class="p-[30px] text-xl">Итоговая сумма: {{ $cart->total }} ₽</h1>
</div>
