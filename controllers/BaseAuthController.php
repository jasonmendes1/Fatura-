
<?php
require_once 'BaseController.php';

class BaseAuthController extends BaseController
{
    public  function __construct()
    {
        session_start();
    }

    public function loginFilter()
    {
        if (isset($_SESSION['username'])) {
            return true;
        } else {
            header('Location: ./router.php?' . ROUTE_LOGIN);
        }
    }
}
