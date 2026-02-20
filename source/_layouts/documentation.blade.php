@extends('_layouts.master')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section('body')
<section class="container max-w-screen-xl mx-auto px-4 lg:px-8 py-8 md:py-12">
    <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
        {{-- Sidebar Navigation --}}
        <nav id="js-nav-menu" class="nav-menu hidden lg:block w-full lg:w-64 lg:flex-shrink-0 sticky top-14 self-start">
            <div class="lg:py-4">
                @include('_nav.menu', ['items' => $page->navigation])
            </div>
        </nav>

        {{-- Main Content --}}
        <main class="flex-1 min-w-0">
            <div class="DocSearch-content prose prose-slate max-w-none" v-pre>
                @yield('content')
            </div>
        </main>
    </div>
</section>
@endsection
