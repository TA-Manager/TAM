<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TAM</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <style>
    :root {
    font-family: Inter, sans-serif;
    font-feature-settings: 'liga' 1, 'calt' 1;
    }
    @supports (font-variation-settings: normal) {
    :root { font-family: InterVariable, sans-serif; }
    }
    </style>
</head>
<div class="flex min-h-screen h-full overflow-hidden">
    <div class="w-full h-screen grid grid-cols-1 md:grid-cols-2 overflow-hidden">
        <!-- Left side (Image) -->
        <div class="hidden md:flex items-center justify-center bg-gradient-to-b from-[#0692DF] to-[#1962CB] backdrop-blur p-6">
            <img src="{{ asset('img/comLanding.svg') }}" alt="Laptop">
        </div>
        <!-- Right side (Form) -->
        <div class="flex flex-col justify-center p-8 bg-[#F8F9FD]">
            <div class="flex items-center justify-center mb-8">
                <img src="{{ asset('img/tamLogo.svg') }}" alt="Logo">
            </div>
            <form>
                <!-- Email Input -->
                <div class="mb-4 mx-6">
                    <label for="email" class="block text-xl text-[#0692DF] mb-2">อีเมล</label>
                    <input type="email" id="email" class="w-full p-3 border border-[#D9D9D9] rounded-[10px] focus:outline-none focus:ring-2 focus:ring-blue-500 text-xl">
                </div>
                <!-- Password Input -->
                <div class="mb-7 mx-6">
                    <label for="password" class="block text-xl text-[#0692DF] mb-2">รหัสผ่าน</label>
                    <input type="password" id="password" class="w-full p-3 border border-[#D9D9D9] rounded-[10px] focus:outline-none focus:ring-2 focus:ring-blue-500 text-xl">
                </div>
                <!-- Login Button -->
                <div class="flex justify-center">
                    <button type="submit" class="w-2/5 bg-[#0692DF] text-white text-xl p-3 rounded-[51px] hover:bg-[#007dce] transition">เข้าสู่ระบบ</button>
                </div>
            </form>
            <!-- OR Divider -->
            <div class="flex items-center justify-center my-10">
                <div class="w-1/4 h-px bg-[#2B308B] bg-opacity-50 opacity-50"></div>
                <span class="mx-3 text-[#2B308B] opacity-50">หรือ</span>
                <div class="w-1/4 h-px bg-[#2B308B] bg-opacity-50 opacity-50"></div>
            </div>
            <!-- Google Login Button -->
            <div class="flex justify-center">
                <button class="w-2/5 flex items-center justify-center bg-white text-[#0692DF] text-xl p-3 hover:bg-slate-100 rounded-[51px] transition">
                    เข้าสู่ระบบด้วย Google
                </button>
            </div>
        </div>
    </div>
</div>