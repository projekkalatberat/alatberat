 @extends('layouts.createad3')



 @section('title')
        Alat Berat - CreateAd3
 @endsection
 

@section('content')
  

  <div class="container">

     <div class="formwiiz">
        <div class="row">
          <div class="col-12">
    <div class="modal" id="registrationModal" style="position: relative; display: block; width: 900px;">
	<div class="modal-dialog modal-lg" role="document">
		<div id="bs4wizard" class="modal-content">
			<div class="box-head box-head-accent-2" style="position: absolute;"></div>
			<div class="modal-header">
				<nav id="wizardNav" class="nav" style="display: flex;">
					<a class="nav-link active" href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
          <div class="text text-dark">
            
          Create Your Ad
          </div>
           

					</a>
				<a class="nav-link active" href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
          <div class="text text-dark">
            
          Add Photo
          </div>
           

					</a>

          
						<a class="nav-link active" href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
          <div class="text text-dark">
            
          Review Your add
          </div>
           

					</a>

          	<a class="nav-link active" href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Step 4" style="margin-top: 10px;">
          <div class="text text-dark">
            
          Check Out And Finish
          </div>
           

					</a>

          	
				</nav>
			
			</div>
			<div class="modal-body">
				<div id="wizardTab" class="tab-content">
					<div class="tab-pane fade show active" role="tabpanel" id="step1">
			<div class="progress">
  <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75% Lengkap</div>
</div>
					</div>
		
				</div>
			</div>
		
		</div>
	</div>
</div>
          </div>
        </div>
    
      </div>
    <div class="row">
      <div class="col-8 col-md-8 col-sm-8 col-lg-8">
      <div class="alert alert-secondary" role="alert" style="width: 700px;">
        Meninjau Iklan Anda
        </div>
        <h5>Meninjau Iklan Anda</h5>
        <p>Mohon Periksa kembali untuk memastikan informasi berikut adalah tepat!</p>
        <a href="createAd1.html">Ubah detail iklan</a> |  <a href="createAd2.html">Ubah Photo</a>
        <br>
        <br>
        <div class="card" style="width: 700px; height: 510px;">
            <div class="card-header" style="background-color: #aaa;">
             <strong>Sell - Dozer Cat  10r</strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="card-body">

                      <figure class="figure">
  <img src="/vendor/assets/img/img/logo.png" style="display: flex;" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption"><img src="/vendor/assets/img/logo.jpg" style="width: 50px;" alt="oke"></figcaption>
    <figcaption class="figure-caption" style="position: relative; left: 60px; top: -37px;" ><img src="/vendor/assets/img/logo.jpg" style="width: 50px;" alt="oke"></figcaption>
     <figcaption class="figure-caption" style="position: relative; left: 120px; top: -75px;" ><img src="/vendor/assets/img/logo.jpg" style="width: 50px;" alt="oke"></figcaption>
</figure>
                    </div>

              <div class="card-body">
                  <p>Informasi Kontak</p>
                  <ul>
                    <img src="/vendor/assets/img/img/logo.png" style="margin-bottom: 50px;" alt=""> <br>
                    <i class="fas fa-user-alt"> <a href="#">Ackerman</a></i><br>
                    <i class="fas fa-phone-alt"> <a href="#" id="tel">Lihat Nomor Telepon</a></i><br>
                    <i class="fas fa-envelope"> <a href="#" id="email">Lihat Email</a></i>
                  </ul>
              </div>
              
              <div class="card-footer" style="width: 100%;">

                  <div class="form-group" style="margin-top: -40px;">
                    <label for="exampleFormControlTextarea1">Deskripsi Produk</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="width: 500px; height: px;"></textarea>
                  </div>
              </div>
            </div>
            </div>
          </div>
          <br>
          <br>
          <br>


       </div>
       <div class="col-md-4 col-sm-4 col-lg-4">
        <div class="card" style="width: 300px; height: 300px; margin-left: 100px;">
            <div class="card-header" style="background-color: orange;">
             <strong>Peta</strong>
            </div>
            <div class="card-body">
              <h6 class="card-title">Lokasi Barang (Lokasi ini hanya perkiraan) :</h6>
            </div>
          </div>
      </div>


        <ul style="list-style: none; background: #e4e4e4; margin-top: 40px;">
          <li><span style="background-color: yellow; width: 100%;">Kondisi Barang:</span>   <span style="margin-left: 150px; background-color: #f89f3c; width: 100%;">Cukup Baik</span></li>
          <li><span  style="background-color: yellow; width: 100%;">Merk:</span>   <span style="margin-left: 227px; background-color: #f89f3c; width: 100%;">Corbuzier</span></li>
          <li><span style="background: yellow;">Model:</span>   <span style="margin-left: 220px; background-color: #f89f3c; width: 100%;">XM104SA</span></li>
          <li><span style="background-color: yellow;">Tahun:</span>   <span style="margin-left: 220px; background-color: #f89f3c;">2020</span></li>
          <li><span style="background-color: yellow;">Hours:</span>   <span style="margin-left: 220px; background-color: #f89f3c;">Cukup Baik</span></li>
          <li><span style="background-color: yellow;">Odo Meter:</span>   <span style="margin-left: 187px;background-color: #f89f3c;">Cukup Baik</span></li>
          <li><span style="background-color: yellow;">Fuel:</span>   <span style="margin-left: 229px; background-color: #f89f3c;">Cukup Baik</span></li>
          <li><span style="background-color: yellow;">Horse Powe:</span>   <span style="margin-left: 174px;background-color: #f89f3c;">Cukup Baik</span></li>
          <li><span style="background-color: yellow;">Produsen Mesin:</span>   <span style="margin-left: 145px;background-color: #f89f3c;">Cukup Baik</span></li>
          <li><span style="background-color: yellow;">Model Mesin:</span>   <span style="margin-left: 169px;background-color: #f89f3c;">Cukup Baik</span></li>
          <li><span style="background-color: yellow;">Pembuat Transmisi:</span>   <span style="margin-left: 123px; background-color: #f89f3c;">Cukup Baik</span></li>
          <li><span style="background-color: yellow;">Kecepatan Transimisi</span>   <span style="margin-left: 111px; background-color: #f89f3c;">Cukup Baik</span></li>
        </ul>
     </div>
     <a href=""><h3>Hubungi Penjual</h3></a>


    <h5>Utamakan Iklan Anda Dalam Website kami
</h5>

<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> Daftar Unggulan di pencarian(+ IDR 100.000) <a href="" data-toggle="modal" data-target="#exampleModal">Klik Disini</a>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ini adalah bagaimana iklan anda di tampilkan pada Feature Listing Kami</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="card" style="width: 700px; height: 510px;">
            <div class="card-header" style="background-color: #aaa;">
             <strong>Sell - Dozer Cat  10r</strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="card-body">

                      <figure class="figure">
  <img src="/vendor/assets/img/img/logo.png" style="display: flex;" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption"><a href="" style="color: black;">Cari: ewqeqeqeqeqq</a></figcaption>
  <figcaption class="figure-caption"><a href="" style="color: black;">Deskripsi: ewqeqeqeqeqq</a></figcaption>
   <figcaption class="figure-caption"><p style="font-size: 13px;">Diposting: Today Kepulauan Riau</p></figcaption>
   <figcaption class="figure-caption"><p>Merk : John Deere <br>
Years : 201 <br>
HP : ramadhan	Odo Mtr : 1312 <br>
Hours : 231231 <br>
Fuel :G</p></figcaption>
</figure>
                    </div>

              <div class="card-body">
                  <p>Informasi Kontak</p>
                  <ul>
                    <img src="/vendor/assets/img/img/logo.png" style="margin-bottom: 50px;" alt=""> <br>
                    <i class="fas fa-user-alt"> <a href="#">Ackerman</a></i><br>
                    <i class="fas fa-phone-alt"> <a href="#" id="tel1">Lihat Nomor Telepon</a></i><br>
                    <i class="fas fa-envelope"> <a href="#" id="email1">Lihat Email</a></i>
                  </ul>
              </div>
              
              
            </div>
            </div>
          </div>
      </div>

    </div>
  </div>
</div>

  <div class="row" style="margin-top: 50px;">
            <div class="col-md-6 col-sm-6">
              <a href="{{route('createad2')}}"> <button type="button" class="btn btn-warning btn-lg btn-block" style="width: 200px;"><i class="fas fa-chevron-left"></i> Kembali</button></a>
            </div>
            <div class="col-md-6 col-sm-6">
              <a href="{{route('createad4')}}"> <button type="button" class="btn btn-primary btn-lg btn-block" style="width: 200px; margin-top: 1px;">Lanjutkan <i class="fas fa-chevron-right"></i></button></a>
            </div>
            
            

          </div>
          
    </div>
     </div>
 
  


@endsection


