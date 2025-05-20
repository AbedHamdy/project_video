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
        <div class="row justify-content-center g-5">

            <div class="col-md-3">
                <a href="https://www.youtube.com/watch?v=abc123" target="_blank"
                    style="text-decoration: none; color: inherit;">
                    <div class="card h-100">
                        <img src="https://img.youtube.com/vi/abc123/hqdefault.jpg" class="card-img-top" alt="صورة الفيديو">
                        <div class="card-body">
                            <h6 class="card-title">مقدمة عن الأمن السيبراني</h6>
                            <p class="card-text" style="font-size: 14px;">تعرف على الأساسيات ومجالات العمل في الأمن
                                السيبراني.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="https://www.youtube.com/watch?v=def456" target="_blank"
                    style="text-decoration: none; color: inherit;">
                    <div class="card h-100">
                        <img src="https://img.youtube.com/vi/def456/hqdefault.jpg" class="card-img-top" alt="صورة الفيديو">
                        <div class="card-body">
                            <h6 class="card-title">كيف تبدأ في الاختراق الأخلاقي</h6>
                            <p class="card-text" style="font-size: 14px;">شرح مبسط للمبتدئين حول أدوات وأساليب اختبار
                                الاختراق.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="https://www.youtube.com/watch?v=ghi789" target="_blank"
                    style="text-decoration: none; color: inherit;">
                    <div class="card h-100">
                        <img src="https://img.youtube.com/vi/ghi789/hqdefault.jpg" class="card-img-top" alt="صورة الفيديو">
                        <div class="card-body">
                            <h6 class="card-title">تعلم لغة PHP بسرعة</h6>
                            <p class="card-text" style="font-size: 14px;">دورة سريعة ومركزة لفهم أساسيات البرمجة بـ PHP.</p>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col-md-3">
                <a href="https://www.youtube.com/watch?v=ghi789" target="_blank"
                    style="text-decoration: none; color: inherit;">
                    <div class="card h-100">
                        <img src="https://img.youtube.com/vi/ghi789/hqdefault.jpg" class="card-img-top" alt="صورة الفيديو">
                        <div class="card-body">
                            <h6 class="card-title">تعلم لغة PHP بسرعة</h6>
                            <p class="card-text" style="font-size: 14px;">دورة سريعة ومركزة لفهم أساسيات البرمجة بـ PHP.</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </section>

    <section class="container my-5">
    <h2 class="text-center mb-4">فريق العمل</h2>
    <div class="row justify-content-center g-4">

        <!-- عضو الفريق الأول -->
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center p-3">
                <img src="https://via.placeholder.com/150" class="rounded-circle mx-auto shadow mb-3" alt="أحمد علي" width="100" height="100">
                <div class="card-body">
                    <h5 class="card-title mb-1">أحمد علي</h5>
                    <a href="https://www.facebook.com/ahmed.ali" target="_blank" class="btn btn-outline-primary btn-sm rounded-pill">
                        <i class="bi bi-facebook me-1"></i> فيسبوك
                    </a>
                </div>
            </div>
        </div>

        <!-- عضو الفريق الثاني -->
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center p-3">
                <img src="https://via.placeholder.com/150" class="rounded-circle mx-auto shadow mb-3" alt="سارة محمد" width="100" height="100">
                <div class="card-body">
                    <h5 class="card-title mb-1">سارة محمد</h5>
                    <a href="https://www.facebook.com/sarah.mohamed" target="_blank" class="btn btn-outline-primary btn-sm rounded-pill">
                        <i class="bi bi-facebook me-1"></i> فيسبوك
                    </a>
                </div>
            </div>
        </div>

        <!-- عضو الفريق الثالث -->
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center p-3">
                <img src="https://via.placeholder.com/150" class="rounded-circle mx-auto shadow mb-3" alt="يوسف إبراهيم" width="100" height="100">
                <div class="card-body">
                    <h5 class="card-title mb-1">يوسف إبراهيم</h5>
                    <a href="https://www.facebook.com/youssef.ibrahim" target="_blank" class="btn btn-outline-primary btn-sm rounded-pill">
                        <i class="bi bi-facebook me-1"></i> فيسبوك
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>




@endsection