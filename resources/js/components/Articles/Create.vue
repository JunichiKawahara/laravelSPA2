<template>
    <div>
        <div>
            <h4>記事投稿</h4>
            <div>
                <input v-model="title" type="text" name="title" placeholder="タイトル">
                <textarea v-model="content" class="form-control" rows="4" placeholder="コンテンツ"></textarea>

                <p>{{ title }}</p>
                <p>{{ content }}</p>

                <button v-on:click="postArticle">投稿</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            title: '',
            content: ''
        }
    },
    methods: {
        postArticle() {
            var article = {
                'title': this.title,
                'content': this.content
            };
            var id = 1;

            axios.post('/api/article/' + id, article).then(res => {
                console.log(res.data.title);
                console.log(res.data.content);
            })
        }
    }
}
</script>
