<?php

function manageContacts($filename) 
{
	$filename = "contacts.txt";
	$handle = fopen($filename, 'a');
	$contacts = [];
	$contents = trim(file_get_contents($filename));
	$contentsArray = explode("\n", $contents);
	fwrite($handle, $contacts) ;
	fclose($handle);

	foreach ($contentsArray as $content) {
		$contact = [];
		$contentArray = explode("|", $content);
		$contact["Name"] = $contentArray[0];
		$contact["Phone Number"] = 
				substr($contentArray[1], 0, 3) . "-". substr($contentArray[1], 3, 3) . "-" . substr($contentArray[1], 6);
		$contacts[] = $contact;
	}
	return $contacts;
}

function searchContacts($contacts, $name) 
{
	$filename = "contacts.txt";
	$handle = fopen($filename, 'r');
	$contacts = [];
	$contents = trim(file_get_contents($filename));
	$contentsArray = explode("\n", $contents);
	fwrite($handle, $contacts) ;
	fclose($handle);
    $filtered = [];
    foreach ($contacts as $contact) {
        if (strpos($contact['Name'], $name) !== false) {
            $filtered[] = $contact;
        }
    }
    return $filtered;
}

function addDeleteContacts() {
    if (in_array($name)) {
	echo $name . " exists as a contact. Overwrite contact? Yes/No\n";
	$overwrite = trim(fget(STDIN));
	}

}

do {
	echo "Enter an option 1-5", PHP_EOL;
	echo "1. View Contacts", PHP_EOL;
	echo "2. Add a new contact", PHP_EOL;
	echo "3. Search a contact by name", PHP_EOL;
	echo "4. Delete an existing contact", PHP_EOL;
	echo "5. Exit", PHP_EOL;
	$option = fgets(STDIN);
	switch ($option) {
		case 1:
			sort($contacts);
			print_r(manageContacts('contacts.txt'));
			break;
		case 2:
			echo "Enter a name: ";
			$name = trim(fgets(STDIN));
			echo "Enter a phone number: ";
			$phone = trim(fgets(STDIN));
			var_dump(addDeleteContacts($contacts));
			break;
		case 3:
			echo "Enter contact name: ";
            $nameSearch = trim(fgets(STDIN));
            var_dump(searchByName($nameSearch));
			break;
		case 4:
			echo "Enter name of contact to delete", PHP_EOL;
			break;
		case 5:
			exit(0);
			break;
		
		default:
			fwrite(STDERR, "ERROR: Please enter option 1, 2, 3, 4, or 5.\n");
			break;
	}
}while ($option != '5');