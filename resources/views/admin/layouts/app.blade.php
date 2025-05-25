<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>@yield("title")</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- AdminLTE CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
        <style>
            :root {
                --gold: #C6A45C;
                --beige: #F5F0E5;
                --dark-brown: #8B7355;
            }
            body {
                background-color: var(--beige);
            }
            .main-header {
                background: linear-gradient(to right, var(--gold), var(--dark-brown)) !important;
            }
            .main-header .navbar-light .navbar-nav .nav-link {
                color: white !important;
            }
            .main-sidebar {
                background: linear-gradient(180deg, var(--dark-brown), var(--gold)) !important;
            }
            .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active {
                background-color: rgba(255,255,255,0.2);
            }
            .brand-link {
                border-bottom: 1px solid rgba(255,255,255,0.2) !important;
            }
            .content-wrapper {
                background-color: var(--beige);
            }
            .card {
                border: none;
                box-shadow: 0 4px 6px rgba(139, 115, 85, 0.1);
            }
            .card-title {
                color: var(--dark-brown);
            }
            .main-footer {
                background-color: var(--dark-brown);
                color: white;
                border-top: 1px solid var(--gold);
            }
        </style>
    </head>
    <body class="hold-transition sidebar-collapse">
    <div class="wrapper">

        <!-- Navbar -->
        @include("admin.layouts.navbar")

        <!-- Main Sidebar Container -->
        @include("admin.layouts.sidebar")

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <section class="content pt-4">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>

        @include("admin.layouts.footer")

    </div>

    @include("admin.layouts.script")
    </body>
</html>
