<?php
// src/Controller/calc_mk2Controller.php
namespace App\Controller;

use App\Entity\calculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class calc_mk2Controller extends AbstractController
{

	const ALLOWED_OPERATIONS = [
		"+",
		"-",
		"x",
		"/"
	];

	public function handle(Request $_request)
	{
		return $this->render('calc_mk2.html.twig',[

		]);
	}


	public function mathRequest(Request $_request){

		// symfony does not parse JSON by default
		if (0 === strpos($_request->headers->get('Content-Type'), 'application/json')) {
			$data = json_decode($_request->getContent(), true);
			$_request->request->replace(is_array($data) ? $data : array());
		}

		$num_x = $data['num_x'];
		$num_y = $data['num_y'];
		$operation = $data['operation'];

		if( !in_array($operation, Self::ALLOWED_OPERATIONS) || !is_numeric( $num_x ) || !is_numeric($num_y) ){
			return new Response('invalid input', Response::HTTP_INTERNAL_SERVER_ERROR);
		}

		$int_x = floatval($num_x);
		$int_y = floatval($num_y);

		$toReturn = Array(
			"num_x" => $num_x,
			"num_y" => $num_y,
			"operation" => $operation
		);
		if($operation === "+"){
			$toReturn["result"] = calculator::add([$int_y,$int_x]);
		}elseif($operation === "-"){
			$toReturn["result"] = calculator::subtract([$int_y,$int_x]);
		}elseif($operation === "x"){
			$toReturn["result"] = calculator::multiply([$int_y,$int_x]);
		}elseif($operation === "/"){
			$toReturn["result"] = calculator::divide([$int_y,$int_x]);
		}

		return $this->json($toReturn, Response::HTTP_OK);

	}

}