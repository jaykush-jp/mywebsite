<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Section</title>
    @yield('meta')

    @include('layouts.frontend.partials.style')
    @yield('style')

</head>

<body>

    @include('layouts.frontend.partials.header')

    @yield('content')

    {{-- =====**Successfully Popup Code --}}
    <div style="position:absolute; top:75px; right: 10px; z-index: 9999;">
        @if (session()->has('success'))
            <div class="alert alert-success fade show" role="alert">
                <span class="alert-inner--text"><strong>Success !</strong> {{ session()->get('success') }}</span>
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger fade show" role="alert">
                <span class="alert-inner--text"><strong>Error !</strong> {{ session()->get('error') }}</span>
            </div>
        @endif
    </div>

    <script type="text/javascript">
        setTimeout(function() {
            $(".alert").fadeOut();
        }, 3000);
    </script>

    @php
        $statusMessage = '';
        if (session()->get('success')) {
            $statusMessage = session()->get('success');
        } elseif (session()->get('error')) {
            $statusMessage = session()->get('error');
        } elseif (session()->get('failure')) {
            $statusMessage = session()->get('failure');
        }
    @endphp

    @include('layouts.frontend.partials.footer')
    @include('layouts.frontend.partials.script')
    @yield('script')


</body>

</html>
