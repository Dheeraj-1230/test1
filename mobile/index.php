<!DOCTYPE html>
<html>
<head>
    <title>
    testing web scrapping
    </title>
    <style>
    @media only screen and (max-width:720px)
    {
            body{
                background:url("back11.jpg");
                background-position: center center;
                background-attachment: fixed;
                background-size: 100% 100%;
                color:white;
                text-align:center;
                 }
            textarea
            {
                height:30px;
                border: 1px black solid;


                 }
                 b
                 {
                     font-size:30px;
                   
                     text-align:center;
                     font-weight:bolder;
                 }
                 #submit
                 {
                     height:40px;
                     width:130px;
                     font-size:20px;
                     font-weight:bold;
                     color:white;
                     background-color:rgb(50,106,199);
                     border: 0.5px white solid;

                 }
    }
    @media only screen and (min-width:720px)
    {
            body{
                background:url("back11.jpg");
                background-position: center center;
                background-attachment: fixed;
                background-size: 100% 100%;
                color:white;
                text-align:center;
                 }
            textarea
            {
                width:800px;
                height:30px;
                border: 1px black solid;
                 }
                 b
                 {
                     font-size:30px;
                   
                     text-align:center;
                     font-weight:bolder;
                 }
                 #submit
                 {
                     height:40px;
                     width:130px;
                     font-size:20px;
                     font-weight:bold;
                     color:white;
                     background-color:rgb(50,106,199);
                     border: 0.5px white solid;

                 }
    }

    </style>
</head>
<body>
<br>
<br><br><br><br><br><br>
<br>

<b>ENTER URL</b><br><br>
<form action="index1.php" method="POST">
<textarea id="url" name="url" rows="1" cols="50" placeholder="Enter URL of any website"></textarea><br><br><br>
<input type="submit" id="submit" name="submit" value="Enter">
</form>
</body>
</html>