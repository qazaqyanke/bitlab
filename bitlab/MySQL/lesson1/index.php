<!-- <?php
	// try{
	// $conn = new PDO('mysql:host=localhost;dbname=bitlab2','root','');

	// $sql = "INSERT INTO db (login, name, surname, age) VALUES ('qazaqyanke', 'Beisebai', 'Kuandykov', 17)"
	// $query = $conn->prepare($sql);
 //        $query->execute();


// }	catch(PDOExceprion $e){
// 		echo $e->getMessage() . '</br>';
// }
?> -->

<?php
    try {

        $conn = new PDO('mysql:host=localhost;dbname=bitlab2', 'root', '');

        $sql = "
            INSERT INTO db (login, name, surname, age)
            VALUES ('quanden', 'Danabek', 'Kuandykov', 17)
        ";
        $query = $conn->prepare($sql);
        $query->execute();
       
    }catch (PDOException $e){
        echo "Error!: " . $e->getMessage() . "<br/>";
    }
?>