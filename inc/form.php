<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $expected = array('full_name', 'email');
    $validation = array(
        'full_name' => "Hãy điền tên của bạn",
        'email' => 'Hãy điền email của bạn'
    );

    $errors = array();
    $output = array();

    foreach($expected as $key) 
    {
        if (array_key_exists($key, $_POST)) {
            if(empty($_POST[$key])) {
                $errors[$key] = $validation[$key];
            } else {
                $output[$key] = $_POST[$key];
            }
        } else {
            $errors[$key] = $validation[$key];
        }
    }

    if(!empty($errors)) {
        $array = array('error' => true, 'fields' => $errors);
    } else {
        // PROCESS FORM - EMAIL, DB,...
        
        $message = '<h3>Bạn đã đăng ký thành công</h3>';
        $array = array('error' => false, 'message' => $message);
    }

    echo json_encode($array);

}