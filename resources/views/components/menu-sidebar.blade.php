<a href="{{$href}}" class="block w-[10.4rem] group">
    <div class="w-[0%] py-1 duration-300 group-hover:bg-white group-hover:w-full group-hover:text-black group-hover:pl-3 rounded-r {{ (request()->segment($index) ?? null) === (explode('/', $href)[$index] ?? null) ? 'bg-white text-black w-full rounded-r pl-3' : 'bg-transparent' }}">
        {{$name}}
    </div>
</a>
