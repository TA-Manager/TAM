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
            :root {
                font-family: InterVariable, sans-serif;
            }
        }
    </style>
</head>

<body>
    <div class="flex my-5 ml-10">
        <a href="/home" class="w-32 font-bold text-blue-500"><img src="{{ asset('img/tamLogo.svg') }}" alt=""></a>
    </div>
    <div class="flex flex-col items-center min-h-screen p-6">
        <!-- Header Section -->
        <div class="flex justify-between w-full max-w-7xl mb-4">
            <a href="/home">
                <img src="{{ asset('img/leftArrow.svg') }}" alt="leftArrow" class="">
            </a>
            <h2 class="text-2xl font-bold text-[#2B308B] text-center">รายชื่อผู้ผ่านการคัดเลือก</h2>
            <div>
                <!-- Dropdown Button -->
                <select class="border border-[#0692DF] shadow-sm px-4 py-2 bg-white font-medium text-[#0692DF] rounded-[50px]">
                    <option value="">รายวิชา</option>
                    <option value="ISAD">ISAD</option>
                    <option value="PSCP">PSCP</option>
                    <option value="MT">MT</option>
                </select>
            </div>
        </div>
        <!-- Grid Section -->
        <div class="flex justify-center">
            <div class="grid grid-cols-2 w-full max-w-7xl">
                <!-- Each item as a button -->
                @foreach ($members as $item)
                    @if($item->role == 'STUDENT')
                        <form action="{{ route('members-submit') }}" method="POST">
                            @csrf
                            <input type="hidden" name="student_id" value="{{ $item->student_id }}">
                            <button type="submit" class="w-[35rem] h-[6rem] px-10 py-5 mx-16 my-2 text-[#0692DF] bg-[#0692DF]/[0.1] flex justify-between items-center font-bold text-2xl rounded-[20px]" style="box-shadow: inset 15px -15px 15px 0 rgba(5, 111, 169, 0.1), inset -15px 15px 15px 0 rgba(255, 255, 255, 0.1);">
                                <p>{{ $item->student_id }}</p>
                                <p>{{ $item->first_name }} {{ $item->last_name }}</p>
                            </button>
                        </form>
                    @endif
                @endforeach
            </div>
        </div>
        @if(session('member'))
            <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 " id="member-info">
                <div class="relative w-[30rem] h-[36rem] bg-white rounded-3xl text-[#0692DF] p-5" style="box-shadow: inset 25px -25px 25px rgba(4, 86, 131, 0.1)">
                    <div class="flex justify-end">
                        <button id="close-button" class=" text-[#545454]">X</button>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('img/profile-placeholder.svg') }}" alt="Profile Picture" class="w-72 h-72 mt-5 rounded-full border-white border bg-black">
                        <h1 class="mt-5 text-2xl font-bold">
                            {{ session('member')->first_name }} {{ session('member')->last_name }}
                        </h1>
                        <h2 class="text-xl">{{ session('member')->email }}</h2>
                    </div>
                    <div class="flex flex-col mt-5 ml-14 relative">
                        <div class="w-1/3">
                            <h3 class="text-xl font-semibold">Facebook</h3>
                            <h3 class="text-xl font-semibold">เบอร์โทร</h3>
                        </div>
                        <div class="left-32 absolute">
                            <p class="text-lg">{{ session('member')->contact }}</p>
                            <p class="text-lg">{{ session('member')->phone_number }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</body>

<script>
    document.getElementById('close-button').addEventListener('click', function() {
        document.getElementById('member-info').style.display = 'none';
    });
</script>

</html>