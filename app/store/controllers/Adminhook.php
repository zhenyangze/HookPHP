<?php
class AdminHookController extends BaseController
{
    public function indexAction()
    {
        $this->_view->assign(['test' => $this->_name]);
    }
}