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
    <ul>
        <li v-for="car in cars" v-bind:class="{ 'strike' : car.status }"> {{ car.name }}</li>
    </ul>
</div>
<script>
    new Vue({
        el: "#app",
        data:{
            //создадим массив с марками авто
            cars:[
                {
                    name:'toyota',
                    status: false
                },
                {
                    name:'opel',
                    status: true
                },
                {
                    name:'mazda',
                    status: false
                },
                {
                    name:'kia',
                    status: false
                }

            ]
        }
    })
</script>
</body>
</html>