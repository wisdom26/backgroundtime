<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Think</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='main.js'></script>
</head>
<body>
    <i class="fa fa-header" aria-hidden="true"> 
         <div class="logo">
          <a href=""><i class="th">Think</i></a>
        </div>
        
<div class="navbar">
        <ul>
            <li >
                <a href="#"><span class="material-symbols-outlined">
home
</span></a>
            </li>
            <li>
                <a href="login.php"><span class="material-symbols-outlined">
taunt
</span></a>
            </li>
            <li>
                <a href="#Recipe"><span class="material-symbols-outlined">
menu_book
</span></a>
            </li>
            <li>
                <a href="#Story"><span class="material-symbols-outlined">
auto_stories
</span></a>
            </li>
            <li>
                <a href="#About"><span class="material-symbols-outlined">
diversity_3
</span></a>
            </li>
            <li>
                <a href="#contact"><span class="material-symbols-outlined">
contacts
</span></a>
            </li>
            <li>
                <a href="#loaction"><span class="material-symbols-outlined">
pin_drop
</span></a>
            </li>

        </ul>
    </div>
    </i>
<?php
date_default_timezone_set("asia/calcutta");
$current_time=time();
$Htime=date('H',$current_time);//H is 0 to 24
$itime=date('i',$current_time);
$stime=date('s',$current_time);
$a=$Htime**2;
$b=$itime*3;
$c=$stime*5;
echo "<body style='background:rgb($a,$b,$c)';>";
echo "<h1 style='background:rgb($a,$b,$c);
color:white;
text-align: center;
font-size: 80px;
font-weight: bold;
font-family: 'Times New Roman', Times, serif;
'><i id= 'text'></i></h1>";
// echo "<h1 >$a,$b,$c </h1>";
?>
<?php
echo "<h1 style='position: absolute;
top: 7%;
left: 75%;
transform: translate(-50%, -50%);
color: #fff;
text-align: center;'> <i>Time</i> ".date("h:i:s A").".</h1>";//h is 0 to 12
?>
</form>
<div class="container">
<div id="carousel1" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
<li data-target="#carousel1" data-slide-to="0" class="active"> </li>
<li data-target="#carousel1" data-slide-to="1"> </li>
<li data-target="#carousel1" data-slide-to="2"> </li>
</ol>
<div class="carousel-inner">
<div class="item active">
<img src="pic1.avif" >
</div>
<div class="item">
<img src="pic2.avif" >
</div>
<div class="item">
<img src="pic3.avif" >
</div>
</div>
<a class="left carousel-control" href="#carousel1" data-slide="prev">
<span class="glyphicon glyphicon-envelope-left"></span>
<span class="sr-only"> Previous </span>
</a>
<a class="right carousel-control" href="#carousel1" data-slide="next">
<span class="glyphicon glyphicon-envelope-right"> </span>
<span class="sr-only"> Next </span>
</a>
</div>
<br><br>
</div>
<br><br>
<div class="container">
    <P class="bg-light" >
        <b style=" color: rgb(243, 231, 231);">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus porro corporis, similique temporibus error sint expedita pariatur nobis! Ipsam reiciendis a facere similique commodi numquam modi perferendis pariatur maxime laudantium.</b>
    </P>

    <br><br>
<section>
    <h1 style="background: rgb(243, 231, 231);"> This Type</h1>
    <P class="bg-light" id="">
        <b style=" color: rgb(243, 231, 231);">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus porro corporis, similique temporibus error sint expedita pariatur nobis! Ipsam reiciendis a facere similique commodi numquam modi perferendis pariatur maxime laudantium.</b>
    </P>
</section>
<br><br>
<section>
    <h1 style="background: rgb(243, 231, 231);"> Recipe</h1>
    <P class="bg-light" id="Recipe">
        <b style=" color: rgb(243, 231, 231);">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus porro corporis, similique temporibus error sint expedita pariatur nobis! Ipsam reiciendis a facere similique commodi numquam modi perferendis pariatur maxime laudantium.</b>
    </P>
</section>
<br><br>
<section>
    <h1 style="background: rgb(243, 231, 231);"> Story</h1>
    <P class="bg-light" id="Story" >
        <b style=" color: rgb(243, 231, 231);">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus porro corporis, similique temporibus error sint expedita pariatur nobis! Ipsam reiciendis a facere similique commodi numquam modi perferendis pariatur maxime laudantium.</b>
    </P>
</section>
<br><br>
<section>
    <h1 style="background: rgb(243, 231, 231);"> About</h1>
    <P class="bg-light" id="About" >
        <b style=" color: rgb(243, 231, 231);">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus porro corporis, similique temporibus error sint expedita pariatur nobis! Ipsam reiciendis a facere similique commodi numquam modi perferendis pariatur maxime laudantium.</b>
    </P>
</section>
<br><br>
<section>
    <h1 style="background: rgb(243, 231, 231);"> Contact</h1>
    <P class="bg-light" id="contact">
        <b style=" color: rgb(243, 231, 231);">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus porro corporis, similique temporibus error sint expedita pariatur nobis! Ipsam reiciendis a facere similique commodi numquam modi perferendis pariatur maxime laudantium.</b>
    </P>
</section>
</div>

<!-- <button style='position: absolute;
top: 95%;
left: 50%;
transform: translate(-50%, -50%);
color:black;
text-align: center;'>Reload Page</button> -->
<script type="text/javascript">
    var i = 0,
    text;
text = "Welcome ! The New Think";

function typing() {
    if (i < text.length) {
        document.getElementById("text").innerHTML += text.charAt(i);
        i++;
        setInterval(typing, 10000);
        setTimeout(typing, 800);
    }
}
typing();
</script>
<i class="fa fa-footer">
<footer class="container-fluid"  >
        
        <!-- <div class="list-group">
            <ul>
                <li>
            <a href="#" class="list-group-item list-group-item-action active"><span class="material-symbols-outlined">
settings
</span></a>
</li>
<li >
            <a href="#" class=" list-group-item list-group-item-action"><span class="material-symbols-outlined">
help
</span></a>
</li>
<li>
            <a href="#" class="list-group-item list-group-item-action disabled"><span class="material-symbols-outlined">
info
</span></a>
</li>
        </div> -->
        <div><a href="#"  ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg></a>&nbsp;
<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-meta" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.217 5.243C9.145 3.988 10.171 3 11.483 3 13.96 3 16 6.153 16.001 9.907c0 2.29-.986 3.725-2.757 3.725-1.543 0-2.395-.866-3.924-3.424l-.667-1.123-.118-.197a54.944 54.944 0 0 0-.53-.877l-1.178 2.08c-1.673 2.925-2.615 3.541-3.923 3.541C1.086 13.632 0 12.217 0 9.973 0 6.388 1.995 3 4.598 3c.319 0 .625.039.924.122.31.086.611.22.913.407.577.359 1.154.915 1.782 1.714Zm1.516 2.224c-.252-.41-.494-.787-.727-1.133L9 6.326c.845-1.305 1.543-1.954 2.372-1.954 1.723 0 3.102 2.537 3.102 5.653 0 1.188-.39 1.877-1.195 1.877-.773 0-1.142-.51-2.61-2.87l-.937-1.565ZM4.846 4.756c.725.1 1.385.634 2.34 2.001A212.13 212.13 0 0 0 5.551 9.3c-1.357 2.126-1.826 2.603-2.581 2.603-.777 0-1.24-.682-1.24-1.9 0-2.602 1.298-5.264 2.846-5.264.091 0 .181.006.27.018Z"/>
</svg></a>&nbsp;
<a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-messenger" viewBox="0 0 16 16">
  <path d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z"/>
</svg></a>&nbsp;


<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-rss" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M5.5 12a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-3-8.5a1 1 0 0 1 1-1c5.523 0 10 4.477 10 10a1 1 0 1 1-2 0 8 8 0 0 0-8-8 1 1 0 0 1-1-1zm0 4a1 1 0 0 1 1-1 6 6 0 0 1 6 6 1 1 0 1 1-2 0 4 4 0 0 0-4-4 1 1 0 0 1-1-1z"/>
</svg></a>&nbsp;
<a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg></a>&nbsp;


</div>
        <div><i>&copy;2023 Delicious Eats Restaurant. all right reserved.</i></div>
</ul>
    </footer>
</i>
</body>
</html> 