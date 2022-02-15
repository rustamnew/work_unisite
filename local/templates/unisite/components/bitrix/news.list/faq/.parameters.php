<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(
	"COLUMNS" => Array(
		"NAME" => GetMessage("COLUMNS"),
		"TYPE" => "LIST",
		"DEFAULT" => "one",
		"VALUES" => array(
			"one" => GetMessage("COLUMNS_ONE"),
			"two" => GetMessage("COLUMNS_TWO"),
		)
	),
	"IMAGE" => Array(
		"NAME" => GetMessage("IMAGE"),
		"TYPE" => "FILE",
		"DEFAULT" => "",
	),
	"VIDEO_URL" => Array(
		"NAME" => GetMessage("VIDEO_URL"),
		"TYPE" => "STRING",
		"DEFAULT" => "",
	),
	"NAME" => Array(
		"NAME" => GetMessage("NAME"),
		"TYPE" => "STRING",
		"DEFAULT" => "",
	),
	"TITLE" => Array(
		"NAME" => GetMessage("TITLE"),
		"TYPE" => "STRING",
		"DEFAULT" => "",
	),
	"SUBTITLE" => Array(
		"NAME" => GetMessage("SUBTITLE"),
		"TYPE" => "STRING",
		"DEFAULT" => "",
	),
);
?>
