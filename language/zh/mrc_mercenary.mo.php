<?php

/*
#############################################################################
#  Filename: mercenary.mo
#  Project: SuperNova.WS
#  Website: http://www.supernova.ws
#  Description: Massive Multiplayer Online Browser Space Startegy Game
#
#  Copyright © 2009 Gorlum for Project "SuperNova.WS"
#############################################################################
*/

/**
*
* @package language
* @system [English]
* @version 40a17.0
*
* @clean - all constants is used
*
*/

/**
* DO NOT CHANGE
*/

if (!defined('INSIDE'))
{
  exit;
}

$a_lang_array = array(
  'mrc_up_to'=>'最多',
  'mrc_hire'=>'雇用',
  'mrc_hire_for'=>'雇用',
  'mrc_allowed'=>'允许',
  'mrc_msg_error_wrong_mercenary'=>'错误的佣兵编号',
  'mrc_msg_error_wrong_level'=>'雇佣兵级错误太大或太小',
  'mrc_msg_error_wrong_period'=>'不可接受的租用期',
  'mrc_msg_error_already_hired'=>'已雇佣雇佣兵解除他或等到雇用期结束',
  'mrc_msg_error_no_resource'=>'不够黑暗雇佣佣兵',
  'mrc_msg_error_requirements'=>'不符合要求',

  'mrc_dismiss'=>'关闭',
  'mrc_dismiss_confirm'=>'当你解雇雇佣兵时，你会丢掉你以前雇佣这个佣兵的所有DM！你确定要解雇佣兵吗？',
  'mrc_dismiss_before_hire'=>'要改变招募雇佣兵的水平，你应该在开火之前。你将失去目前雇佣兵的所有DM！',

  'mrc_mercenary_hired_log'=>'雇佣雇佣兵"%1$s" ID %2$d for %3$d DM for %4$d days',
  'mrc_mercenary_dismissed_log' => 'LOST %7$d hire days and %8$d DM （当前价格）! 被扣除雇佣兵 "%1$s" ID %2$d, hired for %4$d days (from %5$s to %6$s) 现在费用为 %3$d DM',
  'mrc_plan_bought_log' => '已购买计划 "%1$s" ID %2$d for %3$d DM',
);
