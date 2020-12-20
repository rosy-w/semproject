@extends('layouts.app')

@section('extra-nav') 
@role('admin')
<li class="nav-item">   
    <a class="nav-link" href="/admin">Admin</a>   
</li>
@endrole
@role('user')
<li class="nav-item">
    <a class="nav-link" href="{{ route('menu') }}">Menu</a>
</li>
<li class="nav-item">   
    <a class="nav-link" href="#">Cart</a> 
</li>
@endrole
@endsection

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://dummyimage.com/1200x450/8c8/000000&text=1200x400" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h3><a href="{{ route('menu') }}">Order Now</a></h3>
                <p>This is a description for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://dummyimage.com/1200x450/88c/000000&text=1200x400" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Second Slide</h3>
                <p>This is a description for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://dummyimage.com/1200x450/888/000000&text=1200x400" alt="Third slide">
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
<div class="my-5 row bg-white w-100 ">
    <div class="col-lg-6 border py-3" >
      <h2>About Soul Food</h2>
      <p>Soul Food Specilizes in:</p>
      <ul>
        <li>
          <strong>Bootstrap v4</strong>
        </li>
        <li>jQuery</li>
        <li>Font Awesome</li>
        <li>Working contact form with validation</li>
        <li>Unstyled page elements for easy customization</li>
      </ul>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
    </div>
    <div class="col-lg-6 border">
      <img class="img-fluid rounded" src="{{asset('storage/aboutusimage.png')}}" alt="">
    </div>
</div>
<div class="mt-5 py-2">
    <div>
        <h3 class="text-center text-white p-3"style="background-color: #bc1823">What We Offer</h3>
    </div>
    <div class="mt-4 row py-2 bg-white w-100">
        @foreach ($categories as $category)
        <div class="col-lg-4 border">
            <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
            <h2 class="text-center">{{$category->name}}</h2>
            <a href="{{ route('category',['category'=>$category]) }}" class="img-caption">Order Now</a>
        </div>
        @endforeach

    </div>
</div>

<div class="mt-5">
    <div class="bg-red border p-2 mb-4 mt-5 py-3">
        <h3 class="text-center">What Our Customers Say</h3>
    </div>
    <div class="row w-100">

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
<div class="p-4 row">
    <div class="col-lg-4" style="background-image: url('{{asset('storage/redbackground.png')}}')">
        <h1 class="text-white " style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">
            Reserve a table with us today.
        </h1>
            
    </div>
    <div class="col-lg-8 bg-white p-3 shadow-sm">
    <form action="" method="post" role="form">
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
        <button type="submit" class="btn btn-primary float-right mt-3"style="background-color: #bc1823">Book a Table</button>
      </form>
    </div>
</div>
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
