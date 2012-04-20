<?php

//general
$LNG['index']				= 'Home';
$LNG['register']			= 'Register';
$LNG['forum']				= 'Forum';
$LNG['send']				= 'Send';
$LNG['menu_index']			= 'Home';
$LNG['menu_news']			= 'News';
$LNG['menu_rules']			= 'Rules';
$LNG['menu_pranger']		= 'Pillory';
$LNG['menu_top100']			= 'Hall of Fame';
$LNG['menu_disclamer']		= 'Legal';
$LNG['uni_closed']			= ' (closed)';

//index.php
//case lostpassword

$LNG['lost_empty']			= 'You must fill in all the fields';
$LNG['lost_not_exists']		= 'Could not find a user registered with this email address';
$LNG['lost_mail_title']		= 'New Password';
$LNG['mail_sended']			= 'Your password has successfuly been set to %s';

//case default

$LNG['server_infos']			= array(
	"A space strategy game in real time.",
	"Play along with hundreds of users.",
	"No downloading, only a standard web browser is required.",
	"Free registration",
);

$LNG['login_error_1']		= 'Invalid Username/Password!';
$LNG['login_error_2']		= 'Someone has logged into your account from another PC';
$LNG['login_error_3']		= 'Your session has expired';
$LNG['login_error_4']		= 'Ther was an error in the external authorization. Please try again later.';
$LNG['screenshots']			= 'Screenshots';
$LNG['universe']			= 'Universe';
$LNG['chose_a_uni']			= 'Choose a Universe';

/* ------------------------------------------------------------------------------------------ */

//lostpassword.tpl
$LNG['lost_pass_title']			= 'Password Recovery';

//index_body.tpl
$LNG['user']					= 'Username';
$LNG['pass']					= 'Password';
$LNG['remember_pass']			= 'Remember password?';
$LNG['lostpassword']			= 'Forgot password?';
$LNG['welcome_to']				= 'Welcome to';
$LNG['server_description']		= '<strong>%s</strong> is a <strong> space strategy game</strong> with hundreds of players simultaneously <strong>trying to be the best</strong>. All you need to play is a standard web browser (Firefox is recommended).';
$LNG['server_register']			= 'Register';
$LNG['server_message']			= 'Sign up now and begin exploring a new and exciting world! ';
$LNG['login']					= 'Login';
$LNG['disclamer']				= 'Legal';
$LNG['login_info']				= 'By logging in, I accept the <a href="index.php?page=rules">Rules</a>';

/* ------------------------------------------------------------------------------------------ */

//reg.php - Registrierung
$LNG['register_closed']				= 'Registration closed!';
$LNG['register_at']					= 'Register at ';
$LNG['reg_mail_message_pass']		= 'One more step to activate your account';
$LNG['reg_mail_reg_done']			= 'Welcome to %s!';
$LNG['invalid_mail_adress']			= 'Invalid email address';
$LNG['empty_user_field']			= 'You must enter a username';
$LNG['password_lenght_error']		= 'The password must be at least 6 characters long';
$LNG['user_field_specialchar']		= 'The username may only include numbers, letters, spaces, underscores, dashes, and .';
$LNG['planet_field_no']				= 'You must enter a name for your main planet';
$LNG['planet_field_specialchar']	= 'The planet name may only include numbers, letters, spaces, underscores, dashes, and .';
$LNG['terms_and_conditions']		= 'You must accept the rules';
$LNG['user_already_exists']			= 'The username is already taken';
$LNG['mail_already_exists']			= 'The email address is already in use';
$LNG['wrong_captcha']				= 'Incorrect CAPTCHA answer. Please try again.';
$LNG['different_passwords']			= 'You have entered two different passwords';
$LNG['different_mails']				= 'You have entered two different email addresses';
$LNG['welcome_message_from']		= 'Administrator';
$LNG['welcome_message_sender']		= 'Administrator';
$LNG['welcome_message_subject']		= 'Welcome';
$LNG['welcome_message_content']		= 'Welcome to %s! First build a solar power plant, because energy is required for subsequent production of raw materials. To build it, click on the "Building" option on the left, then build the solar power plant. Since you now have power, you can begin to build mines. Go back to the Building menu and construct a metal mine and then a crystal mine. To build ships, you need to have first built a shipyard. What you need to have to build a ship yard, you can find for yourself in the Technology menu. We hope you enjoy exploring the universe!';
$LNG['reg_completed']				= 'Thank you for registering. You will receive an email with an activation link soon.';
$LNG['planet_already_exists']		= 'The planet already exists';

//registry_form.tpl
$LNG['server_message_reg']			= 'Sign up now and begin playing';
$LNG['register_at_reg']				= 'Register at';
$LNG['uni_reg']						= 'Universe';
$LNG['user_reg']					= 'Username';
$LNG['pass_reg']					= 'Password';
$LNG['pass2_reg']					= 'Password confirmation';
$LNG['email_reg']					= 'Email Address';
$LNG['email2_reg']					= 'Email Address Confirmation';
$LNG['planet_reg']					= 'Name of main planet';
$LNG['ref_reg']						= 'Referred by';
$LNG['lang_reg']					= 'Language';
$LNG['register_now']				= 'Register';
$LNG['captcha_reg']					= 'CAPTCPA verification';
$LNG['accept_terms_and_conditions']	= 'I accept the <a href="index.php?page=rules">Rules</a>.';
$LNG['captcha_help']				= 'Help';
$LNG['captcha_get_image']			= 'Loading CAPTCHA';
$LNG['captcha_reload']				= 'New CAPTCHA';
$LNG['captcha_get_audio']			= 'Get sound CAPTCHA';
$LNG['user_active']					= 'User %s has been activated';

//Rules
$LNG['rules_overview']				= "Rules";
$LNG['rules_info1']					= "You are informed about this at the <a href=\"%s\" target=\"_blank\">Forum</a> and on the home page of the game ...";


//NEWS

$LNG['news_overview']				= "News";
$LNG['news_from']					= "On %s by %s";
$LNG['news_does_not_exist']			= "No news available";

//Imprint

$LNG['disclamer']					= "Disclaimer";
$LNG['disclamer_name']				= "Name:";
$LNG['disclamer_adress']			= "Address:";
$LNG['disclamer_tel']				= "Telephone number:";
$LNG['disclamer_email']				= "Email address:";
?>
