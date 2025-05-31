@extends('frontend.master')
@section('content')

<!-- Cart Page Start -->
<div class="container py-5">
  <h2 class="mb-4 text-center">Your Cart</h2>
  <div class="table-responsive">
    <table class="table text-center align-middle table-bordered">
      <thead class="table-dark">
        <tr>
          <th scope="col">Image</th>
          <th scope="col">Product</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
          <th scope="col">Total</th>
          <th scope="col">Remove</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <img
              src="img/menu-1.jpg"
              alt="Product"
              style="width: 70px"
              class="rounded" />
          </td>
          <td>Chicken Biryani</td>
          <td>$12.00</td>
          <td>
            <input
              type="number"
              class="mx-auto form-control w-50"
              value="1"
              min="1" />
          </td>
          <td>$12.00</td>
          <td>
            <button class="btn btn-danger btn-sm">
              <i class="fa fa-trash"></i>
            </button>
          </td>
        </tr>
        <tr>
          <td>
            <img
              src="img/menu-2.jpg"
              alt="Product"
              style="width: 70px"
              class="rounded" />
          </td>
          <td>Veggie Pizza</td>
          <td>$10.00</td>
          <td>
            <input
              type="number"
              class="mx-auto form-control w-50"
              value="2"
              min="1" />
          </td>
          <td>$20.00</td>
          <td>
            <button class="btn btn-danger btn-sm">
              <i class="fa fa-trash"></i>
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="row justify-content-end">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Cart Summary</h5>
          <ul class="mb-3 list-group list-group-flush">
            <li
              class="list-group-item d-flex justify-content-between align-items-center">
              Subtotal
              <span>$32.00</span>
            </li>
            <li
              class="list-group-item d-flex justify-content-between align-items-center fw-bold">
              Total
              <span>$35.00</span>
            </li>
          </ul>
          <a href="#" class="btn btn-primary w-100">Proceed to Checkout</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Cart Page End -->


<script>
  function updateCartTotals() {
    let subtotal = 0;
    document.querySelectorAll("table tbody tr").forEach((row) => {
      const priceCell = row.children[2];
      const qtyInput = row.querySelector('input[type="number"]');
      const totalCell = row.children[4];
      if (priceCell && qtyInput && totalCell) {
        const price = parseFloat(priceCell.textContent.replace("$", ""));
        const qty = parseInt(qtyInput.value) || 0;
        const total = price * qty;
        totalCell.textContent = `$${total.toFixed(2)}`;
        subtotal += total;
      }
    });
    document
      .querySelectorAll(".list-group-item span")
      .forEach((el, idx) => {
        if (idx === 0) el.textContent = `$${subtotal.toFixed(2)}`;
        if (idx === 1) el.textContent = `$${subtotal.toFixed(2)}`;
      });
  }
  document.querySelectorAll('input[type="number"]').forEach((input) => {
    input.addEventListener("input", updateCartTotals);
  });
  // Initial calculation
  updateCartTotals();
</script>
@endsection