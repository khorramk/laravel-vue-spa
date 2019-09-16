<template>
    <div>
        <form v-on:submit.prevent="getToken">
            <input type="submit" value="get your token for 5 seconds">
        </form>

        <div class="div" v-text="key">
        
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                key: '',
            }
        },
        methods: {
            getToken() {
                axios.get('/api/generateTokens', {
                
                    
                }).then((resp)=>  this.key = resp.data.token).then(()=> setTimeout(() => {
                    window.location.href = '/getToken';
                }, 5000));
            },
           
        },
    }
</script>

<style lang="scss" scoped>

</style>