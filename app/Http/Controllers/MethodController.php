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
        $this->middleware('auth')->except('show');
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
        $response = Gate::inspect('view-methods');

        if ($response->allowed()) {
            return view('methods.create');
        } else{
            $message = $response->message();
            return view('error.admin', compact('message'));
        }
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

        for ($i=0; $i < 9; $i++) {
            if(!is_null($request->input("exemple-$i")))
            {
                $collections = $request->input("collections-$i");
                if(!empty($collections)) {
                    $collectionsInLine = implode(',', $collections);
                } else {
                    $collectionsInLine = '';
                }
                $source = new Source();
                $source->method_id = $methodId->id;
                $source->name = $request->input("exemple-name-$i");
                if(!empty($collections)) {
                    $source->comment = $this->getSources($collections) . PHP_EOL . $request->input("exemple-$i");
                } else {
                    $source->comment = $request->input("exemple-$i");
                }
                $source->order = $i;
                $source->collections = $collectionsInLine;
                $source->save();
            }
            # code...
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

    /**
     *
     */
    public function getSources (Array $sources)
    {
        $result = '';
        foreach ($sources as $key => $value) {
            $functionName = 'get' . ucfirst($value) . 'Source';
            $result .= $this->$functionName() . PHP_EOL;
        }
        return $result;
    }

    public function getLanguagesSource()
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

    public function getNumbersSource()
    {
        return '$numbers = collect([-2, 200.3, -7.8, 400.1]);';
    }


    public function getOneorzeroSource()
    {
        return '$oneorzero = collect([
            true,
            false
        ]);';
    }

    public function getLevelSource()
    {
        return '$level = collect([
            "expert",
            "normal",
            "normal",
            "newbie",
            "newbie",
            "normal",
            "newbie",
            "expert"
            ]
        );';

    }

    public function getNestedSource()
    {
        return '$nested = collect([
            ["name" => "Spaghetti à la carbonara", "level" => "Moyen", "price" => "Economique", "type" => "Pâtes"],
            ["name" => "Loup entier grillé", "level" => "Chef", "price" => "Cher", "type" => "Poisson"],
            ["name" => "Gnocchi au pesto", "level" => "Facile", "price" => "Economique", "type" => "Pâtes"],
            ["name" => "Daurade vapeur et ses pommes de terre", "level" => "Moyen", "price" => "Moyen", "type" => "Poisson"],
            ["name" => "Dame blanche", "level" => "Moyen", "price" => "Moyen", "type" => "Dessert"],
            ["name" => "Banana Split", "level" => "Chef", "price" => "Cher", "type" => "Dessert"],
            ["name" => "Coupe Colonel", "level" => "Facile", "price" => "Economique", "type" => "Dessert"],
        ]);';
    }

    public function getImprovednestedSource()
    {
        return '$improvedNested = collect([
            ["Spaghetti à la carbonara", "Moyen", 15.75, 5.5],
            ["Loup entier grillé", "Chef", 30, 7],
            ["Coupe Colonel", "Facile", 7.5, 12.5],
        ]);';
    }

    public function getComplexeSource()
    {
        return '$complexe = collect(
            [
                ["name" => "php",
                "python",
                "javascript",
                "go",
                "c#",
                "java",
                "cobol",
                "basic"],
                [-2, 200.3, -7.8, 400.1],
                ["ref" => "XZ42", "price" => 200.7, "tags" => ["red", "new"]],
                "totalprice" => 422
            ]
        );';

    }
}
