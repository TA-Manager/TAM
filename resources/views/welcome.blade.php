<x-layout>
    @foreach($users as $user)
        <div class="text-3xl font-bold text-white">
            {{ $user->id }} {{ $user->name }} {{ $user->email }}
        </div>
    @endforeach
</x-layout>