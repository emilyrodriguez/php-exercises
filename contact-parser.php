<?php

function parseContacts($filename) {
	$contacts = [];
	$contents = trim(file_get_contents($filename));
	$contentsArray = explode("\n", $contents);
	foreach ($contentsArray as $content) {
		$contact = [];
		$contentArray = explode("|", $content);
		$contact["name"] = $contentArray[0];
		$contact["number"] = 
				substr($contentArray[1], 0, 3) . "-". substr($contentArray[1], 3, 3) . "-" . substr($contentArray[1], 6);
		$contacts[] = $contact;
	}
	return $contacts;
}
var_dump(parseContacts('contacts.txt'));