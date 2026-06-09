<?php

function lefoin_current_user(){

    if(!is_user_logged_in()){
        return false;
    }

    return wp_get_current_user();

}