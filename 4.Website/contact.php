<?php require_once('./layout/header.php'); ?>

<form method="POST" action="/">
    <input type="text" name="name"/>
    <input type="email" name="email"/>
    <textarea name="message">

    </textarea>
    <button type="submit">Send Message</button>
</form>

<?php require_once('./layout/footer.php'); ?>