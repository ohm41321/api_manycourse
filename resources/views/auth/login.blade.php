<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Many Course</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Assuming your CSS file is in the public/css directory -->
</head>
<body>
<div class="navbar-ct" style="background-color:#212121;">
    <header class="fixed-header d-flex justify-content-center py-3 mb-4">
        <!-- Button On Header Right Hand-->
        <div style="display: flex; justify-content: space-between;">
            <a href="/">
                <button class="c-button c-button--gooey" style="margin-left: 15px;"> back
                    <div class="c-button__blobs">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </button>
            </a>
            <a href="/register">
                <button class="c-button c-button--gooey">Register
                    <div class="c-button__blobs">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </button>
            </a>
        </div>
    </header>
</div>
<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <img src="https://media.discordapp.net/attachments/1003582679465345034/1162008756293476472/384199760_1015394396518496_1693242854705544577_n1.png?ex=65e07cfc&is=65ce07fc&hm=bf05827b112524366dac6d507f437542b16872a632ef37aa43b4f9cb517f3b2f&=&format=webp&quality=lossless&width=625&height=625" width="70" height="70" style="background: #212121; border-radius: 50px;"  >
        </x-slot>
        <x-validation-errors class="mb-4"  />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" >
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }} " />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
</div>
<style>
    .navbar-ct {
        margin-bottom: -1rem;
    }

    .c-button {
        background-color: #212121;
        margin: 10px;
        color: #000;
        font-weight: 700;
        font-size: 16px;
        text-decoration: none;
        padding: 0.7em 2.5em;
        cursor: pointer;
        display: inline-block;
        vertical-align: middle;
        position: relative;
        z-index: 1;
    }

    .c-button--gooey {
        color: #ffffff;
        text-transform: uppercase;
        letter-spacing: 2px;
        border: 4px solid #ffae00;
        border-radius: 0;
        position: relative;
        transition: all 500ms ease;
    }

    .c-button--gooey .c-button__blobs {
        height: 100%;
        filter: url(#goo);
        overflow: hidden;
        position: absolute;
        top: 0;
        left: 0;
        bottom: -3px;
        right: -1px;
        z-index: -1;
    }

    .c-button--gooey .c-button__blobs div {
        background-color: #ffae00;
        width: 100%;
        height: 100%;
        border-radius: 100%;
        position: absolute;
        transform: scale(1.4) translateY(125%) translateZ(0);
        transition: all 600ms ease;
    }

    .c-button--gooey .c-button__blobs div:nth-child(1) {
        left: -5%;
    }

    .c-button--gooey .c-button__blobs div:nth-child(2) {
        left: 30%;
        transition-delay: 60ms;
    }

    .c-button--gooey .c-button__blobs div:nth-child(3) {
        left: 66%;
        transition-delay: 25ms;
    }

    .c-button--gooey:hover {
        color: #212121;
    }

    .c-button--gooey:hover .c-button__blobs div {
        transform: scale(1.4) translateY(0) translateZ(0);
    }

    .ms-4 {
        background: #212121;
        color: #ffffff;
        border: none;
        padding: 0.7em 2.5em;
        cursor: pointer;
        transition: background-color 0.3s;
        border-radius: 50px;
    }

    .ms-4:hover {
        background: orange;
    }

    .fixed-header {
        height: 88px; /* Adjust the height to your desired value */
        background-color: #212121;
    }

    .block:hover {
        border-color: orange;
    }

    .card-login {
        background-color: #f3f4f6;
        border-radius: 10px;
        padding: 20px;
        max-width: 400px;
        margin: 0 auto;
        margin-top: 50px;
    }
</style>
