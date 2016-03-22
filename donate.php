<?PHP

?>
<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css">
  <title></title>
</head>
<body>
<div id="container">
  <div id="content">

    <div id="main">
      <script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
      <script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.12172" type="text/javascript"></script>
      <script src="https://cdn.jotfor.ms/js/paypal.js?v=3.3.12172" type="text/javascript"></script>
      <script type="text/javascript">
        JotForm.init(function(){
          JotForm.clearFieldOnHide="disable";
          JotForm.onSubmissionError="jumpToFirstError";
        });
      </script>
      <link href="https://cdn.jotfor.ms/static/formCss.css?3.3.12172" rel="stylesheet" type="text/css" />
      <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.12172" />
      <link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.12172" />
      <link type="text/css" rel="stylesheet" href="https://secure.jotformeu.com/themes/CSS/5495488a700cc478508b4567.css?session=48135261852249&themeRevisionID=56d08325977cdf03768b4567"/>
      <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Abel);

        .form-label-left{
          width:150px !important;
        }
        .form-line{
          padding-top:12px;
          padding-bottom:12px;
        }
        .form-label-right{
          width:150px !important;
        }
        .form-all{
          width:580px;
          color:rgb(255, 255, 255) !important;
          font-family:'Roboto';
          font-size:18px;
        }
      </style>

      <form class="jotform-form" action="https://submit.jotformeu.com/submit/60812921349355/" method="post" name="form_60812921349355" id="60812921349355" accept-charset="utf-8">
        <input type="hidden" name="formID" value="60812921349355" />
        <div class="form-all">
          <ul class="form-section page-section">
            <li class="form-line" data-type="control_paypal" id="id_1">
              <label class="form-label form-label-left form-label-auto" id="label_1" for="input_1"> Doneer: </label>
              <div id="cid_1" class="form-input jf-required">
                <input type="hidden" name="simple_fpc" data-payment_type="paypal" value="1" />
          <span class="form-sub-label-container" style="vertical-align: top">
            <input type="text" data-min-amount="1" class="form-textbox validate[Numeric]" id="input_1_donation" name="q1_doneer[price]" value="1">
            EUR
            <label class="form-sub-label" for="input_1_donation" style="min-height: 13px;"> Donaties voor de luchtsingel </label>
          </span>
              </div>
            </li>
            <li class="form-line" data-type="control_button" id="id_2">
              <div id="cid_2" class="form-input-wide">
                <div style="margin-left:156px" class="form-buttons-wrapper">
                  <div style="float:left; margin-top: 8px;">
                    <input style="display:none; outline:none;" class="paypal-button" type="image" src="https://www.paypal.com/en_US/i/btn/btn_dg_pay_w_paypal.gif">
                  </div>
                  <button id="input_2" type="submit" class="form-submit-button">
                    Submit
                  </button>
                </div>
              </div>
            </li>
            <li style="display:none">
              Should be Empty:
              <input type="text" name="website" value="" />
            </li>
          </ul>
        </div>
        <input type="hidden" id="simple_spc" name="simple_spc" value="60812921349355" />
        <script type="text/javascript">
          document.getElementById("si" + "mple" + "_spc").value = "60812921349355-60812921349355";
        </script>
      </form>
      <script type="text/javascript">JotForm.ownerView=true;</script>
    </div>

    <div id="nav">
      <a href=homepage.php>Go back</a>
    </div>
  </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="js/loadPage.js"></script>
</html>
