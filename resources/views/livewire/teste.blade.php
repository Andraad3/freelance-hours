<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <input type="text" wire:model.live="search"/>
    <br>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
