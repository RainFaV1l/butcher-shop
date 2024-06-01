@props([
    'cart'
])

<div class="bg-[#1C1D1F] flex flex-col text-white w-full">
    <h1 class="border-b border-opacity-[0.5] p-[30px] text-[18px]">Заказ № {{ $cart->id }}</h1>
    <div class="p-[30px] flex flex-col gap-[15px] border-b border-opacity-[0.5]">
        <h1 class="text-[18px]">Контактные данные</h1>
        <div class="flex flex-wrap gap-[40px] text-opacity-[0.5] text-[16px]">
            <p class="text-white text-opacity-[0.5] ">Фамилия: {{ $cart->surname }}</p>
            <p class="text-white text-opacity-[0.5] ">Имя: {{ $cart->name }}</p>
            <p class="text-white text-opacity-[0.5] ">Телефон: {{ $cart->phone }}</p>
            <p class="text-white text-opacity-[0.5] ">Дата оформления: {{ date('d.m.Y', strtotime($cart->created_at)) }}</p>
            <p class="text-white text-opacity-[0.5] ">Статус: {{ $cart->status }}</p>
            <p class="text-white text-opacity-[0.5] ">Дата готовности: {{ !is_null($cart->completion_date) ? date('d.m.Y', strtotime($cart->completion_date)) : 'не указано' }}</p>
        </div>
    </div>
    <div class="p-[30px] flex flex-col gap-[15px] border-b border-opacity-[0.5]">
        <h1 class="text-[18px]">Состав заказа</h1>
        <div class="flex flex-col gap-[15px]">
            @foreach($cart->cartProducts as $product)
                <div class="text-opacity-[0.5] text-[16px] flex flex-wrap gap-[30px]">
                    <p class="text-white text-opacity-[0.5]">{{ $product->product->id }}</p>
                    <p class="text-white text-opacity-[0.5]">{{ $product->product->name }}</p>
                    <p class="text-white text-opacity-[0.5]">{{ $product->product->price }} ₽ за кг.</p>
                    <p class="text-white text-opacity-[0.5]">{{ $product->quantity }} кг.</p>
                </div>
            @endforeach
        </div>
    </div>
    <h1 class="p-[30px] text-[18px]">Итоговая сумма: {{ $cart->total }} ₽</h1>
</div>
