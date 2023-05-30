<!doctype html>
<html lang="en">

<head>
    <title>Seminar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <header>
        <!-- place navbar here -->
        @include('partial/header_admin_dashboard')

    </header>
    <main>
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach ($img as $item)
                    <div class="swiper-slide">
                        <img class="h-[400px] w-full" src="{{ asset('hot_images/' . $item->image) }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="py-16" style="background-image: url('{{ asset('images/feather.png') }}')">
            <div class="text-center text-[30px] font-bold">Seminar And Workshop</div>
            <div class="mx-auto h-1 w-96 bg-slate-900"></div>
            <main class="grid w-full grid-cols-1 place-items-center gap-4 p-3 lg:grid-cols-3">
                @foreach ($data as $item)
                    <div class="card-compact card w-72 bg-base-100 shadow-xl lg:w-80">
                        <figure><img src="{{ asset('images/' . $item->image) }}" alt="Shoes" /></figure>
                        <div class="card-body">
                            <h2 class="card-title">{{ substr($item->title, 0, 25) . '....' }}</h2>
                            <p>{{ substr($item->description, 0, 30) . '...' }}</p>
                            <div class="card-actions justify-between">
                                <a href='delete/{{ $item->id }}' class="btn btn-danger bg-red-600">Delete</a>
                                {{-- <a href="#" class="btn btn-primary">Edit</a> --}}
                                <a href="{{ route('admin_page', ['id' => encrypt($item->id)]) }}"
                                    class="btn-primary btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </main>
        </div>
        <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js'
        const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction:false,
            },
        });
    </script>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>
