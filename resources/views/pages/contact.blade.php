 @extends('layouts.contact')



 @section('title')
        Alat Berat
 @endsection
 
 
 
@section('content')
   <!-- Jumbotron -->
    <div class="jumbotron text-center bg-white text-dark">
      <div class="container">
        <div data-aos="zoom-out-right">
          <p class="_hd font-weight-bold">Contact Us</p>
          <h1 class="font-weight-bold">Get In touch!</h1>
        </div>
        <div data-aos="zoom-out-left">
          <p class="mt-3 _za font-weight-bold">
            Contact us for a quote, help or to join the team.
          </p>
        </div>
      </div>
    </div>

    <div class="container">
      <div
        data-aos="fade-right"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine"
      >
        <div class="row">
          <div class="col-md-6">
            <img src="vendor/assets/img/2.png" class="img-fluid" alt="..." />
          </div>
          <div class="col-md-6">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input
                  type="text"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                  placeholder="Nama anda..."
                />
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input
                  type="Email"
                  class="form-control"
                  id="exampleInputPassword1"
                  placeholder="Email anda..."
                />
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Isi pesan</label>
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                  placeholder="Isi pesan...."
                ></textarea>
              </div>
              <button
                type="submit"
                class="btn btn-light text-white"
                style="background-color: #f89f3c"
              >
                Kirim
              </button>
            </form>
          </div>
        </div>
      </div>
    </div

@endsection


