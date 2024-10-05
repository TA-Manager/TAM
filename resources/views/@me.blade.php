<x-layout>
    <div class="w-full flex items-center flex-col">
        <h1 class="text-2xl text-[#2B308B]">โปรไฟล์</h1>
        @foreach ($members as $item)
            <div class="relative w-[30rem] h-[36rem] bg-gradient-to-b from-[#0692DF]/[0.1] to-[#034F79]/[.1] backdrop-blur-[49.47px] rounded-3xl mt-16 text-[#0692DF]" style="box-shadow: inset 25px -25px 25px rgba(4, 86, 131, 0.1)">
                <img src="{{ asset('img/coffee.svg') }}" alt="" class="absolute -left-32 top-20">
                <div class="absolute -right-16 -top-16">
                    <div class="flex justify-center items-center flex-col bg-[#E9EBF4] rounded-full w-36 h-36 text-[#2B308B]">
                        <h1 class="text-3xl">13,000</h1>
                        <h2 class="opacity-75">บาท</h2>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ Auth::user()->avatar }}" alt="Google Avatar" class="w-72 h-72 mt-10 rounded-full border-white border"/>
                    <img src="" alt="" class="w-72 h-72 mt-10 rounded-full border-white border bg-black">
                    <h1 class="mt-5 text-2xl font-bold">
                        {{ $item->first_name }} {{ $item->last_name }}
                    </h1>
                    <h2 class="text-xl">{{ $item->email }}</h2>
                </div>
                <div class="flex flex-col mt-5 ml-14 relative">
                    <div class="w-1/3">
                        <h3 class="text-xl font-semibold">Facebook</h3>
                        <h3 class="text-xl font-semibold">เบอร์โทร</h3>
                    </div>
                    <div class="left-32 absolute">
                        <p class="text-lg">{{ $item->contact }}</p>
                        <p class="text-lg">{{ $item->phone_number }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
