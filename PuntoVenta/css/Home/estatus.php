<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    

<div class="navbar-collapse collapse">
     <ul class="nav navbar-nav">
    <li><a asp-area="" asp-controller="Home" asp-action="menu">VIP</a></li>
    <li><a asp-area="" asp-controller="Home" asp-action="menu">DIS</a></li>
    <li><a asp-area="" asp-controller="Home" asp-action="menu">COMUN</a></li>
     </ul>
    </div>



<div class="card mb-3">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        <img class="card-img-bottom" src="..." alt="Card image cap">
    </div>







<div class="">
    <div class="">
        <div class="col-xs-4 ">
            <div class="thumbnail">
                <img src="~/images/vip.jpg" alt="30x20" class="img-rounded;">
                <div class="caption">
                    <h3>VIP</h3>
                    <p></p>
                    <p>
                        <a href="~/Home/menu" class="btn btn-primary" role="button">Botón</a>

                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="">
        <div class="col-xs-4 ">
            <div class="thumbnail">
                <img src="~/images/C1.jpg" alt="30x20" class="img-rounded">
                <div class="caption">
                    <h3>Comun</h3>
                    <p></p>
                    <p>
                        <a href="~/Home/menu" class="btn btn-primary" role="button">Botón</a>

                    </p>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="~/images/in.jpg" alt="30x20" class="img-rounded">
                <div class="caption">
                    <h3>Discapacitados</h3>
                    <p></p>
                    <p>
                        <a href="~/Home/menu" class="btn btn-primary" role="button">Botón</a>

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>