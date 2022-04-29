
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
<link href="../css/styles.css" rel="stylesheet">
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
                  <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../about.php">About Blockchain </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../"> Framework </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../change.php"> Change Management </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../news.php"> Latest News </a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>

        <h1 class="display-5"> Level 4 - Energy Specific Assessment </h1>
        <form>
           <p><b> What is the level of supplementation/energy trading during peak energy demand for the grid? </b></p>
           <p>
              <label><input type="radio" name="firstMarks" value="0" /> No Supplement</label>
              <label><input type="radio" name="firstMarks" value="1" /> Minor Supplement  </label>
              <label><input type="radio" name="firstMarks" value="2" /> Balanced </label>
              <label><input type="radio" name="firstMarks" value="3" /> Minor Excess </label>
              <label><input type="radio" name="firstMarks" value="4" /> Heavy Excess </label>
           </p>
           <p><b>What is the desired level of control for an energy market? </b></p>
           <p>
             <label><input type="radio" name="secondMarks" value="0" /> Complete Decentralization</label>
             <label><input type="radio" name="secondMarks" value="1" /> Monitoring of Remote Nodes  </label>
             <label><input type="radio" name="secondMarks" value="2" /> Organization Aggregator & Consumer Nodes</label>
             <label><input type="radio" name="secondMarks" value="3" /> Organization Aggregator & Nodes at Each Consumer </label>
             <label><input type="radio" name="secondMarks" value="4" /> Organization Central Aggregators & Medium Voltage Nodes </label>
           </p>

           <p><b>What is the level of consideration for renewable energy storage and generation?</b></p>
           <p>
              <label><input type="radio" name="fourMarks" value="0" /> Consumer Led Adoption </label>
              <label><input type="radio" name="fourMarks" value="1" /> Consumers Led Adoption with Public Incentives </label>
              <label><input type="radio" name="fourMarks" value="2" /> Consumers Led Adoption with Public & Organization Incentives </label>
              <label><input type="radio" name="fourMarks" value="3" /> Organization Led with Public Incentives </label>
              <label><input type="radio" name="fourMarks" value="4" /> Organization Led Regardless of Incentives </label>
           </p>

           <p><b>My primary concern is preserving uninterrupted power flows and/or pricing within my power grid.  </b></br>
           </p>
           <p>
              <label><input type="radio" name="fiveMarks" value="0" /> Grid outages do not occur</label>
              <label><input type="radio" name="fiveMarks" value="1" /> Grid outages occur rarely (less than once per a year) </label>
              <label><input type="radio" name="fiveMarks" value="2" /> Grid outages are seldom & recovery is quick (3 times a year with less than 30 minutes of outages each occurrence) </label>
              <label><input type="radio" name="fiveMarks" value="3" /> Grid outages are regular and/or recovery needs improvement (more than 3 times a year and/or over 8 to 24 hours each occurrence) </label>
              <label><input type="radio" name="fiveMarks" value="4" /> Grid outages are persistent and/or with unknown recovery times </label>
           </p>

           <p> <b>The organization’s objective is to generate additional capacity and revenue to supplement other grids.</b> </br>
           </p>
           <p>
              <label><input type="radio" name="sixMarks" value="0" /> Strongly oppose excess generation for external sales</label>
              <label><input type="radio" name="sixMarks" value="1" /> Proposals require additional support for approval</label>
              <label><input type="radio" name="sixMarks" value="2" /> Neutral </label>
              <label><input type="radio" name="sixMarks" value="3" /> Strong support for long-term capabilities</label>
              <label><input type="radio" name="sixMarks" value="4" /> Strong support for near-term capabilities</label>
           </p>

           <p><b>Our goal is to develop partnerships across energy markets (choose the one most relevant)</b></p>
           <p>
              <label><input type="radio" name="sevenMarks" value="0" /> In favor of creating new localized energy markets</label>
              <label><input type="radio" name="sevenMarks" value="1" /> In favor of local energy market development (consumers) </label>
              <label><input type="radio" name="sevenMarks" value="2" /> In favor of local energy market development (industrial)</label>
              <label><input type="radio" name="sevenMarks" value="3" /> In favor of facilitating transaction across regions </label>
              <label><input type="radio" name="sevenMarks" value="4" /> NOT in favor. For strictly internal capability maturity </label>
           </p>

           <p><b>Incentives for consumers participating in the network are key to optimizing usage.</b></p>
           <p>
              <label><input type="radio" name="eightMarks" value="0" /> Consumers require no additional incentives</label>
              <label><input type="radio" name="eightMarks" value="1" /> Consumer incentives should be based on utility service credits only </label>
              <label><input type="radio" name="eightMarks" value="2" /> Consumer incentives should be based on utility service credits & cryptocurrency rewards</label>
              <label><input type="radio" name="eightMarks" value="3" /> Consumer incentives should be based solely on cryptocurrency rewards</label>
           </p>

         </hr></hr>
         <h3> More Specific </h3>

           <p><b>The client’s strategic goal is based on… </b></p>
           <p>
             <label><input type="radio" name="nineMarks" value="0" />Decarbonization</label>
             <label><input type="radio" name="nineMarks" value="1" /> Digitization</label>
             <label><input type="radio" name="nineMarks" value="2" /> Decentralization </label>
           </p>

           <p><b>To address: </b></p>
           <p>
             <label><input type="radio" name="tenMarks" value="0" />Increasing adoption of Renewable Energy Storage (RES)</label>
             <label><input type="radio" name="tenMarks" value="1" /> Forecasting generation in scheduled-based predictions</label>
             <label><input type="radio" name="tenMarks" value="2" /> Grid stability & market volatility </label>
             <label><input type="radio" name="tenMarks" value="3" /> Industry 4.0+</label>
             <label><input type="radio" name="tenMarks" value="4" /> Dynamic & adaptive pricing</label>
             <label><input type="radio" name="tenMarks" value="5" /> Complex optimal energy flows</label>
             <label><input type="radio" name="tenMarks" value="6" />Distributed energy resources (DES)</label>
             <label><input type="radio" name="tenMarks" value="7" /> Changing regulation with federal & state laws</label>
             <label><input type="radio" name="tenMarks" value="8" /> Performance & safety </label>
           </p>

           <p><b>By Using: </b></p>
           <p>
             <label><input type="radio" name="elevenMarks" value="0" />Conventional power generation</label>
             <label><input type="radio" name="elevenMarks" value="1" /> Transmission & distribution</label>
             <label><input type="radio" name="elevenMarks" value="2" /> Renewable power generation</label>
           </p>

           <p><b>Primarily affecting areas in:  </b></p>
           <p>
             <label><input type="radio" name="twelveMarks" value="0" />Industrial</label>
             <label><input type="radio" name="twelveMarks" value="1" /> Commercial</label>
             <label><input type="radio" name="twelveMarks" value="2" /> Residential </label>
            <label><input type="radio" name="twelveMarks" value="3" /> Transportation </label>
           </p>

           <p><b>Which will lead to:  </b></p>
           <p>
             <label><input type="radio" name="13Marks" value="0" />Increased utilization of renewables</label>
             <label><input type="radio" name="13Marks" value="1" /> Develop distributed microgrids</label>
             <label><input type="radio" name="13Marks" value="2" /> Improve performance & safety </label>
           </p>

           <input type="button" value="Calculate Blockchain Output" onclick="getResult()" />
        </form>
      </br>
        <b class="output" id="output"></b>

        <p> If you have any questions regarding your output, please contact the client engagement team for further explanation. The team will now solidify the blockchain technology to your organization.
         </p>
     </body>


     <script>
        function getResult() {
           var firstMark = document.getElementsByName('firstMarks');
           var secondMark = document.getElementsByName('secondMarks');
           var fourthMark = document.getElementsByName('fourMarks');
           var fifthMark = document.getElementsByName('fiveMarks');
           var sixthMark = document.getElementsByName('sixMarks');
           var seventhMark = document.getElementsByName('sevenMarks');
           var eighthMark = document.getElementsByName('eightMarks');
           var ninethMark = document.getElementsByName('nineMarks');
           var tenthMark = document.getElementsByName('tenMarks');
           var eleventhMark = document.getElementsByName('elevenMarks');
           var twelthMark = document.getElementsByName('twelveMarks');
           var thirtMark = document.getElementsByName('13Marks');

           var total = 0;
           var blockchain = "";
            firstMark.forEach((evnt) => {
              if (evnt.checked) {
                 onemark = parseInt(evnt.value);
                 return;
              }
           });
           secondMark.forEach((evnt) => {
              if (evnt.checked) {
                 twomark = parseInt(evnt.value);
                 return;
              }
           });
           fourthMark.forEach((evnt) => {
              if (evnt.checked) {
                 fourmark = parseInt(evnt.value);
                 return;
              }
           });
           fifthMark.forEach((evnt) => {
              if (evnt.checked) {
                 fivemark = parseInt(evnt.value);
                 return;
              }
           });
           sixthMark.forEach((evnt) => {
              if (evnt.checked) {
                 sixmark = parseInt(evnt.value);
                 return;
              }
           });
           seventhMark.forEach((evnt) => {
              if (evnt.checked) {
                 sevenmark = parseInt(evnt.value);
                 return;
              }
           });
           eighthMark.forEach((evnt) => {
              if (evnt.checked) {
                 eightmark = parseInt(evnt.value);
                 return;
              }
           });
           ninethMark.forEach((evnt) => {
              if (evnt.checked) {
                 ninemark = parseInt(evnt.value);
                 return;
              }
           });
           tenthMark.forEach((evnt) => {
              if (evnt.checked) {
                 tenmark = parseInt(evnt.value);
                 return;
              }
           });
           eleventhMark.forEach((evnt) => {
              if (evnt.checked) {
                 elevenmark = parseInt(evnt.value);
                 return;
              }
           });
           twelthMark.forEach((evnt) => {
              if (evnt.checked) {
                 twelvemark = parseInt(evnt.value);
                 return;
              }
           });
           thirtMark.forEach((evnt) => {
              if (evnt.checked) {
                 thirteenmark = parseInt(evnt.value);
                 return;
              }
           });
           if (onemark == 0 && twomark == 0 && fourmark == 0 && fivemark == 0 && sixmark == 0 && sevenmark == 0 && eightmark == 0 && ninemark == 0 && tenmark == 0 && elevenmark == 0 && twelvemark ==0 && thirteenmark == 0){
             blockchain = "Your Blockchain Output: Based on the feedback, your organization would benefit from a renewable energy storage utilizing a blockchain layer. This emphasizes integrating an on-site battery system solution with network connectivity to power peak production periods for meeting your industrial needs. To discuss methods and potential for deploying this solution, please contact our advisory team to make this a reality."
           } else if (onemark == 1 && twomark == 0 && fourmark == 0 && fivemark == 0 && sixmark == 0 && sevenmark == 0 && eightmark == 0 && ninemark == 0 && tenmark == 0 && elevenmark == 0 && twelvemark ==0 && thirteenmark == 0) {
             console.log("no")
             blockchain = "Your Blockchain Output: Based on the feedback, your organization would benefit from a renewable energy storage utilizing a blockchain layer. This emphasizes integrating an on-site battery system solution with network connectivity to power peak production periods for meeting your industrial needs. To discuss methods and potential for deploying this solution, please contact our advisory team to make this a reality."
           } else {
             blockchain = "Your Blockchain Output: Based on the feedback, your organization would benefit from a renewable energy storage utilizing a blockchain layer. This emphasizes integrating an on-site battery system solution with network connectivity to power peak production periods for meeting your industrial needs. To discuss methods and potential for deploying this solution, please contact our advisory team to make this a reality."
           }
           document.getElementById("output").innerHTML=blockchain;
        }
     </script>


            <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        </html>
