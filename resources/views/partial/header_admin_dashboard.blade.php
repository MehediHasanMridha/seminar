<div class="flex justify-between p-6" style="background-image: url('{{ asset('images/cream.jpg') }}')">
    <img class="h-28 w-28" src="{{ asset('images/logo.jpg') }}" alt="">
    <div class="h-32 text-center text-[30px] font-bold">
        Bangabandhu Sheikh Mujibur Rahman Science and Technology University, Gopalganj
    </div>
    <img class="h-289 w-28" src="{{ asset('images/cseLogo.jpg') }}" alt="">
</div>
<div class="flex h-16 w-full items-center justify-between px-4"
    style="background-image: url('{{ asset('images/banner-bg.svg') }}')">
    <div class="flex space-x-4">
        <a class="text-[20px] font-bold text-white" aria-current="page" href="{{ route('home-page') }}">Home</a>
        <a class="text-[20px] font-bold text-white" href="{{ route('post-page') }}">Post</a>
        <a class="text-[20px] font-bold text-white" href="{{ route('hot-image-page') }}">Slide Image</a>
    </div>
    <div class="flex space-x-4">
        <form action="{{ route('search') }}" method="POST" class="flex flex-row">
            @csrf
            <input type="text" name="search" placeholder="Search here" class="input input-bordered input-success w-full max-w-xs" />
            <button type="submit" class="btn btn-info">Search</button>
        </form>
        <a class="text-[20px] font-bold text-white" href="logout">Logout</a>
    </div>
</div>




{{-- <nav class="navbar-expand-lg bg-dark navbar">
    <div class="container-fluid">

        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-lg-0 mb-2">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('user.dashboard') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('user.logout') }}">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('post-page') }}">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('hot-image-page') }}">Hot Image</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="me-2 form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn-outline-success btn" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav> --}}
