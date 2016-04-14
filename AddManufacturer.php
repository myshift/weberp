<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include('includes/session.inc');
$Title = _('Manufacturer: Add Manufacturer');

$ViewTopic= 'Manufacturer: Add Manufacturer';
$BookMark = 'Manufacturer: Add Manufacturer';

include('includes/header.inc');



//新增表单提交外理
        if (isset($_POST['addsumit']))
       {
                        
      TS_Save_mmst211(htmlspecialchars(trim($_POST['supl_no'])),trim($_POST['supl_name']),trim($_POST['supl_fname']),trim($_POST['money_name']),trim($_POST['tax_type']),trim($_POST['supl_tel']),trim($_POST['supl_fax']),trim($_POST['link_name']),trim($_POST['supl_payment']),trim($_POST['tax_type']),trim($_POST['supl_addr']),trim($_POST['remark']),trim($_POST['d_list']),'add');
           
        }
        
       
        
        
      $result =    Get_mmst211_MaxSuplNo();
      
      $myrow = array();
      $myrow =   $result->fetch_assoc();
      
 
  

//新增页面
echo '<div id= dsadzwadd >' ;

echo '<a href="'. $RootPath . '/Manufacturer.php">' .  _('Back to Manufacturer'). '</a><br />';


echo '<p class="page_title_text"><img src="'.$RootPath.'/css/'.
$Theme.'/images/contract.png" title="' . _('Manufacturer') . '" alt="" />' . ' ' . _
('Manufacturer: Add Manufacturer') . '</p>';

echo '<form action="' . htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8') . '" 
name="AddManufacturer" method="post"  >';

echo '<input type="hidden" name="FormID" value="' . $_SESSION['FormID'] . '" />';



echo '<table cellpadding="3" class="selection">

               <tr>
                
		        <td><h3>' . _('Manufacturer number') . ':</h3></td>
			<td><input tabindex="1" type="text" name="supl_no"  id = "supl_no"   autofocus="autofocus" required size="20" maxlength="25" value =" '.$myrow ["Get_mmst211_MaxSuplNo()"].'" /></td>
                         <td><h3>' . _('Manufacturer name') . ':</h3></td>
			<td>
                        <input tabindex="1" type="text" name="supl_name" id = "supl_name"   size="20" maxlength="25" required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  />
                        
                        </td>	
                        
		</tr>
                
                 <tr>      
		        <td><h3>' . _('supl_payment') . ':</h3></td>
			<td >
                        <input tabindex="1" type="text" name="supl_payment" id = "supl_payment"    size="20" maxlength="25"                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        />
                        </td>		
                        <td><h3>' . _('ZMCurrency') . ':</h3></td>
			<td>
                        <select name = "money_name" size = "1" >
                              <option value = "人民币">人民币</option>
                              <option value = "欧元">欧元</option>
                              <option value = "美元">美元</option>
                              <option value = "日元">日元</option>
                           </select>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
                        </td>	
                       
		</tr>    
               
                </tr>
                     <td><h3>' . _('tax_type') . ':</h3></td>
			<td>
                        <input tabindex="1" type="text" name="tax_type" id = "tax_type"    size="20" maxlength="25"                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    />
                        </td>
                        <td><h3>' . _('supl_tel') . ':</h3></td>
			<td>
                        <input tabindex="1" type="text" name="supl_tel" id = "supl_tel"    size="20"  maxlength="25"  />
                        </td> 
		</tr>  
             
                 <tr>      
		        
                        <td><h3>' . _('supl_fax') . ':</h3></td>
			<td>
                        <input tabindex="1" type="text" style="width: 135px;" name="supl_fax" id = "supl_fax"    size="20" maxlength="25"                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               />
                       </td>	
                          <td><h3>' . _('link_name') . ':</h3></td>
			<td>
                        <input tabindex="1" type="text" name="link_name" id = "link_name" style="width: 135px;"    size="20" maxlength="25"                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   />
                          </td>	
                        
		</tr>  
                
                  <tr>  
                        <td><h3>' . _('Manufacturer supl_fname') . ':</h3></td>
			<td colspan = "3">
                        <input tabindex="1" type="text" name="supl_fname" id = "supl_fname"    size="70" maxlength="25"    >                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
                        </td>	
		       
                       
		</tr> 
             
                   <tr>      
		         <td><h3>' . _('supl_addr') . ':</h3></td>
			<td colspan = "3">
                        <input tabindex="1" type="text" name="supl_addr" id = "supl_addr"    size="70"   maxlength="25"   />
                        </td>
                 </tr>
                 
                 <tr>      
		      
                         <td><h3>' . _('remark') . ':</h3></td>
			<td colspan = "3"><textarea name="remark" cols="91" rows="5"></textarea></td>	
		</tr>   

             
             
            

       </table>
       <br />';
  
 echo '<div class="centre">'.
            '<input  type="submit" name="addsumit" id = "salesorder" value="' . _
('add') .'"   /> '    
       . '<input tabindex="5" type="reset" name="reset" value="' . _('Reset') .'" /> ' .'</div>';
                


	
echo '</form>';


echo '</div>';

