<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Book Search</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="js/bootstrap.css" rel="stylesheet">
     <script type="text/javascript">
     var credentials=new Array();
    function send()
    {
    var username=$('#webmail').val();
    var password=$('#password').val();

credentials['username']=username;
credentials['password']=password;
    $.ajax({
    url: "login.php",
    data: {'username':username,'password':password},
    type: "POST",
  datatype:'array',
    async: false,
    success: function (data) {
    console.log(data);  
   //   alert ("data: " + data);
   window.location='auth.php';
       }
  });
    }
    </script>
   
    <style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
        position: fixed;
        bottom:0px;
        z-index: 10;
        text-align: center;
      }
      #footer {
        background-color: #f5f5f5;
      }


      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      .container {
        width: auto;
        max-width: 680px;
      }
      .container .credit {
        margin: 20px 0;
      }

      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
        min-height: 80px;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>
    <link href="bootstrap-responsive.css" rel="stylesheet">

   
  <style type="text/css"></style></head>

  <body>

    <div class="container-narrow">

     

      <div class="jumbotron">
        <h1>Book Search</h1><br />
         Rollnumber:<br />
       <input type="text" id="webmail" /><br />
    Password:   <br />
    <input type="password" id="password" /><br />
    <button class="btn"  onclick="send()">Login</button>
       </div>

      <hr>

      <div class="row-fluid marketing" id="result" style="font-size:16px">
      
      </div>

      <hr>

         <div id="footer">
      <div class="container">
        <p class="muted credit">Made with &hearts; by<a href="http://delta.nitt.edu">Delta Force</a></p>
      </div>
    </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap-transition.js"></script>
    <script src="./js/bootstrap-alert.js"></script>
    <script src="./js/bootstrap-modal.js"></script>
    <script src="./js/bootstrap-dropdown.js"></script>
    <script src="./js/bootstrap-scrollspy.js"></script>
    <script src="./js/bootstrap-tab.js"></script>
    <script src="./js/bootstrap-tooltip.js"></script>
    <script src="./js/bootstrap-popover.js"></script>
    <script src="./js/bootstrap-button.js"></script>
    <script src="./js/bootstrap-collapse.js"></script>
    <script src="./js/bootstrap-carousel.js"></script>
    <script src="./js/bootstrap-typeahead.js"></script>
    <script type="text/javascript">
     $('#qry').keypress(function(e){
     var code = (e.keyCode ? e.keyCode : e.which);
      if(code == 13) {
        search();
      }
});
    </script>
  

</body></html>