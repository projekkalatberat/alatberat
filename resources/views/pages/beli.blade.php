 @extends('layouts.beli')



 @section('title')
        Alat Berat - Beli
 @endsection
 
 
 
@section('content')
  <!-- Jumbotron -->
      <div class="jumbotron text-center text-white" style="background-color:#f89f3c;">
        <div class="container">
           <h1 class="font-weight-bold">AlatBerat Jual</h1>
           <p>Temukan semua kategori alatberat</p>
        </div>
      </div>

      <div class="container">
        <form>
            <div class="row">
                <div class="col-md-3">
                        <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search... ">
                        </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>Kategori</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>Sub Kategori</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-light text-white" type="submit" style="background-color:#f89f3c;">Mencari</button>
                </div>
            </div>    
        <form>
      </div>

      <!-- Isi -->
      <div class="container">
          <div class="row mt-3 ">
            <div class="col-md-4">
                  <h5 class="font-weight-bold">Filter</h5>
            </div>
            <div class="col-md-4">
                <h5>Menampilan hasil dari <strong>"ABC"</strong></h5>
            </div>
          </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="form-group">
                    <p>Temukan</p>
                    <input type="email" class="form-control mt-n2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search...">
                    <div class="form-group mt-3">
                        <p>Kategori</p>
                        <select class="form-control mt-n2" id="exampleFormControlSelect1">
                        <option>Kategori</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <p>Sub Kategori</p>
                        <select class="form-control mt-n2" id="exampleFormControlSelect1">
                        <option>Sub Kategori</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <p>Tempat</p>
                        <select class="form-control mt-n2" id="exampleFormControlSelect1">
                        <option>Semua Lokasi</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <p>Merek</p>
                        <select class="form-control mt-n2" id="exampleFormControlSelect1">
                        <option>Pilih Merek</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>
                    <p>Harga (Rupiah)</p>
                    <div class="row">
                        <div class="col-md-6">
                            <select class="form-control mt-n2" id="exampleFormControlSelect1">
                                <option>Min</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                </select>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control mt-n2" id="exampleFormControlSelect1">
                                <option>Max</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                </select>
                        </div>
                    </div>
                    <p class="mt-2">Tahun</p>
                    <div class="row">
                        <div class="col-md-6">
                            <select class="form-control mt-n2" id="exampleFormControlSelect1">
                                <option>Semua tahun</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                </select>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control mt-n2" id="exampleFormControlSelect1">
                                <option>Semua tahun</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                </select>
                        </div>
                    </div>
                    <p class="mt-2">Odometer</p>
                    <div class="row">
                        <div class="col-md-6">
                            <select class="form-control mt-n2" id="exampleFormControlSelect1">
                                <option>Semua Odometer</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                </select>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control mt-n2" id="exampleFormControlSelect1">
                                <option>Semua Odometer</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                </select>
                        </div>
                    </div>
                    <p class="mt-2">Hour Meter</p>
                    <div class="row">
                        <div class="col-md-6">
                            <select class="form-control mt-n2" id="exampleFormControlSelect1">
                                <option>Semua Hourmeter</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                </select>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control mt-n2" id="exampleFormControlSelect1">
                                <option>Semua Hourmeter</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                </select>
                        </div>
                    </div>
                    <button class="btn btn-light text-white mt-4" type="submit" style="background-color:#f89f3c;">Mencari</button>
                  </div>
            </div>
            <!-- Isi semua -->
                 <div class="col-md-9">
              
              <img src="/vendor/assets/img/banner.png" 
              alt="">
               <button class="btn btn-primary" type="button" style="margin-top: 50px;">Terbaru</button>

                   <button class="btn btn-primary" type="button" style="margin-top: 50px;margin-left: 15px ;">Terpopuler</button>


                   <nav aria-label="Page navigation example">
  <ul class="pagination" style="margin-top: -45px !important; margin-bottom: 20px !important; margin-left: 270px !important;">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
     <li class="page-item"><a class="page-link" href="#">4</a></li>
      <li class="page-item"><a class="page-link" href="#">5</a></li>
             <li class="page-item"><a class="page-link" href="#">6</a></li>
             <li class="page-item"><a class="page-link" href="#">7</a></li>
             <li class="page-item"><a class="page-link" href="#">8</a></li>
             <li class="page-item"><a class="page-link" href="#">9</a></li>
             <li class="page-item"><a class="page-link" href="#">10</a></li>
             <li class="page-item"><a class="page-link" href="#">...</a></li>
             <li class="page-item"><a class="page-link" href="#">100</a></li>
                   <li class="page-item"><a class="page-link" href="#">101</a></li>
       
       
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
                
<div class="container buy">
  <div class="row no-gutters">
    <div class="col-md-3">
      <div class="thumb">
        <a href="{{route('detailbarang')}}">
      <img src="./vendor/assets/img/dummy1.jpg" width="180px" height="" alt="..."></a>
    </div>
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <a href=""><h5 class="card-title" style="color: black;">
          WHEEL LOADER LONKING TANGERANG</h5></a>
          <h4 class="title" style="color:#888; font-size: 25px;"><small class="title"><i class="fa fa-caret-right">Dozers/Wheels</i></small></h4>
        <p class="card-text">Kami PT. AKBARINDO JAYA SENTOSA Jual Wheelloader Murah, Jual Wheel Loader HELI Murah, Jual Wheel Loa.. <a href="#">Read More..</a></p>
     </div>
    </div>
    <div class="row">
    <div class="col-sm-3 col-md-3">
      <p class="text-left" style="color: blue;">Diposting : 20/03/2021</p>
    </div>
    <div class="col-sm-3 col-md-3">
     <i class="fas fa-map-marker-alt" style="color: red;"> Banten</i>
    </div>
    <div class="col-sm-3 col-md-3">
      <i class="fas fa-eye"> Dilihat 112</i>
    </div>
    <div class="col-sm-3 col-md-3">
      <div class="brand-price"><span>Rp.380.000.000 Nego</span></div><br>
      </div>
    </div>
  </div>

 <hr class="buy">

  <div class="row no-gutters">
    <div class="col-md-3">
      <div class="thumb">
        <a href="">
      <img src="./vendor/assets/img/dummy2.jpg" width="180px" height="" alt="..."></a>
    </div>
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <a href=""><h5 class="card-title" style="color:black">
          Wheel loader lonking murah surabaya gresik</h5></a>
          <h4 class="title" style="color:#888; font-size: 25px;"><small class="title"><i class="fa fa-caret-right">Loaders/Wheels Loader</i></small></h4>
        <p class="card-text">Deskripsi: Kami menjual WHEEL LOADER LONKING MAGELANG SLEMAN BANTUL JOGJAKARTA adapun spesifikas...<a href="#">Read More..</a></p>
     </div>
    </div>
    <div class="row">
    <div class="col-sm-3 col-md-3">
      <p class="text-left" style="color: blue;">Diposting : 20/03/2021</p>
    </div>
    <div class="col-sm-3 col-md-3">
     <i class="fas fa-map-marker-alt" style="color: red;"> Jawa Timur</i>
    </div>
    <div class="col-sm-3 col-md-3">
      <i class="fas fa-eye"> Dilihat 200</i>
    </div>
    <div class="col-sm-3 col-md-3">
      <div class="brand-price"><span>Rp.580.000.000 Nego</span></div><br>
      </div>
    </div>
  </div>

 <hr class="buy">

  <div class="row no-gutters">
    <div class="col-md-3">
      <div class="thumb">
        <a href="">
      <img src="./vendor/assets/img/dummy3.jpg" width="180px" height="" alt="..."></a>
    </div>
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <a href=""><h5 class="card-title" style="color:black">
         Wheel Loader lonking Indonesia</h5></a>
          <h4 class="title" style="color:#888; font-size: 25px;"><small class="title"><i class="fa fa-caret-right">Loaders/Wheels Loader</i></small></h4>
        <p class="card-text">PT REZQINDO ADHI PERKASA Heavy Equipment & Material Handling Sales - Rental - Spareparts - Service...<a href="#">Read More..</a></p>
     </div>
    </div>
    <div class="row">
    <div class="col-sm-3 col-md-3">
      <p class="text-left" style="color: blue;">Diposting : 20/03/2021</p>
    </div>
    <div class="col-sm-3 col-md-3">
     <i class="fas fa-map-marker-alt" style="color: red;"> Jawa Timur</i>
    </div>
    <div class="col-sm-3 col-md-3">
      <i class="fas fa-eye"> Dilihat 260</i>
    </div>
    <div class="col-sm-3 col-md-3">
      <div class="brand-price"><span>Rp.350.000.000 Nego</span></div><br>
      </div>
    </div>
  </div>

 <hr class="buy">

  <div class="row no-gutters">
    <div class="col-md-3">
      <div class="thumb">
        <a href="">
      <img src="./vendor/assets/img/dummy4.jpg" width="180px" height="120px" alt="..."></a>
    </div>
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <a href=""><h5 class="card-title" style="color:black">
          Jasa Sewa Alat Berat</h5></a>
          <h4 class="title" style="color:#888; font-size: 25px;"><small class="title"><i class="fa fa-caret-right">Cranes & Lifting / Crane & Lifting Parts</i></small></h4>
        <p class="card-text">CRANE 10 - 15 TON RP. 145.000,-/ JAM CRANE 25 TON RP. 220.000,-/ J....<a href="#">Read More..</a></p>
     </div>
    </div>
    <div class="row">
    <div class="col-sm-3 col-md-3">
      <p class="text-left" style="color: blue;">Diposting : 20/03/2021</p>
    </div>
    <div class="col-sm-3 col-md-3">
     <i class="fas fa-map-marker-alt" style="color: red;"> Jawa Timur</i>
    </div>
    <div class="col-sm-3 col-md-3">
      <i class="fas fa-eye"> Dilihat 260</i>
    </div>
    <div class="col-sm-3 col-md-3">
      <div class="brand-price"><span>Rp.145.000.000 Nego</span></div><br>
      </div>
    </div>
  </div>

 <hr class="buy">

  <div class="row no-gutters">
    <div class="col-md-3">
      <div class="thumb">
        <a href="">
      <img src="./vendor/assets/img/dummy5.jpg" width="180px" height="120px" alt="..."></a>
    </div>
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <a href=""><h5 class="card-title" style="color:black">      
          Wheel loader lonking murah semarang jepara</h5></a>
          <h4 class="title" style="color:#888; font-size: 25px;"><small class="title"><i class="fa fa-caret-right">Loaders / Wheel Loader</i></small></h4>
        <p class="card-text">Deskripsi: Kami menjual WHEEL LOADER LONKING MAGELANG SLEMAN BANTUL JOGJAKARTA adapun spesifikas... <a href="#">Read More..</a></p>
     </div>
    </div>
    <div class="row">
    <div class="col-sm-3 col-md-3">
      <p class="text-left" style="color: blue;">Diposting : 20/03/2021</p>
    </div>
    <div class="col-sm-3 col-md-3">
     <i class="fas fa-map-marker-alt" style="color: red;"> Jawa Timur</i>
    </div>
    <div class="col-sm-3 col-md-3">
      <i class="fas fa-eye"> Dilihat 260</i>
    </div>
    <div class="col-sm-3 col-md-3">
      <div class="brand-price"><span>Rp.380.000.000 Nego</span></div><br>
      </div>
    </div>
  </div>

 <hr class="buy">

  <div class="row no-gutters">
    <div class="col-md-3">
      <div class="thumb">
        <a href="">
      <img src="./vendor/assets/img/dummy6.jpg" width="180px" height="120px" alt="..."></a>
    </div>
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <a href=""><h5 class="card-title" style="color:black">      
        Wheel loader lonking murah klaten purwakerto</h5></a>
          <h4 class="title" style="color:#888; font-size: 25px;"><small class="title"><i class="fa fa-caret-right">Loaders / Wheel Loader</i></small></h4>
        <p class="card-text">Deskripsi: Kami menjual WHEEL LOADER LONKING MAGELANG SLEMAN BANTUL JOGJAKARTA adapun spesifikas...  <a href="#">Read More..</a></p>
     </div>
    </div>
    <div class="row">
    <div class="col-sm-3 col-md-3">
      <p class="text-left" style="color: blue;">Diposting : 20/03/2021</p>
    </div>
    <div class="col-sm-3 col-md-3">
     <i class="fas fa-map-marker-alt" style="color: red;"> Jawa Timur</i>
    </div>
    <div class="col-sm-3 col-md-3">
      <i class="fas fa-eye"> Dilihat 211</i>
    </div>
    <div class="col-sm-3 col-md-3">
      <div class="brand-price"><span>Rp.380.000.000 Nego</span></div><br>
      </div>
    </div>
  </div>

  <hr class="buy">

 <div class="row no-gutters">
  <div class="col-md-3">
    <div class="thumb">
      <a href="{{route('Detail')}}">
    <img src="./vendor/assets/img/dummy7.jpg" width="180px" height="120px" alt="..."></a>
  </div>
  </div>
  <div class="col-md-9">
    <div class="card-body">
      <a href="{{route('Detail')}}"><h5 class="card-title" style="color:black">      
        Wheel loader lonking murah madiun ponorogo</h5></a>
        <h4 class="title" style="color:#888; font-size: 25px;"><small class="title"><i class="fa fa-caret-right">Loaders / Wheel Loader</i></small></h4>
      <p class="card-text">Deskripsi: Kami menjual WHEEL LOADER LONKING MAGELANG SLEMAN BANTUL JOGJAKARTA adapun spesifikas...  <a href="#">Read More..</a></p>
   </div>
  </div>
  <div class="row">
  <div class="col-sm-3 col-md-3">
    <p class="text-left" style="color: blue;">Diposting : 20/03/2021</p>
  </div>
  <div class="col-sm-3 col-md-3">
   <i class="fas fa-map-marker-alt" style="color: red;"> Jawa Timur</i>
  </div>
  <div class="col-sm-3 col-md-3">
    <i class="fas fa-eye"> Dilihat 211</i>
  </div>
  <div class="col-sm-3 col-md-3">
    <div class="brand-price"><span>Rp.380.000.000 Nego</span></div><br>
    </div>
  </div>
</div>

<hr class="buy">

<div class="row no-gutters">
  <div class="col-md-3">
    <div class="thumb">
      <a href="{{route('Detail')}}">
    <img src="./vendor/assets/img/dummy8.jpg" width="180px" height="120px" alt="..."></a>
  </div>
  </div>
  <div class="col-md-9">
    <div class="card-body">
      <a href="{{route('Detail')}}"><h5 class="card-title" style="color:black">      
        Wheel loader lonking murah banjarmasin</h5></a>
        <h4 class="title" style="color:#888; font-size: 25px;"><small class="title"><i class="fa fa-caret-right">Loaders / Wheel Loader</i></small></h4>
      <p class="card-text">Deskripsi: Kami menjual WHEEL LOADER LONKING MAGELANG SLEMAN BANTUL JOGJAKARTA adapun spesifikas...  <a href="#">Read More..</a></p>
   </div>
  </div>
  <div class="row">
  <div class="col-sm-3 col-md-3">
    <p class="text-left" style="color: blue;">Diposting : 20/03/2021</p>
  </div>
  <div class="col-sm-3 col-md-3">
   <i class="fas fa-map-marker-alt" style="color: red;"> Jawa Timur</i>
  </div>
  <div class="col-sm-3 col-md-3">
    <i class="fas fa-eye"> Dilihat 211</i>
  </div>
  <div class="col-sm-3 col-md-3">
    <div class="brand-price"><span>Rp.380.000.000 Nego</span></div><br>
    </div>
  </div>
</div>

<hr class="buy">

<div class="row no-gutters">
  <div class="col-md-3">
    <div class="thumb">
      <a href="{{route('Detail')}}">
    <img src="./vendor/assets/img/dummy9.jpg" width="180px" height="120px" alt="..."></a>
  </div>
  </div>
  <div class="col-md-9">
    <div class="card-body">
      <a href="{{route('Detail')}}"><h5 class="card-title" style="color:black">      
        Wheel loader lonking murah nganjuk caruban</h5></a>
        <h4 class="title" style="color:#888; font-size: 25px;"><small class="title"><i class="fa fa-caret-right">Loaders / Wheel Loader</i></small></h4>
      <p class="card-text">Deskripsi: Kami menjual WHEEL LOADER LONKING MAGELANG SLEMAN BANTUL JOGJAKARTA adapun spesifikas...  <a href="#">Read More..</a></p>
   </div>
  </div>
  <div class="row">
  <div class="col-sm-3 col-md-3">
    <p class="text-left" style="color: blue;">Diposting : 20/03/2021</p>
  </div>
  <div class="col-sm-3 col-md-3">
   <i class="fas fa-map-marker-alt" style="color: red;"> Jawa Timur</i>
  </div>
  <div class="col-sm-3 col-md-3">
    <i class="fas fa-eye"> Dilihat 211</i>
  </div>
  <div class="col-sm-3 col-md-3">
    <div class="brand-price"><span>Rp.380.000.000 Nego</span></div><br>
    </div>
  </div>
</div>

<hr class="buy">

<div class="row no-gutters">
  <div class="col-md-3">
    <div class="thumb">
      <a href="{{route('Detail')}}">
    <img src="./vendor/assets/img/dummy10.jpg" width="180px" height="120px" alt="..."></a>
  </div>
  </div>
  <div class="col-md-9">
    <div class="card-body">
      <a href="{{route('Detail')}}"><h5 class="card-title" style="color:black">      
        Wheel loader lonking murah lamongan tuban</h5></a>
        <h4 class="title" style="color:#888; font-size: 25px;"><small class="title"><i class="fa fa-caret-right">Loaders / Wheel Loader</i></small></h4>
      <p class="card-text">Deskripsi: Kami menjual WHEEL LOADER LONKING MAGELANG SLEMAN BANTUL JOGJAKARTA adapun spesifikas...  <a href="#">Read More..</a></p>
   </div>
  </div>
  <div class="row">
  <div class="col-sm-3 col-md-3">
    <p class="text-left" style="color: blue;">Diposting : 20/03/2021</p>
  </div>
  <div class="col-sm-3 col-md-3">
   <i class="fas fa-map-marker-alt" style="color: red;"> Jawa Timur</i>
  </div>
  <div class="col-sm-3 col-md-3">
    <i class="fas fa-eye"> Dilihat 211</i>
  </div>
  <div class="col-sm-3 col-md-3">
    <div class="brand-price"><span>Rp.380.000.000 Nego</span></div><br>
    </div>
  </div>
</div>

<hr class="buy">

</div>
<br>
<br>
<br>

<div class="row">
  <div class="col-md-12">
<nav aria-label="Page navigation example">
  <ul class="pagination" style="margin-top: -45px !important; margin-bottom: 20px !important; margin-left: 10px !important;">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
     <li class="page-item"><a class="page-link" href="#">4</a></li>
      <li class="page-item"><a class="page-link" href="#">5</a></li>
             <li class="page-item"><a class="page-link" href="#">6</a></li>
             <li class="page-item"><a class="page-link" href="#">7</a></li>
             <li class="page-item"><a class="page-link" href="#">8</a></li>
             <li class="page-item"><a class="page-link" href="#">9</a></li>
             <li class="page-item"><a class="page-link" href="#">10</a></li>
             <li class="page-item"><a class="page-link" href="#">...</a></li>
             <li class="page-item"><a class="page-link" href="#">100</a></li>
                   <li class="page-item"><a class="page-link" href="#">101</a></li>
       
       
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div>
</div>
    </div>
            </div>
        </div>
      </div>
      
@endsection


