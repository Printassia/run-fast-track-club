<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS Style Sheet -->
    <link rel="stylesheet" href="style.css" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora&display=swap"
      rel="stylesheet"
    />
    <!-- ADD IMAGE IN TITLE/FACION I BELIEVE -->
    <title>Run Fast Track Club</title>
  </head>
  <body class="pageBody">
     <!-- Navbar -->
  <?php include 'navbar.php';?>
  <!-- END OF NAVBAR -->

    <!-- HEADER -->
    <h2 id="registrationTitle">Registeration Form</h2>
  <div id="registrationForm">
    <!-- Form -->
    <form action="">
      <p class="registration-text">
        To become a memeber of Run Fast Track Club, please complete the following
        form.
      </p>
      <!-- FIRST ROW: Section Athlete Name -->
       <!-- First Name -->
        <label for="firstName">First Name</label>
        <input type="text" name="firstName" id="firstName" placeholder="First Name"/>
        
        <!-- Middle Name -->
        <label for="middleName">Middle Name(s)</label>
        <input type="text" name="middleName" id="middleName" placeholder="Middle Name(s)"/>
        
        <!-- Last Name -->
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" id="lastName" placeholder="Last Name" />
        <!-- END OF FIRST ROW: Section Athlete Name -->
    
        <br> <!--NEW LINE-->

<!-- START OF SECOND ROW: Section Athlete Address -->
 <label for="address">Address</label>
 <input type="text" name="address" id="address" placeholder="Address"/>
<!--END OF SECOND ROW: Section Athlete Address -->

<br> <!--NEW LINE-->

<!-- START OF THIRD ROW: Section Athlete Age & DOB  -->
 <!-- AGE -->
 <label for="age">Age</label>
 <input type="number" name="age" id="age" placeholder="Age"/>

 <!-- DOB -->
 <label for="dob">Birthday</label>
 <input type="date" name="dob" id="lastName"/>

 <br> <!--NEW LINE-->
 
<!--END OF THIRD ROW: Section Athlete Age & DOB -->

<!-- Section Athlete Contact Info -->
  <!-- Contact Number -->
  <label for="telephoneNumber">Contact Number</label>
  <input type="tel" name="telephoneNumber" id="telephoneNumber" placeholder="Contact Number" />
  
 <!-- Email -->
  <label for="email">Email</label>
  <input type="email" name="email" id="email" placeholder="Email" />
  
<!-- Country -->
  <label for="country">Country</label>
  <input list="country" placeholder="Country" />
  <datalist id="country">
    <!-- A Countries ">-->
    <option value="Afghanistan">
    <option value="Albania">
    <option value="Algeria">
    <option value="Andorra">
    <option value="Angola">
    <option value="Antigua and Barbuda">
    <option value="Argentina">
    <option value="Armenia">
    <option value="Australia">
    <option value="Austria">
    <option value="Austrian Empire Azerbaijan">
    <!-- B Countries -->
    <option value="Bahamas, The">
    <option value="Bahrain">
    <option value="Bangladesh">
    <option value="Barbados">
    <option value="Bavaria">
    <option value="Belarus">
    <option value="Belgium">
    <option value="Belize">
    <option value="Benin">
    <option value="Bolivia">
    <option value="Bosnia and Herzegovina">
    <option value="Botswana">
    <option value="Brazil">
    <option value="Brunei">
    <option value="Bulgaria">
    <option value="Burkina Faso">
    <option value="Burma">
    <option value="Burundi">
    <!-- C Countries -->
    <option value="Cabo Verde">
    <option value="Cambodia">
    <option value="Cameroon">
    <option value="Canada">
    <option value="Cayman Islands, The">
    <option value="Central African Republic">
    <option value="Chad">
    <option value="Chile">
    <option value="China">
    <option value="Colombia">
    <option value="Comoros">
    <option value="Costa Rica">
    <option value="Cote d’Ivoire (Ivory Coast)">
    <option value="Croatia">
    <option value="Cuba">
    <option value="Cyprus">
    <option value="Czechia">
    <option value="Czechoslovakia">
      <!-- D Countries -->
    <option value="Democratic Republic of Congo">
    <option value="Denmark">
    <option value="Djibouti">
    <option value="Dominica">
    <option value="Dominica Republic">
    <!-- E Countries -->
    <option value="Ecuador">
    <option value="Egypt">
    <option value="El Salvador">
    <option value="Equatorial Guinea">
    <option value="Eritrea">
    <option value="Estonia">
    <option value="Eswatini">
    <option value="Ethiopia">
    <!-- F Countries -->
    <option value="Fiji">
    <option value="Finland">
    <option value="France">
      <!-- G Countries -->
    <option value="Gabon">
    <option value="Gambia, The">
    <option value="Georgia">
    <option value="Germany">
    <option value="Ghana">
    <option value="Greece">
    <option value="Grenada">
    <option value="Guatemala">
    <option value="Guinea">
    <option value="Guinea-Bissau">
    <option value="Guayana">
      <!-- H Countries -->
    <option value="Haiti">
    <option value="Honduras">
    <option value="Hungary">
      <!-- I Countries -->
    <option value="Iceland">
    <option value="India">
    <option value="Indonesia">
    <option value="Iran">
    <option value="Iraq">
    <option value="Ireland">
    <option value="Israel">
    <option value="Italy">
        <!-- J Countries -->
    <option value="Jamaica">
    <option value="Japan">
    <option value="Jordan">
        <!-- K Countries -->
    <option value="Kazakhstan">
    <option value="Kenya">
    <option value="Kiribati">
    <option value="Korea">
    <option value="Kosovo">
    <option value="Kwait">
    <option value="Kyrgystan">
      <!-- L Countries -->
    <option value="Laos">
    <option value="Latvia">
    <option value="Lebanon">
    <option value="Lesotho">
    <option value="Liberia">
    <option value="Libya">
    <option value="Liechtenstein">
    <option value="Lithuania">
    <option value="Luxembourg">
      <!-- M Countries -->
    <option value="Madagascar">
    <option value="Malawi">
    <option value="Malaysia">
    <option value="Maldives">
    <option value="Mali">
    <option value="Malta">
    <option value="Marshall Islands">
    <option value="Mauritania">
    <option value="Mauritius">
    <option value="Mexico">
    <option value="Micronesia">
    <option value="Moldova">
    <option value="Monaco">
    <option value="Mongolia">
    <option value="Montenegro">
    <option value="Morocco">
    <option value="Mozambique">
      <!-- N Countries -->
    <option value="Namibia">
    <option value="Nauru">
    <option value="Nepal">
    <option value="Netherlands, The">
    <option value="New Zealand">
    <option value="Nicaragua">
    <option value="Niger">
    <option value="Nigeria">
    <option value="North Macedonia">
    <option value="Norway">
      <!-- O Countries -->
    <option value="Oman">
      <!-- P Countries -->
    <option value="Pakistan">
    <option value="Palau">
    <option value="Panama">
    <option value="Papua New Guinea">
    <option value="Paraguay">
    <option value="Peru">
    <option value="Philippines">
    <option value="Poland">
    <option value="Portugal">
    <!-- Q Countries -->
    <option value="Qatar">
      <!-- R Countries -->
      <option value="Republic of the Congo">
      <option value="Romania">
      <option value="Russia">
      <option value="Rwanda">
        <!-- S Countries -->
      <option value="Saint Kitts and Nevis">
      <option value="Saint Lucia">
      <option value="Saint Vincent and the Grenadines">
      <option value="Samoa">
      <option value="San Marino">
      <option value="Sao Tome and Principe">
      <option value="Saudi Arabia">
      <option value="Senegal">
      <option value="Serbia">
      <option value="Seychelles">
      <option value="Sierra Leone">
      <option value="Singapore">
      <option value="Slovakia">
      <option value="Slovenia">
      <option value="Solomon Islands, The">
      <option value="Somalia">
      <option value="South Africa">
      <option value="South Sudan">
      <option value="Spain">
      <option value="Sri Lanka">
      <option value="Sudan">
      <option value="Suriname">
      <option value="Sweden">
      <option value="Switzerland">
      <option value="Syria">
        <!-- T Countries -->
      <option value="Tajikistan">
      <option value="Tanzania">
      <option value="Thailand">
      <option value="Timor-Leste">
      <option value="Togo">
      <option value="Tonga">
      <option value="Trinidad and Tobago">
      <option value="Tunisia">
      <option value="Turkey">
      <option value="Turkmenistan">
      <option value="Tuvalu">
         <!-- U Countries  -->
      <option value="Uganda">
      <option value="Ukraine">
      <option value="United Arab Emirates, The">
      <option value="United Kingdom, The">
      <option value="Uruguay">
      <option value="Uzbekistan">
      <!--  V Countries -->
      <option value="Vanuatu">
      <option value="Venezuela">
      <option value="Vietnam">
        <!-- Y Countries -->
      <option value="Yemen">
      <option value="Uzbekistan">
        <!-- Z Countries -->
      <option value="Zambia">
      <option value="zimbabwe">
      
  </datalist>

<br> <!--NEW LINE-->
<!-- Parent/Guardian Text -->
<p class="registration-text">
  If the athlete is under the age of 18. The following section
  <span class="italize-word">must</span> be filled out by a parent or
  guardian.
</p>

<!-- Section Guardian/Parent -->

<!-- Parental Section Name -->
  <!-- Parental First Name -->
  <label for="parentalFirstName">First Name</label>
  <input type="text" name="parentalFirstName" id="parentalFirstName" placeholder="First Name" />
  
  <!-- Parental Last Name -->
  <label for="parentalLastName">Last Name</label>
  <input type="text" name="parentalLastName" id="parentalLastName" placeholder="Last Name" />
  
  <br> <!--NEW LINE-->

  <!-- Parental Home Address -->
  <label for="parentalAddress">Address</label>
  <input type="text" name="parentalAddress" id="parentalAddress" placeholder="Address" />
  
  <br> <!--NEW LINE-->

  <!-- Parental Contact Info -->
  <!-- Parental Contact Number -->
  <label for="parentalTelephoneNumber">Contact Number</label>
  <input type="tel" name="parentalTelephoneNumber" id="parentalTelephoneNumber" placeholder="Contact Number"/>

  <!-- Parental Email -->
  <label for="parentalEmail">Email</label>
  <input type="parentalEmail" name="parentalEmail" id="parentalEmail" placeholder="Email"/>
    
<!-- Country -->
  <label for="country">Country</label>
  <input list="country" placeholder="Country" />
  <datalist id="country">
    <!-- A Countries ">-->
    <option value="Afghanistan">
    <option value="Albania">
    <option value="Algeria">
    <option value="Andorra">
    <option value="Angola">
    <option value="Antigua and Barbuda">
    <option value="Argentina">
    <option value="Armenia">
    <option value="Australia">
    <option value="Austria">
    <option value="Austrian Empire Azerbaijan">
    <!-- B Countries -->
    <option value="Bahamas, The">
    <option value="Bahrain">
    <option value="Bangladesh">
    <option value="Barbados">
    <option value="Bavaria">
    <option value="Belarus">
    <option value="Belgium">
    <option value="Belize">
    <option value="Benin">
    <option value="Bolivia">
    <option value="Bosnia and Herzegovina">
    <option value="Botswana">
    <option value="Brazil">
    <option value="Brunei">
    <option value="Bulgaria">
    <option value="Burkina Faso">
    <option value="Burma">
    <option value="Burundi">
    <!-- C Countries -->
    <option value="Cabo Verde">
    <option value="Cambodia">
    <option value="Cameroon">
    <option value="Canada">
    <option value="Cayman Islands, The">
    <option value="Central African Republic">
    <option value="Chad">
    <option value="Chile">
    <option value="China">
    <option value="Colombia">
    <option value="Comoros">
    <option value="Costa Rica">
    <option value="Cote d’Ivoire (Ivory Coast)">
    <option value="Croatia">
    <option value="Cuba">
    <option value="Cyprus">
    <option value="Czechia">
    <option value="Czechoslovakia">
      <!-- D Countries -->
    <option value="Democratic Republic of Congo">
    <option value="Denmark">
    <option value="Djibouti">
    <option value="Dominica">
    <option value="Dominica Republic">
    <!-- E Countries -->
    <option value="Ecuador">
    <option value="Egypt">
    <option value="El Salvador">
    <option value="Equatorial Guinea">
    <option value="Eritrea">
    <option value="Estonia">
    <option value="Eswatini">
    <option value="Ethiopia">
    <!-- F Countries -->
    <option value="Fiji">
    <option value="Finland">
    <option value="France">
      <!-- G Countries -->
    <option value="Gabon">
    <option value="Gambia, The">
    <option value="Georgia">
    <option value="Germany">
    <option value="Ghana">
    <option value="Greece">
    <option value="Grenada">
    <option value="Guatemala">
    <option value="Guinea">
    <option value="Guinea-Bissau">
    <option value="Guayana">
      <!-- H Countries -->
    <option value="Haiti">
    <option value="Honduras">
    <option value="Hungary">
      <!-- I Countries -->
    <option value="Iceland">
    <option value="India">
    <option value="Indonesia">
    <option value="Iran">
    <option value="Iraq">
    <option value="Ireland">
    <option value="Israel">
    <option value="Italy">
        <!-- J Countries -->
    <option value="Jamaica">
    <option value="Japan">
    <option value="Jordan">
        <!-- K Countries -->
    <option value="Kazakhstan">
    <option value="Kenya">
    <option value="Kiribati">
    <option value="Korea">
    <option value="Kosovo">
    <option value="Kwait">
    <option value="Kyrgystan">
      <!-- L Countries -->
    <option value="Laos">
    <option value="Latvia">
    <option value="Lebanon">
    <option value="Lesotho">
    <option value="Liberia">
    <option value="Libya">
    <option value="Liechtenstein">
    <option value="Lithuania">
    <option value="Luxembourg">
      <!-- M Countries -->
    <option value="Madagascar">
    <option value="Malawi">
    <option value="Malaysia">
    <option value="Maldives">
    <option value="Mali">
    <option value="Malta">
    <option value="Marshall Islands">
    <option value="Mauritania">
    <option value="Mauritius">
    <option value="Mexico">
    <option value="Micronesia">
    <option value="Moldova">
    <option value="Monaco">
    <option value="Mongolia">
    <option value="Montenegro">
    <option value="Morocco">
    <option value="Mozambique">
      <!-- N Countries -->
    <option value="Namibia">
    <option value="Nauru">
    <option value="Nepal">
    <option value="Netherlands, The">
    <option value="New Zealand">
    <option value="Nicaragua">
    <option value="Niger">
    <option value="Nigeria">
    <option value="North Macedonia">
    <option value="Norway">
      <!-- O Countries -->
    <option value="Oman">
      <!-- P Countries -->
    <option value="Pakistan">
    <option value="Palau">
    <option value="Panama">
    <option value="Papua New Guinea">
    <option value="Paraguay">
    <option value="Peru">
    <option value="Philippines">
    <option value="Poland">
    <option value="Portugal">
    <!-- Q Countries -->
    <option value="Qatar">
      <!-- R Countries -->
      <option value="Republic of the Congo">
      <option value="Romania">
      <option value="Russia">
      <option value="Rwanda">
        <!-- S Countries -->
      <option value="Saint Kitts and Nevis">
      <option value="Saint Lucia">
      <option value="Saint Vincent and the Grenadines">
      <option value="Samoa">
      <option value="San Marino">
      <option value="Sao Tome and Principe">
      <option value="Saudi Arabia">
      <option value="Senegal">
      <option value="Serbia">
      <option value="Seychelles">
      <option value="Sierra Leone">
      <option value="Singapore">
      <option value="Slovakia">
      <option value="Slovenia">
      <option value="Solomon Islands, The">
      <option value="Somalia">
      <option value="South Africa">
      <option value="South Sudan">
      <option value="Spain">
      <option value="Sri Lanka">
      <option value="Sudan">
      <option value="Suriname">
      <option value="Sweden">
      <option value="Switzerland">
      <option value="Syria">
        <!-- T Countries -->
      <option value="Tajikistan">
      <option value="Tanzania">
      <option value="Thailand">
      <option value="Timor-Leste">
      <option value="Togo">
      <option value="Tonga">
      <option value="Trinidad and Tobago">
      <option value="Tunisia">
      <option value="Turkey">
      <option value="Turkmenistan">
      <option value="Tuvalu">
         <!-- U Countries  -->
      <option value="Uganda">
      <option value="Ukraine">
      <option value="United Arab Emirates, The">
      <option value="United Kingdom, The">
      <option value="Uruguay">
      <option value="Uzbekistan">
      <!--  V Countries -->
      <option value="Vanuatu">
      <option value="Venezuela">
      <option value="Vietnam">
        <!-- Y Countries -->
      <option value="Yemen">
      <option value="Uzbekistan">
        <!-- Z Countries -->
      <option value="Zambia">
      <option value="zimbabwe">
      
  </datalist>

  <br> <!--NEW LINE-->

  <!-- Submit button -->
  <button type="submit" id="registrationSubmitButton">Submit</button>

  <br> <!--NEW LINE-->

  <!-- Today's Date -->
<label for="date">Today's Date: <span id="date"></span> </label>


      <!-- Vanilla JS -->
      <script src="registrationFormDate.js"></script>
    </form>
  </div>

  <!-- FOOTER -->
  <footer></footer>
  <!-- END OF FOOTER -->
  

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
