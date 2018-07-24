<?php

/*
#############################################################################
#  Filename: infos.mo
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


$a_lang_array = array(
  'wiki_title' => '游戏百科',

  'wiki_char_nominal' => '普通',
  'wiki_char_actual' => '现实',

  'wiki_ship_engine_header' => '工程性能',

  'wiki_ship_header' => '航行性能',
  'wiki_ship_speed' => '速度',
  'wiki_ship_consumption' => '重氢消耗',
  'wiki_ship_capacity' => '运载能力',
  'wiki_ship_hint' => '<li>Actual data calculated with applying all bonuses - techs, mercs etc</li>',

  'wiki_combat_header' => '战斗性能',
  'wiki_combat_attack' => 'Attack power, hits',
  'wiki_combat_shield' => 'Shield battery capacity, hits',
  'wiki_combat_armor' => 'Durability, hits',

  'wiki_combat_volley_header' => 'Volley',
  'wiki_combat_volley_to' => '将摧毁',
  'wiki_combat_volley_from' => '将损失',

  'info' => array(
    STRUC_MINE_METAL => array(
      'description' => 'The main supplier of raw materials for the construction of load-bearing structures of buildings and ships. Metal is the most inexpensive raw material, but takes more than everything else. For production of metal requires less total energy. Than mines more deeper. on most planets metal is at great depths, deeper mines you can obtain more metals, production increases. At the same time, larger mines require more energy.',
      'description_short' => '金属采矿场提供了帝国所需的基本资源——金属，而且可以被用来建造建筑物和宇宙飞船。',
    ),

    STRUC_MINE_CRYSTAL => array(
      'description' => 'For the synthesis of crystals requires approximately twicw more enery than for extraction of metal, so it therefore appreciated more. Crystals-main part of any modern computers and a key componet of warp drive-engines. Therefore, it is required for all ships and almost all buildings. Improving synth increases the number of produced crystals.',
      'description_short' => '晶体矿是生产精密电子元件和生产高级合金的主要资源之一。',
    ),

    STRUC_MINE_DEUTERIUM => array(
      'description' => 'Deuterium is heavy hydrogen. Because of this, as in the mains, more large stockpiles are at the bottom of the sea. Improving synth also contributes to development of these deep deposits of deuterium. Deuterium is needed as fuel for ships, nearly all studies, see the galaxies, and use sensor phalanx',
      'description_short' => '重氢是星际飞船的燃料，可以从深海中提取。重氢属于稀有物质，相当珍贵而且重要。',
    ),

    STRUC_MINE_SOLAR => array(
      'description' => '用爱发电正成为这个世界上最重要的零污染能源。',
      'description_short' => '用爱发电正成为这个世界上最重要的零污染能源。',
    ),

    STRUC_MINE_FUSION => array(
      'description_short' => '核电场是星际时代重要的能量供给建筑，通过消耗一定的重氢能量，他可以提供相当庞大的电量。级别越高，消耗重氢的速度和提供的电量就越快和越大.',
      'description' => '核电场是星际时代重要的能量供给建筑，他可以提供相当庞大的电量。',
    ),

    STRUC_FACTORY_ROBOT => array(
      'description' => '所有学生都要努力通过考试进入高等院校，成为一个合格的建筑行业人力资源。',
      'description_short' => '所有学生都要努力通过考试进入高等院校，成为一个合格的建筑行业人力资源。',
    ),

    STRUC_FACTORY_NANO => array(
      'description' => '这个社会需要大量西装革履的劳动力，他们在高档的办公室里能够提高少女防御生产的水平及提供高级服务。',
      'description_short' => '这个社会需要大量西装革履的劳动力，他们在高档的办公室里能够提高少女防御生产的水平及提供高级服务。',
      'effect' => '',
    ),

    STRUC_FACTORY_HANGAR => array(
      'description' => '要想养起这么多少女，你需要一个镇守府。',
      'description_short' => '要想养起这么多少女，你需要一个镇守府。',
    ),

    STRUC_STORE_METAL => array(
      'description' => '随着金属矿的仓库的建造，我们可以储存更多的金属矿了。',
      'description_short' => '随着金属矿的仓库的建造，我们可以储存更多的金属矿了。',
    ),

    STRUC_STORE_CRYSTAL => array(
      'description' => '晶体矿仓库使的我们有更多的地方来放置这种重要物资。',
      'description_short' => '晶体矿仓库使的我们有更多的地方来放置这种重要物资。',
    ),

    STRUC_STORE_DEUTERIUM => array(
      'description' => '随着该建筑的建造，我们可以储存更多的重氢资源。',
      'description_short' => '随着该建筑的建造，我们可以储存更多的重氢资源。',
    ),

    STRUC_LABORATORY => array(
      'description' => '多年来，临沂研究中心倾力钻研，不断创新，历经坎坷，经受了种种考验，创建并完善起独特的综合干预模式，成功治愈了多名患者，为家庭幸福社会和谐做出了巨大贡献。临沂研究中心经过大浪淘沙的洗礼，得到了世界同行充分肯定和广大民众的高度认可。',
      'description_short' => '临沂研究中心是星际殖民者重要的建筑之一，而它所研究的科技决定了一个殖民的实力究竟如何。',
    ),

    STRUC_TERRAFORMER => array(
      'description' => 'As more and more important building planets became the limited usable space. Traditional methods such as construction skyward and inside were insufficient. A small group of physicists and nanotehnikov found the solution-terraformer.<br><br>Spending large amounts of energy terraformer can convert vast areas and even the entire continents, making them suitable for construction. This structure is constantly produced special nanity, responsible for the constant quality of soil.',
      'description_short' => 'Terraformer can transform a huge territory, increasing the number of construction fields.',
    ),

    STRUC_ALLY_DEPOSIT => array(
      'description' => 'Alliance depot provides a way to ensure fuel friendly fleets that help with defense and are in orbit. The higher the level of development, the more deuterium can be sent to fleets in orbit.',
      'description_short' => '联盟太空站允许友好舰队停泊在轨道上空以协助防御，并提供舰队所需的燃料。',
    ),

    STRUC_LABORATORY_NANO => array(
      'description' => 'Reduce time to research stage doubled.',
      'description_short' => 'Nanobots equipped with the latest technology. Heavy duty crystaline computers and super-precise nanosbots accelerated by any study by twice.',
    ),

    STRUC_MOON_STATION => array(
      'description' => 'The moon has no atmosphere, therefore before the planned stay is required to build Lunar bases. It provides the necessary air, Gravitation and warmth. The higher the level of development of the lunar base, the more secure the biosphere area. Each level of the lunar base can build 3 sector, up to a maximum total square of the moon. It is 2 (diameter of the Moon/1000) ^ 2, each level lunar base itself occupies one field.',
      'description_short' => '月球没有空气，要移民月球必须先造一个月球基地，基地的等级越高，提供生存必需的面积也就越大。每一级提升都可以增加额外的覆盖面积。',
    ),

    STRUC_MOON_PHALANX => array(
      'description' => 'High frequency sensors full browsing frequency spectrum by all the falangu radiations. Powerful computers combines tiny fluctuations in energy and thus gain information about the movements of ships at the distant planets. To view the Moon should be given the energy in the form of deuterium (per view 1000 * phalanx level). View is the transition from the Moon menu Galaxy and the title enemy planet located in range sensors (formula: (level phalanges) ^ 2-1).',
      'description_short' => '感应阵可以用来感应到在遥远星系的舰队的运动情况，但耗能相当庞大。',
    ),

    STRUC_MOON_GATE => array(
      'description' => 'Gate is a huge teleportery that can transmit between the fleets of all sizes without time-consuming. These teleportery do not require deuterium, but between two hops must undergo one hour, or gate recharge. Is also forwarding resources. The entire process requires very highly developed technology.',
      'description_short' => '空间传送门是巨大的传输工具，能够使庞大的舰队瞬间穿越星系。空间传送门运用了近似虫洞的科技来实现跳跃，不需要重氢。',
    ),

    STRUC_SILO => array(
      'description' => 'Missile silo serve for storing missiles. With each level you can store four interplanetary or twelve interceptor missiles more. One interplanetary missiles require space triple the interceptor missile. May be any combination of different types of missiles.',
      'description_short' => '导弹发射井是用来存放导弹。',
    ),

    TECH_SPY => array(
      'description_short' => '女装探测技术决定了一个殖民者对外界，包括对敌人的殖民星的了解程度。级别越高，在探测对方时取得的资料也就越多。',
      'description' => '女装探测技术决定了一个殖民者对外界，包括对敌人的殖民星的了解程度。',
    ),

    TECH_COMPUTER => array(
      'description' => 'Computer technology is designed to increase availability of computer power. As a result of the planet are more productive and efficient computer systems, increasing processing power and speed of computing processes. With the increasing power of computers you can command the entire of fleets. Each level of development of computer technology makes it possible to command + 1 fleet. The more sent fleets, the more you can do  and thus capture more raw materials. Naturally, this technology is useful and traders, as it enables them to simultaneously send larger merchant fleets. For this reason, you should constantly develop computer technology throughout the entire game.',
      'description_short' => '计算机技术的提高，使得殖民者可以同时指挥更多的舰队外出战斗，每提升一级科技，同时所派遣执行任务的舰队数量便加一。',
    ),

    TECH_WEAPON => array(
      'description' => '你是要吃雪菜还是骑冬马？每一级的提升将给你的少女们带来１０％的额外攻击能力。.',
      'description_short' => '你是要吃雪菜还是骑冬马？每一级的提升将给你的少女们带来１０％的额外攻击能力。',
    ),

    TECH_SHIELD => array(
      'description' => 'Development of this technology allows you to increase the supply of energy shields and shielding, which in turn increases their resilience and ability to absorb or reflect energy attacks of the enemy. Thanks to this with each passing level effectiveness of ship\'s shields and stationary shield generators increases by 10% of the rated power.',
      'description_short' => '星际战斗中，能量盾防御系统会起到非常重要的作用，它可以吸收敌人的伤害，以减少自己舰船的损失。每一级提升都会使能量盾总额在基础上提升10%.',
    ),

    TECH_ARMOR => array(
      'description' => 'Special alloys improve armor spacecraft. Once found very resistant alloy, special beams are changing the molecular structure of a spacecraft, and brings it to a known alloy. The sustainability of armor can increase with each level at 10%.',
      'description_short' => '装甲是舰船最后的防御力量，装甲技术的提升可以使合金的防御能力得到更好的优化。每一级装甲防御技术的提升都可以使得装甲防御力提高10%',
    ),

    TECH_ENERGY => array(
      'description' => '已知：(1) 猫在半空中跳下，永远用脚着陆。(2) 依据墨菲定律（即事情如果有变坏的可能，不管这种可能性有多小，它总会发生），如果失手将一片涂有黄油的面包片抛到半空中，永远将会是涂上‎黄油的一面落地。这个悖论出现在，你把黄油吐司没有涂上黄油的一面黏着猫的背部之时，让猫从半空中跳下。依照以上两条定律，猫永远无法用脚着陆，因为黄油吐司永远在涂上黄油的一面落地；但同样的，黄油吐司涂上黄油的一面无法落地，因为猫永远用脚着陆。',
      'description_short' => '已知：(1) 猫在半空中跳下，永远用脚着陆。(2) 依据墨菲定律（即事情如果有变坏的可能，不管这种可能性有多小，它总会发生），如果失手将一片涂有黄油的面包片抛到半空中，永远将会是涂上‎黄油的一面落地。这个悖论出现在，你把黄油吐司没有涂上黄油的一面黏着猫的背部之时，让猫从半空中跳下。依照以上两条定律，猫永远无法用脚着陆，因为黄油吐司永远在涂上黄油的一面落地；但同样的，黄油吐司涂上黄油的一面无法落地，因为猫永远用脚着陆。',
    ),

    TECH_HYPERSPACE => array(
      'description' => 'By Plexus 4th and 5th dimension has become possible to explore new, more economical and efficient engine.',
      'description_short' => '通过4维和5维空间技术的结合，使发明一种新的更节能和更高效的空间移动技术成为了可能。这是一种重要的空间科技。',
    ),

    TECH_ENGINE_CHEMICAL => array(
      'description' => 'rua！摸了！每一级可以加快10%。',
      'description_short' => 'rua！摸了！每一级可以加快10%。',
    ),

    TECH_ENGINE_ION => array(
      'description' => 'Impulse engine is based on the principle of effectiveness, and warming up of matter are the nuclear reaction. You can also inject additional mass. Further development of these engines makes the following ships with each level to 20% faster: small transportation, bombers (until a researched hyperspace engine 8th level), cruisers, heavy fighter and colonizers. Each level increases the reach of interplanetary missiles.',
      'description_short' => '脉冲引擎基于反作用力的原理而设计。与简单的燃烧引擎比较之下，脉冲引擎更为先进，可以用较少的燃料消耗量获得较高的速度。每升一级可以提高20%.',
    ),

    TECH_ENGINE_HYPER => array(
      'description' => 'By spatio-temporal curvature in the immediate environment of spacecraft space shrinks, the faster the overcome long distances. The higher developed Hyperspace drive, the higher the compression space, which makes the following ships with each level of 30% faster: Hypertransport, Cruiser, Bomber (after research of 8th level), Battleship, Destroyer, Death Star and Supernova-class cruiser.',
      'description_short' => '通过对时间和空间的弯曲从而使船舰周围的空间进行压缩，从而使飞行的距离减少。这项技术水平越高，空间压缩的也越剧烈，从而达到提高速度的目的。每升一级在基础数值上，提高速度的30%.',
    ),

    TECH_LASER => array(
      'description' => 'Laser (light amplification using induced emission of radiation) produces rich energy beam of coherent light. These devices are used in all areas of optical computers before heavy lasers that freely cut armor spacecraft. Laser technology is an important element for the study of further weapons technology.',
      'description_short' => '激光技术使激光当射到某一个目标上时，造成伤害。',
    ),

    TECH_ION => array(
      'description' => 'Truly deadly beam of accelerated ions. In contact with an object they cause immense damage.',
      'description_short' => '中子技术使离子进行加速，形成一道毁灭性的光线，并且可以产生相当大的破坏力。',
    ),

    TECH_PLASMA => array(
      'description' => 'Further development of the ion technology which accelerates the ions, and energetic plasma. She has had a devastating effect in contact with an object.',
      'description_short' => '等离子科技实质上是介乎于激光科技和中子科技两种概念之的一种科技，他可以产生一道高能射线，像武器一样具有破坏力。',
    ),

    TECH_RESEARCH => array(
      'description' => '你的星球上的科学家可以经由网络互相通信。每提升一个等级，网络会自动将未连线的研究实验室加入网络中。在连线建立后，它们的等级会相加。每个连结中的研究实验室都需要有相应的等级以加入研究。只要等级足够，研究实验室会各自分担工作，效率就像它们被相加一样。',
      'description_short' => '研究实验室会各自分担工作，效率就像它们被相加一样。每提升一个等级，网络会自动将未连线的研究实验室加入网络中。',
    ),

    TECH_EXPEDITION => array(
      'description' => 'Expedition technology encompasses various scanning technology and makes it possible to equip the ships of different classes of research module. It contains a database, a small mobile laboratory, as well as various biokletki and vessels for samples. For the safety of the ship when investigating hazardous objects research module is equipped with an autonomous energy and generator of energy field, which in extreme cases can surround a powerful energy field research module.',
      'description_short' => '舰船可以配备一个研究模块，使数据备份的过程中收集来自远征的未知区域宇宙中的信息。',
    ),

    TECH_COLONIZATION => array(
      'description' => 'Ruler with many colonies, has more advantages over others.',
      'description_short' => 'This technology is very important that you could build your Empire with many colonies.',
    ),

    TECH_ASTROTECH => array(
      'description' => 'Астрокартография позволяет увеличить максимальное количество колоний и экспедиций, а так же максимальную длительность экспедиции',
      'description_short' => '远征技术允许增加殖民地和探险的最大数量，以及远征的最大持续时间。',
    ),

    TECH_GRAVITON => array(
      'description' => 'Graviton is a particle that has neither mass nor charge and determines the force of attraction. By launching the concentrated charge gravitonov can create artificial gravitational field that, like a black hole, dragging a ton, so you can destroy ships or even the moon. To produce a sufficient quantity of gravitonov requires huge amounts of energy.',
      'description_short' => '通过发射密集的重力微粒，人工的重力场被制造出来，其能量和吸引力不只可以摧毁船舰，甚至是月球。为了产生足够的重力微粒，需要大量的能量。只有最强大的殖民者才能研究这种技术。',
    ),

    SHIP_CARGO_SMALL => array(
      'description' => '额就是传说中的神（额神）【いろとりどりのセカイ——観波 加奈】学院著名女仆之一，能干，偶尔有点脱线，精通德语，学生会后勤部部长',
      'description_short' => '学院著名女仆之一，能干。',
    ),

    SHIP_CARGO_BIG => array(
      'description' => 'Thom293（293）【恋する少女と想いのキセキ——珠璃】口癖是喵~，卖萌，让制作人都万万没想到的巨乳，学生会后勤部成员。',
      'description_short' => '口癖是喵~，卖萌，让制作人都万万没想到的巨乳，学生会后勤部成员。脉冲引擎达到5级时会喵的更快。',
    ),

    SHIP_CARGO_SUPER => array(
      'description' => '拉登叔叔在吗（拉登）【仓野くんちのふたご事情——仓野美琴】二年生，与提尔是挚友，表面上看起来是个挺正经的人，但实际上相当脱线。',
      'description_short' => '二年生，与提尔是挚友，表面上看起来是个挺正经的人，但实际上相当脱线。',
    ),

    SHIP_CARGO_HYPER => array(
      'description' => 'superpartner（空降）【いろとりどりのセカイ——敷岛 镜】游戏宅，二年生，谈到游戏就开始卖萌，表面上看起来略显弱气。',
      'description_short' => '游戏宅，二年生，谈到游戏就开始卖萌，表面上看起来略显弱气。',
    ),

    SHIP_SMALL_FIGHTER_LIGHT => array(
      'description' => '人称烤羊妹妹的大型卖萌生物。',
      'description_short' => '人称烤羊妹妹的大型卖萌生物。',
    ),

    SHIP_SMALL_FIGHTER_HEAVY => array(
      'description' => 'zja1230（zja）【恋する少女と想いのキセキ——驹久利 天音】二年生，与abc是好碰友，最近似乎因为被主角卖队友而苦恼着。',
      'description_short' => '二年生，与abc是好碰友，最近似乎因为被主角卖队友而苦恼着。',
    ),

    SHIP_MEDIUM_FRIGATE => array(
      'description' => 'detheone456（456）【仓野くんちのふたご事情——仓野 泉美】三年生，一度因过于在意自己的美貌而堕落，最后被救回，学生会战斗科成员，视美貌为一切。',
      'description_short' => '三年生，一度因过于在意自己的美貌而堕落，最后被救回，学生会战斗科成员，视美貌为一切',
    ),

    SHIP_LARGE_CRUISER => array(
      'description' => '忧郁之K（K姐）【恋する少女と想いのキセキ——姫川 美朋】学院教师，但总认为自己是个废柴，战斗力未知。',
      'description_short' => '学院教师，但总认为自己是个废柴，战斗力未知。',
    ),

    SHIP_COLONIZER => array(
      'description' => '神风提尔与约翰（提尔）【仓野くんちのふたご事情——仓野 智花】二年生，精通俄语，土豪，但没得到学生会和学院长的认可所以没有被批准加入学生会。',
      'description_short' => '二年生，精通俄语，土豪。擅长将其他星球开辟为你的后宫。',
    ),

    SHIP_RECYCLER => array(
      'description' => 'phoenixsabc（abc）【your diary——榎本 香穂】二年生，虽然没有像293那样的猫耳，但总会把293视为竞争对象，脱线，但做起正事来挺认真。',
      'description_short' => '二年生，虽然没有像293那样的猫耳，但总会把293视为竞争对象，脱线，但做起正事来挺认真。',
    ),

    SHIP_SPY => array(
      'description' => 'AGM114R（AGM）【红炎の守护骑士キシャル——水城 あかり】魔法少女，学生会战斗科成员，二年生，经常因为控制不住自己的力量损坏公共设施而欠下很多债务。',
      'description_short' => '魔法少女，学生会战斗科成员，二年生，经常因为控制不住自己的力量损坏公共设施而欠下很多债务。',
    ),

    SHIP_LARGE_BOMBER => array(
      'description' => '光晕04特区（04）【アストラエアの白き永远——水ノ濑琴里】学生会主席，三年生，做事认真，女仆，喜欢带着一把太刀，战斗力也是学院公认的，不过一看到建筑图纸就像换了个人似的。',
      'description_short' => '学生会主席，三年生，做事认真，喜欢带着一把太刀，女仆。',
    ),

    SHIP_SATTELITE_SOLAR => array(
      'description' => 'LOVE不宜久（音梦）【your diary——绫瀬 纱雪】提尔专用OOO，人妻，二年生，能干。',
      'description_short' => '提尔专用OOO，人妻，二年生，能干。',
    ),

    SHIP_LARGE_DESTRUCTOR => array(
      'description' => '343圣堂防卫者（圣堂）【恋する少女と想いのキセキ——トワ】腹黑，土豪，三年生，学生会战斗科成员，喜欢卖萌，但认真起来也是很厉害的。',
      'description_short' => '腹黑，土豪，三年生，学生会战斗科成员，喜欢卖萌，但认真起来也是很厉害的。',
    ),

    SHIP_HUGE_DEATH_STAR => array(
      'description' => '而纷纷（纷纷）【いろとりどりのセカイ——二阶堂真红】二年生，学生会战斗科成员，傲娇。但有时却意外的人妻。',
      'description_short' => '二年生，学生会战斗科成员，傲娇。但有时却意外的人妻。',
    ),

    SHIP_LARGE_BATTLESHIP => array(
      'description' => '士官长约翰2号（劳尔）【いろとりどりのセカイ——如月 澪】典型的好学生类型，做事认真，学生会支援部部长。',
      'description_short' => '典型的好学生类型，做事认真，学生会支援部部长。',
    ),

    SHIP_HUGE_SUPERNOVA => array(
      'description' => '夜刃妹妹（DARLING in the FRANXX——002）。你最好祈祷不要和她共事。',
      'description_short' => '你最好祈祷不要和她共事。',
    ),

    SHIP_HUGE_SUPERNOVA => array(
      'description' => '这是一艘使用了来自福岛和切尔诺贝利的纯天然矿物质在美国造船厂拼装起来后送往德国用油纸包好的战舰，需要三名绝地武士和三名爆种者用克林贡语吟诵阿瓦达索命咒方可启动。',
      'description_short' => '这是一艘靠奇迹启动的非洲战舰。',
    ),

    UNIT_DEF_TURRET_MISSILE => array(
      'description' => 'Launcher is a simple and inexpensive means of defence. Because this is the development of conventional ballistic artillery shells, it does not require further upgrading. The small cost of its production justifies its use against smaller fleets, but over time it loses value. Later it is used only for withdrawal of enemy shots. Defensive deactivates itself once they severely damaged. Recoverability of the fortifications after a battle with up to 70%.',
      'description_short' => 'Launcher is a simple and inexpensive means of defence.',
    ),

    UNIT_DEF_TURRET_LASER_SMALL => array(
      'description_short' => 'Using the concentrated attack targets photons can be achieved much great destruction than conventional ballistic weapons.',
      'description' => '',
    ),

    UNIT_DEF_TURRET_LASER_BIG => array(
      'description' => 'Heavy laser represents a further development of the laser light. Structure has been reinforced and improved with new materials. Wrapper could do much more resistant. At the same time has been improved and energy system and the target computer, so heavy laser can concentrate much more on target. Defensive deactivates itself once they severely damaged. Recoverability of the fortifications after a battle with up to 70%.',
      'description_short' => 'Heavy laser represents a further development of laser light.',
    ),

    UNIT_DEF_TURRET_GAUSS => array(
      'description_short' => 'Coilgun accelerates mnogotonnye charges with gigantic energy costs.',
      'description' => '',
    ),

    UNIT_DEF_TURRET_ION => array(
      'description_short' => 'Ion Cannon directs to the purpose of wave ion, which destabilizes the shields and damages the electronics.',
      'description' => '',
    ),

    UNIT_DEF_TURRET_PLASMA => array(
      'description' => 'Laser technology was brought to perfection, Ionic technology has reached the final stage and was thought to be virtually impossible, even qualitatively Cannon system to achieve even greater efficiency. But everything was to change when the idea to combine both systems. Using the technology of nuclear fusion, laser heat the substance (usually a deuterium) up to ultrahigh temperatures reaching millions of degrees. Ionic technology provides enrichment plasma electric charge, its stabilization and acceleration. Once electric charge sufficiently warmed, ionized and is under pressure, it produce using accelerators in the direction of the goal. Glowing bluish color plasma Bowl looks awesome, the only question is, how long they will enjoy the command ship-purpose if after a few seconds, the armor he explodes into pieces and Electronics will burn ... Plasma turret is generally the most frightening weapons, and this technology represents a trade-off. Defensive deactivates itself once they severely damaged. Recoverability of the fortifications after a battle with up to 70%.',
      'description_short' => 'The last word in Planetary Defense technologies created a symbiosis of laser and Ion tech.',
    ),

    UNIT_DEF_SHIELD_SMALL => array(
      'description' => 'Long before the shield generators become sufficiently small to be used on ships, there is a huge generators on the surface of planets. They obvolakivali an entire planet force field that can absorb the shock of the attack. Small fleets are constantly attacking on these billboards dome. Due to the growing technological development of these boards can be even greater. Later, you can build stronger large shield dome. On every planet you can build only one small shield dome.',
      'description_short' => 'Small shield protects the planet and absorbs shock attack.',
    ),

    UNIT_DEF_SHIELD_BIG => array(
      'description' => 'Further development of the small shield dome. It can deter even stronger attack to planet, consuming significantly more energy.',
      'description_short' => 'Further development of the small shield dome. It can deter even stronger attack to planet, consuming significantly more energy.',
    ),

    UNIT_DEF_SHIELD_PLANET => array(
      'description' => 'The best protection for your planets',
      'description_short' => 'The best protection for your planets',
    ),

    UNIT_DEF_MISSILE_INTERCEPTOR => array(
      'description' => 'Rocket interceptors destroy attacking interplanetary missiles. An interceptor missile destroys one interplanetary missile.',
      'description_short' => 'Rocket interceptors destroy attacking interplanetary missiles',
    ),

    UNIT_DEF_MISSILE_INTERPLANET => array(
      'description_short' => 'Interplanetary missiles destroy enemy defenses',
      'description' => '',
    ),

    MRC_TECHNOLOGIST => array(
      'description' => 'CuSO4 is a recognized expert in astromineralogy and crystalography. With his team of Metalurgists and chemists, he supported the interplanetary Government when developing new resources and optimize their refinery.',
      'description_short' => 'CuSO4 is a recognized expert in astromineralogy and crystalography. With his team of Metalurgists and chemists, he supported the interplanetary Government when developing new resources and optimize their refinery.',
      'effect' => '每一级都能提升金属、晶体、重氢和能量的生产效率。',
    ),

    MRC_ENGINEER => array(
      'description' => 'Gear is expert in structures and ship building',
      'description_short' => 'Gear is expert in structures and ship building',
      'effect' => '每一级都能提升建造建筑和少女的速度<br />+1 slot per level to planet structures and hangar queries',
    ),

    MRC_FORTIFIER => array(
      'description' => 'Fortifier - Army Engineer. His in-depth knowledge of defensive systems allow you to shorten planet defense building time',
      'description_short' => 'Fortifier - Army Engineer. His in-depth knowledge of defensive systems allow you to shorten planet defense building time',
      'effect' => 'per level to construction speed of missiles and defense structures<br />+10% per level to attack, armor and shields when defending planet<br />+1 slot per level to defence structures and missile queries',
    ),

    MRC_STOCKMAN => array(
      'description' => 'Cargo-master is a highly skilled specialist in storage. His genius allows you to get the most out of storage resources to increase their effective capacity beyond the builders.',
      'description_short' => 'Cargo-master is a highly skilled specialist in storage. His genius allows you to get the most out of storage resources to increase their effective capacity beyond the builders.',
      'effect' => 'size of warehouses for each level',
    ),

    MRC_SPY => array(
      'description' => 'Spy-master person Empire. He had hundreds of thousands of individuals and a million ideas for mask works, defensive networks and fleets. Everyone who saw his real face, is now dead.',
      'description_short' => 'Spy-master person Empire. He had hundreds of thousands of individuals and a million ideas for mask works, defensive networks and fleets. Everyone who saw his real face, is now dead.',
      'effect' => 'level of spying for each level',
    ),

    MRC_ACADEMIC => array(
      'description' => 'Academicians are actors Guild Technocrats. Their mind and scholars degree allow them Excel in their acts even constructors. They specialize in the field of technological progress.',
      'description_short' => 'Academicians are actors Guild Technocrats. Their mind and scholars degree allow them Excel in their acts even constructors. They specialize in the field of technological progress.',
      'effect' => 'per level to technology research speed',
    ),

//    MRC_DESTRUCTOR => array(
//      'description' => 'Destroyer, a ruthless army officer. He suggests how the Empire\'s planets brutal methods should be. The same Destroyer has developed technology and manufactures Deathstars.',
//      'effect' => 'Allows to build Deathstars in the shipyard',
//    ),

    MRC_ADMIRAL => array(
      'description' => 'Admiral is tried by war veteran and a brilliant strategist. Even in the hottest fights he doesn\'t lose a review and maintains contact with commanders fleets. The wise ruler can rely on him in battle and thereby use to battle more ships.',
      'description_short' => 'Admiral is tried by war veteran and a brilliant strategist. Even in the hottest fights he doesn\'t lose a review and maintains contact with commanders fleets. The wise ruler can rely on him in battle and thereby use to battle more ships.',
      'effect' => 'armor, shields and attack ships for each level',
    ),

    MRC_COORDINATOR => array(
      'description' => 'The Coordinator is an expert in managing fleets. His knowledge can make the most of the fleet management system.',
      'description_short' => 'The Coordinator is an expert in managing fleets. His knowledge can make the most of the fleet management system.',
      'effect' => 'additional fleet for each level',
    ),

    MRC_NAVIGATOR => array(
      'description' => 'Navigator-genius in calculating the trajectories of fleets. His knowledge of laws warp drive-space device jump-drive and technologies all existing types of engines can speed flying ships.',
      'description_short' => 'Navigator-genius in calculating the trajectories of fleets. His knowledge of laws warp drive-space device jump-drive and technologies all existing types of engines can speed flying ships.',
      'effect' => 'speed of ships for each level',
    ),

//    MRC_ASSASIN => array(
//      'description' => 'Assasin is a trusted killer. But it\'s not his only quality. Assassin has developed the new cruiser class Supernova. He is the only person who can manage this ship.',
//      'effect' => 'Allows to build Supernova Cruisers in the shipyard',
//    ),

    MRC_EMPEROR => array(
      'description' => 'Emperor - your personal assistant and Deputy. The accuracy of its reports and punctuality in everything-his best qualities, capable of total control over the Empire.',
      'description_short' => 'Emperor - your personal assistant and Deputy. The accuracy of its reports and punctuality in everything-his best qualities, capable of total control over the Empire.',
      'effect' => 'Allows you to change the characteristics of the Emperor',
    ),

    ART_LHC => array(
      'description' => 'LHC creates waves of gravitons that forces debris to concentrate in one place<br /><span class=warning>WARNING! Using of LHC is not a guarantee to creation of new moon!</span>',
      'effect' => 'Allows another chance to create moon<br />1% per 1.000.000 of debris but not more then 30%',
    ),

    ART_HOOK_SMALL => array(
      'description' => 'Принцип действия этого Артефакта до конца не изучен что, впрочем, не мешает его использовать. Малый Крюк телепортирует на устойчивую орбиту планеты небольшой астероид. Таким образом у планеты получается луна минимального диаметра',
      'effect' => 'Creates minimal size Moon',
    ),

    ART_HOOK_MEDIUM => array(
      'description' => 'Принцип действия этого Артефакта до конца не изучен что, впрочем, не мешает его использовать. Средний Крюк телепортирует на устойчивую орбиту планеты астероид, создавая таким образом луну<br /><span class=warning>ВНИМАНИЕ! Размер луны СЛУЧАЕН!</span>',
      'effect' => 'Creates random size Moon',
    ),

    ART_HOOK_LARGE => array(
      'description' => 'Принцип действия этого Артефакта до конца не изучен что, впрочем, не мешает его использовать. Большой Крюк телепортирует на устойчивую орбиту планеты огромный астероид. Таким образом у планеты получается луна максимального диаметра',
      'effect' => 'Creates maximum size Moon',
    ),

    ART_RCD_SMALL => array(
      'description' => 'Small Rapid Colony Deployer (RCD) is a set of ready constructions and programs that allows deploy on planet basic colony in no time<br />
        If there are buildings on planet they will be upgraded or left intact - if their level higher then RCD\'s programming. RCD can be fully deployed on planet even when there is lack of free sectors. RCD can not be deployed on moon.<br />
        Basic colony includes Metal Mine, Crystal Mine and Deuterium Synthetizer of level 10, Solar Plant of level 14 and Robotics Factory level 4',
      'effect' => 'Instantly deploys basic colony on planet',
    ),

    ART_RCD_MEDIUM => array(
      'description' => 'Medium Rapid Colony Deployer (RCD) is a set of ready constructions and programs that allows deploy on planet advanced colony in no time<br />
        If there are buildings on planet they will be upgraded or left intact - if their level higher then RCD\'s programming. RCD can be fully deployed on planet even when there is lack of free sectors. RCD can not be deployed on moon.<br />
        Advanced colony includes Metal Mine, Crystal Mine and Deuterium Synthetizer of level 15, Solar Plant of level 20 and Robotics Factory level 8',
      'effect' => 'Instantly deploys advanced colony on planet',
    ),

    ART_RCD_LARGE => array(
      'description' => 'Large Rapid Colony Deployer (RCD) is a set of ready constructions and programs that allows deploy on planet improved colony in no time<br />
        If there are buildings on planet they will be upgraded or left intact - if their level higher then RCD\'s programming. RCD can be fully deployed on planet even when there is lack of free sectors. RCD can not be deployed on moon.<br />
        Improved colony includes Metal Mine, Crystal Mine and Deuterium Synthetizer of level 20, Solar Plant of level 25, Robotics Factory level 10 and Nanite Factory level 1',
      'effect' => 'Instantly deploys improved colony on planet',
    ),

    ART_HEURISTIC_CHIP => array(
      'description' => 'Эвристический чип - уникальный преинсталлированный набор программ, записанных на кристаллический носитель. Подключаясь к исследовательской сети, алгоритмы чипа способны проанализировать текущее состояние исследования и выдать новые эффективные эвристики, таким образом значительно сокращая время исследования. Однажды активированный чип невозможно перенастроить на другое исследование. К сожалению, как и с любым другим кристаллическим чипом, декомпиляция &quot;зашитой&quot; программы принципиально невозможна, равно как и копирование сборщиками.',
      'effect' => 'Уменьшает время текущего исследования в два раза (если до конца исследования осталось больше часа) или моментально заканчивает его (если до конца исследования осталось меньше 1 часа, но больше 1 минуты)', //. Если времени исследования осталось менее часа - остаток не переходит на следующий слот в очереди',
    ),

    ART_NANO_BUILDER => array(
      'description' => 'Как известно, сборщики обычно не используются в строительстве крупных объектов типа зданий. Экономически целесообразней возводить строения методом традиционной &quot;блочной сборки&quot;, когда отдельные стандартизированные детали производятся на роботизированных фабриках. Однако специализированные наносборщики оказываются эффективнее традиционных методов. Эти крошечные роботы собраны в преконфигурированные пакеты, каждый из которых обладает своим собственным роевым суб-ИИ. Анализируя текущее состояние возводимого здания, наностроители безошибочно находят узкие места и вычисляют наиболее эффективные пути ускорения строительства. Пакет является одноразовым и после использования больше непригоден к работе. Вдобавок инициированный пакет уже невозможно перенастроить на интеграцию с другой стройкой. Хотя сборщики и способны воспроизвести отдельно взяты наностроитель, но без управляющего кристалла такая реплика является не более чем масштабной моделью...',
      'effect' => 'Уменьшает время постройки/разрушения текущего здания на данной планете в два раза (если до конца процесса осталось больше часа) или моментально заканчивает его (если до конца процесса меньше 1 часа, но больше 1 минуты)', // . Если времени строительства осталось менее часа - остаток не переходит на следующий слот в очереди',
    ),


    UNIT_PLAN_STRUC_MINE_FUSION  => array(
      'description' => 'Allows to build on planets sturcture &quot;Thermonuclear plant&quot;',
      'effect' => 'Allows to build on planets sturcture &quot;Thermonuclear plant&quot;',
    ),

    UNIT_PLAN_SHIP_CARGO_SUPER  => array(
      'description' => 'Allows to build on planet\'s hangars &quot;Super Cargo&quot; ships',
      'effect' => 'Allows to build on planet\'s hangars &quot;Super Cargo&quot; ships',
    ),

    UNIT_PLAN_SHIP_CARGO_HYPER  => array(
      'description' => 'Allows to build on planet\'s hangars &quot;Hypercargo&quot; ships',
      'effect' => 'Allows to build on planet\'s hangars &quot;Hypercargo&quot; ships',
    ),

    UNIT_PLAN_SHIP_DEATH_STAR  => array(
      'description' => 'Allows to build on planet\'s hangars &quot;Death Star&quot; ships',
      'effect' => 'Allows to build on planet\'s hangars &quot;Death Star&quot; ships',
    ),

    UNIT_PLAN_SHIP_SUPERNOVA  => array(
      'description' => 'Allows to build on planet\'s hangars &quot;Supernova&quot;-class cruisers',
      'effect' => 'Allows to build on planet\'s hangars &quot;Supernova&quot;-class cruisers',
    ),

    UNIT_PLAN_DEF_SHIELD_PLANET  => array(
      'description' => 'Allows to build on planets defense system &quot;Planet protector&quot;',
      'effect' => 'Allows to build on planets defense system &quot;Planet protector&quot;',
    ),


    RES_METAL => array(
      'description' => 'Metametallic iron-normed energy-neutraul compound (shortly &quot;metal&quot;) is a basic raw material from which nanobots produces all materials and details used in construction and research. Metal comes in ignots. Each ignot volume is 127 litres and weights 1 metric tonn including protective case. &quot;Iron-normed&quot; means that standard pack of nanobot will produce from 1 ignot 1 tonn of pure iron. &quot;Energy-neutral&quot; means that nanobots will use exact amount of energy which can be extracted from ignot. &quot;Metametallic compaund&quot; means that ignot can include simple and complex chemical substances. Composition of metal ignot can differ from planet to planet and from mine to mine - but their physical characteristics remain the same. Usually metal is slightly radioactive',
      'effect' => '',
    ),

    RES_CRYSTAL => array(
      'description' => 'Crystal is a complex termoplastic polymer which demonstrates Superlight Conduction Effect. SCE - increasing photon speed in a crystall above 300000 km/s. All modern computers uses crystall as material for processing and memory units. Residuals (&quot;anomal assemblies&quot; - i.e. polymers that has same formula but didn\'t demonstrates SCE) used in solar panels whose efficiency is about 100%. Specially selected crystal is a main part of jump-drive - device which allow faster-then-light travels',
      'effect' => '',
    ),

    RES_DEUTERIUM => array(
      'description' => 'Deuterium, also called heavy hydrogen, is one of two stable isotopes of hydrogen. The nucleus of deuterium, called a deuteron, contains one proton and one neutron, whereas the far more common hydrogen isotope, protium, has no neutron in the nucleus. Deuterium used as fuel for termonuclear reactors and all types of ship engines. It is stored in liquefied form in a standard thermally insulated containers which also is a fuel cells for reactors and engines. Ship cargo bays with automatic feeders also serves as &quot;fuel tank&quot; for any ship',
      'effect' => '',
    ),

    RES_ENERGY => array(
      'description' => 'Electric energy - unified type of energy that used everywhere. On planets it\'s usually produced on solar stations and solar sattelites. On space ships and some colonies too far from sun it\'s produced on termonuclear reactors and plants - respectivly',
      'effect' => '',
    ),

    RES_DARK_MATTER => array(
      'description' => '<span class="dark_matter">Dark Matter</span> is a matter that neither emits nor scatters light or other electromagnetic radiation, and so cannot be directly detected via optical or radio astronomy. From it we can get an incredible amount of energy. Because of this, and also because of the complexities associated with its production of <span class="dark_matter">Dark Matter</span> is highly appreciated.',
      'effect' => '',
    ),

    UNIT_PLANET_DENSITY => array(
      'description' => '平均行星密度（以下简称“密度”）表征了地球的地球化学成分。特别是，它非常准确地预测提取的有用物质的比例。<br /> <br />
      一般地圈行星分为气氛（气体包层），水（液体涂料），岩石圈（相对光的材料和部件硬壳），套（岩石圈和芯之间的中间鞘）和芯（最坚硬的物质和元素，是在高压的地球的中心）。<br /> <br />
      对密度的主要影响是核心。它包含行星的主要质量，随着您从地球中心向其表面上升，化合物的密度降低。<br /> <br />
      因此，完全决定了采矿类型和水平的核心类型。 <br> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
      例如，考虑一个具有冰芯的行星。它包括一个冰水与少量的其他物质，地幔 - 甲烷从固体和岩石圈 - 结晶氢<br />。
      在绝大多数这样的行星被发现在恒星系统的外围。他们看起来像他们的名字：巨大的冰块。<br />
      然而，有时这样的星球可能会变成星星周围的低轨道。通常这是发生在恒星系统碰撞之后。此外，一颗星星可以用其重力抓住一些徘徊的行星。<br />
      接近星星改变了地球。它由轻质气体（氢气和氦气）形成快速演变的气氛，有时甚至是液态氢气和甲烷的水圈。然而，地球的核心仍然是冰。<br />
      这样的星球的存在在普遍规模上是非常短暂的，但考虑到相同的尺度，很有可能发现这样的星球。
      <br />
      <br />

内核的类型可以在<a href="overview.php?mode=manage" class="link ok">“行星管理”</a>（菜单项“星球”，页面上的“管理”）按钮之后更改。 。
      改变核心类型的成本取决于地球本身的部门数量，而不考虑Terraformers的部门，但考虑到为TM购买的部门。新内核类型的代价不取决于当前的内核类型。
      在单个类中提取资源在消耗的TM方面大概相同（如何确定提取方式 - 见下表）。
      稀有类的内核更昂贵，但也会提供更多的资源（见上文）。<br /> <br />

      有10种类型的内核，分为四类：
      <table>
        <tr class="c_c">
          <th rowspan="2">内核类型</th>
          <th colspan="2">密度，kg / m&sup3;</th>
          <th colspan="3">萃取</th>
          <th rowspan="2">类</th>
        </tr>
        <tr class="c_c">
          <Th>最小</ th>
          <Th>最大</ th>
          <Th>金属</ th>
          <Th>晶体</ th>
          <Th>重氢</ th>
        </tr>

        <tr class="c_c">
          <th>氢冰星</th>
          <td>250</td>
          <td>750</td>
          <td class="error">很糟糕</td>
          <td class="warning">不良</td>
          <td class="positive">优秀</td>
          <td class="error">稀有</td>
        </tr>

        <tr class="c_c">
          <th>甲烷星</th>
          <td>750</td>
          <td>1250</td>
          <td class="warning">不良</td>
          <td class="notice">不错</td>
          <td class="positive">非常好</td>
          <td class="warning">Редкий</td>
        </tr>

        <tr class="c_c">
          <th>冰水星</th>
          <td>1250</td>
          <td>2000</td>
          <td class="notice">不错</td>
          <td class="notice">不错</td>
          <td class="positive">良好</td>
          <td class="notice">高级</td>
        </tr>

        <tr class="c_c">
          <th>水晶星</th>
          <td>2000</td>
          <td>2500</td>
          <td class="error">非常糟糕</td>
          <td class="positive">优秀</td>
          <td class="warning">不良</td>
          <td class="error">稀有</td>
        </tr>

        <tr class="c_c">
          <th>盐碱星</th>
          <td>2500</td>
          <td>3500</td>
          <td class="warning">不良</td>
          <td class="positive">非常好</td>
          <td class="notice">不错</td>
          <td class="warning">稀有</td>
        </tr>

        <tr class="c_c">
          <th>石灰星</th>
          <td>3500</td>
          <td>4750</td>
          <td class="notice">不错</td>
          <td class="positive">良好</td>
          <td class="notice">不错</td>
          <td class="notice">高级</td>
        </tr>

        <tr class="c_c">
          <th>宜居星球</th>
          <td>4750</td>
          <td>5750</td>
          <td>标准</td>
          <td>标准</td>
          <td>标准</td>
          <td>基本</td>
        </tr>

        <tr class="c_c">
          <th>矿物星</th>
          <td>5750</td>
          <td>7000</td>
          <td class="positive">良好</td>
          <td class="notice">不错</td>
          <td class="notice">不错</td>
          <td class="notice">高级</td>
        </tr>
        <tr class="c_c">
          <th>橄榄星</th>
          <td>7000</td>
          <td>8250</td>
          <td class="positive">非常好</td>
          <td class="notice">很不错</td>
          <td class="warning">不良</td>
          <td class="warning">稀有</td>
        </tr>
        <tr class="c_c">
          <th>金属星</th>
          <td>8250</td>
          <td>9500</td>
          <td class="positive">优秀</td>
          <td class="error">很糟</td>
          <td class="error">很糟</td>
          <td class="error">稀有</td>
        </tr>
      </table><br />

在考察中可以找到的核心课程受到天文制图的有效水平的限制（即考虑到所有奖金的水平：从本地世界，高级帐户，游戏中的动作等）。
      这是为了方便初学者的游戏并平衡起始条件
      例如，如果发现的第一个殖民地具有核“氢冰”的类型 - 新玩家对地球的发展受到强烈的惩罚（“稀有”类的行星是非常难建立的，而正常建设需要从其他行星运送其他类型的资源）。
      <ul>
        <li>如果天文摄影的有效水平低于6级 - 可以找到具有“标准”和“高级”内核的行星;</li>
        <li>6-10 - 您还可以找到具有“稀有”类的内核的行星;</li>
        <li>超过 11 - 您还可以找到具有“稀有”类的内核的行星.</li>
      </ul>
      <br />

      采矿被认为是将这种类型的资源提取到标准类型的核心的百分比，就是将金属减少到矿山的成本：
      <ul>
        <li><span class="error">Очень плохая</span> - менее 40%</li>
        <li><span class="warning">Плохая</span> - не меньше 40%, но менее 80% </li>
        <li><span class="notice">Неплохая</span> - не меньше 80%, меньше 100% </li>
        <li>Неплохая - 100% базовой добычи</li>
        <li><span class="ok">Хорошая/span> - больше 100%, но меньше 300%</li>
        <li><span class="ok">Очень хорошая</span> - больше 300%, но меньше 400%</li>
        <li><span class="ok">Отличная</span> - больше 400%</li>
      </ul><br/>
      核心类型类别定义为按照最大可实现水平的等效成本计算的矿物金属，以标准核心类型提取所有资源的百分比：
      <ul>
        <li>"Базовый" класс ядер - 100% от базовой добычи. Включает только ядра типа "Стандарт" - самый распространенный тип ядра планеты (примерно треть от всех планет)</li>
        <li>
          <span class="notice">Продвинутый</span> - более 100%, но менее 150% от базовой добычи.
            Включает в себя ядра типа "Руда", "Камень" и "Водный лёд".
            Самый распространенный класс ядер - примерно половина планет содержат ядра этого класса;
        </li>
        <li><span class="warning">Редкий</span> - не меньше 150%, но менее 250% от базовой добычи. Включает в себя ядра типа "Оливин", "Силикат" и "Метановый лёд". Как не сложно понять из названия класса - встречается редко;</li>
        <li><span class="error">Раритет</span> - не меньше 250% от базовой добычи. Включает в себя ядра типа "Металл", "Кристалл" и "Водородный лёд". Встречается ОЧЕНЬ редко - менее 5% планет содержат ядра этого класса.</li>
      </ul><br />
',
    ),
  )
);
