@props(['id', 'full_name', 'message', 'is_published', 'switch'])
<div class="flex flex-col bg-[#1C1D1F] w-[361px] items-start px-[30px] py-[40px] gap-[20px]">
    <div class="flex flex-col">
        <h3 class="text-[24px] text-white mt-[15px] font-neucha">{{ $full_name }}</h3>
        <p class="text-[16px] text-white opacity-[0.5] mt-[15px] font-neucha">{{ $message }}</p>
        <p class="text-[16px] mt-[15px] font-neucha">
            <span class="text-white opacity-[0.5]">Статус:</span>
            @if($is_published)
                <span class="text-green-500 opacity-100">опубликован</span>
            @else
                <span class="text-red-500 opacity-100">в модерации</span>
            @endif
        </p>
        @if(isset($switch))
            <div class="flex gap-[15px] mt-[30px]">
                <x-form-button method="POST" action="{{ route($switch, $id) }}" class="bg-red-500 rounded py-[13px] px-[30px] h-full button text-white">
                    Изменить статус
                </x-form-button>
            </div>
        @endif
    </div>
</div>
