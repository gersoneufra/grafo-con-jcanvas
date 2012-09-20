 

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="jcanvas.min.js"></script>

</head>  
<?php 
$nodos = $_POST['option'];

$matriz=$_POST;
unset($matriz['option']);
print_r($matriz);
  for ($i=1; $i <=$nodos; $i++) { 
    for ($j=1; $j <=$nodos ; $j++) { 
         if($matriz['a'.$i.$j]!=$matriz['a'.$j.$i])
            {
              echo "no es simetrica";
              $i=$nodos;
              $ban="1";
            }
    }
  }
  ?>
<?php if($ban!="1"){ ?>
<script type="text/javascript">
      var matriz= [];
  <?php
  
for ($i=1; $i <=$nodos; $i++) { 
   for ($j=1; $j <=$nodos ; $j++) { ?>
  
      matriz['a'+<?php echo $i.$j?>]= "<?php echo $matriz['a'.$i.$j]?>";
  

<?php }}
?>
</script>
<canvas width="1000" height="700" >
</canvas>


<script type="text/javascript">
var N="<?php echo $nodos = $_POST['option'];?>";
var text =["A","B","C","D","F","G"];

if(N==1)
{
var bucles="<?php echo $_POST[a11];?>"
  //alert("solo itiem");
  $("canvas").drawArc({
  strokeStyle: "#000",
  strokeWidth: 2,
  x: 300, y:300,
  radius: 20
})
.drawText({
  fillStyle: "#0000FF",
 
  strokeWidth: 2,
 x:300, y: 300,
  font: "10pt Verdana, sans-serif",
  text: text[0]
});
  
  var i=1;
  var radio=10;
  while (i<=bucles)
  {

  
   var color=["#01DF01","#0000FF","#FF0000","#58FAD0","#FFFF00","#2E2E2E","#688A08","#FF0000","#58FAD0","#688A08"];
 
     $("canvas").rotateCanvas({
      rotate: 135,
      x: 300, y: 292-(i*9)
    })
    .drawArc({
      strokeStyle: color[i-1],
      strokeWidth: 2,
      x: 300, y: 292-(i*9),
      radius: radio*i,
      start: 90, end: 1
    })
    .restoreCanvas();

    i=i+1;
      // if(i>=7)
      //   {
      //     i=1;
      //   }
  }
}
else
{

var X = new Array(N);
var Y=new Array(N);
for (var i=1; i<=N; i++) 
{
var c_x =Math.floor (Math.random () * 700);
var c_y =Math.floor (Math.random () * 800);
X[i]=c_x;
Y[i]=c_y;
        

$("canvas").drawArc({
  strokeStyle: "#000",
  strokeWidth: 2,
  x: c_x, y: c_y,
  radius: 12
})
.drawText({
  fillStyle: "#9cf",
 
  strokeWidth: 2,
 x: c_x, y: c_y,
  font: "10pt Verdana, sans-serif",
  text: text[i-1]
});

}



var color=["#01DF01","#0000FF","#FF0000","#58FAD0","#FFFF00","#2E2E2E","#688A08"];
 for (var i =1 ; i<=N; i++) 
 {
    for (var j =i ; j<=N; j++) 
   {

     if(i==j)
     {
      for (var k =1 ; k <=matriz['a'+i+i] ; k++) 
      {
        //alert(X[i]+"valy"+Y[i]);
       $("canvas").rotateCanvas({
      rotate: 135,
        x: X[i], y: Y[i]-(k*5)
        })
        .drawArc({
          strokeStyle: color[k],
          strokeWidth: 1,
          x: X[i], y: Y[i]-(k*5),
          radius: 17,
          start: 90, end: 1
        })
        .restoreCanvas();
      }
     }
     else
     {
      if (matriz['a'+i+j]>=1)
      {
        for (var l = 1; l <= matriz['a'+i+j]; l++) 
        {
          $("canvas").drawLine({
            strokeStyle: color[l],
            strokeWidth: 2,
            rounded: true,
            x1: X[i], y1: Y[i]-(l*7),
            x2: X[j], y2: Y[j]-(l*7),
           
          });
        }
      }
     }

   }

 }
  

}
</script>

<?php }
?>
  


   <style type="text/css">
    body
    {
      background-color: #f6f6f6;
    }
   </style>
