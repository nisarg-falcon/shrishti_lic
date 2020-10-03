<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-03 16:17:42
  from '/Applications/XAMPP/xamppfiles/htdocs/shrishti_lic/templates/footer-products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f78880690b106_40868117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfdda039fa9fa8a9085c32a481541557119d4a6d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/shrishti_lic/templates/footer-products.tpl',
      1 => 1601734660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f78880690b106_40868117 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plan_links']->value, 'nav_link', false, 'key');
$_smarty_tpl->tpl_vars['nav_link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['nav_link']->value) {
$_smarty_tpl->tpl_vars['nav_link']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>
                            <a href=<?php echo $_smarty_tpl->tpl_vars['nav_link']->value["link"];?>
 id=<?php echo $_smarty_tpl->tpl_vars['nav_link']->value["id"];?>
 class="nav-link active"><?php echo $_smarty_tpl->tpl_vars['nav_link']->value["name"];?>
</a>
                        <?php } else { ?>
                            <a href=<?php echo $_smarty_tpl->tpl_vars['nav_link']->value["link"];?>
 id=<?php echo $_smarty_tpl->tpl_vars['nav_link']->value["id"];?>
 class="nav-link"><?php echo $_smarty_tpl->tpl_vars['nav_link']->value["name"];?>
</a>
                        <?php }?>
                        
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="tab-content" id="products_content">
                    
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plans']->value, 'plan', false, 'key');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>
                            <div class="tab-pane otr-div   fade show active" id=<?php echo $_smarty_tpl->tpl_vars['plan']->value["id"];?>
 role="tabpanel">
                                <div class=<?php echo ($_smarty_tpl->tpl_vars['plan']->value["id"]).("_tab");?>
>
                                        <nav>
                                            <div class="nav nav-tabs" id=<?php echo $_smarty_tpl->tpl_vars['plan']->value["nav_id"];?>
 role="tablist">
                                                <a href=<?php echo $_smarty_tpl->tpl_vars['plan']->value["navs_id"]["plan_id"];?>
 id="plan1" class="nav-item nav-link active" data-toggle="tab" role="tab">Plan</a>
                                                <a href=<?php echo $_smarty_tpl->tpl_vars['plan']->value["navs_id"]["form_id"];?>
 id="plan2" class="nav-item nav-link " data-toggle="tab" role="tab">Enquiry</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id=<?php echo ($_smarty_tpl->tpl_vars['plan']->value["id"]).("_tab_content");?>
>
                                            <div class="tab-pane fade show active" id=<?php echo $_smarty_tpl->tpl_vars['plan']->value["plan_content"]["plan_id"];?>
 role="tabpanel">
                                                <?php echo $_smarty_tpl->tpl_vars['plan']->value["plan_content"]["content"];?>

                                            </div>
                                            <div class="tab-pane fade " id=<?php echo $_smarty_tpl->tpl_vars['plan']->value["plan_content"]["form_id"];?>
 role="tabpanel">
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
                                                        <input type="text" name="plan" readonly class="form-control" value=<?php echo $_smarty_tpl->tpl_vars['plan']->value["plan_content"]["form_name"];?>
 >
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-primary" >
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        <?php }?>
                        <div class="tab-pane otr-div fade show" id=<?php echo $_smarty_tpl->tpl_vars['plan']->value["id"];?>
 role="tabpanel">
                            <div class=<?php echo ($_smarty_tpl->tpl_vars['plan']->value["id"]).("_tab");?>
>
                                    <nav>
                                        <div class="nav nav-tabs" id=<?php echo $_smarty_tpl->tpl_vars['plan']->value["nav_id"];?>
 role="tablist">
                                            <a href=<?php echo $_smarty_tpl->tpl_vars['plan']->value["navs_id"]["plan_id"];?>
 id="plan1" class="nav-item nav-link active" data-toggle="tab" role="tab">Plan</a>
                                            <a href=<?php echo $_smarty_tpl->tpl_vars['plan']->value["navs_id"]["form_id"];?>
 id="plan2" class="nav-item nav-link " data-toggle="tab" role="tab">Enquiry</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id=<?php echo ($_smarty_tpl->tpl_vars['plan']->value["id"]).("_tab_content");?>
>
                                        <div class="tab-pane fade show active" id=<?php echo $_smarty_tpl->tpl_vars['plan']->value["plan_content"]["plan_id"];?>
 role="tabpanel">
                                            <?php echo $_smarty_tpl->tpl_vars['plan']->value["plan_content"]["content"];?>

                                        </div>
                                        <div class="tab-pane fade " id=<?php echo $_smarty_tpl->tpl_vars['plan']->value["plan_content"]["form_id"];?>
 role="tabpanel">
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
                                                    <input type="text" name="plan" readonly class="form-control" value=<?php echo $_smarty_tpl->tpl_vars['plan']->value["plan_content"]["form_name"];?>
 >
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-primary" >
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/product.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
