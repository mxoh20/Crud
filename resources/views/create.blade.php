<x-layout>

    @section('content')

        <div class="flex">
            <div class="flex-1">
                <form action="{{route('create.store')}}" method="post">

                    @csrf
                    <div class="py-2">
                        <label class="block">
                            <input type="text" name="name" value="{{@old('name')}}" placeholder="First Name"
                                   class="form-input px-4 py-3 mt-1 block w-1/2 border @error('name') border-red-600 border-4 @enderror">
                        </label>
                        @error('name')
                        <span class="text-red-600 p-0.5">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="py-2">
                        <label class="block">
                            <input type="text" name="surname" value="{{@old('surname')}}" placeholder="Last Name"
                                   class="form-input px-4 py-3 rounded-4 w-1/2 border @error('surname') border-red-600 border-4 @enderror">
                        </label>
                        @error('surname')
                        <span class="text-red-500 p-0.5">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="py-2">
                        <label class="block">
                            <input type="email" name="email" value="{{@old('name')}}" placeholder="Email Address"
                                   class="form-input px-4 py-3 rounded-4 w-1/2 border @error('email') border-red-600 border-4 @enderror">
                        </label>
                        @error('email')
                        <span class="text-red-600 p-0.5">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="py-2">
                        <label class="block">
                            <input type="password" name="password" placeholder="Password"
                                   class="form-input px-4 py-3 rounded-4 w-1/2 border @error('surname') border-red-600 border-4 @enderror">
                        </label>
                        @error('password')
                        <span class="text-red-600 p-0.5">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="py-2">
                        <input type="submit" value="Sign-up" class="bg-green-400 w-1/2  px-4 py-2 rounded-lg ">
                    </div>

                </form>

            </div>
        </div>
    @endsection
</x-layout>
