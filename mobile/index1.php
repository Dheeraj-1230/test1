<!DOCTYPE html>
<html>
 <head>
 <title>Speed Reader App</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Yatra+One&display=swap" rel="stylesheet">
 <!-- <meta name="viewport" content="width=device-width,
initial-scale=1"> -->
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
 
 <link
href='https://fonts.googleapis.com/css?family=Lobster'
rel='stylesheet' type='text/css'>
<style>
    @media only screen and (max-width:720px)
    {
#page1
{
    background: url("background.jpg");
    background-position: center center;
    background-attachment: fixed;
    background-size: 100% 100%;
    color: #fff;
    text-align: center;
    font-family: 'Lobster', serif;
    font-weight:lighter;
    font-size:18px;
   }

   
#save
{
    color:white;
    font-family: 'Lobster', serif;
    font-weight:lighter;
}
#browse
{
    color:white;
    font-family: 'Lobster', serif;
    font-weight:lighter;
}
#error
{
    background-color: #D87777;
    width: 50%;
    margin: 20px auto;
    font-size: 20px;
}
#result
{
    font-size: 50px;
    background-color: rgba(255, 255, 255, 0.2);
    padding: 5% 0;
}
   /* Hide the number input */
.full-width-slider input {
 display: none ! important;
}
.full-width-slider .ui-slider-track {
margin-left: 15px;
}
#save
{
    font-family: 'Lobster', serif;
    font-weight:lighter;
}
}
@media only screen and (min-width:720px)
{

    #page1
    {
        background: url("background.jpg");
        background-position: center center;
        background-attachment: fixed;
        background-size: 50% 100%;
        color: #fff;
        text-align: center;
        font-family: 'Lobster', serif;
        font-weight:lighter;
        font-size:18px;
       }
       
       /*error message*/
       #error
       {
        background-color: #D87777;
        width: 50%;
        margin: 20px auto;
        font-size: 20px;
       }
       /*read word*/
       #result
       {
        font-size: 50px;
        background-color: rgba(255, 255, 255, 0.2);
        padding: 5% 0;
       }
       /* Hide the number input */
    .full-width-slider input
     {
     display: none ! important;
    }
    .full-width-slider .ui-slider-track 
    {
    margin-left: 15%;
    }
    #start
    {
        width:50%;
        margin-left:25%;
    }
    #url
    {
        width:50%;
        margin-left:25%;
    }
    #submit
    {
        width:50%;
        margin-left:25%;
    }
    #resume
    {
        width:50%;
        margin-left:25%;
    }
    #save
    {
        color:white;
        font-family: 'Lobster', serif;
        font-weight:lighter;
    }

#browse
{
    color:white;
    font-family: 'Lobster', serif;
    font-weight:lighter;
}
    
    #result
    {
        width:50%;
        margin-left:25%;
    }
    #userInput
    {
        width:50%;
        margin-left:25%;
    }
    #pause
    {
        width:50%;
        margin-left:25%;
    }
    #new
    {
        width:50%;
        margin-left:25%;
    }
}

</style>
 </head>

 <body>
<!-- <a href="list/index2.html">save</a> -->
 <!--Page1-->
 
 <div data-role="page" id="page1" data-theme="a">
 <div data-role="header">
 </div>
 <!-- <img src="bookmark.jpg" id="bookmark"> -->
 <div role="main" class="ui-content">
 <!--title-->
 <div class="header">
 <h1>Flash Reader</h1>
<p>For an efficient reading
experience.</p>
 </div>

 <div id="controls">
 <!--Font-size and speed-->
 <div class="ui-grid-a">
 <div class="ui-block-a">
 <div>
 FONT SIZE: <span
id="fontsize">50</span> px.
 </div>
 </div>
<div class="ui-block-b">
 <div>
 <span
id="speed">300</span> WORDS PER MINUTE.
 </div>
 </div>
 </div>
 <!--Font-size and speed-->
 <div class="ui-grid-a">
 <div class="ui-block-a">
 <form class="full-widthslider">
 <input type="range" name="fontsizeslider"
id="fontsizeslider" min="20" max="100" value="50" step="5"
data-highlight="true">
 </form>
 </div>
 <div class="ui-block-b">
 <form class="full-widthslider">
 <input type="range" name="speedslider"
id="speedslider" min="50" max="600" value="300" step="50"
data-highlight="true">
 </form>
 </div>
 </div>
 <!--Progress-->
 <form class="full-width-slider">
 <label
for="progressslider">PROGRESS: <span
id="percentage">0</span>%</label>
 <input type="range"
name="progressslider" id="progressslider" min="0"
max="100" value="0" data-highlight="true">
 </form>
 </div>

 <!--the read word-->
 <div id="result">word</div>

 <!--error message-->
 <div id="error">
 Please Paste text in the box
 </div>

 <!--User Inputs-->
 <div id="inputs">
 <!-- <form action="" method="POST">
            <textarea id="url" name="url"rows="2" cols="70" placeholder="  Enter Any URL to Get Web Scrapping to Below TextArea"></textarea>
            <input type="submit" class="sbmt" id="submit" name="submit" value="Submit" onclick="myfunction()">
        </form> -->
        <textarea id="userInput"></textarea>
     

<?php
    if(isset($_POST['submit'])){
        include('simple_html_dom.php');
        $url=$_POST['url'];
        $data=" ";
        echo "<br>";
        $html=file_get_html($url);
        ?>
          <?php
         foreach($html->find('p') as $a){
             $data.=addslashes($a->plaintext);
        //   echo  "<input type='submit' value='Read' name='$a->plaintext' id='$a->plaintext'>($a->plaintext)";
        //   echo "<br>";
         };
         ?>
         <?php
         
         
        //  $data="Reliance Jio Infocomm Limited, d/b/a Jio, is an Indian telecommunications company and a subsidiary of Jio Platforms, headquartered in Mumbai, Maharashtra, India. It operates a national LTE network with coverage across all 22 telecom circles. It does not offer 2G or 3G service, and instead uses only voice over LTE to provide voice service on its 4G network.[7][8]";
        ?>
    <script>
        var val="<?php echo ($data); ?>";
        document.getElementById("userInput").innerHTML=val;
    </script>
        <?php
       
    }
    ?>
    



 <!--text input-->
 
 <!--buttons-->
 <button id="start">Start
Reading</button>
 <button id="new">New</button>
 <button id="pause">Pause</button>
 <button id="resume">Resume</button>
 </div>

 </div>
 <a href="index2.html" id="save" target="_self">Save Topics</a><br><br>
 <a href="index.php" id="browse" target="_self">Browse Content</a>
 <div data-role="footer" data-position="fixed">
 <div data-role="navbar">
 <ul>
 <li><a href="#page1" data-transition="pop" data-icon="home" class="ui-btn-active uistate-persist" >Home</a></li>
 <li><a href="#page2" data-transition="pop" data-icon="info" >About</a></li>
 <li><a href="#page3" data-transition="pop" data-icon="mail" >Contact</a></li>
 </ul>
 </div>
 </div>

 </div><!--Page1-->


 <!--Page2-->
 <div data-role="page" id="page2" data-theme="a">
 <div data-role="header">
 </div>

 <div role="main" class="ui-content">
 <ul data-role="listview" data-filter="true">

<li data-role="list-divider">Main
Information</li>
 <li><a href="">Made By Dheeraj Kumar Jha</a></li>
 <li><a href="">Delta Project</a></li>

<li data-role="listdivider">Branch</li>

<li>
 <h1>Mechanical Engineering</h1>
</li>
 
 </ul>

 </div>

 <div data-role="footer" data-position="fixed">
 <div data-role="navbar">
 <ul>
 <li><a href="#page1" data-transition="pop" data-icon="home">Home</a></li>
 <li><a href="#page2" data-transition="pop" data-icon="info" class="ui-btn-active
ui-state-persist" >About</a></li>
 <li><a href="#page3" data-transition="pop" data-icon="mail" >Contact</a></li>
 </ul>
 </div>
 </div>

 </div><!--Page2-->

 <!--Page3-->
 <div data-role="page" id="page3" data-theme="a">
 <div data-role="header">
 </div>

 <div role="main" class="ui-content">
 <div class="ui-grid-b">
 <div class="ui-block-a">
 <a href="#" data-role="button">Email</a>
 <p>some text some text<br> dkjha@gmail.com</p>

 </div>
<div class="ui-block-b">
 <a href="#" data-role="button">Live Chat</a>
 <p>some text some text<br> @Dheeraj </p>

</div>
<div class="ui-block-c">
 <a href="#" data-role="button">Phone</a>
 <p>some text some text <br>8766262830</p>

</div>
 </div>
 </div>

 <div data-role="footer" data-position="fixed">
 <div data-role="navbar">
 <ul>
 <li><a href="#page1" data-transition="pop" data-icon="home">Home</a></li>
 <li><a href="#page2" data-transition="pop" data-icon="info">About</a></li>
 <li><a href="#page3" data-transition="pop" data-icon="mail" class="ui-btn-active uistate-persist">Contact</a></li>
 </ul>
 </div>
 </div>
 
 </div><!--Page3-->






     <script>
        $(function(){

//declare variables
var myArray;
var inputLength;
var reading = false;
var counter;
var action;
var frequency = 200;
//on page load hide elements we don't need, leave only text area and start button
$("#new").hide();
$("#resume").hide();
$("#pause").hide();
$("#controls").hide();
$("#result").hide();
$("#error").hide();


//click on Start Reading
$("#start").click(function(){
  
//     document.getElementById("submit").style.visibility = "hidden";
//    $("#save").hide();
//    $("#submit").hide();
// $("#url").hide();

//get text and split it to words inside an array  //\s matches spaces, tabs, new lines, etc and + means one or more.
myArray = $("#userInput").val().split(/\s+/);

//get the number of words
inputLength = myArray.length;

if(inputLength>1){
reading = true;

$("#start").hide();
// $("#submit").hide();
// $("#url").hide();
$("#error").hide();
$("#userInput").hide();
$("#new").show();
$("#pause").show();
// $("#paste").hide();
$("#result").show();
$("#controls").show();
$("#browse").hide();

$("#progressslider").attr("max", inputLength-1);
counter = 0;
$("#result").show();
$("#result").text(myArray[counter]);

action = setInterval(read, frequency);

}else{
$("#error").show();
}

});


//Click on New
$("#new").click(function(){
//reload page
location.reload();
});

//Click on Pause
$("#pause").click(function(){
//stop reading and switch to none reading mode
clearInterval(action);
reading = false;

//hide pause and show resume
$("#pause").hide();
$("#resume").show();

});

//Click on Resume
$("#resume").click(function(){

//start reading
action = setInterval(read, frequency);

//go back to reading mode
reading = true;

//hide resume and show pause
$("#resume").hide();
$("#pause").show();

});

//Change fontSize
$("#fontsizeslider").on("slidestop",
function(event,ui){
//refresh the slider
$("#fontsizeslider").slider("refresh");

//get the value of slider
var slidervalue =
parseInt($("#fontsizeslider").val());

$("#result").css("fontSize", slidervalue);
$("#fontsize").text(slidervalue);
});

//change speed
$("#speedslider").on("slidestop", function(event,ui){

//refresh the slider
$("#speedslider").slider("refresh");

//get the value of slider
var slidervalue =
parseInt($("#speedslider").val());

$("#speed").text(slidervalue);

//stop reading
clearInterval(action);

//change frequency
frequency = 60000/slidervalue;

//resume reading if we are in reading mode
if(reading){
action = setInterval(read, frequency);
}
});

//progress slider
$("#progressslider").on("slidestop", function(event,ui){

//refresh the slider
$("#progressslider").slider("refresh");

//get the value of slider
var slidervalue =
parseInt($("#progressslider").val());

//stop reading
clearInterval(action);

//change counter
counter = slidervalue;

//change word
$("#result").text(myArray[counter]);

//change value of progress

$("#percentage").text(Math.floor(counter/(inputLength-1)*100));

//resume reading if we are in reading mode
if(reading){
action = setInterval(read, frequency);
}
});
//functions

function read(){
if(counter == inputLength-1){//last word
clearInterval(action);
reading = false; //move to none reading mode
$("#pause").hide();
}else{
//counter goes up by one
counter++;

//get word
$("#result").text(myArray[counter]);

//change progress slider value and refresh

$("#progressslider").val(counter).slider('refresh');

//change text of percentage

$("#percentage").text(Math.floor(counter/(inputLength-1)*100));
}



}
// $("#save").click(function(){
//  $.mobile.changePage("index2.html");

// }

});

    </script>


 </body>
</html>