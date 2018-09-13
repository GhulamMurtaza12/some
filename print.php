<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<link href="<?php echo base_url();?>/assests/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url();?>/assests/js/jquery.js"></script>

<body style="padding:5%">
<a href=""><button type="submit" class="btn btn-success" onClick="printDiv('p');">Print</button></a>

<div id="p" style="background-color:white; height:800px; width:100%; border-color:#CCC; border-width:1px; border-style:solid; padding:10%">
<table border="0px solid black" align="center" cellpadding="20px" width="800px" height="400px" >
<tr>

<td colspan="">
<div style="float:left">
<img src="" height="200" width="200"></div>

</td>

<td colspan="3" align="left">
<div style="padding-left:40px">
<h1>INFOSYS</h1>
<h3>Institute of Information Technology</h3>
</div>
</td>
</tr>
<tr>

<td colspan="" align="center">
<b>Student:</b>
</td>
<td colspan="3" align="left">

<u>&nbsp;&nbsp;&nbsp;Ghulam Murtaza&nbsp;&nbsp;&nbsp;

</td>
</tr>

<tr>

<td colspan="" align="center">
<b>Class:</b>
</td>
<td colspan="3" align="left">
<u>&nbsp;&nbsp;&nbsp;&nbsp;BS Software engineering&nbsp;&nbsp;&nbsp;
</td>
</tr>

<tr>
<td align="center">
<b>Installment:</b>
</td>
<td align="left">
<u>2nd
</td>


<td align="left">
<b>Fee:</b>
</td>
<td align="left">
<u>30,000
</td>
</tr>





<tr>
<td align="center">
<b>Cashier:</b>
</td>
<td align="left">
<u>Ali
</td>


<td align="left">
<b>Sign:</b>
</td>
<td align="left">
<u>Murtaza
</td>
</tr>



</table>
<br>
<br<br>
<br>
<br>
<br>
<br>
<br><br><br><br><br><br><br>
<hr>

<table border="0px solid black" align="center" cellpadding="10px" width="700px" height="100px" >
<tr>
<td >
<b>Date:</b>
</td>
<td><u>18,5,2018
</td>


<td>

<b>Contact:</b>
</td>
<td>
<u>0123456789
</td>
</tr>
<tr>
<td colspan=""><b>Adress:</b></td>
<td colspan="3"><u>Street Janaza Gah Moazzamabab,tehsil kotmomin</td>
</tr>

</table>

</div>


<script type="text/javascript">
function printDiv(p) {
     var printContents = document.getElementById(p).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}


</script>
</body>
</html>