<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #f1{
            background-color: black;
        }
    </style>
</head>
<body>
<form action="result.php" method="post">
<div class="container mt-sm-5 my-1">
                <div class="questions">  
                <p>1.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vel varius justo, sit amet imperdiet nisl. Sed id feugiat purus, sed sollicitudin sem. </p>
                <input type="radio" name="q1" value="1"> A. gravida<br>
                <input type="radio" name="q1" value="2"> B. vestibulum  <br>
                <input type="radio" name="q1" value="3"> C. imperdiet  <br>
                <input type="radio" name="q1" value="4"> D. volutpat  <br><br>
                <hr>

                </div>
                <div class="questions">  
                <p>2.Sed blandit eu mi nec accumsan. Cras vel tincidunt ipsum. Morbi lobortis convallis augue, in bibendum lorem. </p>
                 <input type="radio" name="q2" value="5"> A. Aliquam  <br>
                 <input type="radio" name="q2" value="6"> B. convallis  <br>
                 <input type="radio" name="q2" value="7"> C. nunc  <br>
                 <input type="radio" name="q2" value="8"> D. vestibulum  <br><br>
                <hr>

                </div>
                
                <div class="questions">  
                <p>3.Phasellus enim quam, semper a nisi a, lacinia ullamcorper eros. Aliquam lobortis, sapien ut interdum accumsan </p>
                 <input type="radio" name="q3" value="9"> A. quis  <br>
                 <input type="radio" name="q3" value="10"> B. Nullam  <br>
                 <input type="radio" name="q3" value="11"> C. varius  <br>
                 <input type="radio" name="q3" value="12"> D. posuere  <br><br>
                <hr>
                </div>

                <div class="questions">  
                <p>4.Maecenas quis tellus ut ante porttitor convallis. Duis a justo tortor. Proin consequat volutpat gravida. Vestibulum </p>
                 <input type="radio" name="q4" id="13"> A. vehicula  <br>
                 <input type="radio" name="q4" id="14"> B. Duis  <br>
                 <input type="radio" name="q4" id="15"> C. mi <br>
                 <input type="radio" name="q4" id="16"> D. faucibus <br><br>
                <hr>
                </div>
                <div class="ml-auto mr-sm-5"> <button class="btn btn-success">Submit</button> </div>
                </div>

</div>

                
</form>
<?php  include('footer.php');  ?>
</body>
</html>