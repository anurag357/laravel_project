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
  <div class="row">
  <div class="col-lg-9">
  <h2>Members List</h2>
   </div>

   <div class="col-lg-3"><a href="add"><button class="btn btn-primary">AddMember</button></a></div>
  </div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

  @foreach($members as $member)
      <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['email']}}</td>
        <td>{{$member['address']}}</td>
        <td><a href="{{"edit/".$member['id']}}">Edit</a>
          <a href="{{"delete/".$member['id']}}">Delete</a>
        </td>
      </tr>
  @endforeach
     
    </tbody>
  </table>
</div>
<div>{{$members->links()}}</div>
<style type="text/css">
  .w-5{
    display: none;
  }
</style>
</body>
</html>
