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
</div>

<script>
    var data = {
        message:"Hello world"
    }
    new Vue({
        el:"#app",
    data: data
    })
</script>
</body>
</html>


<?php
?>