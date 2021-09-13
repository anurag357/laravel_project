<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Update form</h2>
  <form action="/edit" method="POST" >
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <div class="form-group">
      <label for="name">Name:</label>
      
      <input type="text" class="form-control"   name="name" value="{{$data['name']}}">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" value="{{$data['email']}}">
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control"  name="address" value="{{$data['address']}}">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
