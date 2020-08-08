<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Gadget;
use App\Http\Resources\Gadget as GadgetResourceCollection;
use App\Http\Resources\Category as CategoryResource;

class GadgetController extends Controller
{
    public function print($merk)
    {
        return $merk;
    }
    public function index(){
        $criteria = Gadget::paginate(4);
        return new GadgetResourceCollection($criteria);
    }
    public function view($id)
    {
        //$gadget = DB::select('select * from gadgets where id = :id', ['id'=>$id]);
        $gadget = new GadgetResource(Gadget::find($id));
        return $gadget;
    }
    public function top($count)
    {
        $criteria = Gadget::select('*')
        ->orderBy('views', 'DESC')
        ->limit($count)
        ->get();
        return new GadgetResourceCollection($criteria);
    }
    public function slug($slug){
        $criteria = Gadget::where('slug', $slug)->first();
        return new GadgetResource($criteria);
    }
    public function search($keyword){
        $criteria = Gadget::select('*')->where('merk', 'LIKE', "%".$keyword."%")->orderBy('views', 'DESC')->get();
        return new GadgetResourceCollection($criteria);
    }

}
