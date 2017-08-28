<?php
class Controller_products extends Controller
{
    function action_index($param=null)
    {

        $this->view->generate('products_view.php', 'template_view.php', $this->data);

    }


}
