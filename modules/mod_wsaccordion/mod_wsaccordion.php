<?php

/*
# -------------------------------------------------------------------------
# WS Accordion - Responsive jQuery Accordion
# -------------------------------------------------------------------------
# author     WS-Theme.com
# copyright  Copyright (C) 2012 WS-Theme.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
# Websites:  http://www.ws-theme.com
# -------------------------------------------------------------------------
*/

// no direct access
defined('_JEXEC') or die;

$toggle = $params->get('toggle');
$addcss = $params->get('addcss');
$jqueryload = $params->get('jqueryload');
$jqueryversion = $params->get('jqueryversion');
$jqueryconflict = $params->get('jqueryconflict');
$accstyle = $params->get('accstyle');
$arrow = $params->get('arrow');
$arrowani = $params->get('arrowani');
$arrowrotation = $params->get('arrowrotation');
$elementheight = $params->get('elementheight');
$fontsize = $params->get('fontsize');
$responsivefontsize = $params->get('responsivefontsize');
$activecolor = $params->get('activecolor');
$bgcolor = $params->get('bgcolor');
$txtcolor = $params->get('txtcolor');
$elementspeed = $params->get('elementspeed');
$easing = $params->get('easing');
$moduleid = $module->id;

$head0 = $params->get('head0');$con0 = $params->get('con0');$rf0 = $params->get('rf0');$act0 = $params->get('act0');
$head1 = $params->get('head1');$con1 = $params->get('con1');$rf1 = $params->get('rf1');$act1 = $params->get('act1');
$head2 = $params->get('head2');$con2 = $params->get('con2');$rf2 = $params->get('rf2');$act2 = $params->get('act2');
$head3 = $params->get('head3');$con3 = $params->get('con3');$rf3 = $params->get('rf3');$act3 = $params->get('act3');
$head4 = $params->get('head4');$con4 = $params->get('con4');$rf4 = $params->get('rf4');$act4 = $params->get('act4');
$head5 = $params->get('head5');$con5 = $params->get('con5');$rf5 = $params->get('rf5');$act5 = $params->get('act5');
$head6 = $params->get('head6');$con6 = $params->get('con6');$rf6 = $params->get('rf6');$act6 = $params->get('act6');
$head7 = $params->get('head7');$con7 = $params->get('con7');$rf7 = $params->get('rf7');$act7 = $params->get('act7');
$head8 = $params->get('head8');$con8 = $params->get('con8');$rf8 = $params->get('rf8');$act8 = $params->get('act8');
$head9 = $params->get('head9');$con9 = $params->get('con9');$rf9 = $params->get('rf9');$act9 = $params->get('act9');
$head10 = $params->get('head10');$con10 = $params->get('con10');$rf10 = $params->get('rf10');$act10 = $params->get('act10');
$head11 = $params->get('head11');$con11 = $params->get('con11');$rf11 = $params->get('rf11');$act11 = $params->get('act11');
$head12 = $params->get('head12');$con12 = $params->get('con12');$rf12 = $params->get('rf12');$act12 = $params->get('act12');
$head13 = $params->get('head13');$con13 = $params->get('con13');$rf13 = $params->get('rf13');$act13 = $params->get('act13');
$head14 = $params->get('head14');$con14 = $params->get('con14');$rf14 = $params->get('rf14');$act14 = $params->get('act14');
$head15 = $params->get('head15');$con15 = $params->get('con15');$rf15 = $params->get('rf15');$act15 = $params->get('act15');
$head16 = $params->get('head16');$con16 = $params->get('con16');$rf16 = $params->get('rf16');$act16 = $params->get('act16');
$head17 = $params->get('head17');$con17 = $params->get('con17');$rf17 = $params->get('rf17');$act17 = $params->get('act17');
$head18 = $params->get('head18');$con18 = $params->get('con18');$rf18 = $params->get('rf18');$act18 = $params->get('act18');
$head19 = $params->get('head19');$con19 = $params->get('con19');$rf19 = $params->get('rf19');$act19 = $params->get('act19');

$document = JFactory::getDocument();

?>

<?php if ( $accstyle == '1' ) : ?>
<style type="text/css">

.wrapper-acc {
	width: 100%;
	margin: 0 auto;
}

.st-accordion<?php echo $moduleid ; ?>{
	width: 100%;
	min-width: 270px;
	margin: 0 auto;
}

.st-accordion<?php echo $moduleid ; ?> ul {
	margin: 20px 0;
	padding:0;
}

.st-accordion<?php echo $moduleid ; ?> ul li{
	border-bottom: 1px solid #d5d5d5;
	border-top: 1px solid #fff;
	overflow: hidden;
	margin: 0;
	list-style: none outside none;
	height: <?php echo $elementheight ; ?>px;
}

.st-accordion<?php echo $moduleid ; ?> ul li:first-child{
	border-top: none;
}

.st-accordion<?php echo $moduleid ; ?> ul li:last-child{
	border-bottom: none;
}

.st-accordion<?php echo $moduleid ; ?> ul li > a{
	text-shadow: 1px 1px 1px #fff;
	display: block;
	position: relative;
	outline: none;
	text-decoration: none;
	-webkit-transition: color 0.2s ease-in-out;
	-moz-transition: color 0.2s ease-in-out;
	-o-transition: color 0.2s ease-in-out;
	-ms-transition: color 0.2s ease-in-out;
	transition: color 0.2s ease-in-out;
	line-height: <?php echo $elementheight ; ?>px;
	font-size: <?php echo $fontsize ; ?>px;
}
.st-accordion<?php echo $moduleid ; ?> ul li > a span{
	background-repeat: no-repeat;
	background-position: center center;
	background-color: transparent;
	text-indent:-9000px;
	width: 26px;
	height: 26px;
	background-size: 26px 26px;
	position: absolute;
	top: 50%;
	right: -26px;
	margin-top: -13px;
	opacity:0;
	background-image: url("<?php echo JURI::base(); ?>/modules/mod_wsaccordion/images/<?php echo $arrow ; ?>.png");
	-webkit-transition:  all <?php echo $arrowani ; ?>ms ease-in-out;
	-moz-transition:  all <?php echo $arrowani ; ?>ms ease-in-out;
	-o-transition:  all <?php echo $arrowani ; ?>ms ease-in-out;
	-ms-transition:  all <?php echo $arrowani ; ?>ms ease-in-out;
	transition:  all <?php echo $arrowani ; ?>ms ease-in-out;
}

.st-accordion<?php echo $moduleid ; ?> ul li.st-open > a {
	color: <?php echo $activecolor ; ?>;
}

.st-accordion<?php echo $moduleid ; ?> ul li > a:hover span{
	opacity:1;
	right: 10px;
}

.st-accordion<?php echo $moduleid ; ?> ul li.st-open > a span{
	right:10px;
	opacity:1;
	-webkit-transform:rotate(<?php echo $arrowrotation ; ?>deg);
	-moz-transform:rotate(<?php echo $arrowrotation ; ?>deg);
	-ms-transform:rotate(<?php echo $arrowrotation ; ?>deg);
	-o-transform:rotate(<?php echo $arrowrotation ; ?>deg);
	transform:rotate(<?php echo $arrowrotation ; ?>deg);
}

.st-accordion<?php echo $moduleid ; ?> .st-content{
	padding: 5px 0 25px 0;
}

<?php if ( $addcss != '' ) echo $addcss ;?>

@media only screen and (max-width: 767px) {
	.st-accordion<?php echo $moduleid ; ?> ul li > a {
		font-size: <?php echo $responsivefontsize ; ?>px;
	}
}
</style>
<?php endif; ?>

<?php if ( $accstyle == '2' ) : ?>
<style type="text/css">

.wrapper-acc {
	width:100%;
	margin:0 auto;
}

.st-accordion<?php echo $moduleid ; ?> {
	width:100%;
	min-width:270px;
	margin: 0 auto;
}

.st-accordion<?php echo $moduleid ; ?> ul {
	margin: 20px 0;
	padding:0;
}

.st-accordion<?php echo $moduleid ; ?> ul li{
	overflow: hidden;
	height: <?php echo $elementheight ; ?>px;
	margin: 0 0 15px 0;
	list-style: none outside none;
}

.st-accordion<?php echo $moduleid ; ?> ul li > a {
	text-shadow: 1px 1px 1px #fff;
	color: #555;
	text-shadow: 0 1px 0 #fff;
	display: block;
	position: relative;
	outline:none;
	padding-left: 20px;
	text-decoration: none;
	-webkit-transition:  color 0.2s ease-in-out;
	-moz-transition:  color 0.2s ease-in-out;
	-o-transition:  color 0.2s ease-in-out;
	-ms-transition:  color 0.2s ease-in-out;
	transition:  color 0.2s ease-in-out;
	box-shadow: 0 0 1px #666 inset,0 2px 0 #fff inset;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-ms-border-radius: 5px;
	-o-border-radius: 5px;
	border-radius: 5px;
	background: #fafafa;
	background: -moz-linear-gradient(top, #fafafa 0%, #f5f5f5 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fafafa), color-stop(100%,#f5f5f5));
	background: -webkit-linear-gradient(top, #fafafa 0%,#f5f5f5 100%);
	background: -o-linear-gradient(top, #fafafa 0%,#f5f5f5 100%);
	background: -ms-linear-gradient(top, #fafafa 0%,#f5f5f5 100%);
	background: linear-gradient(to bottom, #fafafa 0%,#f5f5f5 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fafafa', endColorstr='#f5f5f5',GradientType=0 );
	line-height: <?php echo $elementheight ; ?>px; font-size: <?php echo $fontsize ; ?>px;
}

.st-accordion<?php echo $moduleid ; ?> ul li > a span{
	background-repeat: no-repeat;
	background-position: center center;
	background-color: transparent;
	text-indent:-9000px;
	width: 26px;
	height: 26px;
	background-size: 26px 26px;
	position: absolute;
	top: 50%;
	right: -26px;
	margin-top: -13px;
	opacity:0;
	background-image: url("<?php echo JURI::base(); ?>/modules/mod_wsaccordion/images/<?php echo $arrow ; ?>.png");
	-webkit-transition:  all <?php echo $arrowani ; ?>ms ease-in-out;
	-moz-transition:  all <?php echo $arrowani ; ?>ms ease-in-out;
	-o-transition:  all <?php echo $arrowani ; ?>ms ease-in-out;
	-ms-transition:  all <?php echo $arrowani ; ?>ms ease-in-out;
	transition:  all <?php echo $arrowani ; ?>ms ease-in-out;
}

.st-accordion<?php echo $moduleid ; ?> ul li > a:hover span{
	opacity:1;
	right: 15px;
}

.st-accordion<?php echo $moduleid ; ?> ul li.st-open > a {
	color: <?php echo $activecolor ; ?>;
}

.st-accordion<?php echo $moduleid ; ?> ul li.st-open > a span{
	right:15px;
	opacity:1;
	-webkit-transform:rotate(<?php echo $arrowrotation ; ?>deg);
	-moz-transform:rotate(<?php echo $arrowrotation ; ?>deg);
	-ms-transform:rotate(<?php echo $arrowrotation ; ?>deg);
	-o-transform:rotate(<?php echo $arrowrotation ; ?>deg);
	transform:rotate(<?php echo $arrowrotation ; ?>deg);
}

.st-accordion<?php echo $moduleid ; ?> .st-content {
	padding: 20px 21px 10px 21px;
}

<?php if ( $addcss != '' ) echo $addcss ;?>

@media only screen and (max-width: 767px) {
	.st-accordion<?php echo $moduleid ; ?> ul li > a {
		font-size: <?php echo $responsivefontsize ; ?>px;
	}
}
</style>
<?php endif; ?>

<?php if ( $accstyle == '3' ) : ?>
<style type="text/css">

.wrapper-acc {
	width:100%;
	margin:0 auto;
}

.st-accordion<?php echo $moduleid ; ?> {
	width:100%;
	min-width:270px;
	margin: 0 auto;
}

.st-accordion<?php echo $moduleid ; ?> ul {
	margin: 20px 0;
	padding:0;
}

.st-accordion<?php echo $moduleid ; ?> ul li {
	overflow: hidden;
	height: <?php echo $elementheight ; ?>px;
	margin: 0 0 15px 0;
	list-style: none outside none;
}

.st-accordion<?php echo $moduleid ; ?> ul li > a {
	text-shadow: 1px 1px 1px #fff;
	display: block;
	position: relative;
	outline:none;
	text-decoration: none;
	-webkit-transition:  color 0.2s ease-in-out;
	-moz-transition:  color 0.2s ease-in-out;
	-o-transition:  color 0.2s ease-in-out;
	-ms-transition:  color 0.2s ease-in-out;
	transition:  color 0.2s ease-in-out;
	background: <?php echo $bgcolor ; ?>;
	color: <?php echo $txtcolor ; ?>;
	box-shadow: 0 0 1px #000 inset;
	padding: 0 0 0 25px;
	line-height: <?php echo $elementheight ; ?>px;
	font-size: <?php echo $fontsize ; ?>px;
}

.st-accordion<?php echo $moduleid ; ?> ul li > a span {
	background-repeat: no-repeat;
	background-position: center center;
	background-color: transparent;
	text-indent:-9000px;
	width: 26px;
	height: 26px;
	background-size: 26px 26px;
	position: absolute;
	top: 50%;
	right: -26px;
	margin-top: -13px;
	opacity:0;
	background-image: url("<?php echo JURI::base(); ?>/modules/mod_wsaccordion/images/<?php echo $arrow ; ?>.png");
	-webkit-transition:  all <?php echo $arrowani ; ?>ms ease-in-out;
	-moz-transition:  all <?php echo $arrowani ; ?>ms ease-in-out;
	-o-transition:  all <?php echo $arrowani ; ?>ms ease-in-out;
	-ms-transition:  all <?php echo $arrowani ; ?>ms ease-in-out;
	transition:  all <?php echo $arrowani ; ?>ms ease-in-out;
}

.st-accordion<?php echo $moduleid ; ?> ul li > a:hover span {
	opacity:1;
	right: 10px;
}

.st-accordion<?php echo $moduleid ; ?> ul li.st-open > a {
	color: <?php echo $activecolor ; ?>;
}

.st-accordion<?php echo $moduleid ; ?> ul li.st-open > a span {
	right:10px;
	opacity:1;
	-webkit-transform:rotate(<?php echo $arrowrotation ; ?>deg);
	-moz-transform:rotate(<?php echo $arrowrotation ; ?>deg);
	-ms-transform:rotate(<?php echo $arrowrotation ; ?>deg);
	-o-transform:rotate(<?php echo $arrowrotation ; ?>deg);
	transform:rotate(<?php echo $arrowrotation ; ?>deg);
}

.st-accordion<?php echo $moduleid ; ?> .st-content {
	padding: 25px 15px;
}

<?php if ( $addcss != '' ) echo $addcss ;?>

@media only screen and (max-width: 767px) {
	.st-accordion<?php echo $moduleid ; ?> ul li > a {
		font-size: <?php echo $responsivefontsize ; ?>px;
	}
}

</style>




<?php endif; ?>

<?php if ( $jqueryload == '1' ) : ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/<?php echo $jqueryversion ;?>/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JURI::base(); ?>/modules/mod_wsaccordion/js/jquery.accordion.js"></script>
<script type="text/javascript" src="<?php echo JURI::base(); ?>/modules/mod_wsaccordion/js/jquery.easing.1.3.js"></script>
<?php endif; ?>

<?php if ( $jqueryload == '2' ) : ?>
<script type="text/javascript" src="<?php echo JURI::base(); ?>/modules/mod_wsaccordion/js/jquery.accordion.js"></script>
<script type="text/javascript" src="<?php echo JURI::base(); ?>/modules/mod_wsaccordion/js/jquery.easing.1.3.js"></script>
<?php endif; ?>

<?php if ( $jqueryload == '3' ) : 
	$document->addScript('http://ajax.googleapis.com/ajax/libs/jquery/'.$jqueryversion.'/jquery.min.js');
	$document->addScript(''.JURI::base().'/modules/mod_wsaccordion/js/jquery.accordion.js');
	$document->addScript(''.JURI::base().'/modules/mod_wsaccordion/js/jquery.easing.1.3.js'); 
endif; ?>

<?php if ( $jqueryload == '4' ) : 
	JHtml::_('jquery.framework', false);
	$document->addScript(''.JURI::base().'/modules/mod_wsaccordion/js/jquery.accordion.js');
	$document->addScript(''.JURI::base().'/modules/mod_wsaccordion/js/jquery.easing.1.3.js'); 
endif; ?>

<?php if ( $jqueryload == '5' ) : 
	JHtml::_('jquery.framework');
	$document->addScript(''.JURI::base().'/modules/mod_wsaccordion/js/jquery.accordion.js');
	$document->addScript(''.JURI::base().'/modules/mod_wsaccordion/js/jquery.easing.1.3.js'); 
endif; ?>

<?php if ( $jqueryload == '6' ) :	
	$document->addScript(''.JURI::base().'/modules/mod_wsaccordion/js/jquery.accordion.js');
	$document->addScript(''.JURI::base().'/modules/mod_wsaccordion/js/jquery.easing.1.3.js'); 
endif; ?>

<script type="text/javascript">
<?php if ( $jqueryconflict == '0' ) : ?>
var $wsacc=jQuery;
<?php endif; ?>
<?php if ( $jqueryconflict == '1' ) : ?>
var $wsacc = jQuery.noConflict();
<?php endif; ?>
$wsacc(function() {
	$wsacc('#st-accordion<?php echo $moduleid ; ?>').accordion(
		{
			oneOpenedItem	: <?php if( $toggle == "1") { echo "true"; } else { echo "false"; } ?>,
			speed : <?php echo $elementspeed ; ?>,
			open : '-1',
			easing : '<?php echo $easing ; ?>'
		}
	);
});
</script>

<div class="wrapper-acc">
	<div id="st-accordion<?php echo $moduleid ; ?>" class="st-accordion<?php echo $moduleid ; ?> wsacc">
		<ul>

<?php if ( $act0 == '1' ) : ?><li><a href="javascript:void(0)"><?php echo $head0 ; ?><span class="st-arrow"></span></a><div class="st-content"><?php echo $con0 ; ?></div></li><?php endif; ?>
<?php if ( $act1 == '1' ) : ?><li><a href="javascript:void(0)"><?php echo $head1 ; ?><span class="st-arrow"></span></a><div class="st-content"><?php echo $con1 ; ?></div></li><?php endif; ?>
<?php if ( $act2 == '1' ) : ?><li><a href="javascript:void(0)"><?php echo $head2 ; ?><span class="st-arrow"></span></a><div class="st-content"><?php echo $con2 ; ?></div></li><?php endif; ?>
<?php if ( $act3 == '1' ) : ?><li><a href="javascript:void(0)"><?php echo $head3 ; ?><span class="st-arrow"></span></a><div class="st-content"><?php echo $con3 ; ?></div></li><?php endif; ?>
<?php if ( $act4 == '1' ) : ?><li><a href="javascript:void(0)"><?php echo $head4 ; ?><span class="st-arrow"></span></a><div class="st-content"><?php echo $con4 ; ?></div></li><?php endif; ?>
<?php if ( $act5 == '1' ) : ?><li><a href="javascript:void(0)"><?php echo $head5 ; ?><span class="st-arrow"></span></a><div class="st-content"><?php echo $con5 ; ?></div></li><?php endif; ?>
<?php if ( $act6 == '1' ) : ?><li><a href="javascript:void(0)"><?php echo $head6 ; ?><span class="st-arrow"></span></a><div class="st-content"><?php echo $con6 ; ?></div></li><?php endif; ?>
<?php if ( $act7 == '1' ) : ?><li><a href="javascript:void(0)"><?php echo $head7 ; ?><span class="st-arrow"></span></a><div class="st-content"><?php echo $con7 ; ?></div></li><?php endif; ?>
<?php if ( $act8 == '1' ) : ?><li><a href="javascript:void(0)"><?php echo $head8 ; ?><span class="st-arrow"></span></a><div class="st-content"><?php echo $con8 ; ?></div></li><?php endif; ?>
<?php if ( $act9 == '1' ) : ?><li><a href="javascript:void(0)"><?php echo $head9 ; ?><span class="st-arrow"></span></a><div class="st-content"><?php echo $con9 ; ?></div></li><?php endif; ?>
<?php if ( $act10 == '1' ) : ?><li><a href="javascript:void(0)"><?php echo $head10 ; ?><span class="st-arrow"></span></a><div class="st-content"><?php echo $con10 ; ?></div></li><?php endif; ?>
<?php if ( $act11 == '1' ) : ?><li><a href="javascript:void(0)"><?php echo $head11 ; ?><span class="st-arrow"></span></a><div class="st-content"><?php echo $con11 ; ?></div></li><?php endif; ?>
<?php if ( $act12 == '1' ) : ?><li><a href="javascript:void(0)"><?php echo $head12 ; ?><span class="st-arrow"></span></a><div class="st-content"><?php echo $con12 ; ?></div></li><?php endif; ?>
<?php if ( $act13 == '1' ) : ?><li><a href="javascript:void(0)"><?php echo $head13 ; ?><span class="st-arrow"></span></a><div class="st-content"><?php echo $con13 ; ?></div></li><?php endif; ?>
<?php if ( $act14 == '1' ) : ?><li><a href="javascript:void(0)"><?php echo $head14 ; ?><span class="st-arrow"></span></a><div class="st-content"><?php echo $con14 ; ?></div></li><?php endif; ?>
<?php if ( $act15 == '1' ) : ?><li><a href="javascript:void(0)"><?php echo $head15 ; ?><span class="st-arrow"></span></a><div class="st-content"><?php echo $con15 ; ?></div></li><?php endif; ?>
<?php if ( $act16 == '1' ) : ?><li><a href="javascript:void(0)"><?php echo $head16 ; ?><span class="st-arrow"></span></a><div class="st-content"><?php echo $con16 ; ?></div></li><?php endif; ?>
<?php if ( $act17 == '1' ) : ?><li><a href="javascript:void(0)"><?php echo $head17 ; ?><span class="st-arrow"></span></a><div class="st-content"><?php echo $con17 ; ?></div></li><?php endif; ?>
<?php if ( $act18 == '1' ) : ?><li><a href="javascript:void(0)"><?php echo $head18 ; ?><span class="st-arrow"></span></a><div class="st-content"><?php echo $con18 ; ?></div></li><?php endif; ?>
<?php if ( $act19 == '1' ) : ?><li><a href="javascript:void(0)"><?php echo $head19 ; ?><span class="st-arrow"></span></a><div class="st-content"><?php echo $con19 ; ?></div></li><?php endif; ?>

		</ul>
	</div>
</div>
                		

