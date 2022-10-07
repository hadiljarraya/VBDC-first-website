<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Client</title>
        <link rel="stylesheet" href="css/Client.css">
   <style>
    .automobile :hover{
    transform:scale(1.5);
    background-image: url('img/image20.jpg');
    opacity: 1;
}
.plasturgie :hover{
    transform:scale(1.5);
    background-image: url('img/image21.jpg');
    opacity: 1;
}
.emballage :hover{
    transform:scale(1.5);
    background-image: url('img/image22.jpg');
    opacity: 1;
}
.industrie :hover{
    transform:scale(1.5);
    background-image: url('img/image16.jpg');
    opacity: 1;
}
.navale :hover{
    transform:scale(1.5);
    background-image: url('img/image15.jpg');
    opacity: 1;
}
.produits :hover{
    transform:scale(1.5);
    background-image: url('img/Image17.png');
    opacity: 1;
}

</style>

    </head>
    <body>
	<header>
<?php include('layout/navbar.html'); ?>

</header>
<h1> Nos Clients</h1>
        
        
        <section >
            <ul>
              <div class="automobile"> <li  data-text="Industrie automobile"><a onclick="photos(src='image20.jpg')"; href="#">Industrie automobile</a></li> </div>
               <div class="plasturgie">  <li data-text="Industrie de plasturgie"><a onclick="photos(src='image21.jpg')"; href="#">Industrie de plasturgie</a></li> </div>
               <div class="emballage">  <li data-text="Emballage rigide"><a onclick="photos(src='image22.jpg')"; href="#">Emballage rigide</a></li> </div>
               <div class="industrie"> <li data-text="Industrie aéronautique"><a onclick="photos(src='image16.jpg')"; href="#">Industrie aéronautique</a></li> </div>
               <div class="navale"> <li data-text="Industrie navale"><a onclick="photos(src='image15.jpg')"; href="#">Industrie navale</a></li> </div>
                <div class="produits"> <li data-text="Produit à usage extérieur"><a href="#">Produit à usage extérieur</a></li> </div>
            </ul>
        </section> 
        </div>
        
        
        
        
        <footer> </footer>
    </body>
    </html>