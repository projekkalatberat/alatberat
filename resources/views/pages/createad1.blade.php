 @extends('layouts.createad1')



 @section('title')
        Alat Berat - CreateAd1
 @endsection
 

@section('content')
    <div class="container">


      <div class="formwiiz" >
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
  <div class="progress-bar  bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25% Lengkap</div>
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
      <div class="col-md-8">
      <div class="alert alert-secondary" role="alert" style="width: 700px;">
        Beritahu kami tentang Alat Berat Anda
       </div>

       <h5>Informasi Kendaraan</h5>
       
       <br>

       <div class="row">
        <div class="col-md-3">
          <strong>Judul iklan :</strong>
        </div>
       <div class="col-md-9">
        <form>
          <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Contoh: Dozer CAT D10R ">
          </div>
        </form>
      </div>

      
      <div class="col-md-3">
        <strong>Kategori :</strong>
      </div>
     <div class="col-md-9">
      <form>
        <div class="form-group">
          <select class="form-control">
            <option>Pilih Kategori</option>
          </select>
        </div>
      </form>
    </div>

    
    <div class="col-md-3">
      <strong>Sub Kategori :</strong>
    </div>
   <div class="col-md-9">
    <form>
      <div class="form-group">
        <select class="form-control">
          <option>Pilih Kategori</option>
        </select>
      </div>
    </form>
  </div>

   
  <div class="col-md-3">
    <strong>Merk :</strong>
  </div>
 <div class="col-md-9">
  <form>
    <div class="form-group">
      <select class="form-control">
        <option>Pilih Merk</option>
      </select>
    </div>
  </form>
</div>



    
 

<div class="col-md-3">
  <strong>Model :</strong>
</div>
<div class="col-md-9">
<form>
  <div class="form-group">
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Model">
  </div>
</form>
</div>

<div class="col-md-3">
  <strong>Kondisi barang :</strong>
</div>
<div class="col-md-9">
<form>
  <div class="form-group">
    <select class="form-control">
      <option>Pilih Kondisi</option>
    </select>
  </div>
</form>
</div>

<div class="col-md-3">
  <strong>Tahun :</strong>
</div>
<div class="col-md-9">
<form>
  <div class="form-group">
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Tahun">
  </div>
</form>
</div>

<div class="col-md-3">
  <strong>Hours :</strong>
</div>
<div class="col-md-9">
<form>
  <div class="form-group">
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Hours">
  </div>
</form>
</div>

<div class="col-md-3">
  <strong>Odometer :</strong>
</div>
<div class="col-md-9">
<form>
  <div class="form-group">
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Odometer">
  </div>
</form>
</div>

<div class="col-md-3">
  <strong>Fuel :</strong>
</div>
<div class="col-md-9">
<form>
  <div class="form-group">
    <select class="form-control">
      <option>Pilih Bahan Bakar</option>
    </select>
  </div>
</form>
</div>

<div class="col-md-3">
  <strong>Harga :</strong>
</div>
<div class="col-md-9">
<form>
  <div class="form-group">
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="IDR. Harga">
  </div>
  <br>
</form>
</div>


  </div>
  <hr>
  <h5>Informasi Tambahan Iklan</h5>
  
  <div class="row">
  <div class="col-md-3">
    <strong>Produsen Mesin :</strong>
  </div>
  <div class="col-md-9">
  <form>
    <div class="form-group">
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Produsen Mesin">
    </div>
  </form>
  </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      <strong>Model Mesin :</strong>
    </div>
    <div class="col-md-9">
    <form>
      <div class="form-group">
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Model Mesin">
      </div>
    </form>
    </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        <strong>Horse Power :</strong>
      </div>
      <div class="col-md-9">
      <form>
        <div class="form-group">
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Horse Power">
        </div>
      </form>
      </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <strong>Pembuat Transmisi :</strong>
        </div>
        <div class="col-md-9">
        <form>
          <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Pembuat Transmisi">
          </div>
        </form>
        </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <strong>Kecepatan Transmisi :</strong>
          </div>
          <div class="col-md-9">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Kecepatan Transmisi">
            </div>
          </form>
          </div>
          </div>

          <hr>
          <h5>Deskripsi dan Kondisi Iklan</h5>
          <br>
          <div class="row">
            <div class="col-md-3">
              <strong>Deskripsi Untuk Iklan Anda :</strong>
            </div>
            <div class="col-md-9">
            <form>
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Deskripsi Untuk Iklan Anda</textarea>
              </div>
            </form>
            </div>
            </div>
          
            <hr>
            <h5>Informasi Kontak</h5>
            <br>          
           <div class="row">
          <div class="col-md-3">
            <strong>Nomor Telepon :</strong>
          </div>
          <div class="col-md-9">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nomor Telepon">
            </div>
          </form>
          </div>
          </div>
          
          <hr>
          <h5>Lokasi Kendaraan</h5>
          <br>
          <div class="row">
          <div class="col-md-3">
            <strong>Provinsi :</strong>
          </div>
          <div class="col-md-9">
          <form>
            <div class="form-group">
              <select class="form-control">
                <option>Pilih Provinsi</option>
              </select>
            </div>
          </form>
          </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <strong>Kode Pos :</strong>
            </div>
            <div class="col-md-9">
            <form>
              <div class="form-group">
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Kode Pos">
              </div>
            </form>
            </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <strong>Alamat :</strong>
              </div>
              <div class="col-md-9">
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Alamat">
                </div>
              </form>
              </div>
              </div>

              <div class="row">
                <div class="col-md-3">
                  <strong>Kota :</strong>
                </div>
                <div class="col-md-9">
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Kota">
                  </div>
                </form>
                </div>
                </div>
                <br>

                

               <a href="{{route('createad2')}}"> <button type="button" class="btn btn-primary btn-lg btn-block" style="width: 200px; margin-left: 189x;">Lanjutkan</button></a>
      
 </div>
 



      <div class="col-md-4">
        <div class="card" style="width: 300px;">
            <div class="card-header">
             <strong>  Selamat datang, Ackerman</strong>
            </div>
            <div class="card-body">
              <h5 class="card-title">Ringkasan Tagihan :</h5>
              <h6 class="card-text">Iklan Premium : <span>IDR 1.500.000</span></h6>
              <br>
              <h6 class="card-text">Photo Tambahan : <span>IDR 0,-</span></h6>
              <br>
              <h6 class="card-text">Feature Ad : <span>IDR 0,-</span></h6>
              <div class="card-footer" style="height: 12px;">
             <strong>Total : <span>	IDR 1.500.000</span></strong>
              </div>
            </div>
          </div>
      </div>
     </div>
     </div>


 

@endsection


