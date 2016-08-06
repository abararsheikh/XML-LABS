<?php
if(isset($_POST['getweight'])) {

    $weight = $_POST['weight'];
    $fromunit = $_POST['fromunit'];
    $tounit = $_POST['tounit'];
    $client = new soapClient('http://www.webservicex.net/ConvertWeight.asmx?wsdl');


    $params = [
        'Weight' => $weight,
        'FromUnit' => $fromunit,
        'ToUnit' => $tounit
    ];

    //or above thing you can write as
 //   $params=array("Weight"=>$weight,"FromUnit"=>$fromunit,"ToUnit"=>$tounit);
    $result = $client->ConvertWeight($params)->ConvertWeightResult;  //this also you can write as
                                                                     //$result=$result->ConvertWeightResult
    echo "$weight $fromunit is " . $result . " $tounit";
}
else{
    echo  "Please enter values";
}
?>

<form method="post" action="">
    Weight : <input type="text" name="weight" /><br />
    From unit : <select name="fromunit" >
                    <option value = "Grams">Grams</option>
                    <option value = "Kilograms">kiloGrams</option>
               </select>
    <br />
    To unit : <select name="tounit" >
                    <option value = "Grams">Grams</option>
                    <option value = "Kilograms">kiloGrams</option>
            </select><br />
    <input type="submit" name="getweight" value="Get weight" />
</form>
