<x-layout>

    @section('content')


        <div class="bg-green-400 ">
            {{Session('success')}}
        </div>

        <div class="">
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
                    <span class="bg-green-400 p-2 rounded">Show</span></a></td>

            <form action="{{route('create.destroy',$user->id)}}" method="post">
                @csrf @method('DELETE')
            <td>
                <input type="submit" value="Delete" class="bg-red-500 p-2 rounded">
            </td>
            </form>

</tr>
    @endforeach

    </table>
           <div class="mt-4"> {{$users->links()}}</div>
        </div>

    @endsection
</x-layout>
