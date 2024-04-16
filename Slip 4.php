Q1

Firstpage.php
<?php
Session_start();
?>
<!DOCTYPEhtml>
<html>
<head>
<title>EmployeeDetails</title>
</head>
<body>
<h1>EmployeeDetails</h1>
<formmethod=”POST”action=”Secondpage.php”>
<labelfor=”eno”>EmployeeNo:</label>
<inputtype=”text”id=”eno”name=”eno”><br><br>
<labelfor=”ename”>EmployeeName:</label>
<inputtype=”text”id=”ename”name=”ename”><br><br>
<labelfor=”address”>Address:</label>
<textareaid=”address”name=”address”></textarea><br><br>
<inputtype=”submit”value=”Next”>
</form>
</body>
</html>
<?php

If(isset($_POST[‘eno’])&&isset($_POST[‘ename’])&&isset($_POST[‘address’])){
$_SESSION[‘eno’]=$_POST[‘eno’];
$_SESSION[‘ename’]=$_POST[‘ename’];
$_SESSION[‘address’]=$_POST[‘address’];
}
?>


Secondpage.php
<?php
Session_start();
?>
<!DOCTYPEhtml>
<html>
<head>
<title>Earnings</title>
</head>
<body>
<h1>Earnings</h1>
<formmethod=”POST”action=”thirdpage.php”>
<labelfor=”basic”>Basic:</label>
<inputtype=”text”id=”basic”name=”basic”><br><br>
<labelfor=”da”>DA:</label>
<inputtype=”text”id=”da”name=”da”><br><br>
<labelfor=”hra”>HRA:</label>
<inputtype=”text”id=”hra”name=”hra”><br><br>
<inputtype=”submit”value=”Next”>
</form>
</body>
</html>
<?php

If(isset($_POST[‘basic’])&&isset($_POST[‘da’])&&isset($_POST[‘hra’])){
$_SESSION[‘basic’]=$_POST[‘basic’];
$_SESSION[‘da’]=$_POST[‘da’];
$_SESSION[‘hra’]=$_POST[‘hra’];
}
?>



Thirdpage.php
<?php
Session_start();

$total=$_SESSION[‘basic’]+$_SESSION[‘da’]+$_SESSION[‘hra’];
?>
<!DOCTYPEhtml>
<html>
<head>
<title>EmployeeInformation</title>
</head>
<body>
<h1>EmployeeInformation</h1>
<p><strong>EmployeeNo:</strong><?phpecho$_SESSION[‘eno’];?></p>
<p><strong>EmployeeName:</strong><?phpecho$_SESSION[‘ename’];?></p>
<p><strong>Address:</strong><?phpecho$_SESSION[‘address’];?></p>
<p><strong>Basic:</strong><?phpecho$_SESSION[‘basic’];?></p>
<p><strong>DA:</strong><?phpecho$_SESSION[‘da’];?></p>
<p><strong>HRA:</strong><?phpecho$_SESSION[‘hra’];?></p>
<p><strong>TotalEarnings:</strong><?phpecho$total;?></p>
</body>
</html>

------------------------------------------------------------------------------------------------------

Q2

Importpandasaspd
Importrandom
Fromsklearn.linear_modelimportLinearRegression

Fish_species=[‘Tuna’,‘Salmon’,‘Trout’,‘Bass’,‘Sardine’,‘Cod’,‘Mackerel’]
Weights=[]
Foriinrange(50):
Fish_weight=[]
Forjinrange(7):
Weight=random.randint(1,20)
Fish_weight.append(weight)
Weights.append(fish_weight)
Df=pd.DataFrame(weights,columns=fish_species)

X=df.iloc[:,:-1]#independentvariables
Y=df.iloc[:,-1]#targetvariable
Model=LinearRegression()
Model.fit(X,y)

New_fish=[[10,12,15,7,4,8]]#exampleinput
Predicted_weight=model.predict(new_fish)
Print(“Predictedweight:”,predicted_weight)