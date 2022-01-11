<?php
include "config.php";

function addRewardPoint($amount, $user_id, $conn)
{
    $res = new stdClass;

    $points = '0.02';
    $expiry = '2022-01-11 09:23:25'; //date("Y-m-d H:i:s");
    $trans_id = '1';

    try {
        $a = ORM::for_table('reward')
            ->set('points', $points)
            ->set('expiry', $expiry)
            ->set('transaction_id', $trans_id)
            ->save();
        $res->status = true;
        $res->message = 'success';
    } catch (\Throwable $th) {
        $res->status = true;
        $res->message = 'error | ' . $th;
    }
}
addRewardPoint(0.02, 1, $conn);
// echo date("Y-m-d H:i:s");
