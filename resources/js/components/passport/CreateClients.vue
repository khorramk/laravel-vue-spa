<template>
   <div>
        <form class="inline-block" v-on:submit.prevent="store">
            <input class="border-4 max-w-sm mx-auto flex p-12 bg-white rounded-lg shadow-xl" type="text" name="createClients" v-model="CreateClients" >
            <input class="" type="submit" value="create Clients">
        </form>
   </div>
</template>
<script>
    export default {
        data() {
            return {
                CreateClients: ''
            };
        },
        methods: {
            store() {
                const data = {
                    name: this.CreateClients,
                    redirect: 'asset.test/clients'
                };
                axios.post('oauth/clients', data)
                     .then((response) => console.log(response));
            }
        },
        
    }
</script>
