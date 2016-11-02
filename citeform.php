<?php
function name($FN, $LN, $position) {
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
	if ($_POST["LN2"]===""){
		$response=name($_POST["FN1"], $_POST["LN1"], 1)." <i>".$_POST["BT"]."</i>. ".$_POST["PCC"].", ".$_POST["PCS"].": ".$_POST["PC"].", ".$_POST["PD"]."." ;}

	if ($_POST["LN2"]!=="" and $_POST["LN3"]==""){
			$response= name($_POST["FN1"], $_POST["LN1"], 1)." and ".name($_POST["FN2"],$_POST["LN2"], 2).". <i>".$_POST["BT"]."</i>. ".$_POST["PCC"].", ".$_POST["PCS"].": ".$_POST["PC"].", ".$_POST["PD"]."." ;}


	if ($_POST["LN3"]!==""){
		$response= name($_POST["FN1"],$_POST["LN1"],1).",  ".name($_POST["FN2"],$_POST["LN2"],2).", and ".name($_POST["FN3"], $_POST["LN3"],3).". "."<i>".$_POST["BT"]."</i>. ".$_POST["PCC"].", ".$_POST["PCS"].": ".$_POST["PC"].", ".$_POST["PD"]."." ;}


	echo $response;
}

###handles form for books with editors
if (!empty($_POST['edsubmit'])) {
	if ($_POST["LN2"]===""){
		$response =name($_POST["FN1"], $_POST["LN1"], 1)."., ed. <i>".$_POST["BT"]."</i>. ".$_POST["PCC"].", ".$_POST["PCS"].": ".$_POST["PC"].", ".$_POST["PD"]."." ;}

	if ($_POST["LN2"]!=="" and $_POST["LN3"]==""){
		$response= name($_POST["FN1"], $_POST["LN1"], 1)." and ".name($_POST["FN2"],$_POST["LN2"], 2).", eds. <i>".$_POST["BT"]."</i>. ".$_POST["PCC"].", ".$_POST["PCS"].": ".$_POST["PC"].", ".$_POST["PD"]."." ;}


	if ($_POST["LN3"]!==""){
		$response= name($_POST["FN1"],$_POST["LN1"],1).",  ".name($_POST["FN2"],$_POST["LN2"],2).", and ".name($_POST["FN3"], $_POST["LN3"],3).", eds. "."<i>".$_POST["BT"]."</i>. ".$_POST["PCC"].", ".$_POST["PCS"].": ".$_POST["PC"].", ".$_POST["PD"]."." ;}
	echo $response;
}


###handles form for journals with continuous pagination
if (!empty($_POST['jwpsubmit'])) {
	if ($_POST["LN2"]===""){
		$response=name($_POST["FN1"], $_POST["LN1"], 1).". \"".$_POST["AT"].". \"<i>".$_POST["JT"]."</i> ".$_POST["JV"]." (".$_POST["JY"]."): ".$_POST["Page1"]."-".$_POST["Page2"].".";}
	

	if ($_POST["LN2"]!=="" and $_POST["LN3"]==""){
		$response=name($_POST["FN1"], $_POST["LN1"], 1)." and ".name($_POST["FN2"],$_POST["LN2"], 2).". \"".$_POST["AT"].". \"<i>". $_POST["JT"]."</i> ".$_POST["JV"]." (".$_POST["JY"]."): ".$_POST["Page1"]."-".$_POST["Page2"].".";}

	if ($_POST["LN3"]!==""){
		$response= name($_POST["FN1"],$_POST["LN1"],1).", ".name($_POST["FN2"],$_POST["LN2"],2).", and ".name($_POST["FN3"], $_POST["LN3"],3).". \"".$_POST["AT"].". \"<i>". $_POST["JT"]."</i> ".$_POST["JV"]." (".$_POST["JY"]."): ".$_POST["Page1"]."-".$_POST["Page2"].".";}
	echo $response;
}

###handles form for journals without continuous pagination
if (!empty($_POST['jwopsubmit'])) {

	if ($_POST["LN2"]===""){	
		$response= name($_POST["FN1"], $_POST["LN1"], 1).". \"".$_POST["AT"].".\"<i>". $_POST["JT"]."</i> ".$_POST["JV"].".".$_POST["JI"]." (".$_POST["JY"]."): ".$_POST["Page1"]."-".$_POST["Page2"].".";}
	

	if ($_POST["LN2"]!=="" and $_POST["LN3"]==""){
		$response=name($_POST["FN1"], $_POST["LN1"], 1)." and ".name($_POST["FN2"],$_POST["LN2"], 2).". \"".$_POST["AT"].".\"<i>". $_POST["JT"]."</i> ".$_POST["JV"].".".$_POST["JI"]." (".$_POST["JY"]."): ".$_POST["Page1"]."-".$_POST["Page2"].".";}

	if ($_POST["LN3"]!==""){
		$response= name($_POST["FN1"],$_POST["LN1"],1).", ".name($_POST["FN2"],$_POST["LN2"],2).", and ".name($_POST["FN3"], $_POST["LN3"],3).". \"".$_POST["AT"].".\"<i>". $_POST["JT"]."</i> ".$_POST["JV"].".".$_POST["JI"]." (".$_POST["JY"]."): ".$_POST["Page1"]."-".$_POST["Page2"].".";}
		echo $response;
}
###handles form for dictionaries and enclyclopedias
if (!empty($_POST['dictsubmit'])){
	if ($_POST["LN2"]===""){	
		$response=name($_POST["FN1"], $_POST["LN1"], 1)."."."\"".$_POST["ET"].".\" <i>". $_POST["dicttitle"]."</i> ".$_POST["V1"].":".$_POST["Page1"]."-".$_POST["Page2"].".";}
	
	if ($_POST["LN2"]!=="" and $_POST["LN3"]==""){
		$response=name($_POST["FN1"], $_POST["LN1"], 1)." and ".name($_POST["FN2"],$_POST["LN2"], 2).". ".$_POST["LN2"].".\"".$_POST["ET"].".\" <i>". $_POST["dicttitle"]."</i> ".$_POST["V1"].":".$_POST["Page1"]."-".$_POST["Page2"].".";}

	if ($_POST["LN3"]!==""){
		$response=  name($_POST["FN1"],$_POST["LN1"],1).", ".name($_POST["FN2"],$_POST["LN2"],2).", and ".name($_POST["FN3"], $_POST["LN3"],3).".\"".$_POST["ET"].".\" <i>". $_POST["dicttitle"]."</i> ".$_POST["V1"].":".$_POST["Page1"]."-".$_POST["Page2"].".";
	}
	echo $response;

}
###handles form for internet resources with print versions
if (!empty($_POST['IWPCsubmit'])) {
	if ($_POST["LN2"]===""){
		$response=name($_POST["FN1"], $_POST["LN1"], 1).".".".\"".$_POST["AT"].".\" ".$_POST["ST"]." ".$_POST["url"].".";}
	if ($_POST["LN2"]!=="" and $_POST["LN3"]==""){
		$response=name($_POST["FN1"], $_POST["LN1"], 1)." and ".name($_POST["FN2"],$_POST["LN2"], 2)." .\"".$_POST["AT"]."\" ".$_POST["ST"]." ".$_POST["url"].".";
	}

	if ($_POST["LN3"]!==""){
		$response=name($_POST["FN1"],$_POST["LN1"],1).", ".name($_POST["FN2"],$_POST["LN2"],2).", and ".name($_POST["FN3"], $_POST["LN3"],3).".\"".$_POST["AT"]."\" ".$_POST["ST"]." ".$_POST["url"].".";}
	echo $response;

}

###handles form for internet resources without print version.
if (!empty($_POST['INPCsubmit'])) {
	$response= "\"".$_POST["AT"]."\""." ".$_POST["ST"]." ".$_POST["url"];
	echo $response;
}
############################
###BEGIN FOOTNOTE HANDLERS####
############################



###handles form for books with only authors
if (!empty($_POST['footbooksubmit'])) {
	if ($_POST["LN2"]===""){
		echo "yes";
		$response=$_POST["FN1"].$_POST["LN1"].", <i>".$_POST["BT"]."</i>. (".$_POST["PCC"].", ".$_POST["PCS"].": ".$_POST["PC"].", ".$_POST["PD"]."), ".$_POST["PG"];}

	if ($_POST["LN2"]!=="" and $_POST["LN3"]==""){
			$response=$_POST["FN1"].$_POST["LN1"]." and ".$_POST["FN2"].$_POST["LN2"].". <i>".$_POST["BT"]."</i>. (".$_POST["PCC"].", ".$_POST["PCS"].": ".$_POST["PC"].", ".$_POST["PD"]."), ".$_POST["PG"];}


	if ($_POST["LN3"]!==""){
		$response=$_POST["FN1"].$_POST["LN1"].",  ".$_POST["FN2"].$_POST["LN2"].", and ".$_POST["FN3"].$_POST["LN3"].". "."<i>".$_POST["BT"]."</i>. (".$_POST["PCC"].", ".$_POST["PCS"].": ".$_POST["PC"].", ".$_POST["PD"]."), ".$_POST["PG"];}


	echo $response;
}

###handles form for books with editors
if (!empty($_POST['footedsubmit'])) {
	if ($_POST["LN2"]===""){
		$response =$_POST["FN1"].$_POST["LN1"]."., ed. <i>".$_POST["BT"]."</i>. (".$_POST["PCC"].", ".$_POST["PCS"].": ".$_POST["PC"]."), ".$_POST["PD"].$_POST["PG"]."." ;}

	if ($_POST["LN2"]!=="" and $_POST["LN3"]==""){
		$response= $_POST["FN1"].$_POST["LN1"]." and ".$_POST["FN2"].$_POST["LN2"].", eds. <i>".$_POST["BT"]."</i>. (".$_POST["PCC"].", ".$_POST["PCS"].": ".$_POST["PC"]."), ".$_POST["PD"].$_POST["PG"]."." ;}


	if ($_POST["LN3"]!==""){
		$response=$_POST["FN1"].$_POST["LN1"].",  ".$_POST["FN2"].$_POST["LN2"].", and ".$_POST["FN3"].$_POST["LN3"].", eds. "."<i>(".$_POST["BT"]."</i>. (".$_POST["PCC"].", ".$_POST["PCS"].": ".$_POST["PC"]."), ".$_POST["PD"].$_POST["PG"]."." ;}
	echo $response;
}


###handles form for journals with continuous pagination
if (!empty($_POST['footjwpsubmit'])) {
	if ($_POST["LN2"]===""){
		$response=$_POST["FN1"].$_POST["LN1"].", \"".$_POST["AT"].", \"<i>".$_POST["JT"]."</i> ".$_POST["JV"]." (".$_POST["JY"]."): ".$_POST["PG"]."." ;}

	

	if ($_POST["LN2"]!=="" and $_POST["LN3"]==""){
		$response=$_POST["FN1"].$_POST["LN1"]." and ".$_POST["FN2"].$_POST["LN2"].", \"".$_POST["AT"].", \"<i>". $_POST["JT"]."</i> ".$_POST["JV"]." (".$_POST["JY"]."): ".$_POST["PG"]."." ;}


	if ($_POST["LN3"]!==""){
		$response= $_POST["FN1"].$_POST["LN1"].", ".$_POST["FN2"].$_POST["LN2"].", and ".$_POST["FN3"].$_POST["LN3"].", \"".$_POST["AT"].",\"<i>". $_POST["JT"]."</i> ".$_POST["JV"]." (".$_POST["JY"]."): ".$_POST["PG"]."." ;}

	echo $response;
}

###handles form for journals without continuous pagination
if (!empty($_POST['footjwopsubmit'])) {

	if ($_POST["LN2"]===""){	
		$response=$_POST["FN1"].$_POST["LN1"].". \"".$_POST["AT"].",\"<i>". $_POST["JT"]."</i> ".$_POST["JV"].".".$_POST["JI"]." (".$_POST["JY"]."): ".$_POST["Page1"]."-".$_POST["Page2"].".";}
	

	if ($_POST["LN2"]!=="" and $_POST["LN3"]==""){
		$response=$_POST["FN1"].$_POST["LN1"]." and ".$_POST["FN2"].$_POST["LN2"].", \"".$_POST["AT"].", \"<i>". $_POST["JT"]."</i> ".$_POST["JV"].".".$_POST["JI"]." (".$_POST["JY"]."): ".$_POST["Page1"]."-".$_POST["Page2"].".";}

	if ($_POST["LN3"]!==""){
		$response= $_POST["FN1"].$_POST["LN1"].", ".$_POST["FN2"].$_POST["LN2"].", and ".$_POST["FN3"].$_POST["LN3"].", \"".$_POST["AT"].", \" <i>". $_POST["JT"]."</i> ".$_POST["JV"].".".$_POST["JI"]." (".$_POST["JY"]."): ".$_POST["PG"]."." ;}

		echo $response;
}
###handles form for dictionaries and enclyclopedias
if (!empty($_POST['footdictsubmit'])){
	if ($_POST["LN2"]===""){	
		$response=$_POST["FN1"].$_POST["LN1"].",\"".$_POST["ET"].",\" <i>". $_POST["dicttitle"]."</i> ".$_POST["V1"].":".$_POST["PG"]."." ;}
	
	if ($_POST["LN2"]!=="" and $_POST["LN3"]==""){
		$response=$_POST["FN1"].$_POST["LN1"]." and ".$_POST["FN2"].$_POST["LN2"].", ".$_POST["LN2"].",\"".$_POST["ET"].",\" <i>". $_POST["dicttitle"]."</i> ".$_POST["V1"].":".$_POST["PG"]."." ;}


	if ($_POST["LN3"]!==""){
		$response=$_POST["FN1"].$_POST["LN1"].", ".$_POST["FN2"].$_POST["LN2"].", and ".$_POST["FN3"].$_POST["LN3"].",\"".$_POST["ET"].",\" <i>". $_POST["dicttitle"]."</i> ".$_POST["V1"].":".$_POST["PG"]."." ;}

	
	echo $response;

}
###handles form for internet resources with print versions
if (!empty($_POST['footIWPCsubmit'])) {
	if ($_POST["LN2"]===""){
		$response=$_POST["FN1"].$_POST["LN1"].".\"".$_POST["AT"].",\" ".$_POST["ST"].", ".$_POST["url"].".";}
	if ($_POST["LN2"]!=="" and $_POST["LN3"]==""){
		$response=$_POST["FN1"].$_POST["LN1"]." and ".$_POST["FN2"].$_POST["LN2"].".\"".$_POST["AT"].",\" ".$_POST["ST"].", ".$_POST["url"].".";
	}

	if ($_POST["LN3"]!==""){
		$response=$_POST["FN1"].$_POST["LN1"].", ".$_POST["FN2"].$_POST["LN2"].", and ".$_POST["FN3"].$_POST["LN3"].".\"".$_POST["AT"].",\" ".$_POST["ST"].", ".$_POST["url"].".";}
	echo $response;

}

###handles form for internet resources without print version.
if (!empty($_POST['footINPCsubmit'])) {
	$response= "\"".$_POST["AT"]."\""." ".$_POST["ST"]." ".$_POST["url"];
	echo $response;
}



?>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<form id="style" name="style">
  <input type="radio" name="radio" id="foot" value="foot"/>Footnote<br>
  <input type="radio" name="radio" id="bib" value="bib"/> Bibliography<br>
</form>



<form id="Bib Form Selector" style="display:none"> <!---dropdown bar for form selection-->
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
<div id="bibdata"> <!---********bibliography entry forms******** --->

<?php
$name =" <h4>Author One</h4>


First, middle name/initial:<input type=\"text\" name=\"FN1\" value=\"\">(e.g. James T. or James Tiberius.)
  <br>

Last name:<input type=\"text\" name=\"LN1\" value=\"\">
  <br>


<h4>Author Two</h4>

First, middle name/initial:<input type=\"text\" name=\"FN2\" value=\"\">
  <br>

Last name:<input type=\"text\" name=\"LN2\" value=\"\">
  <br>


<h4>Author Three</h4>


First, middle name/initial:<input type=\"text\" name=\"FN3\" value=\"\">
  <br>

Last name:<input type=\"text\" name=\"LN3\" value=\"\">
  <br>";
?>
<!---Form for books with authors -->
<form action="citeform.php"name="bookswauthors" id="bookswauthors" style="display:none" method="POST">
<h2>Books with up to three authors</h2>
<?php echo $name?>


<h4>Book Information</h4>
Book Title:<input type="text" name="BT" value="">
<br>

Publishing Company:<input type="text" name="PC" value="">
<br>

Publishing Company City:<input type="text" name="PCC" value="">
<br>

Publishing Company State:<input type="text" name="PCS" value="">
<br>

Publishing Date:<input type="text" name="PD" value="">
<br>

  <input type="submit" name="booksubmit" value="Submit">
</form> 

<!---Form for books with editors -->
<form action="citeform.php" method="POST" name="booksweditors" id="booksweditors" style="display:none">
<h2>Books with up to three editors</h2>
<h4>Editor One</h4>  


First, middle name/initial:<input type="text" name="FN1" value="">
  <br>

Last name:<input type="text" name="LN1" value="">
  <br>



<h4>Editor Two</h4>

First, middle name/initial:<input type="text" name="FN2" value="">
  <br>

Last name:<input type="text" name="LN2" value="">
  <br>


<h4>Editor Three</h4>


First, middle name/initial:<input type="text" name="FN3" value="">
  <br>

Last name:<input type="text" name="LN3" value="">
  <br>



<h4>Book Information</h4>
Book Title:<input type="text" name="BT" value="">
<br>

Publishing Company:<input type="text" name="PC" value="">
<br>

Publishing Company City:<input type="text" name="PCC" value="">
<br>

Publishing Company State:<input type="text" name="PCS" value="">
<br>

Publishing Date:<input type="text" name="PD" value="">
<br>

  <input type="submit" name="edsubmit" value="Submit">

</form>

<!---Form for journals with continuous pagination -->

<form action="citeform.php" method="POST" name="journalcontinuous" id="journalcontinuous" style="display:none">
<h2>Journals with Continuous Pagination</h2>
<?php
echo $name;?>
<h4>Journal Information</h4>
Journal Title:<input type="text" name="JT" value=""> (NOTE: SBL rules require that journal titles be abbreviated. See <a href="http://theologyontheweb.org.uk/abbreviations.html">here</a> for common abbreviations)
<br>

Journal Year:<input type="text" name="JY" value="">
<br>

Journal Volume:<input type="text" name="JV" value="">
<br>

Article Title<input type="text" name="AT" value=""> (NOTE: Do not include quotation marks around the title)

<br>

From Page:<input type="text" name="Page1" value="">
<br>
To Page:<input type= "text" name="Page2" value =""></br>

  <input type="submit" name="jwpsubmit" value="Submit">



</form>

<!---Form for journals without continuous pagination -->
<form action="citeform.php" method="POST" name="journalnocontinuous" id="journalnocontinuous" style="display:none">
<h2>Journals without Continuous Pagination</h2>
<?php echo $name;?>
<h4>Journal Information</h4>
Journal Title:<input type="text" name="JT" value="">(NOTE: SBL rules require that journal titles be abbreviated. See <a href="http://theologyontheweb.org.uk/abbreviations.html">here</a> for common abbreviations)
<br>

Journal Year:<input type="text" name="JY" value="">
<br>

Journal Volume:<input type="text" name="JV" value="">
<br>

Journal Issue:<input type="text" name="JI" value=""></br>
Article Title<input type="text" name="AT" value=""> (NOTE: Do not include quotation marks around the title)
<br>

From Page:<input type="text" name="Page1" value="">
<br>
To Page:<input type= "text" name="Page2" value =""></br>
  <input type="submit" name="jwopsubmit" value="Submit">





</form>

<!---Form for encyclopedias and dictionaries -->

<form  action="citeform.php" method="POST" name="encyclopedia" id="encyclopedia" style="display:none">
<h2>Encyclopedia or Dictionary</h2>
<?php echo $name;?>
<h4>Book Information</h4>


Entry Title <input type="text" name=ET value="">(NOTE: Do not include quotation marks around the title)</br>


Dictionary or Encyclopedia Title:<input type="text" name=dicttitle value="">(NOTE: SBL rules require that dictionary or enclyclopedia titles be abbreviated. See <a href="http://theologyontheweb.org.uk/abbreviations.html">here</a> for common abbreviations)
</br>	

From Page:<input type="text" name="Page1" value="">
<br>
To Page:<input type= "text" name="Page2" value =""></br> 	

Volume: <input type="text" name=V1 value=""></br> 	


  <input type="submit" name="dictsubmit" value="Submit">


</form>

<!---Form for internet resources with print version-->
<form action="citeform.php" method="POST" name="internetwithprint" id="internetwithprint" style="display:none">
<h2>Internet Publication with a Print Counterpart Citation</h2>

<?php echo $name;?>


Site Title:<input type="text" name="ST" value=""><br>

Article Title<input type="text" name="AT" value=""><br>


URL: <input type="text" name="url" value=""></br>

<input type="submit" name="IWPCsubmit" value="Submit"> 

</form>

<!---Form for internet resources without print version-->

<form action="citeform.php" method="POST" name="internetnoprint" id="internetnoprint" style="display:none">
<h2>Internet Publication without a Print Counterpart Citation</h2>


</br>
Article Title:<input type="text" name="AT" value="">
</br>
Website Title: :<input type="text" name="ST" value="">
URL: <input type="text" name="url" value="">

  <input type="submit" name="INPCsubmit" value="Submit"> 
</form>

</div>

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




<!---FORMS FOR FOOTNOTES-->
<div id="footdata" >
<!---Form for books with authors -->
<form action="citeform.php"name="footbookswauthors" id="footbookswauthors" style="display:none" method="POST">
<h2>Books with up to three authors</h2>
<?php echo $name?>


<h4>Book Information</h4>
Book Title:<input type="text" name="BT" value="">
<br>

Publishing Company:<input type="text" name="PC" value="">
<br>

Publishing Company City:<input type="text" name="PCC" value="">
<br>

Publishing Company State:<input type="text" name="PCS" value="">
<br>

Publishing Date:<input type="text" name="PD" value="">
<br>
Page:<input type="text" name="PG" value="">
<br>

  <input type="submit" name="footbooksubmit" value="Submit">
</form> 

<!---Form for books with editors -->
<form action="citeform.php" method="POST" name="footbooksweditors" id="footbooksweditors" style="display:none">
<h2>Books with up to three editors</h2>
<h4>Editor One</h4>  


First, middle name/initial:<input type="text" name="FN1" value="">
  <br>

Last name:<input type="text" name="LN1" value="">
  <br>



<h4>Editor Two</h4>

First, middle name/initial:<input type="text" name="FN2" value="">
  <br>

Last name:<input type="text" name="LN2" value="">
  <br>


<h4>Editor Three</h4>


First, middle name/initial:<input type="text" name="FN3" value="">
  <br>

Last name:<input type="text" name="LN3" value="">
  <br>



<h4>Book Information</h4>
Book Title:<input type="text" name="BT" value="">
<br>

Publishing Company:<input type="text" name="PC" value="">
<br>

Publishing Company City:<input type="text" name="PCC" value="">
<br>

Publishing Company State:<input type="text" name="PCS" value="">
<br>

Publishing Date:<input type="text" name="PD" value="">
<br>
Page:<input type="text" name="PG" value="">
<br>

  <input type="submit" name=foot"edsubmit" value="Submit">

</form>

<!---Form for journals with continuous pagination -->

<form action="citeform.php" method="POST" name="footjournalcontinuous" id="footjournalcontinuous" style="display:none">
<h2>Journals with Continuous Pagination</h2>
<?php
echo $name;?>
<h4>Journal Information</h4>
Journal Title:<input type="text" name="JT" value=""> (NOTE: SBL rules require that journal titles be abbreviated. See <a href="http://theologyontheweb.org.uk/abbreviations.html">here</a> for common abbreviations)
<br>

Journal Year:<input type="text" name="JY" value="">
<br>

Journal Volume:<input type="text" name="JV" value="">
<br>

Article Title<input type="text" name="AT" value=""> (NOTE: Do not include quotation marks around the title)

<br>

Page:<input type="text" name="PG" value="">
<br>

  <input type="submit" name="footjwpsubmit" value="Submit">



</form>

<!---Form for journals without continuous pagination -->
<form action="citeform.php" method="POST" name="footjournalnocontinuous" id="footjournalnocontinuous" style="display:none">
<h2>Journals without Continuous Pagination</h2>
<?php echo $name;?>
<h4>Journal Information</h4>
Journal Title:<input type="text" name="JT" value="">(NOTE: SBL rules require that journal titles be abbreviated. See <a href="http://theologyontheweb.org.uk/abbreviations.html">here</a> for common abbreviations)
<br>

Journal Year:<input type="text" name="JY" value="">
<br>

Journal Volume:<input type="text" name="JV" value="">
<br>

Journal Issue:<input type="text" name="JI" value=""></br>
Article Title<input type="text" name="AT" value=""> (NOTE: Do not include quotation marks around the title)
<br>

Page:<input type="text" name="PG" value="">
<br>
  <input type="submit" name="footjwopsubmit" value="Submit">





</form>

<!---Form for encyclopedias and dictionaries -->

<form  action="citeform.php" method="POST" name="footencyclopedia" id="footencyclopedia" style="display:none">
<h2>Encyclopedia or Dictionary</h2>
<?php echo $name;?>
<h4>Book Information</h4>


Entry Title <input type="text" name=ET value="">(NOTE: Do not include quotation marks around the title)</br>


Dictionary or Encyclopedia Title:<input type="text" name=dicttitle value="">(NOTE: SBL rules require that dictionary or enclyclopedia titles be abbreviated. See <a href="http://theologyontheweb.org.uk/abbreviations.html">here</a> for common abbreviations)
</br>	

Page:<input type="text" name="PG" value="">
<br>


Volume: <input type="text" name=V1 value=""></br> 	


  <input type="submit" name="footdictsubmit" value="Submit">


</form>

<!---Form for internet resources with print version-->
<form action="citeform.php" method="POST" name="footinternetwithprint" id="footinternetwithprint" style="display:none">
<h2>Internet Publication with a Print Counterpart Citation</h2>

<?php echo $name;?>


Site Title:<input type="text" name="ST" value=""><br>

Article Title<input type="text" name="AT" value=""><br>


URL: <input type="text" name="url" value=""></br>

<input type="submit" name="footIWPCsubmit" value="Submit"> 

</form>

<!---Form for internet resources without print version-->

<form action="citeform.php" method="POST" name="footinternetnoprint" id="footinternetnoprint" style="display:none">
<h2>Internet Publication without a Print Counterpart Citation</h2>


</br>
Article Title:<input type="text" name="AT" value="">
</br>
Website Title: :<input type="text" name="ST" value="">
URL: <input type="text" name="url" value="">

  <input type="submit" name="footINPCsubmit" value="Submit"> 
</form>
</div>


<!---begin JavaScript--->
<script>
if(document.getElementById('foot').checked=true) {
document.getElementById("foot").addEventListener("click", function(){
	document.getElementById("Bib Form Selector").style.display="none"
	document.getElementById("bibdata").style.display="none"
	document.getElementById("Foot Form Selector").style.display="block"
	document.getElementById("footdata").style.display="block"
	
});}

if(document.getElementById('bib').checked=true) {
document.getElementById("bib").addEventListener("click", function(){
	document.getElementById("Bib Form Selector").style.display="block"
	document.getElementById("bibdata").style.display="block"
	document.getElementById("footdata").style.display="none"
	document.getElementById("Foot Form Selector").style.display="none"
});}



$("#mybibselect").on("change", function() {
    $("#" + $(this).val()).show().siblings().hide();
})

$("#myfootselect").on("change", function() {
    $("#" + $(this).val()).show().siblings().hide();
})

</script>
For resource types outside of these categories, please consult the <a href="http://discovere.emory.edu/discovere:default_scope:01EMORY_ALMA21267258750002486">SBL Handbook</a>
