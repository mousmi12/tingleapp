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
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="title">Profile</h5>
                                </div>
                                <div class="card-body">
                                    <form>

                                        <div class="row">
                                            <div class="col-md-6 pr-md-1">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" placeholder="Company" value="Mike">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-md-1">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">

                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Email address</label>
                                                    <input type="email" class="form-control" id="mailid"  name="mailid" placeholder="Enter email">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label >Password</label>
                                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-fill btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('admin.js')
            </div>
        </div>
</body>

</html>