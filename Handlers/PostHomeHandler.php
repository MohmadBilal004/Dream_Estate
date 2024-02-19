<?php
             if(isset($_POST["btnPost"])){
                    $title = $_POST["txtTitle"];
                    $houseType = $_POST["txtHouseType"];
                    $address = $_POST["txtAddress"];
                    $city = $_POST["txtCity"];
                    $localArea = $_POST["txtLocalArea"];
                    $yearBuilt = $_POST["DtYearBuilt"];
                    $yearRenovated = $_POST["DtYearRenovated"];
                 
                    $bedroomCount = $_POST["txtBedroom"];
                    $bathroomCount = $_POST["txtBathroom"];
                    $landSize = $_POST["txtLandSize"];
                    $unit = $_POST["txtUnit"];
                    $houseSize = $_POST["txtHouseSize"];
                    $floorCount = $_POST["txtFloor"];
                    $description = $_POST["txtDescription"];
                    $price = $_POST["txtprice"];
                    $negotiable = $_POST["chkNegotiable"];
                     
                    $image1 = "House/".basename($_FILES["file1"]["name"]);
                    move_uploaded_file($_FILES["file1"]["tmp_name"],$image1);

                    $image2 = "House/".basename($_FILES["file2"]["name"]);
                    move_uploaded_file($_FILES["file2"]["tmp_name"],$image2);
                  
                    $image3 = "House/".basename($_FILES["file3"]["name"]);
                    move_uploaded_file($_FILES["file3"]["tmp_name"],$image3);

                    $image4 = "House/".basename($_FILES["file4"]["name"]);
                    move_uploaded_file($_FILES["file4"]["tmp_name"],$image4);

                    $con = mysqli_connect("localhost","root","","predictpricer");
	 
	                if(!$con) {
	                	die("Sorry !!! we are facing technical issue"); 
	                }

                    $sql = "INSERT INTO `housetbl` (`RecID`, `Title`, `HouseType`, `Address`, `City`, `LocalArea`, `YearBuilt`, `YearRenovated`, `BedroomCount`, `BathroomCount`, `LandSize`, `Unit`, `HouseSize`, `FloorCount`, `Description`, `Price`, `negotiable`, `Image1`, `Image2`, `Image3`, `Image4`) 
                    VALUES (NULL, '".$title."', '".$houseType."', '".$address."', '".$city."', '".$localArea."', '".$yearBuilt."', '".$yearRenovated."', '".$bedroomCount."', '".$bathroomCount."', '".$landSize."', '".$unit."', '".$houseSize."', '".$floorCount."', '".$description."', '".$price."', '".$negotiable."', '".$image1."', '".$image2."', '".$image3."', '".$image4."');";
                    
                    if(mysqli_query($con,$sql)){
                        echo "Product Uploaded Successfully";
                    }else{
                        echo "Could not upload Please check the form again";
                    }
              }
?>