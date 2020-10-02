    <div id="products" class="container-fluid">
        <div class="container-lg">
            <div class="row p_h1">
                <h1>Our Plans</h1>
            </div>
            {for $i = 1 to count($plans) step=3}
                {$y = $i + 2}
                <div class="row product_row">
                    {for $x= $i to $y}
                        <div class="col-md-4 product py-3">
                            <p class="product_name">{$plans[$x]['name']}</p>
                            <p>{$plans[$x]['description']}</p>
                            <a href={$plans[$x]['link']}>Read More 
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                            </svg>
                            </a>
                        </div>
                    {/for}
                </div>
            {/for}
       </div>
    </div>