<!doctype html>
<html lang="en">

<head>
    <title>Seminar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>

<body>
    <header>
        <!-- place navbar here -->
        @include('partial/header')
    </header>
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
                        <div class="card-actions justify-end">
                            <a href="{{ route('show-page', ['id' => encrypt($item->id)]) }}"
                                class="btn-primary btn">Read
                                More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </main>
    </div>
    @include('partial.footer')
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
</body>

</html>
