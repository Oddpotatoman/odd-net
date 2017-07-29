<?php

namespace App\Http\Controllers;
use App\Areas;
use App\Points;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class ThegameController extends Controller
{
    // Get requests

    public function index() {
        return view('thegame.index');
    }
    public function addarea() {
        return view('thegame.addarea');
    }
    private function getPoints(){
        $areas = $this->getAreas();
        $areapoints = array();
        foreach($areas as $key => $area) {
            $totalPoints = 1000;
            $points = DB::table('points')->select('points',DB::raw('SUM(points) as totalPoints'))->groupBy('points')
                ->where('area_id', $key+1)
               ->get();
            foreach($points as $point) {
                $totalPoints += $point->points;
            }
            $areapoints[$area] = $totalPoints;
        }
        return $areapoints;
    }
    private function getPointsText(){
        $areaPointText = array();
        $areas = $this->getAreas();

        foreach ($areas as $key => $area) {
            $pointsummaries = DB::table('points')
                ->select('points', 'body')
                ->where('area_id', $key+1)
                ->orderBy('id', 'desc')
                ->take(10)
                ->get();
            $areaPointText[$area] = $pointsummaries;
        }
        return $areaPointText;

    }
    private function getAreas(){
        $areas = DB::table('areas')->pluck('name');
        return $areas;
    }
    public function points() {
       $areas = $this->getAreas();
        return view('thegame.givepoints',compact('areas'));
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

        $points->givepoints(request());
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
