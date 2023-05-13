@extends('layouts.adminLayouts')

@section('content-admin')
    <div class="p-4">
        <button class="p-2 bg-amber-400 rounded-xl mb-3 hover:bg-amber-700 hover:duration-300" onclick="create()" id="createPost">Craete Post</button>
        <button class="p-2 bg-slate-400 text-white rounded-xl mb-3 hover:bg-slate-700 hover:duration-300 hidden"onclick="read()"  id="backMenu">Back Table</button>
        <div class=" min-w-[1000px] pr-3" id="contentTable">

        </div>
    </div>

    <script>
        $(document).ready(function() {
            read()
        })

        function create() {
            $.get("{{ url('admin/post/create') }}", {}, function (data){
                $('#contentTable').html(data)
                $('#createPost').addClass('hidden')
                $('#backMenu').removeClass('hidden')
            })
        }

        function read() {
            $.get('{{url("admin/blog/get-data")}}', {}, function (data){
                $('#contentTable').html(data)
                $('#backMenu').addClass('hidden')
                $('#createPost').removeClass('hidden')
            })
        }

    </script>
@endsection
