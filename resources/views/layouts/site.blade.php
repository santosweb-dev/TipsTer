<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('layouts.includes.header')

    @yield('content')

    @include('layouts.includes.footer')
    @include('layouts.includes.script')

</body>
</html>