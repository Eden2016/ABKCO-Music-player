<?php

//$filename = ('public/musice/rihanna-american-oxygen.mp3');
//echo filesize($filename)/1e+6;
//exit;


?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
	<style>
		@font-face {
			font-family: "MyriadProRegular"; /* Имя шрифта */
			src: url(/public/fonts/MyriadProRegular.ttf); /* Путь к файлу со шрифтом */
		}
		body {
			font-family: "MyriadProRegular";
		}
	</style>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" >
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css"
		  href="https://fonts.googleapis.com/css?family=Tangerine">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="../../public/css/mini-navbar.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
<!--	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>-->
		<script type="text/javascript" src="../../public/player/lib/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="../../public/css/isotope-docs.css">
	<script type="text/javascript" src="../../public/player/dist/jplayer/jquery.jplayer.min.js"></script>
	<script type="text/javascript" src="../../public/player/dist/add-on/jplayer.playlist.min.js"></script>
	<link href="../../public/player/dist/skin/blue.monday/css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../public/css/star-rating.css" media="all" type="text/css">

	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
<!--	<link rel="stylesheet" href="../../public/css/style.css">-->
	<script src="../../public/js/jquery.animations.min.js"></script>
	<script src="../../public/js/jquery.animations-tile.js"></script>
	<script src="../../public/js/app.js"></script>


	<script src="/public/js/star-rating.js" type="text/javascript"></script>
	<script src="/public/js/custom.js"></script>
	<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
	<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
	<script src="/public/js/jquery.mixitup.js"></script>
	<script src="/public/js/isotope-docs.min.js"></script>
	<script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>


<!--	<link rel="stylesheet" href="../style/css/style.css" type="text/css">-->
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
<!--	<script src="../audiojs/audio.min.js"></script>	-->

	<style type="text/css">


	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}
	body .container-fluid{
		padding: 0;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: "Myriad Pro Regular";
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
		.navbar-musice.navbar-inverse{
			background-color: inherit;
			background-image: none;
			border:none;
		}
		.navbar-musice{
			width: 100%;
			background-color: #F4F4F4 !important;
			max-height:81px;

			border-radius: 0;
		}
	.navbar-inverse .navbar-nav>li>a:focus, .navbar-inverse .navbar-nav>li>a:hover{
			color: white !important;
		background-color: black;
		}

		.active{
			background-color: #000000 !important;
		}
		.actived-body-nav{
			background-color: #000000 !important;

		}
		.modal-nav-active{
			background-color: #000000 !important;
		}
		.mus-exp-nav-active{
			background-color: #000000 !important;
		}
	.nav>li>a:hover{
			background-color: #000000;
		color: white;
		}
		.nav-head li a{
			color: rgb(122,122,122);
			max-height:84px;
			padding: 41px 50px;
		}

	.navbar {
		margin-bottom: 0;
	}
		.bottom-line{
			padding:0 0;
			background: #000000;
		}
		.icon_play{
			border:2px solid rgb(237,237,237);

		}
	.left-part-nav i {
		position: relative;
		bottom: 2px;
	}
	.left-part-nav{
		color: rgb(237,237,237);
		padding: 6px 0 5px 15px;
		font-size: 14px;
	}
		.search-part{
			padding: 16px 50px 36px 0;


	}
	.close_minimize{
		padding:30px 25px;
		color:rgb(194,194,194);
		max-height: 81px;
		border-left: 1px solid rgb(194,194,194);
	}
	.navbar-nav{
		margin:-2px;
	}
		.album-part{
			/*padding: 15px;*/
			background-color: #ffffff;
			padding: 0px;
		}
	.album-part ul li:hover{
			background-color: #000000;
			color: #ffffff;
		}
		.left_bar{
			background-color: #ffffff;
			background:#ffffff;
			border-radius: 0px;

		}

		.album{
			color: rgb(194,194,194);
			padding-top: 5px;
			font-size: 14px;
			font-family: "Myriad Pro Regular";
		}
		.album-part .navbar-inverse{
			border-color: white;
		}
		.table_icons i{
			font-size: 18px;
		}
		.hover-table tr:hover{
			background-color: #000 !important;
			color: #ffffff;
		}
		.download a{
			color:rgb(11,198,219)
		}
		.mus-table{
			padding: 0px !important;
		}
	.right-part-a{
		padding: 2px 15px !important;
	}
		.mus-tbl-right{
			padding-left:0px;
			padding-right:0px;
		}
	button.accordion {
		background-color: #2fa9f5;
		color: #444;
		cursor: pointer;
		/*padding: 18px;*/
		width: 100%;
		text-align: left;
		border: none;
		outline: none;
		transition: 0.4s;
	}

	/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
	button.accordion.active, button.accordion:hover {
		background-color: #ddd;
	}

	/* Style the accordion panel. Note: hidden by default */
	div.panel {
		padding: 0 18px;
		background-color: white;
		display: none;
	}

	/* The "show" class is added to the accordion panel when the user clicks on one of the buttons. This will show the panel content */
	div.panel.show {
		display: block;
	}
		.mus_info_part{
			line-height: 6px;
			font-size: 12px;
		}
	.mus_info_part h6{
		color: #000;
	}
		.album_img{
			border: 4px solid rgb(194,194,194);
		}
		.player-part{
			background-color: rgb(59,59,59);
			padding: 22px 20px;
			height: 117px;
		}
		.player-artist-img{
			width: 80px;
			height:80px;
		}
		.musice-name{
			padding: 0px 0 6% 7%;
			color: #ffffff;
			font-size: 13px;
		}
		.btn-play-next{
			padding-left: 26px;
			bottom: 10px;
		}
		.btn-prev_next{
			font-size: 15px;
			color: #fff;
			border: 2px solid white;
			border-radius: 50%;
			padding: 4px;
			cursor: pointer;
		}
		.btn-play_play{
			font-size: 20px;
			color: #fff;
			border: 2px solid white;
			border-radius: 50%;
			padding-left: 12px;
			padding-right:6px;
			padding-top: 8px;
			padding-bottom: 10px;
			margin-right: 5px;
			cursor: pointer;
		}
	.demo-container {
		border: 1px solid #009BE3;
		padding:0 0px;
		font-family: "Myriad Pro Regular";
	}

	.demo-container a, .demo-container a:link, .demo-container a:visited, .demo-container a:hover, .demo-container a:focus, .demo-container a:active {
		color: #009BE3;
	}

	.demo-container ul {
		list-style-type:none;
		padding:0;
		margin:1em 0;
		width:100%;
		overflow:hidden;
	}

	.demo-container ul span {
		color: #A0A600;
	}

	.demo-container li {
		float:left;
		margin-right:1em;
	}

	.demo-container p div.track-name {
		color: #CC0090;
		font-size: 17px;

	}
.jp-interface{
	background-color: inherit;

}
	.jp-audio, .jp-audio-stream, .jp-video{
		background-color: inherit;
		border: none;
	}
	.jp-play{
		background: inherit;
	}
	.jp-volume-controls{
		top: 0px;
	}
	.jp-audio .jp-type-single .jp-progress{
		width: 100%;
		left: 0;
	}
		.player_point{
			top:-3px;
			color: rgb(163,163,163);
			background-color: rgb(163,163,163);
			border-radius: 50%;
		}
		.demo-container{
			border:none;
		}
		.rating-lg{
			font-size: 15px;
		}
	.jp-duration{
		float: none;
		color:#fff;
		font-size:10px;
	}
		.jp-current-time{
			float: none;
			color:#fff;
			font-size:10px
		}
		.rating_star{
			padding: 0;
		}
		.mus-time-part{
			padding: 0;
		}
		.track-name-part{
			padding: 0;
			color: #ffffff;
			font-size: 20px;

		}
		.progressing{
			padding: 0;
		}
	.jp-audio{
		100% !important;
	}
		.btn-prev_next{
			margin-right: 5px;
		}
		.padding-left-none{
			padding-left:0px;
		}
		.nav-search-tab{
			border-radius: 0;
			border: 1px solid #bdbdbd;
			height: 31px;
			background-color: white !important;
		}
	.jp-state-looped .jp-repeat:focus{
		background: none;
		text-indent: 1px;
	}
	.jp-state-looped .jp-repeat{
		background: none;
		text-indent: 1px;
	}
	.jp-repeat {
		background: none;
		text-indent: 1px;
		color: #FFFFFF;
		font-size: 20px;

	}
	.jp-toggles button{
		text-indent: 1px;
		width: inherit;
		height: inherit;
		line-height: inherit;
	}
	.jp-repeat:focus {
		background: none;
		text-indent: 1px;
	}
		.player-right-part-btn{
			background: inherit;

			opacity: 0.7;
			color: #9a9aac;
			border: 2px solid #908f96 !important;
			border-radius: 3px;
		}
		.jp-toggles{
			padding: 30px;
			padding-left: 24px;
		}
	.progressing .jp-audio{
		width: inherit;
	}
	.jp-toggles table tr td{
		padding:0 3px;

	}

		.player-point-end{
			position: absolute;
			color: #a3a3a3;
			background-color: #a3a3a3;
			border-radius: 50%;
			left: 37%;
			top: 35%;
			font-size: 25px;
		}
		.volume-pointer{
			position: absolute;
			color: #a3a3a3;
			background-color: #a3a3a3;
			border-radius: 50%;
		}
		.jp-volume-controls button{
		background-color: inherit;
			background:inherit;
			text-indent: 0;
		}
	.jp-mute:focus {
		background:	 inherit;
	}
	.jp-state-muted .jp-mute{
		background: inherit;
	}
	.jp-state-muted .jp-mute:focus{
		background: inherit;
	}
	.jp-volume-max{
		font-size: 15px;
		color: #FFFFFF;
		background-color: inherit;
		background:inherit;
		text-indent: 0;
		left: 115px;
	}
	.jp-volume-max:focus {
		background: inherit;
	}
	.jp-mute, .jp-volume-max{
		width: 23px;
		height: 25px;
		color: #FFFFFF;
		padding:0px;
		top: -8px;
	}
	.display-none{
		display: none;
	}
		.mus-explorer{
			background: #e3e3e3;
			padding: 15px 16px;
		}
	.mus-exp-name-artist{
		color: #030303;
		margin-bottom: 0px !important;
		font-size: 24px;
	}

		.mus-exp-infoToalb{
			color: #737373;
			font-size: 14px;
			font-weight: 500;
		}
		.mus-exp-left-part{
			border-right: 1px solid #ffffff;
		}
		.mus-exp-center-desc{
			color: #737373;
			font-size: 14px;
			font-weight: 500;

		}
		.mus-exp-total-album{
			font-size: 14px;
			font-weight: 600;
		}
		.mus-exp-right-part{
			border-left: 1px solid white;
		}
		.mus-exp-nav{
			background-color: #a8a8a8;
			padding-left: 0px;

		}
	.mus-exp-nav .navbar-inverse .navbar-nav{
		margin: 0;
		color: #a1a1a1;
	}
	.mus-exp-nav .navbar-inverse .navbar-nav ul li.active{
		color: #FFFFFF;
	}

	.mus-exp-nav .navbar-inverse{
		border:none !important;

		}
		.mus-exp-nav .navbar-inverse:first-child div{
			background-color: #a8a8a8;

		}
		.mus-exp-nav .container-fluid{
			padding-left: 0px;
		}
		.mus-exp-nav-h6 h6{
			font-size: 10px;
			max-width: 210px;
			line-height: 3px;
		}
	.mus-exp-nav-h6{
		padding: 20px 15px 20px 60px;
		background-color: #fafafa;
		}
	.mus-exp-nav-h6 ._first{
		font-size: 12px;
		font-weight: 700;
		color: #7b7b7b;
	}
	.mus-exp-nav-h6 ._firstn{
		font-size: 11px;
		font-weight: 700;
		color: #7b7b7b;
	}
		.explorer-table{
			padding-left: 0px;
			padding-right: 0px;
			background-color: #fafafa;
		}
		.profile-wikiped{
			overflow: hidden;
			text-overflow: ellipsis;
			display: -webkit-box;
			-webkit-line-clamp: 3;
			-webkit-box-orient: vertical;
			height: 4em;
			font-size: 14px;
			font-weight: 600;
			line-height: 1.4;
			margin-top:26px
		}
		.mus-table-profile-topline{
			padding: 0px;
		}
	.mus-table-profile-topline div{
		padding: 0px;
	}
		.playlist-now-table{
			padding: 0px;
			background-image: url("http://www.zastavki.com/pictures/1920x1200/2012/Music_Eminem_034229_.jpg");
		}
		.player-part{
			bottom: 0;
			position: fixed;
			opacity: 0.8;
		}
		.modal-header{
			background-color: #f2f2f2;
		}
	.modal-body .navbar-inverse
	{
		background-color: #b0b0b0;
	}
	.modal-body .container-fluid
	{
		background-color: #b0b0b0;

	}
	.modal-body .container-fluid .nav.navbar-nav
	{
		margin: 0;

	}
		.playlist-now-table .navbar{
			height: 40px;
		}
	.playlist-now-table .modal-body .navbar{
			height: 40px;
			min-height: inherit;
		border: 0px solid transparent;
		}
	.playlist-now-table .modal-body{
		padding: 0;
	}
	.playlist-now-table .modal-body .container-fluid{
		padding: 0;
	}



		.playlist-now-table .navbar ul li {
			height: 40px;
		}
	.playlist-now-table .navbar ul li a {
		height: 20px;
		padding: 10px 15px;
	}
	.modal-body-part{
		padding: 0;
		background-color: #c7c7c7;
	}
		.modal-body-part .col-lg-8{
			padding: 0;
		}
	.modal-body-part .col-lg-4{
		padding:0;
	}
	.modal-body-part .col-lg-2{
		padding: 0;
		font-weight: 700;
		font-size:12px;
	}
	.modal-body-part .col-lg-9 input[type='text']{
		background-color: #f2f2f2;
		border-radius: 0;
		height: 30px;
	}
	.modal-body-part .col-lg-9 input[type='text'].img{
		background: url(../../public/img/texticon.png) no-repeat scroll 7px;
		padding-left: 30px;
		background-size: 35px;
		background-color: #f2f2f2;
		background-position-x: 100%;
	}
	.modal-body-part .col-lg-9{
		padding-right: 0;
	}
		.input-year{
			width: 30%;
		}
		.drag-and-drop{
			padding-top: 10px;
		}
		.textarea-comments{
			background-color: #f2f2f2;
			resize: none;
			height: 75px;
			width: 100%;
		}
		.playlist-now-table .modal-footer{
			background-color: #b0b0b0;

		}
		.playlist-now-table .modal-footer button{
		background: #ffffff;
		border-radius: 0;
		width: 110px;

		}
		.buttons-part-modal{
			padding: 0;
			top: 5px;
		}
	.buttons-part-modal .col-lg-6{
		padding: 0px;
	}
		.buttons-part-modal .btn-next-back{
			width:50px !important;
			height: 35px;
		}

	@media screen and (min-width: 1600px) {
		.modal-content{
			width: 800px;
		}
		.txt-lyrics-textarea{
			width: 630px;
			height: 300px;
			resize: none;
		}

		.radio-btn-part form{
			padding-right: 20px;
		}

	}
	.txt-lyrics{
		width: 100%;
		background-color: #f5f5f5;
	}

.settings-part .col-lg-3{
	padding: 3px;
	font-size:11px;
	font-weight: 700;
}
	.tags-two-part .col-lg-3{
	padding: 0px;
	font-size:11px;
	font-weight: 700;
}
		.btn-drop{
			width: 100%;
			border-radius: 0;
			background-color: #f2f2f2;
			color:#000;
			border-color: #c7c7c7;

		}
		.btn-drop .caret{
			margin-left: 100%;
		}
		.btn-drop:hover{
			background-color: #f2f2f2;
			color: black;
		}
	.btn-drop:active{
		background-color: #f2f2f2;
		color: black;
	}
	.btn-drop:focus{
		background-color: #f2f2f2 !important;
		color: black !important;
	}
	.tags-two-part .dropdown-menu{
		width: 100%;
		border-radius: 0px;
	}
		.txtbox-icon{
			background: url(../../public/img/texticon.png) no-repeat scroll 7px;
			background-size: 35px;
			background-position-x: 99%;
		}
	body {
		font-family: "Myriad Pro Regular";
		font-size: 16px;
	}
	.artwork-part label {
		display: inline-block;
		width: 70px;
		line-height: 25px;
	}
	.setting-two-part form {
		float: left;
		width: 100%;
		padding-top: 20px;
	}
		.setting-two-part .progress-bars{
			line-height: 1px;
		}
		.setting-two-part .progress-num{
			font-size: 12px;
		}
		.setting-two-part .dropdown-menu{
			width: 100%;
		}

.equalize{
	font-size: 11px;
	font-weight: 700;
}
		.item-part-one{
			padding-top: 10px;
			padding-bottom: 90px;
		}
		.start-time-txt{
				width: 110px;
		}
		.start-time-btn{
			background-color: #000;
			color: #FFFFFF;
			width: 75px;
			font-size: 10px;
			border: 1px solid #000000;
		}
		.artwork-part textarea{
			width: 100%;
			height: 105px;
			background-color: #f2f2f2;
			resize: none;

		}
		.artwork-part .btn-drop{
			width:100%;
		}
		.artwork-part{
			padding: 25px 0px 90px 0;
		}
		.btn-upload{
			width: 115px;
			height: 35px;
			background-color: #000;
			color: #fff;
			border: none;
			margin-right: 11px;
		}
	body::-webkit-scrollbar {
		display: none;
	}
		.prev-music{
			background-color: inherit;
		}
		.btn-prev_next{
			margin-right: 0px;
		}
		.mus-exp-nav .range-type{
			padding: 12px 0;
		}
	   .mus-exp-nav ul {
		width: 100%;
	}
		.range-txt{
			width: 60% !important;
			display: inline-block !important;
		}
		.album-two .col-lg-1,.album-two-albums .col-lg-1{
			padding-left:0px;

		}
	.album-two:hover,.album-two-albums:hover{
		color: black;

	}
	.album-two,.album-two-albums{
		color: rgb(194,194,194);
		cursor: pointer;
		font-size: 14px;
		font-family: sans-serif;
		padding-left:0 ;
	}

	.left-album-menu-two {
		padding: 20px 0px;
	}
	.left-album-menu-two li:hover {
			background-color: inherit !important;
	}
		.playlist-top-left{
			font-weight: 700;
		}
		.select-2-download{
			font-size: 11px;
			color: rgb(194,194,194);
			cursor: pointer;
		}
	.dwn-selected a{
		color:black;
		text-decoration: underline;
		cursor: pointer;

	}
	.dwn-selected{
		padding-left: 0;
	}
	.mus-exp-nav-top-row{
		padding:12px 0;
	}
		.mus-exp-center-part{
			height: 85px;
		}
	/*@media screen and (min-width: 1200px){*/
		/*.navbar-musice .nav-head{*/
			/*display: block;*/
		/*}*/
		/*.bottom-line{*/
			/*display: block;*/
		/*}*/
		/*.response-nav{*/
			/*display: none;*/
		/*}*/
	/*}*/
	/*@media screen and (max-width: 1200px){*/
		/*.navbar-musice .nav-head{*/
			/*display: none;*/

		/*}*/
		/*.response-nav{*/
			/*display: block;*/
		/*}*/
		/*.bottom-line{*/
			/*display: none;*/
		/*}*/
	/*}*/
	.musics-table{
		padding: 0;
		background-color: #fafafa;
	}
	.nav-musics-table{
		-webkit-border-radius:0;
		-moz-border-radius:0;
		border-radius: 0;
		background: inherit;
		border: none;

	}
		.track-name{
			width:70%;
			overflow: hidden;
			text-overflow: clip;
			display: -webkit-inline-box;
			-webkit-line-clamp: 1;
			-webkit-box-orient: vertical;
			 	font-size: 20px;
			height: 1.1em;
			font-family: "Myriad Pro Regular";
		}
		.next-music{
			font-size: 16px;
			padding: 5px;

		}.prev-music{
			font-size: 16px;
			padding: 5px;
		}
	.next-music:hover{
		opacity: 0.7;

	}.prev-music:hover{
		opacity: 0.7;

	}
	.playing:hover{
		text-decoration: none;
		opacity: 0.7;

	}
.pausing{
	text-decoration: none !important;
}
		.download .progress{
			width: 100%;
			margin-bottom:0px;
		}
	.download .col-lg-8{

			margin-bottom:0px;
		padding: 0;
		}
		.canceldownbtn{
			border: 2px solid #ee4e61;
			background: #ee4e61;
			border-radius: 50%;
			padding: 3px;
		}
		.progressing_dwn .progress{
			height: 10px;
		}
		.active-artist{
			background-color: #000;
			color: #FFFFFF;
		}
		.playing_now:hover{
			.pl_now{
				
			}
		}
	.nav-search-tab{
		background: url('../../public/icons/search.png');
		background-repeat: no-repeat;
		background-position-y: 14px;
		padding: 0 34px;
		background-position-x: 14px;
		height: 45px;
		width: 227px;
	}
		.opac-img{
			display: none;
			width: 100px;
			position: absolute;
			padding-top: 50px;
		}
		

.jp-volume-bar{
width: 93px;
}
	.jp-current-time,.jp-duration {
		font-size: 14px;
	}

		.musics-table .nav-musics-table ul.nav.navbar-nav li.active{
			background-color: inherit !important;
			color: #000 !important;
		}
		.nav-m-t-active{
			color: #000 !important;
			background-color: inherit;
		}
	.navbar-inverse .navbar-nav>li>a:focus, .navbar-inverse .navbar-nav>li>a:hover{
			color: black;
		}
	@media screen and (max-width: 1366px){
		.nav-head li a{
			/*padding-left:25px;*/
			/*padding-right:25px;*/
		}
		.jp-volume-controls{
			top: 0px;
			left: 0px;
			width: 200px;
		}
		.jp-volume-controls.q{
			display: block !important;
		}
		.jp-volume-max{
			display: block !important;
		}
		.jp-volume-bar{
			display: block !important;
		}
		.jp-volume-bar-value{
			display: block !important;
		}
		.player-right-part-btn {
			font-size: 14px;
			width: 60px;
		}
		.settings-part .col-lg-3{
			padding: 0px;
			font-size: 10px;
		}
		.tags-two-part .col-lg-3{
			padding: 0px;
			font-size: 11px;
		}
	}
			@media screen and (max-width: 1315px){
				.jp-volume-max{
					left: 47%;
				}
				.search-part{
					padding-right: 20px;
				}
				.nav-head li a{
					/*padding-left: 15px;*/
					/*padding-right: 15px;*/
				}
				.nav-search-tab{
					padding-right: 0px;
					width: 227px;
				}
				.logo-left-padd.container-fluid{
					padding-left: 0 !important;
				}
				.navbar-brand img{
					padding-top: 15px;
				}
				.dwn-selected{
					padding-right: 0px;
				}
				.dwn-selected a{
					font-size: 11px;
				}
				.dwn-selected{
					font-size: 8px;
				}
				.music-albums .resized-alb-part img{
					width: 140px;
					height: 140px;
				}
				.jp-volume-bar{
					width: 70px;
				}
				.mus-exp-nav-h6 .resized-alb-part.select-albums img{
					width: 170px;
					height: 170px;
				}
				.select-2-download-div{
					padding-right: 0;

				}
				.mus-exp-left-part{
					padding-left: 30px;
					padding-top: 10px;
				}
			}
	@media screen and (max-width: 1347px){
		.btn-play-next{width: 70%}
		.resp-part-2{width: 30%; right:45px !Important}
	}
	@media screen and (min-width: 1800px ){
		.plnow {
			padding-right: 13.5% !important;
		}
	}@media screen and (max-width: 1380px ){
		.plnow {
			padding-right: 10.3% !important;
		}
	}
	@media screen and (max-width: 1458px){
		.close_minimize{
			padding-right: 15px !important;
			padding-left: 15px !important;

		}}
	</style>
	<script type="text/javascript">
		//<![CDATA[

		$(document).ready(function(){
			$('.playlist-now-table').height($(window).height());
//			$('playlist-now-table').css('height', $('#cont').height()+'!important');

			// Local copy of jQuery selectors, for performance.
			var	my_jPlayer = $("#jquery_jplayer"),
				my_trackName = $("#jp_container .track-name"),
				my_playState = $("#jp_container .play-state"),
				my_extraPlayInfo = $("#jp_container .extra-play-info");

			// Some options
			var	opt_play_first = false, // If true, will attempt to auto-play the default track on page loads. No effect on mobile devices, like iOS.
				opt_auto_play = true, // If true, when a track is selected, it will auto-play.
				opt_text_playing = "Now playing", // Text when playing
				opt_text_selected = "Track selected"; // Text when not playing

			// A flag to capture the first track
			var first_track = true;

			// Change the time format
			$.jPlayer.timeFormat.padMin = false;
			$.jPlayer.timeFormat.padSec = false;
			$.jPlayer.timeFormat.sepMin = " : ";
			$.jPlayer.timeFormat.sepSec = " ";

			// Initialize the play state text
			my_playState.text(opt_text_selected);

			// Instance jPlayer
			my_jPlayer.jPlayer({
				ready: function () {
					$("#jp_container .track-default").click();
				},
				timeupdate: function(event) {
					my_extraPlayInfo.text(parseInt(event.jPlayer.status.currentPercentAbsolute, 10) + "%");
				},
				play: function(event) {
					my_playState.text(opt_text_playing);
				},
				pause: function(event) {
					my_playState.text(opt_text_selected);
				},
				ended: function(event) {
					my_playState.text(opt_text_selected);
				},
				swfPath: "../../dist/jplayer",
				cssSelectorAncestor: "#jp_container",
				supplied: "mp3",
				wmode: "window"
			});

			// Create click handlers for the different tracks
			$("#jp_container .track").click(function(e) {
				my_trackName.text($(this).text());
				my_jPlayer.jPlayer("setMedia", {
					mp3: $(this).attr("href")
				});
				if((opt_play_first && first_track) || (opt_auto_play && !first_track)) {
					my_jPlayer.jPlayer("play");
				}
				first_track = false;
				$(this).blur();
				return false;
			});

			$('body').on('contextmenu','.jp-playlist-ul li',function (){
				$('.modal-title').text($(this).text());
			});
		});</script
</head>
<body>

	<div id="cont" class="container-fluid">

	<nav class="navbar navbar-inverse  navbar-musice col-lg-12 col-xs-12">
		<div class="container-fluid col-lg-12 col-xs-12 logo-left-padd" style="padding-left: 50px">
			<div class="navbar-header col-lg-1 col-xs-1 padding-left-none">
				<a class="navbar-brand " href="http://www.abkco.com/index.php">
					<img src="http://www.abkco.com/images/logo.svg" width="100%">
				</a>
			</div>
			<div>

				<ul class="nav navbar-nav nav-head col-lg-11 col-xs-11" style="padding-right:0 ">
					<li class="actived-body-nav my_menus col-lg-1"><a href="#" id="all-musics-part"><i class="glyphicon glyphicon-music musics-icons-glyph" style="padding-right: 4px"></i><span>MUSIC</span></a></li>
					<li class="my_menus" id="playing-now-tab col-lg-2"><a id="playing_now" href="#"><i class="pl_now"><img src="../../public/icons/toggle.png"> </i><span>PLAYING NOW</span></a></li>
					<li class="my_menus col-lg-2"><a id="playlist" href="#"><i class="ic-playlist" style="padding-right: 4px"><img src="../../public/icons/playlists.png"></i><span>PLAYLISTS</span></a></li>
					<li class="my_menus col-lg-2"><a id="mus_expolore" href="#"><i class="discover"><img src="../../public/icons/discover.png"> </i><span>MUSIC EXPLORER</span></a></li>
					<li class='srch-icon col-lg-1'><span><i class=""><img src="../../public/icons/coverflow.png"></i></span></li>
					<li class="search-part col-lg-3"><input class="form-control nav-search-tab" type="search" placeholder="Search Music">
					</li>
					<li class="close_minimize col-lg-1">
						<i class="" style="padding: 0 5px"><img src="../../public/icons/minimize.png"></i>
						<i class="" style="padding-right: 5px"><img src="../../public/icons/maximize.png"></i>
						<i class=""><img src="../../public/icons/exit.png"></i>
					</li>
				</ul>

			</div>
		</div>
	</nav>
	<div class="bottom-line col-lg-12 col-xs-12">
		<div class="col-lg-7 col-xs-7" style="top:5px">
		<span class="left-part-nav" style=" padding: 5px 11px">
		<i class=""><img src="../../public/icons/playing_aritst.png"> </i>
			<span style="font-family: 'Segoe UI'">ALBUM ARTISTS</span>
		</span>
		</div>
		<div class="col-lg-5 col-xs-5 plnow" id="pln">
		<span class="left-part-nav pull-right" style="border-left: 1px solid white;">
			<i class=""><img src="../../public/icons/playing_aritst.png"> </i>
			<span style="font-family: 'Segoe UI'">PLAYING TRACKS</span>
		</span>
		</div>
	</div>
<div class="col-lg-2 album-part col-xs-2">
	<div class="navbar navbar-inverse navbar-fixed-left left_bar">
		<ul class="nav navbar-navs left-album-menu">
			<li id="" relation="" style="padding-bottom: 1px; " class="albums-list-all active-artist">
				<div class="album">
					<div class="col-lg-4 col-xs-4 all_art_part" style="padding-right: 0;">
						<img src="/public/img/Layer2.png" width="45px" height="43px">
					</div>
					<span style="color: #b5b5b5;font-family: 'Segoe UI'" class="left-album-menuresult">ALL ARTISTS</span>
					<span class="left-album-menuresult"> </span>
					<p style="color: #d8d8d8"></p>
				</div>
			</li>
			<?php foreach ($artist->result() as $artists) { ?>
			<li id="<?php echo $artists->id ?>" relation="<?php echo $artists->role ?>" style="padding-bottom: 1px" class="albums-list">
				<div class="album">
					<div class="col-lg-4 col-xs-4 unknown_art_part" style="padding-right: 0; "><img src="../../public/img/<?php echo $artists->img ?>" width="45px" height="43px"></div>
					<span style="color: #b5b5b5;font-family: 'Segoe UI';font-weight: 600" class="left-album-menuresult"><?php echo $artists->name ?></span>
					<span class="left-album-menuresult">  </span>
					<p style="color: #d8d8d8;font-family: 'Segoe UI'" class="left-album-menuresult">80tracks</p>
				</div>
			</li>
			<?php } ?>
			<li>
			<li class="info-left-tr" style="display: block;">
				<div class="left-part-now-playing display-none" style="font-family: 'Segoe UI';font-size: 14px">Now Playing</div>
<!--				<img class="album_img_two display-none" src="http://saintheron.com/wp-content/uploads/2015/11/Rihanna-2015.jpg" width="100%">-->
				<div id="body animat_body">
					<div id="description">
<!--						<p>-->
<!--							This page shows tile plugin usage. Click button to see the effect and source code.-->
<!--						</p>-->
					</div>
					<div id="container animate_container" class="display-none animate_container">
						<img id="image" src="../../public/img/beyonce.jpg" style="width: 100%"/>
					</div>
					<div id="settings">
						<button id="submit" class="display-none">Animate</button>
						<div>
<!--							<h3>Pre-defined Combinations</h3>-->
							<button id="assemble" class="predefined display-none">Assemble</button>
						</div>
<!--						<div id="animations">-->
<!--							<input id="show-effect" class="toggle-check" type="checkbox"/>-->
<!--							<div id="effect" class="toggle-wrapper">-->
<!--								<h3><label class="options-toggle" for="show-effect">Effect</label></h3>-->
<!--								<div id="effects" class="toggle-container" >-->
<!--									<div>-->
<!--										<input id="combine" type="checkbox" checked="checked"/>-->
<!--										<label for="combine">Combine</label>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<input id="show-alternate" class="toggle-check" type="checkbox"/>-->
<!--							<div id="alternate" class="toggle-wrapper">-->
<!--								<h3><label class="options-toggle" for="show-alternate">Alternate</label></h3>-->
<!--								<div id="alternates" class="toggle-container">-->
<!--									<div>-->
<!--										<input id="combine2" type="checkbox" checked="checked"/>-->
<!--										<label for="combine2">Combine</label>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--						<input id="show-options" class="toggle-check" type="checkbox"/>-->
<!--						<div id="options" class="toggle-wrapper">-->
<!--							<h3><label class="options-toggle" for="show-options">Options</label></h3>-->
<!--							<div id="options-wrap" class="toggle-container">-->
<!--								<div class="option-group global">-->
<!--									<h5>Global</h5>-->
<!--									<label for="duration">Duration</label>-->
<!--									<input type="number" id="duration" name="duration" step="100" min="0" />-->
<!--									<label for="delay">Delay</label>-->
<!--									<input type="number" id="delay" name="delay" step="100" min="0" />-->
<!--									<label for="repeat">Repeat</label>-->
<!--									<input type="number" id="repeat" name="repeat" step="1" min="0" />-->
<!--									<label for="easing">Easing</label>-->
<!--									<select id="easing" name="easing">-->
<!--										<option value=""></option>-->
<!--										<option value="linear">Linear</option>-->
<!--										<option value="ease">Ease</option>-->
<!--										<option value="ease-in">Ease In</option>-->
<!--										<option value="ease-out">Ease Out</option>-->
<!--										<option value="ease-in-out">Ease In Out</option>-->
<!--									</select>-->
<!--									<label for="direction">Direction</label>-->
<!--									<select id="direction" name="direction">-->
<!--										<option value=""></option>-->
<!--										<option value="normal">Normal</option>-->
<!--										<option value="alternate">Alternate</option>-->
<!--										<option value="alternate-reverse">Alternate Reverse</option>-->
<!--										<option value="reverse">Reverse</option>-->
<!--									</select>-->
<!--									<label for="fillMode">Fill Mode</label>-->
<!--									<select id="fillMode" name="fillMode">-->
<!--										<option value=""></option>-->
<!--										<option value="forwards">Forwards</option>-->
<!--										<option value="backwards">Backwards</option>-->
<!--										<option value="both">Both</option>-->
<!--									</select>-->
<!--									<label for="rows" class="custom">Rows</label>-->
<!--									<input type="number" id="rows" name="rows" step="1" min="0" />-->
<!--									<label for="cols" class="custom">Cols</label>-->
<!--									<input type="number" id="cols" name="cols" step="1" min="0" />-->
<!--									<label for="groups" class="custom">Groups</label>-->
<!--									<input type="number" id="groups" name="groups" step="1" min="0" />-->
<!--									<input id="sequent" name="sequent" type="checkbox" value="true" checked="checked"/>-->
<!--									<label for="sequent" class="custom">Sequent</label>-->
<!--									<label for="sequence" class="custom">Sequence</label>-->
<!--									<select id="sequence" name="sequence">-->
<!--										<option value=""></option>-->
<!--										<option value="random">Random</option>-->
<!--										<option value="randomCols">Random Columns</option>-->
<!--										<option value="randomRows">Random Rows</option>-->
<!--										<option value="lr">Left-Right</option>-->
<!--										<option value="rl">Right-Left</option>-->
<!--										<option value="tb">Top-Bottom</option>-->
<!--										<option value="bt">Bottom-Top</option>-->
<!--										<option value="lrtb">Left-Right Top-Bottom</option>-->
<!--										<option value="lrbt">Left-Right Bottom-Top</option>-->
<!--										<option value="rltb">Right-Left Top-Bottom</option>-->
<!--										<option value="rlbt">Right-Left Bottom-Top</option>-->
<!--										<option value="tblr">Top-Bottom Left-Right</option>-->
<!--										<option value="tbrl">Top-Bottom Right-Left</option>-->
<!--										<option value="btlr">Bottom-Top Left-Right</option>-->
<!--										<option value="btrl">Bottom-Top Right-Left</option>-->
<!--									</select>-->
<!--									<input id="adjustDuration" name="adjustDuration" type="checkbox" value="true" checked="checked"/>-->
<!--									<label for="adjustDuration" class="custom">Adjust Duration</label>-->
<!--									<label for="strength" class="custom">*Strength</label>-->
<!--									<input type="number" id="strength" name="strength" step="1" min="0" />-->
<!--									<label for="distance" class="custom">*Distance</label>-->
<!--									<input type="number" id="distance" name="distance" step="1" min="0" />-->
<!--									<label for="x" class="custom">*X</label>-->
<!--									<input type="number" id="x" name="x" step="1" />-->
<!--									<label for="y" class="custom">*Y</label>-->
<!--									<input type="number" id="y" name="y" step="1" />-->
<!--									<label for="relative" class="custom">Relative</label>-->
<!--									<select id="relative" name="relative" data-type="bool">-->
<!--										<option value=""></option>-->
<!--										<option value="true">True</option>-->
<!--										<option value="false">False</option>-->
<!--									</select>-->
<!--									<label for="degree" class="custom">*Degree</label>-->
<!--									<input type="number" id="degree" name="degree" step="1" />-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
					</div>
<!--					<div id="code-block">-->
<!--						<h3>Source Code</h3>-->
<!--						<pre id="code">$('#image').animate('tile');</pre>-->
<!--					</div>-->
				</div>
			</li>
			</li>
		</ul>
		<ul class="nav navbar-navs left-album-menu-two display-none">
			<span style="padding-left:15px;font-size: 14px">Playlist</span>
			<li>
				<div class="album-two " data-post_item="created_date">
					<div class="col-lg-3 col-xs-3"></div>
					<div class="col-lg-1 col-xs-1"><i class="glyphicon glyphicon-music"></i> </div>
					<span>Recently Added</span>
				</div>
			</li>
			<li>
				<div class="album-two" data-post_item="playing_date">
					<div class="col-lg-3 col-xs-3"></div>
					<div class="col-lg-1 col-xs-1"><i class="glyphicon glyphicon-music"></i> </div>
					<span>Recently Playing</span>
				</div>
			</li>
			<li>
				<div class="album-two-albums left-album-menu-two-active">
					<div class="col-lg-3 col-xs-3"></div>
					<div class="col-lg-1 col-xs-1"><i class="glyphicon glyphicon-music"></i> </div>
					<span>Albums</span>
				</div>
			</li>

			<li>
				<div class="album-two" data-post_item="rate">
					<div class="col-lg-3 col-xs-3"></div>
					<div class="col-lg-1 col-xs-1"><i class="glyphicon glyphicon-music"></i> </div>
					<span>Top-Rated</span>
				</div>
			</li>
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=299811017072315";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
			


		</ul>
	</div>
</div>
<!--	playlist head-->
	<div class="col-lg-7 col-xs-8 mus-table mus-table-resp display-none">
			<div class="col-lg-12 col-xs-12 mus-exp-nav-top-row">
				<div class="col-lg-2 col-xs-2 playlist-top-left">Albums</div>
				<div class="col-lg-10 col-xs-10 pull-right">
					<div class="col-lg-3 col-xs-3 pull-right" style="padding-right: 0">
						<div class="range-type">
							<span><img style="margin-bottom: 12px" src="../../public/icons/rectanglemin.png"> </span>
							<input type="range" max="2" min="0" value="1" class="range-txt">
							<span><img style="margin-bottom: 12px" src="../../public/icons/rectanglemax.png"> </span>
						</div>
					</div>
					<div class="col-lg-2 col-xs-2 dwn-selected dwn-selected-pllist pull-right"><a class="">Download Selected</a></div>
					<div class="col-lg-2 col-xs-2 pull-right select-2-download-div"><a class="select-2-download">Select to download</a></div>


				</div>
			</div>
		<div class="col-lg-12 col-xs-12 mus-exp-nav-h6">
		<?php foreach ($album->result() as $getalbums){?>
			<div id="<?php echo $getalbums->album_id ?>" class="col-lg-3 col-xs-3 resized-alb-part select-albums">
				<div style="padding-left: 15%" class="top-pat-opcimg">
					<img src="../../public/icons/opacplay.png" class="opac-img">
				</div>
				<img src="../../public/img/<?php echo $getalbums->img?>" width="210" height="211">
				<h6 class="text-center _first" ><?php echo $getalbums->name?></h6>
				<h6 class="text-center"><span class="_firstn">Eoster the People</span></h6>
			</div>
			<?php } ?>
		</div>
		<table class="table table-striped playlist-table my-table display-none">
			<thead>
			<tr>
				<th></th>
				<th>Track</th>
				<th>Artist</th>
				<th>Albums</th>
				<th></th>
			</tr>
			</thead>
			<tbody class="hover-table hover-table-tbody">
			<tr>
				<td class="table_icons"><i class="glyphicon glyphicon-heart-empty"></i> <i class="glyphicon glyphicon-share share-onfb"></i></td>
				<td>Work Hard Die Hard</td>
				<td>Waz Kalafia</td>
				<td>ONLEC</td>
				<td class="download"><a href="../../public/musice/Тимати%20feat.%20Егор%20Крид%20-%20Где%20ты,%20где%20я%20(премьера%20клипа,%202016).mp3" download="file.mp3">download</a> </td>
			</tr>
			<tr>
				<td class="table_icons"><i class="glyphicon glyphicon-heart-empty"></i> <i class="glyphicon glyphicon-share"></i></td>
				<td>Work Hard Die Hard</td>
				<td>Waz Kalafia</td>
				<td>ONLEC</td>
				<td class="download"><a href="#">Download</a> </td>
			</tr>
			<tr>
				<td class="table_icons"><i class="glyphicon glyphicon-heart-empty"></i> <i class="glyphicon glyphicon-share"></i></td>
				<td>Work Hard Die Hard</td>
				<td>Waz Kalafia</td>
				<td>ONLEC</td>
				<td class="download"><a href="#">Download</a> </td>
			</tr>
			</tbody>
		</table>

	</div>
<!--	playlist end-->
		<div class="col-lg-10 col-xs-10 musics-table">
				<div class="col-lg-7 col-xs-7" style="padding: 0;">
			<nav class="navbar navbar-inverse nav-musics-table">
				<ul class="nav navbar-nav nav-musics-table-ul" style="font-family: 'Segoe UI'">
					<li><a class="music-nav-albums sort" data-sort="my-order:asc" href="#">Albums</a></li>
					<li><a class="sort-artist" href="#">Artist</a></li>
					<li><a class="sort sort-genre" data-sort="my-order:desc" href="#">Genre</a></li>
					<li><a class="sort-composers" href="#">Composers</a></li>
					<li><a href="#">Title</a></li>
					<li><a href="#">Timing</a></li>
					<li><a href="#">BPM</a></li>
					<li><a href="#">Mood</a></li>
					<li><a class="sort-year"  href="#">Year</a></li>
					<li><a href="#">Category</a></li>
				</ul>
			</nav>
				</div>


			<div class="col-lg-5 col-xs-5" style="padding: 0; padding-top: 30px">
				<div class="col-lg-12 col-xs-12">
					<div class="col-lg-3 col-xs-3 select-2-download-music-part" style="padding-right: 0;">
						<span class="select-2-download select-2-download-music">Select to download</span></div>
					<div class="col-lg-4 col-xs-4 dwn-selected" style="padding-left:5px; border-left:1px solid #e1e2e3;">
						<a class="sl-for-dwn " data-toggle="select-check">Download Selected</a></div>
					<div class="col-lg-5 col-xs-5">
						<div class="range-type">
							<span><img style="margin-bottom: 12px" src="../../public/icons/rectanglemin.png"> </span>
							<input type="range" max="2" min="0" value="1" class="range-txt music-range">
							<span><img style="margin-bottom: 12px" src="../../public/icons/rectanglemax.png"> </span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-12 col-xs-12 music-albums">
				<div class="page--index" data-page="index">
				<div class="hero">
					<div class="primary-content">
						<div class="big-demo" data-js-module="hero-demo">

<!--							<div class="ui-group">-->
<!--								<h3 class="ui-group__title">Filter</h3>-->
<!--								<div class="filters button-group js-radio-button-group">-->
<!--									<button class="button is-checked" data-filter="*">show all</button>-->
<!--									<button class="button" data-filter=".metal">metal</button>-->
<!--									<button class="button" data-filter=".transition">transition</button>-->
<!--									<button class="button" data-filter="ium">–ium</button>-->
<!--								</div>-->
<!--							</div>-->
							<div class="ui-group display-none">
<!--								<h3 class="ui-group__title">Sort</h3>-->
								<div class="sort-by button-group js-radio-button-group">
									<button class="button original-order" data-sort-by="original-order">original order</button>
									<button class="button srt-name" data-sort-by="name">name</button>
									<button class="button symbol" data-sort-by="symbol">symbol</button>
									<button class="button number is-checked" data-sort-by="number">number</button>
								</div>
							</div>

							<pre class="code-display display-none"><code>$grid.isotope({ sortBy: <span class="string">'number'</span> })</code></pre>

							<div class="grid" style="position: relative; ">
								<?php foreach ($musice as $k=>$musics): ?>
								<div data-track_pos="<?php echo $k ?>" data-art_name="<?php echo $musics->artname?>" data-track_id="<?php echo $musics->track_id?>" data-track_image="/public/img/<?php echo $musics->track_image?>" data-music_name="<?php echo $musics->trname?>"  class="jp-playlist play_my_music element-item transition metal col-lg-2 col-md-3 artist_id_<?php echo $musics->artist_id?>" data-category="transition" style="height: 210px !important;">
<!--									<h5 class="name">--><?php //echo $musics->name?><!--</h5>-->
<!--									<p class="symbol">Hg</p>-->
<!--									<p class="number">80</p>-->
<!--									<p class="weight">200.59</p>-->
									<input  type="checkbox" value="<?php echo $musics->trname?>" class="select-check display-none">
									<img class="weight grid-to-list" src="../../public/img/<?php echo $musics->track_image?>" width="159px" height="159px">
									<img class="onmoushover_in_album display-none" src="../../public/icons/opacplay.png">
									<h6 class="text-center _firsttwo name" style="width: 159px"><?php echo $musics->trname?></h6>
									<h6 class="text-center _firsttwo-bottom" style="width: 159px"><?php echo $musics->artname?></h6>
									<p class="number display-none"><?php echo $musics->rate ?></p>
									<p class="symbol display-none"><?php echo $musics->genre ?></p>
								</div>
								<?php endforeach;?>
							</div>

						</div>
					</div>
				</div>

<!--				<div id="Container">-->
<!--				--><?php //foreach ($musice as $musics): ?>
<!--				<div class="col-lg-2 resized-alb-part col-xs-2 mix category---><?php //echo $musics->track_id ?><!--"  data-my-order="--><?php //echo $musics->track_id ?><!--" >-->
<!--					<input type="checkbox" value="--><?php //echo $musics->name?><!--" class="select-check display-none">-->
<!--					<img src="../../public/img/--><?php //echo $musics->track_image?><!--" width="159px" height="159px">-->
<!--					<h6 class="text-center _firsttwo" style="width: 159px">--><?php //echo $musics->name?><!--</h6>-->
<!--					<h6 class="text-center _firsttwo-bottom" style="width: 159px">Eoster the People</h6>-->
<!--				</div>-->
<!--				--><?php //endforeach;
//				?>
<!--					</div>-->
				</div>

			</div>
		</div>
<!--	Musice Explorer head-->
	<div class="col-lg-7 col-xs-7 explorer-table display-none">
		<div class="col-lg-12 col-xs-12 mus-explorer">
			

		
		</div>
		<div class="col-lg-12 col-xs-12 mus-exp-nav">

		<nav class="navbar navbar-inverse">
			<div class="container-fluid ">
				<div class="col-lg-9 col-xs-9" style="padding-left: 0;">
				<ul class="nav navbar-nav mus-exp-nav-ul">
					<li ID="album_state" class="active"><a href="#">Album & States</a></li>
					<li><a href="#">More Albums</a></li>
					<li><a id="profile" style="padding-bottom: 13px" href="#">Profile</a></li>
					<li><a id="similar-artists"  style="padding-bottom: 13px" href="#">Similar Artists</a></li>
				</ul>
				</div>
				<div class="col-lg-3 col-xs-3 range-type range-type-mus-exp">
					<span><img style="margin-bottom: 12px" src="../../public/icons/rectanglemin.png"> </span>
					<input type="range" max="2" min="0" value="1" class="range-txt mus-exp-range">
					<span><img style="margin-bottom: 12px" src="../../public/icons/rectanglemax.png"> </span>
				</div>

			</div>
		</nav>
		</div>
		<div class="col-lg-12 col-xs-12 profile">
			
		</div>
		<div class="col-lg-12 col-xs-12 mus-table mus-table-profile">
			<div class="col-lg-12 col-xs-12 mus-table-profile-topline">
				<div class="col-lg-6 col-xs-6 pull-left " style="font-weight: 700">TOP TRACKS</div>
					<div class="download  col-lg-6 col-xs-6">
						<a class="pull-right" href="#">View-All ></a>
					</div>

			</div>
			<table class="table table-striped">
				<thead>
				<tr>
					<th></th>
					<th>Track</th>
					<th>Artist</th>
					<th>Albums</th>
					<th></th>
				</tr>
				</thead>
				<tbody class="hover-table">
				<tr>
					<td class="table_icons"><i class="glyphicon glyphicon-heart-empty"></i> <i class="glyphicon glyphicon-share"></i></td>
					<td>Work Hard Die Hard</td>
					<td>Waz Kalafia</td>
					<td>ONLEC</td>
					<td class="download">
						<a href="../../public/musice/Тимати%20feat.%20Егор%20Крид%20-%20Где%20ты,%20где%20я%20(премьера%20клипа,%202016).mp3" download="file.mp3">download</a>
					</td>
				</tr>
				<tr>
					<td class="table_icons"><i class="glyphicon glyphicon-heart-empty"></i> <i class="glyphicon glyphicon-share"></i></td>
					<td>Work Hard Die Hard</td>
					<td>Waz Kalafia</td>
					<td>ONLEC</td>
					<td class="download"><a href="#">Download</a> </td>
				</tr>
				<tr>
					<td class="table_icons"><i class="glyphicon glyphicon-heart-empty"></i> <i class="glyphicon glyphicon-share"></i></td>
					<td>Work Hard Die Hard</td>
					<td>Waz Kalafia</td>
					<td>ONLEC</td>
					<td class="download"><a href="#">Download</a> </td>
				</tr>
				</tbody>
			</table>

		</div>
		<div class="col-lg-12 col-xs-12 mus-exp-nav-h6 exp-part">


		</div>
		<div class="col-lg-12 col-xs-12 similer-part display-none" style="padding: 20px 0">

		</div>
	</div>
	<div class="col-lg-10 col-xs-10 playlist-now-table display-none">
		<div class="container">
			<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg op-mod display-none" data-toggle="modal" data-target="#myModal">Open Modal</button>

			<!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Modal Header</h4>
						</div>
						<div class="modal-body">
							<nav class="navbar navbar-inverse">
								<div class="container-fluid">
									<ul class="nav navbar-nav modal-ul-part">
										<li class="active" id="propert"><a href="#">Properties</a></li>
										<li><a id="tags-one-a" href="#">Tags</a></li>
										<li><a id="tags-two-a" href="#">Tags(2)</a></li>
										<li><a id="artwork" href="#">Artwork</a></li>
										<li><a id="lyrics" href="#">Lyrics</a></li>
										<li><a id="settings" href="#">Settings</a></li>
									</ul>
								</div>
							</nav>
<!--							*** modal options tabs-->
							<div class="col-lg-12 col-xs-12 modal-body-part tags-one-part">
								<div class="col-lg-3 col-xs-3">
<!--									<img class="drag-and-drop" src="https://d13yacurqjgara.cloudfront.net/users/122798/screenshots/1793672/drag-and-drop-2_1x.jpg" width="120px">-->

									<form action="index.php/welcome/draguploadimg" class="dropzone" method="post"></form>
									<div class="rating_star">
										<div class="">
											<form>
												<div class="rating-container rating-lg rating-animate">
													<div class="rating-container rating-lg rating-animate">
														<div class="rating-container rating-lg rating-animate">
															<div class="clear-rating clear-rating-active" title="Clear">
																<i class="glyphicon glyphicon-minus-sign"></i>
															</div>
															<div class="rating"><span class="empty-stars">
																	<span class="star"><i class="glyphicon glyphicon-star-empty"></i>
																	</span><span class="star"><i class="glyphicon glyphicon-star-empty"></i>
																	</span><span class="star"><i class="glyphicon glyphicon-star-empty"></i>
																	</span><span class="star"><i class="glyphicon glyphicon-star-empty"></i>
																	</span><span class="star"><i class="glyphicon glyphicon-star-empty"></i>
																	</span></span><span class="filled-stars" style="width: 80%;">
																	<span class="star"><i class="glyphicon glyphicon-star"></i>
																	</span><span class="star"><i class="glyphicon glyphicon-star"></i>
																	</span><span class="star"><i class="glyphicon glyphicon-star"></i>
																	</span><span class="star"><i class="glyphicon glyphicon-star"></i>
																	</span><span class="star"><i class="glyphicon glyphicon-star"></i>
																	</span></span></div>
															<div class="caption"><span class="label label-primary" style="display:none !important;">Four Stars</span></div>
															<input id="input-21b" value="4" type="number" class="rating hide" min="0" max="5" step="0.2" data-size="lg">
														</div>
													</div>
												</div>

											</form>
										</div>

									</div>
								</div>
								<div class="col-lg-9 col-xs-9">
									<div class="col-lg-2 col-xs-2">Track Title</div>
									<div class="col-lg-10 col-xs-10">

									<input type="text" class="form-control">
									</div>
									<div class="col-lg-2 col-xs-2">Artist</div>
									<div class="col-lg-10 col-xs-10">

										<input type="text" class="form-control img">
									</div>
									<div class="col-lg-2 col-xs-2">Album</div>
									<div class="col-lg-10 col-xs-10">

										<input type="text" class="form-control">
									</div>
									<div class="col-lg-2 col-xs-2">Album Artist</div>
									<div class="col-lg-10 col-xs-10">
										<input type="text" class="form-control">
									</div>
									<div class="col-lg-2 col-xs-2">Year</div>
									<div class="col-lg-10 col-xs-10">
										<input type="text" class="form-control input-year">
									</div>
									<div class="col-lg-2 col-xs-2">Composer</div>
									<div class="col-lg-10 col-xs-10">
										<input type="text" class="form-control img">
									</div>
									<div class="col-lg-2 col-xs-2">Conductor</div>
									<div class="col-lg-10 col-xs-10">
										<input type="text" class="form-control img">
									</div>
									<div class="col-lg-2 col-xs-2">Genre</div>
									<div class="col-lg-10 col-xs-10">
										<input type="text" class="form-control img">
									</div>
									<div class="col-lg-2 col-xs-2">Grouping</div>
									<div class="col-lg-10 col-xs-10">
										<input type="text" class="form-control">
									</div>
									<div class="col-lg-2 col-xs-2">Comments</div>
									<div class="col-lg-10 col-xs-10">
										<textarea class="textarea-comments"></textarea>
									</div>

								</div>
							</div>
							<div class="col-lg-12 col-xs-12 modal-body-part lyrics-part">
								<div class="col-lg-1 col-xs-1"><span>Lyrics</span></div>
								<div class="col-lg-6 col-xs-6">
									<input type="text" class="txt-lyrics form-control">
								</div>
								<div class="col-lg-4 col-xs-4 pull-rigt radio-btn-part">
								<form class="form-inline pull-right">
									<div class="radio">
										<label><input class="" type="radio" name="optradio">Unsynconised</label>
									</div>
									<div class="radio form-inline">
										<label><input type="radio" class="" name="optradio">Syncronysed</label>
									</div>

								</form>
								</div>
								<div class="col-lg-12 col-xs-12" style="padding: 0">
								<div class="col-lg-1 col-xs-1">Lyrics</div>
								<div class="col-lg-11 col-xs-11">
									<textarea class="txt-lyrics-textarea"></textarea>
								</div>
									<div class="col-lg-1 col-xs-1"></div>
									<div class="col-lg-11 col-xs-11">
										<label><input type="radio">Vark as having no lyrics</label>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xs-12 modal-body-part settings-part">
								<div class="col-lg-6 col-xs-6">
									<div class="col-lg-3 col-xs-3">Type</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control"> </div>
									<div class="col-lg-3 col-xs-3">Tag Version</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control"> </div>
									<div class="col-lg-3 col-xs-3">Size</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control"> </div>
									<div class="col-lg-3 col-xs-3">Duration</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control"> </div>
									<div class="col-lg-3 col-xs-3">Data Added</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control"> </div>
									<div class="col-lg-3 col-xs-3">Data Modifed</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control"> </div>
									<div class="col-lg-3 col-xs-3">Last Played</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control"> </div>
									<div class="col-lg-3 col-xs-3">Flay Count</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control"> </div>
									<div class="col-lg-3 col-xs-3">Skipped Counts</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control"> </div>

								</div>
								<div class="col-lg-6 col-xs-6">
									<div class="col-lg-3 col-xs-3">Encoded With</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control"> </div>
									<div class="col-lg-3 col-xs-3">Chanels</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control"> </div>
									<div class="col-lg-3 col-xs-3">Bitrate</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control"> </div>
									<div class="col-lg-3 col-xs-3">Sample Rate</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control"> </div>
									<div class="col-lg-3 col-xs-3">Volume Leveling</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control"> </div>

								</div>
							</div>
							<div class="col-lg-12 col-xs-12 modal-body-part tags-two-part">
								<div class="col-lg-6 col-xs-6">
									<div class="col-lg-3 col-xs-3">Quality</div>
									<div class="col-lg-9 col-xs-9">
										<div class="dropdown">
										<select class="drop-down-select">
											<option></option>
											<option>1</option>
											<option>1</option>
											<option>1</option>
										</select>
										</div> </div>
									<div class="col-lg-3 col-xs-3">Tempo</div>
									<div class="col-lg-9 col-xs-9">
										<div class="dropdown">
											<select class="drop-down-select">
												<option></option>
												<option>1</option>
												<option>1</option>
												<option>1</option>
											</select>
										</div> </div>
									<div class="col-lg-3 col-xs-3">Bpm</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control"> </div>
									<div class="col-lg-3 col-xs-3">Mod</div>
									<div class="col-lg-9 col-xs-9"><div class="dropdown">
											<select class="drop-down-select">
												<option></option>
												<option>1</option>
												<option>1</option>
												<option>1</option>
											</select class="drop-down-select">
										</div> </div>
									<div class="col-lg-3 col-xs-3">Occasion</div>
									<div class="col-lg-9 col-xs-9"><div class="dropdown">
											<select class="drop-down-select">
												<option></option>
												<option>1</option>
												<option>1</option>
												<option>1</option>
											</select>
										</div> </div>
									<div class="col-lg-3 col-xs-3">Keywords</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control txtbox-icon"> </div>
									<div class="col-lg-3 col-xs-3">Sort Artist</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control txtbox-icon"> </div>
									<div class="col-lg-3 col-xs-3">Sort Albums</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control txtbox-icon"> </div>
									<div class="col-lg-3 col-xs-3">Custom 1</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control txtbox-icon"> </div>
									<div class="col-lg-3 col-xs-3">Custom 2</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control txtbox-icon"> </div>

								</div>
								<div class="col-lg-6 col-xs-6" style="padding-left: 0">
									<div class="col-lg-3 col-xs-3">Track Title</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control txtbox-icon"> </div>
									<div class="col-lg-3 col-xs-3">Artist</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control txtbox-icon"> </div>
									<div class="col-lg-3 col-xs-3">Album</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control txtbox-icon"> </div>
									<div class="col-lg-3 col-xs-3">Album Artist</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control txtbox-icon"> </div>
									<div class="col-lg-3 col-xs-3">Years</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control txtbox-icon"> </div>
									<div class="col-lg-3 col-xs-3">Composer</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control txtbox-icon"> </div>
									<div class="col-lg-3 col-xs-3">Conductor</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control txtbox-icon"> </div>
									<div class="col-lg-3 col-xs-3">Genre</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control txtbox-icon"> </div>
									<div class="col-lg-3 col-xs-3">Grouping</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control txtbox-icon"> </div>
									<div class="col-lg-3 col-xs-3">Comments</div>
									<div class="col-lg-9 col-xs-9"><input type="text" class="form-control txtbox-icon"> </div>

								</div>
							</div>
							<div class="col-lg-12 col-xs-12 modal-body-part setting-two-part">
								<div id="preview"></div>
								<div class="col-lg-12 col-xs-12 progress-bars">
								<form>
									<input type="range" name="trail" min="-100" max="100" value="0" id="slider-range"><br>
								</form>
								</div>
								<div class="col-lg-12 col-xs-12 progress-num">
								<div class="col-lg-4 col-xs-4 pull-left">-100</div>
								<div class="col-lg-4 col-xs-4 text-center">none</div>
								<div class="col-lg-4 col-xs-4 pull-right"><span class="pull-right">100</span></div>
								</div>
								<div class="col-lg-12 col-xs-12 item-part-one">
									<div class="col-lg-7 col-xs-7">
									<div class="col-lg-5 col-xs-5"><span class="equalize">Equalizer Preset</span></div>
									<div class="col-lg-7 col-xs-7">
										<div class="dropdown">
											<select class="drop-down-select">
												<option></option>
												<option>1</option>
												<option>1</option>
												<option>1</option>
											</select>
										</div></div>

										<div class="col-lg-5 col-xs-5"><span class="equalize"><input type="checkbox">Equalizer From payback</span></div>
										<div class="col-lg-7 col-xs-7">
											<div class="dropdown">
												<select class="drop-down-select">
													<option></option>
													<option>1</option>
													<option>1</option>
													<option>1</option>
												</select>
											</div></div>
										<div class="col-lg-12 col-xs-12"><input type="checkbox"> <span class="equalize">Do Not Crossfade</span></div>
										<div class="col-lg-12 col-xs-12"><input type="checkbox"> <span class="equalize">Keep Track in Sequence when shufling</span></div>
									</div>
									<div class="col-lg-5 col-xs-5">
										<div class="col-lg-12 col-xs-12">
											<input type="checkbox"><span class="equalize">Remember Playback Position</span>
										</div>
										<div class="col-lg-12 col-xs-12">
											<input type="checkbox"><span class="equalize">Intunes Compilation</span>
										</div>
										<div class="col-lg-12 col-xs-12">
											<input type="checkbox"><span class="equalize">Start time</span>
											<button type="button" width="80px" class="start-time-btn pull-right">Skip Silence</button>
											<input type="text" width="115px" class="start-time-txt pull-right">
										</div>
										<div class="col-lg-12 col-xs-12">
											<input type="checkbox"><span class="equalize">End time</span>
											<button type="button" width="80px" class="start-time-btn pull-right">Skip Silence</button>
											<input type="text" width="115px" class="start-time-txt pull-right">
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xs-12 modal-body-part artwork-part">
								<div class="col-lg-3 col-xs-3">
									<form action="index.php/welcome/draguploadimg" class="dropzone" method="post">
										<div class="fallback">
											<input name="file" type="file" multiple="" />
										</div>
<!--										<input type="submit">-->
									</form>
									<div class="rating_star">
										<div class="">
											<form>
												<div class="rating-container rating-lg rating-animate">
													<div class="rating-container rating-lg rating-animate">
														<div class="rating-container rating-lg rating-animate">
															<div class="clear-rating clear-rating-active" title="Clear">
																<i class="glyphicon glyphicon-minus-sign"></i>
															</div>
															<div class="rating"><span class="empty-stars">
																	<span class="star"><i class="glyphicon glyphicon-star-empty"></i>
																	</span><span class="star"><i class="glyphicon glyphicon-star-empty"></i>
																	</span><span class="star"><i class="glyphicon glyphicon-star-empty"></i>
																	</span><span class="star"><i class="glyphicon glyphicon-star-empty"></i>
																	</span><span class="star"><i class="glyphicon glyphicon-star-empty"></i>
																	</span></span><span class="filled-stars" style="width: 80%;">
																	<span class="star"><i class="glyphicon glyphicon-star"></i>
																	</span><span class="star"><i class="glyphicon glyphicon-star"></i>
																	</span><span class="star"><i class="glyphicon glyphicon-star"></i>
																	</span><span class="star"><i class="glyphicon glyphicon-star"></i>
																	</span><span class="star"><i class="glyphicon glyphicon-star"></i>
																	</span></span></div><div class="caption"><span class="label label-primary">Four Stars</span>
															</div><div class="rating-container rating-lg rating-animate"><div class="clear-rating clear-rating-active" title="Clear"><i class="glyphicon glyphicon-minus-sign"></i></div><div class="rating"><span class="empty-stars"><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span></span><span class="filled-stars" style="width: 80%;"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i class="glyphicon glyphicon-star"></i></span></span></div><div class="caption"><span class="label label-primary">Four Stars</span></div><input id="input-21b" value="4" type="number" class="rating hide" min="0" max="5" step="0.2" data-size="lg"></div>
														</div>
													</div>
												</div>

											</form>
										</div>

									</div>
								</div>
								<div class="col-lg-7 col-xs-7">
									<div class="col-lg-2 col-xs-2"><span>Picture Type</span></div>
									<div class="col-lg-10 col-xs-10">
										<div class="dropdown">
											<select class="drop-down-select">
												<option></option>
												<option>1</option>
												<option>1</option>
												<option>1</option>
											</select>
										</div>
									</div>
									<div class="col-lg-2 col-xs-2"><span>Comments</span></div>
									<div class="col-lg-10 col-xs-8">
										<textarea placeholder="Write Comments"></textarea>
									</div>
								</div>
								<div class="col-lg-2 col-xs-2">
									<button type="button" class="btn-upload">UPLOAD</button>


								</div>
							</div>
<!--						***	modal options end-->
						</div>
						<div class="modal-footer">
							<div class="buttons-part-modal col-lg-12 col-xs-12">
								<div class="col-lg-6 col-xs-6 pull-left">
									<button type="button" class="btn btn-default pull-left btn-next-back btn-prev"><span class="glyphicon glyphicon-triangle-left"></span></button>
									<button type="button" class="btn btn-default pull-left btn-next-back btn-next"><span class="glyphicon glyphicon-triangle-right"></span></button>
								</div>
								<div class="col-lg-6 col-xs-6 pull-right">
									<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-default pull-right ">Save</button>
								</div>

							</div>
						</div>
					</div>

				</div>
			</div>

		</div>

	</div>
<!--	musice explorer end-->
	<div class="col-lg-2 col-xs-2 mus-tbl-right display-none">
		<div id="sidebar-wrapper">
			<nav id="spy">
				<ul oncontextmenu="return false;"  class="sidebar-nav nav" style="margin-top: 8px">
					<li class="sidebar-brand sidebar-brand-search text-center disp-none-imp" style="padding: 5px 0;">
						<input type="search" class="albums-search" placeholder="Search in Album">
					</li>
<!--					<li class="sidebar-brand ">-->
<!--						<a href="#home" class="right-part-a"><span class="glyphicon glyphicon-volume-up" style="text-overflow: ellipsis;">Kleptaman</span><span>Rihanna</span></a>-->
<!--					</li>-->
					<div id="jp_container_1" class="jp-audio my-list-right" role="application" aria-label="media player" style="">
						<div class="jp-type-playlist">
							<div class="jp-playlist">
								<ul style="display: block;" class="jp-playlist-ul lol ">
<!--									--><?php //foreach ($trackIsPlayin as $playing):?>
<!--									<li class="">-->
<!--										<div>-->
<!--											<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>-->
<!--											<a href="javascript:;" class="jp-playlist-item">--><?php //echo $playing->name ?><!--</a>-->
<!--										</div>-->
<!--									</li>-->
<!--									--><?php //endforeach; ?>
<!--									<li class="jp-playlist-current"><div>-->
<!--											<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>-->
<!--											<a href="javascript:;" class="jp-playlist-item jp-playlist-current" tabindex="0">Your Face</a>-->
<!--										</div>-->
<!--									</li>-->
<!--									<li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>-->
<!--											<a href="javascript:;" class="jp-playlist-item" tabindex="0">Cyber Sonnet</a></div>-->
<!--									</li>-->
<!--									<li>-->
<!--										<div>-->
<!--											<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">Tempered Song</a>-->
<!--										</div>-->
<!--									</li>-->
<!--									<li>-->
<!--										<div>-->
<!--											<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>-->
<!--											<a href="javascript:;" class="jp-playlist-item" tabindex="0">Hidden</a>-->
<!--										</div>-->
<!--									</li>-->
<!--									<li>-->
<!--										<div>-->
<!--											<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><span class="jp-free-media">(<a class="jp-playlist-item-free" href="http://www.jplayer.org/audio/mp3/Miaow-03-Lentement.mp3" tabindex="-1">mp3</a> | <a class="jp-playlist-item-free" href="http://www.jplayer.org/audio/ogg/Miaow-03-Lentement.ogg" tabindex="-1">oga</a>)</span><a href="javascript:;" class="jp-playlist-item" tabindex="0">Lentement</a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">Lismore</a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">The Separation</a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">Beside Me</a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><span class="jp-free-media">(<a class="jp-playlist-item-free" href="http://www.jplayer.org/audio/mp3/Miaow-07-Bubble.mp3" tabindex="-1">mp3</a> | <a class="jp-playlist-item-free" href="http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg" tabindex="-1">oga</a>)</span><a href="javascript:;" class="jp-playlist-item" tabindex="0">Bubble</a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">Stirring of a Fool</a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><span class="jp-free-media">(<a class="jp-playlist-item-free" href="http://www.jplayer.org/audio/mp3/Miaow-09-Partir.mp3" tabindex="-1">mp3</a> | <a class="jp-playlist-item-free" href="http://www.jplayer.org/audio/ogg/Miaow-09-Partir.ogg" tabindex="-1">oga</a>)</span><a href="javascript:;" class="jp-playlist-item" tabindex="0">Partir</a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">Thin Ice</a></div>
										</li>-->
								</ul>
							</div>
							<div class="jp-no-solution" style="display: none;">
								<span>Update Required</span>
								To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
							</div>
						</div>
					</div>
					<li class="tr-info">
						<button class="accordion">Track information</button>
						<div class="panel mus_info_part">

							<h6 style="font-weight: bold;" class="mus-exp-nowplaying-name"></h6>
<!--							<p>Rihanna</p>-->
							<p class="mus-exp-timer"></p>
							<p>mp3 441/lhz</p>
						</div>
					</li>
					<li class="tr-info">
						<button class="accordion">Lurics</button>
						<div class="panel mus_info_part">

						</div>
					</li>
					<li class="tr-info">
						<img class="album_img" src="http://saintheron.com/wp-content/uploads/2015/11/Rihanna-2015.jpg" width="100%">
					</li>
				</ul>
			</nav>
		</div>
	</div>
	</div>
<div class="player-part col-lg-12 col-xs-12">
	<div id="jquery_jplayer"></div>

	<!-- Using the cssSelectorAncestor option with the default cssSelector class names to enable control association of standard functions using built in features -->

	<div id="jp_container" class="demo-container col-lg-12">
		<div class="col-lg-3 col-xs-4 player-left-prat" style="padding-left: 0;margin-right:20px">
			<div class="col-lg-3 col-xs-3 player_img">
				<img class="player-artist-img" src="../../public/img/no_albumart.png">
			</div>
			<div class="col-lg-9 col-xs-8 musice-name">
				<span class="track-name">nothing</span><span style="position: absolute" class="_icon"></span><span class="art_name"></span>
			</div>
<!--			<div class="col-lg-4 col-xs-4"></div>-->
			<div class="col-lg-9 resp-part">
			<div class="col-lg-7 col-xs-8 btn-play-next" style="padding: 0;">
				<button class="btn-prev_next prev-music btn-mus">
				<i><img src="../../public/icons/prev.png"></i>
					</button>
				<a class="btn-play_play playing btn-mus">
					<i class="">
						<img src="../../public/icons/playcopy.png">
					</i>
				</a>
				<a class="btn-play_play jp-pause pausing btn-mus" style="display: none">
					<i class="">
						<img src="../../public/icons/pause.png">
					</i>
				</a>
				<span class="jp-next btn-prev_next next-music btn-mus" style="background:none">
			<i class=""><img src="/public/icons/next.png"></i>
					</span>
			</div>
				<div class="col-lg-5 resp-part-2" style="right: 15px">
					<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player" >
						<div class="jp-type-playlist">
							<div class="jp-gui jp-interface" >
								<div class="jp-volume-controls q">
									<button class="jp-mute" role="button" tabindex="0"><i class=""><img src="../../public/icons/volmin.png"> </i></button>
									<button class="jp-volume-max" role="button" style="display:block !important;" tabindex="0"><span class="img-max-vol"><img src="../../public/icons/volmedium.png"></span></button>
									<div class="jp-volume-bar jp-volume-bar-width">
										<div class="jp-volume-bar-value"></div>
									</div>
					<span class=" volume-pointer" style="left:52px;">
						<img src="../../public/icons/ellipse.png" id="jp-volume-bar" style="position: absolute">
					</span>
								</div>
								</div>
							</div>
				</div>
			</div>
	<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player" >
	<div class="jp-type-playlist">
		<div class="jp-gui jp-interface" >
<!--			<div class="jp-volume-controls q">-->
<!--				<button class="jp-mute" role="button" tabindex="0"><i class=""><img src="../../public/icons/volmin.png"> </i></button>-->
<!--				<button class="jp-volume-max" role="button" style="display:block !important;" tabindex="0"><span class="img-max-vol"><img src="../../public/icons/volmedium.png"></span></button>-->
<!--				<div class="jp-volume-bar jp-volume-bar-width">-->
<!--					<div class="jp-volume-bar-value"></div>-->
<!--				</div>-->
<!--					<span class=" volume-pointer" style="left:52px;">-->
<!--						<img src="../../public/icons/ellipse.png" id="jp-volume-bar" style="position: absolute">-->
<!--					</span>-->
			</div>
						</div>
					</div>
				</div>

			<div class="jp-progress">
				<div class="jp-seek-bar" style="width: 100%;">
					<div class="jp-play-bar" style="width: 0%;">

					</div>
				</div>
			</div>

			</div>
		<div class="col-lg-7 col-xs-5 mus-progressing-part" style="border-right:1px solid white; bottom:8px">
			<div class="col-lg-3 col-xs-4 rating_star">
			<div class="">
				<form>
					<div class="rating-container rating-lg rating-animate">
						<div class="rating-container rating-lg rating-animate">
							<input id="input-21b" value="4" type="number" class="rating hide" min="0" max="5" step="0.2" data-size="lg">
						</div>
					</div>

				</form>
			</div>

			</div>
			<div class="col-lg-7 col-xs-6 track-name-part"><div class="track-name">nothing</div></div>
			<div class="col-lg-2 col-xs-2 mus-time-part">
				<div id="jp_container_1" class="jp-audio " role="application" aria-label="media player" style="width: 100%">
					<div class="jp-type-single">
						<div class="pull-right">
						<span class="mus-time">
							<div class="jp-current-time " role="timer" aria-label="time">&nbsp;</div>/
							<div class="jp-duration " role="timer" aria-label="duration">&nbsp;</div>
					</span>
<!--							<span class="glyphicon glyphicon-adjust player-point-end"></span>-->

							<!--						<div class="jp-time-holder">-->

							<!--							<div class="jp-toggles">-->
							<!--							<button class="jp-repeat" role="button" tabindex="0">repeat</button>-->
							<!--						</div>-->
							<!--						</div>-->
						</div>

						<div class="jp-no-solution">
							<span>Update Required</span>
							To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-xs-12 progressing">
			<div id="jp_container_1" class="jp-audio " role="application" aria-label="media player">
				<div class="jp-type-single">
					<div class="jp-gui jp-interface">

<!--						<span class="glyphicon glyphicon-circle-arrow-down player_point"></span>-->
						<div class="jp-progress">
							<div class="jp-seek-bar jp-progress-bar-width">
								<div class="jp-play-bar music-progress-bar"></div>
							</div>
						</div>
<!--						<span class="mus-time">-->
<!--							<div class="jp-current-time " role="timer" aria-label="time">&nbsp;</div>/-->
<!--							<div class="jp-duration " role="timer" aria-label="duration">&nbsp;</div>-->
<!--					</span>-->
						<span class="glyphicon glyphicon-adjust player-point-end" id="jp-progress-bar"></span>

<!--						<div class="jp-time-holder">-->

<!--							<div class="jp-toggles">-->
<!--							<button class="jp-repeat" role="button" tabindex="0">repeat</button>-->
<!--						</div>-->
<!--						</div>-->
					</div>

					<div class="jp-no-solution">
						<span>Update Required</span>
						To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
					</div>
				</div>
			</div>
			</div>
	</div>
		<div class="col-lg-2 col-xs-3 player-right-part" style="padding: 0;" >
			<div class="jp-toggles" style="margin-left: -10px;">
				<table>
					<tr>
						<td>
				<button class="jp-shuffles" role="button" tabindex="0" style="background: none">
					<span class="btn-player-random">
						<img src="../../public/icons/shuffle.png"></span></button>
						</td>
						<td>
				<button class="jp-repeat m-repeat" role="button" tabindex="0"><span class="btn-player-repeat"><img src="../../public/icons/repeat.png"></span></button>
						</td>
						<td>
				<button class="player-right-part-btn"  style="font-size: 10px; font-family: 'Myriad Pro Regular'">INFO</button>
						</td>
						<td>
				<button class="player-right-part-btn btn-share" style="font-family: 'Myriad Pro Regular'">SHARE</button>
						</td>
					</tr>
				</table>
			</div>
		</div>

	</div>

</div>
<div class="llol"></div>
<!--<div class='hidden trackIsPlayin' data-trackIsPlayin="--><?php //echo $trackIsPlayin; ?><!--"></div>-->
</body>
</html>

<body>
<div id="jquery_jplayer_1" class="jp-jplayer" style="width: 0px; height: 0px;">
	<img id="jp_poster_0" style="width: 0px; height: 0px; display: none;">
	<audio id="jp_audio_0" preload="metadata" src="http://www.jplayer.org/audio/ogg/TSP-05-Your_face.ogg" title="Your Face">
	</audio>
</div>
<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player" style="display: none">
	<div class="jp-type-playlist">
		<div class="jp-gui jp-interface" ">
			<div class="jp-controls">
				<button class="jp-previous prev-msc" role="button" tabindex="0">previous</button>
				<button class="jp-play" role="button" tabindex="0">play</button>
				<button class="jp-next next-msc" role="button" tabindex="0">next</button>
				<button class="jp-stop" role="button" tabindex="0">stop</button>
			</div>
			<div class="jp-progress">
				<div class="jp-seek-bar" style="width: 100%;">
					<div class="jp-play-bar" style="width: 0.432832%;"></div>
				</div>
			</div>
			<div class="jp-volume-controls">
				<button class="jp-mute" role="button" tabindex="0">mute</button>
				<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
				<div class="jp-volume-bar">
					<div class="jp-volume-bar-value" style="width: 80%;"></div>
				</div>
			</div>
			<div class="jp-time-holder">
				<div class="jp-current-time" role="timer" aria-label="time">00:00</div>
				<div class="jp-duration" role="timer" aria-label="duration">02:56</div>
			</div>
			<div class="jp-toggles">
				<button class="jp-repeat mus-repeat" role="button" tabindex="0">repeat</button>
				<button class="jp-shuffle" role="button" tabindex="0">shuffle</button>
			</div>
		</div>
		<div class="jp-playlist">
			<ul style="display: block;">
				<li class="">
					<div>
						<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>
						<a href="javascript:;" class="jp-playlist-item" tabindex="0">Cro Magnon Man</a>
					</div>
				</li>
				<li class="jp-playlist-current"><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>
						<a href="javascript:;" class="jp-playlist-item jp-playlist-current" tabindex="0">empty</a>
					</div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>
						<a href="javascript:;" class="jp-playlist-item" tabindex="0">Cyber Sonnet</a></div>
				</li>
				<li>
					<div>
						<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">Tempered Song</a>
					</div>
				</li>
				<li>
					<div>
						<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>
						<a href="javascript:;" class="jp-playlist-item" tabindex="0">Hidden</a>
					</div>
				</li>
				<li>
					<div>
						<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>
						<span class="jp-free-media">(<a class="jp-playlist-item-free" href="http://www.jplayer.org/audio/mp3/Miaow-03-Lentement.mp3" tabindex="-1">mp3</a> | <a class="jp-playlist-item-free" href="http://www.jplayer.org/audio/ogg/Miaow-03-Lentement.ogg" tabindex="-1">oga</a>)</span>
						<a href="javascript:;" class="jp-playlist-item" tabindex="0">Lentement</a>
					</div>
				</li>
				<li>
					<div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>
						<a href="javascript:;" class="jp-playlist-item" tabindex="0">Lismore</a>
					</div>
				</li>
				<li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">The Separation</a>
					</div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>
						<a href="javascript:;" class="jp-playlist-item" tabindex="0">Beside Me</a>
					</div>
				</li>
				<li>
					<div>
						<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>
						<span class="jp-free-media">(<a class="jp-playlist-item-free" href="http://www.jplayer.org/audio/mp3/Miaow-07-Bubble.mp3" tabindex="-1">mp3</a> | <a class="jp-playlist-item-free" href="http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg" tabindex="-1">oga</a>)</span>
						<a href="javascript:;" class="jp-playlist-item" tabindex="0">Bubble</a>
					</div>
				</li>
				<li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">Stirring of a Fool</a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><span class="jp-free-media">(<a class="jp-playlist-item-free" href="http://www.jplayer.org/audio/mp3/Miaow-09-Partir.mp3" tabindex="-1">mp3</a> | <a class="jp-playlist-item-free" href="http://www.jplayer.org/audio/ogg/Miaow-09-Partir.ogg" tabindex="-1">oga</a>)</span><a href="javascript:;" class="jp-playlist-item" tabindex="0">Partir</a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">Thin Ice</a></div></li></ul>
		</div>
		<div class="jp-no-solution" style="display: none;">
			<span>Update Required</span>
			To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
		</div>
	</div>
</div>
</body>
<script>
	$('.music-nav-albums').on('click',function () {

		$('.original-order').trigger('click');
	});
	$('.sort-year').on('click',function () {

		$('.original-order').trigger('click');
	});
	$('.sort-artist').on('click',function () {
		$('.srt-name').trigger('click');
	});
	$('.sort-genre').on('click',function () {
		$('.button.symbol').trigger('click');
	});
	$('.sort-composers').on('click',function () {

		$('.button.number').trigger('click');
	});

	$('.jp-playlist-ul').on('contextmenu',function() {

		if($('#playing-now-tab').hasClass('actived-body-nav')){
		$('.btn-lg').trigger('click');
		}
	});



	
</script>