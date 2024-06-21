@extends('layout.app')

@section('title', 'Gallery')

@section('content')
<div class="container">
    <h1>Gallery</h1>
    <p>Check out our gallery below.</p>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1652018539099-2dc2a809856e?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTg5ODUwOTV8&ixlib=rb-4.0.3&q=85" class="card-img-top" alt="Mangga">
                <div class="card-body">
                    <h5 class="card-title">Mangga</h5>
                    <p class="card-text">Makanan yang mengandung vitamin C dan baik untuk tubuh.</p>
                    <a href="#" class="btn btn-primary buy-button">Buy</a>
                </div>
            </div>
        </div>
        <!-- Tambahkan lebih banyak kartu sesuai kebutuhan -->
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="purchase-modal" tabindex="-1" aria-labelledby="purchase-modal-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="purchase-modal-label">Purchase Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="purchase-form">
                    <img id="modal-image" src="" alt="Product Image" class="img-fluid mb-3">
                    <h3 id="modal-name">Item Name</h3>
                    <p>Stock: <span id="modal-stock">0</span></p>
                    <p>Price: $<span id="modal-price">0</span></p>
                    <input type="text" id="buyer-name" name="buyer-name" placeholder="Your Name" class="form-control mb-3" required>
                    <input type="tel" id="buyer-phone" name="buyer-phone" placeholder="Your Phone Number" class="form-control mb-3" required>
                    <input type="email" id="buyer-email" name="buyer-email" placeholder="Your Email" class="form-control mb-3" required>
                    <label for="payment-method" class="form-label">Payment Method:</label>
                    <select id="payment-method" name="payment-method" class="form-select mb-3" required>
                        <option value="paypal">PayPal</option>
                        <option value="bri">BRI</option>
                        <option value="bni">BNI</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Pay Now</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
