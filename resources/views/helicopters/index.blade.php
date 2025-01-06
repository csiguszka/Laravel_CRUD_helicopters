<x-layout>

    <h1>Helicopters</h1>

    @foreach ($helicopters as $helicopter)
        <a href="{{route('helicopters.show', $helicopter->id)}}">{{ $helicopter->name }}</a> <br>
    @endforeach

</x-layout>