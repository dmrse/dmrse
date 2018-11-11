<?php

namespace Dmrse\Http\Controllers\Pay;


use Dmrse\Http\Controllers\Controller;
use Config;
use \YandexMoney\API;


class PayController extends Controller
{
    public function index()
    {
        $client_id = Config::get('constants.API.CLIENT_ID');
        $redirect_uri = Config::get('constants.API.REDIRECT_URI');

        $scope = ['account-info'];

        $auth_url = API::buildObtainTokenUrl($client_id, $redirect_uri, $scope);

        return redirect($auth_url);
    }
}
