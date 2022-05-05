<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioController extends Controller
{
    public function index(){
        $url = "http://localhost/APIrest/api/listar";
        $client = curl_init($url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        $result = json_decode($response);

        return view('usuario.index',compact('result'));

    }

    
    public function create(){
        return view('usuario.create');
    }

    public function store(Request $request){
        $url = "http://localhost/APIrest/api/insertar";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        
        $headers = array(
         "Accept: application/json",
         "Content-Type: application/json",
     );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        
        $username= $request->username; 
        $user_email=$request->user_email; 
        $user_status= $request->user_status;



        $data = <<<DATA
        {
          "username": "$username",
          "user_email": "$user_email",
          "user_status": $user_status
      }
      DATA;
      
      curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

      $resp = curl_exec($curl);
      curl_close($curl);

      return redirect()->route('usuario.index');
  }

  public function edit($id){
        //consumiendo nuestro webservice para obtener el conjunto de datos
   $user_id = $id;
   $url = "http://localhost/APIrest/api/obtener/".$user_id;
   $client = curl_init($url);
   curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
   $response = curl_exec($client);
   $result = json_decode($response);

   return view('usuario.edit',compact('result'));

}

public function update(Request $request){
        //consumiendo nuestro webservice para enviar el conjunto de datos
   $url = "http://localhost/APIrest/api/editar";
   $curl = curl_init($url);
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_POST, true);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   
   $headers = array(
       "Accept: application/json",
       "Content-Type: application/json",
   );
   curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
   
   $user_id=$request->user_id;
   $username=$request->username;
   $user_email=$request->user_email;
   $user_status=$request->user_status; 
   $data = <<<DATA
   {
       "user_id": "$user_id",
       "username": "$username",
       "user_email": "$user_email",
       "user_status": $user_status
   }
   DATA;
   
   curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
   $resp = curl_exec($curl);

   curl_close($curl);

   return redirect()->route('usuario.index');
}

public function delete($id){
        //consumiendo nuestro webservice para obtener el conjunto de datos
   $user_id = $id;
   $url = "http://localhost/APIrest/api/obtener/".$user_id;
   $client = curl_init($url);
   curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
   $response = curl_exec($client);
   $result = json_decode($response);

   return view('usuario.delete',compact('result'));
}

public function destroy(Request $request){
        //consumiendo nuestro webservice para enviar el conjunto de datos
   $user_id = $request->user_id;
   $url = "http://localhost/APIrest/api/eliminar/".$user_id;
   $client = curl_init($url);
   curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
   $response = curl_exec($client);

   return redirect()->route('usuario.index');
}



}
