<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Shrishti | Contact</title>
</head>
<body>
    <?php include('components/header.php'); ?>
    <div class="container-fluid" id="contact">
        <div class="container-lg">
            <h3>Policy Enquiry</h3>
            <form action="#" class="py-4 row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="uname">Full Name</label>
                        <input type="text" name="u_name" id="uname" class="form-control">
                        <div class="alert alert-danger my-2 name-error"></div>
                    </div>
                    <div class="form-group">
                        <label for="uphone">Mobile Number</label>
                        <input type="tel" name="u_phone" id="uphone" class="form-control">
                        <div class="alert alert-danger my-2 contact-error"></div>
                    </div>
                    <div class="form-group">
                        <label for="umail">Email Address Name</label>
                        <input type="email" name="u_mail" id="umail" class="form-control">
                        <div class="alert alert-danger my-2 mail-error"></div>
                    </div>
                    <div class="form-group">
                        <label for="uage">Your Age</label>
                        <input type="number" name="u_age" id="uage" class="form-control">
                        <div class="alert alert-danger my-2 age-error"></div>
                    </div>
                    <div class="form-group">
                        <label for="uchage">Your Child Age</label>
                        <input type="number" name="u_ch_age" id="uchage" class="form-control">
                        <div class="alert alert-danger my-2 ch_age-error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Plans</label>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-check ">
                                <input type="checkbox" name="plan_0" id="plan_0" value="All Plans" class="form-check-input" checked>
                                <label class="form-check-label" for="plan_0">All Plans</label>
                            </div>
                            <div class="form-check ">
                                <input type="checkbox" name="plan_1" id="plan_1" value="Endowment Plan" class="form-check-input">
                                <label class="form-check-label" for="plan_1">Endowment Plan</label>
                            </div>
                            <div class="form-check ">
                                <input type="checkbox" name="plan_2" id="plan_2" value="Children Plan" class="form-check-input">
                                <label class="form-check-label" for="plan_2">Children Plan</label>
                            </div>
                            <div class="form-check ">
                                <input type="checkbox" name="plan_3" id="plan_3" value="MoneyBack Plan" class="form-check-input">
                                <label class="form-check-label" for="plan_3">MoneyBack Plan</label>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-check ">
                                <input type="checkbox" name="plan_4" id="plan_4" value="Pension Plan" class="form-check-input">
                                <label class="form-check-label" for="plan_4">Pension Plan</label>
                            </div>
                            <div class="form-check ">
                                <input type="checkbox" name="plan_5" id="plan_5" value="Term Assurance Plan" class="form-check-input">
                                <label class="form-check-label" for="plan_5">Term Assurance Plan</label>
                            </div>
                            <div class="form-check ">
                                <input type="checkbox" name="plan_6" id="plan_6" value="Health Plan" class="form-check-input">
                                <label class="form-check-label" for="plan_6">Health Plan</label>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Products</label>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-check">
                                <input type="checkbox" name="product_0" id="product_0" value="New Jeevan Anand" class="form-check-input" checked>
                                <label class="form-check-label" for="product_0">All</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="product_1" id="product_1" value="New Jeevan Anand" class="form-check-input">
                                <label class="form-check-label" for="product_1">New Jeevan Anand</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="product_2" id="product_2" value="Jeevan Lakshya" class="form-check-input">
                                <label class="form-check-label" for="product_2">Jeevan Lakshya</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="product_3" id="product_3" value="Jeevan Labh" class="form-check-input">
                                <label class="form-check-label" for="product_3">Jeevan Labh</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="product_4" id="product_4" value="Jeevan Umang" class="form-check-input">
                                <label class="form-check-label" for="product_4">Jeevan Umang</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="product_5" id="product_5" value="Jeevan Vidhya" class="form-check-input">
                                <label class="form-check-label" for="product_5">Jeevan Vidhya</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="product_6" id="product_6" value="Jeevan Tarun" class="form-check-input">
                                <label class="form-check-label" for="product_6">Jeevan Taru</label>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-check">
                                <input type="checkbox" name="product_7" id="product_7" value="Jeevan Sathi" class="form-check-input">
                                <label class="form-check-label" for="product_7">Jeevan Sathi</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="product_8" id="product_8" value="Adhaar Stambh" class="form-check-input">
                                <label class="form-check-label" for="product_8">Adhaar Stambh</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="product_9" id="product_9" value="Adhaar Shila" class="form-check-input">
                                <label class="form-check-label" for="product_9">Adhaar Shila</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="product_10" id="product_10" value="Kanya Daan" class="form-check-input">
                                <label class="form-check-label" for="product_10">Kanya Daan</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="product_11" id="product_11" value="Income Secure" class="form-check-input">
                                <label class="form-check-label" for="product_11">Income Secure</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="product_12" id="product_12" value="Jackpot Plan" class="form-check-input">
                                <label class="form-check-label" for="product_12">Jackpot Plan</label>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="salary">Annual Income</label>
                        <select class="form-control" id="salary" name="salary">
                            <option value="Up to 3 lakh">Up to 3 lakh</option>
                            <option value="3-5 lakh">3-5 lakh</option>
                            <option value="5-7 lakh">5-7 lakh</option>
                            <option value="7-10 lakh">7-10 lakh</option>
                            <option value="10-15 lakh">10-15 lakh</option>
                            <option value="Upto 15 lakh">Upto 15 lakh</option>
                        </select>
                    </div>
                </div>
                <div class="form-group mx-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <?php include('components/footer.php'); ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/contact.js"></script>
</body>
</html>