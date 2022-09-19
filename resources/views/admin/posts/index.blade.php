<x-layout>
    <x-setting heading="Manage Posts">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr class="text-s">
                                <td class="space-x-24">
                                    <label>Adı Soyadı</label>
                                    <label>Numarası</label>
                                    <label>Ortalaması</label>
                                </td>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <td class=" py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="text-sm font-medium text-gray-900 p-1 ">
                                                    <table class="">
                                                        <tr class="">
                                                            <td>{{ $post->slug }} </td>
                                                            <td class="pl-32">{{ $post->ogrencino }}</td>
                                                            <td class="pl-36">{{ $post->Ortalama }}</td>
                                                        </tr>
                                                    </table>
                                            </div>
                                        </div>
                                    </td>

                                    <td class=" py-4 whitespace-nowrap text-right text-sm font-medium ">
                                        <a href="/admin/posts/{{ $post->id }}/edit" class="text-blue-500 hover:text-blue-600">Düzenle</a>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <form method="POST" action="/admin/posts/{{ $post->id }}">
                                            @csrf
                                            @method('DELETE')

                                            <button class="text-xs text-gray-400">Sil</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-setting>
</x-layout>
