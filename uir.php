<?php 
    // Start MySQL Connection
    include('dbconnect.php'); 
?>

<html>
<head>
    <title>Driver</title>
    <style type="text/css">
        .table_titles, .table_cells_odd, .table_cells_even {
                padding-right: 20px;
                padding-left: 20px;
                color: #000;
        }
        .table_titles {
            color: #FFF;
            background-color: #666;
        }
        .table_cells_odd {
            background-color: #CCC;
        }
        .table_cells_even {
            background-color: #FAFAFA;
        }
        table {
            border: 2px solid #333;
        }
        body { font-family: "Trebuchet MS", Arial; }
    </style>
	<script>
	        function redir(){
            window.location="map.php";
        }
	</script>
</head>

    <body>
        <h1><center></center></h1>
		<h2><center>Train Crack Fault Detection.</center></h2>
		
		
    <table border="0" cellspacing="0" cellpadding="4" align="center">
			<tr>
			<td><input type="button" id = "mapview" class="mapview" value = "Map View" onclick="redir();"</td>
			</tr>
          <tr>
            <td class="table_titles">ID</td>
            <td class="table_titles">Fault Status</td>			  			
			<td class="table_titles">Geo Latitude</td>
			<td class="table_titles">Geo Longitude </td>				
            <td class="table_titles">Date and Time</td>
          </tr>
<?php
    // Retrieve all records and display them
    $result = mysql_query("SELECT * FROM uri_status ORDER BY id ASC");

    // Used for row color toggle
    $oddrow = true;

    // process every record
    while( $row = mysql_fetch_array($result) )
    {
        if ($oddrow) 
        { 
            $css_class=' class="table_cells_odd"'; 
        }
        else
        { 
            $css_class=' class="table_cells_even"'; 
        }

        $oddrow = !$oddrow;

        echo '<tr>';
        echo '   <td'.$css_class.'>'.$row["id"].'</td>';      
		echo '   <td'.$css_class.'>'.$row["fault_detection"].'</td>'; 	
		echo '   <td'.$css_class.'>'.$row["lat"].'</td>';		
		echo '   <td'.$css_class.'>'.$row["longtitude"].'</td>';				
		echo '   <td'.$css_class.'>'.$row["datetime"].'</td>';
        echo '</tr>';
    }
?>
    </table>
    </body>
</html>