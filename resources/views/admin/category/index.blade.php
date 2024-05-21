
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
                             <th>Action</th>
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
                              <td >
                              <a href="{{ route('admin.category.views',$category->id) }}" >
                                  <i class="fas fa-eye" style="color:rgba(255, 255, 255, 0.7)"></i>
                                </a>
                                &nbsp;
                                <a href="{{ route('admin.category.edit',$category->id) }}" >
                                  <i class="fas fa-pencil-alt" style="color:rgba(255, 255, 255, 0.7)"></i>
                                </a>
                                &nbsp;
                                <form action="{{ route('admin.category.delete', $category->id) }}" method="POST" style="display: inline;">
                                  @csrf
                                 
                                  <button type="submit" class="btn btn-link" style="padding: 0; background: none; border: none;">
                                    <i class="fas fa-trash" style="color: rgba(255, 255, 255, 0.7);"></i>
                                  </button>
                                </form>
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