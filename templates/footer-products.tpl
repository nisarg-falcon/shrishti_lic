<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer_product.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Test</title>
</head>
<body>
    <div class="container-fluid" id="products">
        <div class="container-lg">
            <div class="row product-active">
            <a class="btn-txt">Products</a>
            </div>
            <div class="row products">
                <button class="btn btn-primary plan-btn" type="button" data-toggle="collapse" data-target="#products_pills" aria-expanded="false" aria-controls="collapseExample">
                    <a class="btn-txt">Products </a>   <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" >
                        <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                      </svg>
                </button>
                <div class="nav flex-column nav-pills collapse" id="products_pills" role="tablist" aria-orientation="vertical">
                    {foreach from=$plan_links key=key item=nav_link}
                        {if $key == 0}
                            <a href={$nav_link["link"]} id={$nav_link["id"]} class="nav-link active">{$nav_link["name"]}</a>
                        {else}
                            <a href={$nav_link["link"]} id={$nav_link["id"]} class="nav-link">{$nav_link["name"]}</a>
                        {/if}
                        
                        {/foreach}
                </div>
                <div class="tab-content" id="products_content">
                    
                    {foreach from=$plans key=key item=plan}
                        {if $key == 0}
                            <div class="tab-pane otr-div   fade show active" id={$plan["id"]} role="tabpanel">
                                <div class={$plan["id"]|cat:"_tab"}>
                                        <nav>
                                            <div class="nav nav-tabs" id={$plan["nav_id"]} role="tablist">
                                                <a href={$plan["navs_id"]["plan_id"]} id="plan1" class="nav-item nav-link active" data-toggle="tab" role="tab">Plan</a>
                                                <a href={$plan["navs_id"]["form_id"]} id="plan2" class="nav-item nav-link " data-toggle="tab" role="tab">Enquiry</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id={$plan["id"]|cat:"_tab_content"}>
                                            <div class="tab-pane fade show active" id={$plan["plan_content"]["plan_id"]} role="tabpanel">
                                                {$plan["plan_content"]["content"]}
                                            </div>
                                            <div class="tab-pane fade " id={$plan["plan_content"]["form_id"]} role="tabpanel">
                                            <form>
                                                <h3>Enquiry Form</h3>
                                                <div class="form-group">
                                                    <label for="name"> Full Name</label>
                                                    <input type="text" name="name" class="form-control" placeholder="John Parker">
                                                    <div class="alert alert-danger my-2 name-error"></div> 
                                                </div>
                                                <div class="form-group">
                                                        <label for="mail">Email Address</label>
                                                        <input type="email" name="mail" class="form-control" placeholder="mail@example.com">
                                                        <div class="alert alert-danger my-2 mail-error"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="number">Phone Number</label>
                                                        <input type="tel" name="number" class="form-control" placeholder="Contact No." >
                                                        <div class="alert alert-danger my-2 contact-error"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="number">Plan</label>
                                                        <input type="text" name="plan" readonly class="form-control" value={$plan["plan_content"]["form_name"]} >
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-primary" >
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        {/if}
                        <div class="tab-pane otr-div fade show" id={$plan["id"]} role="tabpanel">
                            <div class={$plan["id"]|cat:"_tab"}>
                                    <nav>
                                        <div class="nav nav-tabs" id={$plan["nav_id"]} role="tablist">
                                            <a href={$plan["navs_id"]["plan_id"]} id="plan1" class="nav-item nav-link active" data-toggle="tab" role="tab">Plan</a>
                                            <a href={$plan["navs_id"]["form_id"]} id="plan2" class="nav-item nav-link " data-toggle="tab" role="tab">Enquiry</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id={$plan["id"]|cat:"_tab_content"}>
                                        <div class="tab-pane fade show active" id={$plan["plan_content"]["plan_id"]} role="tabpanel">
                                            {$plan["plan_content"]["content"]}
                                        </div>
                                        <div class="tab-pane fade " id={$plan["plan_content"]["form_id"]} role="tabpanel">
                                        <form>
                                            <h3>Enquiry Form</h3>
                                            <div class="form-group">
                                                <label for="name"> Full Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="John Parker">
                                                <div class="alert alert-danger my-2 name-error"></div> 
                                            </div>
                                            <div class="form-group">
                                                    <label for="mail">Email Address</label>
                                                    <input type="email" name="mail" class="form-control" placeholder="mail@example.com">
                                                    <div class="alert alert-danger my-2 mail-error"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="number">Phone Number</label>
                                                    <input type="tel" name="number" class="form-control" placeholder="Contact No." >
                                                    <div class="alert alert-danger my-2 contact-error"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="number">Plan</label>
                                                    <input type="text" name="plan" readonly class="form-control" value={$plan["plan_content"]["form_name"]} >
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-primary" >
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/product.js"></script>
</body>
</html>