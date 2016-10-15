<?php

use Phalcon\Http\Response;
use Windwalker\Renderer\BladeRenderer as BladeRender;

class Blade extends BladeRender {
    public function make($file, $data = array()) {
        $respone = new Response();
        if ($data) {
            $content = $this->render($file, $data);
            return $respone->setContent($content);
        } else {
            $content = $this->render($file);
            return $respone->setContent($content);
        }
    }
}