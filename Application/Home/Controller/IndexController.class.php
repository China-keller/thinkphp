<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	 echo '11';
        if (!empty($_POST['mobile'])){
        	return '1';
        }else{
        	return '0';
        }

    }
}