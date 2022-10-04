<?php

Class Rotas{

static function get_SiteHOME(){
    return Config::SITE_URL . '/' .Config::SITE_PASTA;
}

static function get_SiteRAIZ(){
    return $_SERVER['DOCUMENT_ROOT'] . '/' .Config::SITE_PASTA;
}


}

?>