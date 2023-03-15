<?php
    // global $user; 
    // $user_full = user_load($user->uid); 
    // $roles = $user_full->roles;
    // $mail = $user_full->mail;
    // $allowed_mail = array('rimpy.saha@norgenbio.com');

    // if (in_array("administrator", $roles) ==false && in_array($mail,$allowed_mail) ==false)
    // // if ((in_array("administrator", $roles) || (in_array("orders",$roles))) == false)
    // {
    //     header("Location: https://www.norgenbiotek.com/");
    //     exit();
    // }
$val="";
$details="";
//include('includes/page/section-page-title.inc');
// include('includes/page/section-page-top.inc');

?>

<?php


$data = db_select('commerce_product','c');
 $data->InnerJoin('field_data_field_size','s','c.product_id=s.entity_id');
 $data->InnerJoin('field_data_field_commerce','commerce','commerce.field_commerce_product_id=c.product_id');
 $data->InnerJoin('node','nd','nd.nid=commerce.entity_id');
 $data->LeftJoin('field_data_norproduct_imagekit','fi','nd.nid = fi.entity_id');
 $data->LeftJoin('file_managed','fm','fi.norproduct_imagekit_fid = fm.fid');
 $data->InnerJoin('field_data_body','fdb','fdb.entity_id=nd.nid');
 $data->InnerJoin('url_alias', 'ua', "CONCAT('node/', nd.nid) = ua.source");
 $data->LeftJoin('menu_links', 'ml', "CONCAT('node/', nd.nid) = ml.link_path");
 $data->groupBy('c.sku');
 $data1=$data
         ->condition('c.status',1,'=')
         ->condition('nd.status',1,'=')
         ->condition('ua.alias',db_like('product/') . '%', 'LIKE')
         ->condition(db_or()->condition('fi.delta',0,'=')->isNull('fi.delta'))
         ->fields('c',array('sku','title'))
         ->fields('s',array('field_size_value'))
         ->fields('ua',array('alias'))
         ->fields('fdb',array('body_value'))
         ->fields('fi',array('delta'))
         ->fields('fm',array('uri'))
         ->fields('nd',array('nid'))
         ->fields('ml',array('weight'))
         ->execute()
         ->fetchAll();

 $all_info = array(array());
 $cnt=0;
 $size = array();
 $size_tag = ['prep','ml','μL','96-well plate','reaction','units'];
 $norprods = array(array());
 $category1=['Sample Collection and Preservation Kits','Purification and Isolation Kits','Clean-up and Concentration Kits','Detection Kits','Standards','Buffers and Reagents','Ladders','Lab Essentials'];
 $comparecat=['collection,preservation','purification,isolation,depletion','clean-up,concentration','detection,tm','standards,standard','reagents,reagent,buffer,buffers','ladders,ladder','ee'];
 $category_each1=array();
 $sample_each1 =array();
 $samples2 = ['RNA','DNA','Protein','Exosome/Exosomes/Exosomal','Stool','Urine','Blood','Plasma/Serum','Saliva','Plant','Fungi','Soil'];
 $samples22 = ['RNA','DNA','Protein','Exosomes','Stool','Urine','Blood','Plasma/Serum','Saliva','Plant','Fungi','Soil'];
 $DR = array();//Diagnostic or research
 $da = array();
 $sku_num = array();
 $category_each2= array();
 $pos=0;

 foreach ($data1 as $a)
 {
     $cnt2 =0;
     $size[$cnt]=strtolower($a->field_size_value);
     $all_info[$cnt][$cnt2++]= $a->sku;
     $all_info[$cnt][$cnt2++]= $a->nid;
     $all_info[$cnt][$cnt2++]= $a->uri."";
     $all_info[$cnt][$cnt2++]= $a->body_value;
     $all_info[$cnt][$cnt2++]= $a->alias;
     $all_info[$cnt][$cnt2++]= $a->title;//6 cat 7 size
     $flag = 0;
     for($i = 0 ; $i < count($category1) ; $i++)
     {
         if($i == (count($category1)-1))
         {
             $all_info[$cnt][$cnt2++] =$category1[$i];
             $all_info[$cnt][$cnt2++] =strtolower($a->field_size_value);
             break;
         }          
         $ch=strtolower($a->title.''.$a->sku);
         $pie = explode(",", $comparecat[$i]);

         foreach($pie as $p)
         {
             if(strpos($ch, $p)===false)
             {

             }
             else 
             {
                 $all_info[$cnt][$cnt2++] =$category1[$i];
                 $all_info[$cnt][$cnt2++] =strtolower($a->field_size_value);
                 $flag=1;
                 break;
             }
         }      
         if($flag==1)
         {
             break;
         }  
     }
     $category_each2[$cnt] =  $all_info[$cnt][6];
     // $sku_num[$cnt] = $all_info[$cnt][5];
     $da[$cnt][0]=  $all_info[$cnt][0]." ".  $all_info[$cnt][5];
     $da[$cnt][1]=$a->alias;

     $sample_each1[$cnt] = "";
     $flag = 0;
     $all_info[$cnt][$cnt2] = "";
     for($j = 0 ; $j < count($samples2) ; $j++)
     {
         $ch=strtolower($all_info[$cnt][5].'');
         if(strpos(strtolower($samples2[$j]), "/")===false)
         { 
             $pie = [strtolower($samples2[$j])];
         }
         else 
         {
             $pie = explode("/", strtolower($samples2[$j]));                
         }
         foreach($pie as $p)
         {
             if(strpos($ch, $p)===false)
             {

             }
             else if(strpos($ch, $p)>=0)
             {
                 
                 if($sample_each1[$cnt] == "")
                 {
                     $sample_each1[$cnt] = $samples22[$j];
                     $all_info[$cnt][$cnt2] = $samples22[$j];
                 }
                 else
                 {
                     $sample_each1[$cnt] = $sample_each1[$cnt].",".$samples22[$j];
                     $all_info[$cnt][$cnt2] =  $sample_each1[$cnt];
                 }
                 break;
             }
         }
     }
     $cnt2++;
     if(strpos( $all_info[$cnt][0],"Dx")===false)
     {
         $DR[$cnt]=0;
         $all_info[$cnt][$cnt2++]=0;
     }
     else
     {
         $DR[$cnt]=1;
         $all_info[$cnt][$cnt2++]=1;
     }
     // $all_info[$cnt][$cnt2+2]=0;
     $weight = 0;
     if(isset($a->weight) && $a->weight!="")
     {
         $weight=$a->weight;
     }
     $all_info[$cnt][$cnt2++]=$weight*(-0.01);
     $cnt++;
 }



    $Quan_TAG_VAL = array(array());
    $Quan_VAL = array();
    $size = array_column($all_info, 7);
    //  echo '<pre>';
    // print_r($size);
    // echo '</pre>';
    for($i = 0 ; $i< count($size);$i++)
    {
        $Quan_TAG_VAL[$i][0] =similarity($size[$i],$size_tag);
        $string = str_split($size[$i]);
        $Quan_TAG_VAL[$i][1] = first_numbers($string);
        $Quan_TAG_VAL[$i][2] = $size[$i];
        $Quan_VAL[$i] = $Quan_TAG_VAL[$i][1];
    }
    
    function similarity($st,$size_tag)
    {
        if (strpos($st, "X")!= False)
        {
            $pieces = explode("X", $st);
        }
        else if (strpos($st, " ")== False)
        {
            return "UNITS";
        }
        else if (strpos($st, "(")!= False)
        {
            $pos = strpos($st, "(");
            $use_string = substr($st,0,$pos-1);
            $pieces = explode("X", $use_string);
        }
        else
        {
            $pieces = explode(" ", $st);
        }
        $val="";
      $val = $pieces[(count($pieces)-1)];
      $pieces[(count($pieces)-1)]='';
      $size_val = implode('',$pieces);
        if($val =="RXNS" || $val == "RNXS" || $val =="RXN" || $val =="RNX")
        {
            return 4;//"REACTION"
        }

        $max=-1;
        $pos=-1;
        for($j = 0 ; $j<count($size_tag); $j++)
        {
            $v1 = $size_tag[$j];
            similar_text($v1, $val, $perc);
            if(strtolower(str_replace(' ', '', $v1)) == strtolower(str_replace(' ', '', $val)))
            {
                $max = 100;
                $pos=$j;
                break;
            }
            else if($perc>$max)
            {
                $max=$perc;
                $pos=$j;
            }
        }
        if($max<=50)
        {
            $pos = 5;//UNITS
        }
        return $size_tag[$pos];
        // return ($st." 11");
    }

function first_numbers($a)
{
    $s = 0;
    $flag = 0;
    $cnt=10;
    for($i = 0 ; $i < count($a) ; $i++)
    {
        if(is_numeric($a[$i]))
        {
            if($flag == 0)
            {
                $s = $s*10 + floatval($a[$i]);
            }
            else
            {
                $s = $s + floatval($a[$i])/$cnt;
                $cnt = $cnt*10;
            }
        }
        else if($a[$i] == '.')
        {
            $flag = 1;
        }
        else if($a[$i] != ',')
        {
            break;
        }
    }
    return $s;
}


?>

<style>

</style>

<!-- 
<div style = "padding:20px">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<div class="table" id="details">
<div class="row"> -->
<table id="details" >
<thead>
<tr>
<td class="cell">Select</td>
<td class="cell">SKU</td>
<td class="cell">Name</td>
<td class="cell">Body</td>
<td class="cell">Image source</td>
<td class="cell">Sample type</td>
<td class="cell">Analyte type</td>
<td class="cell">Category</td>
<td class="cell">Weight</td>
<td class="cell">Status</td>
</tr>
</thead>
<tbody>
</tbody>
<!-- </div>
</div>
</div> -->
<!--<div class="table" id="edit-form">
<div class="row">
<span class="cell">SKU</span>
<span class="cell">Name</span>
<span class="cell">Image source</span>
<span class="cell">Original Price</span>
<span class="cell">Sale Price</span>
<span class="cell">Quantity Remaining</span>
<span class="cell">Product ID</span>
</div>
<div class="row" id ="form" >
<form action="/" method="post">
  <input type="text" id="sku" name="sku" class="cell" value="">
  <input type="text" id="name" name="name" class="cell" value="">
  <input type="text" id="img" name="img" class="cell" value="">
  <input type="text" id="og_price" name="og_price" class="cell" value="">
  <input type="text" id="sl_price" name="sl_price" class="cell" value="">
  <input type="text" id="rem_quantity" name="rem_quantity" class="cell" value="">
  <input type="text" id="prd_id" name="prd_id" value=""><br>
  <input type="submit" value="Modify">
</form>
</div>
</div>
-->
<table id="form" >
<thead>
<tr>
<td>SK</td>
<td>Name</td>
<td>Body</td>
<td>Image source</td>
<td>Sample type</td>
<td>Analyte type</td>
<td>Category</td>
<td>Weight</td>
<td>Status</td>
</tr>
</thead>
<tbody>
<tr>
<form method="post" id="format">
<td><input type="hidden" id="sku" name="sku" value=""><select name="sku_select" id="sku_select" onchange="setValue(this)"><option value="" required>Choose SKU...</option></select></td>
<td><input type="text" id="name" name="name" value="" required></td>
<td><input type="text" id="body" name="body" value="" required></td>
<td><input type="text" id="img" name="img" value="" required></td>
<td><input type="text" id="sample_type" name="sample_type" value="" required></td>
<td><input type="text" id="analyte_type" name="analyte_type" value="" required></td>
<td><input type="text" id="category" name="category" value="" required></td>
<td><input type="text" id="weight" name="weight" value="" required><input type="hidden" id="id" name="id" value=""></td>
<td style="text-align:center;"><input type="checkbox"  class="larger" id="status" name="active" checked></td>
</tr>
<tr>
<td colspan="7" style = "text-align:center;"><input type="submit" class="button" value="Modify/Add" name="Modify"></td>
</form>
</tr>
</tbody>
</table>
<div style="text-align:center">
<button onclick="add()" class="button" id="add_button">Add</button>
</div>
<!-- Make an add button here -->
<?php
    // $select_list_query = db_select('commerce_product ', 'c')
    //                     ->condition('sku','%'. db_like("-") . '%', 'LIKE')
    //                     //->condition('status',1,'=')
    //                     ->fields('c',array('sku','product_id','title'))
    //                     ->execute()
    //                     ->fetchAll();
    
    $edit_list_query = db_select('search_custom', 'search')
                    ->fields('search',array('id','commerce_product_sku','title','file_managed_uri','menu_links_weight','status','url_alias','node_nid','field_data_body_value','sample_type','analyte_type','category'))
                    ->execute()
                    ->fetchAll();
?>
<?php
$rows= array(array());
$pos=0;
foreach ($edit_list_query as $elq)
{
    $cnt = 0;
    $rows[$pos][$cnt++]=$elq->id;
    $rows[$pos][$cnt++]=$elq->commerce_product_sku;
    $rows[$pos][$cnt++]=$elq->title;
    $rows[$pos][$cnt++]=$elq->file_managed_uri;
    $rows[$pos][$cnt++]=$elq->menu_links_weight;
    $rows[$pos][$cnt++]=$elq->status;
    $rows[$pos][$cnt++]=$elq->url_alias;
    $rows[$pos][$cnt++]=$elq->node_nid;
    $rows[$pos][$cnt++]=$elq->field_data_body_value;
    $rows[$pos][$cnt++]=$elq->analyte_type;
    $rows[$pos][$cnt++]=$elq->category;
    $rows[$pos++][$cnt++]=$elq->sample_type;
}

$ids=array();
$pos=0;
foreach ($edit_list_query as $elq)
{
    $ids[$pos++]=$elq->id;
}
$pr_id=array();
$pos=0;
foreach ($edit_list_query as $elq)
{
    $pr_id[$pos++]=$elq->node_nid;
}

$sel_array=array(array());
$posi=0;
// foreach($select_list_query as $s)
// {
//     $string=$s->sku;
//     $stpos=strpos($string,'-');
//     $str = substr($string,0,$stpos);
//     //print("<script>console.log('pls work".$str."')</script>");
//     $sel_array[$posi][0]=$s->sku;
//     $sel_array[$posi][1]=$s->title;
//     $sel_array[$posi][2]=$s->product_id;
//     $sel_array[$posi++][3]=$str;
// }
?>
<?php
if((isset($_POST['Modify'])&&!empty($_POST['Modify'])) && isset($_POST['sku']) && isset($_POST['name']) && isset($_POST['img']) && isset($_POST['og_price']) && isset($_POST['sl_price']) && isset($_POST['rem_quantity']) && isset($_POST['prd_id']))
//if(isset($_POST['Modify'])&&!empty($_POST['Modify']))
{
    $sku = $_POST['sku'];   
    $product_id = $_POST['prd_id'];
    $checked=0;
    if(isset($_POST['active']))
    {
        $checked=1;
    }
    
    // for($i=0;$i<count($sel_array);$i++)
    // {
    //     if($sel_array[$i][2]==intval($product_id))
    //     {
    //         $str=$sel_array[$i][3];
    //         break;
    //     }
    // }
    $name = $_POST['name'];
    // $img = $_POST['img'];
    // $og_price = $_POST['og_price'];
    // $sl_price = $_POST['sl_price'];
    // $rem_quantity = $_POST['rem_quantity'];
    $id=-1;
    if(isset($_POST['id']))
    {
        $id=$_POST['id'];
    }
    
    print('<script>window.location.href ="https://fix.norgenbiotek.com/content/search-configuration";</script>');
}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    var direct_info = <?php echo json_encode ($all_info); ?>;
    var info =<?php echo json_encode($rows); ?>;
    var id=["id","sku","name","img","og_price","sl_price","rem_quantity","prd_id"];
    // var options = <?php //echo json_encode($sel_array);?>;
    var check = <?php echo json_encode($ids); ?>;   
        
    $( document ).ready(function() {
        for(let i = 0; i < direct_info.length; i++)
        {
            var list_position = document.getElementById("sku_select");
            var optionTag = '<option value="'+direct_info[i][0]+'">'+direct_info[i][0]+'</option>';
            list_position.insertAdjacentHTML('beforeend',optionTag);
        }
    });
    
    
    function setValue(el)
    {
        var pos=-1;
        for(let i = 0; i < direct_info.length; i++)
        {
            if(direct_info[i][0]==el.value)
            {
                pos=i;
                break;
            }
        }
        if(pos!=-1)
        {
            document.getElementById(id[1]).value=direct_info[pos][0]+"";
            document.getElementById(id[2]).value=direct_info[pos][1]+"";
            document.getElementById(id[7]).value=direct_info[pos][2]+"";
        }
    }
    
    
    if ( window.history.replaceState ) 
    {
        window.history.replaceState( null, null,"https://fix.norgenbiotek.com/content/search-configuration" );
    }
    for(let i=0 ; i<info.length ;i++)
    {
        var data='<div class="row datas">   <tr><td><button type="button" class="cell button" onclick="edit('+i+')">Edit</button></td><td class="cell" id ="sku_'+i+'">'+info[i][1]+'</td><td class="cell" id ="name_'+i+'">'+info[i][2]+'</td><td class="cell" id ="body_'+i+'">'+info[i][8]+'</td><td class="cell" id ="img_'+i+'">'+info[i][3]+'</td><td class="cell" id ="sample_'+i+'">'+info[i][11]+'</td><td class="cell" id ="analyte_'+i+'">'+info[i][9]+'</td><td class="cell" id ="category_'+i+'">'+info[i][10]+'</td><td class="cell" id ="weight_'+i+'">'+info[i][4]+'</td><td class="cell" id ="status_'+i+'">'+info[i][5]+'</td></tr></div>';
        var d1= document.getElementById("details");
        d1.insertAdjacentHTML('beforeend',data);
    }

    function edit(id)
    {
        // console.log(el);
        $('#details').hide();
        $('#add_button').hide();
        $('#form').show();
        $('#del_button').show();
        //sku
        var opt = document.getElementById('sku_select').getElementsByTagName('option');
        for(let j = 0 ; j < opt.length ; j++)
        {
            if(opt[j].innerHTML==document.getElementById('sku_'+id).innerHTML)
            {
                opt[j].selected = 'selected';
            }
        }
        //name
        document.getElementById('name').value= document.getElementById('name_'+id).innerHTML;


        //body
        document.getElementById('body').value = document.getElementById('body_'+id).innerHTML;

        //img Source
        document.getElementById('img').value = document.getElementById('img_'+id).innerHTML;


        // sample type
        document.getElementById('sample_type').value = document.getElementById('sample_'+id).innerHTML;


        //analyte typeof
        document.getElementById('analyte_type').value = document.getElementById('analyte_'+id).innerHTML;


        //category
        document.getElementById('category').value = document.getElementById('category_'+id).innerHTML;

        //weight
        document.getElementById('weight').value = document.getElementById('weight_'+id).innerHTML;

        //status
        if(document.getElementById('status_'+id).innerHTML=="0" ||document.getElementById('status_'+id).innerHTML ==0)
        {
            document.getElementById("status").checked = false;
        }



        // var child = el.parentElement.children;
        // var form = document.getElementById("format");
        // for(let i = 1; i< child.length;i++)
        // {
        //     console.log(child[i].innerText);
        //     if(i==2)
        //     {
        //         var opt = document.getElementById('sku_select').getElementsByTagName('option');
        //         for(let j = 0 ; j < opt.length ; j++)
        //         {
        //             if(opt[j].innerText==child[i].innerText)
        //             {
        //                 opt[j].selected = 'selected';
        //             }
        //         }
        //     }

        //     if(i==(child.length-1))
        //     {
        //         // console.log("aha " + child[i].innerText);
        //         if(child[i].innerText=="0" ||child[i].innerText ==0)
        //         {
        //             document.getElementById("active").checked = false;
        //         }
        //     }
        //     else
        //     {
        //         document.getElementById(id[i-1]).value=child[i].innerText;
        //         if(i==5)
        //         {
        //             var input = document.getElementById(id[i]);
        //             input.setAttribute("max",(document.getElementById(id[i-1]).value - 1)); // set a new value;
        //         }
        //     }
        // }
        //show a row div of the text fields that can be edited for the input.
    }
    function add()
    {
        $('#details').hide();
        $('#add_button').hide();
        $('#form').show();
        for(let i = 0; i<id.length;i++)
        {
            document.getElementById(id[i]).value="";
        }
        var opt = document.getElementById('sku_select').getElementsByTagName('option');
        opt[0].selected = 'selected';
    }
    function setmax()
    {
        var input = document.getElementById(id[5]);
        input.setAttribute("max",(document.getElementById(id[4]).value - 1));
    }
</script>

