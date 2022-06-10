<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <style type="text/css">
        body{
            background: #ddd;
        }
        .container{
            background: #fff;
            margin-top:100px;
        }
        .error{
            color:red;
        }
    </style>   
</head>
<body>
    <div class="container sm">
        <h4>Edit Book Details</h4>
<form action="{{route('book_update',$book->id)}}" method="put">
    @csrf
    <div class="mb-3">
        <label for="exampletitle" class="form-label"><b>Title:</b></label>
        <input type="text" class="form-control" name="title" value="{{$book->title}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"><b>Description:</b></label>
        <input type="text" class="form-control" name="description" value="{{$book->description}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"><b>Author:</b></label>
        <input type="text" class="form-control" name="author" value="{{$book->author}}">
    </div>
   
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{route('book.index')}}"class="btn btn-warning">Home</a>
</form>
</div>
</body>
</html>