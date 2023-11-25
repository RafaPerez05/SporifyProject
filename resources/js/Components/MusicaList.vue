<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const musicas = ref([]);

const fetchMusicas = async () => {
    try {
        const response = await axios.get('/musicas');
        musicas.value = response.data;
    } catch (error) {
        console.error('Erro ao buscar músicas', error);
    }
};

onMounted(() => {
    fetchMusicas();
});
</script>

<template>
    <div v-for="musica in musicas" :key="musica.id">
        <div class="bg-gray-900 w-52 rounded-xl overflow-hidden shadow-lg mr-2">
            <img class="w-48 h-44 px-2 py-2 rounded-xl ml-2" :src="musica.img" alt="" id="fotoArtista">
            <div class="px-2 py-4">
                <p class="text-xl font-semibold mb-2 text-white">{{ musica.nome }}</p>
                <p class="text-gray-400 text-base">{{ musica.descricao }}</p>

                <audio id="myAudio" controls class="rounded-full overflow-hidden bg-green-500 p-2 custom-audio">
                    <source :src="musica.caminho" type="audio/mp3">
                    Seu navegador não suporta a tag de áudio.
                </audio>
            </div>
        </div>
    </div>
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
