<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <img data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="300"
     data-aos-offset="0" class="h-[400px] w-full" src="{{ asset('images/' . $data->image) }}" alt="">
    <div class="mt-4 text-center text-[50px] font-bold">{{ $data->title }}</div>
    <div class="mx-auto mt-4 h-[2px] w-96 bg-slate-800"></div>
    <div class="p-4 text-[20px]">
        {{ $data->description }}
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
