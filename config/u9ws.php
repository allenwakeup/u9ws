<?php

/*
 *
 *
 * (c) Allen, Li <morningbuses@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | U9 ERP Webservice Server settings
    |--------------------------------------------------------------------------
    |
    */

    'Host' => env('U9_HOST', 'localhost'),
    'WSDL' => env('U9_WSDL', 'http://%s/U9/CUSTService/UFIDA.U9.CUST.HY.DSOSV.DSOSV.IDSOSV.svc'),



    /*
    |--------------------------------------------------------------------------
    | Authorization http request parameters
    |--------------------------------------------------------------------------
    |
    */

    'OrgID' => env('U9_ORG_ID', ''),
    'UserID' => env('U9_USER_ID', ''),
    'EnterpriseID' => env('U9_ENTERPRISE_ID', ''),
    'DefaultCultureName' => env('U9_DEFAULT_CULTURE_NAME', 'zh-CN'),
    'CultureName' => env('U9_CULTURE_NAME', 'zh-CN'),
    'Support_CultureNameList' => env('U9_SUPPORT_CULTURE_NAME_LIST', 'zh-CN'),
    'EnterpriseName' => env('U9_ENTERPRISE_NAME', ''),



];
