@extends('_layout_login', ['title' => 'SIGN UP Account'])
@section('contents')

<p class="text-center" style="font-size: 50px;font-weight: 800;line-height:1;padding-bottom:30px;">SIGN UP</p>
    <form action="{{ route('register.store') }}" method="POST" autocomplete="off">
      {{csrf_field()}}
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            <div data-mdb-input-init class="form-outline">
              <input type="text" id="form3Example1" name="firstName" class="form-control" />
              <label class="form-label" for="form3Example1">First name</label>
            </div>
          </div>
          <div class="col">
            <div data-mdb-input-init class="form-outline">
              <input type="text" id="form3Example2" name="lastName" class="form-control" />
              <label class="form-label" for="form3Example2">Last name</label>
            </div>
          </div>
        </div>
      
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="email" id="form3Example3" name="email" class="form-control" />
          <label class="form-label" for="form3Example3">Email address</label>
        </div>
      
        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="password" id="form3Example4" name="password" class="form-control" />
          <label class="form-label" for="form3Example4">Password</label>
        </div>
      
        <!-- Checkbox -->
        {{-- <div class="form-check d-flex justify-content-center mb-4"> --}}
          {{-- <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
          <label class="form-check-label" for="form2Example33">
            Subscribe to our newsletter
          </label> --}}
        {{-- </div> --}}
      
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
      
        <!-- Register buttons -->
        {{-- <div class="text-center">
          <p>or sign up with:</p>
          <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
          </button>
      
          <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
            <i class="fab fa-google"></i>
          </button>
      
          <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
            <i class="fab fa-twitter"></i>
          </button>
      
          <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
            <i class="fab fa-github"></i>
          </button>
        </div> --}}
      </form>
    

      @endsection
      @push('scripts')
      @endpush