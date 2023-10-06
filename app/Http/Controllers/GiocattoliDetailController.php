<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiocattoliDetailController extends Controller
{
    public function giocattoli($article){

        
        
        $annunci = [
            [   
            "img"=> '/images/pistola.jpg',
            "name"=> "Pistola",
            "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos minus quod, inventore ipsam quis quaerat beatae nihil facilis aliquam maiores omnis iure fuga quas impedit adipisci eligendi consectetur eaque? Laudantium.",
            "price"=>"12euro",
            "seller"=>"Massimogiocattoli"
            
        ],
        [
            "img"=> '/images/barchetta.jpg',
            "name"=> "Barchetta",
            "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos minus quod, inventore ipsam quis quaerat beatae nihil facilis aliquam maiores omnis iure fuga quas impedit adipisci eligendi consectetur eaque? Laudantium.",
                "price"=>"27euro",
                "seller"=>"Massimogiocattoli"
                
            ],
            [
                "img"=> '/images/trattore.jpg',
                "name"=> "Trattore",
                "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos minus quod, inventore ipsam quis quaerat beatae nihil facilis aliquam maiores omnis iure fuga quas impedit adipisci eligendi consectetur eaque? Laudantium.",
                "price"=>"15euro",
                "seller"=>"Massimogiocattoli"
                
            ]
            ];
            foreach($annunci as $annuncio){
                if($annuncio['name'] == $article )
                return view ('giocattoli_detail',['articoli'=>$annunci]);
            }
        }
    }
