<div>
    <form wire:submit="createUser">
        <input type="text" wire:model="name" placeholder="name" />
        <input type="email" wire:model="email" placeholder="email" />
        <input type="password" wire:model="password" placeholder="password" />

        <button>Create</button>
        {{-- <button wire:click.prevent="createUser">Create</button> --}}
    </form>
    <hr>
    @foreach ($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
</div>
