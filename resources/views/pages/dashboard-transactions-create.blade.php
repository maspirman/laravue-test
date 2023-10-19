@extends('layouts.dashboard')

@section('title')
    Add Transactions
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Add New Transactions</h2>
      <p class="dashboard-subtitle">
        Automatic Invoice Number
      </p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <form action="{{ route('transaction-store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>No Invoice</label>
                      <input type="text" class="form-control" id="im" placeholder="leave it blank" name="inv" disabled/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Select a Product</label>
                      <select class="form-control" name="product" id="product">
                        <option value="">Choose One</option>
                        @foreach($products as $product)
                        <option value="{{ $product->id}}">{{ $product->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Quantity</label>
                      <input type="number" class="form-control" id="qty" name="qty" />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Price @</label>
                      <input type="number" class="form-control" id="price" name="price" value="0" disabled/>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Total Price</label>
                      <input type="number" class="form-control" id="totalPrice" name="totalPrice" value="0" disabled/>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Stock Available</label>
                      <input type="number" class="form-control" id="stock" name="stock" value="0" disabled/>
                    </div>
                  </div>
                  
                  
                 
                </div>
                <div class="row">
                  <div class="col text-right">
                    <button
                      type="submit"
                      class="btn btn-success px-5"
                    >
                      Save Now
                    </button>
                  </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('addon-script')

<script>
document.addEventListener("DOMContentLoaded", function () {
  const productSelect = document.getElementById("product");
  const quantityInput = document.getElementById("qty");
  const priceInput = document.getElementById("price");
  const stockInput = document.getElementById("stock");
  const totalPriceInput = document.getElementById('totalPrice');
  const invoiceInput = document.getElementById('inv'); // Input No Invoice
  const qtyInput = document.getElementById('qty');
      
  productSelect.addEventListener("change", function () {
    const productId = this.value;

    if (productId) {
      fetch(`/get-product/${productId}`)
        .then((response) => response.json())
        .then((data) => {
          quantityInput.value = 1;
          priceInput.value = data.price;
          stockInput.value = data.stock;
          totalPriceInput.value = data.price * qtyInput.value;

          // Mengisi otomatis No Invoice dengan reference_no dari API
          invoiceInput.value = data.reference_no;

          // Panggil fungsi sendTransactionData dengan data yang diisi di formulir
          sendTransactionData(quantityInput.value, priceInput.value, productId);
        });
    } else {
      quantityInput.value = "";
      priceInput.value = "";
      stockInput.value = "";
      totalPriceInput.value = "";
      invoiceInput.value = ""; // Reset No Invoice jika produk tidak dipilih
    }
  });
});

  </script>
  
  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  
@endpush