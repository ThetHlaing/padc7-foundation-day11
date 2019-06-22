<?php

class ContactList
{
    private $file_path;
    public $contact_list;


    function __construct($file_path)
    {
        $this->file_path = $file_path;
        $this->getContacts();
    }

    function getContacts()
    {
        $json_string = file_get_contents($this->file_path);
        $contact_object = json_decode($json_string);

        $this->contact_list = $contact_object;
    }

    function storeContact($name, $email, $message)
    {
        $new_contact = new stdClass();
        $new_contact->name = $name;
        $new_contact->email = $email;
        $new_contact->message = $message;

        $contact_obj =  $this->getContacts();        
        array_push($contact_obj->contacts, $new_contact);
        file_put_contents($this->file_path, json_encode($contact_obj));
    }
}
