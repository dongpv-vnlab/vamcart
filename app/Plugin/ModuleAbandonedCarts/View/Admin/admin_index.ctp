<?php 
/* -----------------------------------------------------------------------------------------
   VamCart - http://vamcart.com
   -----------------------------------------------------------------------------------------
   Copyright (c) 2011 VamSoft Ltd.
   License - http://vamcart.com/license.html
   ---------------------------------------------------------------------------------------*/

$this->Html->script(array(
	'modified.js',
	'jquery/plugins/jquery-ui-min.js',
	'tabs.js',
	'focus-first-input.js'
), array('inline' => false));

	echo $this->Html->css('ui.tabs', null, array('inline' => false));

	echo $this->Admin->ShowPageHeaderStart($current_crumb, 'abandoned.png');

echo $this->Admin->StartTabs();
			echo '<ul>';
			echo $this->Admin->CreateTab('main',__('Main'), 'main.png');
			echo $this->Admin->CreateTab('options',__('Options'), 'options.png');			
			echo '</ul>';

echo $this->Admin->StartTabContent('main');
echo '<table class="contentTable">';

echo $this->Html->tableHeaders(array(  __('Order Id'), __('Number of Products'), __('Date Placed')));

foreach($data AS $order)
{
	echo $this->Admin->TableCells(
		  array(
			$this->Html->link($order['Order']['id'],'/module_abandoned_carts/admin/admin_manage/' . $order['Order']['id']),
			count($order['OrderProduct']),
			$this->Time->niceShort($order['Order']['created'])
		   ));
}

echo '</table>';
echo $this->Admin->EmptyResults($data);

echo $this->Admin->EndTabContent();
echo $this->Admin->StartTabContent('options');

		echo $this->Html->link(__('Click here to purge all Abandoned Carts.'),'/module_abandoned_carts/admin/purge_old_carts/',null,__('Are you sure?'));
	
echo $this->Admin->EndTabContent();

echo $this->Admin->EndTabs();

echo $this->Admin->ShowPageHeaderEnd();

?>