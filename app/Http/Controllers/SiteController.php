<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Polygon;
use App\Models\Polyline;
use App\Models\Point;

class SiteController extends Controller
{
    public function landing(){
        
        return view("landing",);
    }
    
    public function peta(){
        
        return view("peta",);
    }
    public function polygon(){
        $coords = Polygon::all();
        return view("polygon", compact("coords"));
    }
    public function polyline(){
        $coords = Polyline::all();
        return view("polyline", compact("coords"));
    }
    public function point(){
        $coords = Point::all();
        return view("point", compact("coords"));
    }

    public function all(){
        $coords_polygon = Polygon::all();
        $coords_polyline = Polyline::all();
        $coords_point = Point::all();
        return view("all", compact("coords_polygon", "coords_polyline", "coords_point"));
    }

    public function data(){
        $coords_polygon = Polygon::all();
        $coords_polyline = Polyline::all();
        $coords_point = Point::all();
        return view("data", compact("coords_polygon", "coords_polyline", "coords_point"));
    }
    
    //polygon

    public function formTambahPolygon(){
       
        return view("formTambah_polygon",);
    }

    public function tambahPolygon(Request $request)
    {
        $Polygon = new Polygon();
        
        $Polygon->nama = $request->nama;
        $Polygon->keterangan = $request->keterangan;
        $Polygon->coordinate1 = $request->coordinate1;
        $Polygon->coordinate2 = $request->coordinate2;
        $Polygon->coordinate3 = $request->coordinate3;
        $Polygon->coordinate4 = $request->coordinate4;
       
        $Polygon->save();
        
        return redirect()->route('data');
    }

    public function formEditPolygon($id){
       $coords = Polygon::find($id);
        return view("formEdit_polygon",compact('coords'));
    }
    
    public function editPolygon(Request $request, $id){
        
        $Polygon = Polygon::find($id);
        
        $Polygon->nama = $request->nama;
        $Polygon->keterangan = $request->keterangan;
        $Polygon->coordinate1 = $request->coordinate1;
        $Polygon->coordinate2 = $request->coordinate2;
        $Polygon->coordinate3 = $request->coordinate3;
        $Polygon->coordinate4 = $request->coordinate4;
       
        $Polygon->save();
        return redirect()->route('data');
    }
    
    
    public function hapuspolygon($id)
    {
        $polygon = Polygon::find($id);
        $polygon->delete();
       
        return redirect()->route('data');
    }



    //polyline

    public function formTambahPolyline(){
       
        return view("formTambah_polyline",);
    }

    public function tambahPolyline(Request $request)
    {
        $Polyline = new Polyline();
        
        $Polyline->nama = $request->nama;
        $Polyline->keterangan = $request->keterangan;
        $Polyline->coordinate1 = $request->coordinate1;
        $Polyline->coordinate2 = $request->coordinate2;
        $Polyline->coordinate3 = $request->coordinate3;
        $Polyline->coordinate4 = $request->coordinate4;
       
        $Polyline->save();
        
        return redirect()->route('data');
    }

    public function formEditPolyline($id){
       $coords = Polyline::find($id);
        return view("formEdit_polyline",compact('coords'));
    }
    
    public function editPolyline(Request $request, $id){
        
        $Polyline = Polyline::find($id);
        
        $Polyline->nama = $request->nama;
        $Polyline->keterangan = $request->keterangan;
        $Polyline->coordinate1 = $request->coordinate1;
        $Polyline->coordinate2 = $request->coordinate2;
        $Polyline->coordinate3 = $request->coordinate3;
        $Polyline->coordinate4 = $request->coordinate4;
       
        $Polyline->save();
        return redirect()->route('data');
    }

    public function hapuspolyline($id)
    {
        $polyline = Polyline::find($id);
        $polyline->delete();
       
        return redirect()->route('data');
    }
    
    //point

    public function formTambahPoint(){
       
        return view("formTambah_point",);
    }

    public function tambahPoint(Request $request)
    {
        $Point = new Point();
        
        $Point->nama = $request->nama;
        $Point->keterangan = $request->keterangan;
        $Point->coordinate1 = $request->coordinate1;
       
        $Point->save();
        
        return redirect()->route('data');
    }

    public function formEditPoint($id){
       $coords = Point::find($id);
        return view("formEdit_point",compact('coords'));
    }
    
    public function editPoint(Request $request, $id){
        
        $Point = Point::find($id);
        
        $Point->nama = $request->nama;
        $Point->keterangan = $request->keterangan;
        $Point->coordinate1 = $request->coordinate1;
       
        $Point->save();
        return redirect()->route('data');
    }

    public function hapuspoint($id)
    {
        $point = Point::find($id);
        $point->delete();
       
        return redirect()->route('data');
    }

}
