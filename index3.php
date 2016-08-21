<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>VueJS</title>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>

</head>
<body>
<div id="app">
    <button v-on:click="onClick">Нажать тут</button>

</div>

<script>

    new Vue({
        el:"#app",
        methods:{
            onClick: function(){
                console.log("it's work!!!");
            }
        }
    })

</script>
</body>
</html>