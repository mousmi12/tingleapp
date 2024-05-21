<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.header')
</head>

<body class="">
  <div class="wrapper">
    @include('admin.sidebar')
    <div class="main-panel">
      @include('admin.navigation')
      <div class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h5 class="card-category">Order Summary</h5>
                    <h2 class="card-title">Performance</h2>
                  </div>
                  <div class="col-sm-6">


                    <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                      <label class="btn btn-sm btn-primary btn-simple active" id="0">
                        <input type="radio" name="options"  />
                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Pending</span>
                        <span class="d-block d-sm-none">
                          <i class="tim-icons icon-single-02"></i>
                        </span>
                      </label>
                      <label class="btn btn-sm btn-primary btn-simple " id="1">
                        <input type="radio" name="options">
                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Progress</span>
                        <span class="d-block d-sm-none">
                          <i class="tim-icons icon-gift-2"></i>
                        </span>
                      </label>
                      <label class="btn btn-sm btn-primary btn-simple"  id="2">
                        <input type="radio" name="options" >
                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Completed</span>
                        <span class="d-block d-sm-none">
                          <i class="tim-icons icon-tap-02"></i>
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-area">
                      <div class="table-responsive" style="overflow: hidden;">
                        <table class="table tablesorter" id="pending-orders-table" style="display: table;">
                          <thead class="text-primary">
                            <tr>
                              <th>Order ID</th>
                              <th>Customer Name</th>
                              <th>Product</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($pendingOrders as $order)
                            <tr class="order-row" data-status="{{ $order->status }}">
                              <td>{{ $order->id }}</td>
                              <td>{{ $order->customername }}</td>
                              <td>{{ $order->pname }}</td>
                              <td>{{ $order->status }}</td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                        <table class="table tablesorter" id="progress-orders-table" style="display: none;">
                          <thead class="text-primary">
                            <tr>
                              <th>Order ID</th>
                              <th>Customer Name</th>
                              <th>Product</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($progressOrders as $order)
                            <tr class="order-row" data-status="{{ $order->status }}">
                              <td>{{ $order->id }}</td>
                              <td>{{ $order->customername }}</td>
                              <td>{{ $order->pname }}</td>
                              <td>{{ $order->status }}</td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                        <table class="table tablesorter" id="completed-orders-table" style="display: none;">
                          <thead class="text-primary">
                            <tr>
                              <th>Order ID</th>
                              <th>Customer Name</th>
                              <th>Product</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($completedOrders as $order)
                            <tr class="order-row" data-status="{{ $order->status }}">
                              <td>{{ $order->id }}</td>
                              <td>{{ $order->customername }}</td>
                              <td>{{ $order->pname }}</td>
                              <td>{{ $order->status }}</td>
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
      </div>
    </div>
  </div>


  <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('input[type="radio"]').on('change', function() {
        var selectedValue = $(this).closest('label').attr('id');
        $('.btn-group-toggle label').removeClass('active');
        // Add active class to the selected label
        $(this).closest('label').addClass('active');

        // Hide all tables
        $('#pending-orders-table').hide();
        $('#progress-orders-table').hide();
        $('#completed-orders-table').hide();

        // Show the selected table
        switch (selectedValue) {
          case '0':
            $('#pending-orders-table').show();
            break;
          case '1':
            $('#progress-orders-table').show();
            break;
          case '2':
            $('#completed-orders-table').show();
            break;
        }
      });
    });
  </script>
</body>

</html>