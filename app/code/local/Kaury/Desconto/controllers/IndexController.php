<?php

class Kaury_Desconto_IndexController extends Mage_Core_Controller_Front_Action {

public function indexAction() {

$preco = $_product-> getFinalPrice($this->getProduct()->getFinalPrice());
$desconto = Mage::getData('desconto');
$precoDesc = $preco * (1 - ($desconto/100));
 echo 'ou '.Mage::helper('core')->currency($precoDesc);

		}
	}
?>
