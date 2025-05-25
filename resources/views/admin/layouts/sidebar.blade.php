        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">Admin Panel</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
                        <li class="nav-item">
                            <a href="{{ route("dashboard") }}" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>الرئيسية</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("create_video") }}" class="nav-link">
                                <i class="nav-icon fas fa-video"></i>
                                <p>إنشاء فيديو</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>إنشاء تخصص</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>