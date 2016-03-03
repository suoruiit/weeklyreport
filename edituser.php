<?php

require_once 'function.php';
?>
<?php

if(!empty($_GET['id'])){
    connectDb();
    $id=intval($_GET['id']);
    $result=mysql_query("SELECT*FROM reportweekly  WHERE id=$id");
    if (mysql_errno()){
        die('can not connect db');
    }
    $arr =mysql_fetch_assoc($result);

}else{
    die('id not define');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>麦梯周计划 提交页面</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .total {
            border: 1px solid #daba86;
            padding: 15px;
            margin-top:15px;
        }
        #little{
            margin-top:15px;
            margin-bottom: 15px;
        }
        #submit{
            float: right;
        }
        .date{
            margin-top: 15px;
        }
    </style>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2 class="text-center"> 麦梯定制</h2>
    <h3 class="text-center">周计划</h3>
    <h4 class="text-left">2016年度</h4>
    <div class="row total">
        <form name="child" action="edituser_server.php" method="post">
            <input  type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 date">
                <label for="participant">部门：</label>
                <input type="text"  id="department" name="department" value="<?php echo $arr['department']; ?>">
            </div>
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                <textarea class="form-control"  id="little"name="little"><?php echo $arr['little'];?></textarea>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 date">
                    <label for="principal">负责人：</label>
                    <input type="text"  id="principal" name="principal" value="<?php echo $arr['principal']; ?>" onchange="checkField(this.value)">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 date">
                    <label for="participant">相关人：</label>
                    <input type="text"  id="participant" name="participant" value="<?php echo $arr['participant']; ?>">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 date">
                    <label for="time">完成时间：</label>
                    <input type="text" name="time" value="<?php echo $arr['time']; ?>" id="time">
                </div>
            </div>
            <button class=" btn btn-primary text-center" id="submit" type="submit">提交</button>
        </form>
    </div>
</div>

</body>
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
    function today(){
        var today=new Date();
        var h=today.getFullYear();
        var m=today.getMonth()+1;
        var d=today.getDate();
        return h+"-"+m+"-"+d;
    }
    document.getElementById("time").value = today();
</script>



</html>