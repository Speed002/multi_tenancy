<x-layouts.auth>
    <div class="h-100 px-3">
        <form action="" method="">
            @csrf
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label slate">Email address</label>
                <input type="email" class="form-control" name="email" id="email">
                @error('email')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label slate">Password</label>
                <input type="password" class="form-control" name="password" id="password" >
                @error('password')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
          <div class="mb-3">
            <small>
                <a href="" class="small slate-light">Forgot password?</a>
            </small>
          </div>
          <button class="btn btn-light btn-sm slate-light" type="submit">Sign in</button>
        </form>
      </div>
</x-layouts.auth>
