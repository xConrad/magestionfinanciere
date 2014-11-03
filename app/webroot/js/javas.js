function OnChangeYear($i)
{
	document.getElementById('Ann').innerHTML = $i;
}

function OnChangeMonth($i)
{
	var month = new Array("Janurary",
							"February",
							"March",
							"April",
							"May",
							"June",
							"July",
							"August",
							"September",
							"October",
							"November",
							"December"); 

	var y = month[$i];
							
	document.getElementById('Mot').innerHTML = y;
}

function getAnnee()
{
	var myTextField = document.getElementById('Ann');

	return myTextField;
}