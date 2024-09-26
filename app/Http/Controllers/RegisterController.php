<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Register;
use App\Models\Level;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $rules = [
        'level' =>'not_in:0',
        'gender'=>'not_in:0',
        'country'=>'not_in:0',
        'type'=>'not_in:0',
        'number' => 'required|min:8|max:25',
        'name' => 'required',
        'lastname' => 'required',
        'born' => 'required',
        'region'=> 'required_if:country,1',
        'province'=> 'required_if:country,1',
        'district'=> 'required_if:country,1',
        'addresd' => 'required',
        'phone' => 'required',
    ];
    private $message =[
        'level.not_in' => ['status'=>false,'message'=>'Por favor seleccione Categoria'],
        'gender.not_in'=>['status'=>false,'message'=>'Por favor seleccione genero'],
        'country.not_in' =>['status'=>false,'message'=>'Por favor seleccione Pais de Procedencia'],
        'type.not_in' =>['status'=>false,'message'=>'Por favor seleccione Tipo de documento'],
        'number.required' => ['status'=>false,'message'=>'Por favor ingrese numero de documento'],
        'number.min' => ['status'=>false,'message'=>'Por favor ingrese numero de documento valido'],
        'number.max' => ['status'=>false,'message'=>'Por favor ingrese numero de documento valido'],
        'name.required' => ['status'=>false,'message'=>'Por favor ingrese Nombre'],
        'lastname.required' => ['status'=>false,'message'=>'Por favor ingrese Apellidos'],
        'region.required_if'=> ['status'=>false,'message'=>'Por favor seleccione Region'],
        'province.required_if'=> ['status'=>false,'message'=>'Por favor seleccione Provincia'],
        'district.required_if'=> ['status'=>false,'message'=>'Por favor seleccione Distrito'],
        'born.required' => ['status'=>false,'message'=>'Por favor ingrese fecha de Nacimiento'],
        'addresd.required' => ['status'=>false,'message'=>'Por favor ingrese Direccion'],
        'phone.required' => ['status'=>false,'message'=>'Por favor ingrese Celular'],
    ];
    public function index(){return view('pages.welcome');}
    public function form(){return view('pages.form');}
    /**
     * Show the form for creating a new resource.
     */
    public function create($nombreArchivo)
    {
        $rutaArchivo = public_path('assets/pdf/'.$nombreArchivo);
        if (file_exists($rutaArchivo)) {
            return response()->download($rutaArchivo, $nombreArchivo);
        } else {
            abort(404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),$this->rules,$this->message);
        if($validator->fails())return json_encode($validator->errors());
        $old = self::show($request->input('number_doc'));
        if($old){
            return json_encode(['register' => [['status'=>false,'message' =>'El usuario ya se encuentra registrado']]]);        
        }
        try {
            $codigo = self::show_number($request->input('level'));
            $register = new Register;
            $register->number_doc  = $request->input('number');
            $register->name  = $request->input('name');
            $register->lastname  = $request->input('lastname');
            $register->genders  = $request->input('gender');
            $register->born = $request->input('born');
            $register->addresd =$request->input('addresd');
            $register->phone = $request->input('phone');
            $register->number_ins = $codigo;
            $register->type_doc = $request->input('type');
            $register->id_country  = $request->input('country');
            $register->id_region  = $request->input('region');
            $register->id_province = $request->input('province');
            $register->id_district = $request->input('district');
            $register->id_level = $request->input('level');
            $register->save();
        }catch (\Throwable $th) {
            echo $th->getMessage();
            return json_encode(['error' => [['status'=>false,'message' => "No se puede ingresar al usuario en la tabla"]]]); 
        }
        return json_encode(['registered' => [['status'=>true,'message' =>"Usted se ha inscrito satisfactoriamente",'ins'=>$codigo,'cod'=>$request->input('level')]]]);     
    }

    /**
     * Display the specified resource.
     */
    public function verificationDni(Request $request){
        $number = new Register;
        $number = Register::select('status','number_ins','id_level')->where('number_doc',$request->dni)->first();
        if(!$number){
            return response()->json([
                'status' => false,
                'message' => 'Usted no se encuentra registrado'
            ]);
        }
        $number->status = true;
        return response()->json($number);
    }
    public function show($id)
    {
        $register = new Register;
        $register =Register::where('number_doc', $id)->exists(); 
        return $register;
    }
    public function show_number($id){
        $number = new Register;
        $number = Register::where('id_level', $id)->count(); 
        $number++;
        return self::show_level($id).'-'.$number;
    }
    public function show_level($id){
        $level = new Level;
        $level = Level::select('cod_level')->where('id_level', $id)->first(); 
        return $level->cod_level;
    }
    public function levelCount(){
        $register = new Register;
        $register = Register::rightJoin('levels','registers.id_level','=','levels.id_level')
        ->select('levels.name_level as name','levels.cod_level as cod')->groupBy('levels.name_level','levels.cod_level')
        ->selectRaw('count(registers.id_level) as count')
        ->get();
       /*  return $register; */
        return datatables()->of($register)->toJson();
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
    public function inscription(){
        $register = new Register;
        $register = Register::Join('levels', 'registers.id_level', '=', 'levels.id_level')
        ->selectRaw('registers.number_doc,registers.id_level,registers.name,registers.lastname,levels.name_level,registers.number_ins,registers.born')
        ->where('registers.number', '=', null)
        ->where('registers.status', '=', 'true')
        ->get();
        return datatables()->of($register)->toJson();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if(mb_strlen($request->input('numero')) == 0 ) return json_encode(['status'=>false,'message'=>'Ingrese numero']);
        $register = Register::find($request->input('dni'));
        $register->number = $request->input('numero');
        $register->user = $request->input('user');
        $register->save();
        return json_encode(['status'=>true,'message'=>'Se ingreso correctamente']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
