<?php 

?>

<html lang="en">    

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
        <link rel="stylesheet" href="./css/style.css">
    <title>esercizio</title>
</head>



<body>    
    <div id="app">
    <header class="bg-success p-3 text-white d-flex align-items-center gap-5">

<i class="fa-brands fa-opencart fa-bounce fs-1"></i>
<h1 class="text-uppercase">Crea la tua lista della spesa</h1>
</header>

<div class="p-5">
<div class="bg-white p-5 width m-auto rounded-5">

    <div class="d-flex justify-content-center">
        <img class="rounded-4" src="https://www.nonsprecare.it/wp-content/uploads/2016/04/come-fare-spesa-intelligente-trucchi-consigli-risparmiare.jpg"
            alt="spesa">
    </div>
    <div class="d-flex justify-content-center align-items-center gap-3 p-4">
        <label for="quantity" class="form-label">Quantità</label>
        <input class="rounded p-1" type="number" id="quantity" v-model="newQuantity">
        <input class="rounded p-1" type="text" v-model="newLista" @keyup.enter="inserisci"
            placeholder="inserisci un prodotto">
        <button type="button" class="btn btn-outline-success" @click="inserisci">Aggiungi</button>
    </div>

    <p class="text-center text-danger">{{message}}</p>

    <div class="d-flex justify-content-center gap-3">

        <ul v-if="listaSpesa.length > 0">
            <li class="d-flex gap-3 align-items-center" @click="complete(index)"
                :class="element.completed ? 'alert alert-success text-decoration-line-through': ''"
                v-for="(element, index) in listaSpesa">
                <span class="my-3">{{element.quantity}}</span>
                <span class="my-3">{{element.name.toUpperCase()}}</span>
                <button type="button" class="btn btn-outline-danger" @click.stop="deleteList(index)"><i
                        class="fa-solid fa-trash"></i></button>
                <button type="button" class="btn btn-outline-success"><i
                        class="fa-solid fa-check"></i></button>
            </li>
        </ul>

        <h3 class="text-danger" v-else>La lista della spesa è vuota</h3>

    </div>
</div>
</div>
    </div>    
</body>

</html>