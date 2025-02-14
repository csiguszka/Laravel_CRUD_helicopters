<x-layout>
    <h1>Edit Helicopter</h1>

    <form method="POST" action="{{ route('helicopters.update', $helicopter->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name') ?? $helicopter->name }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type"
                name="type" value="{{ old('type') ?? $helicopter->type }}">
            @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="manufacturer" class="form-label">Manufacturer</label>
            <input type="text" class="form-control @error('manufacturer') is-invalid @enderror" id="manufacturer"
                name="manufacturer" value="{{ old('manufacturer') ?? $helicopter->manufacturer }}">
            @error('manufacturer')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="passengerCapacity" class="form-label">Passenger Capacity</label>
            <input type="text" class="form-control @error('passengerCapacity') is-invalid @enderror" id="passengerCapacity"
                name="passengerCapacity" value="{{ old('passengerCapacity') ?? $helicopter->passengerCapacity }}">
            @error('passengerCapacity')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="maxSpeedKmh" class="form-label">Max Speed Km/h</label>
            <input type="text" class="form-control @error('maxSpeedKmh') is-invalid @enderror" id="maxSpeedKmh"
                name="maxSpeedKmh" value="{{ old('maxSpeedKmh') ?? $helicopter->maxSpeedKmh }}">
            @error('maxSpeedKmh')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
<a href="{{ route('helicopters.show', $helicopter->id) }}" class="btn btn-secondary">Back</a>

        </div>
    </form>
</x-layout>
