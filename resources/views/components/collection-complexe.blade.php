<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseComplexe"
    aria-expanded="false" aria-controls="multiCollapseComplexe">
    <h4>Complexe</h4>
</button>
<div class="row">
    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseComplexe">
            <pre>
    <code class="language-php">
        // define complexe collection
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

        Illuminate\Support\Collection {#423 ▼
            #items: array:4 [▼
              0 => array:8 [▼
                "name" => "php"
                0 => "python"
                1 => "javascript"
                2 => "go"
                3 => "c#"
                4 => "java"
                5 => "cobol"
                6 => "basic"
              ]
              1 => array:4 [▼
                0 => -2
                1 => 200.3
                2 => -7.8
                3 => 400.1
              ]
              2 => array:3 [▼
                "ref" => "XZ42"
                "price" => 200.7
                "tags" => array:2 [▼
                  0 => "red"
                  1 => "new"
                ]
              ]
              "totalprice" => 422
            ]
          }
    </code>
</pre>
        </div>
    </div>
</div>
