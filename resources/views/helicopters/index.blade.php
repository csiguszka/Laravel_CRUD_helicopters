<x-layout>
    <h1 class="mb-4">Helicopters</h1>

    <div class="list-group">
        @foreach ($helicopters as $helicopter)
            <a href="{{ route('helicopters.show', $helicopter->id) }}" class="list-group-item list-group-item-action">
                {{ $helicopter->name }}
            </a>
        @endforeach
    </div>

    <div class="mt-4">
        <a href="{{ route('helicopters.create') }}" class="btn btn-primary">Create New Helicopter</a>
    </div>
</x-layout>
