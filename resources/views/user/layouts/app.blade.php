<!DOCTYPE html>
<html lang="ar" dir="rtl">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield("title")</title>
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet" integrity="sha384-gz3CkF6bYkRLVgxQ14PxZ7YdrV6OXjdtzX0CJyx/ROe85l3yboUlrP+0sH5+j7Ai" crossorigin="anonymous"> --}}
        @include("user.layouts.links")

    </head>

    <body>
        @include("user.layouts.nav")

        @yield("user-content")

        @include("user.layouts.script")

    </body>

</html>