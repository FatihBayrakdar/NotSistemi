<x-layout>
    <x-setting>

        <script>
            function myFunction() {
                var checkBox = document.getElementById("myCheck");

                if (checkBox.checked == false){
                    document.getElementById("Yazili1").disabled = true;
                } else {
                    document.getElementById("Yazili1").disabled = false;
                }
            }

            function myFunction1() {
                var checkBox = document.getElementById("myCheck1");

                if (checkBox.checked == false){
                    document.getElementById("Yazili2").disabled = true;
                } else {
                    document.getElementById("Yazili2").disabled = false;
                }
            }

            function myFunction2() {
                var checkBox = document.getElementById("myCheck2");

                if (checkBox.checked == false){
                    document.getElementById("Yazili3").disabled = true;
                } else {
                    document.getElementById("Yazili3").disabled = false;
                }
            }

            function myFunction3() {
                var checkBox = document.getElementById("myCheck3");

                if (checkBox.checked == false){
                    document.getElementById("Performans1").disabled = true;
                } else {
                    document.getElementById("Performans1").disabled = false;
                }
            }

            function myFunction4() {
                var checkBox = document.getElementById("myCheck4");

                if (checkBox.checked == false){
                    document.getElementById("Performans2").disabled = true;
                } else {
                    document.getElementById("Performans2").disabled = false;
                }
            }

            function myFunction5() {
                var checkBox = document.getElementById("myCheck5");

                if (checkBox.checked == false){
                    document.getElementById("Proje").disabled = true;
                } else {
                    document.getElementById("Proje").disabled = false;
                }
            }
        </script>

        <script>
            function hesapla(){
                var ort;
                s1 = parseInt(document.getElementById('Yazili1').value);
                s2 = parseInt(document.getElementById('Yazili2').value);
                s3 = parseInt(document.getElementById('Yazili3').value);
                s4 = parseInt(document.getElementById('Performans1').value);
                s5 = parseInt(document.getElementById('Performans2').value);
                s6 = parseInt(document.getElementById('Proje').value);

                ort=(s1+s2+s3+s4+s5+s6)/6;

                document.getElementById('Ortalama').value=ort;
            }

        </script>

        <table>

            <form method="POST" name="form1" action="/admin/posts/{{ $post->id }}" >
                @csrf
                @method('PATCH')

                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Yazılı 1
                        <input type="checkbox" id="myCheck" onclick="myFunction()">
                    </label>

                <x-form.edit disabled="false" onkeyup="hesapla()" onchange="this.value = (this.value > 100) ? 100 : ((this.value < 0) ? 0 : this.value);" name="Yazili1" :value="old('Yazili1', $post->Yazili1)" required />

                    <br>
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Yazılı 2
                        <input type="checkbox" id="myCheck1" onclick="myFunction1()">
                    </label>

                <x-form.edit disabled="false" onkeyup="hesapla()" onchange="this.value = (this.value > 100) ? 100 : ((this.value < 0) ? 0 : this.value);" name="Yazili2" :value="old('Yazili2', $post->Yazili2)" required />

                    <br>
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Yazılı 3
                        <input type="checkbox" id="myCheck2" onclick="myFunction2()">
                    </label>
                <x-form.edit disabled="false" onkeyup="hesapla()" onchange="this.value = (this.value > 100) ? 100 : ((this.value < 0) ? 0 : this.value);" name="Yazili3" :value="old('Yazili3', $post->Yazili3)" required />

                    <br>
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Performans 1
                        <input type="checkbox" id="myCheck3" onclick="myFunction3()">
                    </label>

                <x-form.edit disabled="false" onkeyup="hesapla()" onchange="this.value = (this.value > 100) ? 100 : ((this.value < 0) ? 0 : this.value);" name="Performans1" :value="old('Performans1', $post->Performans1)" required />

                    <br>
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Performans 2
                        <input type="checkbox" id="myCheck4" onclick="myFunction4()">
                    </label>

                <x-form.edit disabled="false" onkeyup="hesapla()" onchange="this.value = (this.value > 100) ? 100 : ((this.value < 0) ? 0 : this.value);" name="Performans2" :value="old('Performans2', $post->Performans2)" required />

                     <br>
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Proje
                        <input type="checkbox" id="myCheck5" onclick="myFunction5()">
                    </label>

                <x-form.edit disabled="false" onkeyup="hesapla()" onchange="this.value = (this.value > 100) ? 100 : ((this.value < 0) ? 0 : this.value);" name="Proje" :value="old('Proje', $post->Proje)" required />

                    <br>
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Ortalama
                    </label>

                <x-form.edit disabled="false" id="Ortalama" name="Ortalama" :value="old('Ortalama', $post->Ortalama)" required/>
                <x-form.button>Güncelle</x-form.button>
            </form>
        </table>
    </x-setting>
</x-layout>
