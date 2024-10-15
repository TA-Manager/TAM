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
    <link rel="icon" type="image/x-icon" href="{{ asset('img/tamLogo.svg') }}">
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
    <nav class="w-full h-20 bg-white flex justify-between items-center p-5 px-10 md:px-20 text-xl">
        <div class="flex items-center">
            <a href="/home" class="w-32 font-bold text-blue-500"><img src="{{ asset('img/tamLogo.svg') }}" alt=""></a>
        </div>

        <div class="md:hidden cursor-pointer" id="burgerMenu">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </div>

        <div class="hidden md:flex text-[#0692DF] gap-6 items-center">
            <a href="/home">หน้าหลัก</a>
            <a href="/notification">ประกาศ</a>
            <a href="/@me"><img src="profile" alt="" class="w-10 h-10 bg-black rounded-full"></a>
        </div>
    </nav>
    <div class="flex flex-col min-h-screen h-full m-5 overflow-hidden relative">
        <div class="flex justify-center">
            <div class="relative bg-gradient-to-b from-[#0692DF]/[0.1] to-[#034F79]/[.1] backdrop-blur-[49.47px] rounded-3xl text-[#0692DF] p-2 grid grid-cols-2" style="box-shadow: inset 25px -25px 25px rgba(4, 86, 131, 0.1)">
                @if (session('isSelect'))
                    <form action="/changeSelect" method="POST" class="flex justify-center">
                        @csrf
                        <button class="p-2 rounded-3xl">เช็คชื่อ</button>
                    </form>
                    <button class="p-2 rounded-3xl bg-white">ค่าตอบแทน</button>
                @else
                    <button class="p-2 rounded-3xl bg-white">เช็คชื่อ</button>
                    <form action="/changeSelect" method="POST" class="flex justify-center">
                        @csrf
                        <button class="p-2 rounded-3xl" type="submit">ค่าตอบแทน</button>
                    </form>
                @endif
            </div>
        </div>
        <form action="{{ route('addSalary') }}" method="POST" id="salaryForm">
            @csrf
            <div class="flex justify-center">
                <div class="drop-shadow shadow-2xl w-11/12 min-h-96 mt-12 rounded-xl p-6">
                    <div class="mt-6 w-full flex justify-center text-[#2B308B] text-lg">
                        <div class="text-center border border-[#0692DF] grid grid-cols-3 w-full">
                            <p class="border border-[#0692DF] p-2 font-bold">รหัสนักศึกษา</p>
                            <p class="border border-[#0692DF] p-2 font-bold">ชื่อ - นามสกุล</p>
                            @if (session('isSelect'))
                                <p class="border border-[#0692DF] p-2 font-bold">ค่าตอบแทน</p>
                            @else
                                <p class="border border-[#0692DF] p-2 font-bold">เช็คชื่อ</p>
                            @endif
                            @foreach ($members as $item)
                                @if ($item->role == 'STUDENT')
                                    <p class="border border-[#0692DF] p-2">{{ $item->student_id }}</p>
                                    <p class="border border-[#0692DF] p-2">{{ $item->first_name }} {{ $item->last_name }}</p>
                                    @if (session('isSelect'))
                                        <p class="border border-[#0692DF] p-2">{{ $item->salary }}</p>
                                    @else
                                        <div class="relative border border-[#0692DF] flex justify-center items-center">
                                            <select name="status[{{ $item->student_id }}]" class="border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 rounded-md">
                                                <option value="">เช็คชื่อ</option>
                                                <option value="มา">มา</option>
                                                <option value="ลา">ลา</option>
                                                <option value="ขาด">ขาด</option>
                                            </select>
                                        </div>
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="flex justify-center items-center mt-10">
                    <button type="submit" class="px-20 py-4 text-[#66B600] bg-[#86D81E]/[0.4] flex items-center rounded-[30px]" style="box-shadow: inset 15px -15px 15px 0 rgba(5, 111, 169, 0.1), inset -15px 15px 15px 0 rgba(255, 255, 255, 0.1);">
                        <p class="font-semibold text-3xl">บันทึก</p>
                    </button>
                </div>
            </div>
        </form>

        <!-- Success Modal -->
        <div id="successModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white w-64 h-52 rounded-lg p-6 text-center flex flex-col justify-center items-center">
                <h2 class="text-lg font-semibold text-[#0692DF]">สำเร็จ</h2>
                <img src="{{ asset('img/success.svg') }}" alt="success" class="w-16 h-16 mt-2">
            </div>
        </div>
    </div>
</body>

<script>
    document.getElementById('salaryForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent form submission to show modal first

        // Show success modal
        document.getElementById('successModal').classList.remove('hidden');

        // Hide the modal after 1 second
        setTimeout(function () {
            document.getElementById('successModal').classList.add('hidden');
            
            // Optionally, submit the form after the success message is shown
            document.getElementById('salaryForm').submit();
        }, 1000); // 1000 ms = 1 second
    });
</script>

</html>

    