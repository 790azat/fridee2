<div class="col-12 shadow-sm bg-white">
    <div class="container py-3 d-flex">
        <a href="{{ route('welcome') }}" class="d-flex align-items-center">
            <div>
                <img src="{{ asset('images/f1.png') }}" style="width: 50px" alt="">
            </div>
            <div>
                <p class="fw-bold fs-4" style="font-family: Lobster">ridee</p>
            </div>
            <div class="ms-5 d-flex gap-2 text-secondary align-items-center fs-4">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-telegram"></i></a>
            </div>
        </a>
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
    </div>
</div>
