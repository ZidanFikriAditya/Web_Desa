@extends('layouts.app')

@section('content')

    <div class="h-screen flex justify-center items-center">
        <div class="rounded-2xl bg-slate-50 w-full lg:w-[50%] p-7 shadow-2xl">
            <h3 class="text-2xl font-semibold text-center mb-5">Login</h3>
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="w-full mb-5">
                    <label for="email" class=" text-lg">Email</label>
                    <br>
                    <input type="email" name="email" value="{{old('email')}}" id="email" class="p-2 w-full border-2  rounded-xl focus:outline-none focus:border-slate-600" autofocus>
                </div>
                <div class="w-full mb-10">
                    <label for="password" class=" text-lg">Password</label>
                    <br>
                    <input type="password" name="password" id="password" value="{{old('password')}}" class="p-2 w-full border-2  rounded-xl focus:outline-none focus:border-slate-600">
                </div>

                <div class="w-full text-center">
                    <button class="py-1 px-2 rounded-lg  w-full font-semibold text-white bg-slate-600">
                        SUBMIT
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
