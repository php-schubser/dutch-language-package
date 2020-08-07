<?php
/**
 *
 * @package    micropayment
 * @copyright  Copyright (c) 2015 Micropayment GmbH (http://www.micropayment.de)
 * @author     micropayment GmbH <shop-plugins@micropayment.de>
 */
require_once('mcp_service.php');
define('MODULE_PAYMENT_MCP_CREDITCARD_TEXT_DESCRIPTION', 'micropayment&trade; Creditcardmodule
<br /><br />
Links<br />
<b>Gereedschap</b><br />
<a target="_new" href="../callback/micropayment/cleanup.php">
    <input type="button" value="Te plaatsen bestellingen">
</a><br />
<br />
<b>Extern</b><br />
<a href="http://ecommerce.micropayment.de/download/modified/micropayment_modified-shop_2.x.pdf?version=2.1.0">
    <input type="button" value="Handleiding">
</a>&nbsp;
<a target="_new" href="https://r120.micropayment.de">
    <input type="button" value="Registratie van microbetalingen">
    </a>
');
define('MODULE_PAYMENT_MCP_CREDITCARD_TEXT_TITLE', 'micropayment&trade; creditcard');
define('MODULE_PAYMENT_MCP_CREDITCARD_TEXT_TITLE_EXTERN', 'Kreditkarte');

define('MODULE_PAYMENT_MCP_CREDITCARD_TEXT_INFO', '
<div style="margin:10px;">
    <div style="float:right;"><img src="./images/micropayment/logo_small.png" width="150"/></div><div style="float:left;">
    <b>Houd uw creditcardgegevens bij de hand.</b></br />
    Om uw bestelling af te ronden, zullen we u nu doorverwijzen naar de website<br /> van onze betaaldienstverlener micropayment&trade;.<br /><br />
    &#10004; beveiligde &nbsp; &#10004; eenvoudigweg &nbsp; &#10004; inschrijvingsvrij

    </div>
</div>
');
define('MODULE_PAYMENT_MCP_CREDITCARD_STATUS_TITLE','Creditcard');
define('MODULE_PAYMENT_MCP_CREDITCARD_STATUS_DESC','Creditcardmodule van micropayment&trade;');
define('MODULE_PAYMENT_MCP_CREDITCARD_MINIMUM_AMOUNT_TITLE','Minimum bestelwaarde');
define('MODULE_PAYMENT_MCP_CREDITCARD_MINIMUM_AMOUNT_DESC','Minimum bestelwaarde');
define('MODULE_PAYMENT_MCP_CREDITCARD_MAXIMUM_AMOUNT_TITLE','Maximale bestelwaarde');
define('MODULE_PAYMENT_MCP_CREDITCARD_MAXIMUM_AMOUNT_DESC','Maximale bestelwaarde');
define('MODULE_PAYMENT_MCP_CREDITCARD_SORT_ORDER_TITLE','Positionering');
define('MODULE_PAYMENT_MCP_CREDITCARD_SORT_ORDER_DESC','Positie in de lijst van betalingswijzen');
define('MODULE_PAYMENT_MCP_CREDITCARD_ALLOWED_TITLE','Landselectie');
define('MODULE_PAYMENT_MCP_CREDITCARD_ALLOWED_DESC','Laat alleen orders uit de landen toe (met komma\'s gescheiden lijst, bijv. DE,EN).');
