@extends('layouts.dashboard')

@section('title')
    Store Dashboard
@endsection

@section('content')
<!-- Section Content -->
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Transaction</h2>
            <p class="dashboard-subtitle">
                List of Transaction
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="/transactions/create" class="btn btn-primary mb-3">
                                + Tambah Transaksi Baru
                            </a>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead>
                                    <tr>
                                        <th>Reference No</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>Stock</th>
                                       
                                    </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($transactions as $trans)
                                          <tr>
                                              <td>{{ $trans->reference_no }}</td>
                                              <td>{{ $trans->product->name }}</td>
                                              <td>${{ $trans->price }}</td>
                                              <td>{{ $trans->quantity }}</td>
                                              <td>${{ $trans->payment_amount }}</td>
                                          </tr>
                                      @endforeach
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@if(session('success'))
    <script>
        setTimeout(function () {
            alert("{{ session('success') }}");
        }, 200);
    </script>
@endif
@if(session('eror'))
    <script>
        setTimeout(function () {
            alert("{{ session('eror') }}");
        }, 200);
    </script>
@endif
