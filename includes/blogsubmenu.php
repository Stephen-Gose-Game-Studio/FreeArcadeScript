<?php
function submenu1() { 
                                    global $domain, $db, $seo_on;
						$rci = $db->query('SELECT * FROM blogcategories');
						
						while($row = $db->Fetch_row($rci)){
						$numrws =$db->query(sprintf('SELECT ID FROM dd_games WHERE category=\'%u\'', $row['ID']));
						$cnumrws = $db->num_rows($numrws);
						$categoryname = ereg_replace('[^A-Za-z0-9]', '', $row['categoryname']);
					      	if($seo_on == 1){
					      		$categoryurl = ''.$domain.'/blog/'.$row['categoryid'].'/1/';
					      	}else{
					      		$categoryurl = ''.$domain.'/index.php?action=blogcat&category='.$row['categoryid'].'';
					      	}
							echo '<li><a href=\''.$categoryurl.'\'>'.$row['categoryname'].'</a></li>';
						};

}; 
?>