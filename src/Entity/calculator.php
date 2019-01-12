<?php
/**
 * Created by PhpStorm.
 * User: Gavin
 * Date: 11/01/2019
 * Time: 23:25
 */

namespace App\Entity;


class calculator
{

	public static function add(array $numbers){
		$total = false;
		foreach ($numbers as $index => $value){
			if( !is_numeric($value) ){
				return false;
			}
			if($total === false){
				$total = $value;
			}else{
				$total = $total + $value;
			}

		}
		return $total;
	}

	public static function subtract(array $numbers){
		$total = false;
		foreach ($numbers as $index => $value){
			if( !is_numeric($value) ){
				return false;
			}
			if($total === false){
				$total = $value;
			}else{
				$total = $total - $value;
			}

		}
		return $total;
	}

	public static function multiply(array $numbers){
		$total = false;
		foreach ($numbers as $index => $value){
			if( !is_numeric($value) ){
				return false;
			}
			if($total===false){
				$total = $value;
			}else{
				$total = $total * $value;
			}
		}
		return $total;
	}

	public static function divide(array $numbers){
		$total = false;
		foreach ($numbers as $index => $value){
			if( !is_numeric($value) ){
				return false;
			}
			if($total===false){
				$total = $value;
			}else{
				try{
					$total = $total / $value;
				}catch(\Exception $e){
					return false;
				}
			}
		}
		return $total;
	}



}