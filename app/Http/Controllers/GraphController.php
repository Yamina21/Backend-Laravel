<?php

namespace App\Http\Controllers;

use App\Models\Graph;
use DB;
use Illuminate\Http\Request;
 
class GraphController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $graphs = DB::select('Select * from graphs order by name desc');
      return view('graphs.index')->with('Graphs', $graphs);

    }

    public function create()
        {
            return view('graphs.create');
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

               'name' => 'required',
               'description' => 'required'
             ]);
             $graph= new Graph();
             $graph->name= $request ->input('name');
             $graph->description= $request->input('description');
             $graph->save();

             return redirect('/api/graphs')->with('success', 'Graph Created.');

     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $graph=  Graph::find($id);
      return view('graphs.show')->with('graph',$graph);

     }


    public function edit($id)
    {
        $graph=  Graph::find($id);
       return view('graphs.edit')->with('graph',$graph);

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

        'name' => 'required',
        'description' => 'required'
      ]);
      $graph= Graph::find($id);
      $graph->name= $request ->input('name');
      $graph->description= $request->input('description');
      $graph->save();

       return redirect('/api/graphs')->with('success', 'graph Updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Graph::destroy($id);
      return redirect('/api/graphs')->with('success', 'Graph removed.');

    }
    public function search($name)
  {
      return Graph::where('name', 'like', '%'.$name.'%')->get();

  }
}
