<template>
    <div>
        <form v-on:submit.prevent>
            <input type="submit" value="get your token">
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                key: value
            }
        },
        methods: {
            getToken() {
                axios.patch('api/generateTokens').then((resp)=> resp);
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>