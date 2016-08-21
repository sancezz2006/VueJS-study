<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>VueJS</title>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
</head>
<body>
<div id="app">
    <ul>
        <li v-for="car in cars">{{ car }}</li>
    </ul>
</div>
<script>
    new Vue({
        el: "#app",
        data:{
            //создадим массив с марками авто
            cars:[
                'toyota',
                'opel',
                'mazda',
                'kia',
            ]
        }
    })
</script>
</body>
</html>