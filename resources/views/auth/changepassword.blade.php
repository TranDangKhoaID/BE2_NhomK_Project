@extends('layout')

@section('header')
    @include('header')

@section('content')

<section class="vh-100">
  <div class="change_pass container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
        </div>
      @endif
      <form method="POST" action="{{ route('change.password.update') }}">
          @csrf

          <!-- Current Password input -->
          <div class="form-outline mb-4">
              <input type="password" id="current_password" name="current_password" class="form-control form-control-lg @error('current_password') is-invalid @enderror" required>
              <label class="form-label" for="current_password">Current Password</label>
              @error('current_password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>

          <!-- New Password input -->
          <div class="form-outline mb-4">
              <input type="password" id="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" required>
              <label class="form-label" for="password">New Password</label>
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>

          <!-- Confirm Password input -->
          <div class="form-outline mb-4">
              <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" required>
              <label class="form-label" for="password_confirmation">Confirm Password</label>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block">Change</button>
      </form>
      </div>
    </div>
  </div>
</section>

@section('footer')
    @include('footer')
@endsection