<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);


function name($FN, $LN, $position) { #function designed to aid in positioning names. Takes the position of the name in the entry and formats it appropriately.
	switch($position):
		Case (1):
			if (preg_match('/ .\./', $FN)==true)
				return $LN.", ".$FN;
			else
				return $LN.", ".rtrim($FN,".");
		Case (2):
			if  (preg_match('/ .\./', $FN)==true)
				return $FN." ".$LN;
			else
				return rtrim($FN,".")." ".$LN;
		Case (3):
			if  (preg_match('/ .\./', $FN)==true)
				return $FN." ".$LN;
			else
				return rtrim($FN,".")." ".$LN;
	endswitch;}

###################################
####BEGIN BIBLIOGRAPHY HANDLERS####
###################################


###handles form for books with only authors
if (!empty($_POST['booksubmit'])) {
	if ($_POST["LN2F1"]===""){
		$response=name($_POST["FN1F1"], $_POST["LN1F1"], 1)." <i>".$_POST["BTF1"]."</i>. ".$_POST["PCCF1"].", ".$_POST["PCSF1"].": ".$_POST["PCF1"].", ".$_POST["PDF1"]."." ;}

	if ($_POST["LN2F1"]!=="" and $_POST["LN3F1"]==""){
			$response= name($_POST["FN1F1"], $_POST["LN1F1"], 1)." and ".name($_POST["FN2F1"],$_POST["LN2F1"], 2).". <i>".$_POST["BTF1"]."</i>. ".$_POST["PCCF1"].", ".$_POST["PCSF1"].": ".$_POST["PCF1"].", ".$_POST["PDF1"]."." ;}


	if ($_POST["LN3F1"]!==""){
		$response= name($_POST["FN1F1"],$_POST["LN1F1"],1).",  ".name($_POST["FN2F1"],$_POST["LN2F1"],2).", and ".name($_POST["FN3F1"], $_POST["LN3F1"],3).". "."<i>".$_POST["BTF1"]."</i>. ".$_POST["PCCF1"].", ".$_POST["PCSF1"].": ".$_POST["PCF1"].", ".$_POST["PDF1"]."." ;}


	echo $response;
}

###handles form for books with editors
if (!empty($_POST['edsubmit'])) {
	if ($_POST["LN2F2"]===""){
		$response =name($_POST["FN1F2"], $_POST["LN1F2"], 1)."., ed. <i>".$_POST["BTF2"]."</i>. ".$_POST["PCCF2"].", ".$_POST["PCSF2"].": ".$_POST["PCF2"].", ".$_POST["PDF2"]."." ;}

	if ($_POST["LN2F2"]!=="" and $_POST["LN3F2"]==""){
		$response= name($_POST["FN1F2"], $_POST["LN1F2"], 1)." and ".name($_POST["FN2F2"],$_POST["LN2F2"], 2).", eds. <i>".$_POST["BTF2"]."</i>. ".$_POST["PCCF2"].", ".$_POST["PCSF2"].": ".$_POST["PCF2"].", ".$_POST["PDF2"]."." ;}


	if ($_POST["LN3F2"]!==""){
		$response= name($_POST["FN1F2"],$_POST["LN1F2"],1).",  ".name($_POST["FNF22"],$_POST["LN2F2"],2).", and ".name($_POST["FN3F2"], $_POST["LN3F2"],3).", eds. "."<i>".$_POST["BTF2"]."</i>. ".$_POST["PCCF2"].", ".$_POST["PCSF2"].": ".$_POST["PCF2"].", ".$_POST["PDF2"]."." ;}
	echo $response;
}


###handles form for journals with continuous pagination
if (!empty($_POST['jwpsubmit'])) {
	if ($_POST["LN2F3"]===""){
		$response=name($_POST["FN1F3"], $_POST["LN1F3"], 1).". \"".$_POST["ATF3"].". \"<i>".$_POST["JTF3"]."</i> ".$_POST["JVF3"]." (".$_POST["JYF3"]."): ".$_POST["Page1F3"]."-".$_POST["Page2F3"].".";}
	

	if ($_POST["LN2F3"]!=="" and $_POST["LN3F3"]==""){
		$response=name($_POST["FN1F3"], $_POST["LN1F3"], 1)." and ".name($_POST["FN2F3"],$_POST["LN2F3"], 2).". \"".$_POST["ATF3"].". \"<i>". $_POST["JTF3"]."</i> ".$_POST["JVF3"]." (".$_POST["JYF3"]."): ".$_POST["Page1F3"]."-".$_POST["Page2F3"].".";}

	if ($_POST["LN3F3"]!==""){
		$response= name($_POST["FN1F3"],$_POST["LN1F3"],1).", ".name($_POST["FN2F3"],$_POST["LN2F3"],2).", and ".name($_POST["FN3F3"], $_POST["LN3F3"],3).". \"".$_POST["ATF3"].". \"<i>". $_POST["JTF3"]."</i> ".$_POST["JVF3"]." (".$_POST["JYF3"]."): ".$_POST["Page1F3"]."-".$_POST["Page2F3"].".";}
	echo $response;
}

###handles form for journals without continuous pagination
if (!empty($_POST['jwopsubmit'])) {

	if ($_POST["LN2F4"]===""){	
		$response= name($_POST["FN1F4"], $_POST["LN1F4"], 1).". \"".$_POST["ATF4"].".\"<i>". $_POST["JTF4"]."</i> ".$_POST["JVF4"].".".$_POST["JIF4"]." (".$_POST["JYF4"]."): ".$_POST["Page1F4"]."-".$_POST["Page2F4"].".";}
	

	if ($_POST["LN2F4"]!=="" and $_POST["LN3F4"]==""){
		$response=name($_POST["FN1F4"], $_POST["LN1F4"], 1)." and ".name($_POST["FN2F"],$_POST["LN2F"], 2).". \"".$_POST["ATF4"].".\"<i>". $_POST["JTF4"]."</i> ".$_POST["JVF4"].".".$_POST["JIF4"]." (".$_POST["JYF4"]."): ".$_POST["Page1F4"]."-".$_POST["Page2F4"].".";}

	if ($_POST["LN3F4"]!==""){
		$response= name($_POST["FN1F4"],$_POST["LN1F4"],1).", ".name($_POST["FN2F4"],$_POST["LN2F4"],2).", and ".name($_POST["FN3F4"], $_POST["LN3F4"],3).". \"".$_POST["ATF4"].".\"<i>". $_POST["JTF4"]."</i> ".$_POST["JVF4"].".".$_POST["JIF4"]." (".$_POST["JYF4"]."): ".$_POST["Page1F4"]."-".$_POST["Page2F4"].".";}
		echo $response;
}
###handles form for dictionaries and enclyclopedias
if (!empty($_POST['dictsubmit'])){
	if ($_POST["LN2F5"]===""){	
		$response=name($_POST["FN1F5"], $_POST["LN1F5"], 1)."."."\"".$_POST["ETF5"].".\" <i>". $_POST["dicttitleF5"]."</i> ".$_POST["V1F5"].":".$_POST["Page1F5"]."-".$_POST["Page2F5"].".";}
	
	if ($_POST["LN2F5"]!=="" and $_POST["LN3F5"]==""){
		$response=name($_POST["FN1F5"], $_POST["LN1F5"], 1)." and ".name($_POST["FN2F5"],$_POST["LN2F5"], 2).". ".$_POST["LN2F5"].".\"".$_POST["ETF5"].".\" <i>". $_POST["dicttitleF5"]."</i> ".$_POST["V1F5"].":".$_POST["Page1F5"]."-".$_POST["Page2F5"].".";}

	if ($_POST["LN3F5"]!==""){
		$response=  name($_POST["FN1F5"],$_POST["LN1F5"],1).", ".name($_POST["FN2F5"],$_POST["LN2F5"],2).", and ".name($_POST["FN3F5"], $_POST["LN3F5"],3).".\"".$_POST["ETF5"].".\" <i>". $_POST["dicttitleF5"]."</i> ".$_POST["V1F5"].":".$_POST["Page1F5"]."-".$_POST["Page2F5"].".";
	}
	echo $response;

}
###handles form for internet resources with print versions
if (!empty($_POST['IWPCsubmit'])) {
	if ($_POST["LN2F6"]===""){
		$response=name($_POST["FN1F6"], $_POST["LN1F6"], 1).".".".\"".$_POST["ATF6"].".\" ".$_POST["STF6"]." ".$_POST["urlF6"].".";}
	if ($_POST["LN2F6"]!=="" and $_POST["LN3F6"]==""){
		$response=name($_POST["FN1F6"], $_POST["LN1F6"], 1)." and ".name($_POST["FN2F6"],$_POST["LNF6"], 2)." .\"".$_POST["ATF6"]."\" ".$_POST["STF6"]." ".$_POST["urlF6"].".";
	}

	if ($_POST["LN3F6"]!==""){
		$response=name($_POST["FN1F6"],$_POST["LN1F6"],1).", ".name($_POST["FN2F6"],$_POST["LN2F6"],2).", and ".name($_POST["FN3F6"], $_POST["LN3F6"],3).".\"".$_POST["AT1F6"]."\" ".$_POST["STF6"]." ".$_POST["urlF6"].".";}
	echo $response;

}

###handles form for internet resources without print version.
if (!empty($_POST['INPCsubmit'])) {
	$response= "\"".$_POST["ATF7"].".\""." ".$_POST["STF7"].". ".$_POST["urlF7"].".";
	echo $response;
}


############################
###BEGIN FOOTNOTE HANDLERS####
############################



###handles form for books with only authors
if (!empty($_POST['footbooksubmit'])) {
	if ($_POST["LN2F8"]===""){
		$response=$_POST["FN1F8"]." ".$_POST["LN1F8"].", <i>".$_POST["BTF8"]."</i>. (".$_POST["PCCF8"].", ".$_POST["PCSF8"].": ".$_POST["PCF8"].", ".$_POST["PDF8"]."), ".$_POST["PGF8"];}

	if ($_POST["LN2F8"]!=="" and $_POST["LN3F8"]==""){
			$response=$_POST["FN1F8"].$_POST["LN1F8"]." and ".$_POST["FN2F8"].$_POST["LN2F8"].". <i>".$_POST["BTF8"]."</i>. (".$_POST["PCCF8"].", ".$_POST["PCSF8"].": ".$_POST["PCF8"].", ".$_POST["PDF8"]."), ".$_POST["PGF8"];}


	if ($_POST["LN3F8"]!==""){
		$response=$_POST["FN1F8"].$_POST["LN1F8"].",  ".$_POST["FN2F8"].$_POST["LN2F8"].", and ".$_POST["FN3F8"].$_POST["LN3F8"].". "."<i>".$_POST["BTF8"]."</i>. (".$_POST["PCCF8"].", ".$_POST["PCSF8"].": ".$_POST["PCF8"].", ".$_POST["PDF8"]."), ".$_POST["PGF8"];}


	echo $response;
}

###handles form for books with editors
if (!empty($_POST['footedsubmit'])) {
	if ($_POST["LN2F9"]===""){
		$response =$_POST["FN1F9"].$_POST["LN1F9"]."., ed. <i>".$_POST["BTF9"]."</i>. (".$_POST["PCCF9"].", ".$_POST["PCSF9"].": ".$_POST["PCF9"]."), ".$_POST["PDF9"].$_POST["PGF9"]."." ;}

	if ($_POST["LN2F9"]!=="" and $_POST["LN3F9"]==""){
		$response= $_POST["FN1F9"].$_POST["LN1F9"]." and ".$_POST["FN2F9"].$_POST["LN2F9"].", eds. <i>".$_POST["BTF9"]."</i>. (".$_POST["PCCF9"].", ".$_POST["PCSF9"].": ".$_POST["PCF9"]."), ".$_POST["PDF9"].$_POST["PGF9"]."." ;}


	if ($_POST["LN3F9"]!==""){
		$response=$_POST["FN1F9"].$_POST["LN1F9"].",  ".$_POST["FN2F9"].$_POST["LN2F9"].", and ".$_POST["FN3F9"].$_POST["LN3F9"].", eds. "."<i>(".$_POST["BTF9"]."</i>. (".$_POST["PCCF9"].", ".$_POST["PCSF9"].": ".$_POST["PCF9"]."), ".$_POST["PDF9"].$_POST["PGF9"]."." ;}
	echo $response;
}


###handles form for journals with continuous pagination
if (!empty($_POST['footjwpsubmit'])) {
	if ($_POST["LN2F10"]===""){
		$response=$_POST["FN1F10"].$_POST["LN1F10"].", \"".$_POST["ATF10"].", \"<i>".$_POST["JTF10"]."</i> ".$_POST["JVF10"]." (".$_POST["JYF10"]."): ".$_POST["PGF10"]."." ;}

	

	if ($_POST["LN2F10"]!=="" and $_POST["LN3F10"]==""){
		$response=$_POST["FN1F10"].$_POST["LN1F10"]." and ".$_POST["FN2F10"].$_POST["LN2F10"].", \"".$_POST["ATF10"].", \"<i>". $_POST["JT"]."</i> ".$_POST["JVF10"]." (".$_POST["JYF10"]."): ".$_POST["PGF10"]."." ;}


	if ($_POST["LN3F10"]!==""){
		$response= $_POST["FN1F10"].$_POST["LN1F10"].", ".$_POST["FN2F10"].$_POST["LN2F10"].", and ".$_POST["FN3F10"].$_POST["LN3F10"].", \"".$_POST["ATF10"].",\"<i>". $_POST["JTF10"]."</i> ".$_POST["JVF10"]." (".$_POST["JYF10"]."): ".$_POST["PGF10"]."." ;}

	echo $response;
}

###handles form for journals without continuous pagination
if (!empty($_POST['footjwopsubmit'])) {

	if ($_POST["LN2F11"]===""){	
		$response=$_POST["FN1F11"].$_POST["LN1F11"].". \"".$_POST["ATF11"].",\"<i>". $_POST["JTF11"]."</i> ".$_POST["JVF11"].".".$_POST["JIF11"]." (".$_POST["JYF11"]."): ".$_POST["PGF11"].".";}
	

	if ($_POST["LN2F11"]!=="" and $_POST["LN3F11"]==""){
		$response=$_POST["FN1F11"].$_POST["LN1F11"]." and ".$_POST["FN2F11"].$_POST["LN2F11"].", \"".$_POST["ATF11"].", \"<i>". $_POST["JTF11"]."</i> ".$_POST["JVF11"].".".$_POST["JIF11"]." (".$_POST["JYF11"]."): ".$_POST["PGF11"].".";}

	if ($_POST["LN3F11"]!==""){
		$response= $_POST["FN1F11"].$_POST["LN1F11"].", ".$_POST["FN2F11"].$_POST["LN2F11"].", and ".$_POST["FN3F11"].$_POST["LN3F11"].", \"".$_POST["ATF11"].", \" <i>". $_POST["JTF11"]."</i> ".$_POST["JVF11"].".".$_POST["JIF11"]." (".$_POST["JYF11"]."): ".$_POST["PGF11"].".";}
		echo $response;
}
###handles form for dictionaries and enclyclopedias
if (!empty($_POST['footdictsubmit'])){
	if ($_POST["LN2F12"]===""){	
		$response=$_POST["FN1F12"].$_POST["LN1F12"].",\"".$_POST["ETF12"].",\" <i>". $_POST["dicttitleF12"]."</i> ".$_POST["V1F12"].":".$_POST["PGF12"]."." ;}
	
	if ($_POST["LN2F12"]!=="" and $_POST["LN3F12"]==""){
		$response=$_POST["FN1F12"].$_POST["LN1F12"]." and ".$_POST["FN2F12"].$_POST["LN2F12"].", ".$_POST["LN2F12"].",\"".$_POST["ETF12"].",\" <i>". $_POST["dicttitleF12"]."</i> ".$_POST["V1F12"].":".$_POST["PGF12"]."." ;}


	if ($_POST["LN3F12"]!==""){
		$response=$_POST["FN1F12"].$_POST["LNF121"].", ".$_POST["FN2F12"].$_POST["LN2F12"].", and ".$_POST["FN3F12"].$_POST["LN3F12"].",\"".$_POST["ET"].",\" <i>". $_POST["dicttitleF12"]."</i> ".$_POST["V1F12"].":".$_POST["PGF12"]."." ;}

	
	echo $response;

}
###handles form for internet resources with print versions
if (!empty($_POST['footIWPCsubmit'])) {
	if ($_POST["LN2F13"]===""){
		$response=$_POST["FN1F13"]." ".$_POST["LN1F13"].".\"".$_POST["ATF13"].",\" ".$_POST["STF13"].", ".$_POST["urlF13"].".";}
	if ($_POST["LN2F13"]!=="" and $_POST["LN3F13"]==""){
		$response=$_POST["FN1F13"]." ".$_POST["LN1F13"]." and ".$_POST["FN2F13"]." ".$_POST["LN2F13"].".\"".$_POST["ATF13"].",\" ".$_POST["STF13"].", ".$_POST["urlF13"].".";
	}

	if ($_POST["LN3F13"]!==""){
		$response=$_POST["FN1F13"]." ".$_POST["LN1F13"].", ".$_POST["FN2F13"]." ".$_POST["LN2F13"].", and ".$_POST["FN3F13"]." ".$_POST["LN3F13"].".\"".$_POST["AT"].",\" ".$_POST["STF13"].", ".$_POST["urlF13"].".";}
	echo $response;

}

###handles form for internet resources without print version.
if (!empty($_POST['footINPCsubmit'])) {
	$response= "\"".$_POST["ATF14"].",\""." ".$_POST["STF14"].", ".$_POST["urlF14"].".";
	echo $response;
}



?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script> $(document).ready(function (){
            $("#mybibselect").change(function() {
                if ($(this).val()!= "bookswauthors") {
                    $("#one").hide();
                }else{
                    $("#one").show();
		}
                if ($(this).val()!= "booksweditors") {
                    $("#two").hide();
                }else{
                    $("#two").show();
		}
                if ($(this).val()!= "journalcontinuous") {
                    $("#three").hide();
                }else{
                    $("#three").show();
		}
		if ($(this).val()!= "journalnocontinuous") {
                    $("#four").hide();
                }else{
                    $("#four").show();
		}
		if ($(this).val()!= "encyclopedia") {
                    $("#five").hide();
                }else{
			$("#five").show();
		}
		if ($(this).val()!= "internetwithprint") {
                    $("#six").hide();
                }else{
                    $("#six").show();
		}
		if ($(this).val()!= "internetnoprint") {
                    $("#seven").hide();
                }else{
                    $("#seven").show();
		}





            });
});

 $(document).ready(function (){
            $("#myfootselect").change(function() {
		if ($(this).val()!= "footbookswauthors") {
                    $("#eight").hide();
                }else{
                    $("#eight").show();
		}
		if ($(this).val()!= "footbooksweditors") {
                    $("#nine").hide();
                }else{
                    $("#nine").show();
		}
		if ($(this).val()!= "footjournalcontinuous") {
                    $("#ten").hide();
                }else{
                    $("#ten").show();
		}
		if ($(this).val()!= "footjournalnocontinuous") {
                    $("#eleven").hide();
                }else{
                    $("#eleven").show();
		}
		if ($(this).val()!= "footencyclopedia") {
                    $("#twelve").hide();
                }else{
                    $("#twelve").show();
		}
		if ($(this).val()!= "footinternetwithprint") {
                    $("#thirteen").hide();
                }else{
                    $("#thirteen").show();
		}
		if ($(this).val()!= "footinternetnoprint") {
                    $("#fourteen").hide();
                }else{
                    $("#fourteen").show();
		}


            });
});



</script>

<form id="style" name="style"> <!--- radio buttons to select entry type. Selecting one turns off the forms for the other--->
  <input type="radio" name="radio" id="foot" value="foot"/>Footnote<br>
  <input type="radio" name="radio" id="bib" value="bib"/> Bibliography<br>
</form>


<form id="Bib Form Selector" > <!---dropdown bar for form selection for bibliography entries-->
<select id="mybibselect" form="Form Selector">
<option value="" selected="selected">Select Resource Type</option>
<option value="bookswauthors">Books with up to three authors</option>
<option value="booksweditors">Books with up to three editors</option>
<option value="journalcontinuous">Journal with Continuous Pagination</option>
<option value="journalnocontinuous">Journal without Continuous Pagination</option>
<option value="encyclopedia">Encyclopedia or Dictionary</option>
<option value="internetwithprint">Internet Publication with a Print Counterpart </option>
<option value="internetnoprint">Internet Publication without a Print Counterpart </option>
</select></form>


<form id="Foot Form Selector" style="display:none"> <!---dropdown bar for form selection-->
<select id="myfootselect" form="Foot Form Selector">
<option value="" selected="selected">Select Resource Type</option>
<option value="footbookswauthors">Books with up to three authors</option>
<option value="footbooksweditors">Books with up to three editors</option>
<option value="footjournalcontinuous">Journal with Continuous Pagination</option>
<option value="footjournalnocontinuous">Journal without Continuous Pagination</option>
<option value="footencyclopedia">Encyclopedia or Dictionary</option>
<option value="footinternetwithprint">Internet Publication with a Print Counterpart </option>
<option value="footinternetnoprint">Internet Publication without a Print Counterpart </option>
</select></form>





 <!---********bibliography entry forms******** --->



<!---Form for books with authors -->
<form action="citeform.php" method="POST" id="overform">
<div id="one" style="display:none;">

<h2>Books with up to three authors</h2>
<h4>Author One</h4>


First, middle name/initial:<input type="text" name="FN1F1" value="">(e.g. James T. or James Tiberius.)
  <br>

Last name:<input type="text" name="LN1F1" value="">
  <br>


<h4>Author Two</h4>

First, middle name/initial:<input type="text" name="FN2F1" value="">
  <br>

Last name:<input type="text" name="LN2F1" value="">
  <br>


<h4>Author Three</h4>


First, middle name/initial:<input type="text" name="FN3F1" value="">
  <br>

Last name:<input type="text" name="LN3F1" value="">
  <br>";

<h4>Book Information</h4>
Book Title:<input type="text" name="BTF1" value="">
<br>

Publishing Company:<input type="text" name="PCF1" value="">
<br>

Publishing Company City:<input type="text" name="PCCF1" value="">
<br>

Publishing Company State:<input type="text" name="PCSF1" value="">
<br>

Publishing Date:<input type="text" name="PDF1" value="">
<br>

  <input type="submit" name="booksubmit" value="Submit">
</div> 
<!---Form for books with editors -->
<div id="two" style="display:none">
<h2>Books with up to three editors</h2>
<h4>Editor One</h4>  


First, middle name/initial:<input type="text" name="FN1F2" value="">
  <br>

Last name:<input type="text" name="LN1F2" value="">
  <br>



<h4>Editor Two</h4>

First, middle name/initial:<input type="text" name="FN2F2" value="">
  <br>

Last name:<input type="text" name="LN2F2" value="">
  <br>


<h4>Editor Three</h4>


First, middle name/initial:<input type="text" name="FN3F2" value="">
  <br>

Last name:<input type="text" name="LN3F2" value="">
  <br>



<h4>Book Information</h4>
Book Title:<input type="text" name="BTF2" value="">
<br>

Publishing Company:<input type="text" name="PCF2" value="">
<br>

Publishing Company City:<input type="text" name="PCCF2" value="">
<br>

Publishing Company State:<input type="text" name="PCSF2" value="">
<br>

Publishing Date:<input type="text" name="PDF2" value="">
<br>

  <input type="submit" name="edsubmit" value="Submit">

</div>
<!---Form for journals with continuous pagination -->

<div id="three" style="display:none">
<h2>Journals with Continuous Pagination</h2>
<h4>Author One</h4>


First, middle name/initial:<input type="text" name="FN1F3" value="">(e.g. James T. or James Tiberius.)
  <br>

Last name:<input type="text" name="LN1F3" value="">
  <br>


<h4>Author Two</h4>

First, middle name/initial:<input type="text" name="FN2F3" value="">
  <br>

Last name:<input type="text" name="LN2F3" value="">
  <br>


<h4>Author Three</h4>


First, middle name/initial:<input type="text" name="FN3F3" value="">
  <br>

Last name:<input type="text" name="LN3F3" value="">
  <br>";
<h4>Journal Information</h4>
Journal Title:<input type="text" name="JTF3" value=""> (NOTE: SBL rules require that journal titles be abbreviated. See <a href="http://theologyontheweb.org.uk/abbreviations.html">here</a> for common abbreviations)
<br>

Journal Year:<input type="text" name="JYF3" value="">
<br>

Journal Volume:<input type="text" name="JVF3" value="">
<br>

Article Title<input type="text" name="ATF3" value=""> (NOTE: Do not include quotation marks around the title)

<br>

From Page:<input type="text" name="Page1F3" value="">
<br>
To Page:<input type= "text" name="Page2F3" value =""></br>

  <input type="submit" name="jwpsubmit" value="Submit">



</div>

<!---Form for journals without continuous pagination -->
<div id="four" style="display:none">
<h2>Journals without Continuous Pagination</h2>
<h4>Author One</h4>


First, middle name/initial:<input type="text\" name="FN1F4" value="">(e.g. James T. or James Tiberius.)
  <br>

Last name:<input type="text" name="LN1F4" value="">
  <br>


<h4>Author Two</h4>

First, middle name/initial:<input type="text" name="FN2F4" value="">
  <br>

Last name:<input type="text" name="LN2F4" value="">
  <br>


<h4>Author Three</h4>


First, middle name/initial:<input type="text" name="FN3F4" value="">
  <br>

Last name:<input type="text" name="LN3F4" value="">
  <br>";
<h4>Journal Information</h4>
Journal Title:<input type="text" name="JTF4" value="">(NOTE: SBL rules require that journal titles be abbreviated. See <a href="http://theologyontheweb.org.uk/abbreviations.html">here</a> for common abbreviations)
<br>

Journal Year:<input type="text" name="JYF4" value="">
<br>

Journal Volume:<input type="text" name="JVF4" value="">
<br>

Journal Issue:<input type="text" name="JIF4" value=""></br>
Article Title<input type="text" name="ATF4" value=""> (NOTE: Do not include quotation marks around the title)
<br>

From Page:<input type="text" name="Page1F4" value="">
<br>
To Page:<input type= "text" name="Page2F4" value =""></br>
  <input type="submit" name="jwopsubmit" value="Submit">


</div>

<!---Form for encyclopedias and dictionaries -->

<div id="five"  style="display:none">
<h2>Encyclopedia or Dictionary</h2>
<h4>Author One</h4>


First, middle name/initial:<input type="text" name="FN1F5" value="">(e.g. James T. or James Tiberius.)
  <br>

Last name:<input type="text" name="LN1F5" value="">
  <br>


<h4>Author Two</h4>

First, middle name/initial:<input type="text" name="FN2F5" value="">
  <br>

Last name:<input type="text" name="LN2F5" value="">
  <br>


<h4>Author Three</h4>


First, middle name/initial:<input type="text" name="FN3F5" value="">
  <br>

Last name:<input type="text" name="LN3F5" value="">
  <br>";
<h4>Book Information</h4>


Entry Title <input type="text" name="ETF5" value="">(NOTE: Do not include quotation marks around the title)</br>


Dictionary or Encyclopedia Title:<input type="text" name="dicttitleF5" value="">(NOTE: SBL rules require that dictionary or enclyclopedia titles be abbreviated. See <a href="http://theologyontheweb.org.uk/abbreviations.html">here</a> for common abbreviations)
</br>	

From Page:<input type="text" name="Page1F5" value="">
<br>
To Page:<input type= "text" name="Page2F5" value =""></br> 	

Volume: <input type="text" name="V1F5" value=""></br> 	


  <input type="submit" name="dictsubmit" value="Submit"></input>


</div>

<!---Form for internet resources with print version-->
<div id="six"  style="display:none">
<h2>Internet Publication with a Print Counterpart Citation</h2>

<h4>Author One</h4>


First, middle name/initial:<input type="text" name="FN1F6" value="">(e.g. James T. or James Tiberius.)
  <br>

Last name:<input type="text" name="LN1F6" value="">
  <br>


<h4>Author Two</h4>

First, middle name/initial:<input type="text" name="FN2F6" value="">
  <br>

Last name:<input type="text" name="LN2F6" value="">
  <br>


<h4>Author Three</h4>


First, middle name/initial:<input type="text" name="FN3F6" value="">
  <br>

Last name:<input type="text" name="LN3F6" value="">
  <br>";


Site Title:<input type="text" name="STF6" value=""><br>

Article Title<input type="text" name="ATF6" value=""><br>


URL: <input type="text" name="urlF6" value=""></br>

<input type="submit" name="IWPCsubmit" value="Submit"> 

</div>

<!---Form for internet resources without print version-->

<div id="seven" style="display:none">
<h2>Internet Publication without a Print Counterpart Citation</h2>


</br>
Article Title:<input type="text" name="ATF7" value="">
</br>
Website Title: :<input type="text" name="STF7" value="">
URL: <input type="text" name="urlF7" value="">

  <input type="submit" name="INPCsubmit" value="Submit"> 

</div>



<!---div for books with authors -->
<div id="eight" style="display:none;">
<h2>Books with up to three authors</h2>
<h4>Author One</h4>


First, middle name/initial:<input type="text" name="FN1F8" value="">(e.g. James T. or James Tiberius.)
  <br>

Last name:<input type="text" name="LN1F8" value="">
  <br>


<h4>Author Two</h4>

First, middle name/initial:<input type="text" name="FN2F8" value="">
  <br>

Last name:<input type="text" name="LN2F8" value="">
  <br>


<h4>Author Three</h4>


First, middle name/initial:<input type="text" name="FNF8" value="">
  <br>

Last name:<input type="text" name="LN3F8" value="">
  <br>";



<h4>Book Indivation</h4>
Book Title:<input type="text" name="BTF8" value="">
<br>

Publishing Company:<input type="text" name="PCF8" value="">
<br>

Publishing Company City:<input type="text" name="PCCF8" value="">
<br>

Publishing Company State:<input type="text" name="PCSF8" value="">
<br>

Publishing Date:<input type="text" name="PDF8" value="">
<br>
Page:<input type="text" name="PGF8" value="">
<br>

  <input type="submit" name="footbooksubmit" value="Submit">
</div> 

<!---div for books with editors -->
<div id ="nine" style="display:none">
<h2>Books with up to three editors</h2>
<h4>Editor One</h4>  


First, middle name/initial:<input type="text" name="FN1F9" value="">
  <br>

Last name:<input type="text" name="LN1F9" value="">
  <br>



<h4>Editor Two</h4>

First, middle name/initial:<input type="text" name="FN2F9" value="">
  <br>

Last name:<input type="text" name="LN2F9" value="">
  <br>


<h4>Editor Three</h4>


First, middle name/initial:<input type="text" name="FN3F9" value="">
  <br>

Last name:<input type="text" name="LN3F9" value="">
  <br>



<h4>Book Indivation</h4>
Book Title:<input type="text" name="BTF9" value="">
<br>

Publishing Company:<input type="text" name="PCF9" value="">
<br>

Publishing Company City:<input type="text" name="PCCF9" value="">
<br>

Publishing Company State:<input type="text" name="PCSF9" value="">
<br>

Publishing Date:<input type="text" name="PDF9" value="">
<br>
Page:<input type="text" name="PGF9" value="">
<br>

  <input type="submit" name="footedsubmit" value="Submit">

</div>

<!---div for journals with continuous pagination -->

<div id="ten" style="display:none">
<h2>Journals with Continuous Pagination</h2>

<h4>Author One</h4>


First, middle name/initial:<input type="text" name="FN1F10" value="">(e.g. James T. or James Tiberius.)
  <br>

Last name:<input type="text" name="LN1F10" value="">
  <br>


<h4>Author Two</h4>

First, middle name/initial:<input type="text" name="FN2F10" value="">
  <br>

Last name:<input type="text" name="LN2F10" value="">
  <br>


<h4>Author Three</h4>


First, middle name/initial:<input type="text" name="FN3F10" value="">
  <br>

Last name:<input type="text" name="LN3F10" value="">
  <br>;

<h4>Journal Indivation</h4>
Journal Title:<input type="text" name="JTF10" value=""> (NOTE: SBL rules require that journal titles be abbreviated. See <a href="http://theologyontheweb.org.uk/abbreviations.html">here</a> for common abbreviations)
<br>

Journal Year:<input type="text" name="JYF10" value="">
<br>

Journal Volume:<input type="text" name="JVF10" value="">
<br>

Article Title<input type="text" name="ATF10" value=""> (NOTE: Do not include quotation marks around the title)

<br>

Page:<input type="text" name="PGF10" value="">
<br>

  <input type="submit" name="footjwpsubmit" value="Submit">



</div>

<!---div for journals without continuous pagination -->
<div id="eleven" style="display:none">
<h2>Journals without Continuous Pagination</h2>
<h4>Author One</h4>


First, middle name/initial:<input type="text" name="FN1F11" value="">(e.g. James T. or James Tiberius.)
  <br>

Last name:<input type="text" name="LN1F11" value="">
  <br>


<h4>Author Two</h4>

First, middle name/initial:<input type="text" name="FN2F11" value="">
  <br>

Last name:<input type="text" name="LN2F11" value="">
  <br>


<h4>Author Three</h4>


First, middle name/initial:<input type="text" name="FNF11" value="">
  <br>

Last name:<input type="text" name="LN3F11" value="">
  <br>

<h4>Journal Indivation</h4>
Journal Title:<input type="text" name="JTF11" value="">(NOTE: SBL rules require that journal titles be abbreviated. See <a href="http://theologyontheweb.org.uk/abbreviations.html">here</a> for common abbreviations)
<br>

Journal Year:<input type="text" name="JYF11" value="">
<br>

Journal Volume:<input type="text" name="JVF11" value="">
<br>

Journal Issue:<input type="text" name="JIF11" value=""></br>
Article Title<input type="text" name="ATF11" value=""> (NOTE: Do not include quotation marks around the title)
<br>

Page:<input type="text" name="PGF11" value="">
<br>
  <input type="submit" name="footjwopsubmit" value="Submit">





</div>

<!---div for encyclopedias and dictionaries -->

<div  id="twelve" style="display:none">
<h2>Encyclopedia or Dictionary</h2>
<h4>Author One</h4>


First, middle name/initial:<input type="text" name="FN1F12" value="">(e.g. James T. or James Tiberius.)
  <br>

Last name:<input type="text" name="LN1F12" value="">
  <br>


<h4>Author Two</h4>

First, middle name/initial:<input type="text" name="FN2F12" value="">
  <br>

Last name:<input type="text" name="LN2F12" value="">
  <br>


<h4>Author Three</h4>


First, middle name/initial:<input type="text" name="FNF12" value="">
  <br>

Last name:<input type="text" name="LN3F12" value="">
  <br>";

<h4>Book Indivation</h4>


Entry Title <input type="text" name=ETF12 value="">(NOTE: Do not include quotation marks around the title)</br>


Dictionary or Encyclopedia Title:<input type="text" name="dicttitleF12" value="">(NOTE: SBL rules require that dictionary or enclyclopedia titles be abbreviated. See <a href="http://theologyontheweb.org.uk/abbreviations.html">here</a> for common abbreviations)
</br>	

Page:<input type="text" name="PGF12" value="">
<br>


Volume: <input type="text" name="V1F12" value=""></br> 	


  <input type="submit" name="footdictsubmit" value="Submit">


</div>

<!---div for internet resources with print version-->
<div id="thirteen" style="display:none">
<h2>Internet Publication with a Print Counterpart Citation</h2>

<h4>Author One</h4>


First, middle name/initial:<input type="text" name="FN1F13" value="">(e.g. James T. or James Tiberius.)
  <br>

Last name:<input type="text" name="LN1F13" value="">
  <br>


<h4>Author Two</h4>

First, middle name/initial:<input type="text" name="FN2F13" value="">
  <br>

Last name:<input type="text" name="LN2F13" value="">
  <br>


<h4>Author Three</h4>


First, middle name/initial:<input type="text" name="FNF13" value="">
  <br>

Last name:<input type="text" name="LN3F13" value="">
  <br>";



Site Title:<input type="text" name="STF13" value=""><br>

Article Title<input type="text" name="ATF13" value=""><br>


URL: <input type="text" name="urlF13" value=""></br>

<input type="submit" name="footIWPCsubmit" value="Submit"> 

</div>

<!---div for internet resources without print version-->

<div id="fourteen" style="display:none">
<h2>Internet Publication without a Print Counterpart Citation</h2>


</br>
Article Title:<input type="text" name="ATF14" value="">
</br>
Website Title: :<input type="text" name="STF14" value="">
URL: <input type="text" name="urlF14" value="">

  <input type="submit" name="footINPCsubmit" value="Submit"> 
</div>






</form>



<script>

if(document.getElementById('foot').checked=true) {  ///hides bibliography forms when the footnote button is selected
document.getElementById("foot").addEventListener("click", function(){
	document.getElementById("Bib Form Selector").style.display="none"
	document.getElementById("Foot Form Selector").style.display="block"
	
});}

if(document.getElementById('bib').checked=true) {
document.getElementById("bib").addEventListener("click", function(){ ///hides footnote forms when the bibliography button is selected
	document.getElementById("Bib Form Selector").style.display="block"
	document.getElementById("Foot Form Selector").style.display="none"
});}



</script>
For resource types outside of these categories, please consult the <a href="http://discovere.emory.edu/discovere:default_scope:01EMORY_ALMA21267258750002486">SBL Handbook</a>
