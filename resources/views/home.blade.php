<x-layout>
    <div class="mx-16 absolute">
        <div class="container text-[#0692DF] border border-[#0692DF] rounded-t-2xl rounded-b-2xl w-20 mt-10">
            <button class="flex p-2 text-center">ชั้นปี <img src="{{ asset('img/Arrow-up.svg')}}" alt="arrow"></button>
            <div class="item-class hidden">
                <div class="flex flex-col">
                    <hr>
                    <button class="hover:bg-gray-100">ปี 1</button>
                    <hr>
                    <button class="hover:bg-gray-100">ปี 2</button>
                    <hr>
                    <button class="hover:bg-gray-100">ปี 3</button>
                    <hr>
                    <button class="hover:bg-gray-100 rounded-b-2xl">ปี 4</button>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-48 w-full h-1/2 grid grid-cols-3 justify-center items-center px-20">
        @foreach ($users as $key => $item)
            @if($count == 0 && $key == 0)
                <div></div>
                <div class="flex justify-center">
                    <a href="#">
                        <div class="w-80 h-96 text-[#0692DF] bg-gradient-to-b from-[#0692DF]/[0.1] to-[#034F79]/[.1] backdrop-blur-[49.47px] rounded-3xl relative flex flex-col items-center" style="box-shadow: inset 25px -25px 25px rgba(4, 86, 131, 0.1)">
                            <img src="{{ asset('img/comLanding.svg') }}" alt="" class="w-56 h-64 absolute -top-20">
                            <div class="flex h-[80%] justify-end flex-col items-center p-3">
                                <h1 class="text-2xl">{{ $item->id }}</h1>
                                <p class="text-lg text-center">{{ $item->name }}</p>
                            </div>
                            <div class="absolute w-[117%] h-full flex justify-between items-center text-2xl z-50">
                                <form action="/minus-count" method="POST">
                                    @csrf
                                    <button type="submit" class="bg-white rounded-full w-14 h-14 p-2 drop-shadow-lg" id="back">&lt;</button>
                                </form>
                                <form action="/add-count" method="POST">
                                    @csrf
                                    <button type="submit" class="bg-white rounded-full w-14 h-14 p-2 drop-shadow-lg" id="next">&gt;</button>
                                </form>
                            </div>
                        </div>
                    </a>
                </div>
            @elseif ($count == $key)
                <div class="flex justify-center">
                    <a href="#">
                        <div class="w-80 h-96 text-[#0692DF] bg-gradient-to-b from-[#0692DF]/[0.1] to-[#034F79]/[.1] backdrop-blur-[49.47px] rounded-3xl relative flex flex-col items-center" style="box-shadow: inset 25px -25px 25px rgba(4, 86, 131, 0.1)">
                            <img src="{{ asset('img/comLanding.svg') }}" alt="" class="w-56 h-64 absolute -top-20">
                            <div class="flex h-[80%] justify-end flex-col items-center p-3">
                                <h1 class="text-2xl">{{ $item->id }}</h1>
                                <p class="text-lg text-center">{{ $item->name }}</p>
                            </div>
                            <div class="absolute w-[117%] h-full flex justify-between items-center text-2xl z-50">
                                <form action="/minus-count" method="POST">
                                    @csrf
                                    <button type="submit" class="bg-white rounded-full w-14 h-14 p-2 drop-shadow-lg" id="back">&lt;</button>
                                </form>
                                <form action="/add-count" method="POST">
                                    @csrf
                                    <button type="submit" class="bg-white rounded-full w-14 h-14 p-2 drop-shadow-lg" id="next">&gt;</button>
                                </form>
                            </div>
                        </div>
                    </a>
                </div>
            @elseif($key > $count+1 || $key < $count-1)
            @else
                <div class="flex justify-center">
                    <a href="#">
                        <div class="w-52 h-72 text-[#0692DF] bg-gradient-to-b from-[#0692DF]/[0.1] to-[#034F79]/[.1] backdrop-blur-[49.47px] rounded-3xl flex flex-col items-center" style="box-shadow: inset 25px -25px 25px rgba(4, 86, 131, 0.1)">
                            <img src="{{ asset('img/comLanding.svg') }}" alt="" class="w-40 h-44">
                            <div class="flex justify-center flex-col items-center p-3">
                                <h1 class="text-lg">{{ $item->id }}</h1>
                                <p class="text-base text-center">{{ $item->name }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endif
        @endforeach
    </div>
</x-layout>

<style>
    .container:hover .item-class {
        display: block;
    }
</style>
