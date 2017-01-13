<?php
// get the data from From(HTML Inputs)
    $product_description = $_POST['product_description'];
    $list_price = $_POST['list_price'];
    $discount_percent = $_POST['discount_P'];

// caculate the discount
/*
    list_price =100$
    discount_precent = 90$
    100-90*(0.01)=
*/ 
    $discount = $list_price * $discount_Percent * .01;
    $discount_price = $list_price - $discount;

// apply currency formatting to the dollar and percent amounts
$list_price_formatted = "$" .number_format($list_price,2);
$discount_percent_formatted = $discount_percent."%";
$discount_formatted ="$".number_format($discount,2);
$discount_price_formatted = "$".number_format($discount_price,2);

?>
<html>
    <span><?php echo $product_description ?> </span><br/>
    <span><?php echo $discount ?> </span><br/>
    <span><?php echo $discount_price ?> </span><br/>
    
</html>
<html>

<head>
    <title> Product Discount Calculator</title>
    <link href="main.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="content">

            <table>
                <tr>
                    <td>
                        <h1> Product Discount Calculator</h1>
                        <table>
                            <tr>
                                <td width="300">Product Description</td>
                                <td><?php echo $product_description; ?>
                            </tr>
                            <tr>
                                <td>ListPrice</td>
                                <td><?php echo $list_price_formatted; ?>
                            </tr>
                            <tr>
                                <td>Discount Percent</td>
                                <td><?php echo $discount_percent_formatted; ?>
                            </tr>
                            <tr>
                                <td>Discount Formatted</td>
                                <td><?php echo $discount_price_formatted; ?>
                            </tr>
                            
                        </table>
                        <br/>
                       
                        </td>
                </tr>
            </table>
    
    </div>

</body>

</html>