<?php

class IndexController extends ControllerBase {
    public function onConstruct() {
        $this->view->disable();
    }

    public function indexAction() {
        $data = array(
            'header'  => 'Blade View',
            'message' => 'This is a view that generated by blade engine.'
        );

        return $this->blade->make('blades.index', $data);
    }

}