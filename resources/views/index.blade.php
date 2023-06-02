<!DOCTYPE html>
<html lang="en-US">
    <head>
        <!-- Meta setup -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="">
        <meta name="decription" content="">
        <meta name="author" content="Manik-it">
        <!-- Title -->
        <title>Site Title Here</title>
        <!-- Fav Icon -->
        <link rel="icon" href="{{ asset('img/fav.png') }}"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css') }}">
        <!-- Include Bootstrap -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
        <!-- Include Bootstrap -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}"/>
        <!-- Main StyleSheet -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"/>
    </head>
    <body >
        <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <section class="main-sections">
            <div class="container">
                <main>
                    <div class="step step-1 actives">
                        <div class="guidancemode-wrapper">
                            <div class="logo">
                                <a href="#"><img src="{{ asset('img/logo.svg') }}" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="verify-tp-title">
                                <h2>Verify your identity</h2>
                            </div>
                            <div class="guidanemode-body">
                                <div class="vy-slider">
                                    <div class="main-content">
                                        <div id="owl-csel1" class="owl-carousel owl-theme">
                                            <div>
                                                <div class="vy-slider-item">
                                                    <div class="vy-slider-img">
                                                        <img src="{{ asset('img/vy-1.png') }}" class="img-fluid" alt="">
                                                    </div>
                                                    <h3>Document Scan</h3>
                                                    <p>Will ask you to take a picture of your document</p>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="vy-slider-item">
                                                    <div class="vy-slider-img">
                                                        <img src="{{ asset('img/vy-2.png') }}" class="img-fluid" alt="">
                                                    </div>
                                                    <h3>Verify Scan</h3>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="vy-slider-item">
                                                    <div class="vy-slider-img">
                                                        <img src="{{ asset('img/vy-1.png') }}" class="img-fluid" alt="">
                                                    </div>
                                                    <h3>Take Selfie</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-theme">
                                            <div class="owl-controls">
                                                <div class="custom-nav owl-nav"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="guidanemode-footer">
                                <div class="start-btn">
                                    <button type="button" class="next-btn">Next</button>
                                </div>
                                <div class="f-logo">
                                    <a href="#" type="button" class="next-btn"><img src="{{ asset('img/f-logo.svg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="step step-2">
                        <div class="guidancemode-wrapper">
                            <div class="guidanemode-header vy-tab-header">
                                <ul>
                                    <li><a href="#" type="button" class="previous-btn"><img src="{{ asset('img/left-arrow.svg') }}" class="img-fluid" alt=""></a></li>
                                    <li>
                                        <h2>Verify using mobile phone</h2>
                                        <p>We have made it easy to verify yourself</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="guidanemode-body">
                                <div class="tabs">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <ul class="tab-links d-flex">
                                                <li class="activet"><a href="#tab1">QR Code</a></li>
                                                <li><a href="#tab2">Email</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="tab-content">
                                                <div id="tab1" class="tab activet">
                                                    <div>
                                                        <div class="qr-content">
                                                            <p>Scan the QR code to complete <br>verification on your mobile phone</p>
                                                            <div class="qu-code-img">
                                                                <img src="{{ asset('img/qr-img.svg') }}" class="img-fluid" alt="qr-img">
                                                            </div>
                                                            <div class="qr-btn-link">
                                                                <span>OR</span>
                                                                <button type="button" class="next-btn">continue on web</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="tab2" class="tab">
                                                    <div>
                                                        <div class="tab-email-content">
                                                            <h3>Receive a link via email</h3>
                                                            <p>Enter your email address and we will send you a link to complete this verification on a different devices.</p>
                                                            <form action="#">
                                                                <input type="email" required placeholder="Email address">
                                                            </form>
                                                            <small>If you didn't see email then check spam folder</small>
                                                            <div class="qr-btn-link">
                                                                <span>OR</span>
                                                                <button type="button" class="next-btn">SEND A LINK</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="guidanemode-footer">
                                <div class="f-logo">
                                    <a href="#"><img src="{{ asset('img/f-logo.svg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="step step-3">
                        <div class="guidancemode-wrapper">
                            <div class="guidanemode-header">
                                <ul>
                                    <li><a href="#" type="button" class="previous-btn"><img src="{{ asset('img/left-arrow.svg') }}" class="img-fluid" alt=""></a></li>
                                    <li>
                                        <h2>Verify your identity</h2>
                                        <p>Select a document type..</p>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('img/infof1.svg') }}" alt="icon"></a></li>
                                </ul>
                            </div>
                            <div class="guidanemode-body">
                                <div class="select-id-etc-area">
                                    <form action="#" id="kyc_type_form">
                                        <div class="custom-radio_button">
                                            <input type="radio" id="radio1" name="radio-group" checked>
                                            <label for="radio1"><img src="{{ asset('img/id1.svg') }}" class="img-fluid" alt="">ID Card</label>
                                        </div>
                                        <div class="custom-radio_button">
                                            <input type="radio" id="radio2" name="radio-group">
                                            <label for="radio2"><img src="{{ asset('img/id1.svg') }}" class="img-fluid" alt="">Passport</label>
                                        </div>
                                        <div class="custom-radio_button">
                                            <input type="radio" id="radio3" name="radio-group">
                                            <label for="radio3"><img src="{{ asset('img/id1.svg') }}" class="img-fluid" alt="">Driving License</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="guidanemode-footer">
                                <div class="start-btn">
                                    <button type="button" class="next-btn">Next</button>
                                </div>
                                <div class="f-logo">
                                    <a href="#"><img src="{{ asset('img/f-logo.svg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="step step-4">
                        <div class="guidancemode-wrapper" id="screen-4">
                            <div class="guidanemode-header">
                                <ul>
                                    <li><a href="#" type="button" class="previous-btn"><img src="{{ asset('img/left-arrow.svg') }}" class="img-fluid" alt=""></a></li>
                                    <li>
                                        <h2>Verify your identity</h2>
                                        <p>To do this, we'll need the following..</p>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('img/infof1.svg') }}" alt="icon"></a></li>
                                </ul>
                            </div>
                            <div class="guidanemode-body">
                                <div class="select-id-following-area">
                                    <ul>
                                        <li>
                                            <h2>1</h2>
                                            <p><img src="{{ asset('img/id1.svg') }}" alt="">Picture of your <span class="doc_type">ID Card</span> - Front</p>
                                        </li>
                                        <li>
                                            <h2>2</h2>
                                            <p><img src="{{ asset('img/id2.svg') }}" alt="">Picture of your <span class="doc_type">ID Card</span> - Back</p>
                                        </li>
                                        <li>
                                            <h2>3</h2>
                                            <p><img class="user-imgss" src="{{ asset('img/user.svg') }}" alt="">Take a selfie picture</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tram-of-uses">
                                    <p><a href="#">Consents</a>&<a href="#">Term of Use</a></p>
                                    <div class="checkbox-area">
                                        <label class="check-box"><small> I confirm I have read, understood and agree to continue.</small><br>
                                        <input type="checkbox" id="agree_check" >
                                        <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="guidanemode-footer">
                                <div class="start-btn">
                                    <button type="button" class="next-btn">Next</button>
                                </div>
                                <div class="f-logo">
                                    <a href="#"><img src="{{ asset('img/f-logo.svg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="step step-5">
                        <div class="guidancemode-wrapper">
                            <div class="guidanemode-header">
                                <ul>
                                    <li><a href="#" type="button" class="previous-btn"><img src="{{ asset('img/left-arrow.svg') }}" class="img-fluid" alt=""></a></li>
                                    <li>
                                        <h2>Verify your identity</h2>
                                        <p>You'll need to take a photo of your ID.</p>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('img/infof1.svg') }}" alt="icon"></a></li>
                                </ul>
                            </div>
                            <div class="guidanemode-body">
                                <div class="select-id-card-example">
                                    <div class="ex-id-card-ck">
                                        <img src="{{ asset('img/ex-id-card.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="guidanemode-footer">
                                <div class="start-btn">
                                    <button type="button" class="next-btn">Next</button>
                                </div>
                                <div class="f-logo">
                                    <a href="#"><img src="{{ asset('img/f-logo.svg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="step step-6">
                        <div class="guidancemode-wrapper" ">
                            <div class="guidanemode-header">
                                <ul>
                                    <li><a href="#" type="button" class="previous-btn"><img src="{{ asset('img/left-arrow.svg') }}" class="img-fluid" alt=""></a></li>
                                    <li>
                                        <h2>Verify your ID Card</h2>
                                        <p>You'll need to take a photo of your ID.</p>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('img/infof1.svg') }}" alt="icon"></a></li>
                                </ul>
                            </div>
                            <div class="guidanemode-body">
                                <div class="select-id-card-example">
                                    <div class="check-id-card-front">
                                        <div class="id-f-title"><span>FRONT SIDE</span></div>
                                        <div class="id-check-camera-body">
                                            <video id="videoCam"></video>
                                        </div>
                                        <p>We'll ask you to enable camera access. <br><a href="#">More about verification</a></p>
                                        <div class="camera-btn-item">
                                            <ul>
                                                <li><a href="#"><img src="{{ asset('img/Isolation_Mode.svg') }}"class="img-fluid"  alt=""><span>Flip Camera</span></a></li>
                                                <li><a id="startbutton" class="next-btn" href="#"><img  src="{{ asset('img/camera.svg') }}" class="img-fluid cammera-icon" alt=""></a></li>
                                                <!-- <li>
                                                    <button type="button" class="next-btn"><img src="{{ asset('img/upload.svg') }}" class="img-fluid" alt=""><span>Upload Document</span></button>
                                                    <a href="06-Check_ID_front_back.html"></a>
                                                </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="guidanemode-footer">
                                <div class="f-logo">
                                    <a href="#"><img src="{{ asset('img/f-logo.svg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="step step-7">
                        <div class="guidancemode-wrapper">
                            <div class="guidanemode-header">
                                <ul>
                                    <li><a href="#" type="button" class="previous-btn"><img src="{{ asset('img/left-arrow.svg') }}" class="img-fluid" alt=""></a></li>
                                    <li>
                                        <h2>Clarity Check</h2>
                                        <p>Make sure picture and text are clear</p>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('img/infof1.svg') }}" alt="icon"></a></li>
                                </ul>
                            </div>
                            <div class="guidanemode-body">
                                <div class="select-id-card-example">
                                    <div class="check-id-card-front">
                                        <canvas id="canvas" style="display: none;"></canvas>
                                        <div class="id-check-camera-body">
                                            <div class="camera-show-img">
                                                <img id="photo" src="{{ asset('img/sample_id.png') }}" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="camera-img-up-btn">
                                            <button id="backpartbutton" type="button" class="next-btn">Looks good</button>
                                            <p id="retake-button">Retake the photo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="guidanemode-footer">
                                <div class="f-logo">
                                    <a href="#"><img src="{{ asset('img/f-logo.svg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="step step-8">
                        <div class="guidancemode-wrapper" ">
                            <div class="guidanemode-header">
                                <ul>
                                    <li><a href="#" type="button" class="previous-btn"><img src="{{ asset('img/left-arrow.svg') }}" class="img-fluid" alt=""></a></li>
                                    <li>
                                        <h2>Verify your ID Card</h2>
                                        <p>You'll need to take a photo of your ID.</p>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('img/infof1.svg') }}" alt="icon"></a></li>
                                </ul>
                            </div>
                            <div class="guidanemode-body">
                                <div class="select-id-card-example">
                                    <div class="check-id-card-front">
                                        <div class="id-f-title"><span>BACK SIDE</span></div>
                                        <div class="id-check-camera-body">
                                            <video id="videoCam1"></video>
                                        </div>
                                        <p>We'll ask you to enable camera access. <br><a href="#">More about verification</a></p>
                                        <div class="camera-btn-item">
                                            <ul>
                                                <li><a href="#"><img src="{{ asset('img/Isolation_Mode.svg') }}"class="img-fluid"  alt=""><span>Flip Camera</span></a></li>
                                                <li><a id="startbutton1" class="next-btn" href="#"><img  src="{{ asset('img/camera.svg') }}" class="img-fluid cammera-icon" alt=""></a></li>
                                                <!-- <li>
                                                    <button type="button" class="next-btn"><img src="{{ asset('img/upload.svg') }}" class="img-fluid" alt=""><span>Upload Document</span></button>
                                                    <a href="06-Check_ID_front_back.html"></a>
                                                </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="guidanemode-footer">
                                <div class="f-logo">
                                    <a href="#"><img src="{{ asset('img/f-logo.svg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="step step-9">
                        <div class="guidancemode-wrapper">
                            <div class="guidanemode-header">
                                <ul>
                                    <li><a href="#" type="button" class="previous-btn"><img src="{{ asset('img/left-arrow.svg') }}" class="img-fluid" alt=""></a></li>
                                    <li>
                                        <h2>Clarity Check</h2>
                                        <p>Make sure picture and text are clear</p>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('img/infof1.svg') }}" alt="icon"></a></li>
                                </ul>
                            </div>
                            <div class="guidanemode-body">
                                <div class="select-id-card-example">
                                    <div class="check-id-card-front">
                                        <canvas id="canvas1" style="display: none;"></canvas>
                                        <div class="id-check-camera-body">
                                            <div class="camera-show-img">
                                                <img id="photo1" src="{{ asset('img/sample_id.png') }}" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="camera-img-up-btn">
                                            <button id="backpartbutton1" type="button" class="next-btn">Looks good</button>
                                            <p id="retake-button1">Retake the photo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="guidanemode-footer">
                                <div class="f-logo">
                                    <a href="#"><img src="{{ asset('img/f-logo.svg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="step step-10">
                        <div class="guidancemode-wrapper" id="screen-country">
                            <div class="guidanemode-header">
                                <ul>
                                    <li><a href="#" type="button" class="previous-btn"><img src="{{ asset('img/left-arrow.svg') }}" class="img-fluid" alt=""></a></li>
                                    <li>
                                        <h2>Enter Country</h2>
                                        <p>Select your Country</p>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('img/infof1.svg') }}" alt="icon"></a></li>
                                </ul>
                            </div>
                            <div class="guidanemode-body">
                                <div class="select-your-countrys">
                                    <form action="#">
                                        <select name="" id="">
                                            <option>Country</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AX">Aland Islands</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarctica</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia</option>
                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="BN">Brunei Darussalam</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CX">Christmas Island</option>
                                            <option value="CC">Cocos (Keeling) Islands</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CG">Congo</option>
                                            <option value="CD">Congo, Democratic Republic of the Congo</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CI">Cote D'Ivoire</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CW">Curacao</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Equatorial Guinea</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="TF">French Southern Territories</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GU">Guam</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GG">Guernsey</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HM">Heard Island and Mcdonald Islands</option>
                                            <option value="VA">Holy See (Vatican City State)</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran, Islamic Republic of</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                            <option value="KR">Korea, Republic of</option>
                                            <option value="XK">Kosovo</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Lao People's Democratic Republic</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libyan Arab Jamahiriya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macao</option>
                                            <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia, Federated States of</option>
                                            <option value="MD">Moldova, Republic of</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="AN">Netherlands Antilles</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="MP">Northern Mariana Islands</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PW">Palau</option>
                                            <option value="PS">Palestinian Territory, Occupied</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="RE">Reunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russian Federation</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="BL">Saint Barthelemy</option>
                                            <option value="SH">Saint Helena</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="MF">Saint Martin</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">Sao Tome and Principe</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="CS">Serbia and Montenegro</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SX">Sint Maarten</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                            <option value="SS">South Sudan</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syrian Arab Republic</option>
                                            <option value="TW">Taiwan, Province of China</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania, United Republic of</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TL">Timor-Leste</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States</option>
                                            <option value="UM">United States Minor Outlying Islands</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="VN">Viet Nam</option>
                                            <option value="VG">Virgin Islands, British</option>
                                            <option value="VI">Virgin Islands, U.s.</option>
                                            <option value="WF">Wallis and Futuna</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                            <div class="guidanemode-footer">
                                <div class="start-btn">
                                    <button type="button" class="next-btn">Next</button>
                                </div>
                                <div class="f-logo">
                                    <a href="#"><img src="{{ asset('img/f-logo.svg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="step step-11">
                        <div class="guidancemode-wrapper" id="screen-drop-file">
                            <div class="guidanemode-header">
                                <ul>
                                    <li><a href="#" type="button" class="previous-btn"><img src="{{ asset('img/left-arrow.svg') }}" class="img-fluid" alt=""></a></li>
                                    <li>
                                        <h2>Upload Document</h2>
                                        <p>Please upload the following documents </p>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('img/infof1.svg') }}" alt="icon"></a></li>
                                </ul>
                            </div>
                            <div class="guidanemode-body">
                                <div class="select-your-countrys">
                                    <div class="wrapper">
                                        <div class="drop">
                                            <div class="cont">
                                                <i class="fa fa-cloud-upload"></i>
                                                <div class="tit">
                                                    Electricy Bill
                                                </div>
                                                <div class="desc">
                                                    in jpeg or pdf format
                                                </div>
                                                <div class="browse">
                                                    Drop Document inside the box
                                                </div>
                                            </div>
                                            <output id="list"></output><input id="filess" multiple="true" name="files[]" type="file" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="guidanemode-footer">
                                <div class="start-btn">
                                    <button type="button" class="next-btn">Next</button>
                                </div>
                                <div class="f-logo">
                                    <a href="#"><img src="{{ asset('img/f-logo.svg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="step step-12">
                        <div class="guidancemode-wrapper" id="screen-5-3">
                            <div class="guidanemode-header">
                                <ul>
                                    <li><a href="#" type="button" class="previous-btn"><img src="{{ asset('img/left-arrow.svg') }}" class="img-fluid" alt=""></a></li>
                                    <li>
                                        <h2>Verify that it’s you</h2>
                                        <p>Take a selfie</p>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('img/infof1.svg') }}" alt="icon"></a></li>
                                </ul>
                            </div>
                            <div class="guidanemode-body">
                                <div class="ex-id-card-ck selfe-guid">
                                    <img src="{{ asset('img/tk-sl.png') }}" class="img-fluid" alt="">
                                </div>
                                <div class="selfe-guid-content">
                                    <h2>For the best scan results</h2>
                                    <ul>
                                        <li><img src="{{ asset('img/light.svg') }}" alt="">Find an area with good lighting</li>
                                        <li><img src="{{ asset('img/ic.svg') }}" alt="">Make sure your camera is at eye level</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="guidanemode-footer">
                                <div class="start-btn gd-btn">
                                    <button type="button" class="next-btn">I’m Ready</button>
                                </div>
                                <div class="f-logo">
                                    <a href="#"><img src="{{ asset('img/f-logo.svg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="step step-13">
                        <div class="take-selfie-wrapper">
                            <video id="videoCam2"></video>
                            <div class="guidanemode-header">
                                <ul>
                                    <li><a href="#" type="button" class="previous-btn"><img src="{{ asset('img/left-arrow.svg') }}" class="img-fluid" alt=""></a></li>
                                    <li>
                                        <h2>Verify that it’s you</h2>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('img/infof1.svg') }}" alt="icon"></a></li>
                                </ul>
                            </div>
                            <span class="space1"></span>
                            <!-- take-selfie-start -->
                            <div class="take-selfie-screen">
                                <!--<img src="{{ asset('img/clip-path.svg') }}" class="img-fluid" alt="">-->
                            </div>
                            <!-- take-selfie-end -->
                            <div class="click-selfie-btn">
                                <span>
                                    <a id="startbutton2" class="next-btn" href="#"><img src="{{ asset('img/camera.svg') }}" alt=""></a>
                                </span>
                            </div>
                            <div class="tk-test">
                                <ul>
                                    <li><a href="#"><img src="{{ asset('img/f-logo.svg') }}" alt=""></a></li>
                                    <li class="photo-text">
                                        <p>Take a selfie <br><span>More about face verification</span></p>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('img/Isolation_Mode.svg') }}" class="img-fluid" alt=""><span>Flip Camera</span></a></li>
                                </ul>
                                <canvas id="canvas2" style="display: none;"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="step step-14">
                        <section class="verify-identity-area">
                            <div class="container">
                                <div class="loading-wrapper">
                                    <div class="loadign-content">
                                        <div class="load-icon">
                                            <img src="{{ asset('img/load.svg') }}" class="img-fluid" alt="">
                                        </div>
                                        <p>Analyzing....</p>
                                    </div>
                                </div>
                                
                            </div>
                        </section>
                    </div>

                    <div class="step step-15">
                        <section class="verify-identity-area">
                            <div class="container">
                                <div class="guidancemode-wrapper" id="screen-suc">
                                    
                                     <div class="guidanemode-body">
                                        <div class="confirmation-ck">
                                            <img src="{{ asset('img/check-mark.svg') }}" class="img-fluid" alt="">
                                            <h3>Successful</h3>
                                            <p>Your ID verification successful, <br>
                                                thank you using Faceki</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </section>
                    </div>


                    <div class="step step-16">
                        <section class="verify-identity-area">
                            <div class="container">
                                <div class="guidancemode-wrapper" id="screen-suc">
                                    
                                     <div class="guidanemode-body">
                                        <div class="confirmation-ck">
                                            <img src="{{ asset('img/cheack-f.svg') }}" class="img-fluid" alt="">
                                            <h3>Extra <br> Verification <br>
                                                Required</h3>
                                            <p>Couldn’t verify your identity, <br>
                                                Please contact us on info@faceki.com</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </section>
                    </div>
					
                </main>
            </div>
        </section>
        <!-- Main jQuery -->
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>		
        <!-- Bootstrap Js -->
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <!-- Custom jQuery -->
        <script src="{{ asset('js/owl.carousel.js') }}"></script>
        <!-- Fontawesome Script -->
        <script src="https://kit.fontawesome.com/e7f2043049.js') }}"></script>
        <!-- Custom jQuery -->
        <script src="{{ asset('js/faceki-startup.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>

        <!-- Scroll-Top button -->
        <a href="#" class="scrolltotop"><i class="fas fa-angle-up"></i></a>
    </body>
</html>
