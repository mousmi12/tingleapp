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
  <section class="d-flex justify-content-center align-items-center ">

    <div class="row">
      @foreach($products as $product)
      <div class="d-flex flex-column justify-content-center align-items-center shadow p-3 mb-5 rounded" style="width: 250px;height:300px;background-color: #ff000017;margin: 10px;">
        <div class="d-flex justify-content-center align-items-center" style="width: 200px;height:250px;">
          <img src="{{ asset($product->image) }}" style="width: 200px;height:200px;border-radius: 50% 50%;" alt="{{ $product->name }}">
        </div>
        <div class="d-flex justify-content-center align-items-center">
          <div class="text-center">
            <h6>{{ $product->name }}</h6>
            <small>Rs: {{ $product->price }}</small>
          </div>
        </div>
        <!-- Add more product details as needed -->

        <!-- Button trigger modal -->
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #c396ad;">
          Order Now
        </button>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="margin-top: 100px;">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Order your Product</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{ route('user.order.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="pid" id="pid" value="{{ $product->id }}">
                <div class="mb-1">
                  <div class="mb-1">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" style="height: 30px;" id="name" name="name">
                  </div>
                  <div class="mb-1">
                    <label for="mobile" class="form-label">Mobile No.</label>
                    <input type="text" class="form-control" style="height: 30px;" id="mobile" name="mobile">
                  </div>
                  <div class="mb-1">
                    <label for="qty" class="form-label">Quantity</label>
                    <input type="text" class="form-control" style="height: 30px;" id="qty" name="qty">
                  </div>
                  <div class="mb-1">
                    <label for="image" class="form-label" style="margin-bottom: 0px;">Upload Reference image if any</label>
                    <input class="form-control border-secondary-subtle" id="image" type="file" style="background: white; margin-top:0;" name="image">
                  </div>
                  <div class="mb-1">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" style="height: 80px;" id="description" name="description"></textarea>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </form>

            </div>
          </div>
        </div>

      </div>
      @endforeach
    </div>

  </section>





  @include('user.footer')
  @include('user.js')
</body>
</head>