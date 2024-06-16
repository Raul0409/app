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

                <h2>Show Post</h2> 

            </div> 

            <div class="col-lg-12 mt-3"> 

                <div class="form-group"> 

                    <strong>Title:</strong> 

                    {{ $post->title }} 

                </div> 

                <div class="form-group"> 

                    <strong>Content:</strong> 

                    {{ $post->content }} 

                </div> 

                <a class="btn btn-primary" href="{{ route('posts.index') }}">Back</a> 

            </div> 

        </div> 

    </div> 

</body> 

</html> 