<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  transparent: 0.6;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ff6600;
  color: black;
}



.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}

.topnav {
  overflow: hidden;
  transparent: 0.6;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  transparent: 0.6;
  color: black;
}

.topnav a.active {
  transparent: 0.6;
  color: white;
}

.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}

@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}

</style>

<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>

<head>Home</head>

</head>
<body background="gowertku.jpg">

<div class="header">
	<a href="#default" class="DB">Dragon Ballpedia</a>
	<div class="header-right">
	<a class="active" href="#home">Home</a>
	<a href="Calculator.html">Calculator</a>
</div>
</div>
<div class="topnav">
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for episodes/characters/names.." title="Type in something cool">
  <ul id="myUL">
    <li><a href="episode1.php">episode1</a></li>
    <li><a href="episode2.php">episode2</a></li>
    <li><a href="episode3.php">episode3</a></li>
    <li><a href="episode4.php">episode4</a></li>
    <li><a href="episode5.php">episode5</a></li>
    <li><a href="episode6.php">episode6</a></li>
    <li><a href="episode7.php">episode7</a></li>
    <li><a href="episode8.php">episode8</a></li>
    <li><a href="episode9.php">episode9</a></li>
    <li><a href="episode10.php">episode10</a></li>
    <li><a href="episode11.php">episode11</a></li>
    <li><a href="episode12.php">episode12</a></li>
    <li><a href="episode13.php">episode13</a></li>
    <li><a href="episode14.php">episode14</a></li>
    <li><a href="episode15.php">episode15</a></li>
    <li><a href="episode16.php">episode16</a></li>
    <li><a href="episode17.php">episode17</a></li>
    <li><a href="episode18.php">episode18</a></li>
    <li><a href="episode19.php">episode19</a></li>
    <li><a href="episode20.php">episode20</a></li>
    <li><a href="episode21.php">episode21</a></li>
    <li><a href="episode22.php">episode22</a></li>
    <li><a href="episode23.php">episode23</a></li>
    <li><a href="episode24.php">episode24</a></li>
    <li><a href="episode25.php">episode25</a></li>
    <li><a href="episode26.php">episode26</a></li>
    <li><a href="episode27.php">episode27</a></li>
    <li><a href="episode28.php">episode28</a></li>
    <li><a href="episode29.php">episode29</a></li>
    <li><a href="episode30.php">episode30</a></li>
    <li><a href="episode31.php">episode31</a></li>
    <li><a href="episode32.php">episode32</a></li>
    <li><a href="episode33.php">episode33</a></li>
    <li><a href="episode34.php">episode34</a></li>
    <li><a href="episode35.php">episode35</a></li>
    <li><a href="episode36.php">episode36</a></li>
    <li><a href="episode37.php">episode37</a></li>
    <li><a href="episode38.php">episode38</a></li>
    <li><a href="episode39.php">episode39</a></li>
    <li><a href="episode40.php">episode40</a></li>
    <li><a href="episode41.php">episode41</a></li>
    <li><a href="episode42.php">episode42</a></li>
    <li><a href="episode43.php">episode43</a></li>
    <li><a href="episode44.php">episode44</a></li>
    <li><a href="episode45.php">episode45</a></li>
    <li><a href="episode46.php">episode46</a></li>
    <li><a href="episode47.php">episode47</a></li>
    <li><a href="episode48.php">episode48</a></li>
    <li><a href="episode49.php">episode49</a></li>
    <li><a href="episode50.php">episode50</a></li>
    <li><a href="episode51.php">episode51</a></li>
    <li><a href="episode52.php">episode52</a></li>
    <li><a href="episode53.php">episode53</a></li>
    <li><a href="episode54.php">episode54</a></li>
    <li><a href="Char1.php">Goku</a></li>
    <li><a href="Char2.php">Vegeta</a></li>
    <li><a href="Char3.php">Gohan</a></li>
    <li><a href="Char4.php">Piccolo</a></li>
    <li><a href="Char5.php">Krillin</a></li>
    <li><a href="Char6.php">Tien</a></li>
    <li><a href="Char7.php">Bulma</a></li>
    <li><a href="Char8.php">Chi-Chi</a></li>
    <li><a href="Char9.php">Nappa</a></li>
    <li><a href="Char10.php">Yamcha</a></li>
    <li><a href="kaioken.php">Kaioken</a></li>
    <li><a href="ssjgoku.php">SSJ1 Goku</a></li>
    <li><a href="freeza1.php">First Form Freeza</a></li>
    <li><a href="gohanoozaru.php">Gohan Oozaru</a></li>
    <li><a href="gohanmas.php">Gohan Masenko</a></li>
    <li><a href="gokus.php">Goku Surpressed</a></li>
    <li><a href="ginyugok.php">Ginyu in Goku's Body</a></li>
    <li><a href="vegetazen.php">Vegeta Post Zenkai</a></li>
    <li><a href="piccolonail.php">Piccolo Infused With Nail</a></li>
    <li><a href="freeza2.php">Freeza Second Form</a></li>
    <li><a href="freeza3.php">Freeza Third Form</a></li>
    <li><a href="freeza4.php">Freeza Fourth Form</a></li>
    <li><a href="freeza100.php">Freeza Final Form</a></li>
    <li><a href="monsterzarbon.php">Monster Zarbon</a></li>
    
  </ul>
</div>
</body>


</html>