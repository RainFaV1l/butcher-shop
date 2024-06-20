<x-layout>
    <x-layout-nohome>
        <x-header-nohome name="Панель администратора" btn="В админку" routeName="admin.index"/>
        <div class="py-[50px] flex gap-6 flex-wrap justify-center 1171:justify-normal">
            @forelse($reviews as $review)
                <x-review
                    :id="$review->id"
                    :full_name="$review->full_name"
                    :message="$review->message"
                    :is_published="$review->is_published"
                    switch="admin.reviews.switch"
                />
            @empty
                <p class="text-red-500 font-lg text-center w-full">К сожалению, отзывов пока нет :(</p>
            @endforelse
        </div>
    </x-layout-nohome>
</x-layout>
