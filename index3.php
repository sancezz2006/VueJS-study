<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>VueJS</title>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>

</head>
<body>
<div id="app">
    <form action="">
    <button v-on:click.prevent="onClick">Нажать тут</button>
    </form>
<br />
    //понажатию Enter, выводим текст сообщения в консоль
    <input type="text" v-model="message" v-on:keyup.13="onClick">

</div>

<script>

    new Vue({
        el:"#app",
        data:{
            message:''
        },
        methods:{
            onClick: function(){
                console.log(this.message);
            }
        }
    })

</script>
</body>
</html>