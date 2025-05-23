@extends("user.layouts.app")

@section("title", "login")

@section("user-content")

    <section class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <div class=" shadow rounded-4 p-4 text-end">
                <h4 class="mb-4 text-center">تسجيل الدخول</h4>
                @if(session('errorLogin'))
                    <div id="errorBox" class="alert alert-danger alert-dismissible fade show" role="alert" style="position: relative; padding-right: 2.5rem;">
                        {{ session('errorLogin') }}
                        <button type="button" class="close-btn" onclick="document.getElementById('errorBox').style.display='none'" aria-label="Close" 
                            style="position: absolute; top: 8px; right: 10px; background: none; border: none; font-size: 1.5rem; font-weight: bold; color: #721c24; cursor: pointer;">
                            &times;
                        </button>
                    </div>
                @endif
                <form action="{{ route('login_process') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">البريد الإلكتروني</label>
                        <input type="email" class="form-control text-end" id="email" name="email" required placeholder="ادخل بريدك الإلكتروني">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">كلمة المرور</label>
                        <input type="password" class="form-control text-end" id="password" name="password" required placeholder="ادخل كلمة المرور">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary rounded-pill">تسجيل الدخول</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
