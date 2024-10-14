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

<body>
    <div class="flex flex-col min-h-screen h-full m-5 overflow-hidden relative">
    <div class="flex items-center my-5">
        <a href="/home" class="w-32 font-bold text-blue-500"><img src="{{ asset('img/tamLogo.svg') }}" alt=""></a>
    </div>
        <button class="text-center bg-[#056FA9]/[0.11] w-3/4 h-40 text-[#0692DF] text-2xl font-semibold rounded-xl">ประกาศ</button>
        <div class="m-5 flex gap-10 text-[#2B308B] font-bold text-xl">
            <button class="hover:text-[#30B5E2]">
                รายชื่อวิชา
            </button>
            <button class="hover:text-[#30B5E2]">
                รายชื่อผู้ผ่านการคัดเลือก
            </button>
        </div>
        <div class="m-5 grid grid-cols-2 w-2/4 gap-4">
            <button class="w-60 h-44 rounded-xl border-[#0692DF] border-2 flex flex-col justify-center items-center text-[#CCCCCC]">
                <h1 class="text-7xl">+</h1>
                <h2 class="text-xl">เพิ่มรายวิชา</h2>
            </button>
            <button class="w-60 h-44 rounded-xl border-[#0692DF] border-2 flex flex-col justify-center items-center text-[#0692DF] p-2">
                <h1 class="text-2xl font-bold text-center">06016301</h1>
                <h2 class="text-center">Information Technology Fundamentals</h2>
            </button>
            <button class="w-60 h-44 rounded-xl border-[#0692DF] border-2 flex flex-col justify-center items-center text-[#0692DF] p-2">
                <h1 class="text-2xl font-bold text-center">06016301</h1>
                <h2 class="text-center">Information Technology Fundamentals</h2>
            </button>
            <button class="w-60 h-44 rounded-xl border-[#0692DF] border-2 flex flex-col justify-center items-center text-[#0692DF] p-2">
                <h1 class="text-2xl font-bold text-center">06016301</h1>
                <h2 class="text-center">Information Technology Fundamentals</h2>
            </button>
        </div>
        <div class="absolute right-0 -top-16 w-[23%] h-[90%] bg-gradient-to-b from-[#0692DF]/[0.1] to-[#034F79]/[.1] backdrop-blur-[49.47px] rounded-3xl mt-16 text-[#0692DF]" style="box-shadow: inset 25px -25px 25px rgba(4, 86, 131, 0.1)">
            <div class="flex flex-col items-center">
                <img src="{{ asset('img/profile-placeholder.svg') }}" alt="Profile Picture" class="w-40 h-40 mt-16 rounded-full border-white border bg-black">
                <h1 class="mt-14 text-lg font-semibold">
                    {{ $member->first_name }} {{ $member->last_name }}
                </h1>
                <h2 class="text">{{ $member->email }}</h2>
            </div>
            <div class="flex flex-col m-5 relative">
                <div class="w-1/3">
                    <h3 class="text-lg font-semibold">Facebook</h3>
                    <h3 class="text-lg font-semibold">เบอร์โทร</h3>
                </div>
                <div class="left-28 absolute">
                    <p class="">{{ $member->contact }}</p>
                    <p class="">{{ $member->phone_number }}</p>
                </div>
            </div>
            <!-- logout -->
            <form action="{{ route('logout') }}" method="POST" class="mt-5 flex justify-center">
                @csrf
                <button type="submit" class="text-[#2B308B] p-2 drop-shadow-lg underline" id="next">ออกจากระบบ</button>
            </form>
        </div>
    </div>
</body>

</html>