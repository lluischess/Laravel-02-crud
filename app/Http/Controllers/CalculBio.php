<?php 
namespace llibres\Http\Controllers;
use Illuminate\Http\Request;

use llibres\Http\Requests;

class CalculBio extends Controller
{

	 function index(){
		return view ('bio.pagina1');
	}
	
		function result(Request $request){


		// Variables para guardar los datos del formulario

		$nom = $request->input('Nombre');
		$nacimiento = $request->input('nacimiento');
		$datahoy= date('Y-m-d');
		$data1 = date_create($datahoy);
		$data2 = date_create($nacimiento);
		
		
		//Calcular dias restantes
		
		$dies = date_diff($data1, $data2);
		$dies = $dies->format('%a');

		
		
			//Operaciones Biorritmes
		
		$Fisico = round((sin(2*M_PI*$dies/23))*100);
		$Emocio = round((sin(2*M_PI*$dies/28))*100);
		$Intel = round((sin(2*M_PI*$dies/33))*100);
		if($Fisico<0){
			$Fisico = 0;
		} if($Emocio<0){
			$Emocio = 0;
		} if($Intel<0){
			$Intel = 0;
		}
		
		//Le devolvemos los resultados a la vista
		return view ('bio.pagina2')->with('nom',$nom)
								->with('data',$nacimiento)								
								->with('fisico',$Fisico)
								->with('Emocional',$Emocio)
								->with('Intelectual',$Intel);
	}
	}




 ?>