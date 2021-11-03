<x-layout>

    @section('content')

        <div class="flex">
            <div class="flex-1">
        <form action="{{route('create.store')}}" method="post">
            @csrf

            <div class="py-2">
                <label class="block">
                    <input type="text" name="name" placeholder="First name" class="form-input px-4 py-3 mt-1 block w-1/2 border">
                </label>
            </div>

            <div class="py-2">
                <label class="block">
                    <input type="text" name="surname" placeholder="Last name" class="form-input px-4 py-3 rounded-4 w-1/2 border">
                </label>
            </div>

            <div class="py-2">
                <label class="block">
                    <input type="email" name="email" placeholder="Email address" class="form-input px-4 py-3 rounded-4 w-1/2 border">
                </label>
            </div>

            <div class="py-2">
                <label class="block">
                    <input type="password" name="password" placeholder="password" class="form-input px-4 py-3 rounded-4 w-1/2 border">
                </label>
            </div>

            <div class="py-2">
            <input type="submit" value="sign-up" class="bg-green-400 w-1/2  px-4 py-2 rounded-lg">
            </div>

        </form>
            </div>
        </div>
    @endsection
</x-layout>
