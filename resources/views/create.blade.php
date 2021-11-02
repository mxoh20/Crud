<x-layout>

    @section('content')
        <form action="{{route('create.store')}}" method="post">
            @csrf
            <div><label>
                    <input type="text" name="name" placeholder="First name" class="border">
                </label></div>

            <div><label>
                   <input type="text" name="surname" placeholder="Last name" class="border-2 rounded-b-md">
                </label></div>

            <div><label>
                    <input type="email" name="email" placeholder="Email address" class="border-2 rounded-b-md">
                </label></div>
            <div><label>
                    <input type="password" name="password" placeholder="password" class="">
                </label></div>
            <input type="submit" value="sign-up" class="bg-green-400  px-4 py-2 rounded-lg">
        </form>
    @endsection
</x-layout>
