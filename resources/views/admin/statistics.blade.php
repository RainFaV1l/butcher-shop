<x-layout>
    <x-layout-nohome>
        <x-header-nohome name="Статистика сайта" btn="В админку" routeName="admin.index"/>
        <div class="py-[50px] flex flex-col gap-[50px]">
            <div class="flex flex-col gap-[30px]">
                <h2 class="text-[36px] text-white">Заказы пользователей по дням</h2>
                <div class="relative overflow-x-auto">
                    <x-table>
                        <x-slot name="head">
                            <th class="px-6 py-3">Дата</th>
                            <th class="px-6 py-3">Кол-во заказов</th>
                        </x-slot>
                        <x-slot name="body">
                            @foreach($ordersByDay as $orderByDay)
                                <tr class="border">
                                    <td class="px-6 py-4">{{ $orderByDay->date }}</td>
                                    <td class="px-6 py-4">{{ $orderByDay->count }}</td>
                                </tr>
                            @endforeach
                        </x-slot>
                    </x-table>
                </div>
            </div>
            <div class="flex flex-col gap-[30px]">
                <h2 class="text-[36px] text-white">Рейтинг купленных товаров</h2>
                <div class="relative overflow-x-auto">
                    <x-table>
                        <x-slot name="head">
                            <th class="px-6 py-3">Название</th>
                            <th class="px-6 py-3">Кол-во покупок в кг.</th>
                        </x-slot>
                        <x-slot name="body">
                            @foreach($products as $product)
                                <tr class="border">
                                    <td class="px-6 py-4">{{ $product->name }}</td>
                                    <td class="px-6 py-4">{{ is_null($product->quantity) ? 0 : $product->quantity }}</td>
                                </tr>
                            @endforeach
                        </x-slot>
                    </x-table>
                </div>
            </div>
            {{--<div style="width: 100%;"><canvas id="acquisitions"></canvas></div>--}}
        </div>
{{--        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>--}}
{{--        <script>--}}
{{--            (async function() {--}}

{{--                const data = @json($ordersByDay);--}}

{{--                new Chart(--}}
{{--                    document.getElementById('acquisitions'),--}}
{{--                    {--}}
{{--                        type: 'bar',--}}
{{--                        data: {--}}
{{--                            labels: data.map(row => row.date),--}}
{{--                            datasets: [--}}
{{--                                {--}}
{{--                                    label: 'Количество заказов по дням',--}}
{{--                                    data: data.map(row => row.count)--}}
{{--                                }--}}
{{--                            ]--}}
{{--                        }--}}
{{--                    }--}}
{{--                );--}}

{{--            })();--}}
{{--        </script>--}}
    </x-layout-nohome>
</x-layout>
