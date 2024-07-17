@extends('_layout_login', ['title' => 'LOGIN'])
@section('contents')

<form>
            
      
  <p class="text-center" style="font-size: 50px;font-weight: 800;padding-bottom: 20px;">LOGIN</p>

  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" id="loginName" class="form-control" />
    <label class="form-label" for="loginName">Email or username</label>
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" id="loginPassword" class="form-control" />
    <label class="form-label" for="loginPassword">Password</label>
  </div>

  <!-- 2 column grid layout -->
  <div class="row mb-4">
    <div class="col-md-6 d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check mb-3 mb-md-0">
        {{-- <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
        <label class="form-check-label" for="loginCheck"> Remember me </label> --}}
        <p class="text-gray-600">Don't have an account? <a href="{{ route('register.index') }}" class="font-bold">Sign
          up</a>.</p>
      </div>
    </div>

    <div class="col-md-6 d-flex justify-content-center">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
  
</form>


@endsection
@push('scripts')
@endpush