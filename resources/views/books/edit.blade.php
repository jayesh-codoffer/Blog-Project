<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <style type="text/css">
    
        body{
            background: #ddd;
        }
        .container{
            background: #fff;
            margin-top:50px;
        }
        .error{
            color:red;
        }
        .a{
                
                margin-top:50px;
                margin-left:40px;
            }
    </style>   
</head>
<body>
    <div class="a">
        <a href="{{route('book.index')}}"class="btn btn-warning">Go to list</a>
    </div>
    <div class="container sm">
        <h4>Edit Book Details</h4>
<form action="{{route('book_update',$book->id)}}" method="put">
    @csrf
    <div class="mb-3">
        <label for="exampletitle" class="form-label"><b>Title:</b></label>
        <input type="text" class="form-control" name="title" value="{{isset($book->title) ? $book->title : ''}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"><b>Description:</b></label>
        <input type="text" class="form-control" name="description" value="{{isset($book->description) ? $book->description : ''}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"><b>Author:</b></label>
        <input type="text" class="form-control" name="author" value="{{isset($book->author) ? $book->author : ''}}">
    </div>
   
        <button type="submit" class="btn btn-primary">Update</button>
        
</form>
</div>
</body>
</html>