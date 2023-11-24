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

onMounted(fetchMusicas);
</script>


<template>
    <div>
        <h2>Listagem de Músicas</h2>
        <ul>
            <li v-for="musica in musicas" :key="musica.id">
                {{ musica.nome }} - {{ musica.caminho }} - {{ musica.autor }} - {{ musica.descricao }}
            </li>
        </ul>
    </div>
</template>
