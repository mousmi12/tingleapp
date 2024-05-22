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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Category Details</h5>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">Category ID</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">{{ $category->id }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="email" class="form-label">Category Name </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">{{ $category->name }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">Category Description </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">{{ $category->description }}</span>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">Status </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">{{ $category->status }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="card-body">
                                <p class="card-text">
                                </p>
                                <div class="card-image">
                                <img src="{{ asset($category->image) }}" alt="Category Image" class="img-fluid">
            </div>
                                </div>
                                <p></p>
                                <div class="card-description">
                                   <p>&nbsp;&nbsp;{{$category->description}}</p>
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