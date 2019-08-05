<template>
        <form v-on:submit.prevent="">
            <input type="text" name="createClients" v-model="CreateClients" >
            <input type="submit" value="create Clients">
        </form>
</template>

<script>
    export default {
        data() {
            return {
                CreateClients: ''
            };
        },

    }
</script>

<style lang="scss" scoped>

</style>