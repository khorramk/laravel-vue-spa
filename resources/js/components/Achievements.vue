<template>
    <div>
        <h1>
            achievments
        </h1>
        <input type="text" name="token" id="" @key-up.enter="fetchAchievments" placeholder="your laracast api token" v-model="token">
        <ul>
            <li v-for="(achievment, i) in achievments" :key="i" v-text="achievment">

            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                achievment: [],
                token: ''
            };
        },
        methods: {
            fetchAchievments () {
                axios.get(`/api/fetchAchievements?api_token=${this.token}`)
                    .then((reponse => {
                        this.achievment = reponse.data;
                    }));
            },
        }
    }
</script>

<style lang="scss" scoped>

</style>