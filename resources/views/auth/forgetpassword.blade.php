@extends("auth.layout.formStructure");
@section("content")
    <form action="{{route("forget.password.post")}}" method="post">
        @csrf
        <input type="email" name="email" required>
        <button>Envoyer</button>
        @error("email")
          <p>{{$message}}</p>
        @enderror
    </form>
@endsection
