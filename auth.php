<?php
session_start();
if(!isset($_SESSION['userId']))
{
      header("Location:log.php");
}
?>


<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Book Search</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript">

    function search()
    {

     $('#result').empty(); 
    s=document.getElementById("qry").value;
    
    URL="http://localhost:8983/solr/select?q=text:"+s+"&wt=json&indent=true"
   // alert(URL)
   $.ajax({
  'url': URL,
  'data': {'wt':'json', 'q':s},
  success: function(data) { 
    var total=data.response.numFound;
    for(i=0;i<total;i++)
    {

      var div = document.getElementById('result');
      dt=data.response.docs[i].id;
     // c="<p class=\"text-info\">"+dt+"</p><br />"
       loca= "Books"
       a= "<a href=\""+loca+"\/"+dt+"\">"+dt+"</a><br />"
       //alert(a);
      div.innerHTML = div.innerHTML + a ;
    }
    console.log(data) },
  'dataType': 'jsonp',
  'jsonp': 'json.wrf'
});


    }

  function dir_list()
  {
    window.location='Books/dir_list.php';
  }

    </script>
    <link href="js/bootstrap.css" rel="stylesheet">
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
    <button  class="btn btn-danger" style="float:right" type="button" onclick="window.location='logout.php'">Logout</button>
    <div class="container-narrow">
      <div class="jumbotron">
        <h1>Book Search</h1>
        <p class="lead">Enter the topic you are looking for</p>
         <input type="text" id="qry" placeholder="Topic you are looking for">
         <br />
          <button class="btn btn-primary" type="button" onclick="search()">Search !</button>
    &nbsp;
    <button class="btn btn-warning" type="button" onclick="dir_list()">     
  View all Books !</button>
  </div>

      <hr>

      <div class="row-fluid marketing" id="result" style="font-size:16px">
      
      </div>

      <hr>

         <div id="footer">
      <div class="container">
        <p class="muted credit">Made with &hearts; by <a href="http://delta.nitt.edu">Delta Force</a></p>
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
