<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Footer Contact Us</title>
</head>
<body>
    <footer class="footer text-center" style="background-color:#e77821;">
        <br id="lokasi">
        <div class="container">
            <div class="row">
                <div class="col"><h4 class="text-uppercase text-start fs-5 fw-bold text-white mt-2">Manna Kampus</h4></div>
                <div class="col text-end">
                    <a href="https://www.facebook.com/mirota.kmps/" class="fa fa-facebook"></a>
                    <a href="mailto:humasmirotanayan@gmail.com" class="fa fa-at"></a>
                    <a href="https://www.linkedin.com/company/mirota-kampus/mycompany/" class="fa fa-linkedin"></a>
                    <a href="https://www.linkedin.com/company/mirota-kampus/mycompany/" class="fa fa-whatsapp"></a>
                    {{-- <p class="btn btn-outline-light btn-social mx-1" href="#!"><i class="bi bi-whatsapp"></i></a> --}}
                </div>
            </div>
            
            <hr class="divider text-white" />
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-3 mb-5 mb-lg-0 text-white">
                    <h4 class="text-uppercase mb-2 text-start fs-5 fw-bold">Promosi</h4>
                    <p class="lead mb-0 text-start fs-6 fw-semibold">
                        <a class="nav-link text-start" href="#">Big Event</a>
                        <a class="nav-link text-start" href="#">Katalog Jumat</a>
                        <a class="nav-link text-start" href="#">Katalog Tanggal Muda</a>
                        <a class="nav-link text-start" href="#">Katalog Event</a>
                    </p>
                    <br><br>
                    <h4 class="text-uppercase mb-2 text-start fs-5 fw-bold">Online Shopping</h4>
                    <p class="lead mb-0 text-start fs-6 fw-semibold">
                        <a class="nav-link text-start" href="https://play.google.com/store/apps/details?id=com.mirotakampus.mkonline">Via Manna Kampus Online</a>
                        <a class="nav-link text-start" href="#">Via Grabmart</a>
                        <a class="nav-link text-start" href="#">Via Blibli</a>
                        <a class="nav-link text-start" href="#">Via Shopee</a>
                        <a class="nav-link text-start" href="#">Via Lazada</a>
                    </p>
                </div>
                <!-- Footer Location-->
                <div class="col-lg-2 mb-5 mb-lg-0 text-white">
                    <h4 class="text-uppercase mb-2 text-start fs-5 fw-bold">Karir</h4>
                    <p class="lead mb-0 text-start fs-6 fw-semibold">
                        <a class="nav-link text-start" href="#">Info Lowongan Kerja</a>
                        <a class="nav-link text-start" href="#">Hasil Tes</a>
                        <a class="nav-link text-start" href="#">Event</a>
                        <a class="nav-link text-start" href="#">Other</a>
                    </p>
                    <br><br>
                    <h4 class="text-uppercase mb-2 text-start fs-5 fw-bold">Blog</h4>
                    <p class="lead mb-0 text-start fs-6 fw-semibold">
                        <a class="nav-link text-start" href="#">Info Pelanggan</a>
                        <a class="nav-link text-start" href="#">Resep Dapur</a>
                        <a class="nav-link text-start" href="#">Seputar Produk</a>
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-3 mb-5 mb-lg-0 text-white">
                    <h4 class="text-uppercase mb-3 text-start fs-5 fw-bold">Tentang</h4>
                    {{-- <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="bi bi-facebook"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="bi bi-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="bi bi-linkedin"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="bi bi-globe2"></i></a> --}}
                </div>
                <!-- Footer About Text-->
                {{-- <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-3 fs-5 fw-bold text-white">Customer Care</h4>
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-2">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Full name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-2">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-2">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-2">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-warning btn-xl disabled text-white fw-bold" id="submitButton" type="submit">Submit</button></div>
                    </form>
                    {{-- <h4 class="text-uppercase mb-4">About Freelancer</h4>
                    <p class="lead mb-0">
                        Freelance is a free to use, MIT licensed Bootstrap theme created by
                        <a href="http://startbootstrap.com">Start Bootstrap.</a>
                    </p> --}}
                {{--</div> --}}
            </div>
        </div>
        <br>
    </footer>
</body>
</html>