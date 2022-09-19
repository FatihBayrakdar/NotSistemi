<x-layout>
    @include('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
                    <div class="flex flex-col w-full">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        <tr class="text-sm ">
                                            <td class="pl-9">
                                                <label>Öğrenci Adı</label>
                                                <label class="pl-11">Öğrenci Numarası</label>
                                                <label class="pl-11">Yazılı 1</label>
                                                <label class="pl-11">Yazılı 2</label>
                                                <label class="pl-11">Yazılı 3</label>
                                                <label class="pl-11">Performans 1</label>
                                                <label class="pl-11">Performans 2</label>
                                                <label class="pl-11">Proje</label>
                                                <label class="pl-9">Ortalama</label>
                                            </td>
                                        </tr>
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="text-sm font-medium text-gray-900 p-1">
                                                            <table>
                                                                <tr>
                                                                    <td class="">{{ $post->slug }}</td>
                                                                    <td class="pl-24">{{ $post->ogrencino }}</td>
                                                                    <td class="pl-28">{{ $post->Yazili1 }}</td>
                                                                    <td class="pl-20">{{ $post->Yazili2 }}</td>
                                                                    <td class="pl-20">{{ $post->Yazili3 }}</td>
                                                                    <td class="pl-24">{{ $post->Performans1 }}</td>
                                                                    <td class="pl-28">{{ $post->Performans2 }}</td>
                                                                    <td class="pl-24">{{ $post->Proje }}</td>
                                                                    <td class="pl-16">{{ $post->Ortalama }}</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
        @else
                <p class="text-center">Daha Notlar girilmemiştir.</p>
        @endif
    </main>
</x-layout>
