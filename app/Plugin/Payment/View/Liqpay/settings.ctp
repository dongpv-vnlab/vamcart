<?php
/* -----------------------------------------------------------------------------------------
   VamCart - http://vamcart.com
   -----------------------------------------------------------------------------------------
   Copyright (c) 2011 VamSoft Ltd.
   License - http://vamcart.com/license.html
   ---------------------------------------------------------------------------------------*/

echo $this->Form->inputs(array(
	'legend' => null,
	'liqpay.liqpay_id' => array(
	'label' => __('LiqPay ID'),
	'type' => 'text',
	'value' => $data['PaymentMethodValue'][0]['value']
	),
	
	'liqpay.liqpay_secret_key' => array(
	'label' => __('LiqPay Secret Key'),
	'type' => 'text',
	'value' => $data['PaymentMethodValue'][1]['value']
	)
	
));
?>