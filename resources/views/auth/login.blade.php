@extends('layouts.auth')

@section('content')
   <div class="container d-flex flex-column px-3">
      <div
        class="row align-items-center justify-content-center no-gutters min-vh-100"
      >
        <div class="col-lg-5 col-md-8 py-8 py-xl-0">
          <!-- Card -->
          <div class="card shadow">
            <!-- Card body -->
            <div class="card-body p-6">
              <div class="mb-4">
                <a href="/login"
                  ><img
                    src="vendor/assets/img/logo.png"
                    width="100"
                    class="mb-4"
                /></a>
                <h1 class="mb-1 font-weight-bold">Sign in</h1>
                <span
                  >Tidak mempunyai akun?
                  <a href="{{route('register')}}" class="ml-1">Sign up</a></span
                >
              </div>
              <!-- Form -->
              <form method="POST" action="{{route('login')}}">
                <!-- Username -->
                <div class="form-group">
                  <label for="email" class="form-label"
                    >Username or email</label
                  >
                  <input
                    type="email"
                    id="email"
                    class="form-control"
                    name="email"
                    placeholder="Email address here"
                    required=""
                  />
                </div>
                <!-- Password -->
                <div class="form-group">
                  <label for="password" class="form-label">Password</label>
                  <input
                    type="password"
                    id="password"
                    class="form-control"
                    name="password"
                    placeholder="**************"
                    required=""
                  />
                </div>
                <!-- Checkbox -->
                <div
                  class="d-lg-flex justify-content-between align-items-center mb-4"
                >
                  <div>
                    <a href="forget-password.html">Forgot your password?</a>
                  </div>
                </div>
                <div>
                  <!-- Button -->
                  <a href="{{route('userprofile')}}" >
                      <button type="submit" class="btn btn-primary btn-block">
                    Sign in
                  </button>
                  </a>
                
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="container" style="display: none;" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
