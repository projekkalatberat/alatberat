 @extends('layouts.userprofile')



 @section('title')
        Alat Berat
 @endsection
 
 
 
@section('content')
 
    <!-- Jumbotron -->
    <div class="jumbotron text-center bg-white text-dark">
      <div class="container">
        <p class="_hd font-weight-bold">Profile</p>
        <h1 class="font-weight-bold">Muhammad Ikszan</h1>
      </div>
    </div>

    <div class="py-md-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-12">
            <!-- Side navbar -->
            <nav
              class="navbar navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 small-sidenav"
            >
              <!-- Menu -->
              <a
                class="d-xl-none d-lg-none d-md-none text-inherit font-weight-bold"
                href="#!"
                >Menu</a
              >
              <!-- Button -->
              <button
                class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light"
                type="button"
                data-toggle="collapse"
                data-target="#smallSidenav"
                aria-controls="smallSidenav"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-list"
                  viewBox="0 0 16 16"
                >
                  <path
                    fill-rule="evenodd"
                    d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"
                  />
                </svg>
              </button>
              <!-- Collapse navbar -->
              <div class="collapse navbar-collapse" id="smallSidenav">
                <div class="navbar-nav flex-column">
                  <span class="navbar-header">Status Iklan</span>
                  <!-- List -->
                  <ul class="list-unstyled ml-n2 mb-4">
                    <!-- Nav item -->
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('Piklan')}}"
                        ><i class="fe fe-calendar nav-icon"></i>Diposting
                        Iklan</a
                      >
                    </li>

                      
                    <!-- Nav item -->
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('Draftiklan')}}"
                        ><i class="fe fe-credit-card nav-icon"></i> Draft
                        Iklan</a
                      >
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('paymentConfirm')}}"
                        ><i class="fe fe-credit-card nav-icon"></i>Pembayaran
                        Konfirmasi</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="billing-info.html"
                        ><i class="fe fe-credit-card nav-icon"></i> Email Pemberitahuan</a
                      >
                    </li>

                      <li class="nav-item">
                      <a class="nav-link" href="{{route('jual')}}"
                        ><i class="fe fe-credit-card nav-icon"></i> Buat Iklan</a
                      >
                    </li>
                  </ul>
                  <span class="navbar-header">Akun Anda</span>
                  <!-- List -->
                  <ul class="list-unstyled ml-n2 mb-0" style="font-size: 12px; font-weight:500;">
                    <!-- Nav item -->
                    <li class="nav-item active">
                         <span>  Iklan Standard</span> <a href="#exampleModal" data-toggle="modal" data-target="#exampleModal" style="color: blue;">Upgrade Sekarang</a>

                         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
  
      <div class="modal-body text-center">
       
Akun anda telah diupgrade , Anda telah mendapatkan fitur premium.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
          <div class="col-lg-9 col-md-8 col-12">
            <!-- Card -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Iklan Diposting : 0 Post</h3>
             
              </div>
              <!-- Card body -->

            </div>
          </div>
        </div>
      </div>
    </div>
    

@endsection


