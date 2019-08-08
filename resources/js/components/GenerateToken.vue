<template>
    <div>
        <button @click="generate">generate token</button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                token: ''
            }
        },
        methods: {
            generate() {
                axios.get('/api/generateTokens').then((response.data));
                return 0
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>