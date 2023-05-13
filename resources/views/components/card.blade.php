<div class="w-[{{$size ?? '16rem'}}] ">
    <div class="w-full rounded bg-{{$bgColor ?? 'white'}} p-4 border">
        <h3 class="text-xl font-semibold border-b-2 py-1">{{$title}}</h3>
        <div class="py-3 text-sm min-h-[5rem] ">
            {{$slot}}
        </div>
        <div class="py-1 border-t">
            {{$footer}}
        </div>
    </div>
</div>
