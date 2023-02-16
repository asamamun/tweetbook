<?php
							use App\classes\Database;
                            $conn = new Database();
							$sql = "SELECT tweets.`cid`, categories.name ,count(*) as total FROM `tweets` 
							inner join categories on tweets.cid=categories.id
							WHERE tweets.`privacy`='1' group by tweets.`cid`";
							$allCategory = $conn->db->query($sql);
							if ($allCategory->num_rows > 0) {
								while ($cate = $allCategory->fetch_assoc()) {
									echo '<a href="categorytweet.php?cid='.$cate['cid'].'">' . $cate['name'] . '<span>('.$cate['total'].')</span></a>';
								}
							}
							// $dbh = new Dbhelper();
							// $cats = $dbh->toArray('categories');
							// if($cats){
							// foreach ($cats as $cat) {
							// 	echo '<a href="categorytweet.php?cid='.$cat['id'].'">' . $cat['name'] . '<span>(86)</span></a>';
							// }
							//}
							?>
                         