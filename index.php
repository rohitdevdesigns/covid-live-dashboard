<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19 | CodingBattalion</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet/less" type="text/css" href="css/style.less" />

 <meta name="description" content="Wake up - Stay home - sleep well - Repeat ">
    <meta name="keywords" content="india, coronavirus, covid-19, virus">
    <meta name="author" content="CodingBattalion">
    <meta name="copyright" content="codingbattalion" />
<meta name="language" content="English" />
<meta name="robots" content="index, follow" />
<meta name="contact" content="codingbattalion.com">
<meta name="robots" content="NOODP" />
<meta name="googlebot" content="index, follow" />
<meta name="bingbot" content="index, follow" />
<meta name="revisit-after" content="daily">
<meta name="allow-search" content="yes" />
  <meta name="geo.position" content="28.6438195; 77.2918434">
<meta name="geo.placename" content="India">
<meta name="geo.region" content="Bihar">
<meta property="og:url" content="http://codingbattalion.com/covid" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
</head>

<body class="dark">
        <!--header-->
    <div class="heading-grid">

    <div class="side-grid"> 
    <nav class="navbar">
      <ul class="navbar-nav">
        <li class="nav-item has-dropdown">  
          <a href="../index.html" class="round">
              
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 2 98 98" style="enable-background:new 0 2 98 98;" xml:space="preserve" width="1.5rem" height="2.5rem">
<style type="text/css">
	.st0{fill:url(#SVGID_1_);}
</style>
<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="49" y1="7.7998" x2="49" y2="94.2002">
	<stop offset="0" style="stop-color:#00EFD1"/>
	<stop offset="1" style="stop-color:#00ACEA"/>
</linearGradient>
<path class="st0" d="M86,41.6l-36-33c-1.2-1.1-3-1-4.1,0.1l-34,33C11.3,42.2,11,43,11,43.8v47.4c0,1.7,1.3,3,3,3h25c1.7,0,3-1.3,3-3  v-22h14v22c0,1.7,1.3,3,3,3h25c1.7,0,3-1.3,3-3V43.8C87,43,86.6,42.2,86,41.6z M81,88.2H62v-22c0-1.7-1.3-3-3-3H39c-1.7,0-3,1.3-3,3  v22H17V45.1l31.1-30.1L81,45.1V88.2z"/>
</svg>
</a>
        </li>
      </ul>
    </nav>
    </div>

    <div class="heading">Covid-19 live updates of India</div>

    <div class="side-grid2">
    <nav class="navbar">
      <ul class="navbar-nav">
        <li class="nav-item has-dropdown">
          <a class="tbtn" href="#">Themes</a>
          <ul class="dropdown">
            <li class="dropdown-item">
              <a id="light" href="#">light</a>
            </li>
            <li class="dropdown-item">
              <a id="dark" href="#">dark</a>
            </li>
            <li class="dropdown-item">
              <a id="solar" href="#">solarize</a>
            </li>
          </ul>
        </li>
        </ul>
     </nav>
    </div>

    </div>
    <!--header-->

                    <!--middle-->
    <div class="supreme-grid">   
    <div class="supreme-grid-lb"> <!-- supreme grid left box-->
    <div class="boc-l2-side-l"></div>
    <div class="box-l2">

<div class="main-grid"> <!--1-->
   

    <div class="layer-grid">
    <table>
    <tr>
        <td class="time" id="time" colspan="3"></td>
    </tr>
    <tr>
        <th class="total c"><svg width="10" height="10">
   <circle cx="5" cy="5" r="4" stroke="none" stroke-width="4" fill="#ff073a" />
</svg> Confirmed</th>
        <th class="total r"><svg width="10" height="10">
   <circle cx="5" cy="5" r="4" stroke="none" stroke-width="4" fill="#28a745" />
</svg> Recovered</th>
        <th class="total d"><svg width="10" height="10">
   <circle cx="5" cy="5" r="4" stroke="none" stroke-width="4" fill="#6C757D" />

</svg> Deaths</th>
    </tr>
    <tr>
        <td class="total c s" id="tconfirmed"></td>
        <td class="total r s" id="trecovered"></td>
        <td class="total d s" id="tdeaths"></td>
    </tr>
    <tr>
        <td class="msg" colspan="3">Compiled from State Govt. numbers</td>
    </tr>
   

    </table>
    
    </div>
 
</div> <!--1-->

    
<div class="main-grid"> <!--2-->

    <div class="grid1">
<table>
    <tr>
        <th class="state">State</th>
        <th class="confirmed">Confirmed</th>
        <th class="active">Active</th>
        <th class="recovered">Recovered</th>
        <th class="deaths">Deceased</th>
    </tr>
</table>
    </div>
   
    </div> <!--2-->

<?php
$data= file_get_contents('https://api.covid19india.org/data.json');
$coronalive = json_decode($data, true);

$statecount = count($coronalive['statewise']);

$i=1;
while($i < $statecount){

    ?>
   
    <div class="main-grid"> <!--3-->



<div class="grid1">
    <table>
        <tr>
 <td class="state"><?php echo $coronalive['statewise'][$i]['state'] ?></td>
 <td class="confirmed"><?php echo $coronalive['statewise'][$i]['confirmed'] ?></td>
 <td class="active"><?php echo $coronalive['statewise'][$i]['active'] ?></td>
 <td class="recovered"><?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
 <td class="deaths"><?php echo $coronalive['statewise'][$i]['deaths'] ?></td>
        </tr>
    </table>
 </div>

    </div> <!--3-->


  
  
<?php

$i++;

}

?>
    </div>
    <div class="boc-l2-side-r"></div>
    </div>

    <div class="supreme-grid-rb"> <!-- supreme grid right box-->
    <div class="box-r1"></div>
    <div class="box-r2">
    <div class="heading-rb">
        <div  class="red">Today confirmed<br><br><p id="todaycon" class="se"></p></div>
        <div class="grey"></div>
        <div  class="green">Today recovered<br><br><p id="todayrec" class="se"></p></div>
        <div class="grey"></div>
        <div class="blue">Today Deceased<br><br><p id="todaydec" class="se"></p></div>
    </div>
    <div class="subheading-rb">What is covid-19 ?</div>
    <div class="corona-rb"><svg width="10" height="10">
   <circle cx="5" cy="5" r="4" stroke="none" stroke-width="4" fill="#A10D32" />
</svg> Covid-19</div>
    <div class="footer-rb">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
    <br><br>
Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.
<br><br>
The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. 
<br><br>
The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).
<br><br>
At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments. We will continue to provide updated information as soon as clinical findings become available.</div>
    <div class="footer-rb"></div>
    </div>
    <div class="box-r3"></div>
    </div>
    
    </div>  
    <!--Middle-->


     <!--footer-->
     <div class="footer-grid">
         <div class="side-bar"></div>

        <div class="grid-footer1">
    <div class="footer">We stand with everyone fighting on the frontlines</div>
    <div class="footer2">CodingBattalion</div>
        </div>

        <div class="side-bar2"></div>
    </div>
  <!--footer-->
  
<script type="text/javascript">
fetch('https://api.covid19india.org/data.json').then((apidata) => {
    return apidata.json();
} )
.then( (actualdata) => {
    for(index in actualdata.cases_time_series){
    i=index;
    }
    console.log(actualdata.cases_time_series[i]);
    let mydata =actualdata.cases_time_series[i];

    document.getElementById('tconfirmed').innerHTML= `${mydata.totalconfirmed}`;
    document.getElementById('trecovered').innerHTML= `${mydata.totalrecovered}`;
    document.getElementById('tdeaths').innerHTML= `${mydata.totaldeceased}`;
    document.getElementById('time').innerHTML= `${mydata.date}, 2020`;
    document.getElementById('todaycon').innerHTML= `${mydata.dailyconfirmed}`;
    document.getElementById('todaydec').innerHTML= `${mydata.dailydeceased}`;
    document.getElementById('todayrec').innerHTML= `${mydata.dailyrecovered}`;
}).catch((error)=>{
    console.log(`Error: ${error}`);
});
</script>


   <!--particles js-->
       <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
  
       <script src="js/theme.js"></script>
    <script src="js/less.js"></script>
 

</body>
</html>
