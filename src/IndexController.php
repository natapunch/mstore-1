<?php
/**
 * Created by PhpStorm.
 * User: dimmask
 * Date: 22.02.17
 * Time: 17:28
 */

namespace Mystore;

use Mindk\Framework\Response\JsonResponse;
use Mindk\Framework\Response\Response;

/**
 * Class IndexController
 * @package Mystore
 */
class IndexController
{
    /**
     * Index action
     */
    public function index(){

        $response = new JsonResponse(['test' => 11]);

        return $response;

    }

    /**
     * Single prod
     */
    public function getProduct($id, $name){

        echo sprintf("Hi! You requested %s with %s color", $id, $name);
    }
}