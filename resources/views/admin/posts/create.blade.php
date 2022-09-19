<x-layout>
    <x-setting heading="Yeni Öğrenci">
        <form action="/admin/posts" method="POST" enctype="multipart/form-data">
            @csrf

            <x-form.input name="Öğrenci Adı" required />
            <x-form.input name="Öğrenci Numarası" required />
            <x-form.input name="Yazili 1" required />
            <x-form.input name="Yazili 2" required />
            <x-form.input name="Yazili 3" required />
            <x-form.input name="Performans 1" required />
            <x-form.input name="Performans 2" required />
            <x-form.input name="Proje" required />
            <x-form.input name="Ortalama" required />

            <x-form.field>
                <x-form.label name="category"/>

                <select name="category_id" id="category_id" required>
                    @foreach(\App\Models\Category::all() as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('$category_id') == $category->id ? 'selected' : ''}}
                        >{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                <x-form.error name="category"/>
            </x-form.field>

            <x-form.button>Ekle</x-form.button>
        </form>
    </x-setting>
</x-layout>
