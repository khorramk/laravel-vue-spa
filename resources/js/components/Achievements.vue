<template>
    <div>
        <h1>
            achievements
        </h1>
        <input type="text" name="token" id="" @key-up.enter="fetchAchievements" placeholder="your laracast api token" v-model="token">
        <ul>
            <li 
            
            v-for="(achievement, i) in achievements" :key="i" v-text="achievement">

            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                achievements: [],
                token: ''
            };
        },
        mounted(){
            axios.get('http://asset.test/api/achievements?api_token=osVj8XI3hanAgmKG3dSlGQ6wxLZcUoRryA68fVtNXwyTIkkgE2LvMiGyE8MP')
            .then((response => this.achievements = response.data))
            .catch((err)=> console.log(err));
    
        }
           
    };
    
</script>

<style lang="scss" scoped>

</style>