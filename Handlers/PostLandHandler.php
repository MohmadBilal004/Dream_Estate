<?php
             if(isset($_POST["btnPost"])){
                    $title = $_POST["txtTitle"];
                    $landtype = $_POST["txtlandType"];
                    $address = $_POST["txtAddress"];
                    $city = $_POST["txtCity"];
                    $localArea = $_POST["txtLocalArea"];
                   
                    $landSize = $_POST["txtLandSize"];
                    $unit = $_POST["txtUnit"];
                    $description = $_POST["txtDescription"];
                    $price = $_POST["txtprice"];
                    $negotiable = $_POST["chkNegotiable"];
                     
                    $image1 = "Land/".basename($_FILES["file1"]["name"]);
                    move_uploaded_file($_FILES["file1"]["tmp_name"],$image1);

                    $image2 = "Land/".basename($_FILES["file2"]["name"]);
                    move_uploaded_file($_FILES["file2"]["tmp_name"],$image2);
                  
                    $image3 = "Land/".basename($_FILES["file3"]["name"]);
                    move_uploaded_file($_FILES["file3"]["tmp_name"],$image3);

                    $image4 = "Land/".basename($_FILES["file4"]["name"]);
                    move_uploaded_file($_FILES["file4"]["tmp_name"],$image4);

                    $con = mysqli_connect("localhost","root","","predictpricer");
	 
	                if(!$con) {
	                	die("Sorry !!! we are facing technical issue"); 
	                }

                    $sql = "INSERT INTO `landtbl` (`houseID`, `title`, `address`, `city`, `localArea`, `landSize`, `unit`, `description`, `price`, `negotiable`, `image1`, `image2`, `image3`, `image4`) 
                    VALUES (NULL, '".$title."', '".$address."', '".$city."', '".$localArea."', '".$landSize."', '".$unit."', '".$description."', '".$price."', '".$negotiable."', '".$image1."', '".$image2."', '".$image3."', '".$image4."');";
                    
                    if(mysqli_query($con,$sql)){
                        echo "Land details Uploaded Successfully";
                    }else{
                        echo "Could not upload Please check the form again";
                    }
              }
?>