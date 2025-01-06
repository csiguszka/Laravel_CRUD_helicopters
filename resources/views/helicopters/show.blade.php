<x-layout>
    <h1>{{ $helicopter->name }}</h1>


    <a href="{{route('helicopters.edit', $helicopter->id)}}" class="btn btn-warning">Edit</a>

    <form action="{{route('helicopters.destroy',$helicopter->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>

</x-layout>