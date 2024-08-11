<!DOCTYPE html>
<html lang="en">
@include('front.layouts.base._meta')
<body>
@include('front.layouts.partials._header')
@yield('content')
@yield('posts')
@yield('post_details')
@yield('create_post')
@include('front.layouts.partials._footer')
@include('front.layouts.base._script')
</body>
</html>
