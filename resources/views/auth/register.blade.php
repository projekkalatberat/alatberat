@extends('layouts.app')

@section('content')

   <div class="container d-flex flex-column pt-5 pb-5">
      <div
        class="row align-items-center justify-content-center no-gutters min-vh-100"
      >
        <div class="col-lg-5 col-md-8 py-8 py-xl-0">
          <!-- Card -->
          <div class="card shadow">
            <!-- Card body -->
            <div class="card-body p-6">
              <div class="mb-4">
                <a href=""
                  ><img
                    src="vendor/assets/img/logo.png "
                    class="mb-4"
                    alt=""
                    width="100"
                /></a>
                <h1 class="mb-1 font-weight-bold">Sign up</h1>
                <span
                  >Sudah punya akun?
                  <a href="{{route('login')}}" class="ml-1">Sign in</a></span
                >
              </div>
              <!-- Form -->
              <form method="POST" action="{{route('register')}}">


              {{csrf_field()}}
              
              <div class="form-group">
                  <label for="username" class="form-label">Nama depan</label>
                  <input
                    type="text"
                    id="username"
                    class="form-control"
                    name="username"
                    placeholder="Nama Depan"
                    required=""
                  />
                </div>

                <div class="form-group">
                  <label for="username" class="form-label">Nama Belakang</label>
                  <input
                    type="text"
                    id="username"
                    class="form-control"
                    name="username"
                    placeholder="Nama Belakang"
                    required=""
                  />
                </div>

                <div class="form-group">
                  <label for="username" class="form-label">Alamat</label>
                  <textarea
                    class="form-control"
                    id="exampleFormControlTextarea1"
                    rows="3"
                  ></textarea>
                </div>

                <div class="form-group">
                  <label for="username" class="form-label">Kota</label>
                  <input
                    type="text"
                    id="username"
                    class="form-control"
                    name="username"
                    placeholder="Kota"
                  />
                </div>

                <div class="form-group">
                  <label for="username" class="form-label">Provinsi</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="username" class="form-label">Kode Pos</label>
                  <input
                    type="text"
                    id="username"
                    class="form-control"
                    name="username"
                    placeholder="Kota"
                  />
                </div>

                <div class="form-group">
                  <label for="username" class="form-label">No. Telepon</label>
                  <input
                    type="text"
                    id="username"
                    class="form-control"
                    name="username"
                    placeholder="No. Telepon"
                  />
                </div>

                <div class="form-group">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="email"
                    id="email"
                    class="form-control"
                    name="email"
                    placeholder="Email address here"
                    required=""
                  />
                </div>
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

                <div class="form-group">
                     <label for="kirim" class="form-label">Kirim saya email berita bulanan</label>
                     <br>
                     <input type="radio" name="kirim" id="kirim"> Tidak 
                     <input type="radio" name="kirim" id="kirim" style="margin-left: 20px; padding-left: 30px;">Ya
                </div>
                <div>
                  <!-- Button -->
                
                </div>
              </form>

                <a href="">
                    <button type="submit" class="btn btn-primary btn-block">
                    Daftar Sekarang
                  </button>
                </a>
              
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="container" style="display: none;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
