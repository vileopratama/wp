<?php
namespace Addons\HelloWord\Controllers;

class PublicController {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        echo 'hallo word';
    }
}