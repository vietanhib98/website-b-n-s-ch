<style>
p{font-size:16px;
font-family:Georgia, "Times New Roman", Times, serif;
text-align:center;}
</style>
<?php
     $sql_all="select * from admin";
	 $query_all=mysql_query($sql_all);
     ?>
<p style="text-align:center;color:#000;background:#999;padding:10px;"><strong>Tất cả người sử dụng</strong></p>
                  <div class="tacphamall">
              
              <ul>
              <?php
						 while($dong_all=mysql_fetch_array($query_all)){
						 ?>
                   <li><a href="index.php?xem=userinfo&id=<?php echo $dong_all['id_user'] ?>">
                           <img src="admincp/modules/quanlynguoidung/uploads/<?php echo $dong_all['avatar'] ?>" width="350" height="220" />
                           <p>Họ tên: <?php echo $dong_all['hoten'] ?></p>
                           <p style="color:#666">Tên truy cập: <?php echo $dong_all['username'] ?></p>
                           
						  <?php
                            $sql_tt="select * from quyen";
                            $run_tt=mysql_query($sql_tt);                              
                           ?>
  <?php
    while($dong_tt=mysql_fetch_array($run_tt)){
		if($dong_all['quyen_truy_cap']==$dong_tt['quyen_truy_cap']){
		?>
                           <p style="color:#090;">Quyền: <?php echo $dong_tt['quyen']?></p>
                           
                       </a> </li>     
                       <?php
		}}
						 }
						 ?>
              </ul>    
          </div>