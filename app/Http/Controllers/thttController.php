<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class thttController extends Controller
{
    public function thtt(Request $req){

         $validatedData = $req->validate([
    'txta' => ['required', 'numeric'],
    'txtb' => ['required', 'numeric'],
    ],
  [
    'txta.numeric'  => 'Phải nhập số',
    'txtb.numeric'  => 'Phải nhập số',
    'txta.required' => 'Không để trống',
    'txtb.required' => 'Không để trống',

    ]);

  
   $a=$req->txta;   
   $b=$req->txtb;
   
$fields = $req->get('mtp', 0);
  if($fields == 'tong')
  $kq=$a+$b;
  
  if($fields == 'hieu')
  $kq=$a-$b;
  
  if($fields == 'tich')
  $kq=$a*$b;
  
  if($fields == 'thuong')
  $kq=$a/$b;
  
   
    return view ('/thtt',['a'=>$a,'b'=>$b,'kq'=>$kq]);
}





}
