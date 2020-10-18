<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-18 09:26:20
  from 'C:\xampp\htdocs\shrishti_lic\templates\plan.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8bee1cb88f31_26904350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c9c54a1c84d56a015f826d4f27a9653803d1eff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shrishti_lic\\templates\\plan.tpl',
      1 => 1603005747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8bee1cb88f31_26904350 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div id="products" class="container-fluid">
        <div class="container-lg">
            <div class="row p_h1">
                <h1>Our Plans</h1>
            </div>
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 3;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['plans']->value)+1 - (1) : 1-(count($_smarty_tpl->tpl_vars['plans']->value))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                <?php $_smarty_tpl->_assignInScope('y', $_smarty_tpl->tpl_vars['i']->value+2);?>
                <div class="row product_row">
                    <?php
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? $_smarty_tpl->tpl_vars['y']->value+1 - ($_smarty_tpl->tpl_vars['i']->value) : $_smarty_tpl->tpl_vars['i']->value-($_smarty_tpl->tpl_vars['y']->value)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['i']->value, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration === 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration === $_smarty_tpl->tpl_vars['x']->total;?>
                        <div class="col-md-4 product py-3">
                            <p class="product_name"><?php echo $_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->tpl_vars['x']->value]['name'];?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->tpl_vars['x']->value]['description'];?>
</p>
                            <a href=<?php echo $_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->tpl_vars['x']->value]['link'];?>
>Read More 
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                            </svg>
                            </a>
                        </div>
                    <?php }
}
?>
                </div>
            <?php }
}
?>
       </div>
    </div><?php }
}
