<!-- resources/views/posts/create.blade.php --> 

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

                <h2>Add New Post</h2> 

            </div> 

            <div class="col-lg-12 mt-3"> 

                <form action="{{ route('posts.store') }}" method="POST"> 

                    @csrf 

                    <div class="form-group"> 

                        <label for="title">Title</label> 

                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title"> 

                    </div> 

                    <div class="form-group"> 

                        <label for="content">Content</label> 

                        <textarea name="content" class="form-control" id="content" placeholder="Enter Content"></textarea> 

                    </div> 

                    <button type="submit" class="btn btn-primary">Submit</button> 

                </form> 

            </div> 

        </div> 

    </div> 

</body> 

</html> 