<?php
if(count($_GET) > 0){
    // echo "<pre>";
    // print_r($_GET);
    // echo "</pre>";
  $name = $_GET["name"];
  $email = $_GET['email'];
  echo "<h3> name : $name</h3>"."<br>";
  echo "<h3> Email : $email</h3>"."<br>";


}
else{
header("form.html");
}
echo "<hr";
// =========== Q2  ================
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo  "<br>";
foreach ($_POST as $key => $value) {
    // echo $key . "<br>";
    echo "<h3>".strrev($value)."</h3>". "<br>";
}
// ==========  Q3 =================
$products=[
    ["product num 1" , 300 , 50 ],
    ["product num 2" , 250 , 1000 ],
    ["product num 1" , 30 , 1200 ],
    ["product num 1" , 1500 , 10 ],
    ["product num 1" , 450 , 200 ],
    
];
$table="";
echo "<table>";
foreach($products as $key => $value){
 
    echo "<tr style='border: 2px solid black;'>";
    echo "<td style='border: 1px solid black; width:50px;'>".$key."</td>";
    echo "<td style='border: 1px solid black;  width:50px;'>"."<a href='product.php' >link</a>"."</td>";
    for ($i=0; $i < count($value) ; $i++) { 
        
       echo "<td style='border: 1px solid black;'>".$value[$i] . "</td>" ; 
         }
         echo "</tr>"; 
     
     
      
}
echo "</table>";

?>