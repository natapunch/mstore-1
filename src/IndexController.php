<?php
/**
 * Created by PhpStorm.
 * User: dimmask
 * Date: 22.02.17
 * Time: 17:28
 */

namespace Mystore;

use Mindk\Framework\Request\Request;
use Mindk\Framework\Response\JsonResponse;
use Mindk\Framework\Response\RedirectResponse;
use Mindk\Framework\Router\Router;

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

        $response = new RedirectResponse('/product/11');

        return $response;

    }

    /**
     * Single prod
     */
    public function getProduct($id){

        echo sprintf("Hi! You requested %s with color", $id);
    }
}