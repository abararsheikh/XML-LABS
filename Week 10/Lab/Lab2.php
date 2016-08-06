
<?php
if(isset($_POST['submit']))
{
    $client = new SoapClient("http://www.webservicex.net/length.asmx?WSDL");
//var_dump($client=>getType());

    //$LengthValue =1000;
    //$FromLengthUnit ="Centimeters";
    // $ToLengthUnit ="Meters";

    $inputValue= $_POST['value'];
    $fromLength = $_POST['fromLength'];
    $ToLength = $_POST['ToLength'];

    $param = array("LengthValue"=>$inputValue,"fromLengthUnit"=>$fromLength,"toLengthUnit"=>$ToLength);
    $result = $client->ChangeLengthUnit($param);
    $convertResult = $result->ChangeLengthUnitResult;

  // echo $convertResult;

}
else
{
    echo "Please select input";
}
?>

<hrml>
    <head>
        <title>Length/Distance Unit Convertor</title>
    </head>
</hrml>
<body>
<form method="post" action="">
    <input type="text" name="value"/><p></p>
    <select name ="fromLength">
        <option value="Angstroms">Angstroms</option>
        <option value="Nanometers">Nanometers</option>
        <option value="Microinch">Microinch</option>
        <option value="Microns">Microns</option>
        <option value="Mils">Mils</option>
        <option value="Millimeters">Millimeters</option>
        <option value="Centimeters">Centimeters</option>
        <option value="Inches">Inches</option>
        <option value="Links">Links</option>
        <option value="Spans">Spans</option>
        <option value="Feet">Feet</option>
        <option value="Kilometers">Kilometers</option>
        <option value="Miles">Miles</option>
    </select>

    <select name="ToLength">
        <option value="Angstroms">Angstroms</option>
        <option value="Nanometers">Nanometers</option>
        <option value="Microinch">Microinch</option>
        <option value="Microns">Microns</option>
        <option value="Mils">Mils</option>
        <option value="Millimeters">Millimeters</option>
        <option value="Centimeters">Centimeters</option>
        <option value="Inches">Inches</option>
        <option value="Links">Links</option>
        <option value="Spans">Spans</option>
        <option value="Feet">Feet</option>
        <option value="Kilometers">Kilometers</option>
        <option value="Miles">Miles</option>
    </select>
    <br/><p></p>
    <input type="submit" name="submit" value="submit"/><br/>
    <p></p>
<?php if(isset($convertResult)) echo $convertResult;?>
</form>
</body>

