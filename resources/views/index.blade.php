<x-layout>

    @section('content')
        <div class="bg-green-300">
            {{Session('success')}}
        </div>
    <div class="m-4">
        <a class="bg-green-500 px-4 py-2 rounded text-red-50" href="{{route('create.create')}}">Create</a>
    </div>
        <table class="table-auto border-separate w-full">
<tr class="text-left">
        <th>Name</th>
        <th>Surname</th>
        <th>Email </th>
        <th>Date-Created</th>
        <th>Date-Updated</th>
        <th>Show</th>
        <th>Remove </th>
</tr>

    @foreach($users as $user)
            <tr class="py-2">
            <td >{{$user->name}}</td>
            <td>{{$user->surname}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
            <td><a href="{{route('create.show',$user->id)}}">
                    <span class="bg-blue-500 p-2 rounded text-red-50">Show</span></a></td>

            <form action="{{route('create.destroy',$user->id)}}" method="post">
                @csrf @method('DELETE')
            <td>
                <input type="submit" value="Delete" class="bg-red-600 p-2 text-red-50 rounded">
            </td>
            </form>
            </tr>

    @endforeach

    </table>
        <div class="mt-4"> {{$users->links()}}</div>

    @endsection
</x-layout>
