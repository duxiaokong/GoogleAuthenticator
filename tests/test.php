<?php
/**
 * 说明.
 * User: dxk
 * Date: 2020-12-25
 */
require '../vendor/autoload.php';
$auth = new \EasyGoogleAuth\GoogleAuthenticator();
$secret = $auth->createSecret();
echo $secret . '<br>';
$qrcode_str = $auth->getQRCodeGoogleUrl('duxiaokong', $secret, '测试平台');
echo $qrcode_str . '<br>';
$secret = 'WRINZDW5BRUZNUFF';
$res = $auth->verifyCode($secret, '156721');
