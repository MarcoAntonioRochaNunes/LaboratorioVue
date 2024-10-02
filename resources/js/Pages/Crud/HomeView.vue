<template>
    <main>
        <div class="modal" @submit.prevent="createItem">
            <form >
                <label for="nome">Nome:</label>
                <input v-model="data.nome" type="text" id="nome" required>
                <label for="obs">Obs:</label>
                <input v-model="data.obs" type="text" id="obs" required>
                <button type="submit">Create</button>
                <button type="button" >Cancel</button>
            </form>
        </div>
        <div>

            <ul v-for="produto in items" :key="produto.id">
                <span>{{ produto.id }}</span>
                <li v-text="produto.nome"></li>
                <li v-text="produto.obs"></li>
                <button @click="editItem(produto.id)">Editar</button>
            </ul>

        </div>
        <div>

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
            data:{},
            items: [...this.produtos]
        }
    },
    methods:{
        async createItem(){
            const response = await axios.post('/criar', {data: this.data});
            console.log('TET',response)
            await this.items.push(response.data.item);
            this.data = {};
        },
        editItem(id){
            console.log(id)
        }
    },
}
</script>

<style>

</style>
