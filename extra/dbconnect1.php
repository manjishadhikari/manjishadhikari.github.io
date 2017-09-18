<?php
echo $varName;
echo $formMovie;
echo "Database ";
   $db = mysql_connect("sql308.epizy.com","epiz_20692833","fFQ74OKjuc");
   if(!$db) die("Error connecting to MySQL database.");
   mysql_select_db("epiz_20692833_database" ,$db);
   $sql = "UPDATE movieformdata". "SET moviename="Up"",. "yourname="Man"",. "Gender="male"";
   
mysql_query($sql);
echo $sql;
echo "\n";
echo $varMovie."\n";

echo "Data saved to sql";
function PrepSQL($value)
{
    // Stripslashes
    if(get_magic_quotes_gpc()) 
    {
        $value = stripslashes($value);
    }

    // Quote
    $value = "'" . mysql_real_escape_string($value) . "'";

    return($value);
} 
?>