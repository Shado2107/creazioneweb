<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipe;
use App\Service;
use App\Devi;

class CreazioneController extends Controller
{
    public function Equipe(){
    
        $equipe= Equipe::all();
        return view('pages.about',[
            'equipe'=>$equipe,
        ]);
    
    }
    
    public function Acceuil(){
    
    $service= Service::all();
    return view('welcome',[
        'services'=>$service,
    ]);
    
    }
    
    public function Contact(){
        return view('pages.contact');
    }
    
    public function Portfolio(){
        return view('pages.portfolio');
    }
    
    public function SendMail(Request $request){
        
        
        request()-> validate([
            'name'=>['required'],
            'surname'=>['required'],
            'email'=>['required','email'],
            'number'=>['required'],
            'service'=>['required'],
        ]);

        $nom = request('name');
        $prenom   = request('surname');
        $mail = request ('email');
        $tel = request ('number');
        $service = request ('service');
        $description = request ('message');
            
        $rech =  new devi;
        $rech -> nom = $nom;
        $rech -> prenom = $prenom ;
        $rech -> mail = $mail;
        $rech -> telephone = $tel;
        $rech -> description = $description;
        $rech -> service = $service;
        $rech->save();
            
            
        $details = [
            'nom' => $nom ,
            'prenom' => $prenom ,
            'mail' => $mail
        ];
        
        \Mail::to( request('email') )->send(new \App\Mail\creazioneMail($details));
        
       \Mail::to( 'creazionestudio228@gmail.com' )->send(new \App\Mail\ReceptionMail($details));
        
        return back();
    
    }
    
    
    public function Contacter(Request $request){
        
        
        request()-> validate([
            'name'=>['required'],
            'email'=>['required','email'],
            'message'=>['required'],
        ]);

        $nom = request('name');
        $prenom   = request('surname');
        $message = request ('message');
        $mail = request ('email');
        $sujet = request ('subject');
            
        $details = [
            'nom' => $nom ,
            'prenom' => $prenom ,
            'message' => $message,
            'mail' => $mail,
            'sujet' => $sujet,
        ];
        
        \Mail::to( 'creazionestudio228@gmail.com' )->send(new \App\Mail\ContactMail($details));
        
      //  \Mail::to( 'creazionestudio228@gmail.com' )->send(new \App\Mail\ReceptionMail($details));
        return back();
    
    }
    
}
