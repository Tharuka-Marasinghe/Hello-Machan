<div class="p-0 container-xxl position-relative">
    <nav
        class="px-4 py-3 navbar navbar-expand-lg navbar-dark bg-dark px-lg-5 py-lg-0">
        <a href="" class="p-0 navbar-brand">
            <h1 class="m-0 text-primary">
                <i class="fa fa-utensils me-3"></i>Hello Machan
            </h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="py-0 navbar-nav ms-auto pe-4">
                <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                <a href="{{ route('menu') }}" class="nav-item nav-link">Menu</a>
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>

            </div>
            <a href="{{ route('login') }}" class="px-4 py-2 btn btn-primary">Login/Register</a>
            <a href="{{ route('cart') }}" class="ms-3 btn btn-primary">
                <i class="fa fa-shopping-cart me-2"></i>Cart></a>
        </div>
    </nav>
</div>