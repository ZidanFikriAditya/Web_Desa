<table class="">
    <thead>
    <tr class="border bg-slate-400 text-white">
        <th class="border w-[70px] p-2 ">No.</th>
        <th class="border w-[200px]">Image</th>
        <th class="border w-[200px]">Title</th>
        <th class="border w-[400px]">Description</th>
        <th class="border w-[100px]">Category</th>
        <th class="border w-[150px]">*</th>
    </tr>
    </thead>
    <tbody id="tbodyPost">
    <tr>
        @foreach($posts as $post)
            <td class="border">{{ $loop->iteration() }}</td>
            <td class="border">{{ $post->image }}</td>
            <td class="border">{{ $post->title }}</td>
            <td class="border">{{ $post->content }}</td>
            <td class="border">
                <div class="flex">
                    <button class="rounded-l bg-red-800">
                        Delete
                    </button>
                    <button class="rounded-l bg-amber-400">
                        Edit
                    </button>
                </div>
            </td>
        @endforeach
    </tr>
    </tbody>
</table>

