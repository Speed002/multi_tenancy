<x-layouts.auth>
    <div class="px-3">
        <form action="" method="">
            @csrf
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label slate">First name</label>
                <input type="text" class="form-control" name="fname" id="fname">
                @error('fname')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label slate">Last name</label>
                <input type="text" class="form-control" name="lname" id="lname">
                @error('lname')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>

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
                <label for="exampleFormControlInput1" class="form-label slate">Confirm Password</label>
                <input type="password" class="form-control" name="password" id="password" >
                @error('password')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
          <button class="btn btn-light btn-sm slate-light" type="submit">Next</button>
        </form>
      </div>
</x-layouts.auth>
