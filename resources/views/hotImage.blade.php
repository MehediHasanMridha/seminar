<!doctype html>
<html lang="en">

<head>
    <title>Post</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <main>
        @if (Session::has('success'))
            <div class="bg-primary text-center text-white">
                <p>{{ Session::get('success') }}</p>
            </div>
        @endif
        @if (Session::has('error'))
            <div class="bg-danger text-center text-white">
                <p>{{ Session::get('error') }}</p>
            </div>
        @endif
        <div class="container mt-5">
            <h2 class="text-center">Add New Hot Image</h2>
            <form action="{{ route('hot.image.create') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title"
                        aria-describedby="titleHelp">
                    @error('title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                    @error('image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn-primary btn">Submit</button>
                </div>
            </form>
        </div>

        <h1 class="mb-4 text-center">Hot Image</h1>
        <main class="grid w-full grid-cols-1 place-items-center gap-4 p-3 lg:grid-cols-3">
            @foreach ($hot_images as $item)
                <div class="card-compact card w-72 bg-base-100 shadow-xl lg:w-80">
                    <figure><img src="{{ asset('hot_images/' . $item->image) }}" alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">{{ substr($item->title, 0, 25) . '....' }}</h2>
                        <div class="card-actions justify-between">
                            @if ($item->status == 'active')
                                <a href="change_status/{{ $item->id }}" class="btn-warning btn">Deactivate</a>
                            @else
                                <a href="change_status/{{ $item->id }}"
                                    class="btn-accent btn-active btn">Activate</a>
                            @endif
                            <a href="delete_hot_image/{{ $item->id }}" class="btn-danger btn bg-red-600">Delete</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </main>
        </div>
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
