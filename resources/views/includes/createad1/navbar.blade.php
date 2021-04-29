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
              <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login/Daftar</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>