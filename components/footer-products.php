<?php

require_once('libs/Smarty.class.php');

$smarty = new Smarty();

$plan_links = array(
    array(
        "name" => "Endowment Plan 1",
        "id" => "ed_plan",
        "link" => "#j_anand"
    ),
    array(
        "name" => "Endowment Plan 2",
        "id" => "ed_plan",
        "link" => "#j_lakshya"
    ),
    array(
        "name" => "Endowment Plan 3",
        "id" => "ed_plan",
        "link" => "#j_labh"
    ),
    array(
        "name" => "Endowment Plan 4",
        "id" => "ed_plan",
        "link" => "#j_umang"
    ),
    array(
        "name" => "Endowment Plan 5",
        "id" => "ed_plan",
        "link" => "#j_tarun"
    ),
    array(
        "name" => "Endowment Plan 6",
        "id" => "ed_plan",
        "link" => "#j_shiromani"
    ),
    array(
        "name" => "Endowment Plan 7",
        "id" => "ed_plan",
        "link" => "#j_amar"
    )
);

$plans = array(
    array(
        "id" => "j_anand",
        "nav_id" => "xyz",
        "navs_id" => array(
            "plan_id" => "#j_anand_plan1",
            "form_id" => "#j_anand_plan2"
        ),
        "plan_content" => array(
            "plan_id" => "j_anand_plan1",
            "content" => "<h5>New Jeevan Anand</h5><p>LIC's New Jeevan Anand Plan is a participating non-linked plan which offers an attractive combination of protection and savings. This combination provides financial protection against death throughout the lifetime of the policyholder with the provision of payment of lumpsum at the end of the selected policy term in case of his/her survival. This plan also takes care of liquidity needs through its loan facility.</p>",
            "form_id" => "j_anand_plan2",
            "form_name" => "New Jeevan Anand"
        )
    ),
    array(
        "id" => "j_anand",
        "nav_id" => "xyz",
        "navs_id" => array(
            "plan_id" => "#j_anand_plan1",
            "form_id" => "#j_anand_plan2"
        ),
        "plan_content" => array(
            "plan_id" => "j_anand_plan1",
            "content" => "<h5>New Jeevan Anand</h5><p>LIC's New Jeevan Anand Plan is a participating non-linked plan which offers an attractive combination of protection and savings. This combination provides financial protection against death throughout the lifetime of the policyholder with the provision of payment of lumpsum at the end of the selected policy term in case of his/her survival. This plan also takes care of liquidity needs through its loan facility.</p>",
            "form_id" => "j_anand_plan2",
            "form_name" => "New Jeevan Anand"
        )
    )
);

$smarty->assign('plan_links',$plan_links);
$smarty->assign('plans',$plans);

$smarty->display('templates/footer-products.tpl');

?>