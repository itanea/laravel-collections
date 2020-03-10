<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseImprovednested"
    aria-expanded="false" aria-controls="multiCollapseImprovednested">
    <h4>Improved Nested</h4>
</button>
<div class="row">
    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseImprovednested">
            <pre>
    <code class="language-php">
        // define improved nested collection
        $this->nestedImproved = collect([
            ['Spaghetti à la carbonara', 'Moyen', 15.75, 5.5],
            ['Loup entier grillé', 'Chef', 30, 7],
            ['Coupe Colonel', 'Facile', 7.5, 12.5],
        ]);

        Illuminate\Support\Collection {#437 ▼
            #items: array:3 [▼
              0 => array:4 [▼
                0 => "Spaghetti à la carbonara"
                1 => "Moyen"
                2 => 15.75
                3 => 5.5
              ]
              1 => array:4 [▼
                0 => "Loup entier grillé"
                1 => "Chef"
                2 => 30
                3 => 7
              ]
              2 => array:4 [▼
                0 => "Coupe Colonel"
                1 => "Facile"
                2 => 7.5
                3 => 12.5
              ]
            ]
          }
    </code>
</pre>
        </div>
    </div>
</div>
