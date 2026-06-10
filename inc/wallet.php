<?php

function lefoin_get_balance($user_id){

    $balance = lefoin_get_balance(
    $current_user->ID
    );

    if($balance === ''){
        $balance = 0;
    }

    return (int)$balance;

}

function lefoin_add_coin($user_id,$amount){

    $balance = lefoin_get_balance($user_id);

    update_user_meta(
        $user_id,
        'foin_coin',
        $balance + $amount
    );

}

function lefoin_subtract_coin($user_id,$amount){

    $balance = lefoin_get_balance($user_id);

    update_user_meta(
        $user_id,
        'foin_coin',
        max(0,$balance-$amount)
    );

}