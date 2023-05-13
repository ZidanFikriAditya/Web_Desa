@extends('layouts.adminLayouts')
@section('content-admin')
    <div class="grid grid-cols-12 gap-3 m-5 pt-5 items-center ">
        <div class="col-span-4">
            <x-card title="Blog">
                You can Create, Read, Update, and Delete
                <x-slot:footer>
                    <div class="text-right mt-3">
                        <a href="/admin/post" class="rounded bg-slate-400 text-white py-1 px-2 text-sm font-semibold hover:bg-slate-600">Blog CRUD</a>
                    </div>
                </x-slot:footer>
            </x-card>
        </div>
        <div class="col-span-4">
            <x-card title="Posting">
                You can Create, Read, Update, and Delete your post
                <x-slot:footer>
                    <div class="text-right mt-3">
                        <a href="/admin/post" class="rounded bg-red-400 text-white py-1 px-2 text-sm font-semibold hover:bg-red-600">Post CRUD</a>
                    </div>
                </x-slot:footer>
            </x-card>
        </div>
        <div class="col-span-4">
            <x-card title="Settings">
                You can edit your UI
                <x-slot:footer>
                    <div class="text-right mt-3">
                        <a href="/blog" class="rounded bg-orange-400 text-white py-1 px-2 text-sm font-semibold hover:bg-orange-600">Settings</a>
                    </div>
                </x-slot:footer>
            </x-card>
        </div>

    </div>
@endsection
