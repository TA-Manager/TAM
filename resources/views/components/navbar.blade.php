<nav class="w-full h-20 bg-white flex justify-between items-center p-5 px-10 md:px-20 text-xl">
    <div class="flex items-center">
        <a href="/" class="text-2xl font-bold text-blue-500">SIWAPAT</a>
    </div>

    <div class="hidden md:flex bg-gray-200 rounded-full h-10 items-center w-32 md:w-80">
        <img src="{{ asset('img/search.svg') }}" class="p-2" alt="search icon">
        <input type="text" class="bg-gray-200 rounded-full text-base focus:outline-none h-10 p-2 w-full" placeholder="ค้นหารายวิชา">
    </div>

    <div class="md:hidden cursor-pointer" id="burgerMenu">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
    </div>

    <div class="hidden md:flex text-[#0692DF] gap-6 items-center">
        <a href="/home">หน้าหลัก</a>
        <a href="/">ประกาศ</a>
        <a href=""><img src="profile" alt="" class="w-10 h-10 bg-black rounded-full"></a>
    </div>

    <div id="mobileMenuDropdown" class="hidden flex-col absolute top-20 left-0 w-full bg-white text-center space-y-4 py-4 shadow-lg md:hidden">
        <a href="/home" class="block text-[#0692DF]">หน้าหลัก</a>
        <a href="/" class="block text-[#0692DF]">ประกาศ</a>
    </div>
</nav>

<script>
    document.getElementById('burgerMenu').addEventListener('click', function() {
        const dropdown = document.getElementById('mobileMenuDropdown');
        dropdown.classList.toggle('hidden');
    });
</script>
