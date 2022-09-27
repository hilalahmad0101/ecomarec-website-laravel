<div>
    <x-slot name='title'>Dashboard</x-slot>
    <h1>Dashboard {{Auth::guard('vendor')->user()->name}}</h1>

    <button type="submit" wire:click='logout'>Logout</button>
</div>
