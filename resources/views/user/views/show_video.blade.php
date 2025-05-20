@extends('user.layouts.app')

@section('title', 'تفاصيل الدرس')

@section('user-content')
    <div class="container my-5">
        <div class="row g-4">

            <!-- جزء الفيديو -->
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/DzgPOgUwHzc?si=gsEQpB8JqGFVz55F" title="شرح الدرس" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <!-- الفيديوهات المرتبطة -->
            <div class="col-md-4">
                <div class=" shadow-sm border-0 p-3">
                    <h5 class="mb-3">فيديوهات مرتبطة</h5>
                    <div class="d-flex flex-column gap-3">
                        <div class="card">
                            <a href="https://www.youtube.com/watch?v=def456" class="d-flex align-items-center text-decoration-none text-dark">
                                <img src="https://img.youtube.com/vi/def456/mqdefault.jpg" alt="Video thumbnail" width="100" class="rounded me-3">
                                <span>مقدمة عن الأمن السيبراني</span>
                            </a>
                        </div>
                        <div class="card">
                            <a href="https://www.youtube.com/watch?v=ghi789" class="d-flex align-items-center text-decoration-none text-dark">
                                <img src="https://img.youtube.com/vi/ghi789/mqdefault.jpg" alt="Video thumbnail" width="100" class="rounded me-3">
                                <span>أساسيات اختبار الاختراق</span>
                            </a>
                        </div>
                        <div class="card">
                            <a href="https://www.youtube.com/watch?v=xyz123" class="d-flex align-items-center text-decoration-none text-dark">
                                <img src="https://img.youtube.com/vi/xyz123/mqdefault.jpg" alt="Video thumbnail" width="100" class="rounded me-3">
                                <span>أشهر أدوات Kali Linux</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>


        </div>

        <!-- عنوان + وصف -->
        <div class=" shadow-sm border-0 mt-5 p-4">
            <h4 class="mb-3">عنوان الدرس</h4>
            <p class="text-muted">
                هذا هو وصف الدرس. يمكنك هنا تقديم مقدمة عن المحتوى، الأهداف، أو ملخص لما سيتم تعلمه.
            </p>
        </div>

        <!-- زر إضافة تعليق -->
        <div class="text-end my-4">
            <button class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#commentModal">
                إضافة تعليق
            </button>
        </div>

        <!-- عرض التعليقات -->
        <div class=" mt-2 shadow-sm border-0 p-4 bg-light">
            <h5 class="mb-4">التعليقات</h5>

            <div class="mb-3 p-3 bg-white rounded shadow-sm">
                <strong>أحمد من مصر</strong>
                <p class="mb-0 text-muted">الشرح رائع وواضح جدًا، شكرًا لكم!</p>
            </div>
            <div class="mb-3 p-3 bg-white rounded shadow-sm">
                <strong>سارة من السعودية</strong>
                <p class="mb-0 text-muted">محتوى ممتاز، أتمنى إضافة المزيد من الأمثلة.</p>
            </div>
        </div>

        <!-- نافذة التعليق (Modal) -->
        <div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="commentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="commentModalLabel">إضافة تعليق</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">الاسم</label>
                        <input type="text" class="form-control" placeholder="اكتب اسمك" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">الدولة</label>
                        <input type="text" class="form-control" placeholder="الدولة" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">التعليق</label>
                        <textarea class="form-control" rows="4" placeholder="اكتب تعليقك هنا..." required></textarea>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-success px-4">إرسال</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>

    </div>

    <!-- تحميل Bootstrap Icons -->
@endsection
