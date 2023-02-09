<div class="col-12 shadow-sm bg-white">
    <div class="container py-3 d-flex">
        <a href="{{ route('welcome') }}" class="d-flex align-items-center">
            <div>
                <img src="{{ asset('images/f1.png') }}" style="width: 50px" alt="">
            </div>
            <div>
                <p class="fw-bold fs-4" style="font-family: Lobster">ridee</p>
            </div>
        </a>
        @guest
            <div class="ms-5 d-flex gap-2 text-secondary align-items-center fs-4">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-telegram"></i></a>
            </div>
            <div class="ms-auto d-flex align-items-center gap-3 fw-bold text-secondary">
                <a href="/">Home</a>
                <a href="/">Services</a>
                <a href="/">Pricing</a>
                <a href="/">About us</a>
                <a href="/">Contacts</a>
            </div>
            <div class="ms-3 d-flex align-items-center gap-2">
                <button class="btn btn-outline-secondary border border-2"><a href="{{ route('login') }}" style="font-family: Lobster"><i class="fa-solid fa-right-to-bracket me-1"></i> Login</a></button>
                <button class="btn btn-outline-secondary border border-2"><a href="{{ route('register') }}" style="font-family: Lobster"><i class="fa-solid fa-user me-1"></i> Register</a></button>
            </div>
        @endguest
        @auth
            <div class="ms-auto d-flex align-items-center gap-2">
                <div class="me-3 d-flex gap-3 ms-3 text-secondary fs-4">
                    <a href="{{ route('home') }}"><i class="fa-regular fa-message"></i></a>
                    <div class="vr"></div>
                    <a href="{{ route('home') }}"><i class="fa-regular fa-bell"></i></a>
                </div>
                <a href="{{ route('home') }}" class="d-flex align-items-center">
                    <div class="rounded-2 overflow-hidden me-3">
                        <img src="https://api.dicebear.com/5.x/bottts-neutral/svg?seed={{ Auth::user()->name }}1" style="width: 50px;height: 50px" alt="">
                    </div>
                    <div>
                        <div>
                            <p class="fw-bold text-center">{{ Auth::user()->name }}</p>
                        </div>
                        <div>
                            <p class="text-center text-secondary">{{ Auth::user()->typeName() }}</p>
                        </div>
                    </div>
                    <div class="d-flex ms-2 text-secondary fs-4">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa-solid fa-right-to-bracket"></i></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </a>
            </div>
        @endauth
    </div>
</div>

