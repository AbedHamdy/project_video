<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{ route("home") }}">الرئيسية</a>
                <a class="nav-link" href="{{ route("video") }}">الفيديوهات</a>
                <a class="nav-link" href="{{ route("login") }}">تسجيل الدخول</a>
            </div>
        </div>
    </div>
</nav>