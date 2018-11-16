<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Application\Models\Users;
use Zend\Json\Json;
use Zend\View\Model\JsonModel;

use Zend\Cache\StorageFactory;
use Zend\Cache\Storage\Adapter\Memcached;
use Zend\Cache\Storage\StorageInterface;
use Zend\Cache\Storage\AvailableSpaceCapableInterface;
use Zend\Cache\Storage\FlushableInterface;
use Zend\Cache\Storage\TotalSpaceCapableInterface;
/*
$this->params()->fromPost('paramname');   // From POST
$this->params()->fromQuery('paramname');  // From GET
$this->params()->fromRoute('paramname');  // From RouteMatch
$this->params()->fromHeader('paramname'); // From header
$this->params()->fromFiles('paramname');
*/
class TestController extends AbstractActionController
{
    ################################################################################
    public function __construct()
    {

    }
    ################################################################################
    public function test1Action()
    {

        $arr         = array();
        $numberstart = 3;
        $rank        = 4;
        $numberfix   = 2;


        for ($i = 0; $i <= $rank; $i++) {

            if ($i == 0) {
                $start = $numberstart;
            } else {
                $start = $arr[$i - 1];
            }

            $x = $start + ($i * $numberfix);
            array_push($arr, $x);

        }

        echo json_encode($arr);


    }
    ################################################################################
    public function test2Action()
    {

        $y = 99 - (10 * 2) - 24;
        echo $y;

    }
    ################################################################################
    public function test3Action()
    {
        $arr = array();
        for ($i = 1; $i <= 5; $i++) {

            if ($i == 1) {
                $startnumber = 5;
            } else {
                $startnumber = $i . $arr[$i - 2];
            }
            array_push($arr, $startnumber);

        }

        echo json_encode($arr);


    }
    ################################################################################
}
