@props(['h1', 'h2', 'icon'])
<div class="flex items-center gap-[15px] text-white">
    <img src="{{ asset('/images/'. $icon) }}" alt="">
    <div>
        <p class="font-neucha text-[16px] opacity-[0.5]">{{ $h1 }}</p>
        <p class="font-neucha text-[16px]">{{ $h2 }}</p>
    </div>
</div>