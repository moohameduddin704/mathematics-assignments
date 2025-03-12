 <?php 
$result = array();
for($i=0;$i<10;$i++){
$rand = rand(0,100);
if(!in_array($rand,$result)){
array_push($result,$rand);
}
}
echo json_encode($result); 
?> 