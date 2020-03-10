<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseLevel"
    aria-expanded="false" aria-controls="multiCollapseLevel">
    <h4>Level</h4>
</button>
<div class="row">
    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseLevel">
            <pre>
    <code class="language-php">
        // define Level collection
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

        Illuminate\Support\Collection {#422 ▼
            #items: array:8 [▼
              0 => "expert"
              1 => "normal"
              2 => "normal"
              3 => "newbie"
              4 => "newbie"
              5 => "normal"
              6 => "newbie"
              7 => "expert"
            ]
          }
    </code>
</pre>
        </div>
    </div>
</div>
