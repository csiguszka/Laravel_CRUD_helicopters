<x-layout>
    <h1>Create a new helicopter</h1>

    <form method="POST" action="{{ route('helicopters.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
                <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type"
                name="type" value="{{ old('type') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="manufacturer" class="form-label">Manufacturer</label>
            <input type="text" class="form-control @error('manufacturer') is-invalid @enderror" id="manufacturer"
                name="manufacturer" value="{{ old('manufacturer') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="passengerCapacity" class="form-label">Passenger Capacity</label>
            <input type="text" class="form-control @error('passengerCapacity') is-invalid @enderror" id="passengerCapacity"
                name="passengerCapacity" value="{{ old('passengerCapacity') }}">
            @error('passengerCapacity')
                <div class="invalid-feedback">{{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="maxSpeedKmh" class="form-label">Max Speed Km/h</label>
            <input type="text" class="form-control @error('maxSpeedKmh') is-invalid @enderror" id="maxSpeedKmh"
                name="maxSpeedKmh" value="{{ old('maxSpeedKmh') }}">
            @error('maxSpeedKmh')
                <div class="invalid-feedback">{{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-layout>
