<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('assets/logo/HRF.png')}}" rel="shortcut icon" />
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/css/swiper.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<!-- #c64040 -->

<body style="background-color: rgb(229 231 235);">
    <div class="hero">
        <nav class="d-flex  align-items-center py-3 w-100"
            style="background-color: black; position: fixed; top: 0; z-index: 999;">
            <div class="container position-relative d-flex justify-content-between align-items-center">
                <div style="width: 130px;">
                    <a href="#"> <img class="w-100" src="https://loan-management.options9.in/images/full_logo.png"
                            alt=""></a>
                </div>
                <ul class="dv align-items-center gap-4"
                    style="list-style-type: none; font-weight: 500; margin-bottom: unset; ; letter-spacing: 0.5px;">
                    <li class="p-2 "><a href="#">Home</a></li>
                    <li class="p-2"><a href="#preview">Preview</a></li>
                    <li class="p-2"><a href="#features">Features</a></li>

                    <li class="p-2"><a href="#faq">FAQs</a></li>
                </ul>
                <ul id="dropdiv" class="position-absolute w-100 dropdiv-sm"
                    style="list-style-type: none; font-weight: 500; margin-bottom: unset; letter-spacing: 0.5px; top: 53px; left:0; z-index: 999; background-color: white;">
                    <li><a href="#">Home</a></li>
                    <li><a href="#preview">Preview</a></li>
                    <li><a href="#features">Features</a></li>

                    <li><a href="#faq">FAQs</a></li>
                </ul>
                <div class="mk">
                    <span id="togglebtn" style="font-size: 20px; color:#fff"><i class="fa-solid fa-bars"></i></span>
                </div>
            </div>
        </nav>

        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-7 h-md-100 h-75">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100"
                        style="color: #fff;">
                        <h2 class="efficient">Efficient Loan Portfolio Management System</h2>
                        <p class="efficient">
                            Loan management involves overseeing borrowing activities, including application, approval,
                            disbursement, repayment, and monitoring, to ensure financial stability and compliance.</p>
                        <div class="d-flex gap-3 align-items-center">

                            <button class="py-1 px-3"
                                style="border: 1px solid #fff; background-color: transparent; color:#fff ;">GOOGLE
                                PLAY</button>
                            <button class="py-1 px-3"
                                style="border: 1px solid #fff;  background-color: transparent; color:#fff ;">APP
                                STORE</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 h-100">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                        <div class="w-100">

                            <img class="w-100" src="/bankmobileimage.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="  mt-4">

        <div class="bg-white" id="preview">
            <div class="container">

                <div class="swiper-container">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="picture">
                                <img src="https://images.moneycontrol.com/static-mcnews/2022/09/Home-Loan-1.png?impolicy=website&width=1600&height=900"
                                    alt="">
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="picture">
                                <img src="https://www.axisbank.com/images/default-source/progress-with-us_new/repaying-your-education-loan.jpg"
                                    alt="">

                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="picture">
                                <img src="https://images.moneycontrol.com/static-mcnews/2017/12/Rubique-Carloan-3-653x435.jpg"
                                    alt="">

                            </div>
                            <!-- <div class="detail">
                                <h3>Roger Rice</h3>
                                <span>Web Designer</span>
                            </div> -->
                        </div>
                        <div class="swiper-slide">
                            <div class="picture">
                                <img src="https://d6xcmfyh68wv8.cloudfront.net/learn-content/uploads/2021/07/small-business-loan.png"
                                    alt="">

                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="picture">
                                <img src="https://www.kannattu.com/wp-content/uploads/2021/11/gold_loan.png" alt="">

                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="picture">
                                <img src="https://www.axisbank.com/images/default-source/progress-with-us_new/uses-of-a-personal-loan.jpg?sfvrsn=107d0456_2"
                                    alt="Personal-loan">

                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="picture">
                                <img src="https://www.bankofbaroda.in/-/media/project/bob/countrywebsites/india/personal-banking/loans/personal-loan/baroda-personal-loan/spotlight/baroda-loan-to-pensioner-spotlight.jpg?h=400&iar=0&w=1080&hash=F5C1D3B987FB6D1D49EB96AAC2558C7D"
                                    alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="picture">
                                <img src="https://realmoneysol.com/wp-content/uploads/Loan-Against-Property-LAP.jpg"
                                    alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="picture">
                                <img src="https://paytmblogcdn.paytm.com/wp-content/uploads/2023/08/Blog_Paytm_Education-Loan-Eligibility-Criteria-Documents-Required.jpg"
                                    alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="picture">
                                <img src="https://www.indusind.com/iblogs/wp-content/uploads/personal-loan-3.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>


                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
        </div>

        <div id="features" class="bg-white mt-3">
            <div class="container">
                <div class="row py-3">
                    <div class="col-lg-4">
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex gap-3">
                                <div>
                                    <h5>Home Loan</h5>
                                    <p>Home loans are a type of secured credit that allows you to purchase or construct
                                        the home of your dreams. </p>
                                </div>
                                <span style="font-size: 20px;"><i class="fa-solid fa-compass"></i></span>
                            </div>
                            <div class="d-flex gap-3">
                                <div>
                                    <h5>Education loans</h5>
                                    <p> Education loans are used to fund higher education in India or abroad.</p>
                                </div>
                                <span style="font-size: 20px;"><i class="fa-solid fa-compass"></i></span>
                            </div>
                            <div class="d-flex gap-3">
                                <div>
                                    <h5>Vehicle loan</h5>
                                    <p>This loan is purchased for buying new vehicles or used one, whichever form it may
                                        be like a two or four-wheeler vehicle. The score of credit</p>
                                </div>
                                <span style="font-size: 20px;"><i class="fa-solid fa-compass"></i></span>
                            </div>
                            <div class="d-flex gap-3">
                                <div>
                                    <h5>Business loan</h5>
                                    <p>A business loan is akin to a revolving loan, only the outstanding amount attracts
                                        interest. There are multiple mediums of providing financing to businesses </p>
                                </div>
                                <span style="font-size: 20px;"><i class="fa-solid fa-compass"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-mid">
                            <img class="w-100 h-100"
                                src="https://www.cashe.co.in/wp-content/uploads/2023/11/personal-loan.png" alt="">

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex gap-3">
                                <span style="font-size: 20px;"><i class="fa-solid fa-compass"></i></span>
                                <div>
                                    <h5>Gold loan</h5>
                                    <p>Gold Loan. Gold loans allow borrowers to pledge gold jewellery in exchange for
                                        funds. </p>
                                </div>
                            </div>
                            <div class="d-flex gap-3">
                                <span style="font-size: 20px;"><i class="fa-solid fa-compass"></i></span>
                                <div>
                                    <h5>Personal loan </h5>
                                    <p>Unsecured, flexible amounts, fixed interest rates, varied repayment terms, quick
                                        approval, no collateral required, available for any purpose.</p>
                                </div>
                            </div>
                            <div class="d-flex gap-3">
                                <span style="font-size: 20px;"><i class="fa-solid fa-compass"></i></span>
                                <div>
                                    <h5>Pension loan</h5>
                                    <p>One who is retired and draws a monthly pension can avail of a personal loan
                                        against the security of their pension.</p>
                                </div>
                            </div>
                            <div class="d-flex gap-3">
                                <span style="font-size: 20px;"><i class="fa-solid fa-compass"></i></span>
                                <div>
                                    <h5>Loan against property</h5>
                                    <p>This is a kind of mortgage loan whereby the borrowers can avail of funds by
                                        mortgaging their property with the lender.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white mt-3 py-3" id="faq">
            <div class="container">
                <h4>Some frequently asked questions.</h4>
                <div class="accordion mt-3" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What types of loans do you offer?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Provide information on the various loan products available, such as personal loans,
                                business loans, mortgage loans, etc. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What are the eligibility criteria for applying for a loan?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Outline the requirements regarding age, income, credit score, employment status, and any
                                other criteria applicants must meet.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How can I apply for a loan?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Explain the application process, whether it's online through the website, in-person at a
                                branch, or via phone/email.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="mt-3">
        <div class="footer-top">
            <div class="footer-main container">
                <div>
                    <div style="width: 130px;">
                        <a href="#"> <img class="w-100" src="https://loan-management.options9.in/images/full_logo.png"
                                alt=""></a>
                    </div>
                    <p class="para-intro">Loan Management is an app that<br>helps you organize yourself on<br> the daily
                        basis using<br>
                        systematic
                        algorithms to<br>achieve success.</p>
                </div>
                <div class="menu-list">
                    <div>
                        <h6>Explore</h6>
                        <li><a href="#" style="text-decoration: none;color: #333;">About</a></li>
                        <li><a href="#features" style="text-decoration: none;color: #333;">Features</a></li>
                        <li><a href="#preview" style="text-decoration: none;color: #333;">How It Works</a></li>
                    </div>
                    <div>
                        <h6>Help</h6>
                        <li><a href="#faq" style="text-decoration: none;color: #333;">FAQ</a></li>
                        <li><a href="" style="text-decoration: none;color: #333;">Privacy Policy</a></li>
                        <li><a href="" style="text-decoration: none;color: #333;">Terms & Conditions</a></li>
                    </div>
                </div>
                <div class="menu-list2">
                    <div>
                        <h6>Contact info</h6>
                        <li>+91 999999999</li>
                        <li>test@gmail.com</li>
                    </div>
                    <div>
                        <h6>Download</h6>
                        <div class="download">
                            <div><a href=""><img src="google-play.png"></a></div>
                            <div class="img2"><a href=""><img src="app-store.png"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color: black; color: white;padding: 5px;font-size: 14px;">
            <div class="footer-tp">
                <div class="footer-btm">
                    <p>© 2024 Copyright Loan Management</p>
                    <div class="lineVr"></div>
                    <p class="pwr"><a href="https://www.acttconnect.com/">Powered by Act T Connect</a></p>
                </div>
            </div>
        </div>

    </footer>
    <script>
        $('#dropdiv').hide();
        $(document).ready(function () {
            $("#togglebtn").click(function () {
                $('#dropdiv').toggle();
            });
            $(".dv li ").hover(function () {
                $(this).css("border-bottom", "1px solid #fff");
            }, function () {
                $(this).css("border", "unset");
            });

        });
        // var swiper = new Swiper(".swiper-container", {
        //     effect: "coverflow",
        //     grabCursor: true,
        //     centeredSlides: true,
        //     slidesPerView: "auto",
        //     coverflowEffect: {
        //         rotate: 20,
        //         stretch: 0,
        //         depth: 350,
        //         modifier: 1,
        //         slideShadows: true
        //     },
        //     pagination: {
        //         el: ".swiper-pagination"
        //     }
        // });

    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var slideCount = document.querySelectorAll('.swiper-container .swiper-slide').length;
            var centerSlideIndex = Math.floor(slideCount / 2);

            var swiper = new Swiper(".swiper-container", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                initialSlide: centerSlideIndex,
                slidesPerView: "auto",
                coverflowEffect: {
                    rotate: 20,
                    stretch: 0,
                    depth: 350,
                    modifier: 1,
                    slideShadows: true,
                },
                pagination: {
                    el: ".swiper-pagination",
                },
            });
        });
    </script>
</body>

</html>