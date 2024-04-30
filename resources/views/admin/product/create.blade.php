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
                                <h5 class="title">Adding New Products</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name">
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="name">Product Code</label>
                                                <input type="text" id="pcode" name="pcode" class="form-control" placeholder="Enter Product Code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <input type="text" id="description" name="description" class="form-control" placeholder="Enter Description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Category</label>
                                                <select class="form-control" name="catid" id="catid" style="background-color: #1e1e2f; color: white;">
                                                    <option value="">Select Category</option>
                                                    @foreach($category as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="price">Made By</label>
                                                <select class="form-control" name="madeby" style="background-color: #1e1e2f; color: white;">
                                                    <option value="">Select</option>
                                                    <option value="Crochet">Crochet</option>
                                                    <option value="Resin">Resin</option>
                                                    <option value="Ribbon">Ribbon</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="price">Price</label>
                                                <input type="text" id="price" name="price" class="form-control" placeholder="Enter Price">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="stock">Available Stock</label>
                                                <input type="text" id="stock" name="stock" class="form-control" placeholder="Enter Stock">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="image" class="form-label">Upload Image:</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="button" class="btn btn-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </form>
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