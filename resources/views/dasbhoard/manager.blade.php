@extends('layout.app')
@section('pageTitle',trans('Dashboard'))

@section('content')

<div class="page-content py-3">
    <section class="row">
       <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-aqua">
                <i class="bi bi-boxes icon"></i>
                </span>
                <div class="info-box-content">
                    <span class="text-bold text-uppercase">Total Stock</span>
                    <span class="info-box-number">৳  0.00</span>
                </div>
            </div>
       </div>
       <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-yellow">
                <i class="bi bi-currency-dollar icon"></i>
                </span>
                <div class="info-box-content">
                    <span class="text-bold text-uppercase">Total Collection</span>
                    <span class="info-box-number">৳  0.00</span>
                </div>
            </div>
       </div>
       <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-green">
                <i class="bi bi-cart icon"></i>
                </span>
                <div class="info-box-content">
                    <span class="text-bold text-uppercase">Total Sales Amount</span>
                    <span class="info-box-number">৳  0.00</span>
                </div>
            </div>
       </div>
       <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-red">
                <i class="bi bi-dash-square icon"></i>
                </span>
                <div class="info-box-content">
                    <span class="text-bold text-uppercase">Total Expense Amount</span>
                    <span class="info-box-number">৳  0.00</span>
                </div>
            </div>
       </div>
    </section>
    <section class="row">
       <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-aqua">
                <i class="bi bi-boxes icon"></i>
                </span>
                <div class="info-box-content">
                    <span class="text-bold text-uppercase">Todays Stock Out</span>
                    <span class="info-box-number">৳  0.00</span>
                </div>
            </div>
       </div>
       <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-yellow">
                <i class="bi bi-currency-dollar icon"></i>
                </span>
                <div class="info-box-content">
                    <span class="text-bold text-uppercase">Collection Due</span>
                    <span class="info-box-number">৳  0.00</span>
                </div>
            </div>
       </div>
       <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-green">
                <i class="bi bi-cart icon"></i>
                </span>
                <div class="info-box-content">
                    <span class="text-bold text-uppercase">Todays Total Sales</span>
                    <span class="info-box-number">৳  0.00</span>
                </div>
            </div>
       </div>
       <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-red">
                <i class="bi bi-dash-square icon"></i>
                </span>
                <div class="info-box-content">
                    <span class="text-bold text-uppercase">Todays Total Expense</span>
                    <span class="info-box-number">৳  0.00</span>
                </div>
            </div>
       </div>
    </section>
    <section class="row">
       <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="small-box bg-dream-pink">
               <div class="inner text-uppercase">
                    <h3>138</h3>
                    <p>Suppliers</p>
               </div>
               <div class="icon">
                <i class="bi bi-people-fill"></i>
               </div>
               <a href="#" class="small-box-footer text-uppercase">View
                <i class="bi bi-arrow-right-circle"></i>
               </a>
            </div>
       </div>
       <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="small-box bg-dream-purple">
               <div class="inner text-uppercase">
                    <h3>18</h3>
                    <p>Group</p>
               </div>
               <div class="icon">
                <i class="bi bi-people-fill"></i>
               </div>
               <a href="#" class="small-box-footer text-uppercase">View
                <i class="bi bi-arrow-right-circle"></i>
               </a>
            </div>
       </div>
       <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="small-box bg-dream-maroon">
               <div class="inner text-uppercase">
                    <h3>18</h3>
                    <p>Invoice</p>
               </div>
               <div class="icon">
                <i class="bi bi-receipt"></i>
               </div>
               <a href="#" class="small-box-footer text-uppercase">View
                <i class="bi bi-arrow-right-circle"></i>
               </a>
            </div>
       </div>
       <div class="col-md-3 col-sm-6 col-lg-3">
            <div class="small-box bg-dream-green">
               <div class="inner text-uppercase">
                    <h3>198</h3>
                    <p>Memu</p>
               </div>
               <div class="icon">
                <i class="bi bi-receipt"></i>
               </div>
               <a href="#" class="small-box-footer text-uppercase">View
                <i class="bi bi-arrow-right-circle"></i>
               </a>
            </div>
       </div>
    </section>
</div>
@endsection

@push('scripts')

<!-- Need: Apexcharts -->
<script src="{{ asset('/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('/assets/js/pages/dashboard.js') }}"></script>
@endpush
