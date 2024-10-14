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
            <h2 class="text-2xl font-bold text-[#2B308B] text-center">รายชื่อผู้สมัคร</h2>
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
                <div class="w-[30rem] h-[5rem] px-10 py-5 mx-16 my-2 text-[#0692DF] bg-[#0692DF]/[0.1] flex justify-between items-center font-bold text-2xl rounded-[20px]" style="box-shadow: inset 15px -15px 15px 0 rgba(5, 111, 169, 0.1), inset -15px 15px 15px 0 rgba(255, 255, 255, 0.1);">
                    <p>66070114</p>
                    <p>ปทิตตา ดวงแก้ว</p>
                </div>
                <div class="w-[30rem] h-[5rem] px-10 py-5 mx-16 my-2 text-[#0692DF] bg-[#0692DF]/[0.1] flex justify-between items-center font-bold text-2xl rounded-[20px]" style="box-shadow: inset 15px -15px 15px 0 rgba(5, 111, 169, 0.1), inset -15px 15px 15px 0 rgba(255, 255, 255, 0.1);">
                    <p>66070138</p>
                    <p>ปทิตตา ดวงแก้ว</p>
                </div>
                <div class="w-[30rem] h-[5rem] px-10 py-5 mx-16 my-2 text-[#0692DF] bg-[#0692DF]/[0.1] flex justify-between items-center font-bold text-2xl rounded-[20px]" style="box-shadow: inset 15px -15px 15px 0 rgba(5, 111, 169, 0.1), inset -15px 15px 15px 0 rgba(255, 255, 255, 0.1);">
                    <p>66070344</p>
                    <p>ปทิตตา ดวงแก้ว</p>
                </div>
                <div class="w-[30rem] h-[5rem] px-10 py-5 mx-16 my-2 text-[#0692DF] bg-[#0692DF]/[0.1] flex justify-between items-center font-bold text-2xl rounded-[20px]" style="box-shadow: inset 15px -15px 15px 0 rgba(5, 111, 169, 0.1), inset -15px 15px 15px 0 rgba(255, 255, 255, 0.1);">
                    <p>66070114</p>
                    <p>ปทิตตา ดวงแก้ว</p>
                </div>
                <div class="w-[30rem] h-[5rem] px-10 py-5 mx-16 my-2 text-[#0692DF] bg-[#0692DF]/[0.1] flex justify-between items-center font-bold text-2xl rounded-[20px]" style="box-shadow: inset 15px -15px 15px 0 rgba(5, 111, 169, 0.1), inset -15px 15px 15px 0 rgba(255, 255, 255, 0.1);">
                    <p>66070114</p>
                    <p>ปทิตตา ดวงแก้ว</p>
                </div>
                <div class="w-[30rem] h-[5rem] px-10 py-5 mx-16 my-2 text-[#0692DF] bg-[#0692DF]/[0.1] flex justify-between items-center font-bold text-2xl rounded-[20px]" style="box-shadow: inset 15px -15px 15px 0 rgba(5, 111, 169, 0.1), inset -15px 15px 15px 0 rgba(255, 255, 255, 0.1);">
                    <p>66070114</p>
                    <p>ปทิตตา ดวงแก้ว</p>
                </div>
                <div class="w-[30rem] h-[5rem] px-10 py-5 mx-16 my-2 text-[#0692DF] bg-[#0692DF]/[0.1] flex justify-between items-center font-bold text-2xl rounded-[20px]" style="box-shadow: inset 15px -15px 15px 0 rgba(5, 111, 169, 0.1), inset -15px 15px 15px 0 rgba(255, 255, 255, 0.1);">
                    <p>66070114</p>
                    <p>ปทิตตา ดวงแก้ว</p>
                </div>
                <div class="w-[30rem] h-[5rem] px-10 py-5 mx-16 my-2 text-[#0692DF] bg-[#0692DF]/[0.1] flex justify-between items-center font-bold text-2xl rounded-[20px]" style="box-shadow: inset 15px -15px 15px 0 rgba(5, 111, 169, 0.1), inset -15px 15px 15px 0 rgba(255, 255, 255, 0.1);">
                    <p>66070114</p>
                    <p>ปทิตตา ดวงแก้ว</p>
                </div>
                <div class="w-[30rem] h-[5rem] px-10 py-5 mx-16 my-2 text-[#0692DF] bg-[#0692DF]/[0.1] flex justify-between items-center font-bold text-2xl rounded-[20px]" style="box-shadow: inset 15px -15px 15px 0 rgba(5, 111, 169, 0.1), inset -15px 15px 15px 0 rgba(255, 255, 255, 0.1);">
                    <p>66070114</p>
                    <p>ปทิตตา ดวงแก้ว</p>
                </div>
                <div class="w-[30rem] h-[5rem] px-10 py-5 mx-16 my-2 text-[#0692DF] bg-[#0692DF]/[0.1] flex justify-between items-center font-bold text-2xl rounded-[20px]" style="box-shadow: inset 15px -15px 15px 0 rgba(5, 111, 169, 0.1), inset -15px 15px 15px 0 rgba(255, 255, 255, 0.1);">
                    <p>66070114</p>
                    <p>ปทิตตา ดวงแก้ว</p>
                </div>
                <div class="w-[30rem] h-[5rem] px-10 py-5 mx-16 my-2 text-[#0692DF] bg-[#0692DF]/[0.1] flex justify-between items-center font-bold text-2xl rounded-[20px]" style="box-shadow: inset 15px -15px 15px 0 rgba(5, 111, 169, 0.1), inset -15px 15px 15px 0 rgba(255, 255, 255, 0.1);">
                    <p>66070114</p>
                    <p>ปทิตตา ดวงแก้ว</p>
                </div>
                <div class="w-[30rem] h-[5rem] px-10 py-5 mx-16 my-2 text-[#0692DF] bg-[#0692DF]/[0.1] flex justify-between items-center font-bold text-2xl rounded-[20px]" style="box-shadow: inset 15px -15px 15px 0 rgba(5, 111, 169, 0.1), inset -15px 15px 15px 0 rgba(255, 255, 255, 0.1);">
                    <p>66070114</p>
                    <p>ปทิตตา ดวงแก้ว</p>
                </div>

                <div class="w-[30rem] h-[5rem] px-10 py-5 mx-16 my-2 text-[#0692DF] bg-[#0692DF]/[0.1] flex justify-between items-center font-bold text-2xl rounded-[20px]" style="box-shadow: inset 15px -15px 15px 0 rgba(5, 111, 169, 0.1), inset -15px 15px 15px 0 rgba(255, 255, 255, 0.1);">
                    <p>66070114</p>
                    <p>ปทิตตา ดวงแก้ว</p>
                </div>
                <div class="w-[30rem] h-[5rem] px-10 py-5 mx-16 my-2 text-[#0692DF] bg-[#0692DF]/[0.1] flex justify-between items-center font-bold text-2xl rounded-[20px]" style="box-shadow: inset 15px -15px 15px 0 rgba(5, 111, 169, 0.1), inset -15px 15px 15px 0 rgba(255, 255, 255, 0.1);">
                    <p>66070114</p>
                    <p>ปทิตตา ดวงแก้ว</p>
                </div>
                <div class="w-[30rem] h-[5rem] px-10 py-5 mx-16 my-2 text-[#0692DF] bg-[#0692DF]/[0.1] flex justify-between items-center font-bold text-2xl rounded-[20px]" style="box-shadow: inset 15px -15px 15px 0 rgba(5, 111, 169, 0.1), inset -15px 15px 15px 0 rgba(255, 255, 255, 0.1);">
                    <p>66070114</p>
                    <p>ปทิตตา ดวงแก้ว</p>
                </div>
                <div class="w-[30rem] h-[5rem] px-10 py-5 mx-16 my-2 text-[#0692DF] bg-[#0692DF]/[0.1] flex justify-between items-center font-bold text-2xl rounded-[20px]" style="box-shadow: inset 15px -15px 15px 0 rgba(5, 111, 169, 0.1), inset -15px 15px 15px 0 rgba(255, 255, 255, 0.1);">
                    <p>66070114</p>
                    <p>ปทิตตา ดวงแก้ว</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>