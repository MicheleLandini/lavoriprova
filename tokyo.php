<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style/shop.css">
    <title>SHOP</title>
</head>
<body>






<nav class="navbar navbar-light bg-light fixed-top">
    <div class="container-fluid">
    <a class="name navbar-brand" href="#">Air Company</a>
    <a class="navbar-brand" href="#"><?php echo $_SESSION['username']; ?> are you ready for comfort</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Air Company</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
        <li class="nav-item">
            <a href="logout.php" class="nav-link active"> Logout </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        </ul>
    </div>
    </div>
</div>
</nav>
<div class="row">
<img class="col-md-9" src="style/giappone2.jpg" class="img-thumbnail" alt="...">
<p class="col-md-3 mt-5">Lorem ipsum dolor sitdown, amet consectetur adipisicing elit. Quam odio, dolore quibusdam vel hic 
    deserunt cumque sit aliquam perspiciatis sequi repellat voluptas laudantium libero voluptate 
    earum delectus aut vitae in. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt ullam vitae aspernatur fuga laboriosam illum 
    maiores dolorem, modi harum! Voluptatum voluptatibus odio quae obcaecati reprehenderit eveniet id. Quas, laboriosam similique.
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt ullam vitae aspernatur fuga laboriosam illum 
    maiores dolorem, modi harum! Voluptatum voluptatibus odio quae obcaecati reprehenderit eveniet id. Quas, laboriosam similique.
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt ullam vitae aspernatur fuga laboriosam illum 
    maiores dolorem, modi harum! Voluptatum voluptatibus odio quae obcaecati reprehenderit eveniet id. Quas, laboriosam similique.
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt ullam vitae aspernatur fuga laboriosam illum 
    maiores dolorem, modi harum! Voluptatum voluptatibus odio quae obcaecati reprehenderit eveniet id. Quas, laboriosam similique.
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt ullam vitae aspernatur fuga laboriosam illum 
    maiores dolorem, modi harum! Voluptatum.</p>
</div>

<div class="row">
<div class="col-md-12 text-center" style="background-color: lightskyblue;font-family: Verdana, Geneva, Tahoma, sans-serif" >tokyo 950$</div>
</div>

    <button type="button" id="cuba" class="btn btn-primary col-md-12" style="azure;background-color: darksalmon;border: aqua;">Aggiungi al carrello un biglietto</button>


    
    <ul ></ul>
    <p ></p>

    <table class="table">
<thead>
    <tr>
    <th scope="col" id="testo"></th>
    </tr>
</thead>
<tbody id="menu">
    
</tbody>
</table>

<button type="button" class="btn btn-primary col-md-12" style="background-color: darksalmon;border: aqua;">Ordina</button>


<script>
        var menu = document.getElementById('menu')
        var mela = document.getElementById('cuba')
        var testo = document.getElementById('testo')
        //parentesi graffa per richiamare key
        //la , per staccare il richiamo key
        var listaDellaSpesa = {
            biglietti: 0,
            cuba: 0,
        }

        cuba.addEventListener('click', function () {
            var tr = document.createElement('tr')
            tr.innerHTML = '1 bigglietto per tokyo  '
            menu.appendChild(tr)
            tr.style.backgroundColor = 'burlywood'
            tr.style.textalign = 'center'
            tr.style.color = 'white'
            tr.style.fontWeight = 'bold'
            listaDellaSpesa.cuba+=950
            listaDellaSpesa.biglietti+=1
            testo.innerHTML = "Hai aggiunto al carrello " +
            listaDellaSpesa.biglietti + " bigietti " + "totale: " +
            (listaDellaSpesa.cuba) + "$" 
            
            
            var button = document.createElement ('button')
            button.innerHTML = 'X'
            button.style.backgroundColor = 'white'
            button.style.borderRadius = '300%'
            button.style.color = 'burlywood'
            button.style.fontWeight = 'bold'
            button.style.border = 'none'
            tr.appendChild(button)
            button.addEventListener('click', function(){
            menu.removeChild(tr)
            listaDellaSpesa.cuba-=950
            listaDellaSpesa.biglietti-=1




            testo.innerHTML = "Hai aggiunto al carrello " +
            listaDellaSpesa.biglietti + " bigietti " + "totale: " +
            (listaDellaSpesa.cuba) + "$"

        })

        })


    </script>






</body>
</html>