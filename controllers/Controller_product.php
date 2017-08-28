<?php
class Controller_product extends Controller
{
    function action_index($param=null)
    {

        $this->view->generate('product_view.php', 'template_view.php', $this->data);

    }


}
