<?php

function lefoin_get_transactions($user_id){

    $transactions = get_user_meta(
        $user_id,
        'foin_transactions',
        true
    );

    if(empty($transactions)){
        $transactions = array();
    }

    return $transactions;

}

function lefoin_add_transaction(
    $user_id,
    $type,
    $amount,
    $note=''
){

    $transactions = lefoin_get_transactions($user_id);

    array_unshift($transactions,array(

        'time'=>current_time('mysql'),

        'type'=>$type,

        'amount'=>$amount,

        'note'=>$note

    ));

    update_user_meta(

        $user_id,

        'foin_transactions',

        $transactions

    );

}