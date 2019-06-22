<?php
require_once('./contactList.php');

$file_name = './data/contact.json';
$contactObj = new ContactList($file_name);

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) {
    $contactObj->storeContact(
        $_POST["name"],
        $_POST["email"],
        $_POST["message"]
    );
}
?>
<?php require_once('./layout/header.php'); ?>
<?php

foreach ($contactObj->contact_list as $contact) :
    echo $contact->email . '<br/>';
endforeach;

?>

<?php require_once('./layout/footer.php'); ?>