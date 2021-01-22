<?php

/*
# -------------------------------------------------------------------------
# Custom Field Asset for Joomla Backend (load JS and CSS files)
# -------------------------------------------------------------------------
# author     WS-Theme.com
# copyright  Copyright (C) 2013 WS-Theme.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
# Websites:  http://www.ws-theme.com
# -------------------------------------------------------------------------
*/

// no direct access
defined('_JEXEC') or die;

jimport('joomla.form.formfield');

class JFormFieldAsset extends JFormField {
	protected $type = 'Asset';

	protected function getInput() {  
		return null;
	}
}

?>

<style type="text/css">

/* General Styling */

a{color: #E74C3C;}
a:hover, a:active, a:focus {color:#cc4436;outline:none !important;}
p {margin:0 0 20px 0;}
.ws-headline {background: #f2f2f2; padding:15px;font-weight:bold;font-size:20px;border-bottom:3px solid #E74C3C;}
.ws-text {padding:0;font-weight:normal;border-left:none; line-height:20px; color: #555;font-size:14px;color:#333;}
.ws-attention {background: #E74C3C; padding:15px;font-weight:normal;color:#fff;line-height:20px;font-size:14px;}
.ws-line {height:6px;background: #f2f2f2;}
.ws-faq {font-weight:normal;color:#333;line-height:20px;font-size:14px;border-bottom:6px solid #f2f2f2; padding-bottom:30px;}
.ws-faq .ws-question {color:#E74C3C;font-weight:bold;margin-bottom:10px;}
.controls .ws-headline, .controls .ws-text, .controls .ws-attention, .controls .ws-line, .controls .ws-faq {margin-left: -180px;}
.ws-headline, .ws-text, .ws-attention, .ws-line {}
.controls .ws-image, .controls .ws-iframe, .controls .ws-link, .controls .ws-subline {margin-top:-25px;}
.ws-subline {color:#999;}
pre, code {background: #F5F5F5;border: 1px solid rgba(0, 0, 0, 0.15);border-radius: 4px;display: block;font-size: 12px;line-height: 18px;margin: 0 0 20px;padding: 8.5px;white-space: pre-wrap;word-break: break-all;word-wrap: break-word;}
.tip-title img {max-width: 100% !important;}
.control-label:empty {display: none;}

/* JOOMLA 3.X */

.controls textarea {min-width: 288px;}
.minicolors-theme-bootstrap .minicolors-input {min-width: 186px;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:13px;}
.controls textarea {min-height:250px !important;}

.nav-tabs > .active > a, .nav-tabs > .active > a:hover, .nav-tabs > .active > a:focus {background: #E74C3C; color:#fff;}

.form-horizontal .control-group {margin-bottom:30px;}

.accordion-heading {
	background: #fefefe !important;
	background: -moz-linear-gradient(top,  #fefefe 0%, #f1f1f1 99%) !important;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fefefe), color-stop(99%,#f1f1f1)) !important;
	background: -webkit-linear-gradient(top,  #fefefe 0%,#f1f1f1 99%) !important;
	background: -o-linear-gradient(top,  #fefefe 0%,#f1f1f1 99%) !important;
	background: -ms-linear-gradient(top,  #fefefe 0%,#f1f1f1 99%) !important;
	background: linear-gradient(to bottom,  #fefefe 0%,#f1f1f1 99%) !important;
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fefefe', endColorstr='#f1f1f1',GradientType=0 ) !important;
}
.accordion-group {margin-bottom:12px;}
.input-prepend.input-append .add-on:first-child, .input-prepend.input-append .btn:first-child {height:auto;}
.accordion-heading .accordion-toggle {padding:15px !important;}
.accordion-inner {padding: 25px 15px}
.accordion-inner .controls {margin-left:250px !important;}
.accordion-inner .control-group {margin-bottom:10px;padding-bottom:10px; border-bottom:1px solid #eee;}
.accordion-inner .ws-liner {margin:20px 0px;min-width:600px;}

/* JOOMLA 2.5 */


ul.adminformlist li .ws-line,
ul.adminformlist li .ws-text,
ul.adminformlist li .ws-attention,
ul.adminformlist li .ws-headline,
ul.adminformlist li .ws-faq,
ul.adminformlist li .ws-subline,
ul.adminformlist li .ws-link,
ul.adminformlist li .ws-image,
ul.adminformlist li .ws-iframe

{margin:20px 0;max-width:100%;}

ul.adminformlist li .media-preview {margin:11px 0 0 0; color:#E74C3C; font-weight:bold;display:inline-block;}
ul.adminformlist li span.btn.btn-link {margin:11px 0 0 14px; color:#E74C3C;display:inline-block;}
ul.adminformlist li a.btn, ul.adminformlist li a.modal-button {margin:0; color:#E74C3C;display:inline-block;padding: 0 6px 0 6px; height:22px; line-height:22px; color: #333; background: #e6e6e6; border:1px solid #bbb;border-radius: 2px; -moz-border-radius: 2px; -webkit-border-radius: 2px;-webkit-transition: all .1s linear 0s;-moz-transition: all .1s linear 0s;-ms-transition: all .1s linear 0s;-o-transition: all .1s linear 0s;transition: all .1s linear 0s;}
ul.adminformlist li a.btn:hover, ul.adminformlist li a.modal-button:hover {text-decoration:none;background: #cbcbcb;}
ul.adminformlist li .ws-textblock {clear:both;float:none;margin:20px 0;line-height:18px;font-size:13px;}
ul.adminformlist li .ws-textblock a.btn {background: #e6e6e6; border:1px solid #bbb; border-radius: 4px; -moz-border-radius: 4px; -webkit-border-radius: 4px;color:#333;text-dcoration:none; padding: 11px 19px;font-size:17px;line-height:20px;display:inline-block;vertical-align:middle;-webkit-transition: all .1s linear 0s;-moz-transition: all .1s linear 0s;-ms-transition: all .1s linear 0s;-o-transition: all .1s linear 0s;transition: all .1s linear 0s;}
ul.adminformlist li .ws-textblock a.btn:hover {text-decoration:none;background: #cbcbcb;}
ul.adminformlist li .ws-textblock a.btn.btn-danger {background: #E74C3C; color:#fff;text-shadow:none;}
ul.adminformlist li .ws-textblock a.btn.btn-danger:hover {background: #CA4335; color:#fff;text-shadow:none;}

ul.adminformlist li .mceEditor {float:none;clear:both;float:left;width:100%;}
.pane-sliders .panel .ws-textblock h3 {background:transparent;color:#555;}

div.panel > h3 {
	background: #fefefe !important;
	background: -moz-linear-gradient(top,  #fefefe 0%, #f1f1f1 99%) !important;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fefefe), color-stop(99%,#f1f1f1)) !important;
	background: -webkit-linear-gradient(top,  #fefefe 0%,#f1f1f1 99%) !important;
	background: -o-linear-gradient(top,  #fefefe 0%,#f1f1f1 99%) !important;
	background: -ms-linear-gradient(top,  #fefefe 0%,#f1f1f1 99%) !important;
	background: linear-gradient(to bottom,  #fefefe 0%,#f1f1f1 99%) !important;
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fefefe', endColorstr='#f1f1f1',GradientType=0 ) !important;
}

div.panel > h3 {
		height: 43px;
		border: 1px solid #d8d8d8;
		-moz-border-radius: 3px;
		-webkit-border-radius: 3px;
		border-radius: 3px;
		font: bold 12px/43px Arial, Helvetica, sans-serif;
}

div.panel > h3 a {color: #333;text-shadow: 0 1px 1px #fff;}
.pane-sliders .panel {border: 0 none !important;margin-bottom:12px !important;}
.panel fieldset.panelform > ul > li > label { color: #444; font-size: 11px; font-weight: bold; height: 24px; line-height: 24px; padding: 0 10px 0 0; text-align: left; max-width: 30%!important; min-width: 30%!important;}
.panel fieldset.panelform > ul > li fieldset { line-height:24px;margin:0; }

fieldset.panelform input { height: 16px; color: #555; line-height: 16px; padding: 4px; border-radius: 2px; -moz-border-radius: 2px; -webkit-border-radius: 2px; }
fieldset.radio input {margin:9px 7px 0 0 !important;}
fieldset.panelform input[type=button] { height: 26px; line-height: 26px; }
fieldset.panelform select { height: 26px; color: #555; line-height: 24px; padding: 4px; font-size:11px; border-radius: 2px; -moz-border-radius: 2px; -webkit-border-radius: 2px; width:142px;}
fieldset.panelform select.position { width: 80px!important; }
fieldset.panelform textarea { padding: 4px; border-radius: 2px; -moz-border-radius: 2px; -webkit-border-radius: 2px; width:50%; min-height: 100px;}
fieldset.panelform select[multiple=multiple] { height: 150px; }

.fltrt ul.adminformlist li { overflow: hidden; border-bottom: 1px solid #eee; padding: 5px 0; margin: 0; clear:both;}

fieldset.panelform .label { font-size: 11px; font-weight: bold; width: auto; padding: 0 5px; line-height:34px; }
fieldset.panelform .desc { font-size: 11px; font-weight: normal; width: auto; padding: 10px; }
fieldset.radio label { min-width:20px !important; }
.button2-left {margin-top:6px !important;}
.customlink, .unit {display:inline-block;margin-left:14px;}
#jform_params___field1-lbl, #invisible {display: none;}


/* OVERRIDE FOR COLORPICKER - since 3.1.x only needed for Joomla 2.5.x*/

#mooRainbow2 {
    color: #000000;
    font-size: 11px;
}

.moor-box {
    background-color: #F9F9F9;
    border: 3px solid #d5d5d5;
    height: 310px;
    width: 390px;
    padding:10px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    border-radius: 5px;
}

.moor-overlayBox {
    border: 1px solid #000000;
    height: 256px;
    margin-left: 9px;
    margin-top: 9px;
    width: 256px;
}

.moor-slider {
    border: 1px solid #000000;
    height: 256px;
    margin-left: 280px;
    margin-top: 9px;
    width: 19px;
}

.moor-colorBox {
    border: 1px solid #000000;
    height: 68px;
    margin-left: 315px;
    margin-top: 20px;
    width: 59px;
}

.moor-currentColor {
    height: 34px;
    margin-left: 316px;
    margin-top: 55px;
    width: 59px;
}

.moor-okButton {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background: none repeat scroll 0 0 #E6E6E6;
    border-color: #F5F5F5 #D6D6D6 #D6D6D6 #F5F5F5;
    border-image: none;
    border-right: 1px solid #D6D6D6;
    border-style: solid;
    border-width: 1px;
    font-size: 11px;
    font-weight: bold;
    height: 23px;
    margin-left: 8px;
    margin-top: 278px;
}

#mooRainbow label {
    font-family: arial, helvetica,sans-serif;
}

.moor-rLabel {
    margin-left: 315px;
    margin-top: 100px;
    visibility:visible;
}

.moor-gLabel {
    margin-left: 315px;
    margin-top: 125px;
    visibility:visible;
}

.moor-bLabel {
    margin-left: 315px;
    margin-top: 150px;
    visibility:visible;
}

.moor-HueLabel {
    margin-left: 315px;
    margin-top: 190px;
    visibility:visible;
}

span.moor-ballino {
    margin-left: 370px;
    margin-top: 190px;
    visibility:visible;
}

.moor-SatuLabel {
    margin-left: 315px;
    margin-top: 215px;
    visibility:visible;
}

.moor-BrighLabel {
    margin-left: 315px;
    margin-top: 240px;
    visibility:visible;
}

.moor-hexLabel {
    margin-left: 280px;
    margin-top: 275px;
    visibility:visible;
}

.moor-rInput, .moor-gInput, .moor-bInput, .moor-HueInput, .moor-SatuInput, .moor-BrighInput {
    width: 30px;
    visibility:visible;
}

.moor-hexInput {
    width: 82px;
    font-size:13px;
    visibility:visible;
}

.moor-cursor {
    height: 12px;
    width: 12px;
}

.moor-arrows {
    font-size: 0;
    height: 10px;
    left: 296px;
    line-height: 10px;
    top: 9px;
    width: 10px;
    background:#000;
    opacity:.5;
    margin-top:10px;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    -ms-border-radius: 20px;
    -o-border-radius: 20px;
    border-radius: 20px;
    visibility:visible;
    z-index:5 !important;
}

.moor-chooseColor {
    height: 34px;
    margin-left: 316px;
    margin-top: 10px;
    width: 59px;
    border:1px solid #000;
}

</style>