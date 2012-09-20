<html>
    <head>
    <script type="text/javascript" src="jquery.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


    </head>  


<body>
<div id="mun_nodos">
<form method="get" name="formulario" action="index.php">
<label>Ingrese N° Vertices</label>
<input type="text" class="texto1" id="vertices"name="vertices">
<input type="submit" class="boton">
</form>
</div>
<div id="matriz">
<form method="post" name="for_mat" action="grafos.php" enctype="multipart/form-data">
    <input type="hidden" name="option" value="<?php echo $nodos = $_GET['vertices'];?>">
<?php 
$nodos = $_GET['vertices'];

 for ($i=1; $i <=$nodos ; $i++) 
 { 
    for ($j=1; $j <= $nodos; $j++) { ?>
        <input type='text' class="texto" id='a<?php echo "$i"."$j"?>' name='a<?php echo "$i"."$j"?>'>

    <?php }
        if ($j==$nodos)?>
            </br>
 <?php }
      
 ?>
   
    <input type="submit" class="boton" id="boton_matriz">
</form>
</div>

    
</body>
  
<script type="text/javascript">


    $(".texto1").keyup(function () {
        var ver = $(this).val();
         if(ver>6)
         {
            alert("Ingrese Vertices Menor a 6");
            $(".texto1").val("");
         }
         
    });

  

 
</script>
<style type="text/css">
    body
    {
        background-color: #f6f6f6;
    }
    .texto
    {
      border: 1px solid #AEADAE;
      height: 21px;
      width: 50px;
      padding-left: 5px;
      padding-top: 1px;
      padding-right: 5px;
      margin-top: 15px;
      -webkit-box-shadow: inset 1px 1px 1px #aeadae;
      -moz-box-shadow: inset 1px 1px 1px #aeadae;
      box-shadow: inset 1px 1px 1px #aeadae;
      border-radius: 5px;
      -moz-border-radius: 5px;
      -webkit-border-radius: 5px;   
    }
    .texto1
    {
      border: 1px solid #AEADAE;
      height: 21px;
      width: 100px;
      padding-left: 5px;
      padding-top: 1px;
      padding-right: 5px;
      margin-top: 15px;
      -webkit-box-shadow: inset 1px 1px 1px #aeadae;
      -moz-box-shadow: inset 1px 1px 1px #aeadae;
      box-shadow: inset 1px 1px 1px #aeadae;
      border-radius: 5px;
      -moz-border-radius: 5px;
      -webkit-border-radius: 5px;   
    }
    #matriz
    {
      height:600px;
      margin-left:30%;
    }
    #mun_nodos 
    {
      margin-left:30%;
      margin-top:10%;
    }
    label 
    {
      font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
    }
    .boton
    {

      width: 70px;
      height: 20px;
      cursor: pointer;
      font-weight: bold;
    
      margin-top: 25px;
      border-radius: 5px;
      -moz-border-radius: 5px;
      -webkit-border-radius: 5px;
      box-shadow: 0px 1px 3px #cacaca;
      -moz-box-shadow: 0px 1px 3px #cacaca;
      -webkit-box-shadow: 0px 1px 3px #cacaca;
      border: 1px solid #CECECE;
      background: #DEDDDD;
      background: -moz-linear-gradient(top, #DEDDDD 0%, #B0B0B0 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#DEDDDD), color-stop(100%,#B0B0B0));
      background: -webkit-linear-gradient(top, #DEDDDD 0%,#B0B0B0 100%);
      background: -o-linear-gradient(top, #DEDDDD 0%,#B0B0B0 100%);
      background: -ms-linear-gradient(top, #DEDDDD 0%,#B0B0B0 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#DEDDDD', endColorstr='#B0B0B0',GradientType=0 );
      background: linear-gradient(top, #DEDDDD 0%,#B0B0B0 100%);
      
          }
</style>
</html>
