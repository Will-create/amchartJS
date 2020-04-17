<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style/bootstrap.css">
   <link rel="stylesheet" href="style/style.css">
</head>
<body>


<div  class="container-fluid">
     
<div class="row container-fluid justify border marge">
                <div class="col-md-7"><h2 class= "mon_titre">CARTE NATIONALE D'IDENTITE BURKINABE</h2></div>
                <div class="col-md-2 card " ><img src="img/armoirie.png" alt=""   ></div>
                <div class="col-md-3">
                     <h2>BURKINA <br>FASO <br></h2>
                     <p>Unité- Progrès-Justice</p>
                </div>
</div >
    <div class="row container-fluid d-flex justify-content-start"> <!--nous avons ici notrs contenai-->
           
                
                     <div class="col-md-3"><!--contenair profile-->
                         <div class="card bg-dark" style="width: 18rem ;height:18rem;">
                         <img src="..." class="card-img-top" alt="...">
                         <div class="card-body">
                             <p class="card-text">Some quick example text</p>
                         </div>
                         </div>

                        
                           

                          <p>signature du titulaire</p>
                     </div>
                     

                     <div class="col-md-3 justify-content border  ">
                                 <p>062145626587410213</p>
                            <form action="recuperation.php" method="POST" class="d-flex flex-column bd-highlight largeur_champ  justify-content-center">
                                     Nom:<input type="text" name="nomf">    
                                     Prenom: <input type="text" name="prenomf"> 
                             
                                     Né(e) le: <input type="date" name=" date_ne "> A <input type="text" name=" lieu_ne ">
                                     <caption>SEXE:</caption>
                                     <select name="sexef" id="sexe">
                                         <option value="M">M</option>
                                         <option value="F">F</option>
                                         <option value="">__</option>
                                     </select>  
                                     
                                     <caption>Taille:</caption>
                                     <select name="taillef" id="taille">
                                         <option value="1.40">1.40  m</option>
                                         <option value="1.50">1.50  m</option>
                                         <option value="1.60">1.60  m</option>
                                         <option value="1.70">1.70  m</option>
                                         <option value="1.75">1.75  m</option>
                                         <option value="1.80">1.80 m</option>
                                         <option value="">__Autre__</option>
                                     </select> 
                             
                                    Profession:<input type="text" name="  professionf ">

                                     Delivre le: <input type="date" name=" date_delivref">
                                     Expire le:  <input type="date" name=" date_expiref  ">

                                     N_CNIB <input type="text" placeholder="ex:B1145...." name="numero_cnib ">
                                     <p>signature du titulaire</p>
                                     <input type="submit" value="Enregister">
                            </form>
                           

                         
                     </div>
                     <div class="col-md-6 ">
                     <!-- <img src="img/simplon.jpg"   style="max-height: 100%; max-width: 100%" alt=""> -->
                     <img src="img/ftk.jpg"   style="max-height: 100%; max-width: 100%" alt="">
                     
                     </div>
                </div>
               
              <div>
              <footer>
              
              </footer>
             </div>
    </div>
    </div>
</body>

<script src="js/bootstrap.js"></script>
</html>