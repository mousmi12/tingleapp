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
                    <div class="col-lg-6 col-md-12">
                        <div class="card card-chart">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="title">Profile</h5>
                                </div>

                                <div class="card-body">
                                    @if(session()->has('message'))
                                        <h6>{{ session()->get('message') }}</h6>
                                    @endif
                                    <form action="{{ route('admin.profile.store') }}" method="POST">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-10 ">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label>Email address</label>
                                                    <input type="email" class="form-control" id="mail" name="mail" placeholder="Enter email">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label class="form-label">Status</label>
                                                    <select class="form-control" name="status" style="background-color: #1e1e2f; color: white;">
                                                        <option value="" disabled selected>--- Select Status ---</option>
                                                        <option value="Active">Active</option>
                                                        <option value="Inactive">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-fill btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"></h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table tablesorter">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>User Name</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user) <!-- Assuming $users is passed to the view -->
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->status }}</td>
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
        @include('admin.js')
    </div>
</body>

</html>
