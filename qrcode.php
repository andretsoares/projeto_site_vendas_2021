<?php
					$qrcode = $row_prod['qr_prod'];
					
					
					$aux = "qr_img0.50j/php/qr_img.php?";
					$aux .= "d={$qrcode}&";
					$aux .= "e=H&";
					$aux .= "s=1&";
					$aux .= "t=P";
				
					
					
					//$desc10 = $row_prod['desc10_prod'];
					//$desc15 = $row_prod['desc15_prod'];
					
					//$qrcode_desc5 = rand (int ($min=1) int ($max=15));
					
					//$rand = rand (($desc5), ($desc10), ($desc15));
					//var_dump($rand);
					
					$desc = "SELECT nome_prod, valor_prod, desc_prod FROM output_images ORDER BY RAND()";
					
					
					//$rand = rand (1, 15);
					
					//var_dump($rand);
					
					$resultado_desconto = mysqli_query($conn, $desc);
					$row_prod = mysqli_fetch_assoc($resultado_desconto);
					
					
					
					$comma_separated = implode(",", $row_prod);

					//print $comma_separated; // lastname,email,phone

					
					
					
					$qrcode2 = $comma_separated;
					
									
					$aux2 = "qr_img0.50j/php/qr_img.php?";
					$aux2 .= "d={$qrcode2}&";
					$aux2 .= "e=H&";
					$aux2 .= "s=1&";
					$aux2 .= "t=P";
				
				
?>				