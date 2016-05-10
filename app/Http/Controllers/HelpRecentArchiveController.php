<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Help;

class HelpRecentArchiveController extends Controller
{
    public function index(){
    	if(\Auth::user()->profile->name =='Deficiencia auditiva y sordera'){
        	$helps = Help::orderBy('id', 'DES')->where('subtitles',true)->paginate(10);
        }else{
        	$helps = Help::orderBy('id', 'DES')->where('subtitles',false)->paginate(10);
        }
        return view('member.helps.recentarchive.index')->with("helps",$helps);
    }
}
