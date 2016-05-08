
<?php
 session_start();
  if($_SESSION['exp']=='invalid'){

 header("location:login.php");
unset($_SESSION['user']);
unset($_SESSION['company']);
unset($_SESSION['Id']);
unset($_SESSION['fulname']);

}
?>
                        <table class="table table-striped table-bordered dataTable">
                        <strong> Lease Information </strong>
                        <?php 	
						require('connect.php');
							$sql= "SELECT * From rent_property WHERE owner='".$_GET['owner']."' AND property_name='".$_GET['property']."' AND unit='".$_GET['unit']."'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
								
										if(mysql_num_rows($result) > 0) 
										{
											$member = mysql_fetch_assoc($result);?>
                                           <tbody style="border: 1px solid black;"> 
                                           <thead>
                                        
                                              <tr>
                                                 <th>Renter</th>
                                                <?php $var= $member['renter']; 
											
									$sql= "SELECT * From clients WHERE id='$var'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
									 	
										if(mysql_num_rows($result) > 0) 
										{
												$member2 = mysql_fetch_assoc($result);?>
											<td id="rname"><?php echo $member2['real_name']; ?></td>
                                            <?php } }?>
                                              </tr>
                                        
                                              <tr>
                                       
                                                 <th > Amount</th>
                                                                                  <?php			 
									$sql= "SELECT * From finaical WHERE owner='".$_GET['owner']."' AND propertyid='".$_GET['property']."' And id='".$_GET['rentid']."'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
									 
										if(mysql_num_rows($result) > 0) 
										{
											$member3 = mysql_fetch_assoc($result);?>
											<td id="amountpay"><?php echo $member3['amount_paid'].'  AED'; ?></td>
                                          
                                              </tr>
                                              <tr>
                                                <th>Amont in Words </th>
                                                 <td id="amountword"><?php echo convert_number_to_words($member3['amount_paid']).'  dirham'; ?></td>
                                 
                                              </tr>  
											
                                       
                                              <tr>
                                       
                                                 <th >Receving Date</th>
                                                 <td id="recdate"><?php echo $member3['datee']; ?></td>
                                         
                                              </tr>
                                      
                                              <tr>
                  
                                                  <th >For Lease</th>
                      <?php   $sql= "SELECT * From rent_property WHERE owner='".$_GET['owner']."' AND property_name='".$_GET['property']."' AND unit='".$_GET['unit']."'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
								
										if(mysql_num_rows($result) > 0) 
										{
											$member5 = mysql_fetch_assoc($result);?>
                                            <td id="flease"><?php echo $member5['id']; ?></td>
                               </tr>
                               <?php }
                               }?>
                                        	    <tr>
                                                  <th >For Property</th>
                                                                   <?php 
												  $price=$member3['propertyid'];
												  $sql= "SELECT * From add_property WHERE id='$price'";   
									$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
									if($result)
									 {
									 
										if(mysql_num_rows($result) > 0) 
										{
											$member = mysql_fetch_assoc($result);?>
											<td id="fproperty"><?php echo $member['propty_name']; ?></td>
                                            <?php }
                                            }
										?>
                                               
                                              </tr> 
                                            	    <tr>
                                                  <th >For Unit</th>

											<td id="funit"> <?php echo $member5['unit']; ?></td>
                                            <?php }
                                            }
                                            }
									 }
									?>       										   </tr>
                                                 
                                              
                                              </thead>
                                           </tbody>
                        </table>
                        <input name="print" type="submit" value="Print" onClick="callme3(this)">
<?php
   function convert_number_to_words($number) {  
    $hyphen      = '-';
    $conjunction = ' and ';
    $separator   = ', ';
    $negative    = 'negative ';
    $decimal     = ' point ';
    $dictionary  = array(
        0                   => 'zero',
        1                   => 'one',
        2                   => 'two',
        3                   => 'three',
        4                   => 'four',
        5                   => 'five',
        6                   => 'six',
        7                   => 'seven',
        8                   => 'eight',
        9                   => 'nine',
        10                  => 'ten',
        11                  => 'eleven',
        12                  => 'twelve',
        13                  => 'thirteen',
        14                  => 'fourteen',
        15                  => 'fifteen',
        16                  => 'sixteen',
        17                  => 'seventeen',
        18                  => 'eighteen',
        19                  => 'nineteen',
        20                  => 'twenty',
        30                  => 'thirty',
        40                  => 'fourty',
        50                  => 'fifty',
        60                  => 'sixty',
        70                  => 'seventy',
        80                  => 'eighty',
        90                  => 'ninety',
        100                 => 'hundred',
        1000                => 'thousand',
        1000000             => 'million',
        1000000000          => 'billion',
        1000000000000       => 'trillion',
        1000000000000000    => 'quadrillion',
        1000000000000000000 => 'quintillion'
    );
    
    if (!is_numeric($number)) {
        return false;
    }
    
    if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
        // overflow
        trigger_error(
            'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
            E_USER_WARNING
        );
        return false;
    }

    if ($number < 0) {
        return $negative . convert_number_to_words(abs($number));
    }
    
    $string = $fraction = null;
    
    if (strpos($number, '.') !== false) {
        list($number, $fraction) = explode('.', $number);
    }
    
    switch (true) {
        case $number < 21:
            $string = $dictionary[$number];
            break;
        case $number < 100:
            $tens   = ((int) ($number / 10)) * 10;
            $units  = $number % 10;
            $string = $dictionary[$tens];
            if ($units) {
                $string .= $hyphen . $dictionary[$units];
            }
            break;
        case $number < 1000:
            $hundreds  = $number / 100;
            $remainder = $number % 100;
            $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
            if ($remainder) {
                $string .= $conjunction . convert_number_to_words($remainder);
            }
            break;
        default:
            $baseUnit = pow(1000, floor(log($number, 1000)));
            $numBaseUnits = (int) ($number / $baseUnit);
            $remainder = $number % $baseUnit;
            $string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
            if ($remainder) {
                $string .= $remainder < 100 ? $conjunction : $separator;
                $string .= convert_number_to_words($remainder);
            }
            break;
    }
    
    if (null !== $fraction && is_numeric($fraction)) {
        $string .= $decimal;
        $words = array();
        foreach (str_split((string) $fraction) as $number) {
            $words[] = $dictionary[$number];
        }
        $string .= implode(' ', $words);
    }
    
    return $string;
}?>
<script type="text/javascript" >
    
    function callme3(obj)
    {debugger;
      var rent = (document.getElementById("rname")).innerHTML;
       var amount = (document.getElementById("amountpay")).innerHTML;
        var amountword = (document.getElementById("amountword")).innerHTML;
         var recdate = (document.getElementById("recdate")).innerHTML;
          var flease = (document.getElementById("flease")).innerHTML;
           var fproperty = (document.getElementById("fproperty")).innerHTML;
            var funit = (document.getElementById("funit")).innerHTML;
            

        window.location="actionpdf.php?rent="+rent+'&amount=' + amount + '&amountword=' + amountword + '&recdate=' + recdate + '&flease='  +flease  + '&fproperty='  +fproperty 
 + '&funit='  +funit;
     
    }
    
    </script>