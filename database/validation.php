<?php
$valid = false;

$val_messages = array(
    'fullName' => '',
    'email' => '',
    'phone' => '',
    'service' => '',
    'message' => ''
);

function validate() {
    global $val_messages, $valid;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $valid = true;

        if (empty($_POST['fullName'])) {
            $val_messages['fullName'] = "Name is required.";
            $valid = false;
        } else if (!preg_match("/^[A-Za-z][A-Za-z\s'-]*$/", $_POST['fullName'])){
            $val_messages['fullName'] = "Name format is invalid.";
            $valid = false;
        }

        if (empty($_POST['email'])) {
            $val_messages['email'] = "Email is required.";
            $valid = false;
        } else if (!preg_match('#^(.+)@([^\.].*)\.([a-z]{2,})$#', $_POST['email'])) {
            $val_messages['email'] = "Email format is invalid.";
            $valid = false;
        }

        if (!empty($_POST['phone'])) {
            if (!preg_match('#^[0-9+\-\s().]{6,25}$#', $_POST['phone'])) {
                $val_messages['phone'] = "Phone format is invalid.";
                $valid = false;
            }
        }

        if (empty($_POST['service'])) {
            $val_messages['service'] = "Please select a service.";
            $valid = false;
        }

        if (empty($_POST['message'])) {
            $val_messages['message'] = "Message is required.";
            $valid = false;
        }
    }
}

// Display validation message for a field
function the_validation_message($field) {
    global $val_messages;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($val_messages[$field])) {
            echo "<p class='failure-message'>" . $val_messages[$field] . "</p>";
        }
    }
}
?>
