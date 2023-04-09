<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Product</title>
</head>
<body>
    <form action="{{ route('products.store') }}" method="post">
        @csrf
      <div class="row ">
        <div class="col-md-3">
            <label for="" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="product_name" name="name">
          </div>
          <div class="col-md-3">
            <label for="" class="form-label">Description</label>
            <input type="text" class="form-control" id="desc" name="description">
          </div>
          <div class="col-md-3">
            <label for="" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price">
          </div>
          <div class="col-md-3">
            <label for="" class="form-label">Product Image</label>
            <input type="file" class="form-control" id="image" name="image">
          </div>

        </div>
        <p></p>
        <button type="submit" class="btn btn-primary w-50">Submit</button>
      </form>
</body>
</html>