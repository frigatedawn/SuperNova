<?php

/*
#############################################################################
#  Filename: admin.mo
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
* @version 41a2.0
*
*/

/**
* DO NOT CHANGE
*/

if (!defined('INSIDE')) die();


$a_lang_array = (array(
  'adm_tool_md5_header' => '密码编码 (MD5)',
  'adm_tool_md5_hash' => 'MD5 hash',
  'adm_tool_md5_encode' => '[ Encode ]',
  'adm_tool_md5_generate' => '[ Generate ]',

  'adm_tool_sql_page_header'=>'SQL服务器参数',

  'adm_tool_sql_server_version'=>'服务器版本',
  'adm_tool_sql_client_version'=>'Libriary版本',
  'adm_tool_sql_host_info'=>'OS通信方法',

  'adm_tool_sql_table' => array(
    'server' => array(
      'TABLE_HEADER'=>'SQL服务器',
      'COLUMN_NAME_1'=>'参数',
      'COLUMN_NAME_2'=>'值'
    ),

    'status' => array(
      'TABLE_HEADER'=>'SQL状态',
      'COLUMN_NAME_1'=>'参数',
      'COLUMN_NAME_2'=>'值'
    ),

    'params' => array(
      'TABLE_HEADER'=>'SQL设置',
      'COLUMN_NAME_1'=>'参数',
      'COLUMN_NAME_2'=>'值'
    ),
  ),

  'adm_pl_image'=>'星球图像',
  'adm_pl_fields_max'=>'最大扇区',
  'adm_pl_fields_busy'=>'占领的部门',
  'adm_pl_temp_min'=>'最低温度',
  'adm_pl_temp_max'=>'最高温度',
  'adm_pl_governor'=>'总督',
  'adm_pl_debris_metal'=>'金属碎片',
  'adm_pl_debris_crystal'=>'水晶碎片',

  'adm_sys_write_message' => '写消息',

  'adm_opt_user_settings' => '用户设置',
  'adm_opt_user_birthday_gift' => '生日礼物',
  'adm_opt_user_birthday_gift_disable' => '0 - 禁用礼物',
  'adm_opt_user_birthday_range' => '复古生日，几天',
  'adm_opt_user_birthday_range_hint' => '过去有多远可以让用户生日礼物给他。 显然不能超过364天',

  'adm_done' => '成功完成',
  'adm_inactive_removed' => '<li>删除非活动玩家： %d</li>',
  'adm_stat_title' => '更新统计信息',
  'adm_maintenance_title' => '数据库服务',
  'adm_records' => '处理记录',
  'adm_cleaner_title' => '清理队列结构',
  'adm_cleaned' => '已删除任务数： ',
  'adm_schedule_none' => '现在没有任务',
  'Fix' => '更新',
  'Welcome_to_Fix_section' => '部分补丁',
  'There_is_not_need_fix' => '修复不必要！',
  'Fix_welldone' => '完成！',
  'adm_ov_title' => '概览',
  'adm_ov_infos' => '信息',
  'adm_ov_yourv' => '当前版本',
  'adm_ov_lastv' => '可用版本',
  'adm_ov_here' => '这里',
  'adm_ov_onlin' => '在线',
  'adm_ov_ally' => '联盟',
  'adm_ov_point' => '分数',
  'adm_ov_activ' => '活动',
  'adm_ov_count' => '在线玩家',
  'adm_ov_wrtpm' => '写私人消息',
  'adm_ov_altpm' => '[PM]',
  'adm_ov_hint' => '<ul><li>在线用户表可以按照“ID”，“播放器名称”，“联盟”，“积分”和“活动”列进行排序。 要按特定列排序，请单击其标题</li></ul>',


  'adm_ul_title' => '玩家列表',
    'adm_ul_title_online' => '在线状态',
  'adm_ul_time_registered' => '注册时间',
  'adm_ul_time_played' => '最后上线',
  'adm_ul_time_banned' => '禁止直到',
  'adm_ul_referral' => '引荐',
  'adm_ul_players' => '玩家',
  'adm_ul_dms' => 'DM',
  'adm_sys_actions' => '操作',


  'adm_ul_bana' => '封禁',
  'adm_ul_detai' => '详细',
  'adm_ul_actio' => '操作',
  'adm_ul_playe' => ' 玩家',
  'adm_ul_yes' => '是',
  'adm_ul_no' => '否',
  'adm_pl_title' => '活动星球',
  'adm_pl_activ' => '活动星球',
  'adm_pl_name' => '星球名称',
  'adm_pl_posit' => '坐标',
  'adm_pl_point' => '价值',
  'adm_pl_since' => '活跃',
  'adm_pl_they' => '总共',
  'adm_pl_apla' => '星球',
  'adm_am_plid' => '星球ID',
  'adm_am_done' => '增加成功',
  'adm_am_ttle' => '增加资源',
  'adm_am_add' => '应用',
  'adm_am_form' => '一步添加链接表单资源',
  'adm_ban_title' => '封禁玩家',
  'adm_bn_plto' => '封禁玩家',
  'adm_bn_name' => '玩家名',
  'adm_bn_reas' => '禁止的理由',
  'adm_bn_isvc' => '假期模式',
  'adm_bn_time' => '禁令期限',
  'adm_bn_days' => '日',
  'adm_bn_hour' => '时',
  'adm_bn_mins' => '分',
  'adm_bn_secs' => '秒',
  'adm_bn_bnbt' => '封禁',
  'adm_bn_thpl' => '玩家',
  'adm_bn_isbn' => '完成封禁！',
  'adm_bn_vctn' => ' 放假模式',
  'adm_bn_errr' => '错误：禁止播放器！ 可能找不到名称 %s 。',
  'adm_bn_err2' => '错误：无法停止行星上的制作！',
  'adm_bn_plnt' => '行星上的生产被禁用。',
  'adm_ban_msg_issued_date' => '被封玩家',
  'adm_unbn_ttle' => '解封',
  'adm_unbn_plto' => '解封玩家',
  'adm_unbn_name' => '名称',
  'adm_unbn_bnbt' => '解封',
  'adm_unbn_thpl' => '玩家',
  'adm_unbn_isbn' => '解封！',
  'adm_rz_ttle' => '归零宇宙',
  'adm_rz_done' => '转让用户',
  'adm_rz_conf' => '确认',
  'adm_rz_text' => '单击（重置）删除所有数据库。 你做了备份？ 帐户不会被删除...',
  'adm_rz_doit' => '清零',
  'adm_ch_ttle' => '管理聊天',
  'adm_ch_list' => '聊天列表',
  'adm_ch_clear' => '清空',
  'adm_ch_idmsg' => 'ID',
  'adm_ch_delet' => '删除',
  'adm_ch_play' => '玩家',
  'adm_ch_time' => '时间',
  'adm_ch_chat' => '聊天',
  'adm_ch_nbs' => '全部消息……',
  'adm_er_ttle' => '日志记录',
  'adm_er_clear' => '清空',
  'adm_er_idmsg' => 'ID',
  'adm_er_type' => '[Code] 标题',
  'adm_er_play' => '玩家',
  'adm_er_time' => '时间',
  'adm_er_page' => '页面的地址',
  'adm_er_nbs' => '总日志记录：',
  'adm_er_text' => '日志记录',
  'adm_er_bktr' => '调试信息',
  'adm_dm_title' => '改变暗物质的数量',
  'adm_dm_planet' => '行星的ID，坐标或名称',
  'adm_dm_oruser' => '或',
  'adm_dm_user' => 'ID或用户名',
  'adm_dm_no_quant' => '指定数字Dark Matter（正负 - 充电，移除）',
  'adm_dm_no_dest' => '指定用户或行星编辑暗物质',
  'adm_dm_add_err' => '看起来像在充电黑暗事件发生。',
  'adm_dm_user_none' => '错误：找不到ID或名称的用户 %s',
  'adm_dm_user_added' => 'Dark Matter用户数：[%s] (ID: %d) 已成功更改为％s Dark Matter。',
  'adm_dm_user_conflict' => '定位用户错误：看起来像数据库是用户，名称相同，并且具有相同的ID',
  'adm_dm_planet_none' => '找不到行星错误：找不到行星ID，坐标或名称 %s',
  'adm_dm_planet_added' => '用户ID号DM %1$d（行星 %4$s %2$s ID %3$d 的所有者）成功重命名为 %5$d DM。',
  'adm_dm_planet_conflict' => '非唯一的数据搜索行星。<br>这意味着数据库在同一时间有一个',
  'adm_dm_planet_conflict_id' => '行星名为"%1$s"，行星名称为"%1$s"。<br>尝试使用行星的坐标。',
  'adm_dm_planet_conflict_name' => '多行星名为"%1$s"。<br>尝试使用坐标或ID行星。',
  'adm_dm_planet_conflict_coords' => '行星名为"%1$s"，行星坐标为"%1$s"。<br>尝试使用行星的ID。',
  'adm_apply' => '应用',
  'adm_maint' => '维护',
  'adm_backup' => '恢复',
  'adm_tools' => '实用程序',
  'adm_tools_reloadConfig' => '重新计算配置',
  'adm_reason' => '原因是',
  'adm_opt_title' => '宇宙的配置',
  'adm_opt_game_settings' => '游戏参数',
  'adm_opt_game_name' => '宇宙名字',
  'adm_opt_multiaccount_enabled' => '启用多帐户',
  'adm_opt_speed' => '速度',
  'adm_opt_game_gspeed' => '游戏速度',
  'adm_opt_game_fspeed' => '舰队速度',
  'adm_opt_game_pspeed' => '资源速度',
  'adm_opt_colonies_not_counted' => '(apart from Capital)',
  'adm_opt_colonies_no_restrictions' => '(-1 - no restrictions)',
  'adm_opt_game_speed_normal' => '(1&nbsp;-&nbsp;normal)',
  'adm_opt_game_faq' => 'FAQ链接',
  'adm_opt_game_forum' => '论坛地址',
  'adm_opt_game_metamatter' => '参考文献 &quot;购买元件&quot;',
  'adm_opt_game_copyrigh' => '版权',
  'adm_opt_game_online' => '关闭游戏。 用户将看到以下消息：',
  'adm_opt_game_offreaso' => '关闭原因',
  'adm_opt_plan_settings' => '星球设置',
  'adm_opt_plan_initial' => '起始星球的大小',
  'adm_opt_plan_base_inc' => '基本生产',
  'adm_opt_game_debugmod' => '启动测试模式',
  'adm_opt_game_counter' => '添加游戏柜台',
  'adm_opt_geoip_whois_url' => 'WHOIS提供商URL',
  'adm_opt_geoip_whois_url_example' => '(i.e. "http://1whois.ru/?ip=")',
  'adm_opt_game_oth_info' => '其他选项',
  'adm_opt_int_news_count' => '新闻计数',
  'adm_opt_int_page_imperor' => '在页面 &quot;皇帝&quot;',
  'adm_opt_game_zero_disable' => '(0&nbsp;-&nbsp;Disable)',
  'adm_opt_game_advertise' => '增加单位',
  'adm_opt_game_oth_adds' => '启用左侧菜单中的广告块。 横幅代码：',
  'adm_opt_game_oth_gala' => '银河系',
  'adm_opt_game_oth_syst' => '星系',
  'adm_opt_game_oth_plan' => '星球',
  'adm_opt_btn_save' => '保存',
  'adm_opt_vacation_mode' => '关闭度假',
  'adm_opt_sectors' => '半径',
  'adm_opt_per_hour' => '每小时',
  'adm_opt_saved' => '游戏设置已成功保存',
  'adm_opt_players_online' => '在线玩家',
  'adm_opt_vacation_mode_is' => '假期模式',
  'adm_opt_game_status' => '游戏状态',
  'adm_opt_links' => '链接和横幅',
  'adm_opt_universe_size' => '宇宙大小',
  'adm_opt_galaxies' => '银河系',
  'adm_opt_systems' => '星系',
  'adm_opt_planets' => '星球',
  'adm_opt_build_on_research' => '建立在研究上',
  'adm_opt_eco_scale_storage' => '规模化生产速度快',
  'adm_opt_game_rules' => '游戏规则',
  'adm_opt_max_colonies' => '殖民地数量',
  'adm_opt_exchange' => '交换资源',
  'adm_opt_game_mode' => '宇宙的类型',
  'adm_opt_chat' => '聊天设置',
  'adm_opt_chat_timeout' => '空闲超时',
  'adm_opt_allow_buffing' => '允许抛光',
  'adm_opt_ally_help_weak' => '允许持有弱联盟',
  'adm_opt_email_pm' => '确定发送 PM 到 e-mail',
  'adm_opt_player_defaults' => '默认玩家设置',
  'adm_opt_game_default_language' => '默认语言',
  'adm_opt_game_default_skin' => '皮肤',
  'adm_opt_game_default_template' => '模板',
  'adm_opt_empire_mercenary_temporary' => '临时雇佣兵',
  'adm_opt_empire_mercenary_temporary_base' => '基地租期，秒',
  'adm_opt_empire_mercenary_temporary_hint' => '当所有永久雇佣军切换此选项将被转换为临时基准活动期间<br />当切换此选项时，所有活跃雇佣军将被转换为永久雇佣军。 如果新转换的雇佣兵不能被雇用，他们不能买，但仍然是活跃的，并会影响游戏',
  'adm_opt_experimental' => '实验选择！ 使用小心！',
  'adm_opt_tpl_minifier' => '模板分组',
  'adm_opt_tpl_minifier_hint' => 'Minifier通过用单个空格替换几个重复的空格字符（新行，列表，空格）来压缩模板。 更多关于模板最小化的信息在 /docs/changelog.txt',
  'adm_lm_compensate' => '补偿',
  'adm_pl_comp_title' => '摧毁星球补偿',
  'adm_pl_comp_src' => '摧毁星球',
  'adm_pl_comp_dst' => '在这个星球上的信贷资源',
  'adm_pl_comp_bonus' => '奖金玩家',
  'adm_pl_comp_check' => '检查',
  'adm_pl_comp_confirm' => '确定',
  'adm_pl_comp_done' => '完成',
  'adm_pl_comp_price' => '成本结构',
  'adm_pl_comp_got' => '被登记',
  'adm_pl_com_of_plr' => '玩家',
  'adm_pl_comp_will_be' => '将会',
  'adm_pl_comp_destr' => '销毁。',
  'adm_pl_comp_recieve' => '指定资源数量',
  'adm_pl_comp_recieve2' => '登上了这个星球',
  'adm_pl_comp_err_0' => '未发现被破坏的星球',
  'adm_pl_comp_err_1' => '摧毁星球',
  'adm_pl_comp_err_2' => '没有找到目标星球',
  'adm_pl_comp_err_3' => '从行星不同的业主。 信贷资源只能是这个星球上一样的玩家',
  'adm_pl_comp_err_4' => '星球属于指定的玩家',
  'adm_pl_comp_err_5' => '行星和信用资源匹配',
  'adm_ver_versions' => '服务器组组件本',
  'adm_ver_version_sn' => '版本',
  'adm_ver_version_db' => '数据库版本',
  'adm_update_force' => '强制性升级',
  'adm_update_repeat' => '重复上次系统更新',
  'adm_lm_planet_edit' => '编辑星球',
  'adm_planet_edit' => '编辑星球',
  'adm_planet_id' => '星球ID',
  'adm_name' => '名称',
  'adm_planet_change' => '修改',
  'adm_planet_parent' => '特殊星球',
  'adm_planet_active' => '激活星球',
  'adm_planet_edit_hint' => '<ul>    <li>输入行星ID并在空白页面按“确认”将打印有关行星的信息：类型，名称，坐标和当前所选类型/资源的数量</li> <li>要从行星中删除单位/资源，请输入负值</li>  </ul>',
  'adm_planet_list_title' => '星球列表',
  'adm_sys_owner' => '所属玩家',
  'adm_sys_owner_id' => '所属玩家ID',
  'addm_title' => '增加月球',
  'addm_addform' => '新的月球',
  'addm_playerid' => 'ID 世界住宿',
  'addm_moonname' => '月球名称',
  'addm_moongala' => '指定星系',
  'addm_moonsyst' => '指定系统',
  'addm_moonplan' => '指定位置',
  'addm_moondoit' => '增加',
  'addm_done' => '月亮形成',
  'adm_usr_level' => array(
    '0' => '玩家',
    '1' => '鹳狸猿',
    '2' => '鹳狸猿王',
    '3' => '管理员',
  ),

  'adm_usr_genre' => array(
    GENDER_UNKNOWN => '不明',
    GENDER_MALE => '男',
    GENDER_FEMALE => '女',
  ),

  'panel_mainttl' => '管理员控制',
  'adm_panel_mnu' => '搜索玩家',
  'adm_panel_ttl' => '搜索选项',
  'adm_search_pl' => '根据名称查找',
  'adm_search_ip' => '根据IP查找',
  'adm_stat_play' => '玩家排名',
  'adm_mod_level' => '授权级别',
  'adm_player_nm' => '玩家姓名',
  'adm_ip' => 'IP',
  'adm_plyer_wip' => '玩家IP',
  'adm_frm1_id' => 'ID',
  'adm_frm1_name' => '名称',
  'adm_frm1_ip' => 'IP',
  'adm_frm1_mail' => 'E-Mail',
  'adm_frm1_acc' => '等级',
  'adm_frm1_gen' => '性别',
  'adm_frm1_main' => '星球ID',
  'adm_frm1_gpos' => '坐标',
  'adm_mess_lvl1' => '授权级别',
  'adm_mess_lvl2' => '&quot;now&quot; ',
  'adm_colony' => '殖民地',
  'adm_planet' => '星球',
  'adm_moon' => '月球',
  'adm_technos' => '科技',
  'adm_bt_search' => '查找',
  'adm_bt_change' => '修改',
  'flt_id' => 'ID',
  'flt_fleet' => '舰队',
  'flt_ships' => '组成',
  'flt_mission' => '任务',
  'flt_here' => '返回',
  'flt_there' => '当前',
  'flt_here_there' => '当前/返回',
  'flt_departure' => '来源',
  'flt_owner' => '所属',
  'flt_planet' => '星球',
  'flt_time_return' => '返回',
  'flt_e_owner' => '目的地',
  'flt_time_arrive' => '到达',
  'flt_staying' => '待命',
  'flt_action' => '动作',
  'flt_title' => '战斗中的舰队',
  'flt_no_fleet' => '没有战斗中的舰队',
  'mlst_title' => '消息列表',
  'mlst_mess_del' => '删除消息',
  'mlst_hdr_page' => '页',
  'mlst_hdr_title' => ' ) 消息：',
  'mlst_hdr_prev' => '[ &lt;- ]',
  'mlst_hdr_next' => '[ -&gt; ]',
  'mlst_hdr_id' => 'ID',
  'mlst_hdr_type' => '类型',
  'mlst_hdr_time' => '时间',
  'mlst_hdr_from' => '从',
  'mlst_hdr_to' => '到',
  'mlst_hdr_text' => '内容',
  'mlst_hdr_action' => '动作',
  'mlst_del_mess' => '删除',
  'mlst_bt_delsel' => '删除选项',
  'mlst_bt_deldate' => '删除',
  'mlst_hdr_delfrom' => '在日期前删除所选类型的邮件',
  'mlst_no_messages' => '没有消息',
  'mlst_messages_deleted' => '已删除ID（s）％s的邮件',
  'mlst_messages_deleted_date' => '在日期％s之前删除类型为“％s”的邮件（不包括指定日期的邮件）',

  'adm_lng_title' => '本土化',
  'adm_lng_warning' => '警告！ 区域编辑器处于Alpha阶段！ 使用它自己承担风险！',
  'adm_lng_domain' => '区域',
  'adm_lng_string_name' => '字符串名称',
  'adm_lng_string_add' => '添加字符串',
  'adm_uni_price_galaxy' => '基准银河重命名成本',
  'adm_uni_price_system' => '基本系统重命名成本',

  'adm_opt_ver_check' => '版本检查',
  'adm_opt_ver_check_hint' => '版本检查由admin通过按下面的“检查版本”按钮激活。 此操作只传输匿名数据：当前数据库版本，发行版和完整游戏版本。',
  'adm_opt_ver_check_do' => '检查版本',
  'adm_opt_ver_check_last' => '上次版本检查在',
  'adm_opt_ver_check_auto' => '自动版本检查',
  'adm_opt_ver_check_auto_hint' => '您可以启用自动游戏版本检查。 传输到更新服务器的数据将与使用手动版本检查的数据完全相同。 但是自动检查引擎会在一段时间内自行检查一次版本（默认情况下是每天一次）。 更多文档信息',

  'adm_opt_ver_response' => array(
    SNC_VER_NEVER => '版本检查从未执行过',

    SNC_VER_ERROR_CONNECT => '版本检查错误。 游戏无法与更新服务器通信。 确保您没有限制PHP与远程服务器通信，或者您已安装CURL并在PHP上激活它',
    SNC_VER_ERROR_SERVER => '致命的更新服务器错误！ 检查 - 是否有较新版本的游戏与高级更新服务器支持。 否则立即联系开发人员诊断并解决此问题！',

    SNC_VER_EXACT => '你有最新的alpha版本的传入。 感谢参加测试！',
    SNC_VER_LESS => '你使用alpha版本的传入版本。 不过还有更多的alpha！ 如果您想要修复当前版本中的错误并参与测试游戏的新功能，您可以更新游戏。',
    SNC_VER_FUTURE => '你有未来的游戏版本！ 立即联系开发人员并传递他这个版本！ 还准备时间民兵访问，以打破时空连续体，违反因果关系法',

    SNC_VER_RELEASE_EXACT => '你有最新版本的最新版本',
    SNC_VER_RELEASE_MINOR => '您的游戏版本已过时 - 您的版本有新版本。 最幸运的是，它包含一些目前版本的修补程序。 它被推荐更新您的游戏。',
    SNC_VER_RELEASE_MAJOR => '你有非常过时的游戏版本 - 有新的版本。 它提供了新功能和错误修复。 请更新您的游戏版本！',
    SNC_VER_RELEASE_ALPHA => '你有最新版本的最新版本。 但是有下一个版本的alpha版本。 可能你想探索和测试即将发布的新功能？',

    SNC_VER_MAINTENANCE => '当前关闭维护服务器的更新服务器。 请稍后再查看',
    SNC_VER_UNKNOWN_RESPONSE => '更新服务器提供未知的响应 在大多数情况下，这意味着有新的游戏版本具有更高级的更新服务器支持。 也可能意味着更新服务器中的错误。 请检查并更新您的游戏或联系开发人员诊断和解决问题。',
    SNC_VER_INVALID => '我只是不明白你有哪个版本的游戏。 请联系开发人员诊断并解决此问题。',
    SNC_VER_STRANGE => '你不应该看到这个消息。 如果你看到这个消息 - 一些可怕的错误。 请联系开发人员诊断并解决此问题。',

    SNC_VER_REGISTER_UNREGISTERED => '您的服务器仍未注册',
    SNC_VER_REGISTER_ERROR_MULTISERVER => '错误 - 您的服务器有多个注册条目！ 联系开发人员进行诊断和解决问题',
    SNC_VER_REGISTER_ERROR_REGISTERED => '错误 - 您的服务器已经注册！ 检查您的密钥和ID在服务器配置。',
    SNC_VER_REGISTER_ERROR_NO_NAME => '错误 - 没有提供服务器名称！ 您应该定义要注册的服务器名称。',
    SNC_VER_REGISTER_ERROR_WRONG_URL => '错误 - 错误的URL！ 传递的字符串不是一个正确的URL。 如果您尝试从本地主机注册服务器，您应该知道更新服务器不能与本地服务器一起使用。',
    SNC_VER_REGISTER_REGISTERED => '您的网站已成功注册',

    SNC_VER_ERROR_INCOMPLETE_REQUEST => '错误 - 错过正确的ID或密钥请求！ 检查您的密钥和ID在服务器配置。',
    SNC_VER_ERROR_UNKNOWN_KEY => '错误 - 未知键！ 在更新服务器DB中没有找到已传递密钥。 检查您的密钥服务器配置。',
    SNC_VER_ERROR_MISSMATCH_KEY_ID => '错误 - 传递的密钥与服务器ID不匹配！ 检查您的密钥和ID在服务器配置。',
  ),

  'adm_opt_ver_response_short' => array(
    SNC_VER_NEVER => '从未',

    SNC_VER_ERROR_CONNECT => '连接错误',
    SNC_VER_ERROR_SERVER => '服务器错误',

    SNC_VER_EXACT => '最新测试',
    SNC_VER_LESS => '旧测试',
    SNC_VER_FUTURE => '未来测试',

    SNC_VER_RELEASE_EXACT => '最新版本',
    SNC_VER_RELEASE_MINOR => '推荐更新',
    SNC_VER_RELEASE_MAJOR => '必须更新',
    SNC_VER_RELEASE_ALPHA => '新鲜释放',

    SNC_VER_MAINTENANCE => '保持',
    SNC_VER_UNKNOWN_RESPONSE => '未知回应',
    SNC_VER_INVALID => '版本错误',
    SNC_VER_STRANGE => '不可预测的狗屎',

    SNC_VER_REGISTER_UNREGISTERED => '未注册',
    SNC_VER_REGISTER_ERROR_MULTISERVER => '多重注册',
    SNC_VER_REGISTER_ERROR_REGISTERED => '密钥错误',
    SNC_VER_REGISTER_ERROR_NO_NAME => '服务器名称错误',
    SNC_VER_REGISTER_REGISTERED => '注册',

    SNC_VER_ERROR_INCOMPLETE_REQUEST => 'ID或密钥错误',
    SNC_VER_ERROR_UNKNOWN_KEY => '未知密钥',
    SNC_VER_ERROR_MISSMATCH_KEY_ID => '密钥不符合ID',
  ),

  'adm_upd_register' => '服务器注册',
  'adm_upd_register_hint' => '
    服务器注册需要特殊查询来更新服务器。 当您注册时，通过唯一身份验证的必需最小值：
    <ul>
      <li>完整的服务器网址，即http://myserver.com/myfolder/。 有必要区分共享相同IP或域的几个服务器</li>
       <li>内部服务器名称。 用于服务器消息。</li>
    </ul>
    你为什么要注册？ 将来有很多功能计划，只能被注册到注册服务器。 计划功能的简短列表：
    <ul>
      <li>自动更新日志刷新</ li>
      <li>自动游戏更新</ li>
      <li>列出服务器评级</ li>
      <li>错误报告和票证系统</ li>
      <li>聊天服务器管理员</ li>
      <li>远程服务器诊断 - 根据请求</ li>
      <li> ...和许多其他</ li>
    </ul>
    你为什么要现在注册？
    <ul>
      <li>注册服务器管理员的请求优先于开发人员。</li>
      <li>注册后，每个服务器分配唯一的ID，将用于基本服务器排序。 这意味着ID较小的服务器（即首先注册的服务器）在服务器列表中将更高</li>
    </ul>
  ',
  'adm_upd_register_do' => '注册服务器',
  'adm_upd_register_already' => '您已经注册了您的服务器。 写下服务器ID和密钥，并将其存放在安全的地方！',
  'adm_upd_register_id' => '注册ID',
  'adm_upd_register_key' => '注册密钥',

  'adm_opt_stats_and_records' => 'Statistics and records',
  'adm_opt_stats_hide_admins' => '隐藏玩家',
  'adm_opt_stats_hide_admins_detail' => '将隐藏所有 authlevel > 0帐户',
  'adm_opt_stats_hide_player_list' => '隐藏玩家',
  'adm_opt_stats_hide_player_list_detail' => '隐藏的玩家ID列表用逗号分隔',
  'adm_opt_stats_schedule' => '统计更新时间表',
  'adm_opt_stats_schedule_detail' => '格式： "[YYYY:[MM:[DD:[HH:[MM:[SS]]]]]][,(...)]"<br />
     零左参数是可选的<br />
     空的参数计数为零<br />
    示例：<br />
     - "00:00:27:00" 表示“每27小时运行一次”;<br />
     - "04::" - "每天凌晨4点运行";<br />
     - "02::,17:00" - "每天凌晨2点运行，每小时17分钟";<br />
     - "1:4:30:00" - "每个月04点30分运行" 等等',
  'adm_opt_stats_hide_pm_link' => '隐藏PM链接',

  'adm_pay' => '支付',
  'adm_pay_th_payer' => '玩家',
  'adm_pay_th_payer_id' => 'ID',
  'adm_pay_th_payer_name' => '名称',
  'adm_pay_th_payment' => '支付',
  'adm_pay_th_payment_id' => 'ID',
  'adm_pay_th_payment_date' => '日期',
  'adm_pay_th_payment_status' => '状态',
  'adm_pay_th_payment_amount' => '数量',
  'adm_pay_th_payment_currency' => '货币',
  'adm_pay_th_mm_paid' => '付费',
  'adm_pay_th_mm_gained' => '获取',
  'adm_pay_th_module' => '支付系统',
  'adm_pay_th_module_name' => '类型',

  'adm_pay_filter_all' => '-- 全部 --',
  'adm_pay_filter_status' => array(
    -1 => '-- 全部 --',
    PAYMENT_STATUS_NONE => '未完成',
    PAYMENT_STATUS_COMPLETE => '已完成',
  ),
  'adm_pay_filter_test' => array(
    -1 => '-- 全部 --',
    0 => '实际',
    1 => '测试',
  ),


  'adm_user_stat' => '用户统计',
  'adm_user_online' => '在线 %s 数量 %s',

  'adm_ban_unban' => '封禁/解封',
  'adm_metametter_payment' => '充值和付款',

  'adm_stat_already_started' => '现在统计数据已经更新',

  'adm_dm_change_hint' => '首先搜索那张ID，然后 - 按名称，然后 - 通过email',

  'adm_matter_change_log_record' => '通过用户管理 {%3$s} %4$s 用户 {%1$d} %2$s 只要由于 "%5$s"',

  'adm_game_status' => '游戏状态',

  'adm_log_delete_update_info' => '删除服务信息数据库，并更新统计引擎',

  'admin_tab_status' => '状态',
  'admin_tab_game' => '游戏',
  'admin_tab_universe' => '宇宙',
  'admin_tab_planets' => '行星',
  'admin_tab_stats_and_records' => '统计',
  'admin_tab_urls' => '引用',
  'admin_tab_players' => '玩家',
  'admin_tab_UBE' => '战斗',
  'admin_tab_advertise' => '广告',

  'admin_tab_universe_main' => '宇宙',
));
