<div class="flex flex-col md:flex-row gap-5 ">
    <div class="rounded-xl p-4 bg-slate-400 shadow-2xl w-full">
        <form action="{{ route('admin.post.store') }}">
            <div class="w-full mb-5">
                <label for="title" class=" text-lg">Title</label>
                <br>
                <input type="title" name="title" value="{{old('title')}}" id="title" class="p-2 w-full border-2  rounded-xl focus:outline-none focus:border-slate-600" autofocus>
            </div>
            <div class="w-full mb-5">
                <label for="photo" class=" text-lg">photo</label>
                <br>
                <input type="file" name="photo" value="{{old('photo')}}" id="photo" class="p-2 w-full border-2  rounded-xl focus:outline-none focus:border-slate-600" autofocus>
            </div>
            <div class="w-full mb-5">
                <label for="content" class=" text-lg">content</label>
                <br>
                <input type="text" name="content" value="{{old('content')}}" id="content" class="p-2 w-full border-2  rounded-xl focus:outline-none focus:border-slate-600" autofocus>
            </div>
            <div class="w-full mb-5">
                <label for="category" class=" text-lg">category</label>
                <br>
                <input type="text" name="category_id" value="{{old('category')}}" id="category" class="p-2 w-full border-2  rounded-xl focus:outline-none focus:border-slate-600" autofocus>
            </div>

        </form>
    </div>

    <div class="rounded-xl p-4 bg-slate-400 shadow-2xl w-full text-center">
        <img src="" class="h-[300px] hidden mx-auto" alt="preview" id="imagePreview">
    </div>

    <script >
        $('#photo').on('change', function (e) {
            const cekImage = e.target.files
            if (cekImage.length > 0){
                const image = URL.createObjectURL(e.target.files[0])

                $('#imagePreview').removeClass('hidden')
                document.getElementById('imagePreview').src = image
            }

        })
    </script>
</div>
