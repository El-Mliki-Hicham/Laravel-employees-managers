<?php

namespace App\Http\Controllers;
use App\Models\employee;
use App\Models\Departement;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->search) {
            
        
         $employees = employee::where('Nom','LIKE','%'.$request->search.'%')->get();
        
         foreach($employees as $value){
        $output.=
        '<tr>
        </td> '.$value->Nom.'</td>

        </tr>';
         }
        }else {
        $output = "hello";
        }

        $TotalDepartements = Departement::all()->count();
        $TotalEmployees = employee::count();        
        $TotalSalaire = employee::select('salaire')->sum("salaire");        
        $employee = employee::select("*")
        ->join("Departements","employees.Departement",'=',"Departements.id_departement")
        ->get();
        
        return view('index',compact('employee',"TotalEmployees","TotalSalaire","TotalDepartements","output"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $Departements = Departement::all();
        $employee = employee::select("*")
        ->join("Departements","employees.Departement",'=',"Departements.id_departement")
        ->get();
        
        return view('insert-employee',compact('employee','Departements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nom = $request->input('Nom');
        $Prenom = $request->input('Prenom');
        $Salaire = $request->input('Salaire');
        $Date_de_naissance = $request->input('Date');
        
        $Departement = $request->input('Departement');
      
      
        if($request->hasfile('image'))
         {
             $file = $request->file('image');
             $extenstion = $file->getClientOriginalExtension();
             $filename = time().'.'.$extenstion;
             $file->move('assets/img/employee', $filename);
            $photo = $filename;
         }
         else{
            $photo = null;
         }
       
        
    
 
    $employee = employee::create([
    "Nom" => $nom,
    "Prenom" => $Prenom,
    "Date_de_naissance" =>$Date_de_naissance,
    "salaire" => $Salaire,
    "Departement" =>$Departement,
    "photo" => $photo
    ]);
    
       if($employee){
        return redirect('employee');
        
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = employee::select("*")->where('id_employee',$id)
        ->join("Departements","employees.Departement",'=',"Departements.id_departement")
        ->get();
        return view("show",compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $Departements = Departement::all();
        $employee = employee::select("*")->where('id_employee',$id)
        ->join("Departements","employees.Departement",'=',"Departements.id_departement")
        ->get();
        return view("edit",compact('employee','Departements'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nom = $request->input('Nom');
        $Prenom = $request->input('Prenom');
        $Salaire = $request->input('Salaire');
        $Date_de_naissance = $request->input('Date_de_naissance');
        
        $Departement = $request->input('Departement');
      
      
        if($request->hasfile('image-file'))
         {
             $file = $request->file('image-file');
             $extenstion = $file->getClientOriginalExtension();
             $filename = time().'.'.$extenstion;
             $file->move('assets/img/employee', $filename);
            $photo = $filename;
         }
        else{
        $photo = $request->input('image');
    }
        
    
 
    $employee = employee::where("id_employee",$id)
    ->update([
    "Nom" => $nom,
    "Prenom" => $Prenom,
    "Date_de_naissance" =>$Date_de_naissance,
    "salaire" => $Salaire,
    "Departement" =>$Departement,
    "photo" => $photo
    ]);
    
       if($employee){
        return redirect('employee');
        
     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = employee::where('id_employee',$id)->delete();

        if ($delete) {
          return  redirect("employee");
        }
    }
}
