<?php

$sql = "SELECT * FROM post";

			$result = $conn -> query($sql);

			if ($result -> num_rows > 0){
				//output data of each row
				while($row = $result -> fetch_assoc($query)){
					echo "". $row["name"].""."::" . $row["msg"]."--".$row["date"]."<br>";
					echo "<br>";				
				}
			} else {
				echo "0 results";
			}
			$conn ->close();

?>