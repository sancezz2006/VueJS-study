<!<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>VueJS</title>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>

</head>
<body>
<div id="app">
    <h1>{{ message }}</h1>
    <input type="text" v-model="message">
    <pre>{{ $data | json }}</pre>
</div>

<script>

    new Vue({
        el:"#app",
    data: {
        message:"Hello world"
    }
    })

</script>
</body>
</html>


<?php
?>