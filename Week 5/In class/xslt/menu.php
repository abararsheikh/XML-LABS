<?php
if(isset($_GET['calorie']))
{
    $cal = $_GET['calorie'];
    $xsldoc = new DOMDocument();  // create dom object and load the xslt document
    $xsldoc->load('menu.xslt');

    $xmldoc = new DOMDocument();   // create another dom object and load the xml document
    $xmldoc->load('menu.xml');

    $xsl = new XSLTProcessor();     // now what ever user enter pass that value to processor by param
    $xsl->setParameter('', 'calories', $cal);
    $xsl->importStyleSheet($xsldoc);             // and put that xsldoc
    $result = $xsl->transformToXML($xmldoc);
}

?>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" action="menu.php" method="get">
    <div>
        Enter colories: 
        <input type="text" name="calorie" />
        <input type="submit"  value="Get Menu" />
        
        <div>
            <?php
             if(isset($result)){
                 
                 echo $result;
             }
            ?>
        </div>
    </div>
    </form>
</body>
</html>


