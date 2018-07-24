<?php

/*
#############################################################################
#  Filename: tech.mo
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
* @system [Chinese]
* @version 40a17.0
*
*/

/**
* DO NOT CHANGE
*/

if (!defined('INSIDE')) die();

$a_lang_array = (array(
  'tech_storage_max' => '最大',
  'tech_storage' => '现有',
  'Tech' => '科技',
  'Requirements' => '需求',
  'Metal' => '金属',
  'Crystal' => '晶体',
  'Deuterium' => '重氢',
  'Energy' => '能源',
  'dark_matter' => '暗物质',
  'ds' => '消息',
  'Message' => '消息',
  'level' => '级别',
  'treeinfo' => '[i]',
  'comingsoon' => '即将发布',
  'te_dt_tx_pre' => '每周预览',
  'type_mission' => array(
    MT_ATTACK => '攻击',
    MT_AKS => '联合攻击',
    MT_TRANSPORT => '运输',
    MT_RELOCATE => '部署',
    MT_HOLD => '待机',
    MT_SPY => '侦查',
    MT_COLONIZE => '殖民',
    MT_RECYCLE => '回收',
    MT_DESTROY => '摧毁',
    MT_MISSILE => '导弹攻击',
    MT_EXPLORE => '探索',
  ),

  'tech' => array(
    UNIT_STRUCTURES => '建筑',
    STRUC_MINE_METAL => '金属矿',
    STRUC_MINE_CRYSTAL => '晶体矿',
    STRUC_MINE_DEUTERIUM => '重氢同步分离器',
    STRUC_MINE_SOLAR => '爱发电厂',
    STRUC_MINE_FUSION => '核融合发电厂',
    STRUC_FACTORY_ROBOT => '劳动力工厂',
    STRUC_FACTORY_NANO => '高级劳动力工厂',
    STRUC_FACTORY_HANGAR => '镇守府',
    STRUC_STORE_METAL => '金属储存器',
    STRUC_STORE_CRYSTAL => '晶体储存器',
    STRUC_STORE_DEUTERIUM => '重氢储存槽',
    STRUC_LABORATORY => '临沂研究中心',
    STRUC_TERRAFORMER => '地形改造器',
    STRUC_ALLY_DEPOSIT => '联盟太空站',
    STRUC_LABORATORY_NANO => 'Special Building',

    UNIT_STRUCTURES_SPECIAL => '月面建筑',
    STRUC_MOON_STATION => '月球基地',
    STRUC_MOON_PHALANX => '感应密集阵',
    STRUC_MOON_GATE => '空间跳跃门',
    STRUC_SILO => '导弹发射井',

    UNIT_TECHNOLOGIES => '科技研究',
    TECH_ENERGY => '黄油猫动力',
    TECH_COMPUTER => '电脑技术',
    TECH_SPY => '女装探测技术',
    TECH_ARMOR => '船舰装甲化',
    TECH_WEAPON => '白学技术',
    TECH_SHIELD => '防御盾系统',
    TECH_ENGINE_CHEMICAL => '摸鱼引擎',
    TECH_ENGINE_ION => '脉冲引擎',
    TECH_ENGINE_HYPER => '超空间引擎',
    TECH_LASER => '雷射技术',
    TECH_ION => '中子技术',
    TECH_PLASMA => '等离子技术',
    TECH_HYPERSPACE => '超空间科技',
    TECH_EXPEDITION => '探险技术',
    TECH_COLONIZATION => '殖民技术',
    TECH_ASTROTECH => '远征技术',
    TECH_GRAVITON => '引力研究',
    TECH_RESEARCH => '跨银河研究网路',

    UNIT_SHIPS => '少女',
    SHIP_SATTELITE_SOLAR => '音梦式太阳能卫星',
    SHIP_SPY => 'AGM型间谍卫星',
    SHIP_CARGO_SMALL => '额神型运输飞船',
    SHIP_CARGO_BIG => '293中型运输舰',
    SHIP_CARGO_SUPER => '拉登级运输舰',
    SHIP_CARGO_HYPER => '空降级重装运输舰',
    SHIP_RECYCLER => 'abc级肥圆回收舰',
    SHIP_COLONIZER => '提尔级草原殖民舰',
    SHIP_SMALL_FIGHTER_LIGHT => '烤羊',
    SHIP_SMALL_FIGHTER_HEAVY => 'zja',
    SHIP_MEDIUM_FRIGATE => '456',
    SHIP_LARGE_CRUISER => 'K姐',
    SHIP_LARGE_BOMBER => '04',
    SHIP_LARGE_BATTLESHIP => '劳尔',
    SHIP_LARGE_DESTRUCTOR => '圣堂',
    SHIP_HUGE_DEATH_STAR => '而纷纷',
    SHIP_HUGE_SUPERNOVA => '夜刃',
    SHIP_LIMING => '黎明级破烂战斗巡洋舰',

    UNIT_DEFENCE => '防御',
    UNIT_DEF_TURRET_MISSILE => '强力mago型火箭发射器',
    UNIT_DEF_TURRET_LASER_SMALL => '轻型雷射抱',
    UNIT_DEF_TURRET_LASER_BIG => '重型雷射抱',
    UNIT_DEF_TURRET_GAUSS => '高斯抱',
    UNIT_DEF_TURRET_ION => '中子抱',
    UNIT_DEF_TURRET_PLASMA => '等离子武器',
    UNIT_DEF_SHIELD_SMALL => '小型防护圆顶',
    UNIT_DEF_SHIELD_BIG => '大型防护圆顶',
    UNIT_DEF_SHIELD_PLANET => '星球护盾',
    UNIT_DEF_MISSILE_INTERCEPTOR => '拦截导弹',
    UNIT_DEF_MISSILE_INTERPLANET => '麦叔导弹',

    UNIT_MERCENARIES => '专家',
    MRC_STOCKMAN => '100',
    MRC_SPY => '六仔',
    MRC_ACADEMIC => 'qp',
//    MRC_DESTRUCTOR => 'Destroyer',
    MRC_ADMIRAL => '老i',
    MRC_COORDINATOR => '黑夜',
    MRC_NAVIGATOR => 'sam',
//    MRC_ASSASIN => 'Assassin',

    UNIT_GOVERNORS => '学者',
    MRC_TECHNOLOGIST => 'CuSO4',
    MRC_ENGINEER => '燃烧吧gear',
    MRC_FORTIFIER => 'Fortifier',

    UNIT_RESOURCES => '资源',
    RES_METAL => '金属',
    RES_CRYSTAL => '晶体',
    RES_DEUTERIUM => '重氢',
    RES_ENERGY => '能量',
    RES_DARK_MATTER => '暗物质',

    UNIT_ARTIFACTS => '零件',
    ART_LHC => 'Large Hadron Collider',
    ART_HOOK_SMALL => 'Small Hook',
    ART_HOOK_MEDIUM => 'Medium Hook',
    ART_HOOK_LARGE => 'Large Hook',
    ART_RCD_SMALL => 'Small RCD',
    ART_RCD_MEDIUM => 'Medium RCD',
    ART_RCD_LARGE => 'Large RCD',
    ART_HEURISTIC_CHIP => 'Heuristic chip',
    ART_NANO_BUILDER   => 'Nanobuilder',

    UNIT_PLANS => '图纸',
    UNIT_PLAN_STRUC_MINE_FUSION => '图纸 &quot;Thermonuclear plant&quot;',
    UNIT_PLAN_SHIP_CARGO_SUPER => '图纸 &quot;Supertransport&quot;',
    UNIT_PLAN_SHIP_CARGO_HYPER => '图纸 &quot;Hyperstransport&quot;',
    UNIT_PLAN_SHIP_DEATH_STAR => '图纸 &quot;Death Star&quot;',
    UNIT_PLAN_SHIP_SUPERNOVA => '图纸 &quot;Supernova class cruiser&quot;',
    UNIT_PLAN_DEF_SHIELD_PLANET => '图纸 &quot;Planet defense&quot;',

    UNIT_PREMIUM => '总督',
    UNIT_CAPTAIN => '舰长',

    UNIT_PLANET_DENSITY => 'Density',
  ),

  'tech_short' => array(
//    UNIT_STRUCTURES => 'Buildings',
//    STRUC_MINE_METAL => 'Metal mine',
//    STRUC_MINE_CRYSTAL => 'Crystal Mine',
//    STRUC_MINE_DEUTERIUM => 'Deuterium Synthesizer',
//    STRUC_MINE_SOLAR => 'Solar Plant',
//    STRUC_MINE_FUSION => 'Fusion Reactor',
//    STRUC_FACTORY_ROBOT => 'Robotics Factory',
//    STRUC_FACTORY_NANO => 'Nanite Factory',
//    STRUC_FACTORY_HANGAR => 'Shipyard',
//    STRUC_STORE_METAL => 'Metal Storage',
//    STRUC_STORE_CRYSTAL => 'Crystal Storage',
//    STRUC_STORE_DEUTERIUM => 'Deuterium Tank',
//    STRUC_LABORATORY => 'Research Lab',
//    STRUC_TERRAFORMER => 'Terraformer',
//    STRUC_ALLY_DEPOSIT => 'Alliance Depot',
//    STRUC_LABORATORY_NANO => 'Special Building',
//
//    UNIT_STRUCTURES_SPECIAL => 'Moon Buildings',
//    STRUC_MOON_STATION => 'Moon Base',
//    STRUC_MOON_PHALANX => 'Sensor Phalanx',
//    STRUC_MOON_GATE => 'Stargate',
//    STRUC_SILO => 'Missile Silo',
//
//    UNIT_TECHNOLOGIES => 'Technologies',
//    TECH_ENERGY => 'Energy Technology',
//    TECH_COMPUTER => 'Computer Technology',
//    TECH_SPY => 'Espionage Technology',
//    TECH_ARMOR => 'Armor Technology',
//    TECH_WEAPON => 'Weapons Technology',
//    TECH_SHIELD => 'Shielding Technology',
//    TECH_ENGINE_CHEMICAL => 'Rocket Engine',
//    TECH_ENGINE_ION => 'Impulse Engine',
//    TECH_ENGINE_HYPER => 'Hyperspace Drive',
//    TECH_LASER => 'Laser Technology',
//    TECH_ION => 'Ion Technology',
//    TECH_PLASMA => 'Plasma Technology',
//    TECH_HYPERSPACE => 'Hyperspace Technology',
//    TECH_EXPEDITION => 'Expedition Technology',
//    TECH_COLONIZATION => 'Colonization Technology',
//    TECH_ASTROTECH => 'Astrophysics Technology',
//    TECH_GRAVITON => 'Graviton Technology',
//    TECH_RESEARCH => 'Intergalactic Research Network',

    UNIT_SHIPS => 'Ships',
    SHIP_SATTELITE_SOLAR => 'SolSat',
    SHIP_SPY => 'SpyProb',
    SHIP_CARGO_SMALL => 'SmCargo',
    SHIP_CARGO_BIG => 'LgCargo',
    SHIP_CARGO_SUPER => 'SuCargo',
    SHIP_CARGO_HYPER => 'HyCargo',
    SHIP_RECYCLER => 'Recycl',
    SHIP_COLONIZER => 'Colony',
    SHIP_SMALL_FIGHTER_LIGHT => 'LtFight',
    SHIP_SMALL_FIGHTER_HEAVY => 'HvFight',
    SHIP_MEDIUM_FRIGATE => 'Destr',
    SHIP_LARGE_CRUISER => 'Cruiser',
    SHIP_LARGE_BOMBER => 'Bomber',
    SHIP_LARGE_BATTLESHIP => 'BtlShip',
    SHIP_LARGE_DESTRUCTOR => 'Destr',
    SHIP_HUGE_DEATH_STAR => 'DthStar',
    SHIP_HUGE_SUPERNOVA => 'SN',

//    UNIT_DEFENCE => 'Defences',
//    UNIT_DEF_TURRET_MISSILE => 'Rocket Launcher',
//    UNIT_DEF_TURRET_LASER_SMALL => 'Light Laser',
//    UNIT_DEF_TURRET_LASER_BIG => 'Heavy Laser',
//    UNIT_DEF_TURRET_GAUSS => 'Gauss Cannon',
//    UNIT_DEF_TURRET_ION => 'Ion Cannon',
//    UNIT_DEF_TURRET_PLASMA => 'Plasma Turrent',
//    UNIT_DEF_SHIELD_SMALL => 'Small Shield Dome',
//    UNIT_DEF_SHIELD_BIG => 'Large Shield Dome',
//    UNIT_DEF_SHIELD_PLANET => 'Planetary Protection',
//    UNIT_DEF_MISSILE_INTERCEPTOR => 'Interceptor Missiles',
//    UNIT_DEF_MISSILE_INTERPLANET => 'Interplanetary Missiles',
//
//    UNIT_MERCENARIES => 'Mercenaries',
//    MRC_STOCKMAN => 'Cargo Master',
//    MRC_SPY => 'Spy',
//    MRC_ACADEMIC => 'Academician',
////    MRC_DESTRUCTOR => 'Destroyer',
//    MRC_ADMIRAL => 'Admiral',
//    MRC_COORDINATOR => 'Coordinator',
//    MRC_NAVIGATOR => 'Navigator',
////    MRC_ASSASIN => 'Assassin',
//
//    UNIT_GOVERNORS => 'Governors',
//    MRC_TECHNOLOGIST => 'Technologist',
//    MRC_ENGINEER => 'Engineer',
//    MRC_FORTIFIER => 'Fortifier',
//
//    UNIT_RESOURCES => 'Resources',
//    RES_METAL => 'Metal',
//    RES_CRYSTAL => 'Crystal',
//    RES_DEUTERIUM => 'Deuterium',
//    RES_ENERGY => 'Energy',
//    RES_DARK_MATTER => 'Dark Matter',
//
//    UNIT_ARTIFACTS => 'Artifacts',
//    ART_LHC => 'Large Hadron Collider',
//    ART_HOOK_SMALL => 'Small Hook',
//    ART_HOOK_MEDIUM => 'Medium Hook',
//    ART_HOOK_LARGE => 'Large Hook',
//    ART_RCD_SMALL => 'Small RCD',
//    ART_RCD_MEDIUM => 'Medium RCD',
//    ART_RCD_LARGE => 'Large RCD',
//    ART_HEURISTIC_CHIP => 'Heuristic chip',
//    ART_NANO_BUILDER   => 'Nanobuilder',
//
//    UNIT_PLANS => 'Schematics',
//    UNIT_PLAN_STRUC_MINE_FUSION => '图纸 &quot;Thermonuclear plant&quot;',
//    UNIT_PLAN_SHIP_CARGO_SUPER => '图纸 &quot;Supertransport&quot;',
//    UNIT_PLAN_SHIP_CARGO_HYPER => '图纸 &quot;Hyperstransport&quot;',
//    UNIT_PLAN_SHIP_DEATH_STAR => '图纸 &quot;Death Star&quot;',
//    UNIT_PLAN_SHIP_SUPERNOVA => '图纸 &quot;Supernova class cruiser&quot;',
//    UNIT_PLAN_DEF_SHIELD_PLANET => '图纸 &quot;Planet defense&quot;',
//
//    UNIT_PREMIUM => 'Premium',
//    UNIT_CAPTAIN => 'Captain',
//
//    UNIT_PLANET_DENSITY => 'Density',
  ),

));
