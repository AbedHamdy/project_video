@extends('user.layouts.app')

@section('title', 'تفاصيل الدرس')

@section('user-content')
    <div class="container my-5">
        <div class="row g-4">

            <!-- جزء الفيديو -->
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="ratio ratio-16x9">
                        <iframe src="{{ $video->link }}" title="فيديو" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <!-- الفيديوهات المرتبطة -->
            <div class="col-md-4">
                <div class=" shadow-sm border-0 p-3">
                    <h5 class="mb-3">فيديوهات مرتبطة</h5>
                    <div class="d-flex flex-column gap-3">
                        @foreach($relatedVideos as $relatedVideo)
                            <div id="video-container">
                                {{-- عرض صورة الغلاف كبداية --}}
                                <a href="javascript:void(0)" onclick="playVideo()">
                                    <img src="{{ asset( $video->coverImage->path) }}" 
                                        alt="{{ $video->coverImage->image_alt }}" 
                                        style="cursor:pointer; max-width: 100%; height: auto;">
                                </a>
                            </div>

                            {{-- <div class="card">
                                <a href="{{ route('show_video', $relatedVideo->id) }}" class="d-flex align-items-center text-decoration-none text-dark">
                                    <img src="{{ asset($relatedVideo->coverImage->image) }}" alt="Video thumbnail" width="100" class="rounded me-3">
                                    <span>{{ $relatedVideo->title }}</span>
                                </a>
                            </div> --}}
                        @endforeach
                        {{-- <div class="card">
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
                        <div class="card">
                            <a href="https://www.youtube.com/watch?v=xyz123" class="d-flex align-items-center text-decoration-none text-dark">
                                <img src="https://img.youtube.com/vi/xyz123/mqdefault.jpg" alt="Video thumbnail" width="100" class="rounded me-3">
                                <span>أشهر أدوات Kali Linux</span>
                            </a>
                        </div> --}}

                    </div>
                </div>
            </div>

            {{-- عدد المشاهدات --}}
            <div class="p-2">
                <span class="text-muted" style="opacity: 0.6;">👁️ 12,345 مشاهدة</span>
            </div>

        </div>

        <!-- عنوان + وصف -->
        <div class=" shadow-sm border-0 mt-5 p-4">
            <h4 class="mb-3">{{ $video->title }}</h4>
            <p class="text-muted">
                {{ $video->description }}
            </p>
        </div>

        {{-- المحتوي --}}
        <div class="shadow-sm border-0 mt-5 p-4">
            <h4 class="mb-3">المحتوى</h4>

            <div class="content-text mb-4">
                <p class="text-muted">
                    {{ $video->content }}
                </p>
            </div>

            @if($video->contentImages->count())
                <div class="row g-3">
                    @foreach($video->contentImages as $contentImage)
                        <div class="col-6 col-md-4 col-lg-3">
                            <img src="{{ asset($contentImage->image) }}" alt="محتوى الصورة" class="img-fluid rounded">
                        </div>
                    @endforeach
                </div>
            @endif
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
            @if($video->comments->count())
                @foreach($video->comments as $comment)
                    <div class="mb-3 p-3 bg-white rounded shadow-sm">
                        <strong>{{ $comment->name }} من {{ $comment->country }}</strong>
                        <p class="mb-0 text-muted">{{ $comment->content }}</p>
                    </div>
                @endforeach
            @else
                <div class="alert alert-info text-center" role="alert">
                    لا توجد تعليقات بعد.
                </div>
            @endif
            {{-- <div class="mb-3 p-3 bg-white rounded shadow-sm">
                <strong>أحمد من مصر</strong>
                <p class="mb-0 text-muted">الشرح رائع وواضح جدًا، شكرًا لكم!</p>
            </div>
            <div class="mb-3 p-3 bg-white rounded shadow-sm">
                <strong>سارة من السعودية</strong>
                <p class="mb-0 text-muted">محتوى ممتاز، أتمنى إضافة المزيد من الأمثلة.</p>
            </div> --}}
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

    <script>
        function playVideo() {
            document.getElementById('video-container').innerHTML = `
                <iframe 
                    src="{{ $video->link }}?autoplay=1" 
                    title="{{ $video->title }}"
                    allow="autoplay"
                    allowfullscreen
                    width="100%"
                    height="500px">
                </iframe>
            `;
        }
    </script>

    <!-- تحميل Bootstrap Icons -->
@endsection
