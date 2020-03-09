<?php

namespace App\Http\Controllers;


use App\Method;
use App\Source;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Method as MethodRequest;

class MethodController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $response = Gate::inspect('view-methods');
        if ($response->allowed()) {
            // The action is authorized...
            $methods = Method::paginate(5);
            return view('methods.index', compact('methods'));
        } else {
            $message = $response->message();
            return view('error.admin', compact('message'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('methods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MethodRequest $request)
    {

        // Automatically determine slug from method name
        $request['slug'] = Str::slug($request->input('name'));

        $methodId = Method::create($request->all());


        if(!is_null($request->input('exemple-1')))
        {
            $collections = $request->input('collections-1');
            $collections = implode(',', $collections);
            $source1 = new Source();
            $source1->method_id = $methodId->id;
            $source1->name = $request->input('exemple-name-1');
            $source1->comment = $this->getLanguagesSource() . PHP_EOL . $request->input('exemple-1');
            $source1->order = 1;
            $source1->collections = $collections;
            $source1->save();
        }

        if(!is_null($request->input('exemple-2')))
        {
            $source2 = new Source();
            $source2->method_id = $methodId->id;
            $source2->name = $request->input('exemple-name-2');
            $source2->comment = $request->input('exemple-2');
            $source2->order = 2;
            $source2->save();
        }

        if(!is_null($request->input('exemple-3')))
        {
            $source3 = new Source();
            $source3->method_id = $methodId->id;
            $source3->name = $request->input('exemple-name-3');
            $source3->comment = $request->input('exemple-3');
            $source3->order = 3;
            $source3->save();
        }

        if(!is_null($request->input('exemple-4')))
        {
            $source1 = new Source();
            $source1->method_id = $methodId->id;
            $source1->name = $request->input('exemple-name-4');
            $source1->comment = $request->input('exemple-4');
            $source1->order = 4;
            $source1->save();
        }

        if(!is_null($request->input('exemple-5')))
        {
            $source2 = new Source();
            $source2->method_id = $methodId->id;
            $source2->name = $request->input('exemple-name-5');
            $source2->comment = $request->input('exemple-5');
            $source2->order = 5;
            $source2->save();
        }

        if(!is_null($request->input('exemple-6')))
        {
            $source3 = new Source();
            $source3->method_id = $methodId->id;
            $source3->name = $request->input('exemple-name-6');
            $source3->comment = $request->input('exemple-6');
            $source3->order = 6;
            $source3->save();
        }

        if(!is_null($request->input('exemple-7')))
        {
            $source1 = new Source();
            $source1->method_id = $methodId->id;
            $source1->name = $request->input('exemple-name-7');
            $source1->comment = $request->input('exemple-7');
            $source1->order = 7;
            $source1->save();
        }

        if(!is_null($request->input('exemple-8')))
        {
            $source2 = new Source();
            $source2->method_id = $methodId->id;
            $source2->name = $request->input('exemple-name-8');
            $source2->comment = $request->input('exemple-8');
            $source2->order = 8;
            $source2->save();
        }

        if(!is_null($request->input('exemple-9')))
        {
            $source3 = new Source();
            $source3->method_id = $methodId->id;
            $source3->name = $request->input('exemple-name-9');
            $source3->comment = $request->input('exemple-9');
            $source3->order = 9;
            $source3->save();
        }
        return redirect()->route('methods.index')->with('info', 'La méthode a bien été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Method $method)
    {
        $sources = $method->sources;
        return view('methods.show', compact('method', 'sources'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function getLanguagesSource ()
    {
        return '$languages = collect([
            "php",
            "python",
            "javascript",
            "go",
            "c#",
            "java",
            "cobol",
            "basic"
            ]);';
    }
}
