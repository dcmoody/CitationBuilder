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
		Case (0):
			return $LN.", ".$FN;
	endswitch;}

#######################################
####BEGIN SBL BIBLIOGRAPHY HANDLERS####
#######################################


###handles form for books with only authors
if (!empty($_POST['booksubmit'])) {
	if ($_POST["LN2F1"]===""){
		$response=name($_POST["FN1F1"], $_POST["LN1F1"], 0)." <i>".$_POST["BTF1"]."</i>. ".$_POST["PCCF1"].", ".$_POST["PCSF1"].": ".$_POST["PCF1"].", ".$_POST["PDF1"]."." ;}

	if ($_POST["LN2F1"]!=="" and $_POST["LN3F1"]==""){
			$response= name($_POST["FN1F1"], $_POST["LN1F1"], 1)." and ".name($_POST["FN2F1"],$_POST["LN2F1"], 2).". <i>".$_POST["BTF1"]."</i>. ".$_POST["PCCF1"].", ".$_POST["PCSF1"].": ".$_POST["PCF1"].", ".$_POST["PDF1"]."." ;}


	if ($_POST["LN3F1"]!==""){
		$response= name($_POST["FN1F1"],$_POST["LN1F1"],1).",  ".name($_POST["FN2F1"],$_POST["LN2F1"],2).", and ".name($_POST["FN3F1"], $_POST["LN3F1"],2).". "."<i>".$_POST["BTF1"]."</i>. ".$_POST["PCCF1"].", ".$_POST["PCSF1"].": ".$_POST["PCF1"].", ".$_POST["PDF1"]."." ;}


	echo $response;
}

###handles form for books with editors
if (!empty($_POST['edsubmit'])) {
	if ($_POST["LN2F2"]===""){
		$response =name($_POST["FN1F2"], $_POST["LN1F2"], 0).", ed. <i>".$_POST["BTF2"]."</i>. ".$_POST["PCCF2"].", ".$_POST["PCSF2"].": ".$_POST["PCF2"].", ".$_POST["PDF2"]."." ;}

	if ($_POST["LN2F2"]!=="" and $_POST["LN3F2"]==""){
		$response= name($_POST["FN1F2"], $_POST["LN1F2"], 1)." and ".name($_POST["FN2F2"],$_POST["LN2F2"], 2).", eds., <i>".$_POST["BTF2"]."</i>. ".$_POST["PCCF2"].", ".$_POST["PCSF2"].": ".$_POST["PCF2"].", ".$_POST["PDF2"]."." ;}


	if ($_POST["LN3F2"]!==""){
		$response= name($_POST["FN1F2"],$_POST["LN1F2"],1).",  ".name($_POST["FN2F2"],$_POST["LN2F2"],2).", and ".name($_POST["FN3F2"], $_POST["LN3F2"],2).", eds., "."<i>".$_POST["BTF2"]."</i>. ".$_POST["PCCF2"].", ".$_POST["PCSF2"].": ".$_POST["PCF2"].", ".$_POST["PDF2"]."." ;}
	echo $response;
}


###handles form for journals with continuous pagination
if (!empty($_POST['jwpsubmit'])) {
	if ($_POST["LN2F3"]===""){
		$response=name($_POST["FN1F3"], $_POST["LN1F3"], 0)." \"".$_POST["ATF3"].". \"<i> ".$_POST["JTF3"]."</i> ".$_POST["JVF3"]." (".$_POST["JYF3"]."): ".$_POST["Page1F3"].".";}
	

	if ($_POST["LN2F3"]!=="" and $_POST["LN3F3"]==""){
		$response=name($_POST["FN1F3"], $_POST["LN1F3"], 1)." and ".name($_POST["FN2F3"],$_POST["LN2F3"], 2).". \"".$_POST["ATF3"].". \" <i>". $_POST["JTF3"]."</i> ".$_POST["JVF3"]." (".$_POST["JYF3"]."): ".$_POST["Page1F3"].".";}

	if ($_POST["LN3F3"]!==""){
		$response= name($_POST["FN1F3"],$_POST["LN1F3"],1).", ".name($_POST["FN2F3"],$_POST["LN2F3"],2).", and ".name($_POST["FN3F3"], $_POST["LN3F3"],2).". \"".$_POST["ATF3"].".\" <i>". $_POST["JTF3"]."</i> ".$_POST["JVF3"]." (".$_POST["JYF3"]."): ".$_POST["Page1F3"].".";}
	echo $response;
}

###handles form for journals without continuous pagination
if (!empty($_POST['jwopsubmit'])) {

	if ($_POST["LN2F4"]===""){	
		$response= name($_POST["FN1F4"], $_POST["LN1F4"], 0)." \"".$_POST["ATF4"].".\"<i>". $_POST["JTF4"]."</i> ".$_POST["JVF4"].".".$_POST["JIF4"]." (".$_POST["JYF4"]."): ".$_POST["Page1F4"].".";}
	

	if ($_POST["LN2F4"]!=="" and $_POST["LN3F4"]==""){
		$response=name($_POST["FN1F4"], $_POST["LN1F4"], 1)." and ".name($_POST["FN2F4"],$_POST["LN2F4"], 2).". \"".$_POST["ATF4"].".\"<i>". $_POST["JTF4"]."</i> ".$_POST["JVF4"].".".$_POST["JIF4"]." (".$_POST["JYF4"]."): ".$_POST["Page1F4"].".";}

	if ($_POST["LN3F4"]!==""){
		$response= name($_POST["FN1F4"],$_POST["LN1F4"],1).", ".name($_POST["FN2F4"],$_POST["LN2F4"],2).", and ".name($_POST["FN3F4"], $_POST["LN3F4"],2).". \"".$_POST["ATF4"].".\"<i>". $_POST["JTF4"]."</i> ".$_POST["JVF4"].".".$_POST["JIF4"]." (".$_POST["JYF4"]."): ".$_POST["Page1F4"].".";}
		echo $response;
}
###handles form for dictionaries and enclyclopedias
if (!empty($_POST['dictsubmit'])){
	if ($_POST["LN2F5"]===""){	
		$response=name($_POST["FN1F5"], $_POST["LN1F5"], 0)." \"".$_POST["ETF5"].".\" <i>". $_POST["dicttitleF5"]."</i> ".$_POST["V1F5"].":".$_POST["Page1F5"]."-".$_POST["Page2F5"].".";}
	
	if ($_POST["LN2F5"]!=="" and $_POST["LN3F5"]==""){
		$response=name($_POST["FN1F5"], $_POST["LN1F5"], 1)." and ".name($_POST["FN2F5"],$_POST["LN2F5"], 2).". ".$_POST["LN2F5"].".\"".$_POST["ETF5"].".\" <i>". $_POST["dicttitleF5"]."</i> ".$_POST["V1F5"].":".$_POST["Page1F5"]."-".$_POST["Page2F5"].".";}

	if ($_POST["LN3F5"]!==""){
		$response=  name($_POST["FN1F5"],$_POST["LN1F5"],1).", ".name($_POST["FN2F5"],$_POST["LN2F5"],2).", and ".name($_POST["FN3F5"], $_POST["LN3F5"],2).".\"".$_POST["ETF5"].".\" <i>". $_POST["dicttitleF5"]."</i> ".$_POST["V1F5"].":".$_POST["Page1F5"]."-".$_POST["Page2F5"].".";
	}
	echo $response;

}
###handles form for internet resources with print versions
if (!empty($_POST['IWPCsubmit'])) {
	if ($_POST["LN2F6"]===""){
		$response=name($_POST["FN1F6"], $_POST["LN1F6"], 0)." \"".$_POST["ATF6"].".\" ".$_POST["STF6"]." ".$_POST["urlF6"].".";}
	if ($_POST["LN2F6"]!=="" and $_POST["LN3F6"]==""){
		$response=name($_POST["FN1F6"], $_POST["LN1F6"], 1)." and ".name($_POST["FN2F6"],$_POST["LN2F6"], 2).".\"".$_POST["ATF6"].".\" ".$_POST["STF6"]." ".$_POST["urlF6"].".";
	}

	if ($_POST["LN3F6"]!==""){
		$response=name($_POST["FN1F6"],$_POST["LN1F6"],1).", ".name($_POST["FN2F6"],$_POST["LN2F6"],2).", and ".name($_POST["FN3F6"], $_POST["LN3F6"],2).".\"".$_POST["ATF6"].".\" ".$_POST["STF6"]." ".$_POST["urlF6"].".";}
	echo $response;

}

###handles form for internet resources without print version.
if (!empty($_POST['INPCsubmit'])) {
	$response= "\"".$_POST["ATF7"].".\""." ".$_POST["STF7"].". ".$_POST["urlF7"].".";
	echo $response;
}


##################################
###BEGIN SBL FOOTNOTE HANDLERS####
##################################



###handles form for books with only authors
if (!empty($_POST['footbooksubmit'])) {
	if ($_POST["LN2F8"]===""){
		$response=name($_POST["FN1F8"],$_POST["LN1F8"],2).", <i>".$_POST["BTF8"]."</i>. (".$_POST["PCCF8"].", ".$_POST["PCSF8"].": ".$_POST["PCF8"].", ".$_POST["PDF8"]."), ".$_POST["PGF8"].".";}

	if ($_POST["LN2F8"]!=="" and $_POST["LN3F8"]==""){
			$response=name($_POST["FN1F8"],$_POST["LN1F8"],2)." and ".name($_POST["FN2F8"],$_POST["LN2F8"],2).". <i>".$_POST["BTF8"]."</i>. (".$_POST["PCCF8"].", ".$_POST["PCSF8"].": ".$_POST["PCF8"].", ".$_POST["PDF8"]."), ".$_POST["PGF8"].".";}


	if ($_POST["LN3F8"]!==""){
		$response=name($_POST["FN1F8"],$_POST["LN1F8"],2).",  ".name($_POST["FN2F8"],$_POST["LN2F8"],2).", and ".name($_POST["FN3F8"],$_POST["LN3F8"],2).". "."<i>".$_POST["BTF8"]."</i>. (".$_POST["PCCF8"].", ".$_POST["PCSF8"].": ".$_POST["PCF8"].", ".$_POST["PDF8"]."), ".$_POST["PGF8"].".";}


	echo $response;
}

###handles form for books with editors
if (!empty($_POST['footedsubmit'])) {
	if ($_POST["LN2F9"]===""){
		$response =name($_POST["FN1F9"],$_POST["LN1F9"],2).", ed., <i>".$_POST["BTF9"]."</i>. (".$_POST["PCCF9"].", ".$_POST["PCSF9"].": ".$_POST["PCF9"].", ".$_POST["PDF9"].") ".$_POST["PGF9"]."." ;}

	if ($_POST["LN2F9"]!=="" and $_POST["LN3F9"]==""){
		$response=name($_POST["FN1F9"],$_POST["LN1F9"],2)." and ".name($_POST["FN2F9"],$_POST["LN2F9"],2).", eds., <i>".$_POST["BTF9"]."</i>. (".$_POST["PCCF9"].", ".$_POST["PCSF9"].": ".$_POST["PCF9"].", ".$_POST["PDF9"].") ".$_POST["PGF9"]."." ;}


	if ($_POST["LN3F9"]!==""){
		$response=name($_POST["FN1F9"],$_POST["LN1F9"],2).",  ".name($_POST["FN2F9"],$_POST["LN2F9"],2).", and ".name($_POST["FN3F9"],$_POST["LN3F9"],2).", eds., "."<i>(".$_POST["BTF9"]."</i>. (".$_POST["PCCF9"].", ".$_POST["PCSF9"].": ".$_POST["PCF9"].", ".$_POST["PDF9"].") ".$_POST["PGF9"]."." ;}
	echo $response;
}


###handles form for journals with continuous pagination
if (!empty($_POST['footjwpsubmit'])) {
	if ($_POST["LN2F10"]===""){
		$response=name($_POST["FN1F10"],$_POST["LN1F10"],2).", \"".$_POST["ATF10"].",\"<i>".$_POST["JTF10"]."</i> ".$_POST["JVF10"]." (".$_POST["JYF10"]."): ".$_POST["PGF10"]."." ;}

	
	if ($_POST["LN2F10"]!=="" and $_POST["LN3F10"]==""){
		$response=name($_POST["FN1F10"],$_POST["LN1F10"],2)." and ".name($_POST["FN2F10"],$_POST["LN2F10"],2).",\"".$_POST["ATF10"].", \"<i>". $_POST["JTF10"]."</i> ".$_POST["JVF10"]." (".$_POST["JYF10"]."): ".$_POST["PGF10"]."." ;}


	if ($_POST["LN3F10"]!==""){
		$response=name($_POST["FN1F10"],$_POST["LN1F10"],2).", ".name($_POST["FN2F10"],$_POST["LN2F10"],2).", and ".name($_POST["FN3F10"],$_POST["LN3F10"],2).", \"".$_POST["ATF10"].",\"<i>". $_POST["JTF10"]."</i> ".$_POST["JVF10"]." (".$_POST["JYF10"]."): ".$_POST["PGF10"]."." ;}

	echo $response;
}

###handles form for journals without continuous pagination
if (!empty($_POST['footjwopsubmit'])) {

	if ($_POST["LN2F11"]===""){	
		$response=name($_POST["FN1F11"],$_POST["LN1F11"],2).". \"".$_POST["ATF11"].",\"<i>". $_POST["JTF11"]."</i> ".$_POST["JVF11"].".".$_POST["JIF11"]." (".$_POST["JYF11"]."): ".$_POST["PGF11"].".";}
	

	if ($_POST["LN2F11"]!=="" and $_POST["LN3F11"]==""){
		$response=name($_POST["FN1F11"],$_POST["LN1F11"],2)." and ".name($_POST["FN2F11"],$_POST["LN2F11"],2).", \"".$_POST["ATF11"].", \"<i>". $_POST["JTF11"]."</i> ".$_POST["JVF11"].".".$_POST["JIF11"]." (".$_POST["JYF11"]."): ".$_POST["PGF11"].".";}

	if ($_POST["LN3F11"]!==""){
		$response= name($_POST["FN1F11"],$_POST["LN1F11"],2).", ".name($_POST["FN2F11"],$_POST["LN2F11"],2).", and ".name($_POST["FN3F11"],$_POST["LN3F11"],2).", \"".$_POST["ATF11"].", \" <i>". $_POST["JTF11"]."</i> ".$_POST["JVF11"].".".$_POST["JIF11"]." (".$_POST["JYF11"]."): ".$_POST["PGF11"].".";}
		echo $response;
}
###handles form for dictionaries and enclyclopedias
if (!empty($_POST['footdictsubmit'])){
	if ($_POST["LN2F12"]===""){	
		$response=name($_POST["FN1F12"],$_POST["LN1F12"],2).",\"".$_POST["ETF12"].",\" <i>". $_POST["dicttitleF12"]."</i> ".$_POST["V1F12"].":".$_POST["PGF12"]."." ;}
	
	if ($_POST["LN2F12"]!=="" and $_POST["LN3F12"]==""){
		$response=name($_POST["FN1F12"],$_POST["LN1F12"],2)." and ".name($_POST["FN2F12"],$_POST["LN2F12"],2).",\"".$_POST["ETF12"].",\" <i>". $_POST["dicttitleF12"]."</i> ".$_POST["V1F12"].":".$_POST["PGF12"]."." ;}


	if ($_POST["LN3F12"]!==""){
		$response=name($_POST["FN1F12"],$_POST["LN1F12"],2).", ".name($_POST["FN2F12"],$_POST["LN2F12"],2).", and ".name($_POST["FN3F12"],$_POST["LN3F12"],2).",\"".$_POST["ETF12"].",\" <i>". $_POST["dicttitleF12"]."</i> ".$_POST["V1F12"].":".$_POST["PGF12"]."." ;}

	
	echo $response;

}
###handles form for internet resources with print versions
if (!empty($_POST['footIWPCsubmit'])) {
	if ($_POST["LN2F13"]===""){
		$response=name($_POST["FN1F13"],$_POST["LN1F13"],2).".\"".$_POST["ATF13"].",\" ".$_POST["STF13"].", ".$_POST["urlF13"].".";}
	if ($_POST["LN2F13"]!=="" and $_POST["LN3F13"]==""){
		$response=name($_POST["FN1F13"],$_POST["LN1F13"],2)." and ".name($_POST["FN2F13"],$_POST["LN2F13"],2).".\"".$_POST["ATF13"].",\" ".$_POST["STF13"].", ".$_POST["urlF13"].".";
	}

	if ($_POST["LN3F13"]!==""){
		$response=name($_POST["FN1F13"],$_POST["LN1F13"],2).", ".name($_POST["FN2F13"],$_POST["LN2F13"],2).", and ".name($_POST["FN3F13"],$_POST["LN3F13"],2).".\"".$_POST["ATF13"].",\" ".$_POST["STF13"].", ".$_POST["urlF13"].".";}
	echo $response;

}

###handles form for internet resources without print version.
if (!empty($_POST['footINPCsubmit'])) {
	$response= "\"".$_POST["ATF14"].",\""." ".$_POST["STF14"].", ".$_POST["urlF14"].".";
	echo $response;
}


###########################################
####BEGIN CHICAGO BIBLIOGRAPHY HANDLERS####
###########################################

###handles form for books with only authors
if (!empty($_POST["bibchicagobooksauthor"])) {

	if ($_POST["bibchicagobooksauthorLN2"]===""){	
		$response= name($_POST["bibchicagobooksauthorFN1"], $_POST["bibchicagobooksauthorLN1"], 0)." <i>". $_POST["bibchicagobooksauthorBT"]."</i>. ".$_POST["bibchicagobooksauthorPL"].": ".$_POST["bibchicagobooksauthorPN"].", ".$_POST["bibchicagobooksauthorPD"].".";}
	

	if ($_POST["bibchicagobooksauthorLN2"]!=="" and $_POST["bibchicagobooksauthorLN3"]==""){
		$response=name($_POST["bibchicagobooksauthorFN1"], $_POST["bibchicagobooksauthorLN1"], 1)." and ".name($_POST["bibchicagobooksauthorFN2"],$_POST["bibchicagobooksauthorLN2"], 2).". <i>". $_POST["bibchicagobooksauthorBT"]."</i>. ".$_POST["bibchicagobooksauthorPL"].": ".$_POST["bibchicagobooksauthorPN"].", ".$_POST["bibchicagobooksauthorPD"].".";}

	if ($_POST["bibchicagobooksauthorLN3"]!==""){
		$response= name($_POST["bibchicagobooksauthorFN1"],$_POST["bibchicagobooksauthorLN1"],1).", ".name($_POST["bibchicagobooksauthorFN2"],$_POST["bibchicagobooksauthorLN2"],2).", and ".name($_POST["bibchicagobooksauthorFN3"], $_POST["bibchicagobooksauthorLN3"],2)."<i>. ". $_POST["bibchicagobooksauthorBT"]."</i>. ".$_POST["bibchicagobooksauthorPL"].": ".$_POST["bibchicagobooksauthorPN"].", ".$_POST["bibchicagobooksauthorPD"].".";}
		echo $response;
}


###handles form for journals with continuous pagination
if (!empty($_POST["bibchicagoauthorwtrans"])) {
	if (!empty($_POST["bibchicagoauthorwtransELN"])){

		if ($_POST["bibchicagoauthorwtransLN2"]===""){	
			$response= name($_POST["bibchicagoauthorwtransFN1"], $_POST["bibchicagoauthorwtransLN1"], 0)." <i>". $_POST["bibchicagoauthorwtransBT"]."</i>. Edited by ".name($_POST["bibchicagoauthorwtransEFN"], $_POST["bibchicagoauthorwtransELN"], 2).". ".$_POST["bibchicagoauthorwtransPL"].": ".$_POST["bibchicagoauthorwtransPN"].", ".$_POST["bibchicagoauthorwtransPD"].".";}
	

		if ($_POST["bibchicagoauthorwtransLN2"]!=="" and $_POST["bibchicagoauthorwtransLN3"]==""){
			$response=name($_POST["bibchicagoauthorwtransFN1"], $_POST["bibchicagoauthorwtransLN1"], 1)." and ".name($_POST["bibchicagoauthorwtransFN2"],$_POST["bibchicagoauthorwtransLN2"], 2).". <i>". $_POST["bibchicagoauthorwtransBT"]."</i>. Edited by ".name($_POST["bibchicagoauthorwtransEFN"], $_POST["bibchicagoauthorwtransELN"], 2).". ".$_POST["bibchicagoauthorwtransPL"].": ".$_POST["bibchicagoauthorwtransPN"].", ".$_POST["bibchicagoauthorwtransPD"].".";}

		if ($_POST["bibchicagoauthorwtransLN3"]!==""){
			$response= name($_POST["bibchicagoauthorwtransFN1"],$_POST["bibchicagoauthorwtransLN1"],1).", ".name($_POST["bibchicagoauthorwtransFN2"],$_POST["bibchicagoauthorwtransLN2"],2).", and ".name($_POST["bibchicagoauthorwtransFN3"], $_POST["bibchicagoauthorwtransLN3"],2).". <i>". $_POST["bibchicagoauthorwtransBT"]."</i>. Edited by ".name($_POST["bibchicagoauthorwtransEFN"], $_POST["bibchicagoauthorwtransELN"], 2).". ".$_POST["bibchicagoauthorwtransPL"].": ".$_POST["bibchicagoauthorwtransPN"].", ".$_POST["bibchicagoauthorwtransPD"].".";}
	echo $response;}

if (!empty($_POST["bibchicagoauthorwtransTLN"])){
		if ($_POST["bibchicagoauthorwtransLN2"]===""){	
			$response= name($_POST["bibchicagoauthorwtransFN1"], $_POST["bibchicagoauthorwtransLN1"], 0)." <i>". $_POST["bibchicagoauthorwtransBT"]."</i>. Translated by ".name($_POST["bibchicagoauthorwtransTFN"], $_POST["bibchicagoauthorwtransTLN"], 2).". ".$_POST["bibchicagoauthorwtransPL"].": ".$_POST["bibchicagoauthorwtransPN"].", ".$_POST["bibchicagoauthorwtransPD"].".";}
	

		if ($_POST["bibchicagoauthorwtransLN2"]!=="" and $_POST["bibchicagoauthorwtransLN3"]==""){
			$response=name($_POST["bibchicagoauthorwtransFN1"], $_POST["bibchicagoauthorwtransLN1"], 1)." and ".name($_POST["bibchicagoauthorwtransFN2"],$_POST["bibchicagoauthorwtransLN2"], 2).". <i>". $_POST["bibchicagoauthorwtransBT"]."</i>. Translated by ".name($_POST["bibchicagoauthorwtransTFN"], $_POST["bibchicagoauthorwtransTLN"], 2).". ".$_POST["bibchicagoauthorwtransPL"].": ".$_POST["bibchicagoauthorwtransPN"].", ".$_POST["bibchicagoauthorwtransPD"].".";}

		if ($_POST["bibchicagoauthorwtransLN3"]!==""){
			$response= name($_POST["bibchicagoauthorwtransFN1"],$_POST["bibchicagoauthorwtransLN1"],1).", ".name($_POST["bibchicagoauthorwtransFN2"],$_POST["bibchicagoauthorwtransLN2"],2).", and ".name($_POST["bibchicagoauthorwtransFN3"], $_POST["bibchicagoauthorwtransLN3"],2).". <i>". $_POST["bibchicagoauthorwtransBT"]."</i>. Translated by ".name($_POST["bibchicagoauthorwtransTFN"], $_POST["bibchicagoauthorwtransTLN"], 2).". ".$_POST["bibchicagoauthorwtransPL"].": ".$_POST["bibchicagoauthorwtransPN"].", ".$_POST["bibchicagoauthorwtransPD"].".";}
		echo $response;
}
		}

###handles form for single chapter in an edited book
if (!empty($_POST["bibchicagosinglechapteredited"])) {

	if ($_POST["bibchicagosinglechaptereditedLN2"]===""){	
		$response= name($_POST["bibchicagosinglechaptereditedFN1"], $_POST["bibchicagosinglechaptereditedLN1"], 0).", \"".$_POST["bibchicagosinglechaptereditedCT"].".\" In <i>". $_POST["bibchicagosinglechaptereditedBT"]."</i>, edited by ".name($_POST["bibchicagosinglechaptereditedEFN"], $_POST["bibchicagosinglechaptereditedELN"], 2).", ".$_POST["bibchicagosinglechaptereditedPage"].". ".$_POST["bibchicagosinglechaptereditedPL"].": ".$_POST["bibchicagosinglechaptereditedPN"].", ".$_POST["bibchicagosinglechaptereditedPD"].".";}
	

	if ($_POST["bibchicagosinglechaptereditedLN2"]!=="" and $_POST["bibchicagosinglechaptereditedLN3"]==""){
		$response=name($_POST["bibchicagosinglechaptereditedFN1"], $_POST["bibchicagosinglechaptereditedLN1"], 1)." and ".name($_POST["bibchicagosinglechaptereditedFN2"],$_POST["bibchicagosinglechaptereditedLN2"], 2).". \"".$_POST["bibchicagosinglechaptereditedCT"].".\" In <i>". $_POST["bibchicagosinglechaptereditedBT"]."</i>, edited by ".name($_POST["bibchicagosinglechaptereditedEFN"], $_POST["bibchicagosinglechaptereditedELN"], 2).", ".$_POST["bibchicagosinglechaptereditedPage"].". ".$_POST["bibchicagosinglechaptereditedPL"].": ".$_POST["bibchicagosinglechaptereditedPN"].", ".$_POST["bibchicagosinglechaptereditedPD"].".";}

	if ($_POST["bibchicagosinglechaptereditedLN3"]!==""){
		$response= name($_POST["bibchicagosinglechaptereditedFN1"],$_POST["bibchicagosinglechaptereditedLN1"],1).", ".name($_POST["bibchicagosinglechaptereditedFN2"],$_POST["bibchicagosinglechaptereditedLN2"],2).", and ".name($_POST["bibchicagosinglechaptereditedFN3"], $_POST["bibchicagosinglechaptereditedLN3"],2).". \"".$_POST["bibchicagosinglechaptereditedCT"].".\" In <i>". $_POST["bibchicagosinglechaptereditedBT"]."</i>, edited by ".name($_POST["bibchicagosinglechaptereditedEFN"], $_POST["bibchicagosinglechaptereditedELN"], 2).", ".$_POST["bibchicagosinglechaptereditedPage"].". ".$_POST["bibchicagosinglechaptereditedPL"].": ".$_POST["bibchicagosinglechaptereditedPN"].", ".$_POST["bibchicagosinglechaptereditedPD"].".";}
		echo $response;
}
###handles form for print journals
if (!empty($_POST['bibchicagojournal'])) {
	if ($_POST["bibchicagojournalLN2"]===""){
		$response=name($_POST["bibchicagojournalFN1"], $_POST["bibchicagojournalLN1"], 0).""." \"".$_POST["bibchicagojournalAT"].".\" <i>".$_POST["bibchicagojournalJT"]."</i> ".$_POST["bibchicagojournalVN"].", no. ".$_POST["bibchicagojournalIN"]." (".$_POST["bibchicagojournaldate"]."): ".$_POST["bibchicagojournalpage"].".";}


	if ($_POST["bibchicagojournalLN2"]!=="" and $_POST["bibchicagojournalLN3"]==""){
		$response=name($_POST["bibchicagojournalFN1"], $_POST["bibchicagojournalLN1"], 1)." and ".name($_POST["bibchicagojournalFN2"],$_POST["bibchicagojournalLN2"], 2).". \"".$_POST["bibchicagojournalAT"].".\" <i>".$_POST["bibchicagojournalJT"]."</i> ".$_POST["bibchicagojournalVN"].", no. ".$_POST["bibchicagojournalIN"]." (".$_POST["bibchicagojournaldate"]."): ".$_POST["bibchicagojournalpage"].".";}

	if ($_POST["bibchicagojournalLN3"]!==""){
		$response=name($_POST["bibchicagojournalFN1"],$_POST["bibchicagojournalLN1"],1).", ".name($_POST["bibchicagojournalFN2"],$_POST["bibchicagojournalLN2"],2).", and ".name($_POST["bibchicagojournalFN3"], $_POST["bibchicagojournalLN3"],2).". \"".$_POST["bibchicagojournalAT"].".\" <i>".$_POST["bibchicagojournalJT"]."</i> ".$_POST["bibchicagojournalVN"].", no. ".$_POST["bibchicagojournalIN"]." (".$_POST["bibchicagojournaldate"]."): ".$_POST["bibchicagojournalpage"].". ";}	
	echo $response;
}

###handles form for online journals

if (!empty($_POST['bibchicagoonlinejournal'])) {
	if ($_POST["bibchicagoonlinejournalLN2"]===""){
		$response=name($_POST["bibchicagoonlinejournalFN1"], $_POST["bibchicagoonlinejournalLN1"], 0)." \"".$_POST["bibchicagoonlinejournalAT"].".\" <i>".$_POST["bibchicagoonlinejournalJT"]."</i> ".$_POST["bibchicagoonlinejournalVN"].", no. ".$_POST["bibchicagoonlinejournalIN"]." (".$_POST["bibchicagoonlinejournaldate"]."):".$_POST["bibchicagoonlinejournalpage"].". "."Accessed ".$_POST["bibchicagoonlinejournalaccessed"].". ".$_POST["bibchicagoonlinejournalurl"].".";}


	if ($_POST["bibchicagoonlinejournalLN2"]!=="" and $_POST["bibchicagoonlinejournalLN3"]==""){
		$response=name($_POST["bibchicagoonlinejournalFN1"], $_POST["bibchicagoonlinejournalLN1"], 1)." and ".name($_POST["bibchicagoonlinejournalFN2"],$_POST["bibchicagoonlinejournalLN2"], 2).". \"".$_POST["bibchicagoonlinejournalAT"].".\" <i>".$_POST["bibchicagoonlinejournalJT"]."</i> ".$_POST["bibchicagoonlinejournalVN"].", no. ".$_POST["bibchicagoonlinejournalIN"]." (".$_POST["bibchicagoonlinejournaldate"]."):".$_POST["bibchicagoonlinejournalpage"].". "."Accessed ".$_POST["bibchicagoonlinejournalaccessed"].". ".$_POST["bibchicagoonlinejournalurl"].".";}

	if ($_POST["bibchicagoonlinejournalLN3"]!==""){
		$response=name($_POST["bibchicagoonlinejournalFN1"],$_POST["bibchicagoonlinejournalLN1"],1).", ".name($_POST["bibchicagoonlinejournalFN2"],$_POST["bibchicagoonlinejournalLN2"],2).", and ".name($_POST["bibchicagoonlinejournalFN3"], $_POST["bibchicagoonlinejournalLN3"],2).". \"".$_POST["bibchicagoonlinejournalAT"].".\" <i>".$_POST["bibchicagoonlinejournalJT"]."</i> ".$_POST["bibchicagoonlinejournalVN"].", no. ".$_POST["bibchicagoonlinejournalIN"]." (".$_POST["bibchicagoonlinejournaldate"]."):".$_POST["bibchicagoonlinejournalpage"].". "."Accessed ".$_POST["bibchicagoonlinejournalaccessed"].". ".$_POST["bibchicagoonlinejournalurl"].".";}
	echo $response;
}

###handles form for internet resources without print version.
if (!empty($_POST['bibchicagowebsitesubmit'])) {
	if(!empty($_POST["bibchicagowebsitelastmodified"])){
	$response= $_POST["bibchicagowebsiteauthor"].". \"".$_POST["bibchiagowebsitepagetitle"].".\" ".$_POST["bibchicagowebsiteownertitle"].". Last modified ".$_POST["bibchicagowebsitelastmodified"].". Accessed ".$_POST["bibchicagowebaccessdate"].". ".$_POST["bibchicagoweburl"].".";}
	else{
	$response=$_POST["bibchicagowebsiteauthor"].". \"".$_POST["bibchiagowebsitepagetitle"].".\" ".$_POST["bibchicagowebsiteownertitle"].". ".$_POST["bibchicagowebsitepublishdate"].". Accessed ".$_POST["bibchicagowebaccessdate"].". ".$_POST["bibchicagoweburl"].".";
	}

	echo $response;
}

###########################################
####BEGIN CHICAGO FOOTNOTE HANDLERS####
###########################################
###handles form for books with only authors
if (!empty($_POST["footchicagobooksauthor"])) {

	if ($_POST["footchicagobooksauthorLN2"]===""){	
		$response= name($_POST["footchicagobooksauthorFN1"], $_POST["footchicagobooksauthorLN1"], 2)."<i>, ". $_POST["footchicagobooksauthorBT"]."</i> (".$_POST["footchicagobooksauthorPL"].": ".$_POST["footchicagobooksauthorPN"].", ".$_POST["footchicagobooksauthorPD"]."), ".$_POST["footchicagobooksauthorPage"].".";}
	

	if ($_POST["footchicagobooksauthorLN2"]!=="" and $_POST["footchicagobooksauthorLN3"]==""){
		$response=name($_POST["footchicagobooksauthorFN1"], $_POST["footchicagobooksauthorLN1"], 2)." and ".name($_POST["footchicagobooksauthorFN2"],$_POST["footchicagobooksauthorLN2"], 2)."<i>, ". $_POST["footchicagobooksauthorBT"]."</i> (".$_POST["footchicagobooksauthorPL"].": ".$_POST["footchicagobooksauthorPN"].", ".$_POST["footchicagobooksauthorPD"]."), ".$_POST["footchicagobooksauthorPage"].".";}

	if ($_POST["footchicagobooksauthorLN3"]!==""){
		$response= name($_POST["footchicagobooksauthorFN1"],$_POST["footchicagobooksauthorLN1"],2).", ".name($_POST["footchicagobooksauthorFN2"],$_POST["footchicagobooksauthorLN2"],2).", and ".name($_POST["footchicagobooksauthorFN3"], $_POST["footchicagobooksauthorLN3"],2)."<i>, ". $_POST["footchicagobooksauthorBT"]."</i> (".$_POST["footchicagobooksauthorPL"].": ".$_POST["footchicagobooksauthorPN"].", ".$_POST["footchicagobooksauthorPD"]."), ".$_POST["footchicagobooksauthorPage"].".";}
		echo $response;
}


###handles form for books with authors and editor/translator
if (!empty($_POST["footchicagoauthorwtrans"])) {
	if (!empty($_POST["footchicagoauthorwtransELN"])){

		if ($_POST["footchicagoauthorwtransLN2"]===""){	
			$response= name($_POST["footchicagoauthorwtransFN1"], $_POST["footchicagoauthorwtransLN1"], 0).", <i>". $_POST["footchicagoauthorwtransBT"]."</i>, ed. ".name($_POST["footchicagoauthorwtransEFN"], $_POST["footchicagoauthorwtransELN"], 2)." (".$_POST["footchicagoauthorwtransPL"].": ".$_POST["footchicagoauthorwtransPN"].", ".$_POST["footchicagoauthorwtransPD"]."), ".$_POST["footchicagoauthorwtransPage"].".";}
	

		if ($_POST["footchicagoauthorwtransLN2"]!=="" and $_POST["footchicagoauthorwtransLN3"]==""){
			$response=name($_POST["footchicagoauthorwtransFN1"], $_POST["footchicagoauthorwtransLN1"], 1)." and ".name($_POST["footchicagoauthorwtransFN2"],$_POST["footchicagoauthorwtransLN2"], 2).", <i>". $_POST["footchicagoauthorwtransBT"]."</i>, ed. ".name($_POST["footchicagoauthorwtransEFN"], $_POST["footchicagoauthorwtransELN"], 2).", ".$_POST["footchicagoauthorwtransPage"].". ".$_POST["footchicagoauthorwtransPL"].": ".$_POST["footchicagoauthorwtransPN"].", ".$_POST["footchicagoauthorwtransPD"].".";}

		if ($_POST["footchicagoauthorwtransLN3"]!==""){
			$response= name($_POST["footchicagoauthorwtransFN1"],$_POST["footchicagoauthorwtransLN1"],1).", ".name($_POST["footchicagoauthorwtransFN2"],$_POST["footchicagoauthorwtransLN2"],2).", and ".name($_POST["footchicagoauthorwtransFN3"], $_POST["footchicagoauthorwtransLN3"],2).", <i>". $_POST["footchicagoauthorwtransBT"]."</i>, ed. ".name($_POST["footchicagoauthorwtransEFN"], $_POST["footchicagoauthorwtransELN"], 2)." (".$_POST["footchicagoauthorwtransPL"].": ".$_POST["footchicagoauthorwtransPN"].", ".$_POST["footchicagoauthorwtransPD"]."), ".$_POST["footchicagoauthorwtransPage"].".";}
	echo $response;}

if (!empty($_POST["footchicagoauthorwtransTLN"])){
		if ($_POST["footchicagoauthorwtransLN2"]===""){	
			$response= name($_POST["footchicagoauthorwtransFN1"], $_POST["footchicagoauthorwtransLN1"], 2).", <i>". $_POST["footchicagoauthorwtransBT"]."</i>, trans. ".name($_POST["footchicagoauthorwtransTFN"], $_POST["footchicagoauthorwtransTLN"], 2)." (".$_POST["footchicagoauthorwtransPL"].": ".$_POST["footchicagoauthorwtransPN"].", ".$_POST["footchicagoauthorwtransPD"]."), ".$_POST["footchicagoauthorwtransPage"].".";}
	

		if ($_POST["footchicagoauthorwtransLN2"]!=="" and $_POST["footchicagoauthorwtransLN3"]==""){
			$response=name($_POST["footchicagoauthorwtransFN1"], $_POST["footchicagoauthorwtransLN1"], 2)." and ".name($_POST["footchicagoauthorwtransFN2"],$_POST["footchicagoauthorwtransLN2"], 2).", <i>". $_POST["footchicagoauthorwtransBT"]."</i>, trans. ".name($_POST["footchicagoauthorwtransTFN"], $_POST["footchicagoauthorwtransTLN"], 2)." (".$_POST["footchicagoauthorwtransPL"].": ".$_POST["footchicagoauthorwtransPN"].", ".$_POST["footchicagoauthorwtransPD"]."), ".$_POST["footchicagoauthorwtransPage"].".";}

		if ($_POST["footchicagoauthorwtransLN3"]!==""){
			$response= name($_POST["footchicagoauthorwtransFN1"],$_POST["footchicagoauthorwtransLN1"],2).", ".name($_POST["footchicagoauthorwtransFN2"],$_POST["footchicagoauthorwtransLN2"],2).", and ".name($_POST["footchicagoauthorwtransFN3"], $_POST["footchicagoauthorwtransLN3"],2).", <i>". $_POST["footchicagoauthorwtransBT"]."</i>, trans. ".name($_POST["footchicagoauthorwtransEFN"], $_POST["footchicagoauthorwtransELN"], 2)." (".$_POST["footchicagoauthorwtransPL"].": ".$_POST["footchicagoauthorwtransPN"].", ".$_POST["footchicagoauthorwtransPD"]."), ".$_POST["footchicagoauthorwtransPage"].".";}
		echo $response;
}
		}


###handles form for single chapter in an edited book
if (!empty($_POST["footchicagosinglechapteredited"])) {

	if ($_POST["footchicagosinglechaptereditedLN2"]===""){	
		$response= name($_POST["footchicagosinglechaptereditedFN1"], $_POST["footchicagosinglechaptereditedLN1"], 2).", \"".$_POST["footchicagosinglechaptereditedCT"].",\" in <i>". $_POST["footchicagosinglechaptereditedBT"]."</i>, ed. ".name($_POST["footchicagosinglechaptereditedEFN"], $_POST["footchicagosinglechaptereditedELN"], 2)." (".$_POST["footchicagosinglechaptereditedPL"].": ".$_POST["footchicagosinglechaptereditedPN"].", ".$_POST["footchicagosinglechaptereditedPD"]."), ".$_POST["footchicagosinglechaptereditedPage"].".";}
	

	if ($_POST["footchicagosinglechaptereditedLN2"]!=="" and $_POST["footchicagosinglechaptereditedLN3"]==""){
		$response=name($_POST["footchicagosinglechaptereditedFN1"], $_POST["footchicagosinglechaptereditedLN1"], 2)." and ".name($_POST["footchicagosinglechaptereditedFN2"],$_POST["footchicagosinglechaptereditedLN2"], 2).", \"".$_POST["footchicagosinglechaptereditedCT"].",\" in <i>". $_POST["footchicagosinglechaptereditedBT"]."</i>, ed. ".name($_POST["footchicagosinglechaptereditedEFN"], $_POST["footchicagosinglechaptereditedELN"], 2)." (".$_POST["footchicagosinglechaptereditedPL"].": ".$_POST["footchicagosinglechaptereditedPN"].", ".$_POST["footchicagosinglechaptereditedPD"]."), ".$_POST["footchicagosinglechaptereditedPage"].".";}

	if ($_POST["footchicagosinglechaptereditedLN3"]!==""){
		$response= name($_POST["footchicagosinglechaptereditedFN1"],$_POST["footchicagosinglechaptereditedLN1"],2).", ".name($_POST["footchicagosinglechaptereditedFN2"],$_POST["footchicagosinglechaptereditedLN2"],2).", and ".name($_POST["footchicagosinglechaptereditedFN3"], $_POST["footchicagosinglechaptereditedLN3"],2).", \"".$_POST["footchicagosinglechaptereditedCT"].",\" in <i>". $_POST["footchicagosinglechaptereditedBT"]."</i>, ed. ".name($_POST["footchicagosinglechaptereditedEFN"], $_POST["footchicagosinglechaptereditedELN"], 2)." (".$_POST["footchicagosinglechaptereditedPL"].": ".$_POST["footchicagosinglechaptereditedPN"].", ".$_POST["footchicagosinglechaptereditedPD"]."), ".$_POST["footchicagosinglechaptereditedPage"].".";}
		echo $response;
}
###handles form for print journals
if (!empty($_POST['footchicagojournal'])) {
	if ($_POST["footchicagojournalLN2"]===""){
		$response=name($_POST["footchicagojournalFN1"], $_POST["footchicagojournalLN1"], 2).", \"".$_POST["footchicagojournalAT"].",\" <i>".$_POST["footchicagojournalJT"]."</i> ".$_POST["footchicagojournalVN"].", no. ".$_POST["footchicagojournalIN"]." (".$_POST["footchicagojournaldate"]."): ".$_POST["footchicagojournalpage"].".";}


	if ($_POST["footchicagojournalLN2"]!=="" and $_POST["footchicagojournalLN3"]==""){
		$response=name($_POST["footchicagojournalFN1"], $_POST["footchicagojournalLN1"], 2)." and ".name($_POST["footchicagojournalFN2"],$_POST["footchicagojournalLN2"], 2).", \"".$_POST["footchicagojournalAT"].",\" <i>".$_POST["footchicagojournalJT"]."</i> ".$_POST["footchicagojournalVN"].", no. ".$_POST["footchicagojournalIN"]." (".$_POST["footchicagojournaldate"]."): ".$_POST["footchicagojournalpage"].".";}

	if ($_POST["footchicagojournalLN3"]!==""){
		$response=name($_POST["footchicagojournalFN1"],$_POST["footchicagojournalLN1"],2).", ".name($_POST["footchicagojournalFN2"],$_POST["footchicagojournalLN2"],2).", and ".name($_POST["footchicagojournalFN3"], $_POST["footchicagojournalLN3"],2).", \"".$_POST["footchicagojournalAT"].",\" <i>".$_POST["footchicagojournalJT"]."</i> ".$_POST["footchicagojournalVN"].", no. ".$_POST["footchicagojournalIN"]." (".$_POST["footchicagojournaldate"]."): ".$_POST["footchicagojournalpage"].".";}	
	echo $response;
}

###handles form for online journals

if (!empty($_POST['footchicagoonlinejournal'])) {
	if ($_POST["footchicagoonlinejournalLN2"]===""){
		$response=name($_POST["footchicagoonlinejournalFN1"], $_POST["footchicagoonlinejournalLN1"], 2).", \"".$_POST["footchicagoonlinejournalAT"].",\" <i>".$_POST["footchicagoonlinejournalJT"]."</i> ".$_POST["footchicagoonlinejournalVN"].", no. ".$_POST["footchicagoonlinejournalIN"]." (".$_POST["footchicagoonlinejournaldate"]."):".$_POST["footchicagoonlinejournalpage"].", "."accessed ".$_POST["footchicagoonlinejournalaccessed"].". ".$_POST["footchicagoonlinejournalurl"].".";}


	if ($_POST["footchicagoonlinejournalLN2"]!=="" and $_POST["footchicagoonlinejournalLN3"]==""){
		$response=name($_POST["footchicagoonlinejournalFN1"], $_POST["footchicagoonlinejournalLN1"], 2)." and ".name($_POST["footchicagoonlinejournalFN2"],$_POST["footchicagoonlinejournalLN2"], 2).", \"".$_POST["footchicagoonlinejournalAT"].",\" <i>".$_POST["footchicagoonlinejournalJT"]."</i> ".$_POST["footchicagoonlinejournalVN"].", no. ".$_POST["footchicagoonlinejournalIN"]." (".$_POST["footchicagoonlinejournaldate"]."):".$_POST["footchicagoonlinejournalpage"].", "."accessed ".$_POST["footchicagoonlinejournalaccessed"].", ".$_POST["footchicagoonlinejournalurl"].".";}

	if ($_POST["footchicagoonlinejournalLN3"]!==""){
		$response=name($_POST["footchicagoonlinejournalFN1"],$_POST["footchicagoonlinejournalLN1"],2).", ".name($_POST["footchicagoonlinejournalFN2"],$_POST["footchicagoonlinejournalLN2"],2).", and ".name($_POST["footchicagoonlinejournalFN3"], $_POST["footchicagoonlinejournalLN3"],2).", \"".$_POST["footchicagoonlinejournalAT"].".\" <i>".$_POST["footchicagoonlinejournalJT"]."</i> ".$_POST["footchicagoonlinejournalVN"].", no. ".$_POST["footchicagoonlinejournalIN"]." (".$_POST["footchicagoonlinejournaldate"]."):".$_POST["footchicagoonlinejournalpage"].", "."accessed ".$_POST["footchicagoonlinejournalaccessed"].". ".$_POST["footchicagoonlinejournalurl"].".";}
	echo $response;
}

###handles form for internet resources without print version.
if (!empty($_POST['footchicagowebsitesubmit'])) {
	if(!empty($_POST["footchicagowebsitelastmodified"])){
	$response= $_POST["footchicagowebsiteauthor"].", \"".$_POST["footchiagowebsitepagetitle"].",\" ".$_POST["footchicagowebsiteownertitle"].", last modified ".$_POST["footchicagowebsitelastmodified"].", accessed ".$_POST["footchicagowebaccessdate"].". ".$_POST["footchicagoweburl"].".";}
	else{
	$response=$_POST["footchicagowebsiteauthor"].", \"".$_POST["footchiagowebsitepagetitle"].",\" ".$_POST["footchicagowebsiteownertitle"].", ".$_POST["footchicagowebsitepublishdate"].", accessed ".$_POST["footchicagowebaccessdate"].", ".$_POST["footchicagoweburl"].".";
	}

	echo $response;
}

?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script> 


$(document).ready(function (){
            $("#sblbibselect").change(function() {
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
            $("#sblfootselect").change(function() {
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
 $(document).ready(function (){

            $("#chicagobibselect").change(function() {

                if ($(this).val()!= "bibchicagobooksauthor") {
                    $("#sixteen").hide();
                }else{
                    $("#sixteen").show();
		}
                if ($(this).val()!= "bibchicagoauthorwtrans") {
                    $("#seventeen").hide();
                }else{
                    $("#seventeen").show();
		}
		if ($(this).val()!= "bibchicagosinglechapteredited") {
                    $("#eighteen").hide();
                }else{
                    $("#eighteen").show();
		}
		if ($(this).val()!= "bibchicagoprintjournal") {
                    $("#nineteen").hide();
                }else{
			$("#nineteen").show();
		}
		if ($(this).val()!= "bibchicagoonlinejournal") {
                    $("#twenty").hide();
                }else{
                    $("#twenty").show();
		}
		if ($(this).val()!= "bibchicagowebsite") {
                    $("#twentyone").hide();
                }else{
                    $("#twentyone").show();
		}
            });
});

$(document).ready(function (){
            $("#chicagofootselect").change(function() {

                if ($(this).val()!= "footchicagobooksauthor") {
                    $("#twentytwo").hide();
                }else{
                    $("#twentytwo").show();
		}
                if ($(this).val()!= "footchicagoauthorwtrans") {
                    $("#twentythree").hide();
                }else{
                    $("#twentythree").show();
		}
		if ($(this).val()!= "footchicagosinglechapteredited") {
                    $("#twentyfour").hide();
                }else{
                    $("#twentyfour").show();
		}
		if ($(this).val()!= "footchicagoprintjournal") {
                    $("#twentyfive").hide();
                }else{
		    $("#twentyfive").show();
		}
		if ($(this).val()!= "footchicagoonlinejournal") {
                    $("#twentysix").hide();
                }else{
                    $("#twentysix").show();
		}
		if ($(this).val()!= "footchicagowebsite") {
                    $("#twentyseven").hide();
                }else{
                    $("#twentyseven").show();
		}
            });
});







</script>

<form id="style" name="style"> <!--- radio buttons to select entry type. Selecting one turns off the forms for the other--->
  <input type="radio" name="radio" id="sbl" value="">SBL<br>
  <input type="radio" name="radio" id="chicago" value=""> Chicago/Turabian<br>
</form>


<form id="style1" name="style1" style="display:none" >
  <input type="radio" name="radio" id="sblfoot">Footnote<br>
  <input type="radio" name="radio" id="sblbib"> Bibliography<br>
</form>

<form id="style2" name="style2" style="display:none"> 
  <input type="radio" name="radio" id="chicagofoot" value="foot">Footnote<br>
  <input type="radio" name="radio" id="chicagobib" value="bib"> Bibliography<br>
</form>


<form id="sbl Bib Form Selector" style="display:none"> <!---dropdown bar for form selection for bibliography entries-->
<select id="sblbibselect">
<option value="" selected="selected">Select Resource Type</option>
<option value="bookswauthors">Books with up to three authors</option>
<option value="booksweditors">Books with up to three editors</option>
<option value="journalcontinuous">Journal with Continuous Pagination</option>
<option value="journalnocontinuous">Journal without Continuous Pagination</option>
<option value="encyclopedia">Encyclopedia or Dictionary</option>
<option value="internetwithprint">Internet Publication with a Print Counterpart </option>
<option value="internetnoprint">Internet Publication without a Print Counterpart </option>
</select></form>


<form id="sbl Foot Form Selector" style="display:none"> <!---dropdown bar for form selection-->
<select id="sblfootselect" >
<option value="" selected="selected">Select Resource Type</option>
<option value="footbookswauthors">Books with up to three authors</option>
<option value="footbooksweditors">Books with up to three editors</option>
<option value="footjournalcontinuous">Journal with Continuous Pagination</option>
<option value="footjournalnocontinuous">Journal without Continuous Pagination</option>
<option value="footencyclopedia">Encyclopedia or Dictionary</option>
<option value="footinternetwithprint">Internet Publication with a Print Counterpart </option>
<option value="footinternetnoprint">Internet Publication without a Print Counterpart </option>
</select></form>

<form id="chicago Bib Form Selector" style="display:none" > <!--dropdown bar for form selection for bibliography entries-->
<select id="chicagobibselect">
<option value="" selected="selected">Select Resource Type</option>
<option value="bibchicagobooksauthor">Books with only Authors</option>
<option value="bibchicagoauthorwtrans">Author(s) plus editor or translator</option>
<option value="bibchicagosinglechapteredited">Single Chapter in an Edited Book</option>
<option value="bibchicagoprintjournal">Print Journal Articles</option>
<option value="bibchicagoonlinejournal">Online Journal Articles</option>
<option value="bibchicagowebsite">Websites</option>
</select></form>


<form id="chicago Foot Form Selector" style="display:none"> <!--dropdown bar for form selection-->
<select id="chicagofootselect">
<option value="" selected="selected">Select Resource Type</option>
<option value="footchicagobooksauthor">Books with only Authors</option>
<option value="footchicagoauthorwtrans">Author(s) plus editor or translator</option>
<option value="footchicagosinglechapteredited">Single Chapter in an Edited Book</option>
<option value="footchicagoprintjournal">Print Journal Articles</option>
<option value="footchicagoonlinejournal">Online Journal Articles</option>
<option value="footchicagowebsite">Websites</option>
</select></form>



 <!--********bibliography entry forms******** -->



<!---Form for books with authors -->
<form action="citeform.php" method="POST" id="overform">
<div id="sblbibliography">
<div id="one" style="display:none;">

<h2>Books with up to three authors</h2>
<h4>Author One</h4>
First, middle name/initial:<input type="text" name="FN1F1" value="">(e.g. James T. or James Tiberius.)<br>
Last name:<input type="text" name="LN1F1" value=""><br>

<h4>Author Two</h4>
First, middle name/initial:<input type="text" name="FN2F1" value=""><br>
Last name:<input type="text" name="LN2F1" value=""><br>

<h4>Author Three</h4>
First, middle name/initial:<input type="text" name="FN3F1" value=""><br>
Last name:<input type="text" name="LN3F1" value=""><br>

<h4>Book Information</h4>
Book Title:<input type="text" name="BTF1" value=""><br>
Publishing Company:<input type="text" name="PCF1" value=""><br>
Publishing Company City:<input type="text" name="PCCF1" value=""><br>
Publishing Company State:<input type="text" name="PCSF1" value=""><br>
Publishing Date:<input type="text" name="PDF1" value=""><br>

  <input type="submit" name="booksubmit" value="Submit">
</div> 
<!---Form for books with editors -->
<div id="two" style="display:none">
<h2>Books with up to three editors</h2>
<h4>Editor One</h4>  
First, middle name/initial:<input type="text" name="FN1F2" value=""><br>
Last name:<input type="text" name="LN1F2" value=""><br>

<h4>Editor Two</h4>
First, middle name/initial:<input type="text" name="FN2F2" value=""><br>
Last name:<input type="text" name="LN2F2" value=""><br>


<h4>Editor Three</h4>
First, middle name/initial:<input type="text" name="FN3F2" value=""><br>
Last name:<input type="text" name="LN3F2" value=""><br>



<h4>Book Information</h4>
Book Title:<input type="text" name="BTF2" value=""><br>
Publishing Company:<input type="text" name="PCF2" value=""><br>
Publishing Company City:<input type="text" name="PCCF2" value=""><br>
Publishing Company State:<input type="text" name="PCSF2" value=""><br>
Publishing Date:<input type="text" name="PDF2" value=""><br>

  <input type="submit" name="edsubmit" value="Submit">

</div>
<!---Form for journals with continuous pagination -->

<div id="three" style="display:none">
<h2>Journals with Continuous Pagination</h2>
<h4>Author One</h4>


First, middle name/initial:<input type="text" name="FN1F3" value="">(e.g. James T. or James Tiberius.)<br>
Last name:<input type="text" name="LN1F3" value=""><br>

<h4>Author Two</h4>
First, middle name/initial:<input type="text" name="FN2F3" value=""><br>
Last name:<input type="text" name="LN2F3" value=""><br>


<h4>Author Three</h4>
First, middle name/initial:<input type="text" name="FN3F3" value=""><br>
Last name:<input type="text" name="LN3F3" value=""><br>

<h4>Journal Information</h4>
Journal Title:<input type="text" name="JTF3" value=""> (NOTE: SBL rules require that journal titles be abbreviated. See <a href="http://theologyontheweb.org.uk/abbreviations.html">here</a> for common abbreviations)<br>
Journal Year:<input type="text" name="JYF3" value=""><br>
Journal Volume:<input type="text" name="JVF3" value=""><br>
Article Title<input type="text" name="ATF3" value=""> (NOTE: Do not include quotation marks around the title)<br>
Page:<input type="text" name="Page1F3" value="">(e.g. 211-115)<br>

  <input type="submit" name="jwpsubmit" value="Submit">
</div>

<!---Form for journals without continuous pagination -->
<div id="four" style="display:none">
<h2>Journals without Continuous Pagination</h2>
<h4>Author One</h4>

First, middle name/initial:<input type="text\" name="FN1F4" value="">(e.g. James T. or James Tiberius.)<br>
Last name:<input type="text" name="LN1F4" value=""><br>

<h4>Author Two</h4>
First, middle name/initial:<input type="text" name="FN2F4" value=""><br>
Last name:<input type="text" name="LN2F4" value=""><br>

<h4>Author Three</h4>
First, middle name/initial:<input type="text" name="FN3F4" value=""><br>
Last name:<input type="text" name="LN3F4" value=""><br>

<h4>Journal Information</h4>
Journal Title:<input type="text" name="JTF4" value="">(NOTE: SBL rules require that journal titles be abbreviated. See <a href="http://theologyontheweb.org.uk/abbreviations.html">here</a> for common abbreviations)<br>
Journal Year:<input type="text" name="JYF4" value=""><br>
Journal Volume:<input type="text" name="JVF4" value=""><br>
Journal Issue:<input type="text" name="JIF4" value=""></br>
Article Title<input type="text" name="ATF4" value=""> (NOTE: Do not include quotation marks around the title)<br>
Page:<input type="text" name="Page1F4" value=""> (e.g. 211-115)<br>
  <input type="submit" name="jwopsubmit" value="Submit">
</div>

<!---Form for encyclopedias and dictionaries -->

<div id="five"  style="display:none">
<h2>Encyclopedia or Dictionary</h2>
<h4>Author One</h4>

First, middle name/initial:<input type="text" name="FN1F5" value="">(e.g. James T. or James Tiberius.)<br>
Last name:<input type="text" name="LN1F5" value=""><br>

<h4>Author Two</h4>
First, middle name/initial:<input type="text" name="FN2F5" value=""><br>
Last name:<input type="text" name="LN2F5" value=""><br>

<h4>Author Three</h4>
First, middle name/initial:<input type="text" name="FN3F5" value=""><br>
Last name:<input type="text" name="LN3F5" value=""><br>

<h4>Book Information</h4>
Entry Title <input type="text" name="ETF5" value="">(NOTE: Do not include quotation marks around the title)</br>
Dictionary or Encyclopedia Title:<input type="text" name="dicttitleF5" value="">(NOTE: SBL rules require that dictionary or enclyclopedia titles be abbreviated. See <a href="http://theologyontheweb.org.uk/abbreviations.html">here</a> for common abbreviations)</br>	
Page:<input type="text" name="Page1F5" value="">(e.g. 211-115) <br>
Volume: <input type="text" name="V1F5" value=""></br> 	
  <input type="submit" name="dictsubmit" value="Submit"></input>
</div>

<!---Form for internet resources with print version-->
<div id="six"  style="display:none">
<h2>Internet Publication with a Print Counterpart Citation</h2>

<h4>Author One</h4>
First, middle name/initial:<input type="text" name="FN1F6" value="">(e.g. James T. or James Tiberius.)<br>
Last name:<input type="text" name="LN1F6" value=""><br>

<h4>Author Two</h4>
First, middle name/initial:<input type="text" name="FN2F6" value=""><br>
Last name:<input type="text" name="LN2F6" value=""><br>

<h4>Author Three</h4>
First, middle name/initial:<input type="text" name="FN3F6" value=""><br>
Last name:<input type="text" name="LN3F6" value=""><br>


Site Title:<input type="text" name="STF6" value=""><br>
Article Title<input type="text" name="ATF6" value=""><br>
URL: <input type="text" name="urlF6" value=""></br>

<input type="submit" name="IWPCsubmit" value="Submit"> 
</div>

<!---Form for internet resources without print version-->

<div id="seven" style="display:none">
<h2>Internet Publication without a Print Counterpart Citation</h2>

Article Title:<input type="text" name="ATF7" value=""></br>
Website Title: :<input type="text" name="STF7" value="">
URL: <input type="text" name="urlF7" value="">
  <input type="submit" name="INPCsubmit" value="Submit"> 
</div>
</div>

<div id="sblfootnotes">
<!---div for books with authors -->
<div id="eight" style="display:none;">
<h2>Books with up to three authors</h2>
<h4>Author One</h4>
First, middle name/initial:<input type="text" name="FN1F8" value="">(e.g. James T. or James Tiberius.)<br>
Last name:<input type="text" name="LN1F8" value=""><br>

<h4>Author Two</h4>
First, middle name/initial:<input type="text" name="FN2F8" value=""><br>
Last name:<input type="text" name="LN2F8" value=""><br>

<h4>Author Three</h4>
First, middle name/initial:<input type="text" name="FN3F8" value=""><br>
Last name:<input type="text" name="LN3F8" value=""><br>

<h4>Book Indivation</h4>
Book Title:<input type="text" name="BTF8" value=""><br>
Publishing Company:<input type="text" name="PCF8" value=""><br>
Publishing Company City:<input type="text" name="PCCF8" value=""><br>
Publishing Company State:<input type="text" name="PCSF8" value=""><br>
Publishing Date:<input type="text" name="PDF8" value=""><br>
Page:<input type="text" name="PGF8" value=""><br>
  <input type="submit" name="footbooksubmit" value="Submit">
</div> 

<!---div for books with editors -->
<div id ="nine" style="display:none">
<h2>Books with up to three editors</h2>
<h4>Editor One</h4>  

First, middle name/initial:<input type="text" name="FN1F9" value=""><br>
Last name:<input type="text" name="LN1F9" value=""><br>

<h4>Editor Two</h4>
First, middle name/initial:<input type="text" name="FN2F9" value=""><br>
Last name:<input type="text" name="LN2F9" value=""><br>

<h4>Editor Three</h4>
First, middle name/initial:<input type="text" name="FN3F9" value=""><br>
Last name:<input type="text" name="LN3F9" value=""><br>

<h4>Book Indivation</h4>
Book Title:<input type="text" name="BTF9" value=""><br>
Publishing Company:<input type="text" name="PCF9" value=""><br>
Publishing Company City:<input type="text" name="PCCF9" value=""><br>
Publishing Company State:<input type="text" name="PCSF9" value=""><br>
Publishing Date:<input type="text" name="PDF9" value=""><br>
Page:<input type="text" name="PGF9" value="">(e.g. 211-115)<br>

  <input type="submit" name="footedsubmit" value="Submit">
</div>

<!---div for journals with continuous pagination -->

<div id="ten" style="display:none">
<h2>Journals with Continuous Pagination</h2>

<h4>Author One</h4>
First, middle name/initial:<input type="text" name="FN1F10" value="">(e.g. James T. or James Tiberius.)<br>
Last name:<input type="text" name="LN1F10" value=""><br>

<h4>Author Two</h4>
First, middle name/initial:<input type="text" name="FN2F10" value=""><br>
Last name:<input type="text" name="LN2F10" value=""><br>
<h4>Author Three</h4>
First, middle name/initial:<input type="text" name="FN3F10" value=""><br>
Last name:<input type="text" name="LN3F10" value=""><br>

<h4>Journal Indivation</h4>
Journal Title:<input type="text" name="JTF10" value=""> (NOTE: SBL rules require that journal titles be abbreviated. See <a href="http://theologyontheweb.org.uk/abbreviations.html">here</a> for common abbreviations)<br>
Journal Year:<input type="text" name="JYF10" value=""><br>
Journal Volume:<input type="text" name="JVF10" value=""><br>
Article Title<input type="text" name="ATF10" value=""> (NOTE: Do not include quotation marks around the title)<br>
Page:<input type="text" name="PGF10" value=""><br>
<input type="submit" name="footjwpsubmit" value="Submit">
</div>

<!---div for journals without continuous pagination -->
<div id="eleven" style="display:none">
<h2>Journals without Continuous Pagination</h2>
<h4>Author One</h4>
First, middle name/initial:<input type="text" name="FN1F11" value="">(e.g. James T. or James Tiberius.)<br>
Last name:<input type="text" name="LN1F11" value=""><br>


<h4>Author Two</h4>
First, middle name/initial:<input type="text" name="FN2F11" value=""><br>
Last name:<input type="text" name="LN2F11" value=""><br>


<h4>Author Three</h4>
First, middle name/initial:<input type="text" name="FNF11" value=""><br>
Last name:<input type="text" name="LN3F11" value=""><br>

<h4>Journal Indivation</h4>
Journal Title:<input type="text" name="JTF11" value="">(NOTE: SBL rules require that journal titles be abbreviated. See <a href="http://theologyontheweb.org.uk/abbreviations.html">here</a> for common abbreviations)<br>
Journal Year:<input type="text" name="JYF11" value=""><br>
Journal Volume:<input type="text" name="JVF11" value=""><br>
Journal Issue:<input type="text" name="JIF11" value=""></br>
Article Title<input type="text" name="ATF11" value=""> (NOTE: Do not include quotation marks around the title)<br>
Page:<input type="text" name="PGF11" value=""><br>
  <input type="submit" name="footjwopsubmit" value="Submit">

</div>

<!---div for encyclopedias and dictionaries -->

<div  id="twelve" style="display:none">
<h2>Encyclopedia or Dictionary</h2>
<h4>Author One</h4>
First, middle name/initial:<input type="text" name="FN1F12" value="">(e.g. James T. or James Tiberius.)<br>
Last name:<input type="text" name="LN1F12" value=""><br>

<h4>Author Two</h4>
First, middle name/initial:<input type="text" name="FN2F12" value=""><br>
Last name:<input type="text" name="LN2F12" value=""><br>

<h4>Author Three</h4>
First, middle name/initial:<input type="text" name="FN3F12" value=""><br>
Last name:<input type="text" name="LN3F12" value=""><br>

<h4>Book Indivation</h4>
Entry Title <input type="text" name=ETF12 value="">(NOTE: Do not include quotation marks around the title)</br>
Dictionary or Encyclopedia Title:<input type="text" name="dicttitleF12" value="">(NOTE: SBL rules require that dictionary or enclyclopedia titles be abbreviated. See <a href="http://theologyontheweb.org.uk/abbreviations.html">here</a> for common abbreviations)</br>	
Page:<input type="text" name="PGF12" value=""><br>
Volume: <input type="text" name="V1F12" value=""></br> 	
  <input type="submit" name="footdictsubmit" value="Submit">


</div>

<!---div for internet resources with print version-->
<div id="thirteen" style="display:none">
<h2>Internet Publication with a Print Counterpart Citation</h2>

<h4>Author One</h4>
First, middle name/initial:<input type="text" name="FN1F13" value="">(e.g. James T. or James Tiberius.)<br>
Last name:<input type="text" name="LN1F13" value=""><br>

<h4>Author Two</h4>
First, middle name/initial:<input type="text" name="FN2F13" value=""><br>
Last name:<input type="text" name="LN2F13" value=""><br>

<h4>Author Three</h4>
First, middle name/initial:<input type="text" name="FN3F13" value=""><br>
Last name:<input type="text" name="LN3F13" value=""><br>

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

</div>
<div id="chicagobibliography">
<!--Form for books with editors -->
<div id="sixteen" style="display:none">
<h2>Books with Only Authors</h2>
<h4>Author One</h4>

First, middle name/initial:<input type="text" name="bibchicagobooksauthorFN1" value="">(e.g. James T. or James Tiberius.)<br>
Last name:<input type="text" name="bibchicagobooksauthorLN1" value=""><br>

<h4>Author Two</h4>
First, middle name/initial:<input type="text" name="bibchicagobooksauthorFN2" value=""><br>
Last name:<input type="text" name="bibchicagobooksauthorLN2" value=""><br>

<h4>Author Three</h4>
First, middle name/initial:<input type="text" name="bibchicagobooksauthorFN3" value=""><br>
Last name:<input type="text" name="bibchicagobooksauthorLN3" value=""><br>

<h4>Book Information</h4>
Book Title:<input type="text" name="bibchicagobooksauthorBT" value=""><br>
Publication Location:<input type="text" name="bibchicagobooksauthorPL" value=""><br>
Publisher Name:<input type="text" name="bibchicagobooksauthorPN" value=""><br>
Publishing Date:<input type="text" name="bibchicagobooksauthorPD" value=""><br>
  <input type="submit" name="bibchicagobooksauthor" value="Submit">
</div>
<!--Form for books with editors/translators-->

<div id="seventeen" style="display:none">
<h2>Books with Editors/Translators</h2>
<h4>Author One</h4>

First, middle name/initial:<input type="text" name="bibchicagoauthorwtransFN1" value="">(e.g. James T. or James Tiberius.)<br>
Last name:<input type="text" name="bibchicagoauthorwtransLN1" value=""><br>

<h4>Author Two</h4>
First, middle name/initial:<input type="text" name="bibchicagoauthorwtransFN2" value=""><br>
Last name:<input type="text" name="bibchicagoauthorwtransLN2" value=""><br>

<h4>Author Three</h4>
First, middle name/initial:<input type="text" name="bibchicagoauthorwtransFN3" value=""><br>
Last name:<input type="text" name="bibchicagoauthorwtransLN3" value=""><br>

<h4>Editor</h4>
Editor First, middle name/initial:<input type="text" name="bibchicagoauthorwtransEFN" value=""><br>
Editor Last Name:<input type="text" name="bibchicagoauthorwtransELN" value=""><br>

<h4>Translator</h4>
Editor First, middle name/initial:<input type="text" name="bibchicagoauthorwtransTFN" value=""><br>
Editor Last Name:<input type="text" name="bibchicagoauthorwtransTLN" value=""><br>

<h4>Book Information</h4>
Book Title:<input type="text" name="bibchicagoauthorwtransBT" value=""><br>
Publication Location:<input type="text" name="bibchicagoauthorwtransPL" value=""><br>
Publisher Name:<input type="text" name="bibchicagoauthorwtransPN" value=""><br>
Publishing Date:<input type="text" name="bibchicagoauthorwtransPD" value=""><br>
  <input type="submit" name="bibchicagoauthorwtrans" value="Submit">

</div>

<!--Form for chapters/articles in edited book-->
<div id="eighteen" style="display:none">
<h2>Chapters in an edited book</h2>
<h4>Author One</h4>
First, middle name/initial:<input type="text" name="bibchicagosinglechaptereditedFN1" value="">(e.g. James T. or James Tiberius.)<br>
Last name:<input type="text" name="bibchicagosinglechaptereditedLN1" value=""><br>

<h4>Author Two</h4>
First, middle name/initial:<input type="text" name="bibchicagosinglechaptereditedFN2" value=""><br>
Last name:<input type="text" name="bibchicagosinglechaptereditedLN2" value=""><br>

<h4>Author Three</h4>
First, middle name/initial:<input type="text" name="bibchicagosinglechaptereditedFN3" value=""><br>
Last name:<input type="text" name="bibchicagosinglechaptereditedLN3" value=""><br>

<h4>Editor</h4>
Editor First, middle name/initial:<input type="text" name="bibchicagosinglechaptereditedEFN" value=""><br>
Editor Last Name:<input type="text" name="bibchicagosinglechaptereditedELN" value=""><br>

<h4>Book Information</h4>
Article/Chapter Title:<input type="text" name="bibchicagosinglechaptereditedCT" value=""><br>
Book Title:<input type="text" name="bibchicagosinglechaptereditedBT" value=""><br>
Publication Location:<input type="text" name="bibchicagosinglechaptereditedPL" value=""><br>
Publisher Name:<input type="text" name="bibchicagosinglechaptereditedPN" value=""><br>
Publishing Date:<input type="text" name="bibchicagosinglechaptereditedPD" value=""><br>
Pages:<input type="text" name="bibchicagosinglechaptereditedPage" value=""><br>
  <input type="submit" name="bibchicagosinglechapteredited" value="Submit">

</div>

<!--Form for print journals--> 

<div id="nineteen"  style="display:none">
<h2>Print Journal</h2>
<h4>Author One</h4>
First, middle name/initial:<input type="text" name="bibchicagojournalFN1" value="">(e.g. James T. or James Tiberius.)<br>
Last name:<input type="text" name="bibchicagojournalLN1" value=""><br>

<h4>Author Two</h4>
First, middle name/initial:<input type="text" name="bibchicagojournalFN2" value=""><br>
Last name:<input type="text" name="bibchicagojournalLN2" value=""><br>

<h4>Author Three</h4>
First, middle name/initial:<input type="text" name="bibchicagojournalFN3" value=""><br>
Last name:<input type="text" name="bibchicagojournalLN3" value=""><br>
<h4>Book Information</h4>

Article Title:<input type="text" name="bibchicagojournalAT" value=""><br>
Journal Title:<input type="text" name="bibchicagojournalJT" value=""><br/>
Volume Number:<input type="text" name="bibchicagojournalVN" value=""><br/>
Issue Number:<input type="text" name="bibchicagojournalIN"><br/>
Date Published:<input type="text" name="bibchicagojournaldate" value=""><br/>
Pages:<input type="text" name="bibchicagojournalpage" value=""><br/>
<input type="submit" name="bibchicagojournal" value="Submit"> 

</div>

<!--Form for online journals-->
<div id="twenty"  style="display:none">
<h2>Online Journals</h2>

<h4>Author One</h4>
First, middle name/initial:<input type="text" name="bibchicagoonlinejournalFN1" value="">(e.g. James T. or James Tiberius.)<br>
Last name:<input type="text" name="bibchicagoonlinejournalLN1" value=""><br>

<h4>Author Two</h4>
First, middle name/initial:<input type="text" name="bibchicagoonlinejournalFN2" value=""><br>
Last name:<input type="text" name="bibchicagoonlinejournalLN2" value=""><br>

<h4>Author Three</h4>
First, middle name/initial:<input type="text" name="bibchicagoonlinejournalFN3" value=""><br>
Last name:<input type="text" name="bibchicagoonlinejournalLN3" value=""><br>

<h4>Journal Information</h4>
Article Title:<input type="text" name="bibchicagoonlinejournalAT" value=""><br>
Journal Title:<input type="text" name="bibchicagoonlinejournalJT" value=""><br/>
Volume Number:<input type="text" name="bibchicagoonlinejournalVN" value=""><br/>
Issue Number:<input type="text" name="bibchicagoonlinejournalIN"><br/>
Date Published:<input type="text" name="bibchicagoonlinejournaldate" value=""><br/>
Pages:<input type="text" name="bibchicagoonlinejournalpage" value="">(if applicable)<br/>
Accessed:<input type="text" name="bibchicagoonlinejournalaccessed" value=""><br/>
URL: <input type="text" name="bibchicagoonlinejournalurl" value=""></br>
<input type="submit" name="bibchicagoonlinejournal" value="Submit"> 

</div>

<!--Form for internet resources-->

<div id="twentyone" style="display:none">
<h2>Websites</h2>
</br>
Author:<input type="text" name="bibchicagowebsiteauthor" value=""></br>
Page Title:<input type="text" name="bibchiagowebsitepagetitle" value=""><br/>
Title/Owner of Site:<input type="text" name="bibchicagowebsiteownertitle" value=""><br/>
Last Modified(if applicable):<input type="text" name="bibchicagowebsitelastmodified" value="">(e.g October 3, 2010) OR<br/>
Publish Date:<input type="text" name="bibchicagowebsitepublishdate" value=""><br/>
Accessed:<input type="text" name="bibchicagowebaccessdate" value=""><br/>
URL: <input type="text" name="bibchicagoweburl" value=""><br/>
  <input type="submit" name="bibchicagowebsitesubmit" value="Submit"> 
</div>
</div>

<div id="chicagofootnotes">
<!--Form for books with only authors -->
<div id="twentytwo" style="display:none">
<h2>Books with Only Authors</h2>
<h4>Author One</h4>
First, middle name/initial:<input type="text" name="footchicagobooksauthorFN1" value="">(e.g. James T. or James Tiberius.)<br>
Last name:<input type="text" name="footchicagobooksauthorLN1" value=""><br>

<h4>Author Two</h4>
First, middle name/initial:<input type="text" name="footchicagobooksauthorFN2" value=""><br>
Last name:<input type="text" name="footchicagobooksauthorLN2" value=""><br>

<h4>Author Three</h4>
First, middle name/initial:<input type="text" name="footchicagobooksauthorFN3" value=""><br>
Last name:<input type="text" name="footchicagobooksauthorLN3" value=""><br>

<h4>Book Information</h4>
Book Title:<input type="text" name="footchicagobooksauthorBT" value=""><br>
Publication Location:<input type="text" name="footchicagobooksauthorPL" value=""><br>
Publisher Name:<input type="text" name="footchicagobooksauthorPN" value=""><br>
Publishing Date:<input type="text" name="footchicagobooksauthorPD" value=""><br>
Page:<input type="text" name="footchicagobooksauthorPage" value=""><br>
  <input type="submit" name="footchicagobooksauthor" value="Submit">
</div>
<!--Form for books with editors/translators-->

<div id="twentythree" style="display:none">
<h2>Books with editor/translator</h2>
<h4>Author One</h4>
First, middle name/initial:<input type="text" name="footchicagoauthorwtransFN1" value="">(e.g. James T. or James Tiberius.)<br>
Last name:<input type="text" name="footchicagoauthorwtransLN1" value=""><br>

<h4>Author Two</h4>
First, middle name/initial:<input type="text" name="footchicagoauthorwtransFN2" value=""><br>
Last name:<input type="text" name="footchicagoauthorwtransLN2" value=""><br>

<h4>Author Three</h4>
First, middle name/initial:<input type="text" name="footchicagoauthorwtransFN3" value=""><br>
Last name:<input type="text" name="footchicagoauthorwtransLN3" value=""><br>

<h4>Editor</h4>
Editor First, middle name/initial:<input type="text" name="footchicagoauthorwtransEFN" value=""><br>
Editor Last Name:<input type="text" name="footchicagoauthorwtransELN" value=""><br>

<h4>Translator</h4>
Editor First, middle name/initial:<input type="text" name="footchicagoauthorwtransTFN" value=""><br>
Editor Last Name:<input type="text" name="footchicagoauthorwtransTLN" value=""><br>

<h4>Book Information</h4>
Book Title:<input type="text" name="footchicagoauthorwtransBT" value=""><br>
Publication Location:<input type="text" name="footchicagoauthorwtransPL" value=""><br>
Publisher Name:<input type="text" name="footchicagoauthorwtransPN" value=""><br>
Publishing Date:<input type="text" name="footchicagoauthorwtransPD" value=""><br>
Page:<input type="text" name="footchicagoauthorwtransPage" value=""><br>
  <input type="submit" name="footchicagoauthorwtrans" value="Submit">
</div>

<!--Form for chapters/articles in edited book-->
<div id="twentyfour" style="display:none">
<h2>Chapters in an edited book</h2>
<h4>Author One</h4>
First, middle name/initial:<input type="text" name="footchicagosinglechaptereditedFN1" value="">(e.g. James T. or James Tiberius.)<br>
Last name:<input type="text" name="footchicagosinglechaptereditedLN1" value=""><br>


<h4>Author Two</h4>
First, middle name/initial:<input type="text" name="footchicagosinglechaptereditedFN2" value=""><br>
Last name:<input type="text" name="footchicagosinglechaptereditedLN2" value=""><br>

<h4>Author Three</h4>
First, middle name/initial:<input type="text" name="footchicagosinglechaptereditedFN3" value=""><br>
Last name:<input type="text" name="footchicagosinglechaptereditedLN3" value=""><br>

<h4>Editor</h4>
Editor First, middle name/initial:<input type="text" name="footchicagosinglechaptereditedEFN" value=""><br>
Editor Last Name:<input type="text" name="footchicagosinglechaptereditedELN" value=""><br>

<h4>Book Information</h4>

Article/Chapter Title:<input type="text" name="footchicagosinglechaptereditedCT" value=""><br>
Book Title:<input type="text" name="footchicagosinglechaptereditedBT" value=""><br>
Publication Location:<input type="text" name="footchicagosinglechaptereditedPL" value=""><br>
Publisher Name:<input type="text" name="footchicagosinglechaptereditedPN" value=""><br>
Publishing Date:<input type="text" name="footchicagosinglechaptereditedPD" value=""><br>
Pages:<input type="text" name="footchicagosinglechaptereditedPage" value=""><br>
  <input type="submit" name="footchicagosinglechapteredited" value="Submit">
</div>

<!--Form for print journals--> 

<div id="twentyfive"  style="display:none">
<h2>Print Journal</h2>
<h4>Author One</h4>
First, middle name/initial:<input type="text" name="footchicagojournalFN1" value="">(e.g. James T. or James Tiberius.)<br>
Last name:<input type="text" name="footchicagojournalLN1" value=""><br>

<h4>Author Two</h4>
First, middle name/initial:<input type="text" name="footchicagojournalFN2" value=""><br>
Last name:<input type="text" name="footchicagojournalLN2" value=""><br>

<h4>Author Three</h4>
First, middle name/initial:<input type="text" name="footchicagojournalFN3" value=""><br>
Last name:<input type="text" name="footchicagojournalLN3" value=""><br>
<h4>Journal Information</h4>

Article Title:<input type="text" name="footchicagojournalAT" value=""><br>
Journal Title:<input type="text" name="footchicagojournalJT" value=""><br/>
Volume Number:<input type="text" name="footchicagojournalVN" value=""><br/>
Issue Number:<input type="text" name="footchicagojournalIN"><br/>
Date Published:<input type="text" name="footchicagojournaldate" value=""><br/>
Pages:<input type="text" name="footchicagojournalpage" value=""><br/>
<input type="submit" name="footchicagojournal" value="Submit"> 

</div>

<!--Form for online journals-->
<div id="twentysix"  style="display:none">
<h2>Online Journal</h2>

<h4>Author One</h4>
First, middle name/initial:<input type="text" name="footchicagoonlinejournalFN1" value="">(e.g. James T. or James Tiberius.)<br>
Last name:<input type="text" name="footchicagoonlinejournalLN1" value=""><br>

<h4>Author Two</h4>
First, middle name/initial:<input type="text" name="footchicagoonlinejournalFN2" value=""><br>
Last name:<input type="text" name="footchicagoonlinejournalLN2" value=""><br>

<h4>Author Three</h4>
First, middle name/initial:<input type="text" name="footchicagoonlinejournalFN3" value=""><br>
Last name:<input type="text" name="footchicagoonlinejournalLN3" value=""><br>

<h4>Journal Information</h4>
Article Title:<input type="text" name="footchicagoonlinejournalAT" value=""><br>
Journal Title:<input type="text" name="footchicagoonlinejournalJT" value=""><br/>
Volume Number:<input type="text" name="footchicagoonlinejournalVN" value=""><br/>
Issue Number:<input type="text" name="footchicagoonlinejournalIN"><br/>
Date Published:<input type="text" name="footchicagoonlinejournaldate" value=""><br/>
Pages:<input type="text" name="footchicagoonlinejournalpage" value="">(if applicable)<br/>
Accessed:<input type="text" name="footchicagoonlinejournalaccessed" value=""><br/>
URL: <input type="text" name="footchicagoonlinejournalurl" value=""></br>
<input type="submit" name="footchicagoonlinejournal" value="Submit"> 

</div>

<!--Form for internet resources-->

<div id="twentyseven" style="display:none">
<h2>Websites</h2>

Author:<input type="text" name="footchicagowebsiteauthor" value=""></br>
Page Title:<input type="text" name="footchiagowebsitepagetitle" value=""><br/>
Title/Owner of Site:<input type="text" name="footchicagowebsiteownertitle" value=""><br/>
Last Modified(if applicable):<input type="text" name="footchicagowebsitelastmodified" value="">(e.g. October 3, 2010) OR<br/> 
Publish Date:<input type="text" name="footchicagowebsitepublishdate" value=""><br/>
Accessed:<input type="text" name="footchicagowebaccessdate" value=""><br/>
URL: <input type="text" name="footchicagoweburl" value=""><br/>
  <input type="submit" name="footchicagowebsitesubmit" value="Submit"> 
</div>
</div>
</form>



<script>

if(document.getElementById('sbl').checked=true) {  
	document.getElementById("sbl").addEventListener("click", function(){
	document.getElementById("style1").style.display="block"
	document.getElementById("style2").style.display="none"
	document.getElementById("chicago Bib Form Selector").style.display="none"
	document.getElementById("chicago Foot Form Selector").style.display="none"
	$("#chicagobibliography > *").hide();
	$("#chicagofootnotes > *").hide();
	$("#sblbibliography > *").hide();
	$("#sblfootnotes > *").hide()		
});}

if(document.getElementById('chicago').checked=true) {  
	document.getElementById("chicago").addEventListener("click", function(){
	document.getElementById("style2").style.display="block"
	document.getElementById("style1").style.display="none"
	document.getElementById("sbl Bib Form Selector").style.display="none"
	document.getElementById("sbl Foot Form Selector").style.display="none"
	$("#chicagobibliography > *").hide();
	$("#chicagofootnotes > *").hide();
	$("#sblbibliography > *").hide();
	$("#sblfootnotes > *").hide()	
});}

if(document.getElementById('sblfoot').checked=true) {  
	document.getElementById("sblfoot").addEventListener("click", function(){
	document.getElementById("sbl Bib Form Selector").style.display="none"
	document.getElementById("sbl Foot Form Selector").style.display="block"
	document.getElementById("chicago Bib Form Selector").style.display="none"
	document.getElementById("chicago Foot Form Selector").style.display="none"
	$("#chicagobibliography > *").hide();
	$("#chicagofootnotes > *").hide();
	$("#sblbibliography > *").hide();	
});}

if(document.getElementById('sblbib').checked=true) {  
	document.getElementById("sblbib").addEventListener("click", function(){
	document.getElementById("sbl Bib Form Selector").style.display="block"
	document.getElementById("sbl Foot Form Selector").style.display="none"
	document.getElementById("chicago Bib Form Selector").style.display="none"
	document.getElementById("chicago Foot Form Selector").style.display="none"
	$("#chicagobibliography > *").hide();
	$("#sblfootnotes > *").hide();
	$("#chicagofootnotes > *").hide();	
});}

if(document.getElementById('chicagofoot').checked=true) { 
	document.getElementById("chicagofoot").addEventListener("click", function(){
	document.getElementById("sbl Bib Form Selector").style.display="none"
	document.getElementById("sbl Foot Form Selector").style.display="none"
	document.getElementById("chicago Bib Form Selector").style.display="none"
	document.getElementById("chicago Foot Form Selector").style.display="block"
	$("#chicagobibliography > *").hide();
	$("#sblfootnotes > *").hide();
	$("#sblbibliography > *").hide();
});}

if(document.getElementById('chicagobib').checked=true) { 
	document.getElementById("chicagobib").addEventListener("click", function(){
	document.getElementById("sbl Bib Form Selector").style.display="none"
	document.getElementById("sbl Foot Form Selector").style.display="none"
	document.getElementById("chicago Bib Form Selector").style.display="block"
	document.getElementById("chicago Foot Form Selector").style.display="none"
	$("#chicagofootnotes > *").hide();
	$("#sblfootnotes > *").hide();
	$("#sblbibliography > *").hide();
	
	

});}
    $('#chicago').attr('checked', false);  ///prevents automatic selection of Chicago and bibliographies.
    $('#chicagobib').attr('checked', false);
    $('#sblbib').attr('checked', false);

</script>
For resource types outside of these categories, please consult the <a href="http://discovere.emory.edu/discovere:default_scope:01EMORY_ALMA21267258750002486">SBL Handbook</a>
