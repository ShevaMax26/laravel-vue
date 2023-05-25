<template>
    <div>
        <router-link :to="{ name: 'posts.index'}" class="me-3">Posts</router-link>
        <router-link :to="{ name: 'posts.create'}">Post Create</router-link>
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
