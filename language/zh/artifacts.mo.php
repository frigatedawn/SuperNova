<?php

/*
#############################################################################
#  Filename: artifacts.mo
#  Project: SuperNova.WS
#  Website: http://www.supernova.ws
#  Description: Massive Multiplayer Online Browser Space Startegy Game
#
#  Copyright © 2011 Gorlum for Project "SuperNova.WS"
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
  'art_use'             => '使用神器',

  'art_lhc_from'        => '大型强子对撞机',
  'art_lhc_subj'        => '创造月亮...',
  'art_moon_create'   => array(
    ART_LHC => 'LHC的重力波连接大片碎片，造成新月 %s 在坐标 %s!',
    ART_HOOK_SMALL => '小钩推出新月 %1$s 直径 %3$s 公里坐标 %2$s!',
    ART_HOOK_MEDIUM => '中钩推出新月 %1$s 直径 %3$s 公里坐标 %2$s!',
    ART_HOOK_LARGE => '大钩推出新月 %1$s 直径 %3$s 公里坐标 %2$s!',
  ),
  'art_moon_exists'=>'当前坐标上已经有月球轨道上的月球',
  'art_lhc_moon_fail'=>'不幸的是LHC的重力波不足以创造一个新月',

  'art_rcd_from'=>'快速殖民地部署者',
  'art_rcd_subj'=>'殖民部署',
  'art_rcd_ok'=>'％1 $ s成功部署殖民地行星％2 $ s坐标％3 $ s',
  'art_rcd_err_moon'=>'RCD可以部署在地球上',
  'art_rcd_err_no_sense'=>'刚果民盟检测到现在的建筑物不会有任何改善，中止部署',
  'art_rcd_err_que'=>'刚果民盟无法部署在正在建设的地球上。取消所有施工任务，并尝试再次部署RCD',

  'art_heurestic_chip_ok'=>'％s级别％d的研究时间减少％s',
  'art_heurestic_chip_subj'=>'研究加速',
  'art_heurestic_chip_no_research'=>'目前研究目前还没有研究，还有不到1分钟的研究',

  'art_nano_builder_ok' => '%s 时间的 "%s" 等级 %d 在星球 %s %s 减少 %s',
  'art_nano_builder_build'=>'建筑',
  'art_nano_builder_destroy'=>'毁灭',
  'art_nano_builder_subj'=>'建筑操作加快',
  'art_nano_builder_no_que'=>'没有在行星上执行施工作业，现在施工时间不到1分钟',

  'art_err_no_artifact'=>'你没有这个工件',

  'art_page_hint'       => '<ul>
    <li>人工制品是具有独特属性的罕见对象</li>
    <li>人造物是消耗品，即使用后，神器消失</li>
    <li>某些神器太强大，只能在一个帝国中的限制内存在</li>
    <li>通常人造物效应仅在使用的行星上延伸，但其中有些则具有帝国效应。
    最强大的人造物将其效果扩展到整个太阳系，星系甚至宇宙！</ li>
  </ul>',
));
