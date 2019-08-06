<template>
    <div>
        <form v-on:submit.prevent="authenticate">
            <input type="text" name="" id="">
            <button :disabled="disableToggle" type="submit"></button>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                disableToggle: false,
                tokenGiven: ''
            }
        },
        methods: {
            authenticate() {
                this.disableToggle = true;
                return 0;
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>