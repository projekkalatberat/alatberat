 @extends('layouts.createad4')



 @section('title')
        Alat Berat - CreateAd4
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
  <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100% Lengkap</div>
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
       Ringkasan Tagihan Anda
        </div>

         <div class="col-lg-12">
          <div class="card rounded-0 checkout-detail">
            <div class="card-body">
              <h5 class="card-title">Informasi Biaya</h5>
              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Iklan Premium Termasuk : Grafik iklan ke email dan 4 photo</h6>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-success">IDR 1.500.000</h6>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Photo Tambahan</h6>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-success">0,-
</h6>
                </div>
              </div>


                <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Featured Listing	</h6>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-success">100.000
</h6>
                </div>
              </div>

              <hr>

              
              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Total Harga</h6>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-primary">IDR 1.600.000</h6>
                </div>
              </div>

            </div>
          </div>

         
        </div>



       </div>
    


        
     </div>


     <div class="row" style="margin-top: 50px;">
      <div class="col-8 col-md-8 col-sm-8 col-lg-8">
      <div class="alert alert-secondary" role="alert" style="width: 700px;">
Informasi Pengguna
        </div>

         <div class="col-lg-12">
          <div class="card rounded-0 checkout-detail">
            <div class="card-body">
              <h5 class="card-title">Akun Anda</h5>
              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Nama Anda: </h6>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-success">ichsan</h6>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Nama Belakang:</h6>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-success">dwihimawan
</h6>
                </div>
              </div>


                <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Alamat</h6>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-success">Jalan Mangga Besar XIII
</h6>
                </div>
              </div>


              
                <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Provinsi</h6>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-success">DKI JAKARTA  
</h6>
                </div>
              </div>


                 
                <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Kode Pos:</h6>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-success">10210  
</h6>
                </div>
              </div>

                 <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Nomor Telepon:</h6>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-success">089517322791  
</h6>
                </div>
              </div>

               <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Alamat Email:</h6>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-success">ichsandwihimawan@gmail.com 
</h6>
                </div>
              </div>

              
               <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Kirim email berita bulanan:</h6>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-success">Yes
</h6>
                </div>
              </div>


          

            </div>
          </div>

         
        </div>



       </div>
    


        
     </div>


     

     <div class="row" style="margin-top: 50px;">
      <div class="col-8 col-md-8 col-sm-8 col-lg-8">
      <div class="alert alert-secondary" role="alert" style="width: 700px;">
Pilih Metode Pembayaran
        </div>

    <div class="row">
      <div class="col-6" style="text-align: center;">
        <img src="/vendor/assets/img/logo_bank.png" alt="bca">
        <label for="bca"></label>
        <br>
          <input type="radio" id="bca" name="g2" value="bca">
      </div>

        <div class="col-6" style="text-align: center;">
        <img src="/vendor/assets//img/image 5.png" alt="">
          <label for="mandiri"></label>
        <br>
          <input type="radio" id="mandiri" name="g1" value="mandiri">
      </div>
    </div>


    <hr>

    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> Mohon klik untuk setuju pada alatberat.com
     <a href="" data-toggle="modal" >Syarat dan Ketentuan</a>


       <div class="row" style="margin-top: 50px;">
            <div class="col-md-6 col-sm-6">
              <a href="{{route('createad3')}}"> <button type="button" class="btn btn-warning btn-lg btn-block" style="width: 200px;"><i class="fas fa-chevron-left"></i> Kembali</button></a>
            </div>
            <div class="col-md-6 col-sm-6">
              <a href="{{route('finalcreatead')}}"> <button type="button" class="btn btn-primary btn-lg btn-block" style="width: 200px; margin-top: 1px;">Lanjutkan <i class="fas fa-chevron-right"></i></button></a>
            </div>
            
            

          </div>
          

       </div>
    


        
     </div>
  
</h5>


          
    </div>
     </div>

 
  


@endsection


