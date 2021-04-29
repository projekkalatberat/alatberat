 @extends('layouts.editProfile')



 @section('title')
        Alat Berat - EditProfile
 @endsection
 
 
 
@section('content')

    

 

    <div class="container">
      <h1>Informasi Pengguna</h1>
      <hr />
    </div>
    <!-- form -->
    <div class="container">
      <form>
        <div class="form-group">
          <label for="username" class="form-label">Nama depan</label>
          <input
            type="text"
            id="username"
            class="form-control"
            name="username"
            placeholder="Nama Depan"
            required=""
          />
        </div>

        <div class="form-group">
          <label for="username" class="form-label">Nama Belakang</label>
          <input
            type="text"
            id="username"
            class="form-control"
            name="username"
            placeholder="Nama Belakang"
            required=""
          />
        </div>

        <div class="form-group">
          <label for="username" class="form-label">Alamat</label>
          <textarea
            class="form-control"
            id="exampleFormControlTextarea1"
            rows="3"
          ></textarea>
        </div>

        <div class="form-group">
          <label for="username" class="form-label">Kota</label>
          <input
            type="text"
            id="username"
            class="form-control"
            name="username"
            placeholder="Kota"
          />
        </div>

        <div class="form-group">
          <label for="username" class="form-label">Provinsi</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>

        <div class="form-group">
          <label for="username" class="form-label">Kode Pos</label>
          <input
            type="text"
            id="username"
            class="form-control"
            name="username"
            placeholder="Kota"
          />
        </div>

        <div class="form-group">
          <label for="username" class="form-label">No. Telepon</label>
          <input
            type="text"
            id="username"
            class="form-control"
            name="username"
            placeholder="No. Telepon"
          />
        </div>

        <div class="form-group">
          <label for="password" class="form-label">Password</label>
          <input
            type="password"
            id="password"
            class="form-control"
            name="password"
            placeholder="**************"
            required=""
          />
        </div>

        <div class="form-group">
          <label for="password" class="form-label">Konfirmasi Password</label>
          <input
            type="password"
            id="password"
            class="form-control"
            name="password"
            placeholder="**************"
            required=""
          />
        </div>
        <div>
          <!-- Button -->
          <button type="submit" class="btn btn-success btn-block">Ubah</button>
        </div>
      </form>
    </div>

@endsection


