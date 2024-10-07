<?php
function authentication_require() {
    return true;
}
function get_title() {

    return 'محیط کاربری';
}

function get_content() {
    echo "این محیط فقط به کاربران نشان داده میشود";
}

