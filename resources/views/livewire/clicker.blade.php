<div>
    <form class="p-5" wire:submit="createUser">
        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" type="text" wire:model="name" placeholder="name" />
        @error('name')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" type="email" wire:model="email" placeholder="email" />
        @error('email')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" type="password" wire:model="password" placeholder="password" />
        @error('password')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <button class="block rounded px-3 py-1 bg-gray-400 text-white">Create</button>
        {{-- <button wire:click.prevent="createUser">Create</button> --}}
    </form>
    <hr>
    @foreach ($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
</div>
