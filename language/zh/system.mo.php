<?php

/*
#############################################################################
#  Filename: system.mo
#  Project: SuperNova.WS
#  Website: http://www.supernova.ws
#  Description: Massive Multiplayer Online Browser Space Startegy Game
#
#  Copyright В© 2011 madmax1991 for Project "SuperNova.WS"
#  Copyright В© 2009 Gorlum for Project "SuperNova.WS"
#  Copyright В© 2008 Aleksandar Spasojevic <spalekg@gmail.com>
#  Copyright В© 2005 - 2008 KGsystem
#############################################################################
*/

/**
*
* @package language
* @system [Chinese]
* @version 40c1.3
*
*/

/**
* DO NOT CHANGE
*/

if (!defined('INSIDE')) {
	die('Hack attempt!');
}

global $config;

$a_lang_array = (array(
  'sys_administration'  => '游戏管理',
  'sys_birthday'  => ' 生日 ',
  'sys_birthday_message'  =>  '%1$s ！XNova管理热忱伟人你与你的生日在 %2$s 并且给你的小礼物 - %3$d %4$s ！ ',

  'adm_err_denied'  => '访问被拒绝。您没有足够的权限来使用此管理页面 ',

  'sys_empire'          => '帝国',
  'VacationMode'			=> "您的生产停止，因为您是在度假",
  'sys_moon_destruction_report' => "月亮是毁灭性的报告",
  'sys_moon_destroyed' => "你的 Deathstar 射击了强大的引力波，摧毁月球 ！",
  'sys_rips_destroyed' => "你的 Deathstar 拍摄强大的引力波，但它有没有足够的力量来摧毁月球由于其大小。但引力波从月球表面反射和毁了你的少女。",
  'sys_rips_come_back' => "你的 Deathstar 没有足够的力量来打败这个月亮。你的少女不摧毁月球。",
  'sys_chance_moon_destroy' => "月亮破坏的机会：",
  'sys_chance_rips_destroy' => "修改爆裂破坏：",

  'sys_impersonate' => '冒充',
  'sys_impersonate_done' => '取消冒充',
  'sys_impersonated_as' => '警告 ！目前你冒充玩家 %1$s。 不要别忘了你是 %2$s ！以 unimpersonate 选择相应的菜单项。',

  'sys_day'  =>  "日",
  'sys_hrs'  =>  "小时",
  'sys_min'  =>  "分钟",
  'sys_sec'  =>  "秒钟",
  'sys_day_short' => "日",
  'sys_hrs_short' => "时",
  'sys_min_short' => "分",
  'sys_sec_short' => "秒",

  'sys_ask_admin' => '问题和建议发送到',

  'sys_wait' => '执行查询，请稍等。',

  'sys_fleets'       => '少女',
  'sys_expeditions'  => '探险',
  'sys_fleet'        => '少女',
  'sys_expedition'   => '探险',
  'sys_event_next'   => '下一事件：',
  'sys_event_arrive' => '将到达',
  'sys_event_stay'   => '将结束的任务',
  'sys_event_return' => '将返回',

  'sys_total'           => "总计",
  'sys_need'				=> '需要',
  'sys_register_date'   => '注册日期',

  'sys_attacker' 		=> "攻方",
  'sys_defender' 		=> "守方",

  'COE_combatSimulator' => "战斗模拟器",
  'COE_simulate'        => "运行模拟器",
  'COE_fleet'           => "少女",
  'COE_defense'         => "少年",
  'sys_coe_combat_start'=> "战斗开始",
  'sys_coe_combat_end'  => "作战成果",
  'sys_coe_round'       => "作战半径",

  'sys_coe_attacker_turn'=> '攻击者的攻击有 %1$s. Defender\'s 盾吸收 %2$s<br />',
  'sys_coe_defender_turn'=> '防御者的攻击有 %1$s. Attacker\'s 盾吸收 %2$s<br /><br /><br />',
  'sys_coe_outcome_win'  => '防御者赢了战斗！<br />',
  'sys_coe_outcome_loss' => '攻击者赢了战斗！<br />',
  'sys_coe_outcome_loot' => '他的战利品是 %1$s 金属、 %2$s 晶体和 %3$s 重氢<br />',
  'sys_coe_outcome_draw' => '大家打了个平手……<br />',
  'sys_coe_attacker_lost'=> '攻击者失去了 %1$s 单位<br />',
  'sys_coe_defender_lost'=> '防御者失去了 %1$s 单位<br />',
  'sys_coe_debris_left'  => '有 %1$s 金属和 %2$s 晶体的垃圾散落在行星轨道上。<br /><br />',
  'sys_coe_moon_chance'  => '这个 %1$s%% 的月亮就这么产生了。<br />',
  'sys_coe_rw_time'      => '报告生成时间为 %1$s <br />',

  'sys_resources'       => "资源",
  'sys_ships'           => "船",
  'sys_metal'          => "金属",
  'sys_metal_sh'       => "金属",
  'sys_crystal'        => "晶体",
  'sys_crystal_sh'     => "晶体",
  'sys_deuterium'      => "重氢",
  'sys_deuterium_sh'   => "重氢",
  'sys_energy'         => "能量",
  'sys_energy_sh'      => "能量",
  'sys_dark_matter'    => "暗物质",
  'sys_dark_matter_sh' => "暗物质",

  'sys_reset'           => "重置",
  'sys_send'            => "发送",
  'sys_characters'      => "字符",
  'sys_back'            => "退回",
  'sys_return'          => "退回",
  'sys_delete'          => "删除",
  'sys_writeMessage'    => "写消息",
  'sys_hint'            => "小费",

  'sys_alliance'        => "联盟",
  'sys_player'          => "球员",
  'sys_coordinates'     => "坐标",

  'sys_online'          => "在线",
  'sys_offline'         => "脱机",
  'sys_status'          => "地位",

  'sys_universe'        => "宇宙",
  'sys_goto'            => "前往",

  'sys_time'            => "时间",
  'sys_temperature'     => '温度',

  'sys_no_task'         => "无任务",

  'sys_affilates'       => "受邀玩家",

  'sys_fleet_arrived'   => "少女到达",

  'sys_planet_type' => array(
    PT_PLANET => '星球', 
    PT_DEBRIS => '太空垃圾', 
    PT_MOON   => '月球',
  ),

  'sys_planet_type_sh' => array(
    PT_PLANET => '(P)', 
    PT_DEBRIS => '(D)', 
    PT_MOON   => '(M)',
  ),

  'sys_planet_expedition' => 'unexplored space',

  'sys_capacity' 			=> 'Load Capacity',
  'sys_cargo_bays' 			=> 'Holds',

  'sys_supernova' 			=> 'XNova',
  'sys_server' 			=> '服务器',

  'sys_unbanned'			=> 'Unbanned',

  'sys_date_time'			=> '日期和时间',
  'sys_from_person'	   => 'From',
  'sys_from_speed'	   => 'from',

  'sys_from'		  => 'from',

// Resource page
  'res_planet_production' => '星球生产',
  'res_basic_starting_resources' => '行星起始资源',
  'res_basic_income' => '基本收入',
  'res_basic_storage_size' => '行星存储大小',
  'res_total' => '总共',
  'res_calculate' => 'Calculate',
  'res_hourly' => '每小时',
  'res_daily' => '每天',
  'res_weekly' => '每周',
  'res_monthly' => '每月',
  'res_storage_fill' => '存储容量',
  'res_hint' => '<ul><li>生产资源<100%意味着能源短缺。 建立更多的发电站或减少生产资源<li>如果您的生产是0%，您可能来自休假模式，并且希望包括所有工厂<li>什么将使所有工厂的提取立即使用资源下拉列表 表。 在休假模式后使用它特别方便</ul>',

// Build page
  'bld_destroy' => '摧毁',
  'bld_create'  => '建造',
  'bld_research' => '研发',
  'bld_hire' => 'Hire',

// Imperium page
  'imp_imperator' => "帝国",
  'imp_overview' => "帝国总览",
  'imp_fleets' => "战斗少女",
  'imp_production' => "生产",
  'imp_name' => "名称",
  'imp_research' => "科研",
  'imp_exploration' => "探索",
  'imp_imperator_none' => "这个宇宙没有这样的皇帝！",
  'sys_fields' => "半径",

// Cookies
  'err_cookie' => "错误！您无法验证用户对Cookie中的信息。<br />清除浏览器中的Cookie，然后 <a href='login" . DOT_PHP_EX . "'>登录</a>或<a href='reg" . DOT_PHP_EX . "'>再次注册新帐户</a>",
// Supported languages
  'zh'              	  => '简体中文',

  'sys_vacation'        => '你的假期截止到',
  'sys_vacation_leave'  => '我休息休息了！',
  'sys_vacation_in'     => '放假',
  'sys_level'           => '级别',
  'sys_level_short'     => '一级',
  'sys_level_max'       => '最高等级',

  'sys_yes'             => '是',
  'sys_no'              => '否',

  'sys_on'              => '同意',
  'sys_off'             => '反对',

  'sys_confirm'         => '继续',
  'sys_save'            => '储存',
  'sys_create'          => '创造',
  'sys_write_message'   => '写信',

// top bar
  'top_of_year' => '年',
  'top_online'			=> '在线玩家',
  
  'sys_first_round_crash_1'	=> '与受影响的少女们联系丢失。',
  'sys_first_round_crash_2'	=> '这意味着它在第一轮的战斗中被摧毁。',

  'sys_ques' => array(
    QUE_STRUCTURES => '建筑',
    QUE_HANGAR     => '少女',
    SUBQUE_DEFENSE => '少年',
    QUE_RESEARCH   => '科研',
  ),

  'navbar_button_expeditions_short' => '卖少女',
  'navbar_button_fleets' => '少女',
  'navbar_button_quests' => '任务',
  'sys_que_structures' => '建筑',
  'sys_que_hangar' => '镇守府',
  'sys_que_research' => '研究',
  'sys_que_research_short' => '科研',
	
  'eco_que' => '队列',
  'eco_que_empty' => '队列为空',
  'eco_que_clear' => '全部清除',
  'eco_que_trim' => '撤消上次',
  'eco_que_artifact' => '使用神器',
	
  'sys_cancel' => '取消',
	
  'sys_overview' => '概览',
  'mod_marchand' => '商人',
  'sys_galaxy' => '银河',
  'sys_system' => '系统',
  'sys_planet' => '行星',
  'sys_planet_title' => '行星式',
  'sys_planet_title_short' => '类型',
  'sys_moon' => '嫦娥奔月',
  'sys_error' => '错误',
  'sys_done' => '完成',
  'sys_no_vars' => '错误初始化变量，指的是政府！',
  'sys_attacker_lostunits' => '%S攻击者失去了单位。',
  'sys_defender_lostunits' => '这位后卫失去%s为单位。',
  'sys_gcdrunits' => '是现在%s%S和%s%s的那些空间坐标。',
  'sys_moonproba' => '月球的机会是：%D %%',
  'sys_moonbuilt' => '感谢的巨大力量的巨大金属和晶体的片被接合和形成的新月%S%S！',
  'sys_attack_title' => '%S.有以下的少女之间的战斗::',
  'sys_attack_attacker_pos' => '攻击%S [%S：%S：%s]的',
  'sys_attack_techologies' => '布防数：%d %%固体数：%d %%装甲：%D %%',
  'sys_attack_defender_pos' => '辩护人%S [%S：%S：%s]的',
  'sys_ship_type' => '类型',
  'sys_ship_count' => '数字',
  'sys_ship_weapon' => '武器',
  'sys_ship_shield' => '盾牌',
  'sys_ship_armour' => '铠甲',
  'sys_ship_speed' => '速度',
  'sys_ship_consumption' => '消费',
  'sys_ship_capacity' => '保持/罐',
  'sys_destroyed' => '销毁',
  'sys_attack_attack_wave' => '一个进攻投篮使得%S的在防守上的总容量。防御盾吸收了%S镜头',
  'sys_attack_defend_wave' => '辩护人使得拍摄由攻击者总量的%s的容量。盾吸收了进攻%S镜头',
  'sys_attacker_won' => '攻击者赢得了这场战斗！',
  'sys_defender_won' => '这位后卫已经赢得了这场战斗！',
  'sys_both_won' => '战斗以平局收场！',
  'sys_stealed_ressources' => '他得到金属%s%S%s%S水晶和%s氘',
  'sys_rapport_build_time' => '在%s秒生成的页面',
  'sys_mess_tower' => '交通',
  'sys_coe_lost_contact' => '你失去了少女通讯',
  'sys_spy_maretials' => '原材料',
  'sys_spy_fleet' => '少女',
  'sys_spy_defenses' => '国防部',
  'sys_mess_qg' => '少女的命令',
  'sys_mess_spy_report' => '间谍报告',
  'sys_mess_spy_lostproba' => '错误信息接收到的卫星%D %%',
  'sys_mess_spy_detect_chance' => '你的侦察少女%D %%的机会发现',
  'sys_mess_spy_control' => '反间谍',
  'sys_mess_spy_activity' => '间谍活动',
  'sys_mess_spy_ennemyfleet' => '从地球外星人少女',
  'sys_mess_spy_seen_at' => '我发现地球附近',
  'sys_mess_spy_destroyed' => '侦察少女被摧毁',
  'sys_mess_spy_destroyed_enemy' => '一个敌特少女被摧毁',
  'sys_object_arrival' => '到了这个星球上',
  'sys_stay_mess_stay' => '少女的调动',
  'sys_stay_mess_start' => '你的少女抵达这个星球上',
  'sys_stay_mess_back' => '你的少女回来',
  'sys_stay_mess_end' => '牵',
  'sys_stay_mess_bend' => '我提供的以下资源：',
  'sys_adress_planet' => '[%s:%s:%s]',
  'sys_stay_mess_goods' => '%s : %s, %s : %s, %s : %s',
  'sys_colo_mess_from' => '殖民',
  'sys_colo_mess_report' => '殖民报告',
  'sys_colo_defaultname' => '殖民地',
  'sys_colo_arrival' => '少女到达坐标',
  'sys_colo_maxcolo' => '但你不能殖民星球，殖民地的最大数目为您的定植水平',
  'sys_colo_allisok' => '和殖民者开始探索新的星球。',
  'sys_colo_badpos' => '和殖民者发现美洲的环境有点低了自己的帝国。定植任务追溯到送星球。',
  'sys_colo_notfree' => '和殖民者没有发现这些坐标的星球。他们要回铺路彻底打消了道路',
  'sys_colo_no_colonizer' => '在海军有殖民者',
  'sys_colo_planet' => '殖民者的星球！',
  'sys_expe_report' => '探险队的报告',
  'sys_recy_report' => '系统信息',
  'sys_expe_blackholl_1' => '你的少女掉进一个黑洞和部分输了！',
  'sys_expe_blackholl_2' => '你的少女掉进一个黑洞，完全丧失！',
  'sys_expe_nothing_1' => '你的研究人员目睹超新星！而您的驱动器不得不采取释放的能量的一部分',
  'sys_expe_nothing_2' => '你们的科学家没有发现任何东西！',
  'sys_expe_found_goods' => '你的科学家发现的行星，丰富的原料！点击你有%s%S，%S%s和%s%s',
  'sys_expe_found_ships' => '你的研究人员已经发现点击你已经收到完美的新车队：',
  'sys_expe_back_home' => '你的少女回来了。',
  'sys_mess_transport' => '交通',
//  'sys_tran_mess_owner' => '你的一个船队到达行星%s%S并传递%s%S，%S%s和%s%s',
  'sys_tran_mess_user' => '从地球少女%s%S已到达%s%S并把%s%S，%S%s和%s%s',
  'sys_relocate_mess_user' => '而且在这个星球上重新安置的下列军事单位：<br />',
  'sys_mess_fleetback' => '返回',
  'sys_tran_mess_back' => '你的一个车队又回到了地球%s%S',
  'sys_recy_gotten' => '一个你的少女的提取%s%S和%s%s的返回地球。',
  'sys_notenough_money' => '你不hvataaet资源建立：%s的。您现在：%s%S，%S%s和%s%s的。对于必要的购建：%s%S，%S%s和%s%s',
  'sys_nomore_level' => '你不能再提高了。它达到最大。等级（%S）。',
  'sys_buildlist' => '建筑名单',
  'sys_buildlist_fail' => '没有建筑物',
  'sys_gain' => '生产',
  'sys_debris' => '碎片',
  'sys_noaccess' => '拒绝访问',
  'sys_noalloaw' => '你被拒绝进入该地区！',
  'sys_governor' => '总督',
	
  'flt_error_duration_wrong' => '无法发送少女 - 有迟迟没有可用插槽。了解更多层次Astrocartography',
  'flt_stay_duration' => '时间',
	
  'flt_mission_expedition' => array(
    'msg_sender' => '远征报告',
    'msg_title' => '远征报告',
    'found_dark_matter' => '获得了 %1$d 的暗物质',
    'found_resources' => "发现资源：\r\n",
    'found_fleet' => "发现少女：\r\n",
    'lost_fleet' => "少女走失：\r\n",
    'outcomes' => array(
      FLT_EXPEDITION_OUTCOME_NONE => array(
        'messages' => array(
          '并未找到任何有价值的线索',
        ),
      ),

      FLT_EXPEDITION_OUTCOME_LOST_FLEET => array(
        'messages' => array(
          '少女是在一个黑洞和部分失去',
        ),
      ),

      FLT_EXPEDITION_OUTCOME_LOST_FLEET_ALL => array(
        'messages' => array(
          '如果你只看到它！它是如此美丽……它给我打电话……（与少女通信中断）',
          // 'Отчёт флота %1$s. Мы завершили исследование сектора. Команда недовольна Эй, ты что делаешь на мостике?! (связь с флотом утеряна)',
          '少女报告 %1$s。一切都是安静的（噪声）（与船队失去通信）',
          '啊啊啊啊啊啊！什么鬼东西！（配机群通信中断）',
          '不明物体。他并没有以标准协议的请求。发送探测进行研究（通讯与船队失去）',
        ),
      ),

      FLT_EXPEDITION_OUTCOME_FOUND_FLEET => array(
        'no_result' => '不幸的是，电脑的少女的总生产能力是不够的，甚至控制最小的船。尝试发送更多的少女和/或更大的少女',
        'messages' => array(
          0 => array(
            '你会发现一个全新的少女',
          ),
          1 => array(
            '你已经找到了少女',
          ),
          2 => array(
            '你已经找到了 б/у 少女',
          ),
        ),
      ),

      FLT_EXPEDITION_OUTCOME_FOUND_RESOURCES => array(
        'no_result' => '握着你的少女无法容纳至少一个容器资源。尝试了大量的运输发送少女',
        'messages' => array(
          0 => array(
            '你会发现海盗宝藏的资源。有多少少女被摧毁，你会收集尽可能多的好？',
          ),
          1 => array(
            '你发现了一个被遗弃的小行星基地。我不知道发生了什么事的居民？探索废墟，你会发现少数库存',
          ),
          2 => array(
            '你跑进破坏运输车队。搜索后，持有的少女失事，你会发现很少的资源',
          ),
        ),
      ),

      FLT_EXPEDITION_OUTCOME_FOUND_DM => array(
        'no_result' => '不幸的是，所有的车队没有该驱动器收集一个单一的TM。尝试发送更多少女',
        'messages' => '你的少女一直目睹超新星的诞生',
        /*
        'messages' => array(
          'Ваш флот стал свидетелем рождения СуперНовы 1',
          'Ваш флот стал свидетелем рождения СуперНовы 2',
          'Ваш флот стал свидетелем рождения СуперНовы 3',
        ),
        */
      ),

    ),
  ),

  // News page & a bit of imperator page
  'news_fresh'      => '大新闻',
  'news_all'        => '所有新闻',
  'news_title'      => '新闻',
  'news_none'       => '没有新闻',
  'news_new'        => '未读',
  'news_future'     => '公告',
  'news_more'       => '更多',
  'news_hint'       => '关闭新鲜的新闻列表 - 通过点击标题[ News ]来阅读它们',

  'news_date'=>'日期',
  'news_announce'=>'目录',
  'news_detail_url'=>'链接到更多信息',
  'news_mass_mail'=>'发送消息给所有玩家',

  'news_total'=>'总消息：',

  'news_add'=>'提交新闻',
  'news_edit'=>'编辑新闻',
  'news_copy'=>'复制新闻',
  'news_mode_new'=>'新',
  'news_mode_edit'=>'编辑',
  'news_mode_copy'=>'复制',

  'sys_administration'=>'服务器管理',

  // 截图
  'shortcut_title'=>'快捷键',
  'shortcut_none'=>'没有快捷方式',
  'shortcut_new'=>'NEW',
  'shortcut_text'=>'文本',

  'shortcut_add'=>'添加快捷方式',
  'shortcut_edit'=>'编辑快捷方式',
  'shortcut_copy'=>'复制快捷方式',
  'shortcut_mode_new'=>'新',
  'shortcut_mode_edit'=>'编辑',
  'shortcut_mode_copy'=>'复制',

  //导弹相关
  'mip_h_launched'=>'发射星际导弹',
  'mip_launched'=>'发射行星际导弹：<b>%s </ b>！',

  'mip_no_silo'=>'星球上的孤岛级别<b>%s </ b>。',
  'mip_no_impulse'=>'你想调查脉搏马达',
  'mip_too_far'=>'火箭不能飞那么远',
  'mip_planet_error'=>'错误 - 多个行星一个坐标',
  'mip_no_rocket'=>'轴上没有足够的导弹进行攻击',
  'mip_hack_attempt'=>'你是黑客？另一个笑话，你将被禁止。 IP地址和登录名被记录。',

  'mip_all_destroyed'=>'所有行星际导弹都被摧毁导弹<br>',
  'mip_destroyed'=>'%s行星际导弹被拦截导弹摧毁。<br>',
  'mip_defense_destroyed'=>'在防御后毁灭：<br />',
  'mip_recycled'=>'从少年的碎片中修复：',
  'mip_no_defense'=>'在受影响的行星保护！',

  'mip_sender_amd'=>'火箭和太空部队',
  'mip_subject_amd'=>'导弹攻击',
  'mip_body_attack'			=> 'Attack of the interplanetary missiles (%1$s PCs.) with the planet %2$s <a href="galaxy.php?mode=3&galaxy=%3$d&system=%4$d&planet=%5$d">[%3$d:%4$d:%5$d]</a> on the planet %6$s <a href="galaxy.php?mode=3&galaxy=%7$d&system=%8$d&planet=%9$d">[%7$d:%8$d:%9$d]</a><br><br>',
  
  //其他
  'sys_game_rules'=>'游戏规则',
  'sys_game_documentation'=>'文档',
  'sys_max'=>'Max',
  'sys_banned_msg'=>'你被禁止有关详细信息，请访问<a href="banned.php">此处</a>。帐号禁令时间：',
  'sys_total_time'=>'总时间',
  'sys_total_time_short'=>'Que time',

  // Univers
  'uni_moon_of_planet'=>'planet',

  //战斗报告
  'cr_view_title'=>'查看战斗报告',
  'cr_view_button'=>'查看报告',
  'cr_view_prompt'=>'输入代码',
  'cr_view_my'=>'我的战斗记录',
  'cr_view_hint'=>'此页面允许您查看共享的战斗报告，所有战斗报告将在底部显示代码，要共享战斗报告，只需提供该代码，然后可以在此处输入，并查看”战斗报告“。',

  //少女们
  'flt_gather_all'=>'收集资源',
  
  //禁止系统
  'ban_title'=>'黑名单',
  'ban_name'=>'名称',
  'ban_reason'=>'禁止的原因',
  'ban_from'=>'禁止数据',
  'ban_to'=>'禁止使用期限',
  'ban_by'=>'发行',
  'ban_no'=>'禁止玩家',
  'ban_thereare'=>'总计',
  'ban_players'=>'禁止',
  'ban_banned'=>'玩家被禁止',

  //联系人
  'ctc_title'=>'管理',
  'ctc_intro'=>'您可以在这里找到游戏的所有管理员和运营商的地址，以获得反馈意见。',
  'ctc_name'=>'名称',
  'ctc_rank'=>'Rank',
  'ctc_mail'=>'电子邮件',

  //记录页面
  'rec_title'=>'宇宙记录',
  'rec_build'=>'建筑',
  'rec_specb'=>'特别大厦',
  'rec_playe'=>'玩家',
  'rec_defes'=>'少年',
  'rec_fleet'=>'少女们',
  'rec_techn'=>'技术',
  'rec_level'=>'Level',
  'rec_nbre'=>'Number',
  'rec_rien'=>' - ',

  //信用页
  'cred_link'=>'Internet',
  'cred_site'=>'站点',
  'cred_forum'=>'论坛',
  'cred_credit'=>'作者',
  'cred_creat'=>'导演',
  'cred_prog'=>'程序员',
  'cred_master'=>'主持人',
  'cred_design'=>'DesignerСЂ',
  'cred_web'=>'网站管理员',
  'cred_thx'=>'谢谢',
  'cred_based'=>'建立XNova的基础',
  'cred_start'=>'地方首演XNova',

  //内置聊天
  'chat_common'=>'通用聊天',
  'chat_ally'=>'Ally chat',
  'chat_history'=>'历史',
  'chat_message'=>'消息',
  'chat_send'=>'发送',
  'chat_page'=>'Page',
  'chat_timeout'=>'聊天被禁用。刷新页面。',

  // ------------------------------------------------ -------------------------------------------------- --------
  //跳闸界面
  'gate_start_moon'=>'Home Moon',
  'gate_dest_moon'=>'目的地月球',
  'gate_use_gate'=>'使用门',
  'gate_ship_sel'=>'选择船',
  'gate_ship_dispo'=>'照片',
  'gate_jump_btn'=>'jump !!',
  'gate_jump_done'=>'盖茨正在重新加载！<br>盖茨将可以通过以下方式使用：',
  'gate_wait_dest'=>'目的地门正在准备！门将准备使用：',
  'gate_no_dest_g'=>'最终的目的地没有打开门来移动少女们',
  'gate_no_src_ga'=>'当前月球上没有门',
  'gate_wait_star'=>'盖茨正在重新加载！<br>盖茨将准备使用：',
  'gate_wait_data'=>'错误，没有数据可以跳！',
  'gate_vacation'=>'错误，你不能跳跃，因为你在度假模式！',
  'gate_ready'=>'门准备跳',

  // 任务
  'qst_quests'               => '任务',
  'qst_msg_complete_subject' => '你已完成任务！',
  'qst_msg_complete_body'    => '你完成了任务“%s”.',
  'qst_msg_your_reward'      => '你还剩：',

  // Messages
  'msg_from_admin' => '宇宙管理',
  'msg_class' => array(
    MSG_TYPE_OUTBOX => '发送消息',
    MSG_TYPE_SPY => '探测报告',
    MSG_TYPE_PLAYER => '星球报告',
    MSG_TYPE_ALLIANCE => '联盟信息',
    MSG_TYPE_COMBAT => '战斗报告',
    MSG_TYPE_RECYCLE => '回收报告',
    MSG_TYPE_TRANSPORT => '少女报告',
    MSG_TYPE_ADMIN => '管理信息',
    MSG_TYPE_EXPLORE => '远征报告',
    MSG_TYPE_QUE => 'Message queue structures',
    MSG_TYPE_NEW => '所有消息',
  ),

  'msg_que_research_from'    => '研究所',
  'msg_que_research_subject' => '新技术',
  'msg_que_research_message' => '研究新技术 \'%s\'. 新的水平 - %d',

  'msg_que_planet_from'    => '州长',

  'msg_que_hangar_subject' => '在造船厂完成的工作',
  'msg_que_hangar_message' => "在%s造船厂完成",

  'msg_que_built_subject'   => '卫星工作完成',
  'msg_que_built_message'   => "建筑 '%2\$s' 施工 %1\$s. 建设水平: %3\$d",
  'msg_que_destroy_message' => "建筑 '%2\$s' 全部毁坏 %1\$s. 销毁水平: %3\$d",

  'msg_personal_messages' => '私人信息',

  'sys_opt_bash_info'    => '系统设置',
  'sys_opt_bash_attacks' => '一波攻击的数量',
  'sys_opt_bash_interval' => '攻势间隔',
  'sys_opt_bash_scope' => '计算期间猛击',
  'sys_opt_bash_war_delay' => '宣战后暂停',
  'sys_opt_bash_waves' => '波的一个周期的数目',
  'sys_opt_bash_disabled'    => '系统关闭',

  'sys_id' => 'id',
  'sys_identifier' => '识别码',

  'sys_email'   => 'Е-mail',
  'sys_ip' => 'IP',

  'sys_max' => '最大',
  'sys_maximum' => '最大值',
  'sys_maximum_level' => '最大值',

  'sys_user_name' => '用户名',
  'sys_player_name' => '玩家名称',
  'sys_user_name_short' => '名称',

  'sys_planets' => '行星',
  'sys_moons' => '月球',

  'sys_quantity' => '编号',
  'sys_quantity_maximum' => '最大值',
  'sys_qty' => '的数量',
  'sys_quantity_total' => '总计',

  'sys_buy_for' => '购买关于',
  'sys_buy' => '购买',
  'sys_for' => '超过',

  'sys_eco_lack_dark_matter' => '没有足够的暗物质',

  'time_local' => '本地时间',
  'time_server' => '当前服务器时间',

  'sys_result' => array(
    'error_dark_matter_not_enough' => '没有足够的暗物质来完成操作',
    'error_dark_matter_change' => '无法改变的暗物质的量！再次重复操作。如果问题仍然存在 - 通知管理服务器',
  ),

  'sys_result' => array(
    'error_dark_matter_not_enough' => 'Не хватает Тёмной Материи для завершения операции',
    'error_dark_matter_change' => 'Ошибка изменения количества Тёмной Материи! Повторите операцию еще раз. Если ошибка повторится - сообщите Администрации сервера',
  ),

  // Arrays
  'sys_build_result' => array(
    BUILD_ALLOWED => '可以建造',
    BUILD_REQUIRE_NOT_MEET => '条件不足',
    BUILD_AMOUNT_WRONG => '数量已满',
    BUILD_QUE_WRONG => '需求未满足',
    BUILD_QUE_UNIT_WRONG => '单位错误',
    BUILD_INDESTRUCTABLE => '无法摧毁',
    BUILD_NO_RESOURCES => '资源不足',
    BUILD_NO_UNITS => '单位不足',
    BUILD_UNIT_BUSY => array(
      0 => '工作中',
      STRUC_LABORATORY => 'Research ongoing',
      STRUC_LABORATORY_NANO => 'Research ongoing',
    ),
    BUILD_QUE_FULL => 'Que is full',
    BUILD_SILO_FULL => 'Silo is full',
    BUILD_MAX_REACHED => 'You already build and/or enqued maximum numbers of this type units',
    BUILD_SECTORS_NONE => 'No free sectors',
    BUILD_AUTOCONVERT_AVAILABLE => 'Autoconvert available',
  ),

  'sys_game_mode' => array(
    GAME_SUPERNOVA => 'SuperNova',
    GAME_OGAME     => 'oGame',
    GAME_BLITZ     => 'Blitz',
  ),

  'months' => array(
    '01'=>'1月',
    '02'=>'2月',
    '03'=>'3月',
    '04'=>'4月',
    '05'=>'5月',
    '06'=>'6月',
    '07'=>'7月',
    '08'=>'8月',
    '09'=>'9月',
    '10'=>'10月',
    '11'=>'11月',
    '12'=>'12月',
  ),

  'weekdays' => array(
    0 => '周日',
    1 => '周一',
    2 => '周二',
    3 => '周三',
    4 => '周四',
    5 => '周五',
    6 => '周六'
  ),

  'user_level' => array(
    0 => '玩家',
    1 => '参与者',
    2 => '行政员',
    3 => '管理员',
    4 => '开发者',
  ),

  'user_level_shortcut' => array(
    0 => 'P',
    1 => 'M',
    2 => 'O',
    3 => 'A',
    4 => 'D',
  ),

  'sys_lessThen15min'   => '&lt; 15 min',

  'sys_no_points'        => '你的暗物质不足。',
  'sys_dark_matter_obtain_header' => '获取暗物质',
  'sys_dark_matter_desc' => 'Dark matter - using the standard methods of  fabric, which accounts for 23% mass of the universe. From there you can obtain an incredible amount of energy. Because of this, and because of the complexities associated with its extraction, Dark Matter is valued very highly.',
  'sys_dark_matter_hint' => 'With the help of this substance you can hire officers and commanders.',

  'sys_dark_matter_what_header' => 'What is <span class="dark_matter">Dark Matter</span>',
  'sys_dark_matter_description_header' => 'Why do you need <span class="dark_matter">Dark Matter</span>',
  'sys_dark_matter_description_text' => '<span class="dark_matter">Dark Matter</span> is ingame currency, which in the game you can make a variety of operations:
    <ul>
      <li>Buy <a href="index.php?page=premium"><span class="link">Premium account</span></a></li>
      <li>Recruit <a href="officer.php?mode=600"><span class="link">Mercenaries</span></a> for Empire</li>
      <li>Hire Governors and but additional sectors <a href="overview.php?mode=manage"><span class="link">for planets</span></a></li>
      <li>Buy <a href="officer.php?mode=1100"><span class="link">Schematics</span></a></li>
      <li>Buy <a href="artifacts.php"><span class="link">Artefacts</span></a></li>
      <li>Use <a href="market.php"><span class="link">Black Market</span></a>: exchange resources; sell ships; buy ships; buy intelligence etc</li>
      <li>...and many other things</li>
    </ul>',
  'sys_dark_matter_obtain_text' => 'You acquring <span class="dark_matter">Dark Matter</span> in game process: while gained levels for raids to enemy planets, researching technologies, building and destroying buildings.
    Also sometimes expeditions can gain you some <span class="dark_matter">DM</span>.',

//  'sys_dark_matter_obtain_text_convert' => '<br />Besides, you can convert Metamatter to Dark Matter. <a href="metamatter.php" class="link">More about Metamatter</a>',
  'sys_dark_matter_obtain_text_convert' => '<br />If you lack <span class="dark_matter">Dark Matter</span> - purchase the <span class="metamatter">Metamatter</span>. If you have not enough <span class="dark_matter">DM</span> needed amount of <span class="metamatter">Metamatter</span> would be used instead of <span class="dark_matter">DM</span>',

  'sys_msg_err_update_dm' => 'Error updating DM quantity!',

  'sys_na' => '不可用',
  'sys_na_short' => 'N/A',

  'sys_ali_res_title' => '联盟资源',

  'sys_bonus' => 'Bonus',

  'sys_of_ally' => 'of Alliance',

  'sys_hint_player_name' => 'You can search player by his ID or name. If player name consists from strange symbols or only from numbers - you should use player ID for search.',
  'sys_hint_ally_name' => 'You can search Alliance by his ID, tag or name. If Alliance\'s tag or name consists from strange symbols or only from numbers - you should use ally ID for search.',

  'sys_fleet_and' => '+ fleets',

  'sys_on_planet' => 'On planet',
  'fl_on_stores' => 'In stock',

  'sys_ali_bonus_members' => 'Minimum Alliance size for Ally bonus ',

  'sys_premium' => 'Premium account',

  'mrc_period_list' => array(
    PERIOD_MINUTE    => '1分钟',
    PERIOD_MINUTE_3  => '3分钟',
    PERIOD_MINUTE_5  => '5分钟',
    PERIOD_MINUTE_10 => '10分钟',
    PERIOD_DAY       => '1天',
    PERIOD_DAY_3     => '3天',
    PERIOD_WEEK      => '1星期',
    PERIOD_WEEK_2    => '2星期',
    PERIOD_MONTH     => '30天',
    PERIOD_MONTH_2   => '60天',
    PERIOD_MONTH_3   => '90天',
  ),

  'sys_sector_buy' => 'Buy 1 sector',

  'sys_select_confirm' => '应用选项',

  'sys_capital' => 'Capital',

  'sys_result_operation' => 'Outcome',

  'sys_password' => '密码',
  'sys_password_length' => 'Password length',
  'sys_password_seed' => 'Used characters',

  'sys_msg_ube_report_err_not_found' => 'Battle report not found - check cypher key. It is possible that battle report was deleted as outdated',

  'sys_mess_attack_report' 	=> '战斗报告',
  'sys_perte_attaquant' 		=> '攻击方消耗',
  'sys_perte_defenseur' 		=> '防御方消耗',


  'ube_report_info_page_header' => '战斗报告',
  'ube_report_info_page_header_cypher' => 'Access code',
  'ube_report_info_main' => 'Main battle info',
  'ube_report_info_date' => 'Date and time',
  'ube_report_info_location' => 'Location',
  'ube_report_info_rounds_number' => 'Round number',
  'ube_report_info_outcome' => 'Battle outcome',
  'ube_report_info_outcome_win' => 'Attacker win',
  'ube_report_info_outcome_loss' => 'Attacker lost',
  'ube_report_info_outcome_draw' => 'Draw',
  'ube_report_info_link' => 'Link to battle rport',
  'ube_report_info_sfr' => 'Battle finshed in one round by attacker loss<br />Possible SFR',
  'ube_report_info_debris' => 'Debris on orbit',
  'ube_report_info_loot' => 'Loot',
  'ube_report_info_loss' => 'Battle losses',
  'ube_report_info_generate' => 'Page generation time',

  'ube_report_moon_was' => 'This planet already had moon',
  'ube_report_moon_chance' => 'Moon chance',
  'ube_report_moon_created' => 'On planet orbit appears new moon diameter',

  'ube_report_moon_reapers_none' => 'All ships with graviton engines was destroyed during fight',
  'ube_report_moon_reapers_wave' => 'Attacker\'s ship created focused gravitation wave',
  'ube_report_moon_reapers_chance' => 'Moon destruction chance',
  'ube_report_moon_reapers_success' => 'Moon destroyed',
  'ube_report_moon_reapers_failure' => 'Graviton wave power was not enough to destroy moon',

  'ube_report_moon_reapers_outcome' => 'Graviton engines self-desctruction chance',
  'ube_report_moon_reapers_survive' => 'Graviton engines was succesfully synchronized and compensated graviton recoil',
  'ube_report_moon_reapers_died' => 'Graviton engines self-destructs and destroy all your fleet',

  'ube_report_side_attacker' => '攻击方',
  'ube_report_side_defender' => '防御方',

  'ube_report_round' => 'Round',
  'ube_report_unit' => 'Unit',
  'ube_report_attack' => 'Attack',
  'ube_report_shields' => 'Shields',
  'ube_report_shields_passed' => 'Puncture',
  'ube_report_armor' => 'Armor',
  'ube_report_damage' => 'Damage',
  'ube_report_loss' => 'Losses',

  'ube_report_info_restored' => 'Defense unit recovered',
  'ube_report_info_loss_final' => 'Total unit loss',
  'ube_report_info_loss_resources' => 'Loss in resources',
  'ube_report_info_loss_dropped' => 'Resource loss due reduced cargo capacity',
  'ube_report_info_loot_lost' => 'Resources looted from planet',
  'ube_report_info_loss_gained' => 'Resource loss due planet loot',
  'ube_report_info_loss_in_metal' => 'Total resources lost in metal',

  'ube_report_msg_body_common' => 'Battle on %s on orbit of %s [%d:%d:%d] %s<br />%s<br /><br />',
  'ube_report_msg_body_debris' => 'There are debris appears on planet orbit:<br />',
  'ube_report_msg_body_sfr' => 'You lost contact with your fleet',

  'ube_report_capture' => 'Planet capture',
  'ube_report_capture_result' => array(
    UBE_CAPTURE_DISABLED => 'Захват планет отключён',
    UBE_CAPTURE_NON_PLANET => 'Захватывать можно только планеты',
    UBE_CAPTURE_NOT_A_WIN_IN_1_ROUND => 'Для захвата планеты бой должен закончиться победой в первом раунде',
    UBE_CAPTURE_TOO_MUCH_FLEETS => 'При захвате планеты в бою должен участвовать только флот-захватчик и планетарный флот',
    UBE_CAPTURE_NO_ATTACKER_USER_ID => 'ВНУТРЕННЯЯ ОШИБКА - Нет ИД атакующего! Сообщите разработчику!',
    UBE_CAPTURE_NO_DEFENDER_USER_ID => 'ВНУТРЕННЯЯ ОШИБКА - Нет ИД защитника! Сообщите разработчику!',
    UBE_CAPTURE_CAPITAL => 'Нельзя захватывать столицу',
    UBE_CAPTURE_TOO_LOW_POINTS => 'Можно захватывать планеты только у игроков, чье общее количество очков не менее чем в 2 раза больше количество очков у атакующего',
    UBE_CAPTURE_NOT_ENOUGH_SLOTS => 'Больше нет слотов захвата планеты',
    UBE_CAPTURE_SUCCESSFUL => 'Планета захвачена атакующим игроком',
  ),

  'sys_kilometers_short' => '公里',

  'ube_simulation' => 'Simulation',

  'sys_hire_do' => 'Hire',

  'sys_captains' => 'Captains',

  'sys_fleet_composition' => 'Fleet composition',

  'sys_continue' => '继续',

  'uni_planet_density_types' => array(
    PLANET_DENSITY_NONE => 'Never happens',
    PLANET_DENSITY_ICE_HYDROGEN => '氢冰星',
    PLANET_DENSITY_ICE_METHANE => '甲烷星',
    PLANET_DENSITY_ICE_WATER => '冰水星',
    PLANET_DENSITY_CRYSTAL_RAW => '水晶星',
    PLANET_DENSITY_CRYSTAL_SILICATE => '硅酸盐星',
    PLANET_DENSITY_CRYSTAL_STONE => '石灰星',
    PLANET_DENSITY_STANDARD => '宜居星球',
    PLANET_DENSITY_METAL_ORE => '矿物星',
    PLANET_DENSITY_METAL_PERIDOT => '橄榄星',
    PLANET_DENSITY_METAL_RAW => '金属星',
  ),

  'sys_planet_density' => 'Density',
  'sys_planet_density_units' => 'kg/m&sup3;',
  'sys_planet_density_core' => 'Core type',

  'sys_change' => '改变',
  'sys_show' => 'Show',
  'sys_hide' => 'Hide',
  'sys_close' => 'Close',
  'sys_unlimited' => 'Unlimited',

  'ov_core_type_current' => 'Current core type',
  'ov_core_change_to' => '改为',
  'ov_core_err_none' => 'Planet core type succesfully changed from "%s" to "%s".<br />New average planet density %d kg/m3',
  'ov_core_err_not_a_planet' => 'Only planet core type could be changed',
  'ov_core_err_denisty_type_wrong' => 'Wrong core type',
  'ov_core_err_same_density' => 'New core type does not differ from current one - nothing to change',
  'ov_core_err_no_dark_matter' => 'There are not enough Dark Matter to change core type',

  'sys_color'  => "颜色",
  'topnav_imp_attack' => '你遭到攻击',
  'topnav_user_rank' => 'Your current place in statistic',
  'topnav_users' => 'Number of registered players',
  'topnav_users_online' => 'Now online',

  'topnav_refresh_page' => '刷新页面',

  'sys_colonies' => 'Colonies',
  'sys_radio' => '"Space" radio',

  'sys_auth_provider_list' => array(
    ACCOUNT_PROVIDER_NONE => 'Таблица USERS',
    ACCOUNT_PROVIDER_LOCAL => 'Таблица ACCOUNT',
    ACCOUNT_PROVIDER_CENTRAL => 'Центральная таблица ACCOUNT',
  ),

  'sys_login_messages' => array(
    LOGIN_UNDEFINED => 'Login process does not started',
    LOGIN_SUCCESS => 'Login succesfull',
    LOGIN_ERROR_USERNAME_EMPTY => 'Имя игрока не может быть пустым',
    LOGIN_ERROR_USERNAME_RESTRICTED_CHARACTERS => 'В имени игрока и логине не допускаются символы ',
    LOGIN_ERROR_USERNAME => 'There is no player with such name',
    LOGIN_ERROR_USERNAME_ALLY_OR_BOT => 'Это имя принадлежит Альянсу или боту. Под ним нельзя логиниться... по крайней мере пока',
    LOGIN_ERROR_PASSWORD_EMPTY => 'Пароль не может быть пустым',
    LOGIN_ERROR_PASSWORD_TRIMMED => 'Пароль не может начинаться или заканчиваться пробелом, табуляцией или символом перевода строки',
    LOGIN_ERROR_PASSWORD => 'Wrong password',
    //    LOGIN_ERROR_COOKIE => '',

    REGISTER_SUCCESS => 'Registration succesfully complete',
    REGISTER_ERROR_BLITZ_MODE => 'Регистрация новых игроков в режиме Блиц-сервера отключена',
    REGISTER_ERROR_USERNAME_WRONG => 'Wrong player name',
    REGISTER_ERROR_ACCOUNT_NAME_EXISTS => 'Account name already registered',
    REGISTER_ERROR_PASSWORD_INSECURE => 'Insecure or wrong password. Password should be at least ' . PASSWORD_LENGTH_MIN . ' characters long and cannot start or end with spaces',
    REGISTER_ERROR_USERNAME_SHORT => 'Слишком короткое имя. Имя должно состоять минимум из ' . LOGIN_LENGTH_MIN. ' символов',
    REGISTER_ERROR_PASSWORD_DIFFERENT => 'Password does not match confirmation password',
    REGISTER_ERROR_EMAIL_EMPTY => 'Е-Мейл не может быть пустым',
    REGISTER_ERROR_EMAIL_WRONG => 'Введенный Е-Мейл не является адресом электронной почты',
    REGISTER_ERROR_EMAIL_EXISTS => 'This email already registered. If you already registered try password reset option. Otherwise use other email address',

    PASSWORD_RESTORE_ERROR_EMAIL_NOT_EXISTS => 'There is no player with such base email',
    PASSWORD_RESTORE_ERROR_TOO_OFTEN => 'You can request password restoration code only once per 10 minutes. Check your SPAM folder for restoration code or contact server administration via email <span class="ok">' . $config->server_email . '</span> from your main email (email which you used for registration)',
    PASSWORD_RESTORE_ERROR_SENDING => 'There is error sending email with restore code. Contact server administration via email <span class="ok">' . $config->server_email . '</span>',
    PASSWORD_RESTORE_SUCCESS_CODE_SENT => 'Restoration code successfully sent',

    PASSWORD_RESTORE_ERROR_CODE_EMPTY => 'Restoration code can not be empty',
    PASSWORD_RESTORE_ERROR_CODE_WRONG => 'Wrong restoration code',
    PASSWORD_RESTORE_ERROR_CODE_TOO_OLD => 'Restoration code is too old. Get new one',
    PASSWORD_RESTORE_ERROR_CODE_OK_BUT_NO_ACCOUNT_FOR_EMAIL => 'Код восстановления указан верно, однако не найдено ни одного аккаунта с таким емейлом. Возможно, он был удалён или произошла внутренняя ошибка. Обратитесь к Администрации сервера',
    PASSWORD_RESTORE_SUCCESS_PASSWORD_SENT => 'Email with new password successfully sent to your email',
    PASSWORD_RESTORE_SUCCESS_PASSWORD_SEND_ERROR => 'Error sending new password. Get new restoration code and try again',


    REGISTER_ERROR_PLAYER_NAME_TRIMMED => 'Player name can not starts or ends with "empty characters" (characters like "Space", "Tabulation", "New line" etc)',
    REGISTER_ERROR_PLAYER_NAME_EMPTY => 'Player name can not be empty',
    REGISTER_ERROR_PLAYER_NAME_RESTRICTED_CHARACTERS => 'Player name contains forbidden characters',
    REGISTER_ERROR_PLAYER_NAME_SHORT => 'Player name should have ' . LOGIN_LENGTH_MIN . ' characters at least',
    REGISTER_ERROR_PLAYER_NAME_EXISTS => 'This player name is already owned by someone. Please choose another name',


    // Внутренние ошибки
    AUTH_ERROR_INTERNAL_PASSWORD_CHANGE_ON_RESTORE => 'Password change error. Contact server administration',
    PASSWORD_RESTORE_ERROR_ADMIN_ACCOUNT => 'Forbidden to restore password for member of Server Team. Contact Administrator directly',
    REGISTER_ERROR_ACCOUNT_CREATE => 'Error creating account! Please, message Administration about this error!',
    LOGIN_ERROR_SYSTEM_ACCOUNT_TRANSLATION => 'СИСТЕМНАЯ ОШИБКА - СБОЙ В ТАБЛИЦЕ ТРАНСЛЯЦИИ ПРОВАЙДЕРОВ! Сообщите администрации сервера!',
    PASSWORD_RESTORE_ERROR_ACCOUNT_NOT_EXISTS => 'Account not found! Contact server administration!',
    AUTH_PASSWORD_RESET_INSIDE_ERROR_NO_ACCOUNT_FOR_CONFIRMATION => 'INTERNAL ERROR! No account to change password on confirmation code. Please, report to Universe Administration!',
    LOGIN_ERROR_NO_ACCOUNT_FOR_COOKIE_SET => 'INTERNAL ERROR! No account for cookie_set()! Please, report to Universe Administration!',
  ),

  'log_reg_email_title' => "Your registration on SuperNova game server %1\$s",
  'log_reg_email_text' => "Registration confirmation for account %3\$s\r\n\r\n
  This letter contains registration data on SuperNova game server %1\$s
  Store this data in safe place\r\n\r\n
  Server address: %2\$s\r\n
  Your login: %3\$s\r\n
  Your password: %4\$s\r\n\r\n
  Thank you for registering on our server! We wish you luck in game!\r\n
  Server administration %1\$s %2\$s\r\n\r\n
  Powered by OpenSource engine 'Project SuperNova.WS'. Light your SuperNova http://supernova.ws/",

  'log_lost_email_title' => 'Supernova, Universe %s: Password reset',
  'log_lost_email_code' => "Someone (possibly you) has requested a reset password on SuperNova Universe %4\$s . If you did not request reset password-then just ignore this email.\r\n\r\nFor password reset, go to the address \r\n%1\$s?password_reset_confirm=1&password_reset_code=%2\$s#tab_password_reset\r\nor enter the confirmation code \"%2\$s\" (WITHOUT THE DOUBLE QUOTES!) on the page %1\$s#tab_password_reset This code will be valid up to %3\$s. After the password reset you will need to request a new confirmation code",
  'log_lost_email_pass' => "You changed your password on the SuperNova Universe %1\$s.\r\n\r\nYou login:\r\n%2\$s\r\n\r\nYour new password:\r\n%3\$s\r\n\r\nRemember it!\r\n\r\nYou can enter into game following link " . SN_ROOT_VIRTUAL . "login.php and using provided login and password",

  'sys_password_reset_message_body' => "Your password to accessing this Universe was reset.\r\n\r\nYour new password is:\r\n\r\n%1\$s\r\n\r\nRemember your password!\r\n\r\nYou can change it any time to one that suits you on 'Settings' menu",

  'sys_login_password_show' => 'Show password',
  'sys_login_password_hide' => 'Hide password',
  'sys_password_repeat' => 'Confirm password',

  'sys_game_disable_reason' => array(
    GAME_DISABLE_NONE => 'Game is enabled',
    GAME_DISABLE_REASON => 'Game is disabled. Players will see reason',
    GAME_DISABLE_UPDATE => 'Game is updating',
    GAME_DISABLE_STAT => 'Statistics update in progress',
    GAME_DISABLE_INSTALL => 'Game is not configured yet',
    GAME_DISABLE_EVENT_BLACK_MOON => 'Black Moon Rising!',
  ),

  'sys_sector_purchase_log' => 'User {%2$d} {%1$s} purchased 1 sector on planet {%5$d} {%3$s} type "%4$s" for %6$d DM',

  'sys_notes' => 'Notes',
  'sys_notes_priorities' => array(
    0 => 'Low priority',
    1 => 'Below normal',
    2 => 'Normal',
    3 => 'Important',
    4 => 'Very important',
  ),

  'sys_milliseconds' => 'milliseconds',

  'sys_gender' => 'Gender',
  'sys_gender_list' => array(
    GENDER_UNKNOWN => 'Will decide - when grew up',
    GENDER_MALE => 'Male',
    GENDER_FEMALE => 'Female',
  ),

  'imp_stat_header' => 'График изменений',
  'imp_stat_types' => array(
    'TOTAL_RANK' => 'Место в общей статистике',
    'TOTAL_POINTS' => 'Общее количество очков',
    // 'TOTAL_COUNT' => 'Общее количество ресурсов',
    'TECH_RANK' => 'Место в статистике по Исследованиям',
    'TECH_POINTS' => 'Количество очков за Исследования',
    // 'TECH_COUNT' => 'Количество уровней',
    'BUILD_RANK' => 'Место в статистике по Постройкам',
    'BUILD_POINTS' => 'Количество очков за Постройки',
    // 'BUILD_COUNT' => '',
    'DEFS_RANK' => 'Место в статистике по Обороне',
    'DEFS_POINTS' => 'Количество очков за Оборону',
    //'DEFS_COUNT' => '',
    'FLEET_RANK' => 'Место в статистике по Кораблям',
    'FLEET_POINTS' => 'Количество очков за Корабли',
    //'FLEET_COUNT' => '',
    'RES_RANK' => 'Место в статистике по свободным ресурсам',
    'RES_POINTS' => 'Количество очков за свободные ресурсы',
    //'RES_COUNT' => '',
  ),

  'sys_date' => 'Date',

  'sys_blitz_global_button' => 'Блиц-сервер',
  'sys_blitz_page_disabled' => 'В режиме Блиц-сервера эта страница недоступна',
  'sys_blitz_registration_disabled' => 'Регистрация на игру в Блиц-сервер отключена',
  'sys_blitz_registration_no_users' => 'Нет зарегестрированных игроков',
  'sys_blitz_registration_player_register' => 'Зарегестрироваться для игры',
  'sys_blitz_registration_player_register_un' => 'Отозвать регистрацию',
  'sys_blitz_registration_closed' => 'Регистрация пока закрыта. Попробуйте зайти позже',
  'sys_blitz_registration_player_generate' => 'Сгенерировать логины и пароли',
  'sys_blitz_registration_player_import_generated' => 'Импортировать сгенерированную строку',
  'sys_blitz_registration_player_name' => 'Ваш логин для Блиц-сервера:',
  'sys_blitz_registration_player_password' => 'Ваш пароль для Блиц-сервера:',
  'sys_blitz_registration_server_link' => 'Ссылка на Блиц-сервер',
  'sys_blitz_registration_player_blitz_name' => 'Имя на Блиц-сервере',
  'sys_blitz_registration_price' => 'Стоимость подачи заявки',
  'sys_blitz_registration_mode_list' => array(
    BLITZ_REGISTER_DISABLED => 'Регистрация отключена',
    BLITZ_REGISTER_OPEN => 'Регистрация открыта',
    BLITZ_REGISTER_CLOSED => 'Регистрация закрыта',
    BLITZ_REGISTER_SHOW_LOGIN => 'Открыты логины и пароли',
    BLITZ_REGISTER_DISCLOSURE_NAMES => 'Подведение итогов',
  ),

  'survey' => 'Опрос',
  'survey_questions' => 'Варианты для выбора',
  'survey_questions_hint' => '1 вариант на строку',
  'survey_questions_hint_edit' => 'Редактированние опроса обнулит его результаты',
  'survey_until' => 'Длительность опроса (1 сутки по умолчанию)',

  'survey_votes_total_none' => 'Еще никто не проголосовал... Проголосуй первым!',
  'survey_votes_total_voted' => 'Уже проголосовало:',
  'survey_votes_total_voted_join' => 'Голосуй - или проиграешь!',
  'survey_votes_total_voted_has_answer' => 'Вы уже проголосовали. Вместе с вами проголосовавших',

  'survey_lasts_until' => 'Опрос продлится до',

  'survey_select_one' => 'Выберите один вариант ответа и нажмите',
  'survey_confirm' => 'Проголосовать!',
  'survey_result_sent' => 'Ваш голос учтен. Обновите страницу или воспользуйтесь ссылкой <a class="link" href="announce.php">Новости</a> что бы увидеть текущие результаты опроса',
  'survey_complete' => 'Опрос завершен',

  'player_option_fleet_ship_sort' => array(
    PLAYER_OPTION_SORT_DEFAULT => '状态',
    PLAYER_OPTION_SORT_NAME => 'By name',
    PLAYER_OPTION_SORT_SPEED => 'By ship speed',
    PLAYER_OPTION_SORT_COUNT => 'By ship quantity',
    PLAYER_OPTION_SORT_ID => 'By ID',
  ),

  'player_option_building_sort' => array(
    PLAYER_OPTION_SORT_DEFAULT => 'Standard',
    PLAYER_OPTION_SORT_NAME => 'By name',
    PLAYER_OPTION_SORT_ID => 'By ID',
    PLAYER_OPTION_SORT_CREATE_TIME_LENGTH => 'By building time',
  ),

  'sys_sort' => 'Sort',
  'sys_sort_inverse' => 'Reverse order',

  'sys_blitz_reward_log_message' => 'Блиц-сервер %1$d призовое место блиц-имя "%2$s"',
  'sys_blitz_registration_view_stat' => 'Посмотреть статистику Блиц-сервера',

  'sys_login_register_message_title' => "Ваше имя и пароль для входа в игру",
  'sys_login_register_message_body' => "Ваше имя для входа в игру (логин)\r\n%1\$s\r\n\r\nВаш пароль для входа в игру\r\n%2\$s\r\n\r\nЗапишите или запомните эти данные!",

  'auth_provider_list' => array(
    ACCOUNT_PROVIDER_NONE => '表用户',
    ACCOUNT_PROVIDER_LOCAL => '表帐户',
    ACCOUNT_PROVIDER_CENTRAL => '中央存储库',
  ),

  'bld_autoconvert' => '在这个星球上创建时自动转换 %3$s 最近的目标 {%1$d} "%4$s" 在定量 %2$d 在成本 "%5$s". Debug: $resource_got = "%6$s", $exchange = %7$s""',

  'news_show_rest' => '显示文本新闻',

  'wiki_requrements' => '需要',
  'wiki_grants' => '提供',

  'que_slot_length' => '生产',
  'que_slot_length_long' => '正在生产',

  'sys_buy_doing' => '购买',
  'sys_planet_sector' => '扇形',
  'sys_planet_on' => '的',

  'sys_purchase_confirm' => '确认购买',

  'sys_confirm_action_title' => '确认操作',
  'sys_confirm_action' => '你真的想这样做吗？',

  'sys_system_speed_original' => '原速',
  'sys_system_speed_for_action' => '此役',

  'menu_info_best_battles' => '最好的战斗',

  'sys_cost' => '成本',
  'sys_price' => '价格',

  'sys_governor_none' => '总督还没有聘请',
  'sys_governor_hire' => '总督租金',
  'sys_governor_upgrade_or_change' => '改善或更换总督',
));
