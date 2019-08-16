<template>
    <div>
        <messages></messages>
    <div class="row">
    <div class="col-10">
        <textarea @keydown="keydownMessage" v-model="body" placeholder="Sua Mensagem:"></textarea>
    </div>
    
    <div class="col-2">
        <button :disabled="loading" @click.prevent="sendMessage" class="btn btn-success">
            <pulse-loader
                :loading="loading"
                :color="'#FFF'"
                :size="'8px'"
                class="float-left">
            </pulse-loader>
            Enviar
        </button>
        </div>
        </div>
    </div>
</template>

<script>
    import PulseLoader from 'vue-spinner/src/PulseLoader.vue'

    export default{
        data(){
            return {
                body: '',
                loading: false,
            }
        },

        methods: {
            keydownMessage(e){
                if(e.keyCode === 13 && !e.shiftKey){
                    e.preventDefault()
                    this.sendMessage()
                }
            },
            sendMessage(){
                if(!this.body || this.body.trim() == '' || this.loading)
                    return

                this.loading = true
                this.$store.dispatch('storeMessage', {body: this.body})
                    .then(() => this.body = '')
                    .finally(() => this.loading = false)
            }
        },

        components: {
            PulseLoader
        }
    }

</script>

<style>
    .float-left{float:left;}
    textarea{
        width: 100%;
        border-radius: 5px;
        border: 1px solid #CCCCCC;
        padding: 6px;
        max-width: 100%;
        float: left;
    }
    button{
        margin: 12px 6px;
    }
</style>
