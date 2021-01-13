@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div>
            <h1>Membership Toko</h1>
        </div>
        {{-- <div class="row mt-3">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Gratis</h3>
                  <h4 class="card-text">Rp. 0 / bulan</h4>
                  <li class="card-text">Mendaftarkan toko</li>
                  <li class="card-text">Toko muncul di list</li>
                  <li class="card-text text-muted">Mempromosikan toko</li>
                  <li class="card-text text-muted">Menaruh iklan toko</li>
                  <a href="#" class="btn btn-danger mt-2">Daftar Sekarang</a>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Coba-Coba</h3>
                    <h4 class="card-text">Rp. 15.000 / bulan</h4>
                    <li class="card-text">Mendaftarkan toko</li>
                    <li class="card-text">Toko muncul di list</li>
                    <li class="card-text">Mempromosikan toko</li>
                    <li class="card-text">Menaruh iklan toko</li>
                    <a href="#" class="btn btn-success mt-2">Gabung Sekarang</a>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Anggota</h3>
                    <h4 class="card-text">Rp. 25.000 / 2 bulan</h4>
                    <li class="card-text">Mendaftarkan toko</li>
                    <li class="card-text">Toko muncul di list</li>
                    <li class="card-text">Mempromosikan toko</li>
                    <li class="card-text">Menaruh iklan toko</li>
                    <a href="#" class="btn btn-success mt-2">Gabung Sekarang</a>
                  </div>
                </div>
            </div>
          </div> --}}

          <div class="pricing">
  
            <div class="row justify-content-center mt-4">
    
              <div class="col-lg-3 col-md-6">
                <div class="box">
                  <h3>Gratis</h3>
                  <h4><sup>Rp.</sup>0<span> / bulan</span></h4>
                  <ul>
                    <li>Mendaftarkan toko</li>
                    <li>Toko muncul di list</li>
                    <li class="na">Mempromosikan toko</li>
                    <li class="na">Menaruh iklan toko</li>
                  </ul>
                  <div class="btn-wrap">
                    <a href="#" class="btn-buy">Daftar Sekarang</a>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6">
                <div class="box">
                  <h3>Coba-Coba</h3>
                  <h4><sup>Rp.</sup>15.000<span> / bulan</span></h4>
                  <ul>
                    <li>Mendaftarkan toko</li>
                    <li>Toko muncul di list</li>
                    <li>Mempromosikan toko</li>
                    <li>Menaruh iklan toko</li>
                  </ul>
                  <div class="btn-wrap">
                    <a href="#" class="btn-buy">Gabung Sekarang</a>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-3 col-md-6">
                <div class="box">
                  <span class="advanced">Terlaris</span>
                  <h3>Anggota</h3>
                  <h4><sup>Rp.</sup>25.000<span> / 2 bulan</span></h4>
                  <ul>
                    <li>Mendaftarkan toko</li>
                    <li>Toko muncul di list</li>
                    <li>Mempromosikan toko</li>
                    <li>Menaruh iklan toko</li>
                  </ul>
                  <div class="btn-wrap">
                    <a href="#" class="btn-buy">Gabung Sekarang</a>
                  </div>
                </div>
              </div>
            </div>
    
          </div>
    </div>
@endsection