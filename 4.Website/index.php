<?php

//Read the json file here
$file_name = './data/contact.json';
$json_string = file_get_contents($file_name);
$contact_object = json_decode($json_string);

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) {

    $new_contact = new stdClass();
    $new_contact->name = $_POST["name"];
    $new_contact->email = $_POST["email"];
    $new_contact->message = $_POST["message"];

    array_push($contact_object->contacts, $new_contact);
    file_put_contents($file_name, json_encode($contact_object));
}
?>
<?php require_once('./layout/header.php'); ?>
<?php

//var_dump($contact_object);

foreach ($contact_object->contacts as $contact) :
    echo $contact->email . '<br/>';
endforeach;

?>

<?php require_once('./layout/footer.php'); ?>