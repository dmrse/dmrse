<?php


    function yandex_form($options)
    {

        isset($request->type_pay)? $type_pay = $request->type_pay : $type_pay ='AC';
        isset($request->id_place)? $id_place = $request->id_place : $id_place = '10';

        $options = array(
            "receiver" => "410016571614822",
            "formcomment" => 'Обмен сдредств на элемент Dmrse',
            "short-dest" => 'Обмен сдредств на элемент Dmrse',
            "label" => $id_place,
            "quickpay-form" => 'shop',
            "targets" => 'Обмен сдредств на элемент Dmrse',
            "sum" => 10,
            "successURL" => 'http://dmrse.ru/create',
            "paymentType" => $type_pay
        );

        $url = "https://money.yandex.ru/quickpay/confirm.xml";

    }