<!DOCTYPE HTML>
<html> 
    <head>
        <meta charset="UTF-8">
        <title>
            Find Your Zodiac Sign
        </title>
    </head>
<body style = "background-color: DarkSlateGray;background-size: 100%;font-size: 110%;padding-top:1%;">

<center margin:0 auto>
    <br>
    <br>
    <form action="project.php" method="post" style="background-color: Teal;border: solid black 3px;width: 550px;height:auto;">
        <br>
        <table>
        <h2>A program to find your Zodiac sign</h2>
        <br>
        My name is: 
        <?php
            if(isset($_POST["Clear"])){
                echo "";
            }else{
                $username='user.txt'; 
                $file=fopen($username,'r');
                $fullName=fread($file,filesize($username));
                fclose($file);
                echo $fullName;
            }
        ?>
        <br>
        <br>
        My birthday is:  
        <!-- Year dropdown -->
        <select name="year"  size="1">
            <option disabled selected>YYYY</option>
            <option value="2022">2022</option>
            <option value="2021">2021</option>
            <option value="2020">2020</option>
            <option value="2019">2019</option>
            <option value="2018">2018</option>
            <option value="2017">2017</option>
            <option value="2016">2016</option>
            <option value="2015">2015</option>
            <option value="2014">2014</option>
            <option value="2013">2013</option>
            <option value="2012">2012</option>
            <option value="2011">2011</option>
            <option value="2010">2010</option>
            <option value="2009">2009</option>
            <option value="2008">2008</option>
            <option value="2007">2007</option>
            <option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>
            <option value="1997">1997</option>
            <option value="1996">1996</option>
            <option value="1995">1995</option>
            <option value="1994">1994</option>
            <option value="1993">1993</option>
            <option value="1992">1992</option>
            <option value="1991">1991</option>
            <option value="1990">1990</option>
            <option value="1989">1989</option>
            <option value="1988">1988</option>
            <option value="1987">1987</option>
            <option value="1986">1986</option>
            <option value="1985">1985</option>
            <option value="1984">1984</option>
            <option value="1983">1983</option>
            <option value="1982">1982</option>
            <option value="1981">1981</option>
            <option value="1980">1980</option>
            <option value="1979">1979</option>
            <option value="1978">1978</option>
            <option value="1977">1977</option>
            <option value="1976">1976</option>
            <option value="1975">1975</option>
            <option value="1974">1974</option>
            <option value="1973">1973</option>
            <option value="1972">1972</option>
            <option value="1971">1971</option>
            <option value="1970">1970</option>
        </select>

        <!-- Month dropdown -->
        <select name="month" size="1">
            <option disabled selected>MM</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>

        <!-- Day dropdown -->
        <select name="day" size="1">
            <option disabled selected>DD</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
        </select>   
        <br>
        <br>
        My Zodiac sign is: 
        <?php
        if(empty($_POST['year']) or empty($_POST['month']) or empty($_POST['day']))
        {
            echo " ";
        }
        else{
            $year = $_POST['year'];
            $month = $_POST['month'];
            $day = $_POST['day'];
            function zodiac ( $month, $day, $year) 
            { 
                $zodiac = ""; 

                if     ( ( $month == 3 && $day > 20 ) || ( $month == 4 && $day < 20 ) ){ $zodiac = "Aries";   } 
                elseif ( ( $month == 4 && $day > 19 ) || ( $month == 5 && $day < 21 ) ) { $zodiac = "Taurus"; } 
                elseif ( ( $month == 5 && $day > 20 ) || ( $month == 6 && $day < 21 ) ) { $zodiac = "Gemini"; } 
                elseif ( ( $month == 6 && $day > 20 ) || ( $month == 7 && $day < 23 ) ) { $zodiac = "Cancer"; } 
                elseif ( ( $month == 7 && $day > 22 ) || ( $month == 8 && $day < 23 ) ) { $zodiac = "Leo"; } 
                elseif ( ( $month == 8 && $day > 22 ) || ( $month == 9 && $day < 23 ) ) { $zodiac = "Virgo"; } 
                elseif ( ( $month == 9 && $day > 22 ) || ( $month == 10 && $day < 23 ) ) { $zodiac = "Libra"; } 
                elseif ( ( $month == 10 && $day > 22 ) || ( $month == 11 && $day < 22 ) ) { $zodiac = "Scorpio"; } 
                elseif ( ( $month == 11 && $day > 21 ) || ( $month == 12 && $day < 22 ) ) { $zodiac = "Sagittarius"; } 
                elseif ( ( $month == 12 && $day > 21 ) || ( $month == 1 && $day < 20 ) ) { $zodiac = "Capricorn"; } 
                elseif ( ( $month == 1 && $day > 19 ) || ( $month == 2 && $day < 19 ) ) { $zodiac = "Aquarius"; } 
                elseif ( ( $month == 2 && $day > 18 ) || ( $month == 3 && $day < 21 ) ) { $zodiac = "Pisces"; } 
                //https://www.geeksforgeeks.org/program-display-astrological-sign-zodiac-sign-given-date-birth/
                return $zodiac; 
            }
            $zodiacSign = zodiac($month,$day,$year);
            echo  $zodiacSign;
            echo '<br><br>';
        }
        ?>
        </table>
        <br>
        <br>
        <div style="position:relative;bottom: 80%;right: 24%;">
        Current date & time is: 
        <?php
        $date = date("d/m/Y");
        $time = date("H:i");
        echo '<br>'.$date.'<br>'.$time.'<br><br><br>';
        ?>
        </div>
        <div style="position:absolute;top: 39%;left: 56%;">
        <?php
		if(!empty($zodiacSign)){
			$zodiacImg = $zodiacSign;
            echo '<br>';
            echo '<img style="visibility:visible'.';width:130px;height:130px;"src="imgs/'.$zodiacImg.'.jpg";>';
		}else{
            echo "";
		}
        ?>
        </div>
        <br>
        <div style="position:relative; bottom:13%;background-color: azure;">
            <?php
            if(!empty($zodiacSign))
            {
            $selectedZodiac = strtolower($zodiacSign);
            $myfile = fopen("zodiacs/{$selectedZodiac}.txt", "r") or die("Unable to open file!");
            $info = fread($myfile,filesize("zodiacs/{$selectedZodiac}.txt"));
            fclose($myfile);
            echo $info;
            }else
            {
                echo "";
            }
            ?>
        </div>
		<br/><br/><br/>
		<div style="position:relative;">
		<div style="position: absolute;right:10px;bottom:10px;"><input type="submit" value="Submit"></div>
        <div style="position:absolute;left:10px;bottom:10px;"><a href="#"><button name="Clear">Clear</button></a></div>
		</div>
        <?php
            if(!empty($zodiacSign)){      
                $diffYear = (date("Y")-$year)*365;
                
                $filename='about_u.txt';
                $about = array(
                    'Name and Surname: ' => $fullName,
                    'Date of Birth: ' => ''.$day.'/'.$month.'/'.$year,
                    'Zodiac Sign: ' => $zodiacSign,
                    'Current Date and Time: ' => ''.$date.' '.$time,
                    'Information about your Zodiac Sign: ' => $info,
                    'How many days you have been alive till today: ' => $diffYear
                );
                $file=fopen($filename,'w');
                foreach($about as $q => $a){
                    fwrite($file,$q."".$a."\n\n");
                }
            }
        ?>
    </form>
</center>
</body>
</html>