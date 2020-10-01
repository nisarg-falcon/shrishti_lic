<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer_product.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Shrishti | Products</title>
</head>
<body>
    <?php include('components/header.php'); ?>
    <div class="row" id="banner">
        <div class="col-md-12 banner">
            <h1>Products</h1>
        </div>
    </div>
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
                    <a href="#j_anand" role="tab" id="ed_plan" data-toggle="pill" class="nav-link active">New Jeevan Anand</a>
                    <a href="#j_lakshya" role="tab" id="j_lakhya_plan" data-toggle="pill" class="nav-link">Jeevan Lakshya</a>
                    <a href="#j_labh" role="tab" id="j_labh_plan" data-toggle="pill" class="nav-link">Jeevan Labh</a>
                    <a href="#j_umang" role="tab" id="j_umang_plan" data-toggle="pill" class="nav-link">Jeevan Umang</a>
                    <a href="#j_vidhya" role="tab" id="j_vidhya_plan" data-toggle="pill" class="nav-link">Jeevan Vidhya</a>
                    <a href="#j_tarun" role="tab" id="j_tarun_plan" data-toggle="pill" class="nav-link">Jeevan Tarun </a>
                    <a href="#j_sathi" role="tab" id="j_sathi_plan" data-toggle="pill" class="nav-link">Jeevan Sathi </a>
                    <a href="#a_stambh" role="tab" id="a_stambh_plan" data-toggle="pill" class="nav-link">Adhaar Stambh </a>
                    <a href="#a_shila" role="tab" id="a_shila_plan" data-toggle="pill" class="nav-link">Adhaar Shila </a>
                    <a href="#k_d" role="tab" id="kanya_daan_plan" data-toggle="pill" class="nav-link">Kanya Daan </a>
                    <a href="#i_s" role="tab" id="income_secure_plan" data-toggle="pill" class="nav-link">Income Secure </a>
                    <a href="#j_p" role="tab" id="jackpot_plan" data-toggle="pill" class="nav-link">Jackpot Plan </a>
                </div>
                <div class="tab-content" id="products_content">
                    <div class="tab-pane otr-div   fade show active" id="j_anand" role="tabpanel">
                    <div class="j_anand_tab">
                            <nav>
                                <div class="nav nav-tabs" id="en_tab" role="tablist">
                                    <a href="#j_anand_plan1" id="plan1" class="nav-item nav-link active" data-toggle="tab" role="tab">Plan</a>
                                    <a href="#j_anand_plan2" id="plan2" class="nav-item nav-link " data-toggle="tab" role="tab">Enquiry</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="j_anand_tab_content">
                                <div class="tab-pane fade show active" id="j_anand_plan1" role="tabpanel">
                                    <h5>New Jeevan Anand</h5>
                                    <p>
                                        LIC's New Jeevan Anand Plan is a participating non-linked plan which offers an attractive combination of protection and savings. This combination provides financial protection against death throughout the lifetime of the policyholder with the provision of payment of lumpsum at the end of the selected policy term in case of his/her survival. This plan also takes care of liquidity needs through its loan facility.
                                    </p>
                                </div>
                                <div class="tab-pane fade " id="j_anand_plan2" role="tabpanel">
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
                                            <input type="text" name="plan" readonly class="form-control" value="New Jeevan Anand" >
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" >
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane otr-div  fade" id="j_lakshya" role="tabpanel">
                    <div class="j_lakshya_tab">
                            <nav>
                                <div class="nav nav-tabs" id="en_tab" role="tablist">
                                    <a href="#j_lakshya_plan1" id="plan1" class="nav-item nav-link active" data-toggle="tab" role="tab">Plan</a>
                                    <a href="#j_lakshya_plan2" id="plan2" class="nav-item nav-link " data-toggle="tab" role="tab">Enquiry</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="j_lakshya_tab_content">
                                <div class="tab-pane fade show active" id="j_lakshya_plan1" role="tabpanel">
                                    <h5>Jeevan Lakshya</h5>
                                    <p>LIC's Jeevan Lakshya is a participating non-linked plan which offers a combination of protection and savings. This plan provides for Annual Income benefit that may help to fulfill the needs of the family, primarily for the benefit of children, in case of unfortunate death of Policyholder any time before maturity and a lump sum amount at the time of maturity irrespective of survival of the Policyholder. This plan also takes care of liquidity needs through its loan facility.
                                    </p>
                                </div>
                                <div class="tab-pane fade " id="j_lakshya_plan2" role="tabpanel">
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
                                            <input type="text" name="plan" readonly class="form-control" value="Jeevan Lakshya" >
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" >
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane otr-div  fade" id="j_labh" role="tabpanel">
                    <div class="j_labh_tab">
                            <nav>
                                <div class="nav nav-tabs" id="en_tab" role="tablist">
                                    <a href="#j_labh_plan1" id="plan1" class="nav-item nav-link active" data-toggle="tab" role="tab">Plan</a>
                                    <a href="#j_labh_plan2" id="plan2" class="nav-item nav-link " data-toggle="tab" role="tab">Enquiry</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="j_labh_tab_content">
                                <div class="tab-pane fade show active" id="j_labh_plan1" role="tabpanel">
                                    <h5>Jeevan Labh</h5>
                                    <p>LIC's Jeevan Labh is a limited premium paying, non-linked, with-profits endowment plan which offers a combination of protection and savings. This plan provides financial support for the family in case of unfortunate death of the policyholder any time before maturity and a lump sum amount at the time of maturity for the surviving policyholder. This plan also takes care of liquidity needs through its loan facility.
                                    </p>
                                </div>
                                <div class="tab-pane fade " id="j_labh_plan2" role="tabpanel">
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
                                            <input type="text" name="plan" readonly class="form-control" value="Jeevan Labh" >
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" >
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane otr-div  fade" id="j_umang" role="tabpanel">
                    <div class="j_umang_tab">
                            <nav>
                                <div class="nav nav-tabs" id="en_tab" role="tablist">
                                    <a href="#j_umang_plan1" id="plan1" class="nav-item nav-link active" data-toggle="tab" role="tab">Plan</a>
                                    <a href="#j_umang_plan2" id="plan2" class="nav-item nav-link " data-toggle="tab" role="tab">Enquiry</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="j_umang_tab_content">
                                <div class="tab-pane fade show active" id="j_umang_plan1" role="tabpanel">
                                    <h5>Jeevan Umang</h5>
                                    <p>(A non-linked, with-profit, whole life assurance plan) LIC's Jeevan Umang plan offers a combination of income and protection to your family. This plan provides for annual survival benefits from the end of the premium paying term till maturity and a lump sum payment at the time of maturity or on death of the policyholder during the policy term.In addition, this plan also takes care of liquidity needs through loan facility.

                                    </p>
                                </div>
                                <div class="tab-pane fade " id="j_umang_plan2" role="tabpanel">
                                   <form >
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
                                            <input type="text" name="plan" readonly class="form-control" value="Jeevan Umang" >
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" >
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane  otr-div fade" id="j_vidhya" role="tabpanel">
                    <div class="j_vidhya_tab">
                            <nav>
                                <div class="nav nav-tabs" id="en_tab" role="tablist">
                                    <a href="#j_vidhya_plan1" id="plan1" class="nav-item nav-link active" data-toggle="tab" role="tab">Plan</a>
                                    <a href="#j_vidhya_plan2" id="plan2" class="nav-item nav-link " data-toggle="tab" role="tab">Enquiry</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="j_vidhya_tab_content">
                                <div class="tab-pane fade show active" id="j_vidhya_plan1" role="tabpanel">
                                    <h5>Jeevan Vidhya</h5>
                                    <p>LIC's Jeevan Vidhya is a participating non-linked limited premium payment plan which offers an attractive combination of protection and saving features for children. This plan is specially designed to meet the educational and other needs of growing children through annual Survival Benefit payments from ages 20 to 24 years and Maturity Benefit at the age of 25 years.
                                    </p>
                                </div>
                                <div class="tab-pane fade " id="j_vidhya_plan2" role="tabpanel">
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
                                            <input type="text" name="plan" readonly class="form-control" value="Jeevan Vidhya" >
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" >
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane otr-div  fade" id="j_tarun" role="tabpanel">
                    <div class="j_tarun_tab">
                            <nav>
                                <div class="nav nav-tabs" id="en_tab" role="tablist">
                                    <a href="#j_tarun_plan1" id="plan1" class="nav-item nav-link active" data-toggle="tab" role="tab">Plan</a>
                                    <a href="#j_tarun_plan2" id="plan2" class="nav-item nav-link " data-toggle="tab" role="tab">Enquiry</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="j_tarun_tab_content">
                                <div class="tab-pane fade show active" id="j_tarun_plan1" role="tabpanel">
                                    <h5>Jeevan Tarun</h5>
                                    <p>LIC's JEEVAN TARUN is a participating non-linked limited premium payment plan which offers an attractive combination of protection and saving features for children. This plan is specially designed to meet the educational and other needs of growing children through annual Survival Benefit payments from ages 20 to 24 years and Maturity Benefit at the age of 25 years.
                                    </p>
                                </div>
                                <div class="tab-pane fade " id="j_tarun_plan2" role="tabpanel">
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
                                            <input type="text" name="plan" readonly class="form-control" value="Jeevan Tarun" >
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" >
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane otr-div  fade" id="j_sathi" role="tabpanel">
                    <div class="j_sathi_tab">
                            <nav>
                                <div class="nav nav-tabs" id="en_tab" role="tablist">
                                    <a href="#j_sathi_plan1" id="plan1" class="nav-item nav-link active" data-toggle="tab" role="tab">Plan</a>
                                    <a href="#j_sathi_plan2" id="plan2" class="nav-item nav-link " data-toggle="tab" role="tab">Enquiry</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="j_sathi_tab_content">
                                <div class="tab-pane fade show active" id="j_sathi_plan1" role="tabpanel">
                                    <h5>Jeevan Sathi</h5>
                                    <p>LIC's Jeevan Sathi is a participating non-linked plan which offers a combination of protection and savings. This plan provides for Annual Income benefit that may help to fulfill the needs of the family, primarily for the benefit of children, in case of unfortunate death of Policyholder any time before maturity and a lump sum amount at the time of maturity irrespective of survival of the Policyholder. This plan also takes care of liquidity needs through its loan facility.
                                    </p>
                                </div>
                                <div class="tab-pane fade " id="j_sathi_plan2" role="tabpanel">
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
                                            <input type="text" name="plan" readonly class="form-control" value="Jeevan Sathi" >
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" >
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane  otr-div fade" id="a_stambh" role="tabpanel">
                    <div class="a_stambh_tab">
                            <nav>
                                <div class="nav nav-tabs" id="en_tab" role="tablist">
                                    <a href="#a_stambh_plan1" id="plan1" class="nav-item nav-link active" data-toggle="tab" role="tab">Plan</a>
                                    <a href="#a_stambh_plan2" id="plan2" class="nav-item nav-link " data-toggle="tab" role="tab">Enquiry</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="a_stambh_tab_content">
                                <div class="tab-pane fade show active" id="a_stambh_plan1" role="tabpanel">
                                    <h5>Aadhaar Stambh</h5>
                                    <p>LIC's Aadhaar Stambh Plan offers a combination of protection and savings. This plan is exclusively designed for male lives having Aadhaar Card issued by UIDAI (Unique Identification Authority of India). This plan provides financial support for the family in case of unfortunate death of the policyholder any time before maturity and a lump sum amount at the time of maturity for the surviving policyholder.
                                    </p>
                                </div>
                                <div class="tab-pane fade " id="a_stambh_plan2" role="tabpanel">
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
                                            <input type="text" name="plan" readonly class="form-control" value="Aadhaar Stambh" >
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" >
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane  otr-div fade" id="a_shila" role="tabpanel">
                    <div class="a_shila_tab">
                            <nav>
                                <div class="nav nav-tabs" id="en_tab" role="tablist">
                                    <a href="#a_shila_plan1" id="plan1" class="nav-item nav-link active" data-toggle="tab" role="tab">Plan</a>
                                    <a href="#a_shila_plan2" id="plan2" class="nav-item nav-link " data-toggle="tab" role="tab">Enquiry</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="a_shila_tab_content">
                                <div class="tab-pane fade show active" id="a_shila_plan1" role="tabpanel">
                                    <h5>Aadhaar Shila</h5>
                                    <p>LIC's Aadhaar Shila Plan offers a combination of protection and savings. This plan is exclusively designed for female lives having Aadhaar Card issued by UIDAI (Unique Identification Authority of India). This plan provides financial support for the family in case of unfortunate death of the policyholder any time before maturity and a lump sum amount at the time of maturity for the surviving policyholder.
                                    </p>
                                </div>
                                <div class="tab-pane fade " id="a_shila_plan2" role="tabpanel">
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
                                            <input type="text" name="plan" readonly class="form-control" value="Adhaar Shila" >
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" >
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane  otr-div fade" id="k_d" role="tabpanel">
                    <div class="k_d_tab">
                            <nav>
                                <div class="nav nav-tabs" id="en_tab" role="tablist">
                                    <a href="#k_d_plan1" id="plan1" class="nav-item nav-link active" data-toggle="tab" role="tab">Plan</a>
                                    <a href="#k_d_plan2" id="plan2" class="nav-item nav-link " data-toggle="tab" role="tab">Enquiry</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="k_d_tab_content">
                                <div class="tab-pane fade show active" id="k_d_plan1" role="tabpanel">
                                    <h5>Kanya Daan</h5>
                                    <p>LIC's kanya Daan is a participating non-linked plan which offers a combination of protection and savings. This plan provides for Annual Income benefit that may help to fulfill the needs of the family, primarily for the benefit of children, in case of unfortunate death of Policyholder any time before maturity and a lump sum amount at the time of maturity irrespective of survival of the Policyholder. This plan also takes care of liquidity needs through its loan facility.
                                    </p>
                                </div>
                                <div class="tab-pane fade " id="k_d_plan2" role="tabpanel">
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
                                            <input type="text" name="plan" readonly class="form-control" value="Kanya Daan" >
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" >
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane  otr-div fade" id="i_s" role="tabpanel">
                    <div class="i_s_tab">
                            <nav>
                                <div class="nav nav-tabs" id="en_tab" role="tablist">
                                    <a href="#i_s_plan1" id="plan1" class="nav-item nav-link active" data-toggle="tab" role="tab">Plan</a>
                                    <a href="#i_s_plan2" id="plan2" class="nav-item nav-link " data-toggle="tab" role="tab">Enquiry</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="i_s_tab_content">
                                <div class="tab-pane fade show active" id="i_s_plan1" role="tabpanel">
                                    <h5>Income Secure Plan</h5>
                                    <p>(A non-linked, with-profit, whole life assurance plan)
                                        LIC's Jeevan Umang plan offers a combination of income and protection to your family. This plan provides for annual survival benefits from the end of the premium paying term till maturity and a lump sum payment at the time of maturity or on death of the policyholder during the policy term.In addition, this plan also takes care of liquidity needs through loan facility.
                                    </p>
                                </div>
                                <div class="tab-pane fade " id="i_s_plan2" role="tabpanel">
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
                                            <input type="text" name="plan" readonly class="form-control" value="Income Secure" >
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" >
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane  otr-div fade" id="j_p" role="tabpanel">
                    <div class="j_p_tab">
                            <nav>
                                <div class="nav nav-tabs" id="en_tab" role="tablist">
                                    <a href="#j_p_plan1" id="plan1" class="nav-item nav-link active" data-toggle="tab" role="tab">Plan</a>
                                    <a href="#j_p_plan2" id="plan2" class="nav-item nav-link " data-toggle="tab" role="tab">Enquiry</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="j_p_tab_content">
                                <div class="tab-pane fade show active" id="j_p_plan1" role="tabpanel">
                                    <h5>Jackpot Plan</h5>
                                    <p>LIC's Jackpot Plan is a limited premium paying, non-linked, with-profits endowment plan which offers a combination of protection and savings. This plan provides financial support for the family in case of unfortunate death of the policyholder any time before maturity and a lump sum amount at the time of maturity for the surviving policyholder. This plan also takes care of liquidity needs through its loan facility.
                                    </p>
                                </div>
                                <div class="tab-pane fade " id="j_p_plan2" role="tabpanel">
                                   <form>
                                       <h3>Enquiry Form</h3>
                                       <div class="form-group">
                                           <label for="name">Full Name</label>
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
                                            <input type="text" name="plan" readonly class="form-control" value="Jackpot Plan" >
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" >
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                 
                </div>
            </div>
        </div>
    </div>
    <?php include('components/footer.php'); ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/product.js"></script>
</body>
</html>