@extends('layouts.app')

@section('extra-nav') 
<li class="nav-item">
    @role('admin')
    <a class="nav-link" href="/admin">Admin</a>
    @endrole
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('menu') }}">Menu</a>
</li>
@endsection
@section('content')
<!--Section: Block Content-->
<section>

    <!--Grid row-->
    <div class="row">
  
      <!--Grid column-->
      <div class="col-lg-8">
  
        <!-- Card -->
        <div class="card wish-list mb-3">
          <div class="card-body"> 
            <h5 class="mb-4">Cart (<span>2</span> items)</h5>
            <div class="row mb-4">
              <div class="col-md-5 col-lg-3 col-xl-3">
                <div class="z-depth-1 rounded mb-3 mb-md-0">
                  <img class="img-fluid w-100"
                    src="http://placehold.it/150x150" alt="Sample">

                </div>
              </div>
              <div class="col-md-7 col-lg-9 col-xl-9">
                <div>
                  <div class="d-flex justify-content-between">
                    <div>
                      <h5>Food Name</h5>
                      <p class="mb-3 text-muted text-uppercase small">Description</p>
                      <p class="mb-3 text-muted text-uppercase small">Price</p>
                    </div>
                    <div>
                      <div class="def-number-input number-input mb-0 w-100">
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <div><a href="#">Update</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                          class="fa fa-trash mr-1"></i> Remove item </a>
                      <a href="#!" type="button" class="card-link-secondary small text-uppercase"><i
                          class="fa fa-heart mr-1"></i> Move to wish list </a>
                    </div>
                    <p class="mb-0"><span><strong>Price here</strong></span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card -->
  
        <!-- Card -->
        <div class="card mb-3">
          <div class="card-body">
  
            <h5 class="mb-4">Expected shipping delivery</h5>
  
            <p class="mb-0"> Thu., 12.03. - Mon., 16.03.</p>
          </div>
        </div>
        <!-- Card -->
  
        <!-- Card -->
        <div class="card mb-3">
          <div class="card-body">
  
            <h5 class="mb-4">We accept</h5>
  
            <img class="mr-2" width="45px"
              src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
              alt="Visa">
            <img class="mr-2" width="45px"
              src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
              alt="American Express">
            <img class="mr-2" width="45px"
              src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
              alt="Mastercard">
            <img class="mr-2" width="45px"
              src="https://z9t4u9f6.stackpathcdn.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
              alt="PayPal acceptance mark">
          </div>
        </div>
        <!-- Card -->
  
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class="col-lg-4">
  
        <!-- Card -->
        <div class="card mb-3">
          <div class="card-body">
  
            <h5 class="mb-3">The total amount of</h5>
  
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Temporary amount
                <span>$25.98</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Shipping
                <span>Gratis</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>The total amount of</strong>
                  <strong>
                    <p class="mb-0">(including VAT)</p>
                  </strong>
                </div>
                <span><strong>$53.98</strong></span>
              </li>
            </ul>
  
            <button type="button" class="btn btn-primary btn-block waves-effect waves-light">go to checkout</button>
  
          </div>
        </div>
        <!-- Card -->
  
        <!-- Card -->
        <div class="card mb-3">
          <div class="card-body">
  
            <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample1"
              aria-expanded="false" aria-controls="collapseExample1">
              Add a discount code (optional)
              <span><i class="fas fa-chevron-down pt-1"></i></span>
            </a>
  
            <div class="collapse" id="collapseExample1">
              <div class="mt-3">
                <div class="md-form md-outline mb-0">
                  <input type="text" id="discount-code1" class="form-control font-weight-light"
                    placeholder="Enter discount code">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card -->
  
      </div>
      <!--Grid column-->
  
    </div>
    <!--Grid row-->
  
  </section>
  <!--Section: Block Content-->
  @endsection