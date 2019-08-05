<template>
    <div>
        <h1>change client info</h1>
        <form>
            <input type="text" name="" v-model="ClientInformation">
            <input type="submit" value="edit Client">
        </form>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                 ClientInformation: ''
            }
        }
    }
</script>
