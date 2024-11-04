<?php

namespace App\Models;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    protected $table = "tbl_massage_contact";
    protected $connection = 'mysql';
    protected $primaryKey = 'Id_contact';

    protected $fillable = ['Name', 'Email', 'Subject', 'Message'];


    public static function SaveContact(Request $request)
    {
        try {
            $Name             = $request->input('name');                
            $Email           = $request->input('email');                
            $subject         = $request->input('subject');
            $menssage       = $request->input('message');

            $response = LandingPage::create([
                'Name' => $Name,
                'Email' => $Email,
                'Subject' => $subject,
                'Message' => $menssage
            ]);

            if ($response) {
                return response()->json('Su mensaje ha sido enviado con éxito!');
            }
        
            return $response;
            
        } catch (Exception $e) {
            $mensaje =  'Excepción capturada: ' . $e->getMessage() . "\n";
            dd($mensaje);    
            return response()->json($mensaje);
        }
    }
}
