<template>
    <div class="card">
        <div class="card-body">
            <h4>Laravel Broadcast</h4>
            <hr>
            <div class="chat">
                <h5 v-if="talks.length == 0 ">
                    Sohbete henüz mesaj girilmemiş
                </h5>
                <div v-for="(talk, index) in talks" :key="index" class="balloon">
                    <p>
                        <strong class="text-primary">{{ talk.user.name }}: </strong>
                        {{ talk.text }}
                    </p>
                    <div  class="text-right"> 
                        <i style="font-size:10px;">{{ talk.created_at }}</i>
                    </div>
                </div>
            </div>
            <hr>
            <input type="text" v-model="text" class="form-control col" placeholder="..."  @keyup.enter="send()">
            <br>    
            <input type="button" class="btn btn-primary col" value="Mesaj Gönder" @click="send()" />
        </div>
    </div>   
</template>

<style>
.chat {
    padding: 1rem;
}
.chat .balloon {
    background: #f8fafc;
    padding: 1rem;
    margin: 10px 0px;
}
</style>


<script>
    export default {
        data() {
            return {
                talks: [],
                text: "",
            }
        },
        created() {
            window.Echo.channel('test-event')
            .listen('ExampleEvent', (e) => {
                console.log(e);
                this.talks.push(e.talk)
            });
            this.get();
        },
        methods: {
            send() {
                if(this.text !='') {
                    window.axios.post('/add', {'text' : this.text}).then( res => {
                        this.text = '';
                    });
                }
            },
            get() {
                window.axios.get('get').then( res => {
                    this.talks = res.data;
                })
            }
        }
    }
</script>