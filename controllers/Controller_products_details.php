<?php
class Controller_products_details extends Controller
{
    function action_index($param=null)
    {

        $this->view->generate('products_details_view.php', 'template_view.php', $this->data);

    }


}
