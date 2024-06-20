<x-layout>
    <x-slot:title>Отзывы</x-slot:title>
    <x-layout-nohome>
        <x-header-nohome name="Отзывы" btn="Оставить отзыв" routeName="reviews.create"/>
        <div class="flex flex-wrap justify-start gap-[30px] py-[50px]">
            @foreach($reviews as $review)
                <div class="w-[31.5%] border border-white p-[30px]">
                    <h2 class="text-white border-b border-white pb-4">{{ $review->full_name }}</h2>
                    <p class="text-white mt-[15px]">{{ $review->message }}</p>
                </div>
            @endforeach
        </div>
    </x-layout-nohome>
</x-layout>
