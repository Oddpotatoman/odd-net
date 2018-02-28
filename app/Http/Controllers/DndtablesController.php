<?php

namespace App\Http\Controllers;

use App\Dndroll;
use App\Dndtable;

use Illuminate\Http\Request;

class DndtablesController extends Controller
{
    public function index(){
        return view('dnd.index',['tables' => Dndtable::all()]);
    }
    public function view($id){
        $table = Dndtable::find($id);
        $rolls = $table->dndrolls;

        if($table->previous_table != null){
            $previousTable = Dndtable::find($table->previous_table);
        } else {
            $previousTable = null;
        }
        if($table->next_table != null){
            $nextTable = Dndtable::find($table->next_table);
        } else {
            $nextTable = null;
        }

        return view('dnd.view',['rolls' => $rolls, 'table' => $table, 'nextTable' => $nextTable, 'previousTable' => $previousTable]);
    }
    public function add(){
        $tables = Dndtable::all();
        return view('dnd.add', compact('tables'));
    }
    public function addImportedTable(Request $request){

        if(Dndtable::where('tableName', $request->input('tableName'))->first() == null){
            if($request->hasFile('table')) {
                if ($request->input('nextTable') == 'Choose...'){
                    $nextTable = null;
                }else {
                   $nextTable = explode('_',$request->input('nextTable'))[0];
                }
                if ($request->input('previousTable') == 'Choose...'){
                    $previousTable = null;
                }else {
                   $previousTable = explode('_',$request->input('previousTable'))[0];
                }


                Dndtable::create([
                   'tableName' => $request->input('tableName'),
                    'from' => $request->input('tableRef'),
                    'previous_table' => $previousTable,
                    'next_table' => $nextTable
                ]);
                $table = Dndtable::where('tableName', $request->input('tableName'))->first()->id;

                if ($nextTable != null) {
                    $nextTableData = Dndtable::find($nextTable);
                    $nextTableData->previous_table = $table;
                    $nextTableData->save();
                }
                if ($previousTable != null) {
                    $previousTableData = Dndtable::find($previousTable);
                    $previousTableData->next_table = $table;
                    $previousTableData->save();
                }

                $file = $request->file('table');
                $content = file_get_contents($file);
                $tableArray = array();
                $content2 = fopen($file,'r');
                while (!feof($content2)){
                    $line = fgets($content2);
                    $line = preg_replace('/[0-9]+/', '', $line);
                    $line = trim(preg_replace('/\s+/', ' ', $line));

                    Dndroll::create([
                        'dndtable_id' => $table,
                        'text' => $line
                    ]);
                    $tableArray[] = $line;


                }

                return redirect('/dndtables');
            }
        } else {
            dd('The name has already been taken, please check /dndtables to see if you can find your table');
        }
    }
}
