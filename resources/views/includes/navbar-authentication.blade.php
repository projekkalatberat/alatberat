 <!-- Navbar -->
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{route('home')}}">
            <img
              src="vendor/assets/img/logo.jpg"
              style="width: 50px"
              alt="Logo"
            />
          </a>
          <button
            class="navbar-toggler collapsed"
            type="button"
            data-toggle="collapse"
            data-target="#main-nav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="main-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('kategori')}}">Kategori</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('beli')}}">Beli</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('jual')}}">Jual</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('blog')}}">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
              </li>
           

               <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                data-toggle="dropdown"
                href="javascript:void();"
              >
                Selamat Datang,Uwi
              </a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li class="dropdown-item user-details">
                 
                </li>
                <li class="dropdown-divider"></li>
             
                <li class="dropdown-divider"></li>
                <li class="dropdown-item">
                    <a href="{{route('userprofile')}}"><i class="zmdi zmdi-balance-wallet mr-3"></i>Dashboard</a>
                  
                </li>
                <li class="dropdown-divider"></li>
                <li class="dropdown-item">
                    <a href="{{route('editProfile')}}"><i class="zmdi zmdi-settings mr-3"></i>Setting Account</a>
                  
                </li>
                <li class="dropdown-divider"></li>
                <li class="dropdown-item">
                    <a href="{{route('login')}}"> <i class="zmdi zmdi-power mr-3"></i>Logout</a>
                 
                </li>
              </ul>
            </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>