@extends('layouts.app')

@section('extra-nav') 
@endsection

@section('content')

<div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 "src="{{asset('storage/bg4.png')}}" alt="First slide">
            <div class="d-flex align-items-center justify-content-center p-5" id="welcomecaption">
                <h2>Welcome to Soul Food</h2>
            </div>
            <div class="carousel-caption d-none d-md-block">
                <p>WE SERVE ONLY FOOD FOR THE SOUL</p>
                <h3 ><a class="px-2 text-decoration-none" style="color: white; background-color:#453836;border-color:#453836;border-radius:5px" href="{{ route('menu') }}">Order Now</a></h3>
                
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('storage/bg4.png')}}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Second Slide</h3>
                <p>This is a description for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('storage/bg4.png')}}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Third Slide</h3>
                <p>This is a description for the second slide.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" ></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" ></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="my-5 row bg-white w-100 pl-3">
    <div class="col-lg-6 border py-3 text-center" >
      <h2 class="mt-5">About Soul Food</h2>
      <p>Soul Food Specilizes in:</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
    </div>
    <div class="col-lg-6 border">
      <img class="img-fluid rounded" src="{{asset('storage/aboutusimage.png')}}" alt="">
    </div>
</div>
<div class="mt-5 py-2 w-100 mb-5">
    <div>
        <h3 class="text-center p-3">What We Offer</h3>
    </div>
    <div class="mt-4 row py-2 w-50 m-auto">
        <div class="col-lg-4 pt-3">
            <img class="img-fluid rounded-circle shadow-md" src="{{asset('storage/aglioeolio.png')}}" alt="" style="display: block; margin-left: auto;margin-right: auto;">
            <h3 class="text-center p-2"><a href="{{route('menu')}}" style="color:#453835">Pasta</a></h3>
        </div>
        <div class="col-lg-4 pt-3">
            <img class="img-fluid rounded-circle shadow-md" src="{{asset('storage/bbqribs.png')}}" alt=""style="display: block; margin-left: auto;margin-right: auto;">
            <h3 class="text-center p-2"><a href="{{route('category',['category'=>'BBQ'])}}" style="color:#453835">BBQ</a></h3>
        </div>
        <div class="col-lg-4 pt-3">
            <img class="shadow-sm rounded-circle shadow-md" src="{{asset('storage/rosemaryspritzer.png')}}" alt=""style="display: block; margin-left: auto;margin-right: auto;">
            <h3 class="text-center p-2"><a href="{{route('category',['category'=>'Drinks']) }}" style="color:#453835">Drinks</a></h3>
            
        </div>

    </div>
</div>
<div class="row w-100 m-auto p-5" style="background-image: url({{asset('storage/welcomeimgclear.png')}})">
    <div class="row w-75 m-auto">
        <div class="col-lg-4" style="background-color: #453835">
            <h1 class="text-white " style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">
                Reserve a table with us today.
            </h1>
                
        </div>
    <div class="col-lg bg-white shadow-sm border pt-2">
        <div class="text-center">
            <h3>Reservation</h3>
            <h2 class="" style="font-weight: bold">ONLINE BOOKING</h2>
        </div>
    <form action="{{ route('user.reservation') }}" method="post" role="form">
        {{ csrf_field() }}
        <div class="form-row">
          <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
          </div>
          <div class="col-lg-4 col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
          </div>
          <div class="col-lg-4 col-md-6 form-group">
              <input type="number" class="form-control" name="phone" id="phone" placeholder="Your Phone">
          </div>
          <div class="col-lg-4 col-md-6 form-group">
              <input type="date" name="date" class="form-control" id="date" placeholder="Date">
          </div>
          <div class="col-lg-4 col-md-6 form-group">
              <input type="time" class="form-control" name="time" id="time" placeholder="Time">
          </div>
          <div class="col-lg-4 col-md-6 form-group">
              <input type="number" class="form-control" name="people" id="people" placeholder="No. of people">
          </div>
        </div>
        <div class="form-group">
              <textarea class="form-control" name="message" placeholder="Message"></textarea>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary float-right"style="background-color: #453835">Book a Table</button>
        </div>
    </form>
    </div>
    </div>
</div>
<div class="mt-5 w-100">
    <div class="bg-red border p-2 mb-4 mt-5 py-3">
        <h3 class="text-center">What Our Customers Say</h3>
    </div>
    <div class="row w-100 mt-5">

        <div class="col-lg-4 mb-4">
        <div class="card h-100">
            <h4 class="card-header">Betty Summers</h4>
            <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
             <img src="{{ asset('storage/5star.png') }}" width="100px" alt="5 stars" class="float-right">
            </div>
        </div>
        </div>
        <div class="col-lg-4 mb-4">
        <div class="card h-100">
            <h4 class="card-header">Pearl Valdez</h4>
            <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
            </div>
            <div class="card-footer">
                <img src="{{ asset('storage/5star.png') }}" width="100px" alt="5 stars" class="float-right">
            </div>
        </div>
        </div>
        <div class="col-lg-4 mb-4">
        <div class="card h-100">
            <h4 class="card-header">Steve Bates</h4>
            <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
            <img src="{{ asset('storage/5star.png') }}" width="100px" alt="5 stars" class="float-right">
            </div>
        </div>
        </div>
    </div>
</div>

<div class="w-100">
<section class="row" id="contact" >
    <div class="section-inner col-lg-9">
      <h2>Contact us</h2>
      <p>You can find us on:</p>
      <ul>
        <li><a href="https://twitter.com/traventure">Twitter</a></li>
        <li><a href="https://www.pinterest.com/traventure">Pinterest</a></li>
        <li><a href="https://www.instagram.com/traventure">Instagram</a></li>
        <li><a href="https://www.FoodNetwork.com/traventure">Food Network</a></li>
      </ul>
    </div>
</section>
</main>

<footer>

  Traventure agency dot com.2020


</footer>
@endsection
