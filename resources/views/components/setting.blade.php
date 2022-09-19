@props(['heading'])

<section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-lg font-bold mb-8 border-b">
        <a href="/admin/posts"> Öğretmen Paneli </a>
    </h1>

    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <ul>
                <li>
                    <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">Tüm Öğrenciler</a>
                </li>
{{--                YENİ ÖĞRENCİ EKLEME KISMI BURADA!--}}
{{--                <li>--}}
{{--                    <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : ''}}">Yeni Öğrenci</a>--}}
{{--                </li>--}}

            </ul>
        </aside>

        <main class="flex-1">
            <x-panel class="max-w-m mx-auto">
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
