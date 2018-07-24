<?php

/*
#############################################################################
#  Filename: buddy.mo
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

$a_lang_array = (array(
  'buddy_buddies'=>'朋友',
  'buddy_request_text'=>'请求文本',
  'buddy_request_text_default'=>'请加我到你的朋友列表',
  'buddy_request_none'=>'没有朋友和友谊请求',
  'buddy_request_write_header'=>'新的友谊请求',
  'buddy_request_player_name'=>'玩家名称',
  'buddy_request_accept'=>'添加播放器到朋友列表',

  'buddy_status'=>'状态',
  'buddy_status_active'=>'这是你的mutuall朋友',
  'buddy_status_incoming_waiting'=>'传入邀请请求',
  'buddy_status_incoming_denied'=>'你否认请愿书',
  'buddy_status_outcoming_waiting'=>'您要求发送。等待回答',
  'buddy_status_outcoming_denied'=>'你要求拒绝',

  //结果消息
  'buddy_err_not_exist'=>'请求不存在。也许它被删除或否认',

  'buddy_err_accept_own'=>'你不能接受自己的请求',
  'buddy_err_accept_alien'=>'你不能接受没有发送给你的请求',
  'buddy_err_accept_already'=>'你已经接受了这个请求，已经和这个玩家的朋友在一起了',
  'buddy_err_accept_denied'=>'你已经否认了这个请求，不能接受',
  'buddy_err_accept_internal'=>'接受请求时有错误。稍后再试。如果错误仍然存​​在，请联系服务器管理员',
  'buddy_err_accept_none'=>'友谊请求授予',

  'buddy_err_delete_alien'=>'这个请求不是由你而不是你而来的！不要干涉别人的关系！找到你自己的朋友！',
  'buddy_err_unfriend_none'=>'你打破友谊',
  'buddy_err_delete_own'=>'你的请求被删除',

  'buddy_err_deny_none'=>'你拒绝玩家的友谊。为什么，为什么？',

  'buddy_err_adding_exists'=>'你不能请求这个玩家 - 你已经是朋友了，或者存在你们之间的一些友谊请求',
  'buddy_err_adding_none'=>'你的友谊请求被发送',
  'buddy_err_adding_self'=>'你不能向自己发送友谊请求',

  // PM消息
  'buddy_msg_accept_title'=>'你有新朋友！',
  'buddy_msg_accept_text'=>'玩家％s添加到朋友列表！',
  'buddy_msg_unfriend_title'=>'你失去了朋友！',
  'buddy_msg_unfriend_text'=>'玩家 %s 打破了友谊，并将你从朋友列表中删除。多么悲伤...',
  'buddy_msg_deny_title'=>'无法让新朋友',
  'buddy_msg_deny_text'=>'玩家％s否认你的友谊优惠',
  'buddy_msg_adding_title'=>'友谊优惠',
  'buddy_msg_adding_text'=>'玩家％s给你他的友谊',

  'buddy_hint' => '
    <li>通过菜单项<a href="search.php">搜索</a>发送优惠友谊。</li>
    <li>您可以在线或离线查看朋友的状态。 但是，你的朋友可以看到你的状态。 考虑这个事实，接受友谊请求。</li>
    <li>如果您拒绝友谊请求，则在删除他的优惠之前，您无法与该玩家开始任何友谊关系，</li>'

));
