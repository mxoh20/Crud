<x-layout>

    @section('content')

        <form action="{{route('create.update',$user->id)}}" method="post">

            @csrf
            @method('PUT')


            <div class="py-2">
                <label class="block">
                    <input type="text" name="name" value="{{$user->name}}" class="form-input px-4 py-3 mt-1 block w-1/2 border" autofocus>
                </label>
            </div>

            <div class="py-2">
                <label class="block">
                    <input type="text" name="surname" value="{{$user->surname}}" class="form-input px-4 py-3 rounded-4 w-1/2 border">
                </label>
            </div>

            <div class="py-2">
                <label class="block">
                    <input type="email" name="email" value="{{$user->email}}" class="form-input px-4 py-3 rounded-4 w-1/2 border">
                </label>
            </div>

            <div class="py-2">
                <input type="submit" value="edit" class="bg-green-400 w-1/2  px-4 py-2 rounded-lg">
            </div>

        </form>

    @endsection
</x-layout>
