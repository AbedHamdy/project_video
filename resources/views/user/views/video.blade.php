@extends("user.layouts.app")

@section("title", "Videos")

@section("user-content")

    <section class="container my-5">
        <h2 class="text-center mb-4">الفيديوهات</h2>
        @if (session('error'))
            <div class="alert alert-danger justify-content-center text-center" role="alert">
                {{ session('error') }}
            </div>
        @endif
        @if($videos->isEmpty())
            <div class="alert alert-info text-center" role="alert">
                لا يوجد فيديوهات حالياً.
            </div>
        @else
            <div class="row justify-content-center g-5">
                @foreach($videos as $video)
                    <div class="col-md-4">
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
                {{-- <div class="col-md-4">
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
                </div> --}}
            </div>
            <div class="d-flex justify-content-right mt-4">
                {{ $videos->links() }}
            </div>
        @endif
        
        
    </section>


@endsection