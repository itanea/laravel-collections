<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseNested"
    aria-expanded="false" aria-controls="multiCollapseNested">
    <h4>Imbriquée (Nested)</h4>
</button>
<div class="row">
    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseNested">
            <pre>
    <code class="language-php">
        // define nested collection
        $this->nested = collect([
            ['name' => 'Spaghetti à la carbonara', 'level' => 'Moyen', 'price' => 'Economique', 'type' => 'Pâtes'],
            ['name' => 'Loup entier grillé', 'level' => 'Chef', 'price' => 'Cher', 'type' => 'Poisson'],
            ['name' => 'Gnocchi au pesto', 'level' => 'Facile', 'price' => 'Economique', 'type' => 'Pâtes'],
            ['name' => 'Daurade vapeur et ses pommes de terre', 'level' => 'Moyen', 'price' => 'Moyen', 'type' => 'Poisson'],
            ['name' => 'Dame blanche', 'level' => 'Moyen', 'price' => 'Moyen', 'type' => 'Dessert'],
            ['name' => 'Banana Split', 'level' => 'Chef', 'price' => 'Cher', 'type' => 'Dessert'],
            ['name' => 'Coupe Colonel', 'level' => 'Facile', 'price' => 'Economique', 'type' => 'Dessert'],
        ]);

        Illuminate\Support\Collection {#440 ▼
            #items: array:7 [▼
              0 => array:4 [▼
                "name" => "Spaghetti à la carbonara"
                "level" => "Moyen"
                "price" => "Economique"
                "type" => "Pâtes"
              ]
              1 => array:4 [▼
                "name" => "Loup entier grillé"
                "level" => "Chef"
                "price" => "Cher"
                "type" => "Poisson"
              ]
              2 => array:4 [▼
                "name" => "Gnocchi au pesto"
                "level" => "Facile"
                "price" => "Economique"
                "type" => "Pâtes"
              ]
              3 => array:4 [▼
                "name" => "Daurade vapeur et ses pommes de terre"
                "level" => "Moyen"
                "price" => "Moyen"
                "type" => "Poisson"
              ]
              4 => array:4 [▼
                "name" => "Dame blanche"
                "level" => "Moyen"
                "price" => "Moyen"
                "type" => "Dessert"
              ]
              5 => array:4 [▼
                "name" => "Banana Split"
                "level" => "Chef"
                "price" => "Cher"
                "type" => "Dessert"
              ]
              6 => array:4 [▼
                "name" => "Coupe Colonel"
                "level" => "Facile"
                "price" => "Economique"
                "type" => "Dessert"
              ]
            ]
          }
    </code>
</pre>
        </div>
    </div>
</div>
