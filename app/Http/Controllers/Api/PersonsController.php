<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Register;


class PersonsController extends Controller
{
    public $token = 'apis-token-5761.59ZzjNAOFWADmBfvLbj8DvX98Yv1FDPH';
    public function show($id){
        $register = Register::where('number_doc', $id)->exists();
        return $register;
    }
    public function index(Request $request){
        $request->validate([
            'number'=>'required|string|max:8',
        ]);
        if(!($this->show($request->input('number')))){
            $person = Person::select('number_doc', 'name','lastname')
            ->where('number_doc',$request->input('number'))
            ->first();
            if(!$person){
                $curl = curl_init();
                // Buscar dni
                curl_setopt_array($curl, array(
                // para user api versión 2
                CURLOPT_URL => 'https://api.apis.net.pe/v2/reniec/dni?numero=' . $request->input('number'),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 2,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array(
                    'Referer: https://apis.net.pe/consulta-dni-api',
                    'Authorization: Bearer ' . $this->token
                ),
                ));
                $response = curl_exec($curl);
                curl_close($curl);
                $person = json_decode($response);       
                if($person == null){
                    $person = array('status'=>false,'message'=>'Por favor verifique su conexion a internet');
                }else if(property_exists($person,'nombres')){
                    $person->status = true;
                }else if($persona->message == 'dni no valido'){
                    $person->status = false;
                    $person->message = 'Por favor ingrese un DNI valido';
                }else if($persona->message == 'not found'){
                    $person->status = false;
                    $person->message = 'Por favor registre sus nombres y apellidos';
                }
            }
            return response()->json($person);
        }else{
            return [
                'status'=>false,
                'message'=>'Ya se encuentra registrado'
            ];
        }        
    }
}
