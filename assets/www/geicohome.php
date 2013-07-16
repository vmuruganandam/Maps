<?php
 //carrying over all the script from old index.php
 require_once('includes/external_urls.php'); 

 include('includes/home.php');
 
 //include header, footer
 include('includes/layoutfunctions.php');
 include('includes/vstaggenerator.php');
 $vs = loadVSTag("mWeb_MainMenu","mobiPage");
 $vs = "<script src='$vs'></script>";

 //show the header.
 //title, bar type, show banner, gecko bg, extra js
 getHeader("","<script type='text/javascript' src='/assets/js/geo-min.js'></script>\n<script src='/assets/js/location.js'></script>\n$vs","MainMenu");

 


?>

 

<div class="ui-body-b-override">
 <div data-role="navbar" id="tabs" class="tab-div-override">
  <ul id="tab">
   <li><a href="index.php?intercept=true" target="_parent" class="getquote active tabs-override" id="mobiMW2MainMenuGetAQuoteQuoteMenuTab" data-theme="c">Quote</a></li>
   <li><a href="manage.php?intercept=true" target="_parent" class="managepol tabs-override" id="mobiMW2MainMenuManagePolicyLogInMenuTab" data-theme="c">Log In</a></li>
   <li><a href="claims.php?intercept=true" target="_parent" class="claims tabs-override" id="mobiMW2MainMenuClaimsClaimsMenuTab" data-theme="c">Claims</a></li>
  </ul>
 </div>

<div role="main" class="ui-body-a-override gecko" data-theme="b" data-role="content">

 <div id="getaquote" class="show_getquote">

  <h2>Get a Quote</h2>
  Type of Insurance
  <form id="gaq" action="
  <?php
    $whichLink = '';
         if($source == "Sales")
          $whichLink = $source;
         else if(array_key_exists($source."Auto",$external_urls))
          $whichLink = $source."Auto";
         else {
          $whichLink = "Sales";
         }

         echo $external_urls[$whichLink] ?>" method="post">
        <div data-role="fieldcontain" class="main-select">
         <select id="ins_type">
          <option id="mobiMW2MainMenuGetAQuoteQuoteAutoOption" value="Auto">Auto</option>
          <option id="mobiMW2MainMenuGetAQuoteQuoteCycleOption" value="Cycle">Cycle</option>
          <option id="mobiMW2MainMenuGetAQuoteQuoteBoatOption" value="Boat">Boat</option>
          <option id="mobiMW2MainMenuGetAQuoteQuoteHomeOwnersOption" value="Homeowners">Homeowners</option>
          <option id="mobiMW2MainMenuGetAQuoteQuoteRentersOption" value="Renters">Renters</option>
          <option id="mobiMW2MainMenuGetAQuoteQuoteCondoOption" value="Condo">Condo</option>
         </select>
        </div>

         <div id="linetwo">
          <div id="left_line">
           <a id="mobiMW2MainMenuGetAQuoteBTNLocationWidget" onclick="getLocation(false);"><div id="loc" class="geoloc"/></div></a>
           <div class="left_left">
           <input type="text"  name="POL_ratedZip5" id="zip" data-theme="b" value="Zip Code" placeholder="Zip Code" pattern="[0-9]{5}" />
           </div>
          </div>

          <div id="right_line">
           <button type="submit" id="mobiMW2MainMenuGetAQuoteBTNQuoteSubmit" class="half-button" data-role="button" data-theme="b">Quote</button>
           <a href="recall.php" target="_parent" data-role="button" data-theme="c">Recall a Quote</a> 
          </div>
         
         </div>

        </form>

 </div>
</div>
</div> 
<?php include('includes/secondary.php'); ?>

 

<?php showFooter("MainMenu"); ?>
]

