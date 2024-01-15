<?php
echo "<div>";
echo "<form id='SignUpForm' class='input-box-position-container'>";
echo "<input class='input-box' type='text' name='username' placeholder='Enter your username'>";
echo "<input class='input-box' type='text' name='password' placeholder='Enter your password'>";
echo "<input class='input-box' type='text' name='email' placeholder='Enter your email'>";
echo "</form>";
echo "<button data-hover='Click me!' class='SignUpButton' type='button' onclick='submitForm()'>Sign Up</button>";
echo "</div>";
echo "<script src='../../scripts/submitForm.js'></script>";
