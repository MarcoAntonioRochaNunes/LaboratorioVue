<template>
    <main>
        <div class="modal" @submit.prevent="createItem">
            <form >
                <label for="nome">Nome:</label>
                <input v-model="nome" type="text" id="nome" required>
                <button type="submit">Create</button>
                <button type="button" >Cancel</button>
            </form>
        </div>
        <div>

            <ul v-for="produto in items" :key="produto.id">
                <span>{{ produto.id }}</span>
                <li v-text="produto.nome"></li>
            </ul>
        </div>
    </main>
</template>

<script>
import axios from 'axios';


export default {

    name:'HomeView',
    props:['produtos'],
    data(){
        return {
            nome: '',
            items: [...this.produtos]
        }
    },
    methods:{
        async createItem(){
            const response = await axios.post('/criar', {nome: this.nome});
            this.items.push(response.data.item);
            this.nome = '';
        }
    },
}
</script>

<style>

</style>
