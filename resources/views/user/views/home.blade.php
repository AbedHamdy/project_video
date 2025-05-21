@extends("user.layouts.app")

@section("title", "Home")

@section("user-content")

    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://img.pikbest.com/wp/202348/computer-mobile-phone-website-background-with-3d-and-book-for-digital-education_9775059.jpg!w700wp"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption text-end">
                    <h1>تجربة تعليمية متطورة في متناول يدك</h1>
                    <p>اكتشف أساليب التعليم الجديدة عبر الأجهزة الرقمية و الفيديوهات بسهولة وفعالية</p>
                    <div class="mt-3">
                        <a class="btn btn-primary me-2" href="{{ route("video") }}">استكشف الآن</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="container my-5">
        <h2 class="text-center mb-4">الفيديوهات المميزة</h2>
        @if (session('error'))
            <div class="alert alert-danger justify-content-center text-center" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <div class="row justify-content-center g-5">
            @if($videos->count() > 0)
                @foreach($videos as $video)
                    <div class="col-md-3">
                        <a href="{{ route("show_video" , $video->id) }}" style="text-decoration: none; color: inherit;">
                            <div class="card h-100">
                                <img src="{{ asset('storage/' . $video->coverImage->image) }}" class="card-img-top" alt="{{ $video->coverImage->image_alt }}">
                                <div class="card-body">
                                    <h6 class="card-title">
                                        {{ $video->title }}
                                    </h6>
                                    <p class="card-text" style="font-size: 14px;">
                                        {{ Str::limit($video->description, 50) }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center mt-4">
                    {{ $videos->links() }}
                </div>
            @else
                <div class="col-12 d-flex justify-content-center align-items-center" style="height: 150px;">
                    <div class="border rounded p-4 bg-light" style="min-width: 300px;">
                        <p class="text-muted fs-5 fw-semibold mb-0 text-center">لا يوجد فيديوهات حالياً.</p>
                    </div>
                </div>
            @endif

        </div>
    </section>


    <section class="container my-5">
        <h2 class="text-center mb-4">فريق العمل</h2>
        <div class="row justify-content-center g-4">

            <!-- عضو الفريق الأول -->
            <div class="col-md-3">
                <div class="card border-0 shadow-sm text-center p-3">
                    <img src="https://via.placeholder.com/150" class="rounded-circle mx-auto shadow mb-3" alt="أحمد علي"
                        width="100" height="100">
                    <div class="card-body">
                        <h5 class="card-title mb-1">أحمد علي</h5>
                        <a href="https://www.facebook.com/ahmed.ali" target="_blank"
                            class="btn btn-outline-primary btn-sm rounded-pill">
                            <i class="bi bi-facebook me-1"></i> فيسبوك
                        </a>
                    </div>
                </div>
            </div>

            <!-- عضو الفريق الثاني -->
            <div class="col-md-3">
                <div class="card border-0 shadow-sm text-center p-3">
                    <img src="https://via.placeholder.com/150" class="rounded-circle mx-auto shadow mb-3" alt="سارة محمد"
                        width="100" height="100">
                    <div class="card-body">
                        <h5 class="card-title mb-1">سارة محمد</h5>
                        <a href="https://www.facebook.com/sarah.mohamed" target="_blank"
                            class="btn btn-outline-primary btn-sm rounded-pill">
                            <i class="bi bi-facebook me-1"></i> فيسبوك
                        </a>
                    </div>
                </div>
            </div>

            <!-- عضو الفريق الثالث -->
            <div class="col-md-3">
                <div class="card border-0 shadow-sm text-center p-3">
                    <img src="https://via.placeholder.com/150" class="rounded-circle mx-auto shadow mb-3" alt="يوسف إبراهيم"
                        width="100" height="100">
                    <div class="card-body">
                        <h5 class="card-title mb-1">يوسف إبراهيم</h5>
                        <a href="https://www.facebook.com/youssef.ibrahim" target="_blank"
                            class="btn btn-outline-primary btn-sm rounded-pill">
                            <i class="bi bi-facebook me-1"></i> فيسبوك
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>




@endsection