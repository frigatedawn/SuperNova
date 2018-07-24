<?php

/*
#############################################################################
#  Filename: login.mo
#  Project: SuperNova.WS
#  Website: http://www.supernova.ws
#  Description: Massive Multiplayer Online Browser Space Startegy Game
#
#  Copyright © 2011 madmax1991 for Project "SuperNova.WS"
#  Copyright © 2009 Gorlum for Project "SuperNova.WS"
#  Copyright © 2008 Aleksandar Spasojevic <spalekg@gmail.com>
#  Copyright © 2005 - 2008 KGsystem
#############################################################################
*/

/**
*
* @package language
* @system [English]
* @version 40a17.0
*
*/

/**
* DO NOT CHANGE
*/

if (!defined('INSIDE')) die();

global $config;

$a_lang_array = (array(
  'Login' => '登录',
  'User_name' => '用户名：',
  'Authorization' => '权限',
  'Please_Login' => '欢迎来到游戏，<a href="login.php" target="_main">请登录</a>',
  'Please_Wait' => '请稍等',
  'Remember_me' => '记住密码',
  'Register' => '错误信息',
  'Login_Error' => '登录错误',
  'PleaseWait' => '请稍等',
  'PasswordLost' => '忘记密码',
  'Login_Ok' => '登录成功，<a href="./"><blink>redirection...</blink></a><br><center><img src="design/images/progressbar.gif"></center>',
  'Login_FailPassword' => '登录信息错误，<br /><a href="login.php" target="_top">返回</a>',
  'Login_FailUser' => '玩家不存在，<br><a href=login.php>返回</a>',
  'log_univ' => 'Universe log!',
  'log_reg' => '注册',
  'log_reg_main' => '规则',
  'log_menu' => '菜单',
  'log_stat_menu' => '排名',
  'log_enter' => '点击登录',
  'log_news' => 'Server announces',
  'log_cred' => '服务器信息',
  'log_faq' => '注意事项',
  'log_forums' => '论坛',
  'log_contacts' => '查看管理员',
  'log_desc' => '<strong>Supernova是一个用于浏览器的宇宙对战游戏。</strong>成千上万的人在这里战斗，而你只需要一个浏览器即可。',
  'log_toreg' => '立即登录！',
  'log_online' => '在线玩家',
  'log_lastreg' => '最新玩家',
  'log_numbreg' => '玩家数',
  'log_welcome' => '欢迎来到',
  'vacation_mode' => '你在休假，<br>当然也可以收假 ',
  'hours' => ' 小时',
  'vacations' => '休假',
  'log_scr1' => 'Screenshot of shipyard, where ships are built and ordered on the current planet. Click image to enlarge.',
  'log_scr2' => 'Screenshot of Statistics, there are shows your ranking among other players on various parameters. Click image to enlarge.',
  'log_scr3' => 'Screenshot of the universe, here you can see your planet in the universe, and find the planets of other players. Click image to enlarge.',
  'log_rules' => 'Rules of the game',
  'log_banned' => 'List of currently banned',
  'log_see_you' => 'Hope to see you again at the expanse of our universe. Good luck!<br><a href="login.php">Go to the login page in the game</a>',
  'log_session_closed' => 'Session closed.',
  'registry' => 'Registration',
  'form' => 'Registration form',
  'Undefined' => '- undetermined -',
  'Male' => '汉子',
  'Female' => '妹子',
  'Multiverse' => 'XNova',
  'E-Mail' => 'E-Mail地址',
  'MainPlanet' => '母星名字',
  'GameName' => '游戏名字',
  'gender' => 'Gender',
  'accept' => 'Accept',
  'reg_i_agree' => 'I have read and agree with',
  'reg_with_rules' => 'Rules of the game',
  'signup' => '注册',
  'Languese' => '语言',
  'log_reg_text0' => 'Before registering please read',
  'log_reg_text1' => 'Registration means that you have read and fully agree with all points of the rules. If you do not agree with any paragraph rules-please register.',
  'thanksforregistry' => 'Congratulations on your successful registration! You will be redirected to the main page of your planet in 10 seconds, if it did not click on this <a href=overview.php><u>link!</u></a>!',
  'welcome_to_universe' => 'Welcome to OGame!!!',
  'please_click_url' => 'In order to use the account, you must activate it by clicking on this link',
  'regards' => 'Good luck!',
  'error_lang' => '不支持这个语言！<br />',
  'error_mail' => 'E-Mail错误！<br />',
  'error_planet' => '已经存在同名星球！<br />',
  'error_hplanetnum' => '不得使用符号命名！<br />',
  'error_character' => '名称错误！<br />',
  'error_charalpha' => 'You can use only letters !<br />',
  'error_password' => '密码至少需要4位！<br />',
  'error_rgt' => '不同意规则不得入境。<br />',
  'error_userexist' => '已经出现同名用户！<br />',
  'error_emailexist' => 'E-mail已经注册！<br />',
  'error_sex' => 'Error in the choice of gender !<br />',
  'error_mailsend' => 'Error in sending the email, your password: ',
  'reg_welldone' => 'Registration complete! Your password was specified when registering the mailbox. Here it is again just in case',
  'error_captcha' => 'The wrong graphic code !<br/>',
  'error_v' => 'Try it again !<br />',
  'log_login_page' => 'Enter the game',
  'log_reg_already' => '注册了吗？',
  'log_reg_already_lost' => '忘记密码？',

  'log_lost_header' => '密码重设',
  'log_lost_code' => 'Confirmation code',
  'log_lost_description1' => 'Enter the email address you registered your account. We will send an email with a verification code to reset your password',

  'log_lost_send_mail' => 'Send confirmation code',
  'log_lost_description2' => 'If you have a confirmation code, please enter it below and click "Reset password". An e-mail will be sent an email with a new password<br /><br />
    If you already asking for confirmation code but can not find email from us in your main folder - check your SPAM folder. Some mail servers can mark our letters as "SPAM"<br /><br />
    If you absolutly sure that did not receive email from us - just write a email to Administration address <span class="ok">' . $config->server_email . '</span>',
  'log_lost_reset_pass' => 'Reset password',
  'log_lost_sent_code' => 'Email sent to this email with further instructions on resetting your password',
  'log_lost_sent_pass' => 'Just sent to your email message with the new password',
  'log_lost_err_email' => 'This email is not registered in the database. This could mean one of the following:<br>You miss typed the email. Return to the previous page and try again<br>Your account has been deleted due to inactivity. Register a new<br>You are trying to enter the wrong Gaming Universe. Double check the name of the current Universe and on Error Go To correct Universe',
  'log_lost_err_sending' => 'Error sending message to the specified by email. Notify Administrator of the error',
  'log_lost_err_code' => 'The verification code is not registered in the database. This could mean one of the following:<br>You mistype the confirmation code. Return to the previous page and enter the code<br>You are trying to enter the confirmation code in the wrong Universe for which it was generated. Double check the name of the current Universe and on Error Go To correct Universe<br>Your account has been deleted due to inactivity. Register a new<br>Expired confirmation code. Check the expiration date of code in the letter. If it passed, request a new confirmation code',
  'log_lost_err_admin' => 'The members server command (moderators, operators, administrators, etc) may not use the password reset function. Contact your server administrator to change the password',
  'log_lost_err_change' => 'Error changing the password in the database. Notify Administrator of error',

  'login_register_offer' => 'Click here to register',
  'login_password_restore_offer' => 'Click here to reset password',

  'login_register_email_hint' => 'Указывайте работающий e-mail - владельцем аккаунта считается владелец указанного e-mail<br />
    Постарайтесь не использовать ящики на mail.ru',

  'login_account_name_or_email' => '用户名或Email：',

));
