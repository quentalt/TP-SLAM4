<?php


function deplie_tableau($tableau)
{

foreach ($tableau as $key => $value) {

	if (is_array($value))
	{
		echo "Dans le sous Tableau Now<BR>" ;
		deplie_tableau($value);
    }
	else
	{
	
    echo "La clef est: $key : ";
    echo "et la valeur est $value : <BR>";
	}
}
}

deplie_tableau($_POST) ;

?>
