<?php

function add_contact($your_name, $company_name = null, $email, $telephone, $subject, $message) {
    include("connect.php");

    $sql = "INSERT INTO Contact_Form(your_name, company_name, email, telephone, subject, message) VALUE(?, ?, ?, ?, ?, ?)";

    try {
        $results = $db->prepare($sql);
        $results->bindValue(1, $your_name, PDO::PARAM_STR);
        $results->bindValue(2, $company_name, PDO::PARAM_STR);
        $results->bindValue(3, $email, PDO::PARAM_STR);
        $results->bindValue(4, $telephone, PDO::PARAM_STR);
        $results->bindValue(5, $subject, PDO::PARAM_STR);
        $results->bindValue(6, $message, PDO::PARAM_STR);
        $results->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br>";
        return false;
    }
    return true;
}

?>