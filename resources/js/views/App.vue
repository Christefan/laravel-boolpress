<template>
    <div>
        <p>Prova</p>
        <WorkInProgress />
        <Post />
    </div>
</template>

<script>
import Post from '../components/Post.vue';
import WorkInProgress from '../components/WorkInProgress.vue';
export default {
    name: 'App',
    components: {
        WorkInProgress,
        Post
    }
}
</script>

<style>
</style>