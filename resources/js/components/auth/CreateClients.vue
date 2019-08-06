<template>
    <div>
        <form class="flex flex-col px-4" v-on:submit="authorize">
            <label for="">create your credentials</label>
            <div class="">
                <input class="border-5 mt-4 mb-2" type="text" v-model="user" name="" id="" placeholder="user">
                
            </div>
            <input class="border-5 h-16 shadow-md" type="text" v-model="password" placeholder="password">
            <button type="submit" class="w-1/2 p-3 bg-teal-light text-black rounded mt-6">Login</button>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                user: '',
                password: '',
            };
        },
        methods: {
            authorize() {
                this.disable = true;
                axios.get('/api/request', {
                     auth: {
                         username: this.user,
                         password: this.password
                     }
                })
                return 0;
            }
        },

    }
</script>

<style lang="scss" scoped>

</style>