<?php
// $data = db_select('commerce_product', 'cp');
// $data->innerJoin('field_data_field_commerce', 'fdfc', 'fdfc.field_commerce_product_id=cp.product_id');
// $data->leftJoin('node', 'nd', 'nd.nid=fdfc.entity_id');
// $data->leftJoin('field_data_commerce_price', 'cpi', 'cp.product_id=cpi.entity_id ');
// // $data->InnerJoin('url_alias', 'ua', "CONCAT('node/', nd.nid) = ua.source");
// $data->addExpression('GROUP_CONCAT(DISTINCT cpi.commerce_price_currency_code)', 'currency
// _codes');
// $data->groupBy('cp.sku');
// $data1 = $data
//     ->condition('cpi.commerce_price_amount', '0', '>')
//     ->condition('nd.status', '1')
//     ->condition('cp.status', '1')
//     ->fields('cpi', array('commerce_price_amount'))
//     ->fields('cp', array('sku', 'title'))
//     ->execute()
//     ->fetchAll();


// // echo("<pre>");
// // print_r($data1);
// // echo("</pre>");

// print(strval($data));

/*SELECT cp.sku AS sku, cp.title AS title, GROUP_CONCAT(DISTINCT cpi.currency_code) AS currency_codes 
FROM commerce_product as cp 
INNER JOIN field_data_field_commerce as fdfc ON fdfc.field_commerce_product_id=cp.product_id 
LEFT OUTER JOIN node as nd ON nd.nid=fdfc.entity_id 
LEFT OUTER JOIN commerce_pricelist_item as cpi ON cp.sku=cpi.sku 
WHERE cpi.price_amount > 0 AND nd.status = 1 AND cp.status=1 AND cp.sku like "%TM658%"
GROUP BY cp.sku



SELECT cp.sku AS sku, cp.title AS title, GROUP_CONCAT(DISTINCT cpi.currency_code) AS currency_codes
FROM commerce_product as cp 
INNER JOIN field_data_field_commerce as fdfc ON fdfc.field_commerce_product_id=cp.product_id 
LEFT OUTER JOIN node as nd ON nd.nid=fdfc.entity_id 
LEFT OUTER JOIN commerce_pricelist_item as cpi ON cp.sku=cpi.sku 
WHERE cpi.price_amount >0 AND cp.status=1 AND nd.status =1 
GROUP BY cp.sku
*/

  /*
From here is the blogs
 */
$data = db_select('node','node');
$data->InnerJoin('field_data_field_blog_image','image','image.nid=image.entity_id');
$data->InnerJoin('file_managed','fm','image.field_blog_image_fid=fm.fid');
$data->addField('fm', 'type','fm_type');
$data->InnerJoin('field_data_field_read_time','read','node.nid=read.entity_id');
$data->InnerJoin('field_data_field_post_date','post','node.nid=post.entity_id');
// $data->InnerJoin('field_data_field_read_time','sort','node.nid=read.entity_id');
$data->InnerJoin('field_data_field_edit_date','edit','node.nid=edit.entity_id');
$data->InnerJoin('field_data_field_body_p_summary_','body','node.nid=body.entity_id');
$data->InnerJoin('url_alias', 'ua', "CONCAT('node/', node.nid) = ua.source");
$data->addExpression('SUBSTRING(fm.uri,10,(LENGTH(fm.uri) - 9))', 'fm_uri');
// $data->addExpression('GROUP_CONCAT(DISTINCT SUBSTRING(fm.uri,10,(LENGTH(fm.uri) - 9)))', 'uris');
$data->groupBy('fm.fid');
$data1=$data
        // ->condition('image.norproduct_supplementaryprotocol_display',1,'=')
        // ->condition('c.status',1,'=')
        ->condition('node.type','blog','=')
        ->condition('node.status',1,'=')
        ->condition('ua.alias',db_like('product/') . '%', 'LIKE')
        ->fields('ua',array('alias'))
    //  ->addField('fm', 'type','file_type')
        ->fields('fm',array('filemime','fid'))
        ->fields('read',array('field_read_time_value'))
        ->fields('post',array('field_post_date_value'))        
        ->fields('edit',array('field_edit_date_value'))
        ->fields('body',array('field_body_p_summary__value','field_body_p_summary__format'))
        ->fields('node',array('title','type'))
        ->execute()
        ->fetchAll();


   
// $all_info = array(array());
// $cnt=0;
// foreach ($data1 as $a)
// {
//         $cnt2 =0;
//         $all_info[$cnt][$cnt2++]= $a->skus;//0
//         $all_info[$cnt][$cnt2++]= $a->nids;//1
//         $all_info[$cnt][$cnt2++]= $a->norproduct_supplementaryprotocol_description;//2
//         $all_info[$cnt][$cnt2++]= $a->aliass;//3
//         $weight = 0;
//         if(isset($a->min_weight) && $a->min_weight!="" && $a->min_weight!=0)
//         {
//             $weight=intval($a->min_weight) * (-0.01);
//         }
//         $all_info[$cnt][$cnt2++]=$weight;//4
//         $all_info[$cnt][$cnt2++]= $a->fm_type;//5
//         $all_info[$cnt][$cnt2++]= ($a->fm_uri."");//6
//         $all_info[$cnt][$cnt2++]= $a->type;//7
//         $all_info[$cnt][$cnt2++]= $a->filemime;//8
//         $cnt++;
// }

// /*
//  *Absolutely od not un comment the next loop 
//  */
// for($i=0;$i<count($all_info);$i++)
// {
// db_insert('search_custom_knowledge_hub')
//     ->fields(array(
// 'id' => ($i+1048),
// 'node_nid' =>$all_info[$i][1],
// 'commerce_product_sku'=>$all_info[$i][0],
// 'title'=>$all_info[$i][2],
// 'file_managed_uri'=>$all_info[$i][6],
// 'url_alias' =>$all_info[$i][3],
// 'menu_links_weight' =>$all_info[$i][4],
// 'node_type'=>$all_info[$i][7],
// 'fileMime'=>$all_info[$i][8],
// 'file_type'=>$all_info[$i][5],
// 'section'=>'supplementaryprotocol',
//     ))
//     ->execute();
// }


    echo("<pre>");
    // print_r((array_unique($checking_msut_not_include)));
    // print_r($data1);
    echo("</pre>");
 ?>
