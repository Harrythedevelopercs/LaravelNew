const siteHeader = `<nav class="navbar navbar-expand-lg">
<div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="https://imagedelivery.net/nJwaBs__P2JfMUeYJ4vmjQ/b84f5464-cb64-4b56-33ee-8ce912f78000/public" alt="domain" width="100" height="100" /></a>
    <ul class="navbar-nav flex-row ms-auto me-3 d-flex d-lg-none mobile-links">
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa-solid fa-circle-user d-inline me-2"></i>LOGIN</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </li>
    </ul>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#headerNavbar" aria-controls="headerNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa-solid fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="headerNavbar">
        <ul class="navbar-nav" id="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CONTACT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">BLOG</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/ads/">ADS</a>
            </li>
            <li class="nav-item hide-mobie">
                <a class="nav-link no-line" href="/login"><i class="fa-solid fa-circle-user d-inline me-2"></i>LOGIN</a>
            </li>
            <li class="nav-item hide-mobie">
                <a class="nav-link no-line" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </li>
        </ul>
    </div>
</div>
</nav>`;

document.getElementById('header').innerHTML = siteHeader;