<!-- resources/views/posts/index.blade.php --> 

<!DOCTYPE html> 

<html> 

<head> 

    <title>Laravel CRUD</title> 

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 

</head> 

<body> 

    <div class="container mt-5"> 

        <div class="row"> 

            <div class="col-lg-12"> 

                <h2>Laravel CRUD Example</h2> 

                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Post</a> 

            </div> 

        </div> 

  

        @if ($message = Session::get('success')) 

            <div class="alert alert-success mt-3"> 

                <p>{{ $message }}</p> 

            </div> 

        @endif 

  

        <table class="table table-bordered mt-3"> 

            <tr> 

                <th>No</th> 

                <th>Title</th> 

                <th>Content</th> 

                <th width="280px">Action</th> 

            </tr> 

            @foreach ($posts as $post) 

            <tr> 

                <td>{{ ++$i }}</td> 

                <td>{{ $post->title }}</td> 

                <td>{{ $post->content }}</td> 

                <td> 

                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST"> 

                        <a class="btn btn-info" href="{{ route('posts.show', $post->id) }}">Show</a> 

                        <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}">Edit</a> 

                        @csrf 

                        @method('DELETE') 

                        <button type="submit" class="btn btn-danger">Delete</button> 

                    </form> 

                </td> 

            </tr> 

            @endforeach 

        </table> 

    </div> 

</body> 

</html> 