<template>
    <div class="row row-cols-4">
        <div class="col" v-for="post in posts" :key="post.id">
            <div class="card my-5 py-2 border-dark">
                <div class="card-body">
                    <h5 class="card-title">{{post.title}}</h5>
                    <p class="card-text">{{ troncText(post.content, 50) }}</p>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'Post',
    data() {
        return {
            posts: []
        }
    },
    created() {
        this.getPosts();
    },
    methods: {
        getPosts() {
            axios.get("/api/posts")
                .then((resp) => {
                    this.posts = resp.data.results
                })
        },
        troncText(text,SelectMaxChar){
        if(text.length > SelectMaxChar){
            return text.substr(0,SelectMaxChar) + " ...per continuare a leggere clicca qui"; 
        }
        return text;
        },
    },
}
</script>

<style>
.card {
    width: 23rem;
    min-height: 10rem;
}
</style>