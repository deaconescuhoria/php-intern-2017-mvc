<?php
class Controller_contact extends Controller
{
    function action_index($param=null)
    {

        $this->view->generate('contact_view.php', 'template_view.php', $this->data);

    }


}
