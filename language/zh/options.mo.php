<?php

/*
#############################################################################
#  Filename: options.mo
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
* @version 40b0.11
*
*/

/**
* DO NOT CHANGE
*/

if (!defined('INSIDE')) die();

$a_lang_array = array('opt_account'=>'帐户',
  'opt_int_options'=>'Interface',
  'opt_settings_statistics'=>'玩家的统计',
  'opt_settings_info'=>'玩家信息',
  'opt_alerts'=>'警报',
  'opt_common'=>'Common',

  'opt_birthday'=>'生日',

  'opt_header'=>'用户选项',
  'opt_messages'=>'自动提醒',
  'opt_msg_saved'=>'选项成功保存',
  'opt_msg_name_changed'=>'用户名成功更改',
  'opt_msg_pass_changed'=>'密码成功更改',
  'opt_err_pass_wrong'=>'旧密码错误密码没有改变',
  'opt_err_pass_unmatched'=>'新密码确认与新密码不同。密码没有改变',

  'opt_msg_name_change_err_used_name'=>'其他人已经拥有这个名称',
  'opt_msg_name_change_err_no_dm'=>'没有足够的DM来更改名称',

  'username_old'=>'旧名称',
  'username_new'=>'新名称',
  'username_change_confirm'=>'更改名称',
  'username_change_confirm_payed'=>'for',

  'changue_pass'=>'更改密码',
  'Download'=>'下载',
  'userdata'=>'信息',
  'username'=>'用户名',
  'lastpassword'=>'旧密码',
  'newpassword'=>'新密码<br>（最少8个字符）',
  'newpasswordagain'=>'重复新密码',
  'emaildir'=>'电子邮件地址',
  'emaildir_tip'=>'这个地址可以随时更改。如果在7天内没有修改，地址将是主要的。',
  'permanentemaildir'=>'主电子邮件地址',
  'opt_planet_sort_title'=>'行星排列方式',
  'opt_planet_sort_options' => array(
    SORT_ID       => '殖民时间',
    SORT_LOCATION => '坐标',
    SORT_NAME     => '名称',
    SORT_SIZE     => '大小',
  ),
  'opt_planet_sort_ascending' => array(
    SORT_ASCENDING  => '升序',
    SORT_DESCENDING => '降序',
  ),

'opt_navbar_title'=>'导航面板',
  'opt_navbar_description'=>'导航栏（或简称“导航栏”）位于屏幕的最上方。本节允许您自定义导航栏的类型',
  'PLAYER_OPTION_NAVBAR_RESEARCH_WIDE'=>'宽研究按钮（旧外观）',
  'PLAYER_OPTION_NAVBAR_DISABLE_EXPEDITIONS'=>'停用远征按钮',
  'PLAYER_OPTION_NAVBAR_DISABLE_FLYING_FLEETS'=>'禁用飞行舰队按钮',
  'PLAYER_OPTION_NAVBAR_DISABLE_RESEARCH'=>'禁用研究按钮',
  'PLAYER_OPTION_NAVBAR_DISABLE_PLANET'=>'禁止行星按钮',
  'PLAYER_OPTION_NAVBAR_DISABLE_HANGAR'=>'停用机库按钮',
  'PLAYER_OPTION_NAVBAR_DISABLE_QUESTS'=>'禁用任务按钮',
  'PLAYER_OPTION_NAVBAR_DISABLE_META_MATTER'=>'禁用MetaMatter按钮',
  'PLAYER_OPTION_UNIVERSE_OLD'=>'使用宇宙评论的旧视图',
  'PLAYER_OPTION_UNIVERSE_DISABLE_COLONIZE'=>'禁用殖民化按钮',
  'PLAYER_OPTION_DESIGN_DISABLE_BORDERS'=>'禁用表格边框（如果有）',
  'PLAYER_OPTION_TECH_TREE_TABLE'=>'将技术树视为表格（旧视图）',
  'PLAYER_OPTION_ANIMATION_DISABLED'=>'禁用动画效果',
  'PLAYER_OPTION_PROGRESS_BARS_DISABLED'=>'禁止进度条',

  'opt_chk_skin'=>'使用皮肤',
  'opt_adm_title'=>'管理选项',
  'opt_adm_planet_prot'=>'行星保护',
  'thanksforregistry'=>'感谢您的注册。<br />几分钟后，您将收到一封密码的邮件。',
  'general_settings'=>'常规设置',
  'skins_example'=>'皮肤',

  'opt_avatar'=>'头像',
  'opt_avatar_remove'=>'删除头像',
  'opt_avatar_search'=>'在Google搜索',
  'opt_upload'=>'上传',

  'opt_msg_avatar_removed'=>'头像成功删除',
  'opt_msg_avatar_uploaded'=>'头像成功更改',
  'opt_msg_avatar_error_delete'=>'删除头像文件时出错。请联系服务器管理员',
  'opt_msg_avatar_error_writing'=>'保存头像文件时出错。请联系服务器管理员',
  'opt_msg_avatar_error_upload'=>'加载头像图像％1时出错。请联系服务器管理员',
  'opt_msg_avatar_error_unsupported'=>'不支持上传的图像格式。只支持JPG，GIF，PNG高达200KB',

  'untoggleip'=>'禁用IP检查',
  'untoggleip_tip'=>'检查IP意味着您将无法使用不同的IP地址登录。测试给你安全的优势！',
  'galaxyvision_options'=>'宇宙',
  'spy_cant'=>'探针数',
  'spy_cant_tip'=>'当你跟随某人时要发送的探测器数量',
  'tooltip_time'=>'延迟显示工具提示之前',
  'mess_ammount_max'=>'最大舰队通信次数',
  'seconds'=>'秒',
  '捷径'=>'快速访问',
  'show'=>'显示',
  'write_a_messege'=>'写一个信息',
  'spy'=>'间谍',
  'add_to_buddylist'=>'添加为朋友',
  'attack_with_missile'=>'导弹攻击',
  'show_report'=>'查看报告',
  'delete_vacations'=>'帐户管理',
  'mode_vacations'=>'转假',
  'vacations_tip'=>'休假模式是在你离开的时候保护地球。',
  'deleteaccount'=>'禁用帐户',
  'deleteaccount_tip'=>'帐户将在45天无法登录后被删除',
  'deleteaccount_on'=>'如果没有活动此配置文件将被删除',
  'save_settings'=>'保存更改',
  'exit_vacations'=>'退出离开',
  'Vaccation_mode'=>'假期模式已启用。它运行到：',
  'You_cant_exit_vmode'=>'你不能退出叶直到时间到期',
  'Error'=>'错误',
  'cans_resource'=>'停止资源提取行星',
  'cans_reseach'=>'停止研究行星',
  'cans_build'=>'停止在行星上的建造',
  'cans_fleet_build'=>'停止建造船只和防御',
  'cans_fly_fleet2'=>'外星人舰队接近...你可以去度假',
  'vacations_exit'=>'假期模式被禁用',
  'select_skin_path'=>'SELECT',
  'opt_language'=>'界面语言',
  'opt_compatibility'=>'兼容性 - 旧接口',
  'opt_compat_structures'=>'旧接口结构',
  'opt_vacation_err_your_fleet'=>'不要离开，直到航班至少是你的一个舰队',
  'opt_vacation_err_building'=>'你正在建造或探索％s，因此你不能休假',
  'opt_vacation_err_research'=>'你的科学家做一些研究，所以你不能离开假期',
  'opt_vacation_err_que'=>'有进行中的研究和/或某些行星问题不是空的，所以你不能离开假期。使用帝国概述来查找发生的情况',
  'opt_vacation_err_timeout'=>'空缺超时未达到',
  'opt_vacation_next'=>'下一个空缺将在之后',
  'opt_vacation_min'=>'至少',
  'succeful_changepass'=>'',

  'opt_time_diff_clear'=>'测量玩家端的时间和服务器上的时间之间的差异',
  'opt_time_diff_manual'=>'设置',

  'opt_custom' => array(
    'opt_uni_avatar_user'=>'显示用户头像',
    'opt_uni_avatar_ally'=>'显示盟友标志',
    'opt_int_struc_vertical'=>'垂直结构que',
    'opt_int_navbar_resource_force'=>'始终显示行星导航栏',
    'opt_int_overview_planet_columns'=>'行列表中的列数',
    'opt_int_overview_planet_columns_hint'=>'0 - 按最大行计数',
    'opt_int_overview_planet_rows'=>'行星列表中的最大行数',
    'opt_int_overview_planet_rows_hint'=>'如果有列计数忽略',
  ),
  
   'opt_mail_optional_description'=>'来自其他玩家的个人信息和关于内部游戏事件的通知（如战斗报告，远征报告等）将被发送到此电子邮件',
   'opt_mail_permanent_description'=>'您的游戏帐户永久链接到此电子邮件。 所有系统通知（如密码更改确认）将被发送到此地址。 您只能一次输入此电子邮件',

   'opt_sound_enabled'=>'启动游戏中的声音',

   'opt_account_name'=>'您的登录名<br/>必须在游戏入口处输入该名称',
   'opt_game_user_name'=>'游戏中的名称<br/>通过此名称，服务器上的其他玩家可以看到它',

   'opt_build_autoconvert_hide'=>'隐藏自动转换按钮',

   'opt_universe_title'=>'宇宙',
);
