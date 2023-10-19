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
            <h2 class="dashboard-title">Product</h2>
            <p class="dashboard-subtitle">
                List of Product
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="/products/create" class="btn btn-primary mb-3">
                                + Tambah Product Baru
                            </a>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>Harga</th>
                                        <th>Stock</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($products as $product)
                                          <tr>
                                              <td>{{ $product->id }}</td>
                                              <td>{{ $product->name }}</td>
                                              <td>{{ $product->price }}</td>
                                              <td>{{ $product->stock }}</td>
                                              <td>
                                                  <!-- Tambahkan tombol aksi di sini, seperti edit dan hapus -->
                                                  <a href="{{ route('product-edit', $product->id) }}">Sunting</a>
                                                  <form action="{{ route('product-destroy', $product->id) }}" method="POST">
                                                      @csrf
                                                      @method('delete')
                                                      <button type="submit" class="text-danger">Hapus</button>
                                                  </form>
                                              </td>
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
