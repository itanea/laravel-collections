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

        // Data set #7 : nested improved
        $this->nestedImproved = collect([
            ['Spaghetti à la carbonara', 'Moyen', 15.75, 5.5],
            ['Loup entier grillé', 'Chef', 30, 7],
            ['Coupe Colonel', 'Facile', 7.5, 12.5],
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
        return view('home.index')->with('datas', $datas);
    }

    /**
     * Dans les collections de Laravel, il y a des fonctions relativement basiques, celle-ci en est une. Elle te retourne un tableau avec tous les éléments de la collections.
     */
    public function all() {
        return view('home.all',['languages' => $this->languages]);
    }

    /**
     * average() est un alias d'avg() ou c'est l'inverse, ou c'est vice et versa. Bref, c'est la même chose. Tu ne me cherches pas toi t'as compris ?
     */
    public function avg() {
        return view('home.avg',['numbers' => $this->numbers]);
    }

    /**
     * average() est un alias d'avg() ou c'est l'inverse, ou c'est vice et versa. Bref, c'est la même chose. Tu ne me cherches pas toi t'as compris ?
     */
    public function average() {
        return view('home.average',['numbers' => $this->numbers]);
    }

    /**
     * Chunk se traduit en français par 'morceau'. Tu devines donc que cette méthode va nous permettre de découper notre collection en morceaux.
     */
    public function chunk() {
        return view('home.chunk',['languages' => $this->languages]);
    }

    /**
     * La méthode collapse() peut inverser le résultat de la méthode chunk.
     */
    public function collapse() {
        return view('home.collapse',['collection' => $this->complexe]);
    }

    /**
     * Si tu as bien suivi jusqu'à présent, tu sais déjà que la méthode collect permet d'initier une nouvelle collection en lieu et place d'un new Collection(); ou de copier le contenu d'une collection existante vers une autre.
     */
    public function collect() {
        return view('home.collect');
    }

    /**
     * Cette méthode va te permettre de combiner plusieurs collections entre elles.
     */
    public function combine() {
        return view('home.combine',['collection' => ['languages' => $this->languages, 'level' => $this->level]]);
    }

    /**
     * La méthode concat va te permettre de raccrocher une collection à une autre tout simplement.
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
     * A présent disons que tu as besoin de vérifier qu'une donnée est bien présente dans ta collection. Grâce à la méthode contains tu vas pouvoir effectuer cette vérification.
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
     * Si tu souhaites mettre en place une comparaison stricte, il te faudra utiliser la méthode containsStrict.
     */
    public function containsStrict() {
        return view('home.containsStrict', [
            'oneorzero' => $this->oneorzero
        ]);
    }

    /**
     * La méthode count fait partie de ces méthodes très simples et très utiles dont je t'ai parlé au début de cet article. Elle fait simplement et exactement ce que l'on attends d'elle, c'est à dire compter le nombre d'éléments présents dans une collection.
     */
    public function count()
    {
        return view('home.count',['languages' => $this->languages]);

    }

    /**
     * CountBy va te permettre de comptabiliser les éléments identiques.
     */
    public function countby() {
        return view('home.countby',['level' => $this->level]);
    }


    /**
     * Tu te rappelles de tes cours de maths où on te parlait des produits cartésiens et la tête que tu faisais ?
     */
    public function crossjoin()
    {
        return view('home.crossJoin', ['languages' => $this->languages, 'level' => $this->level]);
    }

    /**
     * La méthode dd (Dump and Die) retourne tout simplement le contenu d'une collection et interrompt l'exécution du script en cours.
     */
    public function dd()
    {
        return view('home.dd', ['languages' => $this->languages]);
    }

    /**
     * La méthode dump() effectue la même chose que la méthode dd(), à ceci prêt que dump() ne stoppe pas l'exécution du programme en cours.
     */
    public function dump()
    {
        return view('home.dump', ['languages' => $this->languages]);
    }

    /**
     * La méthode duplicates() va te rendre, je suis prêt à le parier, de grands services. Imagines ton boss arrive furax (on ne sait pas trop pourquoi et lui sans doute pas plus que nous :D) et il te dit
     */
    public function duplicates()
    {
        return view('home.duplicates', ['level' => $this->level, 'nested' => $this->nested]);
    }

    /**
     * La méthode duplicatesStrict() c'est la même tambouille que la méthode duplicates() sauf que comme pour les autres méthodes strict la comparaison s'effectue en plus sur le type.
     */
    public function duplicatesStrict()
    {
        return view('home.duplicatesStrict', ['level' => $this->level, 'nested' => $this->nested]);
    }

    /**
     * La méthode va te permettre de parcourir tous les items d'une collection et de transmettre chacun de ces items à une fonction anonyme de callback. Du grand classique donc ! Du travail pour les Shadoks !
     */
    public function each()
    {
        return view('home.each', ['languages' => $this->languages]);
    }

    /**
     * Demo eachSpread() method
     */
    public function eachSpread()
    {
        return view('home.eachSpread', ['nestedImproved' => $this->nestedImproved]);
    }

    /**
     * Demo every() method
     */
    public function every()
    {
        return view('home.every', ['languages' => $this->languages, 'complexe' => $this->complexe]);
    }

    /**
     * Tu as besoin de supprimer quelques éléments de ta collection en fonction de certains critères ? Reject est la méthode qui va pouvoir t'y aider.
     */
    public function reject()
    {
        return view('home.reject', ['numbers' => $this->numbers]);
    }

    /**
     * La méthode unique() va te permettre de récupérer tous les éléments unique d'une collection. Quand je te le dis comme cela, ça parait simple ! Mais c'est en fait un peu plus complexe que cela.
     */
    public function unique()
    {
        return view('home.unique', ['level' => $this->level, 'nested' => $this->nested]);
    }

    /**
     * Comme pour contains() et containsStrict(), uniqueStrict() est la même fonction que unique() à la seule différence que les comparaisons effectuées au cœur de la fonction le sont avec la vérification du type.
     */
    public function uniqueStrict()
    {
        $strictCollection = collect([1,3,1,12,3,12,'1','12','13']);
        return view('home.uniqueStrict', ['strictCollection' => $strictCollection]);
    }
}
