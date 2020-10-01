<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/product.css">
    <title>Shrishti | Plans</title>
</head>
<body>
    <?php include('components/header.php'); ?>
    <div class="row" id="banner">
        <div class="col-md-12 banner">
            <h1>Plans</h1>
        </div>
    </div>
    <div class="container-fluid" id="products">
        <div class="container-lg">
            <div class="row plan-active">
                <a class="btn-txt">Products</a>
            </div>
            <div class="row products">
                <button class="btn btn-primary plan-btn" type="button" data-toggle="collapse" data-target="#products_pills" aria-expanded="false" aria-controls="collapseExample">
                <a class="btn-txt">Plan </a><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" >
                        <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                      </svg>
                </button>
                <div class="nav flex-column nav-pills collapse" id="products_pills" role="tablist" aria-orientation="vertical">
                    <a href="#endowment-plan" role="tab" id="ed_plan" data-toggle="pill" class="nav-link active">Endownment</a>
                    <a href="#children-plan" role="tab" id="cp_plan" data-toggle="pill" class="nav-link">Children</a>
                    <a href="#moneyback-plan" role="tab" id="mb_plan" data-toggle="pill" class="nav-link">Money Back</a>
                    <a href="#pension-plan" role="tab" id="pension_plan" data-toggle="pill" class="nav-link"> Pension</a>
                    <a href="#terms-plan" role="tab" id="term_plan" data-toggle="pill" class="nav-link">Term Assurance</a>
                    <a href="#health-plan" role="tab" id="health_plan" data-toggle="pill" class="nav-link">Health</a>
                </div>
                <div class="tab-content" id="products_content">
                    <div class="tab-pane otr-div fade show active" id="endowment-plan" role="tabpanel">
                        <div class="en_tab">
                            <nav>
                                <div class="nav nav-tabs" id="en_tab" role="tablist">
                                    <a href="#en_plan1" id="plan1" class="nav-item nav-link active" data-toggle="tab" role="tab">Plan</a>
                                    <a href="#en_plan2" id="plan2" class="nav-item nav-link " data-toggle="tab" role="tab">Benifits</a>
                                    <a href="#en_plan3" id="plan3" class="nav-item nav-link " data-toggle="tab" role="tab">Optional Benifits</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="en_tab_content">
                                <div class="tab-pane fade show active" id="en_plan1" role="tabpanel">
                                    <h5>LIC's NEW ENDOWMENT PLAN (UIN: 512N277V01)</h5>
                                    <p>LIC's New Endowment Plan is a participating non-linked plan which offers an attractive combination of protection and saving features. This combination provides financial support for the family of the deceased policyholder any time before maturity and good lump sum amount at the time of maturity for the surviving policyholders. 
                                        This plan also takes care of liquidity needs through its loan facility.
                                    </p>
                                </div>
                                <div class="tab-pane fade " id="en_plan2" role="tabpanel">
                                    <h5>Benifits :</h5>
                                    <ul>
                                        <li>
                                            <b>Death benefit:</b>
                                            In case of death during the policy term provided all due premiums have been paid Death benefit, defined as sum of "Sum Assured on Death" and vested Simple Reversionary Bonuses and Final Additional bonus, if any, shall be payable. Where, "Sum Assured on Death" is defined as higher of Basic Sum Assured or 10 times of annualised premium. This death benefit shall not be less than 105% of all the premiums paid as on date of death.
                                            Where premiums exclude service tax, extra premium and rider premiums, if any.
                                        </li>
                                        <li>
                                            <b>Maturity Benefit: </b>
                                    Basic Sum Assured, along with vested simple reversionary bonuses and Final Additional bonus, if any, shall be payable in lump sum on Survival to the end of the policy term provided all due premiums have been paid.
                                        </li>
                                        <li>
                                            <b>Participation in Profits:</b> 
                                            The policy shall participate in profits of the Corporation and shall be entitled to receive Simple Reversionary Bonuses declared as per the experience of the Corporation, provided the policy is in full force.
                                            Final (Additional) Bonus may also be declared under the policy in the year when the policy results into a claim either by death or maturity, provided the policy has run for certain minimum term.        
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade " id="en_plan3" role="tabpanel">
                                    <h5>Optional Benifits :</h5>
                                    <p><b>LIC's Accidental Death and Disability Benefit Rider: </b>LICs Accidental Death and Disability Benefit Rider is available as an optional rider by payment of additional premium. In case of accidental death, the Accident Benefit Sum Assured will be payable as lumpsum along with the death benefit under the basic plan. In case of accidental permanent disability arising due to accident (within 180 days from the date of accident), an amount equal to the Accident Benefit Sum Assured will be paid in equal monthly installments spread over 10 years and future premiums for Accident Benefit Sum Assured as well as premiums for the portion of Basic Sum Assured which is equal to Accident Benefit Sum Assured under the policy, shall be waived.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane otr-div fade show " id="children-plan" role="tabpanel">
                        <div class="cp_tab">
                            <nav>
                                <div class="nav nav-tabs" id="en_tab" role="tablist">
                                    <a href="#cp_plan1" id="plan1" class="nav-item nav-link active" data-toggle="tab" role="tab">Plan</a>
                                    <a href="#cp_plan2" id="plan2" class="nav-item nav-link " data-toggle="tab" role="tab">Features</a>
                                    <a href="#cp_plan3" id="plan3" class="nav-item nav-link " data-toggle="tab" role="tab">Benifits</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="en_tab_content">
                                <div class="tab-pane fade show active" id="cp_plan1" role="tabpanel">
                                    <h5>New Children Money Back Plan</h5>
                                    <p>With growing education needs don't worry about your child's future, secure your child's financial future with this plan which is especially designed to meet the increasing educational, marriage and other needs of growing children. So plan your investments to give wings to your child's dreams.
                                    </p>
                                </div>
                                <div class="tab-pane fade " id="cp_plan2" role="tabpanel">
                                    <h5>Features: </h5>
                                    <ul>
                                        <li>
                                           <p>The Plan provides the financial needs of the children with risk cover of the child.</p>
                                        </li>
                                        <li>
                                           <p>The Life Assured can avail the Premium Benefit Rider option on payment of additional premium.</p>
                                        </li>
                                        <li>
                                           <p>On Maturity, 40% of Sum Assured along with reversionary bonus and Additional Bonus is provided to the Proposer.</p>
                                        </li>
                                        <li>
                                           <p>The Policyholder can take the Survival Benefit at any time after the due date but during the policy term.</p>
                                        </li>
                                        <li>
                                           <p>Loan Facility: The Life Assured can avail the Loan Facility as a % of Surrender Value.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade " id="cp_plan3" role="tabpanel">
                                    <h5>Benifits :</h5>
                                    <ul>
                                        <li>
                                            <b>Death benefit:</b>
                                            There are two types of Risk Coverage for this LIC New Children's Money Back Plan. They are.
                                        </li>
                                        <li>
                                            <b>Death before the Date of Commencement of Risk:</b>
                                            The amount equal to the total amount of premiums paid excluding extra premium, taxes, and rider premium is payable.
                                        </li>
                                        <li>
                                            <b>Death After the Commencement of Risk:</b>
                                            The Risk cover is available after completing the 8 years of Life Assured age or 2 years from the date of commencement of policy.For Accidental Death or Natural Death: <b>Sum Assured + Bonus + Final Additional Bonus.</b> 
                                        </li>
                                        <li>
                                            <b>Maturity Benefit:</b>
                                            If the Policyholder survives until the end of Maturity Age, Maturity Benefit is provided. The amount of Maturity is equal to 40% of Sum Assured + vested Simple Reversionary Bonus + Final Additional Bonus.
                                        </li>
                                        <li>
                                            <b>Survival Benefit:</b>
                                            On Survival of the Life Assured at 18, 20 and 22 years of age, the Survival Benefit is provided immediately on completion of the following ages. The Survival Benefits are provided as follows.
                                        </li>
                                        <li>
                                            <ul>
                                                <li>At the Age of 18 years = 20% of Sum Assured.</li>
                                                <li>At the age of 20 years = 20% of Sum Assured.</li>
                                                <li>At the age of 22 years = 20% of Sum Assured.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane otr-div fade show " id="moneyback-plan" role="tabpanel">
                        <div class="mob_tab">
                            <nav>
                                <div class="nav nav-tabs" id="en_tab" role="tablist">
                                    <a href="#mob_plan1" id="plan1" class="nav-item nav-link active" data-toggle="tab" role="tab">Plan</a>
                                    <a href="#mob_plan2" id="plan2" class="nav-item nav-link " data-toggle="tab" role="tab">Benifits</a>
                                    <a href="#mob_plan3" id="plan3" class="nav-item nav-link " data-toggle="tab" role="tab">Optional Benifits</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="en_tab_content">
                                <div class="tab-pane fade show active" id="mob_plan1" role="tabpanel">
                                    <h5>New Money Back Plan - 25 Years</h5>
                                    <p>Enjoy the dual benefit of investment and insurance. It provides life coverage during the term of the policy and the maturity benefits are paid in installments by way of survival benefits in every 5 years. It provides life coverage during the term of the policy and the maturity benefits are paid in installments by way of survival benefits in every 5 years
                                    </p>
                                </div>
                                <div class="tab-pane fade " id="mob_plan2" role="tabpanel">
                                    <h5>Benifits :</h5>
                                    <ul>
                                        <li>
                                            <b>Death benefit:</b>
                                            On death during the policy term provided the policy is in full force, death benefit, defined as sum of "Sum Assured on Death" and vested Simple Reversionary Bonuses and Final Additional Bonus, if any, shall be payable. Where, "Sum Assured on Death" is defined as higher of 125% of the Basic Sum Assured or 10 times of annualized premium. This death benefit shall not be less than 105% of the total premiums paid as on date of death.
                                        </li>
                                        <li>The premiums mentioned above exclude tax, extra premium and rider premium, if any.</li>
                                        <li>
                                            <b>Survival Benefits: </b>
                                            In case of Life Assured surviving to the end of the specified durations 15% of the Basic Sum Assured at the end of each of 5th, 10th, 15th & 20th policy year.
                                        </li>
                                        <li>
                                            <b>Maturity Benefit:</b> 
                                            In case of Life assured surviving the stipulated date of maturity, 40% of the Basic Sum Assured along with vested Simple Reversionary Bonuses and Final Additional bonus, if any, shall be payable.
                                        </li>
                                        <li>
                                            <b>Participation in Profits:</b> 
                                            The policy shall participate in profits of the Corporation and shall be entitled to receive Simple Reversionary Bonuses declared as per the experience of the Corporation, provided the policy is in full force.
                                        </li>
                                        <li>
                                            Final Additional Bonus may also be declared under the policy in the year when the policy results into a claim either by death or maturity provided the policy has run for certain minimum term.
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade " id="mob_plan3" role="tabpanel">
                                    <h5>Optional Benifits :</h5>
                                    <ul>
                                        <li>
                                            <b>LIC's Accidental Death and Disability Benefit Rider:</b> 
                                            LIC's Accidental Death and Disability Benefit Rider can be opted for under an inforce policy at any time within the premium paying term by payment of additional premium and the cover will be available throughout the policy term provided the Policy is inforce for the full Sum Assured as on date of accident. In case of accidental death, the Accident Benefit Sum Assured will be payable as lumpsum along with the death benefit under the basic plan. In case of accidental permanent disability arising due to accident (within 180 days from the date of accident), an amount equal to the Accident Benefit Sum Assured will be paid in equal monthly instalments spread over 10 years and future premiums for Accident Benefit Sum Assured as well as premiums for the portion of Basic Sum Assured which is equal to Accident Benefit Sum Assured under the policy, shall be waived.
                                        </li>
                                        <li>
                                            However, on surrender of an inforce basic policy (which has acquired Surrender Value) to which this rider is attached, a proportion of additional premium charged in respect of cover after premium paying term shall be refunded.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane otr-div fade show " id="pension-plan" role="tabpanel">
                        <div class="pension_tab">
                            <nav>
                                <div class="nav nav-tabs" id="en_tab" role="tablist">
                                    <a href="#pension_plan1" id="plan1" class="nav-item nav-link active" data-toggle="tab" role="tab">Plan</a>
                                    <a href="#pension_plan2" id="plan2" class="nav-item nav-link " data-toggle="tab" role="tab">Annuity</a>
                                    <a href="#pension_plan3" id="plan3" class="nav-item nav-link " data-toggle="tab" role="tab">Salient Features</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="en_tab_content">
                                <div class="tab-pane fade show active" id="pension_plan1" role="tabpanel">
                                    <h5>Pension Plan</h5>
                                    <p>
                                        Now don't let your retirement shatter your dreams. With LIC hand crafted pension plans, secure your future after retirement and enjoy your second innings to the fullest. The plans are designed to provide you stream of payments instead of lump sum so that you don't compromise on your golden years post retirement.
                                    </p>
                                </div>
                                <div class="tab-pane fade " id="pension_plan2" role="tabpanel">
                                    <h5>Type of Annuity:</h5>
                                    <ol>
                                        <li>
                                           <p>Annuity payable for life at a uniform rate</p>
                                        </li>
                                        <li>
                                           <p>Annuity payable for 5, 10, 15 or 20 years certain and thereafter as long as the annuitant is alive.</p>
                                        </li>
                                        <li>
                                           <p>Annuity for life with return of purchase price on death of the annuitant.</p>
                                        </li>
                                        <li>
                                           <p>Annuity payable for life increasing at a simple rate of 3% p.a.</p>
                                        </li>
                                        <li>
                                           <p>Annuity for life with a provision of 50% of the annuity payable to spouse during his/her lifetime on death of the annuitant.</p>
                                        </li>
                                        <li>
                                           <p>Annuity for life with a provision of 100% of the annuity payable to spouse during his/her lifetime on death of the annuitant.</p>
                                        </li>
                                        <li>
                                           <p>Annuity for life with a provision of 100% of the annuity payable to spouse during his/ her life time on death of annuitant. The purchase price will be returned on the death of last survivor.</p>
                                        </li>
                                    </ol>
                                    <ul>
                                        <li><b>You may choose any one. Once chosen, the option cannot be altered. </b></li>
                                        <li><b>Annuity may be paid either at monthly, quarterly, half yearly or yearly intervals. You may opt any mode of payment of Annuity.</b></li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade " id="pension_plan3" role="tabpanel">
                                    <h5>Salient features:</h5>
                                    <ol>
                                        <li>
                                           <p>Premium is to be paid in a lump sum.</p>
                                        </li>
                                        <li>
                                           <p>Minimum purchase price : Rs.100,000/- for all distribution channels except online.</p>
                                        </li>
                                        <li>
                                           <p>Rs.150,000/- for on line sale.</p>
                                        </li>
                                        <li>
                                           <p>No medical examination is required under the plan.No maximum limits for purchase price, annuity etc.Minimum allowed age at entry is 30 years (completed) and Maximum allowed age at entry is 85 years (completed).</p>
                                        </li>
                                        <li>
                                           <p>Age proof necessary.</p>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane otr-div fade show " id="terms-plan" role="tabpanel">
                        <div class="term_tab">
                            <nav>
                                <div class="nav nav-tabs" id="en_tab" role="tablist">
                                    <a href="#term_plan2" id="plan2" class="nav-item nav-link active" data-toggle="tab" role="tab">Anmol Jeevan II</a>
                                    <a href="#term_plan3" id="plan3" class="nav-item nav-link " data-toggle="tab" role="tab">Amulya Jeevan II</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="term_tab_content">
                                <div class="tab-pane fade show  active" id="term_plan2" role="tabpanel">
                                    <h5>Anmol Jeevan II</h5>
                                    <ul>
                                        <li>
                                            Secure your family's future with term insurance. It is the most affordable life insurance providing death benefits to the beneficiaries of the insured person for a defined period of time. It is a pure life cover
                                        </li>
                                        <li>
                                            LIC's Anmol Jeevan - II is a protection plan which provides financial protection to the insured's family in case of his/her unfortunate demise.
                                        </li>
                                        <li>
                                            <b>Death Benefit:</b> 
                                            In case of unfortunate death of the Life Assured during the policy term Sum Assured shall be payable.                                        
                                        </li>
                                        <li>
                                            <b>Maturity Benefit:</b> 
                                            On survival to the end of the policy term, nothing shall be payable.                                        
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade " id="term_plan3" role="tabpanel">
                                    <h5>Amulya Jeevan II</h5>
                                    <ul>
                                        <li>
                                            LIC's Amulya Jeevan - II is a protection plan which provides financial protection to the insured's family in case of his/her unfortunate demise.
                                        </li>
                                        <li>
                                            <b>Death Benefit:</b> 
                                            In case of unfortunate death of the Life Assured during the policy term Sum Assured shall be payable.                                       
                                        </li>
                                        <li>
                                            <b>Maturity Benefit:</b> 
                                            On survival to the end of the policy term, nothing shall be payable.                                       
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane otr-div fade show " id="health-plan" role="tabpanel">
                        <div class="health_tab">
                            <nav>
                                <div class="nav nav-tabs" id="en_tab" role="tablist">
                                    <a href="#health_plan2" id="plan2" class="nav-item nav-link active" data-toggle="tab" role="tab">LIC's Jeevan Arogya</a>
                                    <a href="#health_plan3" id="plan3" class="nav-item nav-link " data-toggle="tab" role="tab">Cancer Cover</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="health_tab_content">
                                <div class="tab-pane fade show  active" id="health_plan2" role="tabpanel">
                                    <h5>LIC's Jeevan Arogya</h5>
                                    <ul>
                                        <li>
                                            Stay tension free with LIC Health insurance Plans. LIC Health plans helps safeguard you & your family against financial risks arising out of medical emergency. With our plans you can remain stress free of any unforeseen medical expenses and leave out all the hassles to us. More than anything else, we want you to always stay healthy and fit!
                                        </li>
                                        <li>
                                            LIC's Jeevan Arogya is a unique non-participating non-linked plan which provides health insurance cover against certain specified health risks and provides you with timely support in case of medical emergencies and helps you and your family remain financially independent in difficult times.
                                        </li>
                                        <li>
                                            Health has been a major concern on everybody's mind, including yours. In these days of skyrocketing medical expenses, when a family member is ill, it is a traumatic time for the rest of the family. As a caring person, you do not want to let any unfortunate incident to affect your plans for you and your family. So why let any medical emergencies shatter your peace of mind.                                      
                                        </li>
                                        <li>
                                            <b>LIC's Jeevan Arogya gives you:</b> 
                                            <ul>
                                                <li>Valuable financial protection in case of hospitalisation, surgery etc</li>
                                                <li>Increasing Health cover every year</li>
                                                <li>Lump sum benefit irrespective of actual medical costs</li>
                                                <li>No claim benefit</li>
                                                <li>Flexible benefit limit to choose from</li>
                                                <li>Flexible premium payment options</li>
                                            </ul>                                        
                                        </li>
                                        <li>
                                            <b>1: Choose the level of Health cover you need:</b>
                                            <ul>
                                                <li>You can choose the amount of Initial Daily Benefit (i.e. the daily Hospital Cash Benefit applicable in the first year of the policy) as per your need from out of the following choices:</li>
                                                <li>
                                                    <table border="3">
                                                        <tr>
                                                            <td>1000 per day</td>
                                                            <td>2000 per day</td>
                                                            <td>3000 per day</td>
                                                            <td>4000 per day</td>
                                                        </tr>
                                                    </table>
                                                </li>
                                                <li>
                                                    This is the amount that will be payable to you in the event of hospitalisation in the first year on a per day basis. The Major Surgical Benefit that you will be covered for will be 100 times the Initial Daily Benefit you have chosen. Thus the initial Major Surgical Benefit Sum Assured will be ` 1 lakh, 2 lakh, 3 lakh, 4 lakh respectively. Other benefits such as Day Care Procedure Benefit, Other Surgical Benefit and Premium waiver Benefit (PWB) mentioned below shall also be payable depending upon the daily Hospital Cash Benefit chosen.
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade " id="health_plan3" role="tabpanel">
                                    <h5>Cancer Cover</h5>
                                    <ul>
                                        <li>
                                            LIC’s Cancer Cover is a regular premium payment health insurance plan which provides financial protection in case the Life Assured is diagnosed with any of the specified Early and/or Major Stage Cancer during the policy term.
                                        </li>
                                        <li>
                                            <b>1. BENEFITS:</b> 
                                            The following benefits are payable during the policy year under an inforce policy:                                   
                                        </li>
                                        <li>
                                            <b>Early Stage Cancer:</b> 
                                            Benefits payable on first diagnosis of any one of the specified Early Stage Cancers, provided the same is admissible are -
                                            <ul>
                                                <li><b>(a)</b><b>Lump sum benefit:</b> 25% of Applicable Sum Insured shall be payable</li>
                                                <li><b>(b)</b><b>Premium Waiver Benefit:</b> Premiums for next three policy years or balance policy term whichever is lower, shall be waived from the policy anniversary coinciding or following the date of diagnosis.</li>
                                            </ul>                                    
                                        </li>
                                        <li>
                                            <b>Major Stage Cancer:</b> 
                                            Benefits payable on first diagnosis of the specified Major Stage Cancer,provided the same is admissible are-
                                            <ul>
                                                <li><b>(a)</b><b>Lump Sum benifit</b>: 100% of Applicable Sum Insured less any previously paid claims in respect of Early Stage Cancer shall be payable.</li>
                                                <li><b>(b)</b><b>Income Benefit: </b>In addition to above lump sum benefit, Income Benefit of 1% of Applicable Sum Insured shall be payable on each policy month following the payment of Lump Sum, for a fixed period of next ten years irrespective of the survival of the Life Insured and even if this period of 10 years goes beyond the policy term. In case of death of the Life Assured while receiving this Income Benefit, the remaining payouts, if any, will be paid to his/her nominee.
                                                </li>
                                                <li><b>(c)</b><b>Premium Waiver Benefit: </b>All the future premiums shall be waived from the next policy anniversary and the policy shall be free from all liabilities except to the extent of Income Benefit as specified above.
                                                </li>
                                            </ul>                                    
                                        </li>
                                    </ul>
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
    <script src="js/plan.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>