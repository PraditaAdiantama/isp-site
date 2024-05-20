@extends('layouts.auth')

@section('content')
    <div class="w-full h-screen flex justify-center items-center">
        <div class="bg-white w-1/3 px-10 pt-10 pb-5 rounded-md">
            <form action="login" method="POST">
                @csrf
                <h3 class="text-2xl text-center font-semibold mb-4">Login</h3>
                <x-input label="Email" type="email" name="email"/>
                <x-input label="Password" type="password" name="password"/>
                <div class="flex justify-end mt-4">
                    <x-button text="Login"/>
                </div>
            </form>
        </div>
    </div>
@endsection