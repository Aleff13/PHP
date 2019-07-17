<?php
namespace Safe2Pay\Api;

use Safe2Pay\Core\Client;
use Safe2Pay\Models\Response;

include_once('../Core/Client.php');
include_once('../Models/Response/Response.php');

/**
 * Class MarketplaceRequest
 *
 * @package Safe2Pay\Api
 */
class MarketplaceRequest{

     /**
     * Add Merchant
     *
     * @param [Merchant] $merchant
     * @return Response
     */
    public static function Add($merchant){

        $request = Client:: HttpClient('POST','v2/Marketplace/Add', json_encode($merchant),false);
        $response = json_decode($request , true);
        return $response;
    }

    /**
     * Update Merchant
     *
     * @param [Merchant] $merchant
     * @param [int] $Id
     * @return Response
     */
    public static function Update($merchant, $Id){

        $request = Client:: HttpClient('PUT',"/v2/Marketplace/Update?id={$Id}", json_encode($merchant),false);
        $response = json_decode($request , true);
        return $response;
    }

    /**
     * Delete Merchant
     *
     * @param [int] $Id
     * @return Response
     */
    public static function Delete($Id){

        $request = Client:: HttpClient("DELETE","v2/Marketplace/Delete?id={$Id}", null,false);
        $response = json_decode($request , true);
        return $response;
    }

     /**
     * Get Merchant
     *
     * @param [int] $Id
     * @return Response
     */
    public static function Get($Id){

        $request = Client:: HttpClient('GET',"v2/Marketplace/Get?id={$Id}", null,false);
        $response = json_decode($request , true);
        return $response;
    }

     /**
     * Merchant List
     *
     * @param [PageNumber] $PageNumber
     * @param [RowsPage] $RowsPage
     * @return Response
     */
    public static function List($PageNumber,$RowsPage){

        $request = Client:: HttpClient('GET',"v2/Marketplace/List?PageNumber={$PageNumber}&RowsPerPage={$RowsPage}", null,false);
        $response = json_decode($request , true);
        return $response;
    }
}

?>