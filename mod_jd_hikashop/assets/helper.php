<?php
 // Licensed under the GPL v3
// no direct access
defined('_JEXEC') or die('Restricted access');

 
class jdprice
{
	 public static  function getdata($selectcategory)
		{		 try{
						$db = JFactory::getDbo();
		  
							$query = "select *
								from #__hikashop_product_category pcat
								JOIN
								#__hikashop_product p
								JOIN
								#__hikashop_category c
								JOIN
								#__hikashop_file f
								JOIN
								#__hikashop_price 
								JOIN 
								#__hikashop_currency  
								WHERE 
								pcat.category_id = 	c.category_id
								AND pcat.product_id = 	p.product_id 
								AND f.file_ref_id = p.product_id
								AND #__hikashop_price.price_product_id = p.product_id
								AND #__hikashop_price.price_currency_id =#__hikashop_currency.currency_id
								AND c.category_name='$selectcategory'
								AND f.file_type='product'
								AND p.product_published=1
								GROUP BY f.file_ref_id ORDER BY p.product_hit
								LIMIT 0, 8";			
							$db->setQuery($query);
							$items = $db->loadAssocList();
							return $items;
					}
					catch(Exception $e){
									echo 'Caught exception: ',  $e->getMessage(), "\n";
						}
		}
}
?>