<?php

function disconect() {

    session_start();
    session_destroy();
    header('Location:' .BASE_URL);
}

?>