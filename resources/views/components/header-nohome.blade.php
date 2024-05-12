@props(['name', 'btn', 'src'])
<div class="border-b border-opacity-[0.5] pb-[30px] flex items-center justify-between flex-wrap gap-[20px]">
    <h1 class="text-[35px] 600:text-[64px] text-white">{{$name}}</h1>
    @if ($btn)
       <a href="{{ $src }}" class="bg-[#DC272C] py-[14px] px-[50px] text-white text-[16px]">
        {{$btn}}
       </a>     
    @endif
</div>