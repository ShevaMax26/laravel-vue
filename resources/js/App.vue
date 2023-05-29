<template>
    <div>
        <router-link :to="{ name: 'person.index'}" class="me-3">People</router-link>
        <router-link :to="{ name: 'person.create'}">Create Person</router-link>
        <router-view class="pt-2"></router-view>
    </div>
</template>

<script>
export default {
    name: "App"
}
</script>

<style scoped>

</style>
