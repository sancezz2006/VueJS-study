<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>VueJS</title>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="app">
    <button v-on:click="show = !show">Press</button>
    <div class="index4_rectangle" v-show="show"></div>

</div>

<script>

    new Vue({
        el:"#app",
        data: {
            show: false
        }
    })

</script>
</body>
</html>