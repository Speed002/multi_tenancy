<x-layouts.auth>
    <div class="h-100 px-3">
        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label slate">Email address</label>
                <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}">
                @error('email')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
                @if (session('success'))
                    <small class="text-info text-xs">{{session('success')}}</small>
                @endif
            </div>
          <button class="btn btn-light btn-sm slate-light" type="submit">Sign in</button>
        </form>
      </div>
</x-layouts.auth>
