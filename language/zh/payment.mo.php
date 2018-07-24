<?php

/*
#############################################################################
#  Filename: payment.mo.php
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
*/

/**
* DO NOT CHANGE
*/

if (!defined('INSIDE')) die();

$a_lang_array = (array(
  // Metamatter
  'sys_metamatter_what_header' => 'What is <span class="metamatter">Metamatter</span>',
  'sys_metamatter_what_description' => '<span class="metamatter">Metamatter</span> (shortly <span class="metamatter">MM</span>) - это весьма условное название для особого состояния Вселенной. Фактически - это даже не материя, а факторизируемая вероятность.<br /><br />
  У <span class="metamatter">Метаматерии</span> нет состояния - и в то же время она находится во всех состояних. <span class="metamatter">Метаматерия</span> нигде не находится - и в то же время находится везде. Потенциально метаматерия может стать чем угодно и где угодно - если правильно актуализировать вероятность.',
  'sys_metamatter_what_purchase' => 'Basically <span class="metamatter">Metamatter</span> is a "Buyable <span class="dark_matter">Dark Matter</span>" - when there is lack of <span class="metamatter">DM</span> for purchase of something <span class="metamatter">MM</span> would be <span class="ok">automatically converted</span> to necessary amount of <span class="dark_matter">DM</span> as <span class="dark_matter">1 DM</span> = <span class="metamatter">1 MM</span>',

  'pay_mm_convert_header'=>'将Metamateria转换成黑暗物质',
  'pay_mm_convert_text'=>'超材料以1到1的速率转换为暗物质',
  'pay_mm_convert_no_mm'=>'没有超材料 - 先买',
  'pay_mm_convert_prefix'=>'Metamateria Units',
  'pay_mm_convert_suffix'=>'',
  'pay_mm_convert_do'=>'转换为TM',

  'pay_msg_mm_convert_wrong_amount'=>'错误量的Metamateria',
  'pay_msg_mm_convert_not_enough'=>'没有足够的Metamateria转换为黑暗物质',
  'pay_msg_mm_convert_mm_error'=>'Metamateria Quantum Change Error',
  'pay_msg_mm_convert_dm_error'=>'更改黑暗物质量的错误',

  'pay_mm_buy' => 'Purchase <span class="metamatter">Metamatter</span>',
  'pay_mm_buy_text_cost' => 'Price for',
  'pay_mm_buy_text_unit' => 'is',
  'pay_mm_buy_url_description' => 'In addition you can purchase for real money',
  'pay_mm_buy_url_get'  => 'Click here to read details',
  'pay_mm_buy_url_none' => 'Contact with server Administration to get <span class="metamatter">Metamatter</span>',

  'pay_mm_bonus_header' => '<span class="metamatter">Metamatter</span> cost and bonuses for bulk purchases',
  'pay_mm_bonus' => 'When you purchasing large amounts of <span class="metamatter">Metamatter</span> you recieve bonuses:',
  'pay_mm_bonus_each' => 'from %s <span class="metamatter">MM</span> - %d%% bonus to purchased <span class="metamatter">MM</span> amount',
  'pay_mm_bonus_text' => 'Bonus',

  'pay_mm_buy_step1_text' => 'Select amount of <span class="metamatter">MM</span> you wish to purchase, select payment system and confirm your selection',
  'pay_mm_buy_metamatter_amount' => 'Select amount of <span class="metamatter">Metamatter</span> from list',
  'pay_mm_buy_metamatter_amount_enter' => '...or enter your desired amount of <span class="metamatter">Metamatter</span>',
  'pay_mm_buy_price_for' => 'Price for',
  'pay_mm_buy_unit' => '<span class="metamatter">Metamatter</span>',
  'pay_mm_buy_select' => 'Select payment system',
  'pay_mm_buy_method_detail' => 'Некоторые способы оплаты предлагают выбор разных платёжных систем. Если платёж не проходит через одну платёжную систему - попробуйте использовать тот же способ оплаты с другой платёжной системой',
  'pay_mm_buy_confirm' => 'Confirm selection',
  'pay_mm_buy_payment_selected' => 'Purchase would be made using payment system',
  'pay_mm_buy_purchase' => 'Purchase',

  'pay_mm_buy_payment_method_more' => 'Press "Show" button, to see more payment methods',

  'pay_mm_buy_payment_method_select' => 'Select payment method',
  'pay_mm_buy_payment_method_selected' => 'Your selected payment method is',

  'pay_mm_buy_step2_text' => 'Calculated price DOES NOT includes additional commisions which payment system or payment aggregator may apply. Verify selected amount of <span class="metamatter">Metamatter</span> and selected payment system. If everything is OK press button "Purchase <span class="metamatter">Metamatter</span>". If there is any error - press button "Discard and start again"',
  'pay_mm_buy_pay' => 'Purchase <span class="metamatter">Metamatter</span>',
  'pay_mm_buy_reset' => 'Discard and start again',
  'pay_mm_buy_in_progress' => 'Payment in progress...',
  'pay_mm_buy_conversion_cost' => 'Calculated cost of %s <span class="metamatter">Metamatter</span> in payment system currency will be %s %s',
  'pay_mm_buy_cost_base' => 'Cost will be',
  'pay_mm_buy_real_income' => 'Бонус за оптовую покупку составит %s%% и на ваш игровой счёт будет зачислено %s <span class="metamatter">ММ</span>',

  'pay_currency_name' => 'Currency',
  'pay_currency_symbol' => 'Symbol',
  'pay_currency_choose' => 'Choose payment currency',
  'pay_currency_list' => array(
    'RUB' => 'Russian ruble',
    'USD' => 'Dollar USA',
    'EUR' => 'Euro',
    'UAH' => 'Ukrainian hryvna',
    'WMR' => 'WebMoney rouble',
    'WMZ' => 'WebMoney dollar',
    'WME' => 'WebMoney euro',
    'WMU' => 'WebMoney hryvna',
    'WMB' => 'WebMoney belorussian rouble',
  ),

  'pay_methods' => array(
    PAYMENT_METHOD_EMONEY =>'电子钱包',
    PAYMENT_METHOD_EMONEY_YANDEX =>'Yandex.Money',
    PAYMENT_METHOD_EMONEY_WEBMONEY_WMR =>'WebMoney WMR',
    PAYMENT_METHOD_EMONEY_WEBMONEY_WMZ =>'WebMoney WMZ',
    PAYMENT_METHOD_EMONEY_WEBMONEY_WMU =>'WebMoney WMU',
    PAYMENT_METHOD_EMONEY_WEBMONEY_WME =>'WebMoney WME',
    PAYMENT_METHOD_EMONEY_WEBMONEY_WMB =>'WebMoney WMB',
    PAYMENT_METHOD_EMONEY_QIWI =>'QIWI钱包',
    PAYMENT_METHOD_EMONEY_ELECSNET =>'Eleksnet钱包',
    PAYMENT_METHOD_EMONEY_MAILRU =>'Money@Mail.Ru',
    PAYMENT_METHOD_EMONEY_EASYPAY =>'EasyPay',
    PAYMENT_METHOD_EMONEY_RUR_W1R =>'RUR单一电子钱包',
    PAYMENT_METHOD_EMONEY_TELEMONEY =>'TeleMoney',

    PAYMENT_METHOD_BANK_CARD =>'支付卡（VISA，万事达卡等）',
    PAYMENT_METHOD_BANK_CARD_STANDARD =>'银行卡',
    PAYMENT_METHOD_BANK_CARD_LIQPAY =>'LiqPay',
    PAYMENT_METHOD_BANK_CARD_EASYPAY =>'EasyPay',
    PAYMENT_METHOD_BANK_CARD_AMERICAN_EXPRESS =>'American Express',
    PAYMENT_METHOD_BANK_CARD_JCB =>'JCB',
    PAYMENT_METHOD_BANK_CARD_UNIONPAY =>'银联',

    PAYMENT_METHOD_BANK_INTERNET =>'通过网上银行',
    PAYMENT_METHOD_BANK_INTERNET_ALFA_BANK =>'Alpha-Click',
    PAYMENT_METHOD_BANK_INTERNET_RUSSKIY_STANDART =>'俄罗斯标准银行',
    PAYMENT_METHOD_BANK_INTERNET_PROSMVYAZBANK =>'Promsvyazbank',
    PAYMENT_METHOD_BANK_INTERNET_VTB24 =>'VTB24',
    PAYMENT_METHOD_BANK_INTERNET_OCEAN_BANK =>'海洋银行',
    PAYMENT_METHOD_BANK_INTERNET_HANDY_BANK =>'HandyBank',
    PAYMENT_METHOD_BANK_INTERNET_007 =>'Bogorodsky Bank',
    PAYMENT_METHOD_BANK_INTERNET_008 =>'银行教育',
    PAYMENT_METHOD_BANK_INTERNET_009 =>'FlexBank',
    PAYMENT_METHOD_BANK_INTERNET_010 =>'FutBank',
    PAYMENT_METHOD_BANK_INTERNET_011 =>'CraneBank',
    PAYMENT_METHOD_BANK_INTERNET_012 =>'KostromaSelkombank',
    PAYMENT_METHOD_BANK_INTERNET_013 =>'利佩茨克地区银行',
    PAYMENT_METHOD_BANK_INTERNET_014 =>'独立大厦银行',
    PAYMENT_METHOD_BANK_INTERNET_015 =>'俄罗斯信托银行',
    PAYMENT_METHOD_BANK_INTERNET_016 =>'WestInterBank',
    PAYMENT_METHOD_BANK_INTERNET_017 =>'Mezhtopenergobank',
    PAYMENT_METHOD_BANK_INTERNET_018 =>'莫斯科工业。银行',
    PAYMENT_METHOD_BANK_INTERNET_019 =>'Intesa Bank',
    PAYMENT_METHOD_BANK_INTERNET_020 =>'银行城',
    PAYMENT_METHOD_BANK_INTERNET_021 =>'AVB银行',
    PAYMENT_METHOD_BANK_INTERNET_BANK24 =>'Bank24国家贷款',
    PAYMENT_METHOD_BANK_INTERNET_PRIVAT24 =>'Privat24',
    PAYMENT_METHOD_BANK_INTERNET_SBERBANK =>'Sberbank Online',

    PAYMENT_METHOD_BANK_TRANSFER =>'银行转帐',

    PAYMENT_METHOD_MOBILE =>'从手机',
    PAYMENT_METHOD_MOBILE_SMS =>'SMS',
    PAYMENT_METHOD_MOBILE_XSOLLA =>'来自移动帐户',
    PAYMENT_METHOD_MOBILE_PAYPAL_ZONG =>'从帐户或短信',
    PAYMENT_METHOD_MOBILE_MEGAPHONE =>'Megaphone',
    PAYMENT_METHOD_MOBILE_MTS =>'MTS',
    PAYMENT_METHOD_MOBILE_KYIVSTAR =>'Kyivstar',

    PAYMENT_METHOD_TERMINAL =>'付款终端',
    PAYMENT_METHOD_TERMINAL_QIWI =>'QIWI钱包',
    PAYMENT_METHOD_TERMINAL_ELECSNET =>'Eleksnet',
    PAYMENT_METHOD_TERMINAL_ELEMENT =>'移动项目',
    PAYMENT_METHOD_TERMINAL_KASSIRANET =>'Cashier.net',
    PAYMENT_METHOD_TERMINAL_IBOX =>'Ibox',
    PAYMENT_METHOD_TERMINAL_UKRAINE =>'乌克兰终端',
    PAYMENT_METHOD_TERMINAL_RUSSIA =>'俄罗斯终端',
    PAYMENT_METHOD_TERMINAL_EASYPAY =>'EasyPay',

    PAYMENT_METHOD_OTHER =>'其他方法',
    PAYMENT_METHOD_OTHER_EVROSET =>'Euroset',
    PAYMENT_METHOD_OTHER_SVYAZNOY =>'已连接',
    PAYMENT_METHOD_OTHER_ROBOKASSA_MOBILE =>'Mobile ROBOKASSA',

    PAYMENT_METHOD_GENERIC =>'上面没有列出所有可能的付款方式。如果您没有为自己找到合适的方法 - 使用聚合器的服务',
    PAYMENT_METHOD_GENERIC_XSOLLA =>'xSolla',
    PAYMENT_METHOD_GENERIC_ROBOKASSA =>'RoboKassa',
  ),

  'pay_currency_exchange_title' => 'Internal currency exchange',
  'pay_currency_exchange_rate' => 'Exchange rate',
  'pay_currency_exchange_direct' => 'Direct',
  'pay_currency_exchange_reverse' => 'Reverse',
  'pay_currency_exchange_mm' => '<span class="metamatter">MM</span> for 1 currency',
  'pay_currency_exchange_note' => 'Internal exchange rates used to calculate payment amount in payment system currency. Exchange rates does not includes commission of payment system(s)',

  'pay_msg_mm_purchase_complete'   => 'You succesfully paid for %d <span class="metamatter">Metamatter</span> via %s. You gained %s <span class="metamatter">Metamatter</span>',
  'pay_msg_mm_purchase_incomplete' => 'You payment for %d <span class="metamatter">Metamatter</span> via %s currently in progress. If you feel it wrong please contact Administration',
  'pay_msg_mm_purchase_test'       => 'Really you did not gain anything! Because it was a test payment ha-ha-ha! If you feel it wrong - contact Administration',

  'pay_msg_request_user_found' => 'User found',
  'pay_msg_request_payment_complete' => 'Платёж завершен',
  'pay_msg_request_payment_cancel_complete' => 'Платёж успешно отменён',

  'pay_msg_request_unsupported' => 'Unsupported request',
  'pay_msg_request_signature_invalid' => 'Wrong request signature',
  'pay_msg_request_user_invalid' => 'User ID is invalid',
  'pay_msg_request_server_wrong' => 'Wrong server',
  'pay_msg_request_payment_amount_invalid' => 'Wrong payment amount',
  'pay_msg_request_payment_id_invalid' => 'Wrong payment ID',
  'pay_msg_request_payment_date_invalid' => 'Wrong payment date',
  'pay_msg_request_internal_error' => 'Server internal error. Try again later',
  'pay_msg_request_paylink_unsupported' => 'This type of paylink is not supported. It\'s looks like you using outdated version of SuperNova which incompatible with selected payment module',
  'pay_msg_request_payment_write_error' => 'Payment write error',
  'pay_msg_request_payment_cancelled_already' => 'Платёж уже отменен',
  'pay_msg_request_payment_cancel_not_complete' => 'Платёж еще не завершен и не может быть отменен',
  'pay_msg_request_payment_cancelled' => '!!! Платёж отозван платёжной системой!!!',
  'pay_msg_request_payment_not_found' => 'Платёж не найден',

  'pay_msg_module_disabled' => 'Payment module disabled',

  'pay_msg_mm_request_money_and_mm_mismatched' => 'Не совпадает сумма оплаты и количество покупаемой ММ',

  'pay_msg_mm_request_amount_invalid' => 'Wrong <span class="metamatter">Metamatter</span> amount',
  'pay_msg_mm_request_config_invalid' => 'There is error in payment module configuration. Please contact server Administration',
  'pay_msg_mm_request_mm_adjust_error' => 'Error adjusting <span class="metamatter">Metamatter</span>',

  'pay_msg_request_error_db_payment_create' => 'Ошибка создания платежа в БД',
  'pay_msg_request_error_test_payment' => 'Статус платежа в БД не совпадает с информацией в запросе',
  'pay_msg_error_internal_no_external_currency_set' => 'ВНУТРЕННЯЯ ОШИБКА или ОШИБКА КОНФИГУРАЦИИ ПЛАТЁЖНОГО МОДУЛЯ! Не установлена валюта платёжной системы! Пожалуйста, сообщите Администрации сервера!',

));
