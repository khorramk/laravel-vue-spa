<template>
    <div>
        <h1>
            Laracast Stats
        </h1>
        <ul>
           <li><strong>total series</strong> {{series}} </li>
           <li><strong>total Lessons</strong> {{lessons}} </li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                series: 0,
                lessons: 0
            }
        },
        mounted() {
            axios.get('http://asset.test/api/stats').then((resp)=> {
                this.series = resp.data.series;
                this.lessons = resp.data.lessons;
            }).catch((err)=> console.log(err))
                                                    
        },
    }
</script>
