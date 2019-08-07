<template>
    <div>
        <form>
            <input type="text" v-model="name">
           <input type="email" v-model="email" id="">
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                name: '',
                email: ''
            }
        },
        methods: {
            register() {
                axios.post('/RegisterUsers', {
                    name: this.name,
                    email: this.email
                });
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>