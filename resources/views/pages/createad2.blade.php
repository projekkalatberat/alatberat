 @extends('layouts.createad2')



 @section('title')
        Alat Berat - CreateAd2
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
  <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50% Lengkap</div>
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
           <h5>Tambah Photo</h5>
           <h6>Meningkatkan Iklan Anda dengan Detail Photo :</h6>
            <p style="color: orange; font-size: 20px;">Catatan :</p>
             
               <li>Mohon Unggah hanya tipe file.jpg atau .gif</li>
               <li>Gambar tidak lebih dari 2MB (2592x1920)</li>
               <li>Nama file tidak menggunakan karakter spesial, termasuk : %!@#&*^$, dll.</li>

           <br>
           <div class="container">
            <div class="row">
            <div class="col-sm-4 imgUp">
              <div class="imagePreview"></div>
          <label class="btn btn-primary">
           Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 500px;height: 0px;overflow: hidden;">
          </label>
            </div><!-- col-2 -->
            <!-- <i class="fa fa-plus imgAdd"></i> -->

            <div class="col-sm-4 imgUp">
              <div class="imagePreview"></div>
          <label class="btn btn-primary">
           Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 500px;height: 0px;overflow: hidden;">
          </label>
            </div><!-- col-2 -->
            <!-- <i class="fa fa-plus imgAdd"></i> -->

            <div class="col-sm-4 imgUp">
              <div class="imagePreview"></div>
          <label class="btn btn-primary">
           Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 500px;height: 0px;overflow: hidden;">
          </label>
          <br>
          <br>
            </div><!-- col-2 -->
            
            <!-- <i class="fa fa-plus imgAdd"></i> -->
           </div><!-- row -->
          </div><!-- container -->


            <div class="container">
            <div class="row">
            <div class="col-sm-4 imgUp">
              <div class="imagePreview"></div>
          <label class="btn btn-primary">
           Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 500px;height: 0px;overflow: hidden;">
          </label>
            </div><!-- col-2 -->
            <!-- <i class="fa fa-plus imgAdd"></i> -->

            <div class="col-sm-4 imgUp">
              <div class="imagePreview"></div>
          <label class="btn btn-primary">
           Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 500px;height: 0px;overflow: hidden;">
          </label>
            </div><!-- col-2 -->
            <!-- <i class="fa fa-plus imgAdd"></i> -->

            <div class="col-sm-4 imgUp">
              <div class="imagePreview"></div>
          <label class="btn btn-primary">
           Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 500px;height: 0px;overflow: hidden;">
          </label>
          <br>
          <br>
            </div><!-- col-2 -->

            
            
            <!-- <i class="fa fa-plus imgAdd"></i> -->
           </div><!-- row -->
          </div><!-- container -->

               <div class="container">
            <div class="row">
            <div class="col-sm-4 imgUp">
              <div class="imagePreview"></div>
          <label class="btn btn-primary">
           Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 500px;height: 0px;">
          </label>
            </div><!-- col-2 -->
            <!-- <i class="fa fa-plus imgAdd"></i> -->

            <div class="col-sm-4 imgUp">
              <div class="imagePreview"></div>
          <label class="btn btn-primary">
           Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 500px;height: 0px;overflow: hidden;">
          </label>
            </div><!-- col-2 -->
            <!-- <i class="fa fa-plus imgAdd"></i> -->

            <div class="col-sm-4 imgUp">
              <div class="imagePreview"></div>
          <label class="btn btn-primary">
           Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 500px;height: 0px;overflow: hidden;">
          </label>
          <br>
          <br>
            </div><!-- col-2 -->

            
            
            <!-- <i class="fa fa-plus imgAdd"></i> -->
           </div><!-- row -->
          </div><!-- container -->


    
          <div class="row" style="margin-top: 100px;">
            <div class="col-md-6 col-sm-6">
              <a href="{{route('createad1')}}"> <button type="button" class="btn btn-warning btn-lg btn-block" style="width: 200px;"><i class="fas fa-chevron-left"></i> Kembali</button></a>
            </div>
            <div class="col-md-6 col-sm-6">
              <a href="{{route('createad3')}}"> <button type="button" class="btn btn-primary btn-lg btn-block" style="width: 200px; margin-top: 1px;">Lanjutkan <i class="fas fa-chevron-right"></i></button></a>
            </div>
            
            

          </div>
          
          <br>

          

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


