<?php

namespace App\Http\Controllers;
use App\Areas;
use App\Points;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Cookie;

class ThegameController extends Controller
{
    // Get requests

    public function index() {
        if (Cookie::get('theGameAccess1') != null) {
            return view('thegame.index');
        }
    }
    public function addarea() {
        if (Cookie::get('theGameAccess1') != null) {
            return view('thegame.addarea');
        }
    }

    private function getPoints(){
        $areas = $this->getAreas();
        $areapoints = array();
        foreach($areas as $key => $area) {
            $totalPoints = 1000;
            $points = DB::table('points')
                ->select('points')
                ->where('area_id', $key+1)
               ->sum('points');
            $areapoints[$area->name] = $points+1000;
        }
        return $areapoints;
    }

    private function getPointsText(){
        $areaPointText = array();
        $areas = $this->getAreas();

        foreach ($areas as $area) {
            $pointsummaries = DB::table('points')
                ->select('points', 'body')
                ->where('area_id', $area->id)
                ->orderBy('id', 'desc')
                ->take(8)
                ->get();
            $areaPointText[$area->name] = $pointsummaries;
        }
        return $areaPointText;

    }
    public function getAccess(){
        $value = Cookie::get('theGameAccess1');
        if($value != null) {
            return view('thegame.hasaccess');
        } else {
            return view('thegame.getaccess');
        }

    }
    public function addCookieForAccess(){
        if(request('password') === "KpSbTg12_VOB") {
            Cookie::queue("theGameAccess1", request('name'), 23761);
        }
        redirect('/thegame');
    }
    private function getAreas(){
        $areas = DB::table('areas')->where('active',1)->get();
        return $areas;
    }
    public function points() {
        if (Cookie::get('theGameAccess1') != null) {
            $areas = $this->getAreas();
            return view('thegame.givepoints', compact('areas'));
        }
    }
    public function view() {
        $all = $this->getPointsText();
        $scoreTotal = $this->getPoints();
        foreach ($scoreTotal as $area => $totals) {
            $all[$area]['total'] = $totals;
        }
        return view('thegame.view', compact('all'));
    }

    // Post requests

    public function givepoints(Points $points){
        $this->validate(request(), [
            'body' => 'required|max:50',
            'points' => 'required|numeric'
        ]);
         $pointData['bywho'] = Cookie::get('theGameAccess1');
         $pointData['body'] = request('body');
         $pointData['area_id'] = request('area_id');
         $pointData['points'] = request('points');
        $points->givepoints($pointData);
        return redirect('/thegame');
    }
    public function createArea(){
        $this->validate(request(), [
            'areaname' => 'required',
            'responsible' => 'required',
        ]);
        Areas::create([
            'name' => request('areaname'),
            'responsible' => request('responsible'),
        ]);

        return redirect('/thegame');

    }
}
