<?php defined('_JEXEC') or die;require_once dirname(__FILE__) . '/helper.php';							$title= $params->get('title'); 			$subtitle= $params->get('subtitle');		 			$noofrows= $params->get('noofrows');		 		     $autoplay= $params->get('autoplay');		 		     $autoplayspeedoptional= $params->get('autoplayspeedoptional');		 		     $displaybullets= $params->get('displaybullets');		 		     $displayarrows= $params->get('displayarrows');		  		     $featuredproducts= $params->get('featuredproducts');		 		     $newarrival= $params->get('newarrival');		 		     $hotproducts= $params->get('hotproducts');		 		     $bestseller= $params->get('bestseller');			     $selectcategory= $params->get('selectcategory');				$item= jdprice::getdata($selectcategory);			//echo "<pre>";			//print_r($item);			 		    $count= count($item);						require JModuleHelper::getLayoutPath('mod_jd_hikashop'); 		?>