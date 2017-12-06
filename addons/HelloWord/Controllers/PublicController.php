<?php
namespace Addons\HelloWord\Controllers;
use WP\Routes\Controller;

class PublicController extends Controller {
    public function __construct() {
       
    }

    public function index() {
        return self::render('index.html',array(
            'test' => 'Hallox',
        ));
    }

    public function test() {
        return self::render('index.html',array(
            'test' => 'Hallox',
        ));
    }
}