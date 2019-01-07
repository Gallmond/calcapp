<?php
// src/Controller/calcController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class calcController extends AbstractController
{

	const ALLOWED_OPERATIONS = [
		"add",
		"subtract",
		"multiply",
		"divide"
	];

	public function handle(Request $_request)
	{

		// https://symfony.com/doc/current/controller.html#request-object-info
		$num_x = $_request->request->get('num_x');
		$num_y = $_request->request->get('num_y');
		$type = $_request->request->get('operation');

		// check vars
		if( isset($num_x, $num_y) && in_array($type, Self::ALLOWED_OPERATIONS) ){

			$int_x = (float)$num_x;
			$int_y = (float)$num_y;

			// do calculation
			try{
				$result = Null;
				if( $type === Self::ALLOWED_OPERATIONS[0] ){
					$result = $int_x + $int_y;
				}elseif( $type === Self::ALLOWED_OPERATIONS[1] ){
					$result = $int_x - $int_y;
				}elseif( $type === Self::ALLOWED_OPERATIONS[2] ){
					$result = $int_x * $int_y;
				}elseif( $type === Self::ALLOWED_OPERATIONS[3] ){
					$result = $int_x / $int_y;
				}
			}catch(\Exception $e){
				$result = $e->getMessage();
			}

			return $this->render('calc.html.twig', [
				'result' => (string)$result
			]);
		}else{
			// display calc
			return $this->render('calc.html.twig', [

			]);
		}
	}
}