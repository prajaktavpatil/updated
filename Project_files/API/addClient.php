
<?php

require_once "../config/config.php";


$get_connection=new connectdb;
$db=$get_connection->connect();

class login
{
    
    public function __construct($db)
    {
    $this->conn=$db;
    }

   public function update_details()
   {
 
    
$json_data = file_get_contents("php://input");

// Checks if it's empty or not
if( !empty($json_data) )
{

  // Decodes the JSON object to an Array
  $data = json_decode($json_data, true);

  $Client_Name=$data['Client_Name'];	
  $Client_Code=$data['Client_Code'];	 
  $Client_SPOC=$data['Client_SPOC'];	 
  $Country=$data['Country'];
  $State=$data['State'];
  $City=$data['City'];
  $Zip_Code=$data['Zip_Code'];
  $Contact_Number=$data['Contact_Number'];	 
  $Email=$data['Email']; 
  $App_Response_Time=$data['App_Response_Time']; 
  $Inv_Address=$data['Inv_Address'];	
  $Inv_Bank=$data['Inv_Bank'];	 
  $Inv_Due_Days=$data['Inv_Due_Days'];	 
  $Inv_Code=$data['Inv_Code'];
  $Is_GSTIN=$data['Is_GSTIN'];
  $Is_Package=$data['Is_Package'];
  $Is_Cancelled_Report=$data['Is_Cancelled_Report'];
  $Is_SEZ=$data['Is_SEZ'];	 
  $Contact_Applicant=$data['Contact_Applicant']; 
  $Is_Bulk_Upload=$data['Is_Bulk_Upload']; 
  $Is_Prin_Merge=$data['Is_Prin_Merge'];
  $Is_LOB_Mapping=$data['Is_LOB_Mapping'];
  $Contact_Aggregator=$data['Contact_Aggregator'];	 
  $Email_ID=$data['Email_ID']; 
  $Applicant_Check_List=$data['Applicant_Check_List']; 
  $Internal_Reference_ID=$data['Internal_Reference_ID'];	
  $Currency=$data['Currency'];	 
  $Live_DateDate=$data['Live_DateDate'];	 
 

        if ($Client_Name!= "")
        {
            $check="INSERT INTO `client`( `fullname`, `Client_Code`, `Client_SPOC`, 
            `country`, `State`, `city`, `Zip_Code`, `Contact_Number`, `email`, `App_Response_Time`, `Inv_Address`,
             `Inv_Bank`, `Inv_Due_Days`, `Inv_Code`, `Contact_Applicant`, `Is_Bulk_Upload`, `Is_Prin_Merge`, `Is_GSTIN`, 
             `Is_Package`, `Is_Cancelled_Report`, `Is_SEZ`, `Is_LOB_Mapping`, `Contact_Aggregator`, `Email_ID`,
              `Applicant_Check_List`, `Internal_Reference_ID`, `Currency`, `Live_DateDate`) VALUES ('$Client_Name',
              '$Client_Code','$Client_SPOC','$Country','$State','$City','$Zip_Code','$Contact_Number',
             '$Email','$App_Response_Time','$Inv_Address','$Inv_Bank','$Inv_Due_Days','$Inv_Code',
             '$Contact_Applicant','$Is_Bulk_Upload','$Is_Prin_Merge','$Is_GSTIN','$Is_Package','$Is_Cancelled_Report',
             '$Is_SEZ','$Is_LOB_Mapping','$Contact_Aggregator','$Email_ID',
             '$Applicant_Check_List','$Internal_Reference_ID','$Currency','$Live_DateDate') ";
             //echo $check;
             echo"<script>console.log(\"SQL Query:\"+$check)</script>";
             $result=$this->conn->query($check);
         // if($result){
           //    echo "  sucess";
          //}else{
           // echo "  error";}
             
        }
   
}

else 
{
  echo "Empty JSON object, something's wrong!";
}

                }

            }

            $basic_details=new login($db);
            $basic_details->update_details();

?>