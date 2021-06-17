<?php

namespace App\Http\Controllers;

use App\Models\Relation;
use DB;

use Illuminate\Http\Request;

class RelationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $nodes_parent = DB::select('Select * from relations INNER JOIN nodes   ON nodes.id  = relations.parent_node');

      return view('relations.index')->with('nodes_parent', $nodes_parent);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[

               'parent_node' => 'required',
               'child_node' => 'required'
             ]);
             $relation= new Relation();
             $relation->parent_node= $request ->input('parent_node');
             $relation->child_node= $request->input('child_node');
             $graph->save();

             return redirect('/api/relations')->with('success', 'relation Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $relation =  Relation::find($id);
      return view('relations.show')->with('relation',$relation);
    }


    public function edit($id)
    {
      $relation =  relation::find($id);
     return view('relations.edit')->with('relation',$relation);

     }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

     $this->validate($request,[

       'parent_node' => 'required',
       'child_node' => 'required'
     ]);
     $relation= Node::find($id);
     $relation->parent_node= $request ->input('parent_node');
     $relation->child_node= $request->input('child_node');
     $graph->save();

      return redirect('/api/relations')->with('success', 'relation Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Relation::destroy($id);
    return redirect('/api/relations')->with('success', 'relation removed.');

    }
}
