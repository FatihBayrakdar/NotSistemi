<!doctype html>

<title>Not Sistemi</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<style>
    html {
        scroll-behavior: smooth;
    }

    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .clamp.one-line {
        -webkit-line-clamp: 1;
    }
</style>

<body style="font-family: Open Sans, sans-serif">

<section class="px-6 py-8">
    <nav class="md:flex md:justify-end md:items-center">

        <div class="mt-8 md:mt-0 flex items-center">
            @auth
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button class="text-xs font-bold uppercase">Hoşgeldin, {{ auth()->user()->name }}!</button>
                        </x-slot>


                        @admin
                        <x-dropdown-item href="/" :active="request()->is('/')">Ana Sayfa</x-dropdown-item>

                        <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">Panel </x-dropdown-item>
                        @endadmin

                        <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Çıkış Yap</x-dropdown-item>

                        <form id="logout-form" method="POST" action="/logout" class="hidden">
                            @csrf
                        </form>
                    </x-dropdown>
                @else
                    <a href="/login" class="ml-6 text-xs font-bold uppercase">Giriş Yap</a>
            @endauth
        </div>
    </nav>

    {{ $slot }}

    <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16 h-96">

    </footer>
</section>
</body>
