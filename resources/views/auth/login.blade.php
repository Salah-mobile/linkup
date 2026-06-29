@extends("auth.layout.formStructure")
@section("content")
         <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Sign In</h2>
        <form action="{{route("login")}}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <input type="email" name="email" value="" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>
            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 rounded-lg transition duration-200 mt-4">
                Login
            </button>
        </form>
        <p class="text-sm text-center text-gray-600 mt-6">
            Don't have an account? <a href="" class="text-blue-600 hover:underline font-medium">Sign up</a>
        </p>
@endsection
