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
                                <h5 class="title">Product Details</h5>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">Product Code</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">{{ $product->pcode }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="email" class="form-label">Product Name </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">{{ $product->name }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">Product Description </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">{{ $product->description }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">Product Category </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">{{ $product->category->name }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">Made By Using </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">{{ $product->madeby }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">Product Price </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">{{ $product->price }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">Stock </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">{{ $product->stock }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">Status </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">{{ $product->status }}</span>
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
                                <img src="{{ asset($product->image) }}" alt="Product Image" class="img-fluid">
            </div>
                                </div>
                                <p></p>
                                <div class="card-description">
                                   <p>&nbsp;&nbsp;{{$product->description}}</p>
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