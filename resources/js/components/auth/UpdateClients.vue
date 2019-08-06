<template>
    <div class="bg-blue-lighter px-19">
        <form class="flex flex-col px-4" v-on:submit="update">
            <label for="">rename your name</label>
            <div class="">
                <input class="border-5 mt-4 mb-2" type="text" v-model="ClientName" name="" id="" placeholder="name">
                <button type="submit">+</button>
            </div>
            <input class="border-5 h-16 shadow-md" type="text" v-model="api" placeholder="api">
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                ClientName: '',
                api: ''
            }
        },
        methods: {
            update() {
                axios.put('').then()
                return 0;
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>