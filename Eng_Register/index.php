<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>www.appspghan2018.com</title>

    <script src="plugins/jquery-2.1.4.min.js"></script>

    <!-- bootstrap for better look example, but not necessary -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css" type="text/css" media="screen, projection">

    <!-- Step Form Wizard plugin -->
    <link rel="stylesheet" href="step-form-wizard/css/step-form-wizard-all.css" type="text/css" media="screen, projection">
    <script src="step-form-wizard/js/step-form-wizard.js"></script>

    <!-- nicer scroll in steps -->
    <link rel="stylesheet" href="plugins/mcustom-scrollbar/jquery.mCustomScrollbar.min.css">
    <script src="plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#wizard_example").stepFormWizard({
                transition: '3d-cube', // slide, fade, 3d-cube, none
                duration: 2000,
                theme: 'circle'
            });
        })
        $(window).load(function () {
            /* only if you want use mcustom scrollbar */
            $(".sf-step").mCustomScrollbar({
                theme: "dark-3",
                scrollButtons: {
                    enable: true
                }
            });
        });
    </script>

    <style>
        pre {
            margin: 45px 0 60px;
        }
        
        h2 {
            margin: 60px 0 30px 0;
        }
        
        p {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="site-index">
            <div class="body-content">
                <div class="row">

                    <div class="col-md-12">
      <img src="img/banner.png" width="30%">
                        <form id="wizard_example" action="http://www.demo-web.96.lt/appspghan2018/register/complete_register.php">
                            <fieldset>
                                <legend>Create your account</legend>
                         
                                <br>
                                <div class="row">
                                    <div class="col-lg-6">
                                  
                                    </div>
                                    <div class="col-lg-6">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email *</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" placeholder="Email *">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password *</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" placeholder="Password *">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Confirm Password *</label>
                                            <input type="password" class="form-control" id="exampleInputEmail1" name="Confirmpassword" placeholder="Confirm Password *">
                                        </div>
                                    </div>
                               
                                </div> &nbsp; Remark : * = Required fields
                            </fieldset>
                            <fieldset>
                                <legend>Personal information</legend>
                             
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="Title">Title *</label>
                                            <select class="form-control" name="Title" value="">
                                                <option value="mr" SELECTED>Mr.</option>
                                                <option value="ms">Ms.</option>
                                                <option value="Mrs">Mrs.</option>
                                                <option value="Dr">Dr.</option>
                                                <option value="Asstprof">Asst. Prof</option>
                                                <option value="Assocprof">Assoc. Prof</option>
                                                <option value="prof">Prof.</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <br>
                                            <!-- 1 -->
                                            <label for="First Name">First Name *</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="FirstName" placeholder="First Name *">
                                            <br>
                                             <!-- 2 -->
                                             <label for="Last Name">Middle Name </label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="Middle name" placeholder="Middle Name ">
                                            <br>
                                            
                                           <!-- 2 -->
                                             <label for="Last Name">Last Name *</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="Last Name name" placeholder="Last Name Name *">
                                            <br>

                                            <!-- 4 -->
                                            <label for="Medical License">Medical License No. (only for Thai physicians) </label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="medicallicense" placeholder="Medical License No. (only for Thai physicians)">
                                            <br>
                                            <!-- 5 -->
                                            <label for="Role*">Role * </label>
                                            <select class="form-control">
                                                <option value="Physicians">Physician</option>
                                                <option value="Fellow">Fellow</option>
                                                <option value="Resident">Resident</option>
                                                <option value="Nurse">Nurse</option>
                                                <option value="Dietitian">Dietitian</option>
                                                <option value="Dietitian">Pharmacist</option>
                                                <option value="Others">Others</option>



                                            </select>
                                            <br>
                                            <!-- 6 -->
                                            <label for="Specialty">Specialty (for physicians)</label>
                                            <select class="form-control" data-placeholder="Specialty " tabindex="1">
                                            

                                                <option value="Gastroenterologist"> Gastroenterologist/hepatologist
                                                </option>

                                                <option value="Nutritionist">Nutritionist</option>

                                                <option value="Pediatric Gastroenterologist">Pediatric Gastroenterologist/hepatologist</option>

                                                <option value="Pediatric Nutritionist">Pediatric Nutritionist</option>

                                                <option value="General Pediatrician">General Pediatrician</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <br>
                                            <!-- 7 -->
                                            <label for="Telephone">Telephone No.</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="Telephone" placeholder="Telephone No. *">
                                            <br>
                                            <!-- 8 -->
                                            <label for="Mobile">Mobile No.</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="MobileNo" placeholder="Mobile No. ">




<br>

 <p> Remark : * = Required fields</p>

                                        </div>



                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="institution">Hospital/Institution *</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="institution" placeholder="Hospital/Institution *">
                                                <br>
                                                 <!-- 3 -->
                                            <label for="Department">Department *</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="Department" placeholder="Department *">
                                            <!-- 1-2 -->   <br>
                                            <label for="Address">Address *</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="Address" placeholder="Address *">
    <br>
                                            <!-- 2-2 -->  
                                            <label for="City">City *</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="City" placeholder="City *">
    <br>   
                                            <!-- 3-2 -->

                                            <label for="State">State </label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="State" placeholder="State ">
                                            <!-- 4-2 -->
    <br>
                                            <label for="PostalCode">Post Code  *</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="Post Code" placeholder="Post Code *">
                                            <!-- 5-2 -->    <br>
                                            <label for="country">Country *</label>
                                            <select class="form-control" name="country">

                                                <option value="" selected>Country<font class=require>*</font> </option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D Ivoire">Cote D Ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="D,P,R, Korea">D,P,R, Korea</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="East Timor">East Timor</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands">Falkland Islands</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="France Metropolitan">France Metropolitan</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong SAR PRC">Hong Kong SAR PRC</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran">Iran</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea">Korea</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People s Republic">Lao People s Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macau">Macau</option>
                                                <option value="Macedonia">Macedonia</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia">Micronesia</option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="NULL">NULL</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Other-Not Shown">Other-Not Shown</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and the South Sandwich Isl ">South Georgia and the South Sandwich Isl </option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="St Helena">St Helena</option>
                                                <option value="St Pierre and Miquelon">St Pierre and Miquelon</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania">Tanzania</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands     ">United States Minor Outlying Islands </option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                <option value="Virgin Islands (US)">Virgin Islands (US)</option>
                                                <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Yugoslavia">Yugoslavia</option>
                                                <option value="Zaire">Zaire</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>


                                        </div>


                                        <div class="form-group">
                                            <label>
                                                <label for="Food">Food</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><p>
                                             <input type="radio" name="Food" value="Normal" checked>&nbsp;Normal   <p>
                                                <input type="radio" name="Food" value="Vegetarian" checked>&nbsp;Vegetarian<p>
                                                <input type="radio" name="Food" value="Halal" checked>&nbsp;Halal<p>
                                                   <input type="radio" name="Food" value="" checked>&nbsp;Others &nbsp;&nbsp;<input type="text" name="Food" value="" checked>
                                                    
                                            </label>
                                        </div>


                                    </div>


                                    <noscript>
                                        <input class="nocsript-finish-btn sf-right nocsript-sf-btn" type="submit" name="no-js-clicked" value="finish" />
                                    </noscript>
                                </div>

                            </fieldset>

                        </form>
                    </div>
                </div>



                <footer class="footer">
                    <div class="container">
                        <p class="pull- center">© appspghan2018.com</p>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>

</html>