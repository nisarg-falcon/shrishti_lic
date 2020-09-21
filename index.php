<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <title>Shrishti</title>
</head>
<body>
    <?php include('components/header.php'); ?>
    <div id="slider">
        <div id="carousel_slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li class="active" data-target="#carousel_slider" data-slide-to="0"></li>
                <li data-target="#carousel_slider" data-slide-to="1"></li>
                <li data-target="#carousel_slider" data-slide-to="2"></li>
                <li data-target="#carousel_slider" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/banner_1.jpg" alt="lic_banner_image" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="images/banner_2.jpg" alt="lic_banner_image" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="images/banner_3.jpg" alt="lic_banner_image" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="images/banner_4.jpg" alt="lic_banner_image" class="d-block w-100">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel_slider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span> 
                <span class="sr-only">previous</span> 
            </a>
            <a href="#carousel_slider" role="button" data-slide="next" class="carousel-control-next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">next</span>
            </a>
        </div>
    </div>
    <div id="about" class="container-fluid">
        <div  class="container-lg ">
            <div class="row ab_h"><h1>About</h1></div>
            <div class="row about_row">
                <div class="col-md-6 about_col_1">
                    <div class="image-wrapper">
                        <img src="images/agent.jpg" class="rounded-circle" height="250px" width="250px" />
                    </div>
                </div>
                <div class="col-md-6 about_col_2">
                    <p>Constantly Going an extra mile
                        I have been associated with LIC for the past 10 years and till going. Due to LIC's advanced plans and solutions for every need, I was able to cater to all sought of clients and customize the plans accordingly. 
                        It gives me immense pleasure when my clients see me as their advisor. I take keen interest to cater to various clients with plans that suit their need and thus am able to save a lot of their funds. 
                        My passion to provide clients best services and advising them with suitable plans made me more dedicated towards my work where money is not my driving force but my client's satisfaction is.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="products" class="container-fluid">
        <div class="container-lg">
            <div class="row p_h1">
                <h1>Our Products</h1>
            </div>
            <div class="row product_row">
                <div class="col-md-4 product">
                    <img src="images/products/endowment.jpg" height="140px" width="140px">
                    <p class="product_name">Endowment Plans</p>
                    <p>With growing education needs don't worry about your child's future, secure your child's financial future with this plan which is especially designed to meet the increasing educational, marriage and other needs ...</p>
                    <a>Read More...</a>
                </div>
                <div class="col-md-4 product">
                    <img src="images/products/children-plan.jpg" height="140px" width="140px">
                    <p class="product_name">Children Plans</p>
                    <p>With growing education needs don't worry about your child's future, secure your child's financial future with this plan which is especially designed to meet the increasing educational, marriage and other needs ...</p>
                    <a>Read More...</a>
                </div>
                <div class="col-md-4 product">
                    <img src="images/products/health.jpg" height="140px" width="140px">
                    <p class="product_name">Health Plans</p>
                    <p>With growing education needs don't worry about your child's future, secure your child's financial future with this plan which is especially designed to meet the increasing educational, marriage and other needs ...</p>
                    <a>Read More...</a>
                </div>
            </div>
            <div class="row product_row">
                <div class="col-md-4 product">
                    <img src="images/products/money-back-plan.jpg" height="140px" width="140px">
                    <p class="product_name">Money Back Plans</p>
                    <p>With growing education needs don't worry about your child's future, secure your child's financial future with this plan which is especially designed to meet the increasing educational, marriage and other needs ...</p>
                    <a>Read More...</a>
                </div>
                <div class="col-md-4 product">
                    <img src="images/products/pension.jpg" height="140px" width="140px">
                    <p class="product_name">Pension Plans</p>
                    <p>With growing education needs don't worry about your child's future, secure your child's financial future with this plan which is especially designed to meet the increasing educational, marriage and other needs ...</p>
                    <a>Read More...</a>
                </div>
                <div class="col-md-4 product">
                    <img src="images/products/terms.jpg" height="140px" width="140px">
                    <p class="product_name">Terms Plans</p>
                    <p>With growing education needs don't worry about your child's future, secure your child's financial future with this plan which is especially designed to meet the increasing educational, marriage and other needs ...</p>
                    <a>Read More...</a>
                </div>
            </div>
       </div>
    </div>
    <div id="testimonial" class="container-fluid">
        <div class="container-lg">
            <div class="row t_h1">
                <h1>testimonial</h1>
            </div>
            <div class="row">
                <div id="testimonial_t" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li class="active" data-target="#testimonial_t" data-slide-to="0"></li>
                        <li data-target="#testimonial_t" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <p>I've been impressed with his professionalism and his wealth of experience in the insurance industry.I am totally confident that Mr Sandeep Kumar shall definitely become a very.
                            Valuable asset to any company.Thank you for taking great care of us on our insurance policies because I also get great policy at a great price . I will highly recommend you to others for their insurance needs! 
                            </p>
                            <h3>-Mr. Prashant Bhardwaj (Manager), Noida</h3>
                        </div>
                        <div class="carousel-item">
                            <p>I've been impressed with his professionalism and his wealth of experience in the insurance industry.I am totally confident that Mr Sandeep Kumar shall definitely become a very.
                            Valuable asset to any company.Thank you for taking great care of us on our insurance policies because I also get great policy at a great price . I will highly recommend you to others for their insurance needs! 
                            </p>
                            <h3>-Mr. Prashant Bhardwaj (Manager), Noida</h3 >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('components/footer.php'); ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
