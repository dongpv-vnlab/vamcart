<?php
/* -----------------------------------------------------------------------------------------
   VamCart - http://vamcart.com
   -----------------------------------------------------------------------------------------
   Copyright (c) 2011 VamSoft Ltd.
   License - http://vamcart.com/license.html
   ---------------------------------------------------------------------------------------*/

echo $this->Form->inputs(array(
	'legend' => null,
	'interkassa.interkassa_id' => array(
	'label' => __('InterKassa ID'),
	'type' => 'text',
	'value' => $data['PaymentMethodValue'][0]['value']
	),
	
	'interkassa.interkassa_secret_key' => array(
	'label' => __('InterKassa Secret Key'),
	'type' => 'text',
	'value' => $data['PaymentMethodValue'][1]['value']
	)
	
));
?>