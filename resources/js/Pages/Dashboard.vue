<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>

        <!--MEXE AQUI PRA MEXER TUDO AS PARADA-->
        <div class="container mt-10 ml-10 p-4">
            <div class="flex">
                <!-- Conteúdo à esquerda -->
                <div class="bg-gray-900 p-4 rounded-lg shadow-md w-80 mr-4 h-40">

                    <a href="#"
                        class="flex items-center space-x-4 text-gray-300 visited:text-slate-50 w-min divide-none mt-2">
                        <img src="../components/img/casa.png" alt="icone de casa" class="w-5 h-5">
                        <p class="ml-2">Início</p>
                    </a>

                    <a href="#"
                        class="flex items-center space-x-4 text-gray-300 visited:text-slate-50 w-min divide-none mt-2">
                        <img src="../components/img/lupa.png" alt="icone de lupa" class="w-5 h-5">
                        <p class="ml-2">Buscar</p>
                    </a>

                    <div class="bg-gray-900 p-4 rounded-lg w-80 mt-16 ">
                        <a href="#"
                            class="flex items-center space-x-4 text-gray-300 visited:text-slate-50 w-max divide-none mt-2 mb-4">
                            <img src="../components/img/biblioteca.png" alt="icone de lupa" class="w-6 h-6">
                            <p class="ml-4">Sua Biblioteca</p>
                            <img src="../components/img/plus.png" alt="icone de mais, para criar playlist"
                                class="w-6 h-6 ml-32">
                        </a>

                        <div class="bg-gray-800 p-4 rounded-lg shadow-md w-74 mb-3">
                            <p class="text-white h-9">Crie sua primeira playlist</p>
                            <p class="text-white text-sm h-10">É fácil, vamos te ajudar</p>
                            <button class="bg-white text-black rounded-full h-8 w-32">Criar playlist</button>
                        </div>
                        <div class="bg-gray-800 p-4 rounded-lg shadow-md w-74 ">
                            <p class="text-white h-9">Que tal seguir um podcast novo?</p>
                            <p class="text-white text-sm h-10">Avisaremos você sobre novos episódios</p>
                            <button class="bg-white text-black rounded-full h-8 w-36">Explore podcasts</button>
                        </div>
                    </div>
                </div>


                <!-- Conteúdo à direita -->
                <div class="bg-gray-800 p-4 rounded-xl shadow-md w-74 mb-3">
                    <h1 class="text-xl mt-4 text-white py-2">Playlists do Spotify</h1>
                    <div class="flex space-x-3">
                        <div class="bg-gray-900 w-52 rounded-xl overflow-hidden shadow-lg mr-2">
                            <!-- ... (conteúdo existente) ... -->
                            <img class="w-48 h-44 px-2 py-2 rounded-xl ml-2" src="../components/img/thebest.jpg"
                                alt="Imagem do matuê">
                            <div class="px-2 py-4">
                                <p class="text-xl font-semibold mb-2 text-white">This is Michael Jackson</p>
                                <p class="text-gray-400 text-base">O melhor artista Pop de todas as eras
                                </p>
                                <audio id="myAudio" controls
                                    class="rounded-full overflow-hidden bg-green-500 p-2 custom-audio ">
                                    <source src="../Components/music/_Matuê__Conexões_de_Máfia_feat._Rich_the_Kid.m4a.mp3"
                                        type="audio/mp3">
                                    Seu navegador não suporta a tag de áudio.
                                </audio>
                            </div>

                        </div>
                        <div class="bg-gray-900 w-52 rounded-xl overflow-hidden shadow-lg mr-2">
                            <!-- ... (conteúdo existente) ... -->
                            <img class="w-48 h-44 px-2 py-2 rounded-xl ml-2" src="../components/img/tue.jpg"
                                alt="Imagem do matuê">
                            <div class="px-2 py-4">
                                <p class="text-xl font-semibold mb-2 text-white">This is Matuê</p>
                                <p class="text-gray-400 text-base">Um dos melhores se não o melhor trapper da cena
                                    brasileira hoje
                                </p>
                                <audio id="myAudio" controls
                                    class="rounded-full overflow-hidden bg-green-500 p-2 custom-audio">
                                    <source src="../Components/music/_Matuê__Conexões_de_Máfia_feat._Rich_the_Kid.m4a.mp3"
                                        type="audio/mp3">
                                    Seu navegador não suporta a tag de áudio.
                                </audio>                         
                            </div>

                        </div>
                        <div class="bg-gray-900 w-52 rounded-xl overflow-hidden shadow-lg mr-2">
                            <!-- ... (conteúdo existente) ... -->
                            <img class="w-48 h-44 px-2 py-2 rounded-xl ml-2" src="../components/img/taylor.jpg"
                                alt="Imagem do matuê">
                            <div class="px-2 py-4">
                                <p class="text-xl font-semibold mb-2 text-white">This is Taylor Swift</p>
                                <p class="text-gray-400 text-base">A melhor artista do ano de 2023
                                </p>
                                <audio id="myAudio" controls
                                    class="rounded-full overflow-hidden bg-green-500 p-2 custom-audio">
                                    <source src="../Components/music/_Matuê__Conexões_de_Máfia_feat._Rich_the_Kid.m4a.mp3"
                                        type="audio/mp3">
                                    Seu navegador não suporta a tag de áudio.
                                </audio>
                            </div>

                        </div>
                        <div class="bg-gray-900 w-52 rounded-xl overflow-hidden shadow-lg mr-2">
                            <!-- ... (conteúdo existente) ... -->
                            <img class="w-48 h-44 px-2 py-2 rounded-xl ml-2" src="../components/img/rhcp.jpg"
                                alt="Imagem do matuê">
                            <div class="px-2 py-4">
                                <p class="text-xl font-semibold mb-2 text-white">This is Red Hot Chilli Peppers</p>
                                <p class="text-gray-400 text-base">A banda de Rock com 6 Grammy
                                </p>
                                <audio id="myAudio" controls
                                    class="rounded-full overflow-hidden bg-green-500 p-2 custom-audio">
                                    <source src="../Components/music/_Matuê__Conexões_de_Máfia_feat._Rich_the_Kid.m4a.mp3"
                                        type="audio/mp3">
                                    Seu navegador não suporta a tag de áudio.
                                </audio>
                            </div>

                        </div>
                    </div>
                    <p class="text-white h-40 px-2"></p>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>


<style>
/* Adicione essas regras de estilo ao seu arquivo de estilo ou na tag style do HTML */
.custom-audio {
    width: 50px;
    /* Ajuste conforme necessário para obter o tamanho desejado */
    height: 50px;
    /* Ajuste conforme necessário para obter o tamanho desejado */
    background-color: rgb(30, 215, 96);
}

.custom-audio audio {
    width: 100%;
    height: 100%;
    border-radius: 50%;
}

.custom-audio::-webkit-media-controls-panel {
    background-color: rgb(30, 215, 96);
    /* Cor do painel de controle */
    border-radius: 5px;
    /* Borda arredondada */
}</style>