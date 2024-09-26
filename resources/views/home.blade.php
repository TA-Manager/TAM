<x-layout>
    <div class="mx-10">
        <div class="container text-[#0692DF] border border-[#0692DF] rounded-t-2xl rounded-b-2xl">
            <button class="flex p-2 ">ชั้นปี <img src="{{ asset('img/Arrow-up.svg')}}" alt="arrow"></button>
            <div class="item-class hidden ">
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
</x-layout>

<style>
    .container:hover .item-class {
        display: block;
    }
</style>
