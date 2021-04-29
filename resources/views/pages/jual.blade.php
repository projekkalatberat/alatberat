 @extends('layouts.jual')



 @section('title')
        Alat Berat - Jual
 @endsection
 
 
 
@section('content')
 <!-- Jumbotron -->
   <div class="container fitur" >
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="pricing-table">
                    <div class="pricing-header ">
                        <h3>Standard</h3>
                    </div>

                    <div class="pricingContent">
                        <div class="price-value">
                            <span class="amount">Rp 500 Ribu</span>
                            <span class="time">Only 1 Ad Post</span>
                        </div>
                        <ul>
                            <li>Posting iklan : 1x Posting </li>
                            <li>Photo di iklan : 4 Photos/ad</li>
                            <li>Grafik Iklan Mingguan ke email : Yes</li>
                            <li>Tambahkan Grafik Iklan di Akun Profil : No</li>
                        </ul>
                        <div class="pricingTable-Sign-Up">
                            <a href="{{route('createad1')}}">Buat Iklan</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="pricing-table blue">
                    <div class="pricing-header">
                        <h3>Premium</h3>
                    </div>

                    <div class="pricingContent">
                        <div class="price-value">
                            <span class="amount">Rp 1,5 Juta</span>
                            <span class="time">/Year</span>
                        </div>
                        <ul>
                            <li>Posting iklan : Unlimited Posting / Year</li>
                            <li>Photo di iklan : 8 Photos / Ad</li>
                            <li>Grafik Iklan Mingguan ke email : Yes</li>
                            <li>Tambahkan Grafik Iklan di Akun Profil : Yes</li>
                        </ul>
                        <div class="pricingTable-Sign-Up">
                            <a href="{{route('createad1')}}">Buat Iklan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


