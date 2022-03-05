<!DOCTYPE html>
<html>
<head>
</head>
<body>


<?php
   
  
 $email=$_POST['email']; 
       if(isset($_POST['Soumettre'])){
        $email=$_POST['email'];
    }
    echo "Requête soumise avec succès";
    echo "<br>";
    echo "un message de réinitialisation vous sera envoyé à l'adresse $email";
       
?>

</body>
</html>