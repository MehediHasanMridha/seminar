
<!doctype html>
<html lang="en">

<head>
  <title>Post</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <main>
    @if (Session::has('success'))
        <div class="bg-primary text-center text-white">
            <p>{{Session::get('success')}}</p>
        </div>
    @endif
    @if (Session::has('error'))
        <div class="bg-danger text-center text-white">
            <p>{{Session::get('error')}}</p>
        </div>
    @endif
  <div class="container mt-5">
    <h2 class="text-center">Add New Post</h2>
    <form action="{{ route('post.create') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp">
        @error('title')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
      <div class="form-group">
        <label for="time">Time</label>
        <input type="text" class="form-control" name="time" id="time" aria-describedby="timeHelp">
        @error('time')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" class="form-control" name="description" id="description" cols="30" rows="5"></textarea>
        @error('description')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
      <div class="form-group">
        <label for="image">Post Image</label>
        <input type="file" class="form-control" name="image" id="image">
        @error('image')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
      <div class="d-flex justify-content-center mt-4">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>      
    </form>
  </div>


  </main>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>