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
        <form>

          <!-- New Pass input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example23">Current Password</label>
          </div>
          
          <!-- New Pass input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example23">Password</label>
          </div>

          <!-- Confirm Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example23">Comfirm Password</label>
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