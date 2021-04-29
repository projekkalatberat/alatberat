 @extends('layouts.finalcreatead')



 @section('title')
        Alat Berat - finalCreatead
 @endsection
 

@section('content')
  

  <div class="container">

  
     <div id="wrapper">

 <div class="height-100v d-flex align-items-center justify-content-center">
	<div class="card card-authentication1 mb-0">
		<div class="card-body">
		 <div class="card-content p-2">
		    <p class="pb-2">Sukses <br>
Tagihan pembayaran telah dikirim ke alamat email anda. Ini membutuhkan beberapa menit.
Jika anda tidak dapat menenmukannya dalam Kotak masuk email anda, Mohon cek junk atau kotak spam email anda.
Untuk akses akun profil anda click Disini !</p>
		    <form>
			
			 </form>
		   </div>
		  </div>
		   <div class="card-footer text-center py-3 justify-content-center">
		    <p class="text-dark mb-0">Untuk akses akun profil anda klik <a href="{{('userprofile')}}"> Disini!</a></p>
		  </div>
		    <h5 class="text-dark mb-0 " style="margin-left: 700px;">Terima Kasih, ichsandwihimawan </h5>
	     </div>
	  </div>
    
     <!--Start Back To Top Button-->
   
	
	</div><!--wrapper-->
	

          
    </div>
     </div>


 
  


@endsection


