
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

        <h1 class="display-5"> Level 4 - Digital Ownership Ticketing Assessment </h1>
        <form>
           <p><b>Which industry are you in for ticketing?</b></p>
           <p>
              <label><input type="radio" name="firstMarks" value="0" /> Music & Entertainment</label>
              <label><input type="radio" name="firstMarks" value="1" /> Sports  </label>
              <label><input type="radio" name="firstMarks" value="2" /> Art </label>
              <label><input type="radio" name="firstMarks" value="3" /> General </label>
              <label><input type="radio" name="firstMarks" value="4" /> Other </label>
           </p>
           <p><b>Do you want to create your own tickets or utilize a third-party ticketing blockchain platform?</b></p>
           <p>
              <label><input type="radio" name="thirdMarks" value="0" /> Own</label>
              <label><input type="radio" name="thirdMarks" value="1" /> Third-Party </label>
           </p>

           <p><b>Marketplace: Is your audience going to be large?</b></p>
           <p>
              <label><input type="radio" name="fourMarks" value="0" /> Yes</label>
              <label><input type="radio" name="fourMarks" value="1" /> No </label>
           </p>

           <p><b>Marketplace: What will the distribution type be? </b></br>
** NFT platforms offer either or both of building NFTs using the platform's native smart contract or creating a custom contract. Some marketplaces let creators import custom contracts created elsewhere. **
           </p>
           <p>
              <label><input type="radio" name="fiveMarks" value="0" /> Native Contract</label>
              <label><input type="radio" name="fiveMarks" value="1" /> Custom Contract </label>
              <label><input type="radio" name="fiveMarks" value="2" /> Imported Contract </label>
           </p>

           <p> <b>Marketplace: Do you want royalties?</b> </br>
            **NFT royalties give you a percentage of the sale price each time your NFT creation is sold on a marketplace. NFT royalty payments are perpetual and are executed by smart contracts automatically. With most marketplaces, you can choose your royalty percentage. 5-10% is considered a standard royalty.**
           </p>
           <p>
              <label><input type="radio" name="sixMarks" value="0" /> Yes</label>
              <label><input type="radio" name="sixMarks" value="1" /> No </label>
           </p>


           <p><b>Marketplace: Do you need unlockable content?</b></p>
           <p>
              <label><input type="radio" name="sevenMarks" value="0" /> Yes</label>
              <label><input type="radio" name="sevenMarks" value="1" /> No </label>
           </p>

           <p><b>Marketplace: Do you need physical NFTs?</b></p>
           <p>
              <label><input type="radio" name="eightMarks" value="0" /> Yes</label>
              <label><input type="radio" name="eightMarks" value="1" /> No </label>
           </p>

           <p><b>Marketplace: Which of these features is most important to you?</b></p>
           <p>
             <label><input type="radio" name="nineMarks" value="0" /> Largest Audience </label>
             <label><input type="radio" name="nineMarks" value="1" /> Multiple Files in 1 NFT </label>
             <label><input type="radio" name="nineMarks" value="2" /> Showcase Function </label>
             <label><input type="radio" name="nineMarks" value="3" /> Auctions </label>
             <label><input type="radio" name="nineMarks" value="4" /> Other </label>
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
           var thirdMark = document.getElementsByName('thirdMarks');
           var fourthMark = document.getElementsByName('fourMarks');
           var fifthMark = document.getElementsByName('fiveMarks');
           var sixthMark = document.getElementsByName('sixMarks');
           var seventhMark = document.getElementsByName('sevenMarks');
           var eighthMark = document.getElementsByName('eightMarks');
           var ninethMark = document.getElementsByName('nineMarks');

           var total = 0;
           var blockchain = "";
            firstMark.forEach((evnt) => {
              if (evnt.checked) {
                 onemark = parseInt(evnt.value);
                 return;
              }
           });
           thirdMark.forEach((evnt) => {
              if (evnt.checked) {
                 threemark = parseInt(evnt.value);
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
           console.log("Total Marks=" + onemark + threemark);
           if (onemark == 0 && threemark == 0){
             console.log("Hello");
           } else if (onemark == 1 && threemark == 0 && fourmark == 0 && fivemark == 0 && sixmark == 0 && sevenmark == 0 && eightmark == 0 && ninemark == 0) {
             console.log("no")
             blockchain = "Your Blockchain Output: FLOW, Ethereum, and Algorand are your suggested blockchain platforms and your suggested marketplace is OpenSea"
           } else {
             blockchain = "Your Blockchain Output:X"
           }
           document.getElementById("output").innerHTML=blockchain;
        }
     </script>


            <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        </html>
