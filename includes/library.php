
<?php


function inline_textbox($name,$width="") {

global $extra_function;

if ($extra_function != "") { $onclick="onkeyup=\"$extra_function\""; } else { $onclick = ""; }

$myvalue = $GLOBALS["row_".$name];
if ($myvalue == "") { $myvalue = $GLOBALS["form_$name"]; }
$myvalue = str_replace("\"","&quot;",$myvalue);

if ($desc == "") { $colspan = 2; } else { $colspan = 1; }

if ($width != "") {
    $mywidth = "width: $width;";
}


return "<input type=\"text\" name=\"$name\" id=\"$name\" value=\"$myvalue\" $onclick class=\"medium\" style=\"color: #333333; $mywidth\">";


}

?>