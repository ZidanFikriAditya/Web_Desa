<nav class="fixed top-0 left-0 right-0 py-1.5 duration-200 md:py-5 px-2 md:px-10 bg-slate-600 shadow-lg">
    <div class="flex items-center justify-between">
        <div class="logo">
            <img src="" alt="this logo">
        </div>

        <div class="hidden md:block">
            <ul class="flex gap-4">
                <li class="text-sm md:text-md font-semibold text-white {{ request()->segment(1) === null ? 'bg-white px-2 text-black rounded' : ''  }}"><a href="/">Home</a></li>
                <li class="text-sm md:text-md font-semibold text-white {{ request()->segment(1) === 'post' ? 'bg-white px-2 text-black rounded' : ''  }}"><a href="/post">Blog</a></li>
                <li class="text-sm md:text-md font-semibold text-white {{ request()->segment(1) === 'about' ? 'bg-white px-2 text-black rounded' : ''  }}"><a href="/about">About</a></li>
            </ul>
        </div>
        <div class="block md:hidden">
            <span class="material-icons text-5xl text-white">reorder</span>
        </div>
    </div>
</nav>
