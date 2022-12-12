<?php
function show($stuff)
{
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
}

function set_value($key, $default = "")
{
    if (!empty($_POST[$key])) {
        return $_POST[$key];
    } else
    if (!empty($default)) {
        return $default;
    }


    return "";
};

function redirect($link)
{
    header("Location: " . ROOT . "/" . $link);
    die;
}

function message($message = '', $erase = false)
{
    if (!empty($message)) {
        $_SESSION['message'] = $message;
    } else {
        if (!empty($_SESSION['message'])) {
            $message = $_SESSION['message'];
            if ($erase) {
                unset($_SESSION['message']);
            }

            return $message;
        }
    }
    return false;
}
function esc($str)
{
    return nl2br(htmlspecialchars($str));
}
