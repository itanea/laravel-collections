<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseNumbers"
    aria-expanded="false" aria-controls="multiCollapseNumbers">
    <h4>Numbers</h4>
</button>
<div class="row">
    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseNumbers">
            <pre>
                <code class="language-php">
                    // define collection numbers
                    $numbers = collect([-2, 200.3, -7.8, 400.1]);

                    Illuminate\Support\Collection {#416 ▼
                        #items: array:4 [▼
                          0 => -2
                          1 => 200.3
                          2 => -7.8
                          3 => 400.1
                        ]
                      }
                </code>
            </pre>
        </div>
    </div>
</div>
