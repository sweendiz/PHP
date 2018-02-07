<?php
    function phone_validate($data, $desc) {
        $regex = "/^\([2-9][0-9]{2}\)[2-9][0-9]{2}-[0-9]{4}/i";
        if(preg_match($regex, $data) != 1) {
            return "The '$desc' field isn't valid!";
        }
        return true;
    }
?>