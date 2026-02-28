<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_partials.head')
    </head>

    @php
        $isDocsPage = \Illuminate\Support\Str::startsWith(trimPath($page->getPath()), 'docs');
    @endphp

    <body class="flex flex-col justify-between min-h-screen bg-background text-foreground leading-normal font-sans antialiased transition-colors duration-300">
        @include('_partials.header')

        @yield('nav-toggle')

        <main role="main" class="flex-1">
            @yield('body')
        </main>

        @include('_partials.footer')

        @include('_partials.scripts')
    </body>
</html>
