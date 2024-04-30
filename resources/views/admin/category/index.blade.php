<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)


* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
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
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">

                  <div class="card ">
                    <div class="card-header">
                      <h4 class="card-title"> Categories</h4>
                    </div>
                    <p style="margin-left: 80%">
                      <a href="{{route('admin.category.create')}}" class="btn btn-primary">Add</a>
                    </p>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table tablesorter " id="">
                          <thead class=" text-primary">
                            <tr>
                            <th>
                                SNo.
                              </th>
                              <th>
                                Name
                              </th>
                              <th>
                                Description
                              </th>
                              <th>
                                Status
                              </th>
                             
                            </tr>
                          </thead>
                          <tbody>
                            @php $counter = 1 @endphp
                            @foreach($categories as $category)
                            <tr>
                              <td >{{ $counter++ }}</td>
                              <td >{{ $category->name }}</td>
                              <td >{{ $category->description }}</td>
                              <td>{{ $category->status }}</td>
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