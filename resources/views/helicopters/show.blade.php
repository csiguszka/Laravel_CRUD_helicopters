<x-layout>
    <h1 class="mb-4">{{ $helicopter->name }}</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Helicopter Details</h5>
            
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Type:</strong> {{ $helicopter->type }}</li>
                <li class="list-group-item"><strong>Manufacturer:</strong> {{ $helicopter->manufacturer }}</li>
                <li class="list-group-item"><strong>Passenger Capacity:</strong> {{ $helicopter->passengerCapacity }}</li>
                <li class="list-group-item"><strong>Max Speed (Km/h):</strong> {{ $helicopter->maxSpeedKmh }}</li>
            </ul>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('helicopters.edit', $helicopter->id) }}" class="btn btn-warning">Edit</a>
    
        <form action="{{ route('helicopters.destroy', $helicopter->id) }}" method="POST" class="d-inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    
        <a href="{{ route('helicopters.index') }}" class="btn btn-secondary">Back</a>
    </div>
</x-layout>
