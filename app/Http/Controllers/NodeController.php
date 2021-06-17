<?php

namespace App\Http\Controllers;

use App\Models\Node;
use DB;

use Illuminate\Http\Request;

class NodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
       $nodes = DB::select('Select * from nodes ');
       return view('nodes.index')->with('nodes', $nodes);
     }


     public function create()
         {
             return view('nodes.create');
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

                'Graph_id' => 'required'
               ]);
              $node = new Node();
              $node->Graph_id = $request->input('graph_id');
              $node->save();

              return redirect('/api/nodes')->with('success', 'Node Created.');

     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
       $node=  Node::find($id);
       return view('nodes.show')->with('node',$node);
     }



     public function edit($id)
     {
         $node=  Node::find($id);
        return view('nodes.edit')->with('node',$node);

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

         'Graph_id' => 'required'
        ]);
       $node= Node::find($id);
       $node->Graph_id= $request ->input('graph_id');
       $node->save();

        return redirect('/api/nodes')->with('success', 'Node Updated.');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
       nodes::destroy($id);
     return redirect('/api/nodes')->with('success', 'node removed.');
     }
}
