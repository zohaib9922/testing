<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;
use Mail;
use Illuminate\Support\Facades\DB;

class ForumController extends Controller
{
    public function show()
    {
        return view('forum');
    }

    public function HunterForum()
    {
        return view('hunter-page');
    }

//     public function AddForum(Request $request){
    
//         // $add =  new Forum();

//         // dd($add);
        
//         // $add->postalcode = $request->postalcode;    
//         // $add->number =$request->number;            
//         // $add->email = $request->email;
//         // $add->insurancetype = $request->insurancetype;

//         $request->validate([
//             'email' => 'unique:forum|max:255',
//         ]);

        

//         $data = [
//             'postalcode' => $request->postalcode,
//             'number'=> $request->number,
//             'email' => $request->email,
//             'insurancetype' => $request->insurancetype,
//        ];
      
       
//        DB::table('forum')->insert($data);

//        return redirect('/forum')->with('message', 'Thank you for submission');
    
// }

public function AddForum(Request $request) {



    $request->validate([
                    'email' => 'unique:forum|max:255',
                ]);
        
                
        
                $dataforum = [
                    'postalcode' => $request->postalcode,
                    'number'=> $request->number,
                    'email' => $request->email,
                    'insurancetype' => $request->insurancetype,
               ];

               

               DB::table('forum')->insert($dataforum);

                $data = array('name'=>$request->postalcode,
                                'phone'=>$request->number,
                                'email'=>$request->email,
                                'insurancetype'=>$request->insurancetype,
                );

                // Mail::send('mail', $data, function($message) {
                //     $message->to('leads@myhunter.ca', 'My Hunter')->subject
                //     ('Hunter');
                //     $message->from('myhunterinfo@gmail.com','My Hunter');
                // });

      

    return redirect('/forum')->with('message', 'Thank you for submission');
 

 }

 public function works(){
    return view('pages.how-it-works');
}

public function Insurance(){
    return view('pages.our-insurance');
}

public function Advisor(){
    return view('pages.our-advisor');
}

public function individualAdvisor(){
    return view('pages.individual-advisor');
}

public function StartDate(){
    return view('pages.start-date');
}
public function DriverForm(){
    return view('pages.driver-form');
}

public function VehicleForm(){
    return view('pages.vehicle-form');
}


}
