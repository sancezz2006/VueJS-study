<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>VueJS</title>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>

    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>
<div id="app">
    <header>
        <button v-on:click="show = !show">
            <i class="ion-navicon"></i>
        </button>
    </header>

    <aside v-show="show" transition="slide"></aside>


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