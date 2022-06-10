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
                margin-top:100px;
            }
            .error{
                color:red;
            }
        </style>   
</head>
<body>
    
    <div class="container sm">
        <h4>Add Book Details</h4>
<form action="{{route('book.store')}}" method="POST" id="form">
    @csrf
    <div class="mb-3">
        <label for="title"><b>Title:</b></label>
        <input type="text" class="form-control" name="title" id="title">
        
    </div>
    <div class="mb-3">
        <label for="description"><b>Description:</b></label>
        <input type="text" class="form-control" name="description"id="description">
    </div>
    <div class="mb-3">
        <label for="author"><b>Author:</b></label>
        <input type="text" class="form-control" name="author"id="author">
    </div>
   
        <button type="submit" class="btn btn-success"id="sumbit">Submit</button>
        <a href="{{route('book.index')}}"class="btn btn-warning">Home</a>
</form>
</div>
<script>
    
    $(document).on('click',function() {
        $("#form").validate({
            rules: {
                title: "required",
                description: "required",
                author: "required",
               
            }
            messages: {
                title:{
                    required:"Title name is required",
                } ,
                description:{
                    required:"Description name is required",
                }, 
                author:{
                    required:"Author is required",
                }, 
                   
                }
        });
    });
</script>


    
</body>
</html>