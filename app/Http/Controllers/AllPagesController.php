<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AllPagesController extends Controller
{
    public function index(Request $request){
        $this->menu = array("HOME","HOLIDAY","TOP TOURS","MICE","OFFERS","DESTINATIONS","HOTELS","GIFT VOUCHERS");
        $data['content']= DB::table('pages')->where('url',$request->path())->first();
        if($data['content']->subpage){
            $data['subpage'] = DB::table('subpage')->where('page_id',$data['content']->id)->get();
        }
        $mainPoint = config('app.env') === 'production' ? '/public/' : '/';
       return view('dynamicPages',['data'=>$data,'menu'=>$this->menu,]);
       

    //    try{
           
    //    }
    //    catch (Throwable $e) {
    //     report($e);
    //     print_r($e);

    //     // return false;
    // }
    }
}
