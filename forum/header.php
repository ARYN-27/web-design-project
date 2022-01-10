﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="A short description." />
	<meta name="keywords" content="put, keywords, here" />
	<title>Forum</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>

	<div class="page-border">

		<div class="intro-box">
			<h1 class="intro-text">my forum</h1>
		</div>
		<div id="wrapper">
			<div id="menu">
				<a class="item" href="index.php">Home</a> -


				<?php
				if (isset($_SESSION['signed_in']) and $_SESSION['signed_in'] == True) {
					echo '<a class="item" href="create_topic.php">Create a topic</a> -';
					echo '<a class="item" href="create_cat.php">Create a category</a> -';
					echo 'Hello <b>' . $_SESSION['user_name'] . '</b>. Not you? - <a class="item" href="signout.php">Sign out</a>';
				} else {
					echo '<a class="item" href="signin.php">Sign in</a> or <a class="item" href="signup.php">create an account</a>';
				}
				?>
			</div>
			<div id="content">