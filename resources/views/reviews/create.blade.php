<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <form action="{{ route('reviews.store') }}" method="post">
        @csrf

        <input type="hidden" name="product_id" id="product_id" value="{{ $id }}">
        <div class="form-group">
          <label for="">Product Rating</label>
          <input type="number" class="form-control" name="rating" id="rating" placeholder="Enter your rating">
        </div>
        <div class="form-group">
          <label for="">Comment</label>
          <input type="text" class="form-control" name="comment" id="comment" placeholder="Comment Here">
        </div>
        <p></p>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
</body>
</html>