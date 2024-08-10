<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->menu = array("HOME","HOLIDAY","TOP TOURS","MICE","OFFERS","HOTELS","GIFT VOUCHERS");
       
        $this->top_att = array(
                1=>array('1','Registan in Samarkand <span style="visibility: hidden;">Samarkand</span>','Registan in Samarkand',''),
                2=>array('2','Gur-e-Amir Mausoleum in Samarkand','Gur-e-Amir Mausoleum in Samarkand','Shah-i-Zinda in Samarkand',''),
                3=>array('3','Shah-i-Zinda in Samarkand <span style="visibility: hidden;">Samarkand</span>','Shah-i-Zinda in Samarkand',''),
                4=>array('4','Tosh-Hovli Palace in Khiva <span style="visibility: hidden;">Samarkand</span>','Tosh-Hovli Palace in Khiva',''),
                5=>array('5','Ark in Bukhara <span style="visibility: hidden;">Samarkand Samarkand Samarkand</span>','Ark in Bukhara',''),
                6=>array('6','Chorsu Bazaar in Tashkent <span style="visibility: hidden;">Samarkand</span>','Chorsu Bazaar in Tashkent',''),
                7=>array('7','Fergana Valley','Fergana Valley',''),
                8=>array('8','Kyzylkum Desert','Kyzylkum Desert',''),
                9=>array('9','Aral Sea','Aral Sea',''),
            );
            $this->offers = array(
                1=>array('1','Short Breaks'),
                2=>array('2','City Tours'),
                3=>array('3','Weekend Escapes'),
                4=>array('4','Staycations'),
                       );
            $this->des = array(
                1=>array('1','Central Asia'),
                2=>array('2','Middle East'),
                3=>array('3','Europe'),
                4=>array('4','Asia & Asia Pacific'),

            );
            $this->central_asia = array(
                1=>array('1','Uzbekistan'),
                2=>array('2','Kazakhstan'),
                3=>array('3','Kyrgyzstan'),
                4=>array('4','Tajikistan'),

                5=>array('5','Turkmenistan'),
                6=>array('6','Georgia'),
                7=>array('7','Iran'),

            );

            $this->top = array(
                1=>array('1','Historical Tours in Uzbekistan','$555'),
                2=>array('2','Extreme & Adventure Tours in Uzbekistan',''),
                3=>array('3','Daily Tours in Uzbekistan',''),
                4=>array('4','Ecological Tours in Uzbekistan',''),
                5=>array('5','Medical Tours in Uzbekistan',''),
                6=>array('6','Educational Tours in Uzbekistan',''),
                7=>array('7','Transformational Travel in Uzbekistan',''),
                8=>array('8','Winter Tourism in Uzbekistan',''),
                9=>array('9','Tours in Kyrgyzstan',''),
                10=>array('10','Tours in Georgia',''),
                11=>array('11','Tours in Tajikistan',''),
                12=>array('12','Knowledge Exchange Tours',''),
                13=>array('13','Team-Building Tours',''),
                14=>array('14','Solo Tours',''),
                15=>array('15','Group Travel',''),
            );
    }

    public function index(){
        $data['top'] = DB::table('top_tours')->get();
        $data['instagram']= $this->getInstagramData();
        $data['press'] = DB::table('press')->orderBy('id','DESC')->get();
        return view('index',['menu'=>$this->menu,'top'=>$data['top'],'top_att'=>$this->top_att,'offers'=>$this->offers,'des'=>$this->des,'data'=>$data]);
    }

    public function getInstagramData(){
        try{
            // create curl resource
            $ch = curl_init();

            // set url
            curl_setopt($ch, CURLOPT_URL, "http://atecainvestments.com/apiData.php?para=sbi_tagbyateca");

            //return the transfer as a string
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            // $output contains the output string
            $output = curl_exec($ch);

            // close curl resource to free up system resources
            curl_close($ch);  

            return json_decode($output);
        }
        catch (Throwable $e) {
            return array();
        }
    }
}
