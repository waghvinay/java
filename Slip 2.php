Q1


Fristpage.html
<!DOCTYPEhtml>
<html>
<head>
<title>Changepreferences</title>
</head>
<body>
<h1>Changepreferences</h1>
<formaction=”secondpage.php”method=”post”>
<labelfor=”fontstyle”>FontStyle:</label>
<selectname=”fontstyle”id=”fontstyle”>
<optionvalue=”Arial”>Arial</option>
<optionvalue=”TimesNewRoman”>TimesNewRoman</option>
<optionvalue=”Verdana”>Verdana</option>
</select><br><br>
<labelfor=”fontsize”>FontSize:</label>
<selectname=”fontsize”id=”fontsize”>
<optionvalue=”12”>12</option>
<optionvalue=”14”>14</option>
<optionvalue=”16”>16</option>
</select><br><br>
<labelfor=”fontcolor”>FontColor:</label>
<inputtype=”color”name=”fontcolor”id=”fontcolor”><br><br>
<labelfor=”bgcolor”>BackgroundColor:</label>
<inputtype=”color”name=”bgcolor”id=”bgcolor”><br><br>
<inputtype=”submit”name=”submit”value=”Save”>
</form>
</body>
</html>


Secondpage.php
<?php
If(isset($_POST[‘submit’])){
$fontstyle=$_POST[‘fontstyle’];
$fontsize=$_POST[‘fontsize’];
$fontcolor=$_POST[‘fontcolor’];
$bgcolor=$_POST[‘bgcolor’];
//Setthecookievalues
Setcookie(‘fontstyle’,$fontstyle,time()+86400);
Setcookie(‘fontsize’,$fontsize,time()+86400);
Setcookie(‘fontcolor’,$fontcolor,time()+86400);
Setcookie(‘bgcolor’,$bgcolor,time()+86400)
//Redirecttothenextpage
Header(‘Location:thirdpage.php’);
Exit();
}
?

Thirdpage.php
<?php
//Retrievethecookievalues
$fontstyle=isset($_COOKIE[‘fontstyle’])?$_COOKIE[‘fontstyle’]:‘Arial’;
$fontsize=isset($_COOKIE[‘fontsize’])?$_COOKIE[‘fontsize’]:‘12’;
$fontcolor=isset($_COOKIE[‘fontcolor’])?$_COOKIE[‘fontcolor’]:‘#000000’;
$bgcolor=isset($_COOKIE[‘bgcolor’])?$_COOKIE[‘bgcolor’]:‘#FFFFFF’;
?>
<!DOCTYPEhtml>
<html>
<head>
<title>Pagewithnewsettings</title>
<styletype=”text/css”>
Body{
Font-family:<?phpecho$fontstyle?>;
Font-size:<?phpecho$fontsize?>px;
Color:<?phpecho$fontcolor?>;
Background-color:<?phpecho$bgcolor?>;
}
</style>
</head>
<body>
<h1>Pagewithnewsettings</h1>
<p>Thisisthepagewiththenewsettings.Thefontstyleis<?phpecho$fontstyle?>,the
fontsizeis<?phpecho$fontsize?>px,thefontcoloris<?phpecho$fontcolor?>,andthe
backgroundcoloris<?phpecho$bgcolor?>.</p>
</body>
</html>

---------------------------------------------------------------------------------------------------------

Q2

Importnumpyasnp
Importpandasaspd
Fromsklearn.model_selectionimporttrain_test_split
Fromsklearn.linear_modelimportLinearRegression

Data={‘YearsExperience’:[1,2,3,4,5,6,7,8,9,10],
‘Salary’:[50000,60000,70000,80000,90000,100000,110000,120000,130000,140000]}
Df=pd.DataFrame(data)

X=df.iloc[:,0:1].values
Y=df.iloc[:,1].values

X_train,X_test,y_train,y_test=train_test_split(X,y,test_size=0.3,random_state=0)


Print(“X_train:\n”,X_train)
Print(“y_train:\n”,y_train)
Print(“X_test:\n”,X_test)
Print(“y_test:\n”,y_test)

Regressor=LinearRegression()
Regressor.fit(X_train,y_train)

Print(“Coefficients:”,regressor.coef_)
Print(“Intercept:”,regressor.intercept_)