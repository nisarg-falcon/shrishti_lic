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
                    </div>
                    <div class="form-group">
                        <label for="uphone">Mobile Number</label>
                        <input type="tel" name="u_phone" id="uphone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="umail">Email Address Name</label>
                        <input type="email" name="u_mail" id="umail" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="uage">Your Age</label>
                        <input type="number" name="u_age" id="uage" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="uchage">Your Child Age</label>
                        <input type="number" name="u_ch_age" id="uchage" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="salary">Annual Income</label>
                        <select class="form-control" id="salary" name="salary">
                            <option>Up to 3 lakh</option>
                            <option>3-5 lakh</option>
                            <option>5-7 lakh</option>
                            <option>7-10 lakh</option>
                            <option>10-15 lakh</option>
                            <option>Upto 15 lakh</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include('components/footer.php'); ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>