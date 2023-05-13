<div class="w-full bg-slate-800 h-full drop-shadow-2xl overflow-hidden">
    <div class="text-center my-4">
        <img src="{{asset('img/pngwing.com.png')}}" alt="logo" class="w-[150px] md:w-[100px] block mx-auto">
    </div>
    <div class="flex flex-col items-center justify-center mt-10">
        {{-- Title --}}
        <div class="font-semibold text-white me-auto border-b-2 w-[90%] px-2 py-1">Dashboard</div>

        <div class="mt-2 text-white me-auto pl-[12%] overflow-hidden flex flex-col gap-1">
            <x-menu-sidebar name="Home" href="/admin" index="2" />
            <x-menu-sidebar name="Post" href="/admin/post" index="2" />
            <x-menu-sidebar name="Settings" href="/admin/settings" index="2" />
        </div>
    </div>
</div>
