<?php
function submenu1() { 
                                    global $domain, $db, $seo_on;
						$rci = $db->query('SELECT * FROM dd_categories');
						
						while($row = $db->Fetch_row($rci)){
						$numrws =$db->query(sprintf('SELECT ID FROM dd_games WHERE category=\'%u\'', $row['ID']));
						$cnumrws = $db->num_rows($numrws);
						$categoryname = ereg_replace('[^A-Za-z0-9]', '', $row['name']);
					      	if($seo_on == 1){
					      		$categoryurl = ''.$domain.'/browse/'.$row['ID'].'-'.$categoryname.'.html';
					      	}else{
					      		$categoryurl = ''.$domain.'/index.php?action=browse&amp;ID='.$row['ID'].'';
					      	}
							echo '<li><a href=\''.$categoryurl.'\'>'.$row['name'].' ('.$cnumrws.')</a></li>';
						};
}; 
?>