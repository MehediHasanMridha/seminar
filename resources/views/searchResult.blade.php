<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="h-screen" style="background-image: url('{{ asset('images/feather.png') }}')">
        <div class="text-center text-[30px] font-bold">Search Result</div>
        <div class="mx-auto h-1 w-96 bg-slate-900"></div>
        <main class="grid w-full grid-cols-1 place-items-center gap-4 p-3 lg:grid-cols-3">
            @if (count($data)>=1)
                @foreach ($data as $item)
                    <div class="card-compact card w-72 bg-base-100 shadow-xl lg:w-80">
                        <figure><img src="{{ asset('images/' . $item->image) }}" alt="Shoes" /></figure>
                        <div class="card-body">
                            <h2 class="card-title">{{ substr($item->title, 0, 25) . '....' }}</h2>
                            <p>{{ substr($item->description, 0, 30) . '...' }}</p>
                            <div class="card-actions justify-end">
                                <a href="{{ route('user_page', ['id' => encrypt($item->id)]) }}"
                                    class="btn-primary btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                    No Result Found
            @endif
        </main>
    </div>
</body>

</html>
