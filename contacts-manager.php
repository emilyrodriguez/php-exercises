<?php

function getContacts($filename) 
{
	$filename = "contacts.txt";
	$handle = fopen($filename, 'r');
	$contents = trim(fread($handle, filesize($filename)));
	fclose($handle);
	$contentsArray = explode("\n", $contents);
	sort($contentsArray);
	print_r($contentsArray);
	return $contentsArray;
}

function formatInfo($contentsArray) {
	foreach ($contentsArray as $contentString) {
		$contact = [];
		$contentArray = explode("|", $contentString);
		$contact["Name"] = $contentArray[0];
		if ((strlen($contentArray[1])) > 7) {
			$contact["Phone Number"] = 
			substr($contentArray[1], 0, 3) . "-". substr($contentArray[1], 3, 3) . "-" . substr($contentArray[1], 6);
		} else {
			$contact["Phone Number"] =
				substr($contentArray[1], 0, 3) . "-" .
				substr($contentArray[1], 3);
		}

		$contacts[] = $contact;
	}
	return $contacts;	
}

// function formatContactDisplay($array) {
// 	echo "\n";
// 	echo str_pad('Name', 12 " ", STR_PAD_RIGHT);
// 	echo " | ";
// 	echo str_pad('Phone Number', 12 " ", STR_PAD_RIGHT);
// 	echo " | ", PHP_EOL;
// 	echo "--------------------------";
// 	foreach ($array as $contact) {
// 		echo str_pad('Name', 12 " ", STR_PAD_RIGHT);
// 		echo " | ";
// 		echo str_pad('Phone Number', 12 " ", STR_PAD_RIGHT);
// 		echo " | ", PHP_EOL;
// 	}
// 	echo "\n";
// }

function searchContacts($contacts, $name) {
	$filtered = [];
	foreach ($contacts as $contact) {
		if (strpos($contact, $name) !== false) {
			$filtered[] = $contact;
		}
	}
	return $filtered;
}
function delete(&$contacts, $name) {
	foreach ($contacts as $index => $contact) {
		if (strpos($contact, $name) !== false) {
			unset($contacts[$index]);
		}
	}
}
function findInfo() {
	fwrite(STDOUT, "Enter name to search\n");
	$contactInfo = trim(fgets(STDIN));
	return $contactInfo;
}

function addContacts($filename) {
	$contact = [];
	do {
		echo "Enter contact name: ";
		$contact["Name"] = trim(fgets(STDIN));
		fwrite(STDOUT, "Enter the contact's 7 or 10 digit phone number with no spaces\n");
		$contact["Phone Number"] = trim(fgets(STDIN));
		$handle = fopen($filename, "a");
		if (count(searchContacts(getContacts($filename), $contact["Name"])) > 0) {
		echo $contact["Name"] . " already exists as a contact. Overwrite contact? Yes/No\n";
		$overwrite = trim(fget(STDIN));
		//
		}
		fwrite($handle, $contact["Name"] . "|" . $contact["Phone Number"] . PHP_EOL);
		fclose($handle);
		fwrite(STDOUT, "Do you have more contacts to add? Y/N.\n");
		$addAdditional = trim(fgets(STDIN));
	} while($addAdditional === "Y");
	fwrite(STDOUT, "Contact created!\n");

}


function deleteContacts($contacts, $filename) {
	$name = findInfo();
	fwrite(STDOUT, "Delete contact? Y/N\n");
	$deleteContact = trim(fgets(STDIN));
	
	if ($deleteContact == "Y" || "y") {
		delete($contacts, $name);
	}

	$contactsString = implode("\n", $contacts);
	$handle = fopen($filename, 'w');
	fwrite($handle, $contactsString);
	fclose($handle);
	fwrite(STDOUT, "Record deleted.\n");
}

function menu($contacts) {
	$message = fwrite(STDOUT, "Enter an option 1-5\n", "1. View Contacts\n", "2. Add a new contact\n", "3. Search a contact by name\n", "4. Delete an existing contact\n", "5. Exit\n");
	$option = "";
	$option = trim(fgets(STDIN));
	return $option;
}



function masterIndex($filename) {
	do {
		fwrite(STDOUT, "Enter an option 1-5\n1. View Contacts\n2. Add a new contact\n3. Search a contact by name\n4. Delete an existing contact\n5. Exit\n");
		$option = fgets(STDIN);
		echo $option;
		switch ($option) {
			case 1:
				getContacts($filename);
				break;
			case 2:
				addContacts($filename);
				break;
			case 3:
				$result = searchContacts(getContacts($filename), findInfo());
				print_r($result);
				break;
			case 4:
				deleteContacts(getContacts($filename),$filename);
				break;
			case 5:
				exit(0);
				break;
			default:
				fwrite(STDERR, "ERROR: Please enter option 1, 2, 3, 4, or 5.\n");
				break;
		}
	}while ($option != '5');
}

masterIndex('contacts.txt');