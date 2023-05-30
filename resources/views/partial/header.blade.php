<div class="flex justify-between p-6" style="background-image: url('{{ asset('images/cream.jpg') }}')">
    <img class="h-28 w-28" src="{{ asset('images/logo.jpg') }}" alt="">
    <div class="h-32 text-center text-[30px] font-bold">
        Bangabandhu Sheikh Mujibur Rahman Science and Technology University, Gopalganj
    </div>
    <img class="h-28 w-28" src="{{ asset('images/cseLogo.jpg') }}" alt="">
</div>
<div class="h-16 items-center w-full flex justify-between px-4" style="background-image: url('{{ asset('images/banner-bg.svg') }}')">
    <a class="text-white font-bold text-[20px]" aria-current="page" href="{{ route('home-page') }}">Home</a>
    <div class="flex space-x-4">
        <form action="{{ route('search') }}" method="POST" class="flex flex-row">
            @csrf
            <input type="text" name="search" placeholder="Search here" class="input input-bordered input-success w-full max-w-xs" />
            <button type="submit" class="btn btn-info">Search</button>
        </form>
        <a class="text-white font-bold text-[20px]" href="{{ route('login-page') }}">Login</a>
        <a class="text-white font-bold text-[20px]" href="{{ route('signup-page') }}">Signup</a>
    </div>

</div>

