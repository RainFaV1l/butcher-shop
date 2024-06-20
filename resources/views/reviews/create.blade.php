<x-layout>
    <x-layout-nohome>
        <x-header-nohome name="Добавление отзыва" btn="К отзывам" routeName="reviews.index"/>
        <x-form action="{{ route('reviews.store') }}" class="flex flex-col gap-[30px]" has-files>
            <div class="mt-[50px] grid grid-col-1 600:grid-cols-2 gap-[30px] w-full 600:w-[82%]">
                <x-error field="full_name" class="text-red-500"/>
                <x-input class="input" type="text" name="full_name" placeholder="ФИО"/>
                <x-error field="message" class="text-red-500"/>
                <x-input class="input" type="text" name="message" placeholder="Отзыв"/>
            </div>
            <button type="submit" class="py-[14px] text-white px-[50px] bg-[#DC272C] w-[159px] button">
                Добавить
            </button>
        </x-form>
    </x-layout-nohome>
</x-layout>
