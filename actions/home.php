<?php

/*
	bellow you can see an example for breadcrumb.
	only add it just if you want update breadcrumb.
	we don't recommend to usi
*/
// $breadcrumb = [
// 	["name" => "Add", "link" => "{c2r-path-bo}/{c2r-lg}/{c2r-module-folder}/add/"]
// ];

$query = sprintf(
	"SELECT TABLE_NAME, TABLE_ROWS, ENGINE, CREATE_TIME, UPDATE_TIME, TABLE_COLLATION FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '%s' AND TABLE_TYPE='BASE TABLE'",
	$cfg->db->database
);

$source = $db->query($query);

while ($data = $source->fetch_object()) {bo3::dump($data->TABLE_NAME);
	if (!isset($list)) {
		$list = "";
		$line_tpl = bo3::mdl_load("templates-e/home/line.tpl");
		$index = 1;
	}

	$list .= bo3::c2r([
		"index" => $index,
		"table-name" => $data->TABLE_NAME,
		"table-rows" => $data->TABLE_ROWS,
		"table-engine" => $data->ENGINE,
		"table-date" => $data->CREATE_TIME,
		"table-date-update" => $data->UPDATE_TIME,
		"table-collation" => $data->TABLE_COLLATION,
	], $line_tpl);

	$index++;
}

$mdl = bo3::c2r([
	"list" => isset($list) ? $list : ""
],bo3::mdl_load("templates/home.tpl"));

/*
	You need to put c2r for import works like: {c2r-plg-example}
	bo3::importPlg("example");
*/

include "pages/module-core.php";
