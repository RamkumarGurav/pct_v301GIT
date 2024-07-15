<?php 
$filename = "Enquiry-List-" . date('d-m-Y') . ".xls"; header("Content-Disposition: attachment; filename=\"$filename\""); 
header("Content-Type: application/vnd.ms-excel");
//print_r($enquiry_data);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enquiry List</title>
</head>
<body>
<?php 
$colspan = 10;
?>
    <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
                                    <thead>
                                    <?php  if(!empty($start_date) || !empty($end_date) ){ ?>
                                        <tr>
                                            <th  colspan="<?php  echo $colspan?>" style="background-color:#CCC" width="*"><br />

                                            Search Record : 
                                            <?php  if(!empty($start_date)){ echo "From : ".date('d-m-Y' , strtotime($start_date)); } ?>
                                            
                                            <?php  if(!empty($end_date)){ echo " &nbsp;&nbsp;&nbsp;&nbsp;	 To : ".date('d-m-Y' , strtotime($end_date)); } ?>
<br />&nbsp;
                                            
                                            </th>
                                            
                                        </tr>
                                        <?php  } ?>
                                        
                                        <tr >
                                            <th style="background-color:#999" width="*">Sl. No.</th>
                                            <th style="background-color:#999" width="*">Enquiry Date</th>
                                            <th style="background-color:#999" width="*">Name</th>
											<th style="background-color:#999" width="*">Email</th>
											<th style="background-color:#999" width="*">Contact No</th>
											<th style="background-color:#999" width="*">Subject</th>
											<th style="background-color:#999" width="*">Description</th>
											<th style="background-color:#999" width="*">Added OPn</th>
											<th style="background-color:#999" width="*">Updated On</th>
											<th style="background-color:#999" width="*">Updated By</th>
											<th style="background-color:#999" width="*">Status</th>
                                        </tr>
                                      </thead>
                                    <tbody>
									<?php  
                                        $count=0;
                                       // echo "count : ".count($ptype_list)." <br>";
                                        if(!empty($enquiry_data))
                                        { //print_r($ptype_list);
                                            foreach($enquiry_data as $row)   
                                            {
                                           //if($row->in_hand > 0 || $row->total_purchase > 0 || $row->total_sold > 0 || $row->total_returned > 0 || $row->to_receive > 0 )
										   { 
										   $count++;


                                    ?>
                                        <tr>
                                            <td width="*"><?php  echo $count;?></td>
											<td width="*"><?php  echo date('d-m-Y h:i:s A' , strtotime($row->added_on));?> &nbsp;</td>											
											<td width="*"><?php  echo $row->name;?></td>
											<td width="*"><?php  echo $row->email;?></td>
											<td width="*"><?php  echo $row->contactno;?></td>
											<td width="*"><?php  echo $row->subject;?></td>
											<td width="*"><?php  echo $row->description;?></td>
											<td width="*"><?php  echo date('d-m-Y h:i:s A' , strtotime($row->added_on));?> &nbsp;</td>
											<td width="*"> <?php  if(!empty($row->updated_on)){echo date('d-m-Y h:i:s A' , strtotime($row->updated_on));}?> &nbsp;</td>
                                            <td width="*"><?php  if(!empty($row->updated_by_name)){echo $row->updated_by_name;}?></td>
                                            <td width="*">
											<?php  if($row->status==1){ ?> Active
                                                <?php }else{ ?>Block
                                                <?php  }?>	
											</td>
                                            
                                        </tr>
									<?php 	}}?>
										
                                       
									<?php  }else{ ?>
                                            <tr>
                                                <th colspan="<?php  echo $colspan?>">No records to display...</th>
                                            </tr>
                                            
									<?php  } ?>
                                    </tbody>
                                    
                                </table>



</body>

</html>
