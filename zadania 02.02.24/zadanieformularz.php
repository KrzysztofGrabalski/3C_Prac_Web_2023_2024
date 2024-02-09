<?php
			if(isset($_POST['wyslij'])){
				$data = $_POST['data'];
				$miejsce = $_POST['miejsce'];
				$płeć = $_POST['płeć'];
				$uwagi = $_POST['uwagi'];
				$zgoda = $_POST['zgoda'];

				if($zgoda == 'tak'){
					echo "Dziękujemy za rejestrację!";
				}else{
					echo "Nie wyraziłeś/a zgody na przetwarzanie danych więc twoje dane  nie zostały wysłane.";
				}
			}
		?>