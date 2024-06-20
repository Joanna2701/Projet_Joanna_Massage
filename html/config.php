<?php
if ($_SERVER['HTTP_HOST'] == 'localhost') {
    define('BASE_URL', 'http://localhost/Projet_Joanna_Massage');
} else {
    define('BASE_URL', 'https://joannamassage.fr');
}
?>
