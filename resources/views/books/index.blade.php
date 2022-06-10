<!DOCTYPE html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <title>Index data</title>
    <style type="text/css">
        body{
            background: #ddd;
        }
        .container{
            background: #fff;
            margin-top:10px;
        }
        .error{
            color:red;
        }
        .a{
                
                margin-top:20px;
                margin-left:1180px;
            }
            
    </style>    
</head>
<body>
    <div class="a">
        <a href="{{route('book.create')}}" class="btn btn-info">Add Book</a>    
    </div>   
    <div class="card">
       
    </div>    
    <div class="container">
       <h4>Display Data</h4>
       
        <table class="table">
            <thead class="card-header bg-dark text-white">
                <tr>    
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                    <th>AUTHOR</th>
                    <th>IMAGE</th>
                    <th>Action</th>
                </tr>               
            </thead>
            <tbody>
                @foreach($books as $book)

                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->description}}</td>
                    <td>{{$book->author}}</td>
                    <td><img src="public_path/image/{{ $book->image }}" width="100px"></td>
                   
                        
                        <td><a class="btn btn-primary m" href="{{route('book.edit',$book->id)}}">EDIT</a>
                           <div style="margin-right:10px"><button class="btn btn-danger" type="submit" onclick="deleteBook('{{route('book.destroy',$book->id)}}')">Delete</button></div>
                   
                        {{-- <a class="btn btn-danger" href="{{route('book.destroy',$book->id)}}">DELETE</a> --}}
                    </td>
                    </tr>
                @endforeach
            </tbody>    

        </table>  
        {!! $books->links('pagination::bootstrap-4  ') !!}      
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <script>
        function deleteBook(url){
            $.ajax({
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                type: "delete",
                url: url,
               
                dataType: "json",
                success: function (response) {
                        location.href = response.link;
                }
            });
        }

       
    </script>    
</body>
</html>