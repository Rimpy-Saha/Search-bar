<?php	
// include('includes/page/section-page-title.inc');
include('includes/page/section-main-content.inc');
?>

<?php 
//  $data = db_select('commerce_product','c');
//  $data->InnerJoin('field_data_field_size','s','c.product_id=s.entity_id');

//  $data->InnerJoin('node','nd','nd.title=c.title');
//  $data->LeftJoin('field_data_norproduct_imagekit','fi','nd.nid = fi.entity_id');
//  $data->LeftJoin('file_managed','fm','fi.norproduct_imagekit_fid = fm.fid');
//  $data->InnerJoin('field_data_body','fdb','fdb.entity_id=nd.nid');
//  $data->InnerJoin('url_alias', 'ua', "CONCAT('node/', nd.nid) = ua.source");
//  $data->LeftJoin('menu_links', 'ml', "CONCAT('node/', nd.nid) = ml.link_path");
//  $data->condition('c.status',1,'=')
//          ->condition('nd.status',1,'=')
//          ->condition('ua.alias',db_like('product/') . '%', 'LIKE')
//          ->condition(db_or()->condition('fi.delta',0,'=')->isNull('fi.delta'))
//          ->fields('c',array('sku','title'))
//          ->fields('s',array('field_size_value'))
//          ->fields('ua',array('alias'))
//          ->fields('fdb',array('body_value'))
//          ->fields('fi',array('delta'))
//          ->fields('fm',array('uri'))
//          ->fields('nd',array('nid'))
//          ->fields('ml',array('weight'));
// //          ->execute()
// //          ->fetchAll();

// $data1 = db_select('commerce_product','c');
// $data1->InnerJoin('field_data_field_size','s','c.product_id=s.entity_id');

// $data1->InnerJoin('node','nd',"CONCAT(nd.title,'s')=c.title");
// $data1->LeftJoin('field_data_norproduct_imagekit','fi','nd.nid = fi.entity_id');
// $data1->LeftJoin('file_managed','fm','fi.norproduct_imagekit_fid = fm.fid');
// $data1->InnerJoin('field_data_body','fdb','fdb.entity_id=nd.nid');
// $data1->InnerJoin('url_alias', 'ua', "CONCAT('node/', nd.nid) = ua.source");
// $data1->LeftJoin('menu_links', 'ml', "CONCAT('node/', nd.nid) = ml.link_path");
// $data1->condition('c.status',1,'=')
//         ->condition('nd.status',1,'=')
//         ->condition('ua.alias',db_like('product/') . '%', 'LIKE')
//         ->condition(db_or()->condition('fi.delta',0,'=')->isNull('fi.delta'))
//         ->fields('c',array('sku','title'))
//         ->fields('s',array('field_size_value'))
//         ->fields('ua',array('alias'))
//         ->fields('fdb',array('body_value'))
//         ->fields('fi',array('delta'))
//         ->fields('fm',array('uri'))
//         ->fields('nd',array('nid'))
//         ->fields('ml',array('weight'))
//         ->union($data);
//         // ->execute()
//         // ->fetchAll();

// $data2 = db_select('commerce_product','c');
// $data2->InnerJoin('field_data_field_size','s','c.product_id=s.entity_id');

// $data2->InnerJoin('node','nd',"CONCAT(c.title,'s')=nd.title");
// $data2->LeftJoin('field_data_norproduct_imagekit','fi','nd.nid = fi.entity_id');
// $data2->LeftJoin('file_managed','fm','fi.norproduct_imagekit_fid = fm.fid');
// $data2->InnerJoin('field_data_body','fdb','fdb.entity_id=nd.nid');
// $data2->InnerJoin('url_alias', 'ua', "CONCAT('node/', nd.nid) = ua.source");
// $data2->LeftJoin('menu_links', 'ml', "CONCAT('node/', nd.nid) = ml.link_path");
// $data2->condition('c.status',1,'=')
//         ->condition('nd.status',1,'=')
//         ->condition('ua.alias',db_like('product/') . '%', 'LIKE')
//         ->condition(db_or()->condition('fi.delta',0,'=')->isNull('fi.delta'))
//         ->fields('c',array('sku','title'))
//         ->fields('s',array('field_size_value'))
//         ->fields('ua',array('alias'))
//         ->fields('fdb',array('body_value'))
//         ->fields('fi',array('delta'))
//         ->fields('fm',array('uri'))
//         ->fields('nd',array('nid'))
//         ->fields('ml',array('weight'))
//         ->union($data1);
//         $data3 = $data2
//         ->execute()
//         ->fetchAll();

//         //  $data->InnerJoin('commerce_product','c',"CONCAT(nd.title,'s')=c.title");
//         //  $data->InnerJoin('commerce_product','c',"CONCAT(c.title,'s')=nd.title");
// echo '<pre>';
// 	print_r($data3);
// 	echo '</pre>';



// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

//  $query_for_first_half = db_select('norgen_products', 'n');
//  $query_for_first_half->InnerJoin('commerce_product','c','c.sku=n.cat_num');


//  $query_for_first_half ->LeftJoin('field_data_norproduct_cataloguenumber','fdnc', 'fdnc.norproduct_cataloguenumber_value = c.sku');
//  $query_for_first_half ->LeftJoin('field_data_field_test','fdft','fdnc.entity_id=fdft.entity_id');
//  $query_for_first_half ->LeftJoin('field_data_body','fdb','fdb.entity_id=fdnc.entity_id');
//  $query_for_first_half
//              ->fields('n',array('prod_cat','cat_num','prod_name'))
//             ->fields('fdnc',array('norproduct_cataloguenumber_value','entity_id'))
//             ->fields('fdft',array('field_test_tid'))
//             ->fields('fdb',array('body_value')); //MAY NOT necessary
//  $res = $query_for_first_half ->execute()
//                               ->fetchAll();
//  echo '<pre>';
//  var_dump($res);
//  echo '</pre>';

// $str = "node/232";
// echo substr($str,5);


// $url_paths = db_select('url_alias','ua')
                
//                 ->execute();
//                 // ->fetchAll();

//                 // ->fields('ua',array('source','alias'));


//     // $url_paths = db_select('url_alias','ua')
//     //                 ->condition('source',db_like('node/') . '%', 'LIKE')
//     //                 ->condition('alias',db_like('product/') . '%', 'LIKE')
//     //                 ->fields('ua',array('source','alias'))
//     //                 ->execute()
//     //                 ->fetchAll();
// echo '<pre>';
// var_dump($url_paths);
// echo '</pre>';
/*
 The next part is for the second part for results_ with skus made into one
 //$data = db_select('commerce_product','c');
//  $data->InnerJoin('field_data_field_size','s','c.product_id=s.entity_id');
//  $data->InnerJoin('field_data_field_commerce','commerce','commerce.field_commerce_product_id=c.product_id'); 
//  $data->InnerJoin('node','nd','nd.nid=commerce.entity_id');
//  $data->LeftJoin('field_data_norproduct_imagekit','fi','nd.nid = fi.entity_id');
//  $data->LeftJoin('file_managed','fm','fi.norproduct_imagekit_fid = fm.fid');
//  $data->addField('fm', 'type','fm_type');
//  $data->InnerJoin('field_data_body','fdb','fdb.entity_id=nd.nid');
//  $data->InnerJoin('url_alias', 'ua', "CONCAT('node/', nd.nid) = ua.source");
//  $data->LeftJoin('menu_links', 'ml', "CONCAT('node/', nd.nid) = ml.link_path");
//  $data->addExpression('GROUP_CONCAT(DISTINCT c.sku)', 'sku');
//  $data->groupBy('nd.nid');

//another idea
    // $data = db_select('node','node');
    // $data->InnerJoin('field_data_norproduct_applicationnote','applicationnote','node.nid=applicationnote.entity_id');
    // $data->InnerJoin('file_managed','fm','applicationnote.norproduct_applicationnote_fid=fm.fid');
    // $data->addField('fm', 'type','fm_type');
    // $data->InnerJoin('field_data_field_commerce','commerce','node.nid=commerce.entity_id');
    // $data->InnerJoin('commerce_product','c','commerce.field_commerce_product_id=c.product_id');
    // $data->InnerJoin('url_alias', 'ua', "CONCAT('node/', node.nid) = ua.source");
    // $data->LeftJoin('menu_links', 'ml', "CONCAT('node/', node.nid) = ml.link_path");
    // // $data->addExpression(' SUBSTRING(fm.uri,1,(LENGTH(fm.uri) - 0))', 'fm_uri');
    // $data->addExpression('GROUP_CONCAT(DISTINCT SUBSTRING(fm.uri,10,(LENGTH(fm.uri) - 9)))', 'uris');
    // $data->groupBy('c.sku');
    // $data1=$data
    //         ->condition('c.status',1,'=')
    //         ->condition('c.status',1,'=')
    //         ->condition('node.status',1,'=')
    //         ->condition('ua.alias',db_like('product/') . '%', 'LIKE')
    //         ->fields('c',array('sku','title'))
    //         ->fields('ua',array('alias'))
    //        //  ->addField('fm', 'type','file_type')
    //         ->fields('fm',array('filemime'))
    //         ->fields('applicationnote',array('norproduct_applicationnote_description'))
    //         ->fields('node',array('nid','type'))
    //         ->fields('ml',array('weight'))
    //         ->execute()
    //         ->fetchAll();

 */
/*
From here is the product entry
*/
// $data = db_select('commerce_product','c');
//  $data->InnerJoin('field_data_field_size','s','c.product_id=s.entity_id');
//  $data->InnerJoin('field_data_field_commerce','commerce','commerce.field_commerce_product_id=c.product_id');
//  $data->InnerJoin('node','nd','nd.nid=commerce.entity_id');
//  $data->LeftJoin('field_data_norproduct_imagekit','fi','nd.nid = fi.entity_id');
//  $data->LeftJoin('file_managed','fm','fi.norproduct_imagekit_fid = fm.fid');
//  $data->addField('fm', 'type','fm_type');
//  $data->InnerJoin('field_data_body','fdb','fdb.entity_id=nd.nid');
//  $data->InnerJoin('url_alias', 'ua', "CONCAT('node/', nd.nid) = ua.source");
//  $data->LeftJoin('menu_links', 'ml', "CONCAT('node/', nd.nid) = ml.link_path");
//  $data->groupBy('c.sku');
//  $data1=$data
//          ->condition('c.status',1,'=')
//          ->condition('nd.status',1,'=')
//          ->condition('ua.alias',db_like('product/') . '%', 'LIKE')
//          ->condition(db_or()->condition('fi.delta',0,'=')->isNull('fi.delta'))
//          ->fields('c',array('sku','title'))
//          ->fields('s',array('field_size_value'))
//          ->fields('ua',array('alias'))
//          ->fields('fdb',array('body_value'))
//          ->fields('fi',array('delta'))
//         //  ->addField('fm', 'type','file_type')
//          ->fields('fm',array('uri','filemime'))
//          ->fields('nd',array('nid','type'))
//          ->fields('ml',array('weight'))
//          ->execute()
//          ->fetchAll();

//  $all_info = array(array());
//  $cnt=0;
//  $size = array();
//  $size_tag = ['prep','ml','μL','96-well plate','reaction','units'];
//  $norprods = array(array());
//  $category1=['Sample Collection and Preservation Kits','Purification and Isolation Kits','Clean-up and Concentration Kits','Detection Kits','Standards','Buffers and Reagents','Ladders','Lab Essentials'];
//  $comparecat=['collection,preservation','purification,isolation,depletion','clean-up,concentration','detection,tm','standards,standard','reagents,reagent,buffer,buffers','ladders,ladder','ee'];
//  $category_each1=array();
//  $sample_each1 =array();
//  $samples2 = ['RNA','DNA','Protein','Exosome/Exosomes/Exosomal','Stool','Urine','Blood','Plasma/Serum','Saliva','Plant','Fungi','Soil'];
//  $samples22 = ['RNA','DNA','Protein','Exosomes','Stool','Urine','Blood','Plasma/Serum','Saliva','Plant','Fungi','Soil'];
//  $DR = array();//Diagnostic or research
//  $da = array();
//  $sku_num = array();
//  $category_each2= array();
//  $pos=0;

//  foreach ($data1 as $a)
//  {
//      $cnt2 =0;
//      $size[$cnt]=strtolower($a->field_size_value);
//      $all_info[$cnt][$cnt2++]= $a->sku;//0
//      $all_info[$cnt][$cnt2++]= $a->nid;//1
//      $all_info[$cnt][$cnt2++]= substr(($a->uri.""), 9);//2
//      $all_info[$cnt][$cnt2++]= (substr(strip_tags($a->body_value), 0, 300))."...";//3
//      $all_info[$cnt][$cnt2++]= $a->alias;//4
//      $all_info[$cnt][$cnt2++]= $a->title;//5
//      $flag = 0;
//      for($i = 0 ; $i < count($category1) ; $i++)
//      {
//          if($i == (count($category1)-1))
//          {
//              $all_info[$cnt][$cnt2++] =$category1[$i];//6 cat 7 size
//              $all_info[$cnt][$cnt2++] =strtolower($a->field_size_value);
//              break;
//          }			
//          $ch=strtolower($a->title.''.$a->sku);
//          $pie = explode(",", $comparecat[$i]);

//          foreach($pie as $p)
//          {
//              if(strpos($ch, $p)===false)
//              {

//              }
//              else 
//              {
//                  $all_info[$cnt][$cnt2++] =$category1[$i];//6 cat 7 size
//                  $all_info[$cnt][$cnt2++] =strtolower($a->field_size_value);
//                  $flag=1;
//                  break;
//              }
//          }		
//          if($flag==1)
//          {
//              break;
//          }	
//      }
//      $category_each2[$cnt] =  $all_info[$cnt][6];
//      // $sku_num[$cnt] = $all_info[$cnt][5];
//      $da[$cnt]=  $all_info[$cnt][0]." ".  $all_info[$cnt][5];

//      $sample_each1[$cnt] = "";
//      $flag = 0;
//      $all_info[$cnt][$cnt2] = "";//8
//      for($j = 0 ; $j < count($samples2) ; $j++)
//      {
//          $ch=strtolower($all_info[$cnt][5].'');
//          if(strpos(strtolower($samples2[$j]), "/")===false)
//          { 
//              $pie = [strtolower($samples2[$j])];
//          }
//          else 
//          {
//              $pie = explode("/", strtolower($samples2[$j]));                
//          }
//          foreach($pie as $p)
//          {
//              if(strpos($ch, $p)===false)
//              {

//              }
//              else if(strpos($ch, $p)>=0)
//              {
                 
//                  if($sample_each1[$cnt] == "")
//                  {
//                      $sample_each1[$cnt] = $samples22[$j];
//                      $all_info[$cnt][$cnt2] = $samples22[$j];
//                  }
//                  else
//                  {
//                      $sample_each1[$cnt] = $sample_each1[$cnt].",".$samples22[$j];
//                      $all_info[$cnt][$cnt2] =  $sample_each1[$cnt];
//                  }
//                  break;
//              }
//          }
//      }
//      $cnt2++;
//      if(strpos( $all_info[$cnt][0],"Dx")===false)
//      {
//          $DR[$cnt]=0;
//          $all_info[$cnt][$cnt2++]=0;//9
//      }
//      else
//      {
//          $DR[$cnt]=1;
//          $all_info[$cnt][$cnt2++]=1;
//      }
//      // $all_info[$cnt][$cnt2+2]=0;
//      $weight = 0;
//      if(isset($a->weight) && $a->weight!="" && $a->weight!=0)
//      {
//          $weight=intval($a->weight) * (-0.01);
//      }
//      $all_info[$cnt][$cnt2++]=$weight;//10
//      $all_info[$cnt][$cnt2++]=$a->filemime;//11
//      $all_info[$cnt][$cnt2++]=$a->fm_type;//12
//      $all_info[$cnt][$cnt2++]=$a->type;
//      $cnt++;
//  }



// 	$Quan_TAG_VAL = array(array());
// 	$Quan_VAL = array();
// 	$size = array_column($all_info, 7);
// 	// 	echo '<pre>';
// 	// print_r($size);
// 	// echo '</pre>';
// 	for($i = 0 ; $i< count($size);$i++)
// 	{
// 		$Quan_TAG_VAL[$i][0] =similarity($size[$i],$size_tag);
// 		$string = str_split($size[$i]);
// 		$Quan_TAG_VAL[$i][1] = first_numbers($string);
// 		$Quan_TAG_VAL[$i][2] = $size[$i];
// 		$Quan_VAL[$i] = $Quan_TAG_VAL[$i][1];
// 	}
	
// 	function similarity($st,$size_tag)
// 	{
// 		if (strpos($st, "X")!= False)
// 		{
// 			$pieces = explode("X", $st);
// 		}
// 		else if (strpos($st, " ")== False)
// 		{
// 			return "UNITS";
// 		}
// 		else if (strpos($st, "(")!= False)
// 		{
// 			$pos = strpos($st, "(");
// 			$use_string = substr($st,0,$pos-1);
// 			$pieces = explode("X", $use_string);
// 		}
// 		else
// 		{
// 			$pieces = explode(" ", $st);
// 		}
// 		$val="";
// 	  $val = $pieces[(count($pieces)-1)];
// 	  $pieces[(count($pieces)-1)]='';
// 	  $size_val = implode('',$pieces);
// 		if($val =="RXNS" || $val == "RNXS" || $val =="RXN" || $val =="RNX")
// 		{
// 			return 4;//"REACTION"
// 		}

// 		$max=-1;
// 		$pos=-1;
// 		for($j = 0 ; $j<count($size_tag); $j++)
// 		{
// 			$v1 = $size_tag[$j];
// 			similar_text($v1, $val, $perc);
// 			if(strtolower(str_replace(' ', '', $v1)) == strtolower(str_replace(' ', '', $val)))
// 			{
// 				$max = 100;
// 				$pos=$j;
// 				break;
// 			}
// 			else if($perc>$max)
// 			{
// 				$max=$perc;
// 				$pos=$j;
// 			}
// 		}
// 		if($max<=50)
// 		{
// 			$pos = 5;//UNITS
// 		}
// 		return $size_tag[$pos];
// 		// return ($st." 11");
// 	}

// function first_numbers($a)
// {
//     $s = 0;
//     $flag = 0;
//     $cnt=10;
//     for($i = 0 ; $i < count($a) ; $i++)
//     {
//         if(is_numeric($a[$i]))
//         {
//             if($flag == 0)
//             {
//                 $s = $s*10 + floatval($a[$i]);
//             }
//             else
//             {
//                 $s = $s + floatval($a[$i])/$cnt;
//                 $cnt = $cnt*10;
//             }
//         }
//         else if($a[$i] == '.')
//         {
//             $flag = 1;
//         }
//         else if($a[$i] != ',')
//         {
//             break;
//         }
//     }
//     return $s;
// }
// echo("<pre>");
// //     // print_r((array_unique($checking_msut_not_include)));
//     print_r($all_info);
//     echo("</pre>");
    /*
     *Absolutely od not un comment the next loop 
     */
//     for($i=0;$i<count($all_info);$i++)
//     {
//     db_insert('search_custom')
// 		->fields(array(
//         'id' => ($i+1),
// 		'node_nid' =>$all_info[$i][1],
// 		'commerce_product_sku'=>$all_info[$i][0],
// 		'title'=>$all_info[$i][5],
// 		'field_data_field_size_value'=>$all_info[$i][7],
// 		'file_managed_uri'=>$all_info[$i][2],
// 		'field_data_body_value'=>$all_info[$i][3],
// 		'url_alias' =>$all_info[$i][4],
// 		'menu_links_weight' =>$all_info[$i][10],
// 		'node_type'=>$all_info[$i][13],
//         'sample_type'=>$all_info[$i][8],
//         'category'=>$all_info[$i][6],
//         'intended_use'=>$all_info[$i][9],
//         'fileMime'=>$all_info[$i][11],
//         'file_type'=>$all_info[$i][12],
//         'section'=>'product',
// 		))
// 		->execute();
//     }
    /*
From here is the applicationnote
*/
// $data = db_select('node','node');
// $data->InnerJoin('field_data_norproduct_applicationnote','applicationnote','node.nid=applicationnote.entity_id');
// $data->InnerJoin('file_managed','fm','applicationnote.norproduct_applicationnote_fid=fm.fid');
// $data->addField('fm', 'type','fm_type');
// $data->InnerJoin('field_data_field_commerce','commerce','node.nid=commerce.entity_id');
// $data->InnerJoin('commerce_product','c','commerce.field_commerce_product_id=c.product_id');
// $data->InnerJoin('url_alias', 'ua', "CONCAT('node/', node.nid) = ua.source");
// $data->LeftJoin('menu_links', 'ml', "CONCAT('node/', node.nid) = ml.link_path");
// $data->addExpression('SUBSTRING(fm.uri,10,(LENGTH(fm.uri) - 9))', 'fm_uri');
// // $data->addExpression('GROUP_CONCAT(DISTINCT SUBSTRING(fm.uri,10,(LENGTH(fm.uri) - 9)))', 'uris');
// $data->addExpression('GROUP_CONCAT(DISTINCT c.sku)', 'skus');
// $data->addExpression('GROUP_CONCAT(DISTINCT node.nid)', 'nids');
// $data->addExpression('MIN(ml.weight)', 'min_weight');
// $data->addExpression("GROUP_CONCAT(DISTINCT CONCAT( c.title,CONCAT('_%',CONCAT( c.sku,CONCAT('_%',CONCAT(node.nid,CONCAT('_%',ua.alias)))))))", 'aliass');
// $data->groupBy('fm.fid');
// $data1=$data
//         ->condition('c.status',1,'=')
//         ->condition('c.status',1,'=')
//         ->condition('node.status',1,'=')
//         // ->condition('ua.alias',db_like('product/') . '%', 'LIKE')
//         // ->fields('ua',array('alias'))
//     //  ->addField('fm', 'type','file_type')
//         ->fields('fm',array('filemime','fid'))
//         ->fields('applicationnote',array('norproduct_applicationnote_description'))
//         ->fields('node',array('type'))
//         ->execute()
//         ->fetchAll();


   
// $all_info = array(array());
// $cnt=0;
// foreach ($data1 as $a)
// {
//         $cnt2 =0;
//         $all_info[$cnt][$cnt2++]= $a->skus;//0
//         $all_info[$cnt][$cnt2++]= $a->nids;//1
//         $all_info[$cnt][$cnt2++]= $a->norproduct_applicationnote_description;//2
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


/*
 *Absolutely od not un comment the next loop 
 */
// for($i=0;$i<count($all_info);$i++)
// {
// db_insert('search_custom_resource')
//  ->fields(array(
// 'id' => ($i+1),
// 'node_nid' =>$all_info[$i][1],
// 'commerce_product_sku'=>$all_info[$i][0],
// 'title'=>$all_info[$i][2],
// 'file_managed_uri'=>$all_info[$i][6],
// 'url_alias' =>$all_info[$i][3],
// 'menu_links_weight' =>$all_info[$i][4],
// 'node_type'=>$all_info[$i][7],
// 'fileMime'=>$all_info[$i][8],
// 'file_type'=>$all_info[$i][5],
// 'section'=>'applicationnote',
//  ))
//  ->execute();
// }
/*
From here is the short protocol
// */
    // $data = db_select('node','node');
    // $data->InnerJoin('field_data_norproduct_shortprotocol','shortprotocol','node.nid=shortprotocol.entity_id');
    // $data->InnerJoin('file_managed','fm','shortprotocol.norproduct_shortprotocol_fid=fm.fid');
    // $data->addField('fm', 'type','fm_type');
    // $data->InnerJoin('field_data_field_commerce','commerce','node.nid=commerce.entity_id');
    // $data->InnerJoin('commerce_product','c','commerce.field_commerce_product_id=c.product_id');
    // $data->InnerJoin('url_alias', 'ua', "CONCAT('node/', node.nid) = ua.source");
    // $data->LeftJoin('menu_links', 'ml', "CONCAT('node/', node.nid) = ml.link_path");
    // $data->addExpression('SUBSTRING(fm.uri,10,(LENGTH(fm.uri) - 9))', 'fm_uri');
    // // $data->addExpression('GROUP_CONCAT(DISTINCT SUBSTRING(fm.uri,10,(LENGTH(fm.uri) - 9)))', 'uris');
    // $data->addExpression('GROUP_CONCAT(DISTINCT c.sku)', 'skus');
    // $data->addExpression('GROUP_CONCAT(DISTINCT node.nid)', 'nids');
    // $data->addExpression('MIN(ml.weight)', 'min_weight');
    // $data->addExpression("GROUP_CONCAT(DISTINCT CONCAT( c.title,CONCAT('_%',CONCAT( c.sku,CONCAT('_%',CONCAT(node.nid,CONCAT('_%',ua.alias)))))))", 'aliass');
    // $data->groupBy('fm.fid');
    // $data1=$data
    //         ->condition('shortprotocol.norproduct_shortprotocol_display',1,'=')
    //         ->condition('c.status',1,'=')
    //         ->condition('node.status',1,'=')
    //         ->condition('ua.alias',db_like('product/') . '%', 'LIKE')
    //         // ->fields('ua',array('alias'))
    //     //  ->addField('fm', 'type','file_type')
    //         ->fields('fm',array('filemime','fid'))
    //         ->fields('shortprotocol',array('norproduct_shortprotocol_description'))
    //         ->fields('node',array('type'))
    //         ->execute()
    //         ->fetchAll();

    
       
    // $all_info = array(array());
    // $cnt=0;
    // foreach ($data1 as $a)
    // {
    //         $cnt2 =0;
    //         $all_info[$cnt][$cnt2++]= $a->skus;//0
    //         $all_info[$cnt][$cnt2++]= $a->nids;//1
    //         $all_info[$cnt][$cnt2++]= $a->norproduct_shortprotocol_description;//2
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


/*
     *Absolutely od not un comment the next loop 
     */
    // for($i=0;$i<count($all_info);$i++)
    // {
    // db_insert('search_custom_resource')
	// 	->fields(array(
    // 'id' => ($i+228),
    // 'node_nid' =>$all_info[$i][1],
    // 'commerce_product_sku'=>$all_info[$i][0],
    // 'title'=>$all_info[$i][2],
    // 'file_managed_uri'=>$all_info[$i][6],
    // 'url_alias' =>$all_info[$i][3],
    // 'menu_links_weight' =>$all_info[$i][4],
    // 'node_type'=>$all_info[$i][7],
    // 'fileMime'=>$all_info[$i][8],
    // 'file_type'=>$all_info[$i][5],
    // 'section'=>'shortprotocol',
	// 	))
	// 	->execute();
    // }
/*
From here is the protocol
// */
    // $data = db_select('node','node');
    // $data->InnerJoin('field_data_norproduct_protocol','protocol','node.nid=protocol.entity_id');
    // $data->InnerJoin('file_managed','fm','protocol.norproduct_protocol_fid=fm.fid');
    // $data->addField('fm', 'type','fm_type');
    // $data->InnerJoin('field_data_field_commerce','commerce','node.nid=commerce.entity_id');
    // $data->InnerJoin('commerce_product','c','commerce.field_commerce_product_id=c.product_id');
    // $data->InnerJoin('url_alias', 'ua', "CONCAT('node/', node.nid) = ua.source");
    // $data->LeftJoin('menu_links', 'ml', "CONCAT('node/', node.nid) = ml.link_path");
    // $data->addExpression('SUBSTRING(fm.uri,10,(LENGTH(fm.uri) - 9))', 'fm_uri');
    // // $data->addExpression('GROUP_CONCAT(DISTINCT SUBSTRING(fm.uri,10,(LENGTH(fm.uri) - 9)))', 'uris');
    // $data->addExpression('GROUP_CONCAT(DISTINCT c.sku)', 'skus');
    // $data->addExpression('GROUP_CONCAT(DISTINCT node.nid)', 'nids');
    // $data->addExpression('MIN(ml.weight)', 'min_weight');
    // $data->addExpression("GROUP_CONCAT(DISTINCT CONCAT( c.title,CONCAT('_%',CONCAT( c.sku,CONCAT('_%',CONCAT(node.nid,CONCAT('_%',ua.alias)))))))", 'aliass');
    // $data->groupBy('fm.fid');
    // $data1=$data
    //         ->condition('protocol.norproduct_protocol_display',1,'=')
    //         ->condition('c.status',1,'=')
    //         ->condition('node.status',1,'=')
    //         ->condition('ua.alias',db_like('product/') . '%', 'LIKE')
    //         // ->fields('ua',array('alias'))
    //     //  ->addField('fm', 'type','file_type')
    //         ->fields('fm',array('filemime','fid'))
    //         ->fields('protocol',array('norproduct_protocol_description'))
    //         ->fields('node',array('type'))
    //         ->execute()
    //         ->fetchAll();

    
       
    // $all_info = array(array());
    // $cnt=0;
    // foreach ($data1 as $a)
    // {
    //         $cnt2 =0;
    //         $all_info[$cnt][$cnt2++]= $a->skus;//0
    //         $all_info[$cnt][$cnt2++]= $a->nids;//1
    //         $all_info[$cnt][$cnt2++]= $a->norproduct_protocol_description;//2
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


/*
     *Absolutely od not un comment the next loop 
     */
    // for($i=0;$i<count($all_info);$i++)
    // {
    // db_insert('search_custom_resource')
	// 	->fields(array(
    // 'id' => ($i+263),
    // 'node_nid' =>$all_info[$i][1],
    // 'commerce_product_sku'=>$all_info[$i][0],
    // 'title'=>$all_info[$i][2],
    // 'file_managed_uri'=>$all_info[$i][6],
    // 'url_alias' =>$all_info[$i][3],
    // 'menu_links_weight' =>$all_info[$i][4],
    // 'node_type'=>$all_info[$i][7],
    // 'fileMime'=>$all_info[$i][8],
    // 'file_type'=>$all_info[$i][5],
    // 'section'=>'protocol',
	// 	))
	// 	->execute();
    // }


    /*
From here is the informationsheet
 */
    // $data = db_select('node','node');
    // $data->InnerJoin('field_data_norproduct_informationsheet','informationsheet','node.nid=informationsheet.entity_id');
    // $data->InnerJoin('file_managed','fm','informationsheet.norproduct_informationsheet_fid=fm.fid');
    // $data->addField('fm', 'type','fm_type');
    // $data->InnerJoin('field_data_field_commerce','commerce','node.nid=commerce.entity_id');
    // $data->InnerJoin('commerce_product','c','commerce.field_commerce_product_id=c.product_id');
    // $data->InnerJoin('url_alias', 'ua', "CONCAT('node/', node.nid) = ua.source");
    // $data->LeftJoin('menu_links', 'ml', "CONCAT('node/', node.nid) = ml.link_path");
    // $data->addExpression('SUBSTRING(fm.uri,10,(LENGTH(fm.uri) - 9))', 'fm_uri');
    // // $data->addExpression('GROUP_CONCAT(DISTINCT SUBSTRING(fm.uri,10,(LENGTH(fm.uri) - 9)))', 'uris');
    // $data->addExpression('GROUP_CONCAT(DISTINCT c.sku)', 'skus');
    // $data->addExpression('GROUP_CONCAT(DISTINCT node.nid)', 'nids');
    // $data->addExpression('MIN(ml.weight)', 'min_weight');
    // $data->addExpression("GROUP_CONCAT(DISTINCT CONCAT( c.title,CONCAT('_%',CONCAT( c.sku,CONCAT('_%',CONCAT(node.nid,CONCAT('_%',ua.alias)))))))", 'aliass');
    // $data->groupBy('fm.fid');
    // $data1=$data
    //         ->condition('informationsheet.norproduct_informationsheet_display',1,'=')
    //         ->condition('c.status',1,'=')
    //         ->condition('node.status',1,'=')
    //         ->condition('ua.alias',db_like('product/') . '%', 'LIKE')
    //         // ->fields('ua',array('alias'))
    //     //  ->addField('fm', 'type','file_type')
    //         ->fields('fm',array('filemime','fid'))
    //         ->fields('informationsheet',array('norproduct_informationsheet_description'))
    //         ->fields('node',array('type'))
    //         ->execute()
    //         ->fetchAll();

    
       
    // $all_info = array(array());
    // $cnt=0;
    // foreach ($data1 as $a)
    // {
    //         $cnt2 =0;
    //         $all_info[$cnt][$cnt2++]= $a->skus;//0
    //         $all_info[$cnt][$cnt2++]= $a->nids;//1
    //         $all_info[$cnt][$cnt2++]= $a->norproduct_informationsheet_description;//2
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


/*
     *Absolutely od not un comment the next loop 
     */
    // for($i=0;$i<count($all_info);$i++)
    // {
    // db_insert('search_custom_resource')
	// 	->fields(array(
    // 'id' => ($i+689),
    // 'node_nid' =>$all_info[$i][1],
    // 'commerce_product_sku'=>$all_info[$i][0],
    // 'title'=>$all_info[$i][2],
    // 'file_managed_uri'=>$all_info[$i][6],
    // 'url_alias' =>$all_info[$i][3],
    // 'menu_links_weight' =>$all_info[$i][4],
    // 'node_type'=>$all_info[$i][7],
    // 'fileMime'=>$all_info[$i][8],
    // 'file_type'=>$all_info[$i][5],
    // 'section'=>'informationsheet',
	// 	))
	// 	->execute();
    // }


//     /*
// From here is the msds
//  */
    // $data = db_select('node','node');
    // $data->InnerJoin('field_data_norproduct_msds','msds','node.nid=msds.entity_id');
    // $data->InnerJoin('file_managed','fm','msds.norproduct_msds_fid=fm.fid');
    // $data->addField('fm', 'type','fm_type');
    // $data->InnerJoin('field_data_field_commerce','commerce','node.nid=commerce.entity_id');
    // $data->InnerJoin('commerce_product','c','commerce.field_commerce_product_id=c.product_id');
    // $data->InnerJoin('url_alias', 'ua', "CONCAT('node/', node.nid) = ua.source");
    // $data->LeftJoin('menu_links', 'ml', "CONCAT('node/', node.nid) = ml.link_path");
    // $data->addExpression('SUBSTRING(fm.uri,10,(LENGTH(fm.uri) - 9))', 'fm_uri');
    // // $data->addExpression('GROUP_CONCAT(DISTINCT SUBSTRING(fm.uri,10,(LENGTH(fm.uri) - 9)))', 'uris');
    // $data->addExpression('GROUP_CONCAT(DISTINCT c.sku)', 'skus');
    // $data->addExpression('GROUP_CONCAT(DISTINCT node.nid)', 'nids');
    // $data->addExpression('MIN(ml.weight)', 'min_weight');
    // $data->addExpression("GROUP_CONCAT(DISTINCT CONCAT( c.title,CONCAT('_%',CONCAT( c.sku,CONCAT('_%',CONCAT(node.nid,CONCAT('_%',ua.alias)))))))", 'aliass');
    // $data->groupBy('fm.fid');
    // $data1=$data
    //         ->condition('msds.norproduct_msds_display',1,'=')
    //         ->condition('c.status',1,'=')
    //         ->condition('node.status',1,'=')
    //         ->condition('ua.alias',db_like('product/') . '%', 'LIKE')
    //         // ->fields('ua',array('alias'))
    //     //  ->addField('fm', 'type','file_type')
    //         ->fields('fm',array('filemime','fid'))
    //         ->fields('msds',array('norproduct_msds_description'))
    //         ->fields('node',array('type'))
    //         ->execute()
    //         ->fetchAll();

    
       
    // $all_info = array(array());
    // $cnt=0;
    // foreach ($data1 as $a)
    // {
    //         $cnt2 =0;
    //         $all_info[$cnt][$cnt2++]= $a->skus;//0
    //         $all_info[$cnt][$cnt2++]= $a->nids;//1
    //         $all_info[$cnt][$cnt2++]= $a->norproduct_msds_description;//2
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
//      *Absolutely od not un comment the next loop 
//      */
    // for($i=0;$i<count($all_info);$i++)
    // {
    // db_insert('search_custom_resource')
	// 	->fields(array(
    // 'id' => ($i+704),
    // 'node_nid' =>$all_info[$i][1],
    // 'commerce_product_sku'=>$all_info[$i][0],
    // 'title'=>$all_info[$i][2],
    // 'file_managed_uri'=>$all_info[$i][6],
    // 'url_alias' =>$all_info[$i][3],
    // 'menu_links_weight' =>$all_info[$i][4],
    // 'node_type'=>$all_info[$i][7],
    // 'fileMime'=>$all_info[$i][8],
    // 'file_type'=>$all_info[$i][5],
    // 'section'=>'msds',
	// 	))
	// 	->execute();
    // }

//   /*
// From here is the poster
//  */
// $data = db_select('node','node');
// $data->InnerJoin('field_data_norproduct_poster','poster','node.nid=poster.entity_id');
// $data->InnerJoin('file_managed','fm','poster.norproduct_poster_fid=fm.fid');
// $data->addField('fm', 'type','fm_type');
// $data->InnerJoin('field_data_field_commerce','commerce','node.nid=commerce.entity_id');
// $data->InnerJoin('commerce_product','c','commerce.field_commerce_product_id=c.product_id');
// $data->InnerJoin('url_alias', 'ua', "CONCAT('node/', node.nid) = ua.source");
// $data->LeftJoin('menu_links', 'ml', "CONCAT('node/', node.nid) = ml.link_path");
// $data->addExpression('SUBSTRING(fm.uri,10,(LENGTH(fm.uri) - 9))', 'fm_uri');
// // $data->addExpression('GROUP_CONCAT(DISTINCT SUBSTRING(fm.uri,10,(LENGTH(fm.uri) - 9)))', 'uris');
// $data->addExpression('GROUP_CONCAT(DISTINCT c.sku)', 'skus');
// $data->addExpression('GROUP_CONCAT(DISTINCT node.nid)', 'nids');
// $data->addExpression('MIN(ml.weight)', 'min_weight');
// $data->addExpression("GROUP_CONCAT(DISTINCT CONCAT( c.title,CONCAT('_%',CONCAT( c.sku,CONCAT('_%',CONCAT(node.nid,CONCAT('_%',ua.alias)))))))", 'aliass');
// $data->groupBy('fm.fid');
// $data1=$data
//         ->condition('poster.norproduct_poster_display',1,'=')
//         ->condition('c.status',1,'=')
//         ->condition('node.status',1,'=')
//         ->condition('ua.alias',db_like('product/') . '%', 'LIKE')
//         // ->fields('ua',array('alias'))
//     //  ->addField('fm', 'type','file_type')
//         ->fields('fm',array('filemime','fid'))
//         ->fields('poster',array('norproduct_poster_description'))
//         ->fields('node',array('type'))
//         ->execute()
//         ->fetchAll();


   
// $all_info = array(array());
// $cnt=0;
// foreach ($data1 as $a)
// {
//         $cnt2 =0;
//         $all_info[$cnt][$cnt2++]= $a->skus;//0
//         $all_info[$cnt][$cnt2++]= $a->nids;//1
//         $all_info[$cnt][$cnt2++]= $a->norproduct_poster_description;//2
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
// db_insert('search_custom_resource')
//     ->fields(array(
// 'id' => ($i+903),
// 'node_nid' =>$all_info[$i][1],
// 'commerce_product_sku'=>$all_info[$i][0],
// 'title'=>$all_info[$i][2],
// 'file_managed_uri'=>$all_info[$i][6],
// 'url_alias' =>$all_info[$i][3],
// 'menu_links_weight' =>$all_info[$i][4],
// 'node_type'=>$all_info[$i][7],
// 'fileMime'=>$all_info[$i][8],
// 'file_type'=>$all_info[$i][5],
// 'section'=>'poster',
//     ))
//     ->execute();
// }


  /*
From here is the supplementaryprotocol
 */
// $data = db_select('node','node');
// $data->InnerJoin('field_data_norproduct_supplementaryprotocol','supplementaryprotocol','node.nid=supplementaryprotocol.entity_id');
// $data->InnerJoin('file_managed','fm','supplementaryprotocol.norproduct_supplementaryprotocol_fid=fm.fid');
// $data->addField('fm', 'type','fm_type');
// $data->InnerJoin('field_data_field_commerce','commerce','node.nid=commerce.entity_id');
// $data->InnerJoin('commerce_product','c','commerce.field_commerce_product_id=c.product_id');
// $data->InnerJoin('url_alias', 'ua', "CONCAT('node/', node.nid) = ua.source");
// $data->LeftJoin('menu_links', 'ml', "CONCAT('node/', node.nid) = ml.link_path");
// $data->addExpression('SUBSTRING(fm.uri,10,(LENGTH(fm.uri) - 9))', 'fm_uri');
// // $data->addExpression('GROUP_CONCAT(DISTINCT SUBSTRING(fm.uri,10,(LENGTH(fm.uri) - 9)))', 'uris');
// $data->addExpression('GROUP_CONCAT(DISTINCT c.sku)', 'skus');
// $data->addExpression('GROUP_CONCAT(DISTINCT node.nid)', 'nids');
// $data->addExpression('MIN(ml.weight)', 'min_weight');
// $data->addExpression("GROUP_CONCAT(DISTINCT CONCAT( c.title,CONCAT('_%',CONCAT( c.sku,CONCAT('_%',CONCAT(node.nid,CONCAT('_%',ua.alias)))))))", 'aliass');
// $data->groupBy('fm.fid');
// $data1=$data
//         ->condition('supplementaryprotocol.norproduct_supplementaryprotocol_display',1,'=')
//         ->condition('c.status',1,'=')
//         ->condition('node.status',1,'=')
//         ->condition('ua.alias',db_like('product/') . '%', 'LIKE')
//         // ->fields('ua',array('alias'))
//     //  ->addField('fm', 'type','file_type')
//         ->fields('fm',array('filemime','fid'))
//         ->fields('supplementaryprotocol',array('norproduct_supplementaryprotocol_description'))
//         ->fields('node',array('type'))
//         ->execute()
//         ->fetchAll();


   
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
// db_insert('search_custom_resource')
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
        ->fields('read',array('field_read_time_value','field_read_time_value_format'))
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
<script>
    // var da = <?php //echo json_encode($data1);?>;
</script>

