<?php


namespace DGCGroup\MonCashPHPSDK;
/*
 * All public staticants used in the SDK and their values
 */


class Constants{


    public static $HTTP_CONTENT_TYPE_HEADER = "Content-Type";

    public static $HTTP_AUTHORIZATION_HEADER = "Authorization";

    public static $HTTP_ACCEPT_HEADER = "application/json";

    public static $HTTP_APPLICATION_JSON = "application/json";

    public static $OAUTH_TOKEN_URI = "/oauth/token";

    public static $PAYMENT_CREATOR_URI = "/v1/CreatePayment";

    public static $PAYMENT_TRANSACTION_URI = "/v1/RetrieveTransactionPayment";

    public static $PAYMENT_ORDER_URI = "/v1/RetrieveOrderPayment";

    public static $REST_SANDBOX_ENDPOINT = "http://200.113.192.182:8080/Api";

    public static $REST_LIVE_ENDPOINT = "https://api.moncashbutton.digicelgroup.com";

    public static $SANDBOX_REDIRECT = "http://200.113.192.182:8080/Moncash-middleware";

    public static $LIVE_REDIRECT = "http://200.113.192.182:8080/Moncash-middleware";

    public static $GATE_WAY_URI = "/Payment/Redirect";

    public static $SANDBOX = "sandbox";

    public static $LIVE = "live";

    public static $URL_KEY = "url";

    public static $METHOD_KEY  = "method";


}

