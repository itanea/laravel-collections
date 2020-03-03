<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\LazyCollection;
// use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use ReflectionClass;
use ReflectionMethod;

class HomeController extends BaseController
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $languages;
    public $numbers;
    public $complexe;
    public $level;
    public $oneorzero;
    public $nested;


    public function __construct() {
        // Data set #1 : programming languages
        $this->languages = $languages = collect([
            'php',
            'python',
            'javascript',
            'go',
            'c#',
            'java',
            'cobol',
            'basic'
        ]);

        // Data set #2 : numbers
        $this->numbers = collect([-2, 200.3, -7.8, 400.1]);

        // Data set #3 : complex collection
        $this->complexe = collect(
            [
                ['name' => 'php',
                'python',
                'javascript',
                'go',
                'c#',
                'java',
                'cobol',
                'basic'],
                [-2, 200.3, -7.8, 400.1],
                ['ref' => 'XZ42', 'price' => 200.7, 'tags' => ['red', 'new']],
                'totalprice' => 422
            ]
        );

        // Data set #4 : levels
        $this->level = collect([
            'expert',
            'normal',
            'normal',
            'newbie',
            'newbie',
            'normal',
            'newbie',
            'expert'
            ]
        );

        // Data set #5 : boolean
        $this->oneorzero = collect([
            true,
            false
        ]);

        // Data set #6 : nested
        $this->nested = collect([
            ['name' => 'Spaghetti à la carbonara', 'level' => 'Moyen', 'price' => 'Economique', 'type' => 'Pâtes'],
            ['name' => 'Loup entier grillé', 'level' => 'Chef', 'price' => 'Cher', 'type' => 'Poisson'],
            ['name' => 'Gnocchi au pesto', 'level' => 'Facile', 'price' => 'Economique', 'type' => 'Pâtes'],
            ['name' => 'Daurade vapeur et ses pommes de terre', 'level' => 'Moyen', 'price' => 'Moyen', 'type' => 'Poisson'],
            ['name' => 'Dame blanche', 'level' => 'Moyen', 'price' => 'Moyen', 'type' => 'Dessert'],
            ['name' => 'Banana Split', 'level' => 'Chef', 'price' => 'Cher', 'type' => 'Dessert'],
            ['name' => 'Coupe Colonel', 'level' => 'Facile', 'price' => 'Economique', 'type' => 'Dessert'],
        ]);
    }


    public function index()
    {
        $class = new ReflectionClass($this);
        $datas = collect($class->getMethods(ReflectionMethod::IS_PUBLIC))
                    ->reject(function ($value, $key)
                        {
                            $rejectedArray = ['__construct', 'index','middleware','getMiddleware', 'callAction', '__call'];
                            return in_array($value->name, $rejectedArray);
                        });
        // dump($data);
        return view('home.index')->with('datas', $datas);
    }

    /**
     * Demo all() method
     */
    public function all() {
        return view('home.all',['languages' => $this->languages]);
    }

    /**
     * Demo avg() method
     */
    public function avg() {
        return view('home.avg',['numbers' => $this->numbers]);
    }

    /**
     * Demo average() method
     */
    public function average() {
        return view('home.average',['numbers' => $this->numbers]);
    }

    /**
     * Demo chunk() method
     */
    public function chunk() {
        return view('home.chunk',['languages' => $this->languages]);
    }

    /**
     * Demo collapse() method
     */
    public function collapse() {
        return view('home.collapse',['collection' => $this->complexe]);
    }

    /**
     * Demo collect() method
     */
    public function collect() {
        return view('home.collect');
    }

    /**
     * Demo combine() method
     */
    public function combine() {
        return view('home.combine',['collection' => ['languages' => $this->languages, 'level' => $this->level]]);
    }

    /**
     * Demo concat() method
     */

    public function concat() {
        return view('home.concat', [
            'languages' => $this->languages,
            'level' => $this->level,
            'numbers' => $this->numbers,
            'complexe' => $this->complexe
        ]);
    }

    /**
     * Demo contains() method
     */
    public function contains() {
        return view('home.contains', [
            'languages' => $this->languages,
            'complexe' => $this->complexe,
            'numbers' => $this->numbers,
            'oneorzero' => $this->oneorzero
        ]);
    }

    /**
     * Demo containsStrict() method
     */
    public function containsStrict() {
        return view('home.containsStrict', [
            'oneorzero' => $this->oneorzero
        ]);
    }

    public function count()
    {
        return view('home.count',['languages' => $this->languages]);

    }

    /**
     * Demo countBy() method
     */
    public function countby() {
        return view('home.countby',['level' => $this->level]);
    }


    /**
     * Demo crossJoin() method
     */
    public function crossjoin()
    {
        return view('home.crossJoin', ['languages' => $this->languages, 'level' => $this->level]);
    }

    /**
     * Demo dd() method
     */
    public function dd()
    {
        return view('home.dd', ['languages' => $this->languages]);
    }

    /**
     * Demo dump() method
     */
    public function dump()
    {
        return view('home.dump', ['languages' => $this->languages]);
    }

    /**
     * Demo duplicates() method
     */
    public function duplicates()
    {
        return view('home.duplicates', ['level' => $this->level, 'nested' => $this->nested]);
    }

    /**
     * Demo duplicatesStrict() method
     */
    public function duplicatesStrict()
    {
        return view('home.duplicatesStrict', ['level' => $this->level, 'nested' => $this->nested]);
    }

    /**
     * Demo each() method
     */
    public function each()
    {
        return view('home.each', ['languages' => $this->languages]);
    }

    /**
     * Demo reject() method
     */
    public function reject()
    {
        return view('home.reject', ['numbers' => $this->numbers]);
    }

    /**
     * Demo unique() method
     */
    public function unique()
    {
        return view('home.unique', ['level' => $this->level, 'nested' => $this->nested]);
    }

    /**
     * Demo uniqueStrict() method
     */
    public function uniqueStrict()
    {
        $strictCollection = collect([1,3,1,12,3,12,'1','12','13']);
        return view('home.uniqueStrict', ['strictCollection' => $strictCollection]);
    }
}
