<template>
    <div class="messages scroll" ref="messages">
        <pacman-loader
            :loading="loading">
        </pacman-loader>

        <message
            v-for="message in messages"
            :key="message.id"
            :message="message">
        </message>
    </div>
</template>

<script>
    import PacmanLoader from 'vue-spinner/src/PacmanLoader.vue'

    export default {
        created(){
            this.loadMessages()
        },

        data(){
            return{
                loading: false,
            }
        },

        computed: {
            messages() {
                //return this.$store.state.chat.messages
                return this.$store.getters.messages
            }
        },

        methods:{
            loadMessages(){
                this.loading = true
                this.$store.dispatch('loadMessages')
                    .finally(()=>{
                        this.loading = false
                        this.scrollMessages()
                    })
            },

            scrollMessages(){
                setTimeout(() => {
                    // this.$refs.messages.scrollTo(0, this.$refs.messages.scrollHeight)
                    this.$refs.messages.scroll({
                        top: this.$refs.messages.scrollHeight,
                        let: 0,
                        behavior: "smooth"
                    })
                }, 100)
            }
        },

        watch: {
            messages(){
                this.scrollMessages()
            }
        },

        components: {
            PacmanLoader
        }
    }
</script>

<style scoped>
    .messages{
        margin-top: 20px;
        height: 629px;
        max-height: 629px;
        overflow-x: hidden;
        overflow-y: auto;
    }
</style>

