<?php

/*
#############################################################################
#  Filename: market.mo
#  Project: SuperNova.WS
#  Website: http://www.supernova.ws
#  Description: Massive Multiplayer Online Browser Space Startegy Game
#
#  Copyright © 2011 madmax1991 for Project "SuperNova.WS"
#  Copyright © 2009 Gorlum for Project "SuperNova.WS"
#############################################################################
*/

/**
*
* @package language
* @system [English]
* @version 40a17.0
* @condition clear
*
*/

/**
* DO NOT CHANGE
*/

if (!defined('INSIDE')) die();


$a_lang_array = (array(
  'eco_mrk_title'=>'市场',
  'eco_mrk_description'=>'很奇怪，但你不能在文档中提到这个菜单项。来自哪里？',
  'eco_mrk_service'=>'服务',
  'eco_mrk_service_cost'=>'Serivce cost',

  'eco_mrk_trader_do'=>'Exchange资源',
  'eco_mrk_trader'=>'Exchange资源',
  'eco_mrk_trader_cost'=>'成本分摊资源',
  'eco_mrk_trader_exchange'=>'Exchange',
  'eco_mrk_trader_to'=>'交换为',
  'eco_mrk_trader_course'=>'课程',
  'eco_mrk_trader_left'=>'交换结果',
  'eco_mrk_trader_resources_all'=>'所有资源',
  'eco_mrk_trader_exchange_dm_confirm'=>'您确定要交易{0} Dark Matter的资源吗？',

  'eco_mrk_scraper_do'=>'为资源报废',
  'eco_mrk_scraper'=>'为资源报废',
  'eco_mrk_scraper_price'=>'报废输出',
  'eco_mrk_scraper_perShip'=>'从船',
  'eco_mrk_scraper_total'=>'总计',
  'eco_mrk_scraper_cost'=>'出售废料成本',
  'eco_mrk_scraper_onOrbit'=>'在轨',
  'eco_mrk_scraper_to'=>'允许报废',
  'eco_mrk_scraper_res'=>'以下废品：',
  'eco_mrk_scraper_ships'=>'把以下船只丢弃：',
  'eco_mrk_scraper_noShip'=>'有航天器在轨道',

  'eco_mrk_stockman_do'=>'买 s/h 船',
  'eco_mrk_stockman'=>'买 s/h 船',
  'eco_mrk_stockman_price'=>'价格',
  'eco_mrk_stockman_perShip'=>'船',
  'eco_mrk_stockman_onStock'=>'卖家',
  'eco_mrk_stockman_buy'=>'买船',
  'eco_mrk_stockman_res'=>'购买船舶的成本：',
  'eco_mrk_stockman_ships'=>'购买以下船：',
  'eco_mrk_stockman_noShip'=>'卖家现在没有船只出售',

  'eco_mrk_exchange'=>'资源交换',
  'eco_mrk_banker'=>'银行家',
  'eco_mrk_pawnshop'=>'Pawnshop',

  'eco_mrk_info_do'=>'购买信息',
  'eco_mrk_info'=>'Infotrader',
  'eco_mrk_info_description'=>'你发现来自未知来源的收件箱信件。它完全说：',
  'eco_mrk_info_description_2'=>'我可以访问大量的兴趣信息。当然，我可以和你的...分享一下奖励。根据要求，您只会花费',
  'eco_mrk_info_buy'=>'购买信息',

  'eco_mrk_info_player'=>'有关玩家的信息',
  'eco_mrk_info_player_description'=>'我可以告诉你目前在玩家的规则下工作的雇佣兵',
  'eco_mrk_info_player_message'=>'据我所知，玩家ID %1$d [%2$s] 的名单现在的雇佣兵看起来像这样：',

  'eco_mrk_info_not_hired'=>'没有雇用',

  'eco_mrk_info_ally'=>'关于联盟的信息',
  'eco_mrk_info_online'=>'当前活动在宇宙',

  'eco_mrk_info_msg_from'=>'不可追溯的来源',

  'eco_mrk_error_title'=>'市场 - 错误',
  'eco_mrk_errors' => array(
    MARKET_RESOURCES =>'操作是成功的',
    MARKET_SCRAPPER =>'资源交换成功',
    MARKET_NOT_A_SHIP =>'不要试图出售除船外的任何东西！',
    MARKET_STOCKMAN =>'暗物质缺失完成操作',
    MARKET_NO_RESOURCES =>'没有足够的资源来完成操作',
    MARKET_PAWNSHOP =>'你正在尝试发送更多的废料船，而不是在轨道上',
    MARKET_NO_STOCK =>'您正在尝试购买比卖方更多的船只。这可能没有选择船只，有人已经买了他们',
    MARKET_ZERO_DEAL =>'不要指定共享资源的数量',
    MARKET_NOTHING =>'选择船只出售',
    MARKET_ZERO_RES_STOCK =>'选择要购买的船只',
    MARKET_NEGATIVE_SHIPS =>'不要试图卖负数的船！',

    MARKET_NO_DM =>'没有足够的DM来完成操作',
    MARKET_INFO_WRONG =>'我没有出售这种信息',
    MARKET_INFO_PLAYER =>'信息成功购买。检查你的个人邮件',
    MARKET_INFO_PLAYER_WRONG =>'您应该指定玩家名称或ID',
    MARKET_INFO_PLAYER_NOT_FOUND =>'无法识别播放器。如果播放器名称由不可读符号或纯数字组成 - 尝试使用播放器ID',
    MARKET_INFO_PLAYER_SAME =>'你为什么要支付自己的信息？',
  ),

));
