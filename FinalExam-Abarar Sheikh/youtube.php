<!-- This is created by Javascript ..You can also create by jQuery see next example for that listemployejquery.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>Employee List</h2>

<div id="employeeList">
    <!-- output goes here-->
</div>
<!--This script indicate the javascript Making Ajax Request by Javascript ..making request for the JSON file -->
<script>
    var xhr = new XMLHttpRequest();     // creating AJAX Request
    xhr.open('GET', 'jsonfile.json');
    xhr.onreadystatechange = function () {
        if(xhr.readyState === 4 && xhr.status === 200) {   //if (JSON file reading)it is finished and ok then do following
            var employees = JSON.parse(xhr.responseText);  //using parse getting response from the JSON file
            //making response as a text.
            var statusHTML = '<ul>';    // open <ul> here ...this is like echo "<ul>"

            for (var i=0; i<employees.length; i += 1) {
                //Employees contains all the objecs and object is an array
                statusHTML += '<li>' + '<a href>' + employees[i].title +'</a>' +   "<br> "+ "Published : " +employees[i].date +
                    " by " + employees[i].author  ;
                statusHTML += '</li>';
            }

            statusHTML += '</ul>';    // close </ul> here
            document.getElementById('employeeList').innerHTML = statusHTML;
        }
    };
    xhr.send();
</script>
</body>
</html>
