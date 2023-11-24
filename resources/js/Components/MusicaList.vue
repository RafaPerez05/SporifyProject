<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios'; // Certifique-se de importar o Axios

const musicas = ref([]);

const fetchMusicas = async () => {
    try {
        const response = await axios.get('/musicas'); // Certifique-se de usar o Axios corretamente
        musicas.value = response.data;

    } catch (error) {
        console.error('Erro ao buscar músicas', error);
    }
};


function obterImagem(musicas){
    var imagem = `{{musica.img}}`;
    return imagem;
}

console.log(obterImagem());
onMounted(fetchMusicas);
</script>


<template>
    <!--
        <div>
            <h2>Listagem de Músicas</h2>
            <ul>
                <li v-for="musica in musicas" :key="musica.id">
                    {{ musica.nome }} - {{ musica.caminho }} - {{ musica.autor }} - {{ musica.descricao }}
                </li>
            </ul>
        </div>
        -->
    <div v-for="musica in musicas" :key="musica.id">
        <div class="bg-gray-900 w-52 rounded-xl overflow-hidden shadow-lg mr-2">
            <!-- ... (conteúdo existente) ... -->
            <img class="w-48 h-44 px-2 py-2 rounded-xl ml-2" src="../../../public/img/taylor.jpg" alt="Imagem do matuê">
            <div class="px-2 py-4">
                <p class="text-xl font-semibold mb-2 text-white">{{ musica.nome }}</p>
                <p class="text-gray-400 text-base">{{ musica.descricao }}</p>
                <p id="img-banco" style="overflow: hidden;">{{ musica.img }}</p>
            </div>
        </div>
    </div>
</template>
