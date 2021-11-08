<x-layout>

    @section('content')

        <div class="py-2">
            <label class="block">
                <input type="text" name="name" value="{{$user->name}}"
                       class="form-input px-4 py-3 mt-1 block w-1/2 border-0" disabled>
            </label>
        </div>

        <div class="py-2">
            <label class="block">
                <input type="text" name="surname" value="{{$user->surname}}"
                       class="form-input px-4 py-3 rounded-4 w-1/2 border-0" disabled>
            </label>
        </div>

        <div class="py-2">
            <label class="block">
                <input type="email" name="email" value="{{$user->email}}"
                       class="form-input px-4 py-3 rounded-4 w-1/2 border-0" disabled>
            </label>
        </div>

        <div class="py-2">
            <a href="{{route('create.edit',$user->id)}}" class="bg-green-400 w-1/2  px-4 py-2 rounded-lg">Edit</a>
        </div>

    @endsection

</x-layout>
