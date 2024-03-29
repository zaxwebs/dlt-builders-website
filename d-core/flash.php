<?php

function prefixName(string $name, string $prefix)
{
    return $prefix . '-' . $name;
}

function setFlash(string $name, $value)
{
    $prefixed = prefixName($name, 'flash');
    $_SESSION[$prefixed] = $value;
}

function unsetFlash(string $name)
{
    $prefixed = prefixName($name, 'flash');
    unset($_SESSION[$prefixed]);
}

function hasFlash(string $name)
{
    $prefixed = prefixName($name, 'flash');
    if (isset($_SESSION[$prefixed])) {
        return true;
    }
}

function getFlash(string $name, bool $reset = true)
{
    $prefixed = prefixName($name, 'flash');
    if (hasFlash($name)) {
        $value = $_SESSION[$prefixed];
        if ($reset) unset($_SESSION[$prefixed]);
        return $value;
    }
}

//echoFlash() is usually used to fill in forms, default value can be provided for if no flash is set
function echoFlash(string $name, string $default = null, bool $reset = true)
{
    if (hasFlash($name)) {
        echo getFlash($name, $reset);
    } else {
        echo $default;
    }
}

function setAlert(string $message, string $type = 'info', string $name = 'primary')
{
    $prefixed = prefixName($name, 'alert');
    setFlash($prefixed, ['message' => $message, 'type' => $type]);
}

function echoAlert(string $name = 'primary', string $class = '')
{
    $prefixed = prefixName($name, 'alert');
    if (hasFlash($prefixed)) {
        $alert = getFlash($prefixed);
        $class .= ' alert alert-' . $alert['type'];
        echo '<div class="' . $class . '" role="alert"><div class="container">' . $alert['message'] . '</div></div>';
    }
}
