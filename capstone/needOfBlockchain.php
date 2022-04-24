
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blockchain Framework </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
<link href="css/styles.css" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">

  </head>
  <body>
<!-- Nav bar  -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Blockchain Project </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About Blockchain </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Framework </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="change.php"> Change Management </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="news.php"> Latest News </a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>

        <h1 class="display-5"> Do I Need a Blockchain Solution? </h1>
        <form>
           <p> 1. Will the use case involve a business network, which spans multiple organizations/agencies?</p>
           <p>
              <label><input type="radio" name="firstMarks" value="0" /> 0 - Not at All</label>
              <label><input type="radio" name="firstMarks" value="1" /> 1 - Slightly </label>
              <label><input type="radio" name="firstMarks" value="2" /> 2 - Moderate</label>
              <label><input type="radio" name="firstMarks" value="3" /> 3 - High </label>
              <label><input type="radio" name="firstMarks" value="4" /> 4 - Very High</label>
              <label><input type="radio" name="firstMarks" value="5" /> 5 - Critcal </label>
           </p>
           <p>2. Is there a current lack of trust among the business network participants and/or sources of data? </p>
           <p>
              <label><input type="radio" name="secondMarks" value="0" /> 0 - Not at All</label>
              <label><input type="radio" name="secondMarks" value="1" /> 1 - Slightly </label>
              <label><input type="radio" name="secondMarks" value="2" /> 2 - Moderate</label>
              <label><input type="radio" name="secondMarks" value="3" /> 3 - High</label>
              <label><input type="radio" name="secondMarks" value="4" /> 4 - Very High</label>
              <label><input type="radio" name="secondMarks" value="5" /> 5 - Critical</label>
           </p>
           <p>3. Would the organizations in your use case benefit from a shared governance and data standards approach?</p>
           <p>
              <label><input type="radio" name="thirdMarks" value="0" /> 0 - Not at All</label>
              <label><input type="radio" name="thirdMarks" value="1" /> 1 - Slightly </label>
              <label><input type="radio" name="thirdMarks" value="2" /> 2 - Moderate</label>
              <label><input type="radio" name="thirdMarks" value="3" /> 3 - High</label>
              <label><input type="radio" name="thirdMarks" value="4" /> 4 - Very High</label>
              <label><input type="radio" name="thirdMarks" value="5" /> 5 - Critical </label>
           </p>
           <p>4. Is this a use case that can be more efficiently solved with other technologies (e.g. distributed database)?</p>
           <p>
              <label><input type="radio" name="fourthMarks" value="0" /> 0 - Not at All</label>
              <label><input type="radio" name="fourthMarks" value="-1" /> -1 - Slightly </label>
              <label><input type="radio" name="fourthMarks" value="-2" /> -2 - Moderate </label>
              <label><input type="radio" name="fourthMarks" value="-3" /> -3 - High </label>
              <label><input type="radio" name="fourthMarks" value="-4" /> -4 - Very High</label>
              <label><input type="radio" name="fourthMarks" value="-5" /> -5 - Critical</label>
           </p>
                      <p>5. Does the use case require or can it benefit from strict transaction immutability?</p>
           <p>
              <label><input type="radio" name="fifthMarks" value="0" /> 0 - Not at All</label>
              <label><input type="radio" name="fifthMarks" value="1" /> 1 - Slightly </label>
              <label><input type="radio" name="fifthMarks" value="2" /> 2 - Moderate</label>
              <label><input type="radio" name="fifthMarks" value="3" /> 3 - High</label>
              <label><input type="radio" name="fifthMarks" value="4" /> 4 - Very High</label>
              <label><input type="radio" name="fifthMarks" value="5" /> 5 - Critical </label>
           </p>
           <p>6. Does the use case require or can it benefit from using distributed ledgers and a decentralized authority approach?</p>
<p>
   <label><input type="radio" name="sixthMarks" value="0" /> 0 - Not at All</label>
   <label><input type="radio" name="sixthMarks" value="1" /> 1 - Slightly </label>
   <label><input type="radio" name="sixthMarks" value="2" /> 2 - Moderate </label>
   <label><input type="radio" name="sixthMarks" value="3" /> 3 - High</label>
   <label><input type="radio" name="sixthMarks" value="4" /> 4 - Very High</label>
   <label><input type="radio" name="sixthMarks" value="5" /> 5 - Critical </label>
</p>
<p>7. Can your organization benefit from transforming respective business capabilities into a decentralized organization?</p>
<p>
<label><input type="radio" name="seventhMarks" value="0" /> 0 - Not at All</label>
<label><input type="radio" name="seventhMarks" value="1" /> 1 - Slightly </label>
<label><input type="radio" name="seventhMarks" value="2" /> 2 - Moderate </label>
<label><input type="radio" name="seventhMarks" value="3" /> 3 - High</label>
<label><input type="radio" name="seventhMarks" value="4" /> 4 - Very High</label>
<label><input type="radio" name="seventhMarks" value="5" /> 5 - Critical </label>
</p>
<p>8. If you are able to repurpose business logic to a distributed organization – have you identified how your Core Competencies will benefit? </p>
<p>
<label><input type="radio" name="eighthMarks" value="0" /> 0 - Not at All</label>
<label><input type="radio" name="eighthMarks" value="1" /> 1 - Slightly </label>
<label><input type="radio" name="eighthMarks" value="2" /> 2 - Moderate </label>
<label><input type="radio" name="eighthMarks" value="3" /> 3 - High</label>
<label><input type="radio" name="eighthMarks" value="4" /> 4 - Very High</label>
<label><input type="radio" name="eighthMarks" value="5" /> 5 - Critical </label>
</p>
<p>9. Are there existing inter-organization business process inefficiencies?  </p>
<p>
<label><input type="radio" name="ninethMarks" value="0" /> 0 - Not at All</label>
<label><input type="radio" name="ninethMarks" value="1" /> 1 - Slightly </label>
<label><input type="radio" name="ninethMarks" value="2" /> 2 - Moderate </label>
<label><input type="radio" name="ninethMarks" value="3" /> 3 - High</label>
<label><input type="radio" name="ninethMarks" value="4" /> 4 - Very High</label>
<label><input type="radio" name="ninethMarks" value="5" /> 5 - Critical </label>
</p>
<p>10. Are you looking for a vehicle to securely share reference data among members of the business network? </p>
<p>
<label><input type="radio" name="tenthMarks" value="0" /> 0 - Not at All</label>
<label><input type="radio" name="tenthMarks" value="1" /> 1 - Slightly </label>
<label><input type="radio" name="tenthMarks" value="2" /> 2 - Moderate </label>
<label><input type="radio" name="tenthMarks" value="3" /> 3 - High</label>
<label><input type="radio" name="tenthMarks" value="4" /> 4 - Very High</label>
<label><input type="radio" name="tenthMarks" value="5" /> 5 - Critical </label>
</p>
<p>11. Does provenance of a digitized asset – a record tracking the lifetime history of an asset – as it is controlled/owned by different members of the business network apply? </p>
<p>
<label><input type="radio" name="eleventhMarks" value="0" /> 0 - Not at All</label>
<label><input type="radio" name="eleventhMarks" value="1" /> 1 - Slightly </label>
<label><input type="radio" name="eleventhMarks" value="2" /> 2 - Moderate </label>
<label><input type="radio" name="eleventhMarks" value="3" /> 3 - High</label>
<label><input type="radio" name="eleventhMarks" value="4" /> 4 - Very High</label>
<label><input type="radio" name="eleventhMarks" value="5" /> 5 - Critical </label>
</p>
<p>12. For this use case, is there an existing system that could serve as a trusted source of the truth for all parties? </p>
<p>
<label><input type="radio" name="12thMarks" value="0" /> 0 - Not at All</label>
<label><input type="radio" name="12thMarks" value="-1" /> -1 - Slightly </label>
<label><input type="radio" name="12thMarks" value="-2" /> -2 - Moderate </label>
<label><input type="radio" name="12thMarks" value="-3" /> -3 - High</label>
<label><input type="radio" name="12thMarks" value="-4" /> -4 - Very High</label>
<label><input type="radio" name="12thMarks" value="-5" /> -5 - Critical </label>
</p>
<p>13. Does the use case have high performance requirements? (transactions per second (TPS) > 3K/sec)? </p>
<p>
<label><input type="radio" name="13thMarks" value="0" /> 0 - Not at All</label>
<label><input type="radio" name="13thMarks" value="-1" /> -1 - Slightly </label>
<label><input type="radio" name="13thMarks" value="-2" /> -2 - Moderate </label>
<label><input type="radio" name="13thMarks" value="-3" /> -3 - High</label>
<label><input type="radio" name="13thMarks" value="-4" /> -4 - Very High</label>
<label><input type="radio" name="13thMarks" value="-5" /> -5 - Critical </label>
</p>
<p>14. Does the use case have multiple participants that take actions that need to be recorded and change the data?  </p>
<p>
<label><input type="radio" name="14thMarks" value="0" /> 0 - Not at All</label>
<label><input type="radio" name="14thMarks" value="1" /> 1 - Slightly </label>
<label><input type="radio" name="14thMarks" value="2" /> 2 - Moderate </label>
<label><input type="radio" name="14thMarks" value="3" /> 3 - High</label>
<label><input type="radio" name="14thMarks" value="4" /> 4 - Very High</label>
<label><input type="radio" name="14thMarks" value="5" /> 5 - Critical </label>
</p>
<p>15. Can the removal of intermediaries reduce cost and complexity?  </p>
<p>
<label><input type="radio" name="15thMarks" value="0" /> 0 - Not at All</label>
<label><input type="radio" name="15thMarks" value="1" /> 1 - Slightly </label>
<label><input type="radio" name="15thMarks" value="2" /> 2 - Moderate </label>
<label><input type="radio" name="15thMarks" value="3" /> 3 - High</label>
<label><input type="radio" name="15thMarks" value="4" /> 4 - Very High</label>
<label><input type="radio" name="15thMarks" value="5" /> 5 - Critical </label>
</p>
<p>16. Can reducing delay has business benefits   </p>
<p>
<label><input type="radio" name="16thMarks" value="0" /> 0 - Not at All</label>
<label><input type="radio" name="16thMarks" value="1" /> 1 - Slightly </label>
<label><input type="radio" name="16thMarks" value="2" /> 2 - Moderate </label>
<label><input type="radio" name="16thMarks" value="3" /> 3 - High</label>
<label><input type="radio" name="16thMarks" value="4" /> 4 - Very High</label>
<label><input type="radio" name="16thMarks" value="5" /> 5 - Critical </label>
</p>
<p>17. Can transactions created by different participants depend on each other?   </p>
<p>
<label><input type="radio" name="17thMarks" value="0" /> 0 - Not at All</label>
<label><input type="radio" name="17thMarks" value="1" /> 1 - Slightly </label>
<label><input type="radio" name="17thMarks" value="2" /> 2 - Moderate </label>
<label><input type="radio" name="17thMarks" value="3" /> 3 - High</label>
<label><input type="radio" name="17thMarks" value="4" /> 4 - Very High</label>
<label><input type="radio" name="17thMarks" value="5" /> 5 - Critical </label>
</p>
           <input type="button" value="Calculate Blockchain Solution Score" onclick="getResult()" />
        </form>
      </br>
        <p id="output"></p>

        <p> If your score was between 50-65, blockchain appears to be a feasible solution for your organization? Proceed to <a href="level2.php"> level 2.</a>
           Anything outside of this scoring range, please contact PwC for further conversation.
         </p>
     </body>


     <script>
        function getResult() {
           var firstMark = document.getElementsByName('firstMarks');
           var secondMark = document.getElementsByName('secondMarks');
           var thirdMark = document.getElementsByName('thirdMarks');
          var fourMark = document.getElementsByName('fourthMarks');
          var fiveMark = document.getElementsByName('fifthMarks');
          var sixMark = document.getElementsByName('sixthMarks');
          var sevenMark = document.getElementsByName('seventhMarks');
          var eightMark = document.getElementsByName('eigthMarks');
          var nineMark = document.getElementsByName('ninethMarks');
          var tenMark = document.getElementsByName('tenthMarks');
          var elevenMark = document.getElementsByName('eleventhMarks');
          var twelveMark = document.getElementsByName('12thMarks');
          var thirteenMark = document.getElementsByName('13thMarks');
          var fourteenMark = document.getElementsByName('14thMarks');
          var fifteenMark = document.getElementsByName('15thMarks');
          var sixteenMark = document.getElementsByName('16thMarks');
          var seventeenMark = document.getElementsByName('17thMarks');
           var total = 0;
            firstMark.forEach((evnt) => {
              if (evnt.checked) {
                 total = total + parseInt(evnt.value);
                 return;
              }
           });
           secondMark.forEach((evnt) => {
              if (evnt.checked) {
                 total = total + parseInt(evnt.value);
                 return;
              }
           });
           thirdMark.forEach((evnt) => {
              if (evnt.checked) {
                 total = total + parseInt(evnt.value);
                 return;
              }
           });
           fourMark.forEach((evnt) => {
              if (evnt.checked) {
                 total = total + parseInt(evnt.value);
                 return;
              }
           });
           fiveMark.forEach((evnt) => {
              if (evnt.checked) {
                 total = total + parseInt(evnt.value);
                 return;
              }
           });
           sixMark.forEach((evnt) => {
              if (evnt.checked) {
                 total = total + parseInt(evnt.value);
                 return;
              }
           });
           sevenMark.forEach((evnt) => {
              if (evnt.checked) {
                 total = total + parseInt(evnt.value);
                 return;
              }
           });
           eightMark.forEach((evnt) => {
              if (evnt.checked) {
                 total = total + parseInt(evnt.value);
                 return;
              }
           });
           nineMark.forEach((evnt) => {
              if (evnt.checked) {
                 total = total + parseInt(evnt.value);
                 return;
              }
           });
           tenMark.forEach((evnt) => {
              if (evnt.checked) {
                 total = total + parseInt(evnt.value);
                 return;
              }
           });
           elevenMark.forEach((evnt) => {
              if (evnt.checked) {
                 total = total + parseInt(evnt.value);
                 return;
              }
           });
           twelveMark.forEach((evnt) => {
              if (evnt.checked) {
                 total = total + parseInt(evnt.value);
                 return;
              }
           });
           thirteenMark.forEach((evnt) => {
              if (evnt.checked) {
                 total = total + parseInt(evnt.value);
                 return;
              }
           });
           fourteenMark.forEach((evnt) => {
              if (evnt.checked) {
                 total = total + parseInt(evnt.value);
                 return;
              }
           });
           fifteenMark.forEach((evnt) => {
              if (evnt.checked) {
                 total = total + parseInt(evnt.value);
                 return;
              }
           });
           sixteenMark.forEach((evnt) => {
              if (evnt.checked) {
                 total = total + parseInt(evnt.value);
                 return;
              }
           });
           seventeenMark.forEach((evnt) => {
              if (evnt.checked) {
                 total = total + parseInt(evnt.value);
                 return;
              }
           });
           console.log("Total Marks=" + total);
           document.getElementById("output").innerHTML=total;
        }
     </script>


            <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        </html>
