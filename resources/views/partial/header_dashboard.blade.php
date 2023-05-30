<div class="flex justify-between p-6" style="background-image: url('{{ asset('images/cream.jpg') }}')">
    <img class="h-28 w-28" src="{{ asset('images/logo.jpg') }}" alt="">
    <div class="h-32 text-center text-[30px] font-bold">
        Bangabandhu Sheikh Mujibur Rahman Science and Technology University, Gopalganj
    </div>
    <img class="h-289 w-28" src="{{ asset('images/cseLogo.jpg') }}" alt="">
</div>
<div class="flex h-16 w-full items-center justify-between px-4"
    style="background-image: url('{{ asset('images/banner-bg.svg') }}')">
    <a class="text-[20px] font-bold text-white" aria-current="page" href="{{ route('home-page') }}">Home</a>
    <div class="flex space-x-4">
        <a class="text-[20px] font-bold text-white" href="student_logout">Logout</a>
    </div>
</div>
