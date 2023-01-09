<template>
    <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#">{{pageName}}</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Address Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>Components</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Calendar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-copy"></i>Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="py-4">
        <router-view></router-view>
    </div>
</template>
<script>
export default {
    data() {
        return {
            pageName : ''
        }
    },
    mounted() {
        function test(){
	var tabsNewAnim = $('#navbarSupportedContent');
	var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
	var activeItemNewAnim = tabsNewAnim.find('.active');
	var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
	var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
	var itemPosNewAnimTop = activeItemNewAnim.position();
	var itemPosNewAnimLeft = activeItemNewAnim.position();
	$(".hori-selector").css({
		"top":itemPosNewAnimTop.top + "px",
		"left":itemPosNewAnimLeft.left + "px",
		"height": activeWidthNewAnimHeight + "px",
		"width": activeWidthNewAnimWidth + "px"
	});
	$("#navbarSupportedContent").on("click","li",function(e){
		$('#navbarSupportedContent ul li').removeClass("active");
		$(this).addClass('active');
		var activeWidthNewAnimHeight = $(this).innerHeight();
		var activeWidthNewAnimWidth = $(this).innerWidth();
		var itemPosNewAnimTop = $(this).position();
		var itemPosNewAnimLeft = $(this).position();
		$(".hori-selector").css({
			"top":itemPosNewAnimTop.top + "px",
			"left":itemPosNewAnimLeft.left + "px",
			"height": activeWidthNewAnimHeight + "px",
			"width": activeWidthNewAnimWidth + "px"
		});
	});
}
$(document).ready(function(){
	setTimeout(function(){ test(); });
});
$(window).on('resize', function(){
	setTimeout(function(){ test(); }, 500);
});
$(".navbar-toggler").click(function(){
	$(".navbar-collapse").slideToggle(300);
	setTimeout(function(){ test(); });
});



// --------------add active class-on another-page move----------
jQuery(document).ready(function($){
	// Get current path and find target link
	var path = window.location.pathname.split("/").pop();

	// Account for home page with empty path
	if ( path == '' ) {
		path = 'index.html';
	}

	var target = $('#navbarSupportedContent ul li a[href="'+path+'"]');
	// Add active class to target link
	target.parent().addClass('active');
});


    },
}
</script>

<style lang="scss" scoped>
@import url('https://fonts.googleapis.com/css?family=PT+Sans');

*, *::before, *::after {
	box-sizing: border-box;
}

:root {
	--brandColor:#008b8b;
	--brandColorDark:#057272;
}

[v-cloak] {
	opacity: 0;
}

body {
	padding: 0;
	margin: 0;
	font-family: 'PT Sans', sans-serif;
	background:#e0e0e0;
}

#app {
	border-top:.5em solid var(--brandColor);
	max-width:800px;
	margin: 0 auto;
	position:absolute;
	top:50%;
	left:50%;
	width:96%;
	transform:translate(-50%, -50%);
	padding: 2em 3em 1em;
	background:white;
	overflow: hidden;
	box-shadow: 0 10px 6px -6px rgba(0,0,0,.2);
	animation: enterFromBottom .7s .3s ease-out both;

	@media screen and (max-width:500px){
		padding: 2em 1em 1em;
	}
}

.actions {

	button {
		all:unset;
		display: inline-block;
		padding:1em;
		letter-spacing: .05em;
		font-size: 14px;
		cursor: pointer;
		border:1px solid;
		color:white;
		border:none;
		background:var(--brandColor);
		transition:250ms;
		margin: 0 .2em 0 0;
		opacity: .4;

		&.active {
			opacity: 1;
			background:var(--brandColorDark);
		}

	}
}

.form {
	&-enter {
		transform:translateY(-1em);
		opacity:0;
	}
	&-leave-to {
		transform:scale(0.95);
		opacity: 0;
	}
	&-enter-active {
		transition:.3s ease-out;
	}
	&-leave-active {
		transition:.3s ease;
	}
}

form h2, header h2 {
	text-align: center;
	color:var(--brandColor);
}

.register-form, .signin-form {
	margin: 2em 0;
	padding:1em;
}

.form-group {
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: space-between;
	align-items: center;
	padding:8px;

	label {
		flex:1;
		text-align: right;
		margin-right: 2em;
	}

	input {
		font-size: inherit;
		border:none;
		background:whitesmoke;
		font-family:inherit;
		padding:.4em;
		flex:1.5;
	}

	input.invalid {
		border:1px solid tomato;
	}
}

.feedback {
	padding: 1em;

	p {
		line-height: 1.4;
		max-width:50ch;
		margin: 10px auto;
		text-align:center;
	}
}

form {

	input[type=submit] {
		display: block;
		margin: 2em 0 2em auto;
		padding: .6em 1em;
		font-size: inherit;
		cursor: pointer;
		background:var(--brandColor);
		color:white;
		border:none;
	}

	input[type=submit]:disabled {
		opacity: .4;
		cursor: not-allowed;
	}

	input[type=submit]:hover {
		background: var(--brandColorDark);
	}

}

@keyframes enterFromBottom {
	0%  {
		opacity:0;
		transform:translate(-50%, -45%);
	}
	100% {
		opacity:1;
		transform:translate(-50%, -50%);
	}
}
</style>
