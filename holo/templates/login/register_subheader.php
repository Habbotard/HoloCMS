<?php
/*---------------------------------------------------+
| HoloCMS - Website and Content Management System
+----------------------------------------------------+
| Copyright � 2008 Meth0d
+----------------------------------------------------+
| HoloCMS is provided "as is" and comes without
| warrenty of any kind.
+---------------------------------------------------*/

if (!defined("IN_HOLOCMS")) { header("Location: ../../index.php"); exit; }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $shortname; ?> ~ Register </title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>

<script src="./web-gallery/static/js/visual.js" type="text/javascript"></script>
<script src="./web-gallery/static/js/domready.js" type="text/javascript"></script>
<script src="./web-gallery/static/js/libs.js" type="text/javascript"></script>
<script src="./web-gallery/static/js/common.js" type="text/javascript"></script>
<script src="./web-gallery/static/js/libs2.js" type="text/javascript"></script>
<link rel="stylesheet" href="./web-gallery/v2/styles/style.css" type="text/css" />
<link rel="stylesheet" href="./web-gallery/v2/styles/buttons.css" type="text/css" />
<link rel="stylesheet" href="./web-gallery/v2/styles/boxes.css" type="text/css" />
<link rel="stylesheet" href="./web-gallery/v2/styles/tooltips.css" type="text/css" />
<link rel="stylesheet" href="./web-gallery/v2/styles/process.css" type="text/css" />

<script type="text/javascript">
document.habboLoggedIn = false;
var habboName = null;
var habboReqPath = "";
var habboStaticFilePath = "./web-gallery";
var habboImagerUrl = "/habbo-imaging/";
var habboPartner = "";
window.name = "habboMain";

</script>

<link rel="stylesheet" href="./web-gallery/v2/styles/registration.css" type="text/css">
<script src="./web-gallery/static/js/registration.js" type="text/javascript"></script>

    <script type="text/javascript">
        L10N.put("register.tooltip.name", "Your name can contain lowercase and uppercase letters, numbers and the characters -=?!@:.");
        L10N.put("register.tooltip.password", "Your password must have at least 6 characters and it must contain both letters and numbers.");
        L10N.put("register.error.password_required", "Please enter a password");
        L10N.put("register.error.password_too_short", "Your password should be at least six characters long");
        L10N.put("register.error.retyped_password_required", "Please re-enter your password");
        L10N.put("register.error.retyped_password_notsame", "Your passwords do not match, please try again");
        L10N.put("register.error.retyped_email_required", "Please type your email again");
        L10N.put("register.error.retyped_email_notsame", "Emails don\'t match");
        L10N.put("register.tooltip.namecheck", "Click here to check your name is free.");
        L10N.put("register.tooltip.retypepassword", "Please re-enter your password.");
        L10N.put("register.tooltip.personalinfo.disabled", "Please choose your <?php echo $shortname; ?> (character) name first.");
        L10N.put("register.tooltip.namechecksuccess", "Congratulations! The name is available.");
        L10N.put("register.tooltip.passwordsuccess", "Your password is now secure.");
        L10N.put("register.tooltip.passwordtooshort", "The password you have chosen is too short.");
        L10N.put("register.tooltip.passwordnotsame", "Password not the same, please re-type it.");
        L10N.put("register.tooltip.invalidpassword", "The password you have chosen is invalid, please choose a new password.");
        L10N.put("register.tooltip.email", "Please enter your email address. You need to activate your account using this address so please use your real address.");
        L10N.put("register.tooltip.retypeemail", "Please re-enter your email address.");
        L10N.put("register.tooltip.invalidemail", "Please enter a valid email address.");
        L10N.put("register.tooltip.emailsuccess", "You have provided a valid email address, thanks!");
        L10N.put("register.tooltip.emailnotsame", "Your retyped email doesn\'t match.");
        L10N.put("register.tooltip.enterpassword", "Please enter a password.");
        L10N.put("register.tooltip.entername", "Please enter a name for your <?php echo $shortname; ?> (character).");
        L10N.put("register.tooltip.enteremail", "Please enter your email address.");
        L10N.put("register.tooltip.enterbirthday", "Please give your date of birth - you need this later to get password reminders etc.");
        L10N.put("register.tooltip.acceptterms", "Please accept the Terms and Conditions");
        L10N.put("register.tooltip.invalidbirthday", "Please supply a valid birthdate");
        L10N.put("register.tooltip.emailandparentemailsame","You parent\'s email and your email cannot be the same, please provide a different one.");
        L10N.put("register.tooltip.entercaptcha","Enter the code.");
        L10N.put("register.tooltip.captchavalid","Invalid code.");
        L10N.put("register.tooltip.captchainvalid","Invalid code, please try again.");

        RegistrationForm.parentEmailAgeLimit = -1;
        L10N.put("register.message.parent_email_js_form", "<div\>\n\t<div class=\"register-label\"\>Because you are under 16 and in accordance with industry best practice guidelines, we require your parent or guardian\'s email address.</div\>\n\t<div id=\"parentEmail-error-box\"\>\n        <div class=\"register-error\"\>\n            <div class=\"rounded rounded-blue\"  id=\"parentEmail-error-box-container\"\>\n                <div id=\"parentEmail-error-box-content\"\>\n                    Please enter your email address.\n                </div\>\n            </div\>\n        </div\>\n\t</div\>\n\t<div class=\"register-label\"\><label for=\"register-parentEmail-bubble\"\>Parent or guardian\'s email address</label\></div\>\n\t<div class=\"register-label\"\><input type=\"text\" name=\"bean.parentEmail\" id=\"register-parentEmail-bubble\" class=\"register-text-black\" size=\"15\" /\></div\>\n\n\n</div\>");

        RegistrationForm.isCaptchaEnabled = true;
        L10N.put("register.message.captcha_js_form", "<div\>\n\t<div class=\"register-label\"\><img src=\"https://www.habbo.co.uk/captcha.jpg?t=1209373851701\" alt=\"\" width=\"200\" height=\"50\" /\></div\>\n\t<div class=\"register-label\"\><label for=\"register-captcha-bubble\"\>Type in the security code shown in the image above</label\></div\>\n\t<div class=\"register-input\"\><input type=\"text\" name=\"bean.captchaResponse\" id=\"register-captcha-bubble\" class=\"register-text-black\" value=\"\" size=\"15\" /\></div\>\t\n</div\>");

        L10N.put("register.message.age_limit_ban", "<div\>\n<p\>\nSorry but you cannot register, because you are too young. If you entered an incorrect date of birth by accident please try again in a few hours.\n</p\>\n\n<p style=\"text-align:right\"\>\n<input type=\"button\" class=\"submit\" id=\"register-parentEmail-cancel\" value=\"Cancel\" onclick=\"RegistrationForm.cancel(\'?ageLimit=true\')\" /\>\n</p\>\n</div\>");
        RegistrationForm.ageLimit = -1;
        HabboView.add(function() { Rounder.addCorners($("register-avatar-editor-title"), 4, 4, "rounded-container"); RegistrationForm.init(true); });
    </script>

<meta name="description" content="<?php echo $sitename; ?> is a virtual world where you can meet and make friends." />
<meta name="keywords" content="<?php echo $shortname; ?>,<?php echo $sitename; ?>,virtual world,play games,enter competitions,make friends" />

<!--[if lt IE 8]>
<link rel="stylesheet" href="./web-gallery/v2/styles/ie.css" type="text/css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" href="./web-gallery/v2/styles/ie6.css" type="text/css" />
<script src="./web-gallery/static/js/pngfix.js" type="text/javascript"></script>
<script type="text/javascript">
try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
</script>

<style type="text/css">
body { behavior: url(./web-gallery/csshover.htc); }
</style>
<![endif]-->
<meta name="build" content="21.0.68 - Registration - HoloCMS" />
</head>