<!DOCTYPE html>
<html lang="en">

<head>
  @include('user.header')
</head>

<body>
  <nav class="primary-nav padding-small col-12">
    <div class="container">
      <div class="row d-flex justify-content-end">

        <div class="col-lg-6 col-md-">
          @include('user.menu')
        </div>
      </div>
    </div>
  </nav>
  <div></div>
  <section>

    <div class="row d-flex justify-content-center align-items-center">

      @foreach($products as $product)
      <div class="d-flex flex-column justify-content-center align-items-center shadow p-3 mb-5 rounded" style="width: 250px;height:300px;background-color: #ff000017;margin: 10px;">
        <div class="d-flex justify-content-center align-items-center" style="width: 200px;height:250px;">
          <img src="{{ asset($product->image) }}" style="width: 200px;height:200px;border-radius: 50% 50%;" alt="{{ $product->name }}">
        </div>
        <div class="d-flex justify-content-center">
          <h4>{{ $product->name }}</h4>
        </div>
        <!-- Add more product details as needed -->
      </div>
      @endforeach
    </div>
  </section>





  @include('user.footer')
  @include('user.js')
</body>
</head>