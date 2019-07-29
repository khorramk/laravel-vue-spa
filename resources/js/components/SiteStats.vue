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
        created () {
            axios.get('http://review-cakes.test/api/stats').then(({data}) => {
                let {data} = response;
                this.lessons = data.lessons;
                this.series = data.series;
            } );
        },
    }
</script>

<style lang="scss" scoped>

</style>