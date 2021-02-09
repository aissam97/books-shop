<?php
 include('hedear.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
*{ 
    margin: 0%;
    padding: 0%;
}
body{
    background-color: #F2F2F2;
}

.titleg p{
    
    font-weight: bold;
    
    margin-top: 100px;
    margin-left: 5%;
    color: #6001FF;
}
.form{
    padding-left: 500px;
    padding-top: 50px;
    display: block;
}
.form input{
    padding: 8px 50px;
    background-color: rgb(230,230,230);
    position: relative;
  overflow: hidden;
  outline: none;
  border : none ;
  width:200px;

}
.form button{
    padding: 8px 50px;
    background-color: #6001FF;
    color: white;
}
.form input[type="file"]{
    padding-left:10px;
    height:25px;
    width:200px;
}
.btn{
    margin-left:75px;
}
.form span{
    font-weight: bold;
}
#footer{
             
height: 50px;
width: 100%;
line-height: 50px;
color:rgb(130, 130, 130) ;
margin-left: -230px;
display: block;
font-family:  Helvetica, sans-serif;
font-size: 12px;}
#footer p{
text-align: center;}
    </style>
</head>
<body>
 <header>
    
    <div class="titleg">
        <p>new books :</p>
</div>
    
    <form action="add.php"  method = "POST">
    <div  class="form">
       <span>title</span><br>
         <input type="text" name = "titre"> <br> <br>
           <span>Author</span><br>
              <input type="text"  name = "auteur"> <br> <br>
              <span>image </span>
           <div class="">
         <input type="file"  name = "images"  style="width:242px;"> <br> <br>
         <span>prix </span>
           <div class="">
         <input type="text"  name = "prix" style="/width:200px;">
    </div> <br>
  <span> quatité au stock</span>  <br>
<input type="text"  name = "quantite" > <br> <br>
  <span>date d'achat</span>  <br>
      <input type="date" id="start" name="date_achat" style="/width:200px;" 
         value="2021-04-04"
            min="2021-02-04" max="2025-2-4"> <br> <br>
         <div>
    <span>Date du publication</span><br> 
<input type="date"  class="form-control"  value="2021-02-04"
            min="2021-02-04" max="2025-2-4" id="date" name="date_de_publication" required>
</div> <br> 
    <span>Published AT</span>  <br>
    <input type="text"> <br> <br>
    
    <div class="btn" type ="submit"  name = "submit"><button >Add</button ></div>
</div>
    </form>
    <div id="footer">
        <p>Library Copyrights 2020/2021</p>
    </div>
  
</body>
</html>