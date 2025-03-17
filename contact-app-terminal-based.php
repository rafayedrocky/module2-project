<?php

$contacts = [];

function addContact(array &$contacts, string $name, string $phone, string $email) : void {
    $contacts [] = ["name" => $name, "phone" => $phone, "email" => $email];
}

function displayContacts(array $contacts) : void {
    if(empty($contacts)) {
        echo "No available contacts \n";
    }else {
        foreach($contacts as $contact) {
            echo "Name: {$contact["name"]}, Phone: {$contact["phone"]}, Email: {$contact["email"]} \n";
        }
    }
}

while(true) {
    echo "Terminal based contact management app \n";
    echo "1: Add contact\n2: View contacts\n3: Exit\n";
    $choice = (int)readline("Choose an option: ");

    if($choice === 1) {
        $name = readline("Enter your name: ");
        $phone = readline("Enter your phone: ");
        $email = readline("Enter your email: ");

        addContact($contacts, $name, $phone, $email);
        echo "Contact information added \n";
    }elseif($choice === 2) {
        displayContacts($contacts);
    }elseif($choice === 3) {
        echo "Exiting.....";
        break;
    }else{
        echo "Invalid choice, please try again";
    }
}