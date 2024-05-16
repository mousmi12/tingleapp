<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.header')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="">
  <div class="wrapper">
    @include('admin.sidebar')
    <div class="main-panel">
      @include('admin.navigation')

      <div class="content">
        <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">

                  <div class="card ">
                    <div class="card-header">
                      <h4 class="card-title"> Products</h4>
                    </div>

                    <div class="card-body">
                      <form method="GET" action="{{ route('admin.order.index') }}">
                        <div class="row">
                          <div class ="col"></div>
                        <div class="col">
                          <input type="text" name="search" class="form-control" placeholder="Search by name, mobile, order ID, or status" value="{{ request()->get('search') }}">
                        </div>
                          <div class="col">
                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                          </div>
                        </div>
                        
                      </form>


                      <div class="table-responsive">
                        <table class="table tablesorter " id="">
                          <thead class=" text-primary">
                            <tr>
                              <!-- <th>SNo.</th> -->
                              <th>Order No.</th>
                              <th>Customer Name</th>
                              <th>Mobile</th>
                              <th>Product Code</th>
                              <th>Product Name</th>
                              <th>Description</th>
                              <th>
                                <a href="{{ route('admin.order.index', ['sort_by' => 'status', 'sort_order' => $sort_order == 'asc' ? 'desc' : 'asc', 'search' => $search]) }}">
                                  Status
                                  @if ($sort_by == 'status')
                                  {{ $sort_order == 'asc' ? '↑' : '↓' }}
                                  @endif
                                </a>
                              </th>
                              <th>Contact</th>
                            </tr>
                          </thead>
                          <tbody>
                            <!-- @php $counter = 1 @endphp -->
                            @foreach($orders as $order)
                            <tr>
                              <!-- <td>{{ $counter++ }}</td> -->
                              <td>{{ $order->id }}</td>
                              <td>{{ $order->customername }}</td>
                              <td>{{ $order->mobile }}</td>
                              <td>{{ $order->pcode }}</td>
                              <td>{{ $order->pname }}</td>
                              <td>{{ $order->description }}</td>
                              <td>
                                <select class="status-dropdown" data-order-id="{{ $order->id }}" style="background-color: #1e1e2f; color: white;">
                                  <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                  <option value="Progress" {{ $order->status == 'Progress' ? 'selected' : '' }}>Progress</option>
                                  <option value="Shipped" {{ $order->status == 'Shipped' ? 'selected' : '' }}>Shipped</option>
                                  <option value="Delivered" {{ $order->status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                                  <option value="Cancelled" {{ $order->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                                  <option value="Completed" {{ $order->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                                </select>
                              </td>
                              <td>
                                @php
                                $message = urlencode("Hello {$order->customername},\n\nThank you for shopping with us at Tingle! 😊\n\nWe wanted to update you on the status of your order:\n\n📦 Order No.: {$order->id}\n📄 Status: {$order->status}\n\nIf you have any questions, feel free to contact us.\n\nBest regards,\nThe Tingle Team");
                                @endphp

                                <a href="https://wa.me/{{ $order->mobile }}?text={{ $message }}" target="_blank">
                                  <i class="fab fa-whatsapp"></i>
                                </a>
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
              @include('admin.js')
</body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $('.status-dropdown').change(function() {
      var orderId = $(this).data('order-id');
      var status = $(this).val();

      console.log('Order ID:', orderId);
      console.log('Status:', status);

      $.ajax({
        url: '{{ route("updateOrderStatus") }}',
        method: 'POST',
        data: {
          _token: '{{ csrf_token() }}',
          order_id: orderId,
          status: status
        },
        success: function(response) {
          console.log('Response:', response);
          alert('Order status updated successfully');
        },
        error: function(xhr, status, error) {
          console.error('Error updating order status:', xhr.responseText);
          alert('Failed to update order status');
        }
      });
    });
  });
</script>