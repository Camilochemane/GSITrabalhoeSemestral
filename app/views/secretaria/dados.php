<?php
	mysql_connect("localhost", "root", "");

	mysql_select_db("clinica1");

	$id = mysql_real_escape_string($_POST['especialidade']);

	$medicos = mysql_query(
		" 	SELECT * FROM users AS u 
			INNER JOIN especialidade as e
			ON u.id = e.EspecialidadeID
			WHERE e.EspecialidadeID = $id
			AND u.tipo_id = 2;
		";

	$total = mysql_num_rows($medicos);

	echo "$total";


// SELECT t1.name, t2.salary
//   FROM employee AS t1 INNER JOIN info AS t2 ON t1.name = t2.name;

// SELECT t1.name, t2.salary
//   FROM employee t1 INNER JOIN info t2 ON t1.name = t2.name;

?>