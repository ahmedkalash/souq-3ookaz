<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" dir="{{Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocaleDirection()}}">

<head>
    @include('customer.layouts.includes.head')

    @yield('head')

    @include('customer.layouts.includes.style')

</head>

<body>

    @include('customer.layouts.includes.loader')

    @include('customer.layouts.includes.header')


    @yield('content')



    @include('customer.layouts.includes.footer')

    @include('customer.layouts.includes.scripts')

    @include('sweetalert::alert')


</body>

</html>
