<?php

//Have any question? Contact me: habibieamrullah@gmail.com . Have extra money to support me? Donate via paypal to that email address. Thanks!

/*
if(!isset($_GET["test"])){
    echo "The page is under maintenance. Contact +6287880334339 (WhatsApp only) for any inquiries.";
}else{
*/    


    session_start();
    include("config.php");
    if(isset($_POST["submitorder"])){
        
        $ordernumber = mysqli_real_escape_string($connection, $_POST["ordernumber"]);
        $ordername = mysqli_real_escape_string($connection, $_POST["ordername"]);
        $orderaddress = mysqli_real_escape_string($connection, $_POST["orderaddress"]);
        $orderphone = mysqli_real_escape_string($connection, $_POST["orderphone"]);
        $deliverydate = mysqli_real_escape_string($connection, $_POST["deliverydate"]);
        $deliverytime = mysqli_real_escape_string($connection, $_POST["deliverytime"]); 
        $cakes = mysqli_real_escape_string($connection, $_POST["cakes"]); 
        
        mysqli_query($connection, "INSERT INTO $tablename (ordernumber, name, address, phone, deliverydate, deliverytime, cakes) VALUES ('$ordernumber', '$ordername', '$orderaddress', '$orderphone', '$deliverydate', '$deliverytime', '$cakes')");
    }else{
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <title><?php echo $sitetitle ?></title>
                <meta charset="utf-8">
                <meta http-equiv="Pragma" content="no-cache" />
                <meta http-equiv="Expires" content="0" />
                <meta http-equiv="x-ua-compatible" content="ie=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
                <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
                
                <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		        <link rel="icon" href="favicon.ico" type="image/x-icon">
		        
		        <meta name="description" content="<?php echo $sitemotto ?>"/>
		        <meta property="og:image:url" content="thumbnailimage.png" />
                
                <script
                  src="https://code.jquery.com/jquery-3.5.1.min.js"
                  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
                  crossorigin="anonymous"></script>
                <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                <link href="https://fonts.googleapis.com/css2?family=Averia+Gruesa+Libre&family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
                <script src="products.js"></script>
                <style>
                    body{
                        padding-top: 170px;
                        background-color: #231f20;
                        color: white;
                        font-family: 'Averia Gruesa Libre', cursive;
                        background: url(bg.jpg) no-repeat center center fixed; 
                        -webkit-background-size: cover;
                        -moz-background-size: cover;
                        -o-background-size: cover;
                        background-size: cover;
                    }
                    h1, h2, h3, h4, h5, h6, p{
                        margin: 0;
                        margin-bottom: 10px;
                    }
                    #cover{
                        position: fixed;
                        background: url(cover.jpg) no-repeat center center fixed; 
                        -webkit-background-size: cover;
                        -moz-background-size: cover;
                        -o-background-size: cover;
                        background-size: cover;
                        top: 0;
                        left: 0;
                        right: 0;
                        bottom: 0;
                    }
                    #appbar{
                        position: fixed;
                        top: 0;
                        left: 0;
                        right: 0;
                        padding: 30px;
                        
                        color: white;
                        font-size: 30px;
                        text-align: center;
                        
                    }
                    #menubutton{
                        position: fixed;
                        top: 0;
                        left: 0;
                        padding: 20px;
                        color: white;
                        font-size: 30px;
                    }
                    #infobutton{
                        position: fixed;
                        top: 0;
                        right: 0;
                        padding: 20px;
                        color: white;
                        font-size: 30px;
                    }
                    .block{
                        background-color: rgba(196,153,108,.5);
                        backdrop-filter: blur(5px);
                        -webkit-backdrop-filter: blur(5px);
                        padding: 20px;
                        margin: 20px;
                        color: white;
                        border-radius: 10px;
                    }
                    
                    .greenblock{
                        background-color: #00cd05;
                        padding: 20px;
                        margin: 20px;
                        color: white;
                        border-radius: 10px;
                        cursor: pointer;
                    }
                    select, input{
                        box-sizing: border-box;
                        width: 100%;
                        padding: 20px;
                        margin-bottom: 10px;
                        font-family: 'Averia Gruesa Libre', cursive;
                        font-size: 16px;
                        border-radius: 5px;
                        outline: none;
                        border: none;
                        cursor: pointer;
                    }
                    
                    #selectedcakes{
                        box-sizing: border-box;
                        width: 100%;
                        padding: 20px;
                        margin-bottom: 10px;
                        font-family: 'Averia Gruesa Libre', cursive;
                        font-size: 16px;
                        border-radius: 5px;
                        outline: none;
                        border: none;
                        cursor: pointer;
                        background-color: white;
                        color: black;
                        text-align: left;
                    }
                    
                    #drawer{
                        position: fixed;
                        left: 0;
                        top: 0;
                        bottom: 0;
                        padding-top: 70px;
                        background-color: gray;
                        width: 70%;
                        max-width: 512px;
                        color: white;
                        display: none;
                    }
                    .draweritem{
                        padding: 20px;
                        border-bottom: 1px solid white;
                    }
                    
                    .nicefont{
                        font-family: 'Oleo Script Swash Caps', cursive;
                        font-weight: normal;
                        font-size: 22px;
                    }
                    
                    #cakes{
                        position: fixed;
                        top: 0;
                        left: 0;
                        right: 0;
                        bottom: 0;
                        padding: 40px;
                        padding-top: 100px;
                        background-color: rgba(0, 0, 0, .5);
                        backdrop-filter: blur(15px);
                        -webkit-backdrop-filter: blur(15px);
                        display: none;
                        overflow: auto;
                    }
                    
                    .cakebutton{
                        font-size: 10px;
                        background-color: rgba(255, 255, 255, .5);
                        border: 2px solid gray;
                        padding: 5px;
                        margin: 5px;
                        border-radius: 10px;
                        color: black;
                        filter: grayscale(10%);
                        cursor: pointer;
                        display: inline-block;
                        width: 96px;
                        vertical-align: top;
                        position: relative;
                    }
                    
                    .qmark{
                        position: absolute;
                        bottom: 10%;
                        left: 10%;
                        text-align: left;
                        box-sizing: border-box;
                        font-size: 12px;
                    }
                    
                    .qtyholder{
                        background-color: white; padding: 10px; border-radius: 5px;
                    }
                    
                    .pbclose{
                        position: absolute;
                        top: -5%;
                        right: -5%;
                        text-align: right;
                        font-size: 20px;
                        padding: 5px;
                    }
                    
                    .cakescontent{
                        padding-bottom: 40px;
                    }
                    
                    @media (min-width: 700px){
                        .cakebutton{
                            font-size: 13px;
                            background-color: rgba(255, 255, 255, .5);
                            border: 1px solid gray;
                            padding: 20px;
                            margin: 20px;
                            border-radius: 10px;
                            color: black;
                            filter: grayscale(10%);
                            cursor: pointer;
                            display: inline-block;
                            width: 200px;
                            vertical-align: top;
                        }
                        
                        .pbclose{
                            top: -10%;
                            right: -10%;
                            font-size: 30px;
                        }
                        
                        .qmark{
                            font-size: 30px;
                        }
                    }
                    
                    
                    
                    .cakecategory{
                        border: 3px solid white;
                        border-radius: 20px;
                        margin-bottom: 20px;
                    }
                    
                    /* SCROLLBAR STYLING */
                    /* width */
                    ::-webkit-scrollbar {
                        width: 2px;
                    	height: 2px;
                    }
                    /* Track */
                    ::-webkit-scrollbar-track {
                        background: white; 
                    }
                    /* Handle */
                    ::-webkit-scrollbar-thumb {
                        background: black; 
                    }
                    /* Handle on hover */
                    ::-webkit-scrollbar-thumb:hover {
                        background: #555; 
                    }
                
                </style>
            </head>
            <body>
                
                <?php 
                
                if(isset($_GET["admin"])){
                    ?>
                    <div style="margin-top: -150px; padding: 10px; font-family: arial;">
                        <?php
                        
                        if(isset($_SESSION["username"]) && isset($_SESSION["password"]) && $_SESSION["username"] == $username && $_SESSION["password"] == $password){
                            ?>
                            <h1>Admin Panel</h1>
                            <p>List of orders:</p>
                            
                            <?php
                            
                            //ordernumber, name, address, phone, deliverydate, deliverytime, cakes
                            $sql = "SELECT * FROM $tablename ORDER BY id DESC";
                            $result = mysqli_query($connection, $sql);
                            while($row = mysqli_fetch_assoc($result)){
                                ?>
                                <div class="block" style="margin: 0px; margin-bottom: 10px; font-size: 14px; padding: 5px;">
                                    <p>
                                    <?php
                                    echo "<b>Order Number:</b><br>" . $row["ordernumber"] . "<br><b>Name:</b><br>" . $row["name"] . "<br><b>Address:</b><br>" . $row["address"] . "<br><b>Phone:</b><br>" . $row["phone"] . "<br><b>Delivery date:</b><br>" . $row["deliverydate"] . "<br><b>Delivery time:</b><br>" . $row["deliverytime"] . "<br><b>Ordered cakes:</b><br>" . str_replace("->", "<br>->", $row["cakes"]);
                                    ?>
                                    </p>
                                </div>
                                <?php
                            }
                            
                        }else{
                            if(isset($_POST["username"])){
                                if($_POST["username"] = $username && $_POST["password"] == $password){
                                    $_SESSION["username"] = $username;
                                    $_SESSION["password"] = $password;
                                    ?>
                                    <p>Please wait...</p>
                                    <script>
                                        location.href = "<?php echo $siteurl ?>?admin"
                                    </script>
                                    <?php
                                }
                            }
                            ?>
                            <form method="post">
                                <h1>Please login...</h1>
                                <p>Username:</p>
                                <input name="username">
                                <p>Password:</p>
                                <input name="password" type="password">
                                <input type="submit" value="Login">
                            </form>
                            <?php
                        }
                        
                        ?>
                    </div>
                    <?php
                }else{
                    ?>
                    <div id="drawer">
                        <div class="draweritem" onclick=showpart("order")>Order Now</div>
                        <div class="draweritem" onclick=showpart("about")>About</div>
                    </div>
                    
                    <div id="whole">
                        <div id="appbar">
                            <img src="logo.png" width="256px;">
                        </div>

                        <div style="text-align: center;">
                            <div style="width: 100%; display: inline-block; max-width: 900px; margin: 0 auto;">
                                <div class="page order">
                                    <div class="block">
                                        <h3 align="center" class="nicefont">Contact Details</h3>
                                        <p>Order Number</p>
                                        <input id="ordernumber" value=123456 readonly>
                                        <div style="display: none">
                                            <p>Date</p>
                                            <input id="currentdate" readonly>
                                        </div>
                                        <p>Name</p>
                                        <input id="ordername">
                                        
                                        <p>Phone No</p>
                                        <input type="number" id="orderphone">
                                    </div>
                                    <div class="block">
                                        <h3 align="center" class="nicefont">Choose your Cakes</h3>
                                        <div id="selectedcakes" onclick="showcakechooser()">Click to choose your cakes...</div>
                                        
                                    </div>
                                    <div class="block">
                                        <h3 align="center" class="nicefont">Delivery Type</h3>
                                        <select onchange="deltype()" id="deltype">
                                            <option>Self-Collect</option>
                                            <option>Normal Delivery</option>
                                        </select>
                                        <div id="normaldelivery"  style="display: none;">
                                            <p>Delivery Address</p>
                                            <input id="orderaddress" value="N/A (Self Collect)">
                                            <p>
                                                Lorem Ipsum Dolor
                                            </p>
                                        </div>
                                        <div id="selfcollect">
                                            <p>
                                                Self-collect from:<br>
                                                Lorem Ipsum Dolor<br>
                                
                                            </p>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="block">
                                        <h3 align="center" class="nicefont">Delivery Date</h3>
                                        <input id="datepicker" placeholder="Click to set Delivery Date..." readonly>
                                    </div>
                                    <div class="block">
                                        <h3 align="center" class="nicefont">Delivery Time</h3>
                                        <select id="deliverytime">
                                            <option>2:00pm to 3:00pm</option>
                                            <option>3:00pm to 4:00pm</option>
                                            <option>4:00pm to 5:00pm</option>
                                            <option>5:00pm to 6:00pm</option>
                                            <option>6:00pm to 7:00pm</option>
                                            <option>7:00pm to 8:00pm</option>
                                        </select>
                                    </div>
                                    <div class="block">
                                        <h3 align="center" class="nicefont">Payment Mode</h3>
                                        <p align="center">Cash on Delivery or PayPal</p>
                                    </div>
                                    
                                    <div class="greenblock" onclick="ordernow(0)">
                                        <h3 align="center" class="nicefont">Order Now</h3>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    
                    <div id="cakes">
                        
                        <h3 align="center" class="nicefont">Click each item to choose</h3><p align="center">* prices for per kg</p>
                        <div style="text-align: center;">

                            <div id="cakebuttons"></div>
                            <div class="cakebutton" style="filter: grayscale(0%); background-color: #00cd05; text-align: center; color: white;" onclick="resetChoosenCakes()">
                                <h3 align="center" class="nicefont">Reset</h3>
                            </div>
                            <div class="cakebutton" style="filter: grayscale(0%); background-color: #00cd05; text-align: center; color: white;" onclick="hidecakes()">
                                <h3 align="center" class="nicefont">Continue</h3>
                            </div>
                        </div>
                    </div>
                    <div id="cakesclose" onclick="hidecakes()" style="display: none; position: fixed; top: 0; right: 0; padding: 20px;"><div style="display: inline-block; background-color: #00cd05; cursor: pointer; padding: 10px; border-radius: 20px; font-size: 20px; color: white;"><i class="fa fa-times-circle"></i> Close</div></div>
                    
                    <div id="summary" style="display: none; margin-top: -150px;">
                        <h3 align="center" class="nicefont">Order Summary</h3>
                        <p align="center">Here is a summary of your order:</p>
                        <div id="summarycontent" style="padding: 20px;"></div>
                        <div class="cakebutton" style="background-color: #00cd05; text-align: center; color: white;" onclick="ordernow(1)">
                            <h3 align="center" class="nicefont">Yes, correct!</h3>
                        </div>
                        <div class="cakebutton" style="background-color: rgba(196,153,108,1); text-align: center; color: white;" onclick="editorder()">
                            <h3 align="center" class="nicefont">No, change it!</h3>
                        </div>
                    </div>
                    
                    <div id="cover"></div>
                    
                    <script>
                    
                        function deltype(){
                            var dt = $("#deltype").val()
                            if(dt == "Normal Delivery"){
                                $("#normaldelivery").show()
                                $("#selfcollect").hide()
                                $("#orderaddress").val("")
                            }else{
                                $("#normaldelivery").hide()
                                $("#selfcollect").show()
                                $("#orderaddress").val("N.A. (Self-Collect)")
                            }
                        }
                        
                        
                        function toggledrawer(){
                            $("#drawer").toggle()
                        }
                        
                        function showpart(part){
                            $("#drawer").hide()
                            $(".page").hide()
                            $("." + part).show()
                        }
                        
                        showpart("order")
                        
                        $("#whole").hide()
                        setTimeout(function(){
                            $("#cover").fadeOut()
                            $("#whole").fadeIn()
                            setTimeout(function(){
                                showcakechooser()
                            }, 1000)
                        }, 3000)
                        
                        
                        
                        var today = new Date();
                        var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
                        var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                        var dateTime = date+' '+time;
                        
                        $("#currentdate").val(function(){
                            return dateTime
                        })
                        
                        $("#ordernumber").val(function(){
                            return ( Math.floor(Math.random() * 9000) + 1000 ) + "/" + dateTime
                        })
                        
                        $( function() {
                            $( "#datepicker" ).datepicker({
                                minDate: "+2d"
                            });
                        } );
                        
                        function resetChoosenCakes(){
                            orderdetails = { cakes : [] }
                            for(var i = 0; i < $(".cakebutton").length; i++){
                                $("#pb"+i).css({ "background-color" : "rgba(255,255,255,.5)", "color" : "black", "border" : "2px solid gray", "filter" : "grayscale(10%)", "font-weight" : "normal" })
                                $(".qmark").html("")
                                $(".pbclose").html("")
                            }
                        }
                        
                        function showcakechooser(){
                            $("#cakes").fadeIn()
                            $("#cakesclose").fadeIn()
                            $(".cakescontent").hide()
                        }
                        function hidecakes(){
                            $("#cakes").fadeOut()
                            $("#cakesclose").fadeOut()
                            updateselectedcakes()
                        }
                        
                        //preparing category slots
                        $("#cakebuttons").html(function(){
                            var tmpcontent = ""
                            var newcat = ""
                            for(var i = 0; i < products.length; i++){
                                if(products[i].cat != newcat){
                                    newcat = products[i].cat
                                    tmpcontent += "<div id='" +newcat.replace(" ", "")+ "' class='cakecategory'><div id='cakescontent"+newcat.replace(" ", "")+"' class='cakescontent'></div></div>"
                                }
                            }
                            return tmpcontent
                        })
                        
                        //filling category slots
                        var newcat = "";
                        for(var i = 0; i < products.length; i++){
                            if(products[i].cat != newcat){
                                newcat = products[i].cat
                                $("#" + newcat.replace(" ", "")).prepend("<h1 style='margin: 15px; cusor: pointer;' onclick=expandCakes(\'"+newcat.replace(" ", "")+"\')>"+newcat+"</h1>")
                            }
                            if(products[i].cat == newcat){
                                $("#cakescontent"+newcat.replace(" ", "")).append("<div class='cakebutton' id='pb" +i+ "'><div id='pbq" + i + "' class='qmark'></div><div id='pbclose" + i + "' class='pbclose'></div><div><span><i class='fa fa-check'></i> </span>" + products[i].name + " - " + products[i].price + "</div><div style='margin-top: 15px;' onclick='addThisCake("+i+")'><img src='c-" +products[i].image+ ".jpg' width='100%'></div></div>")
                            }
                            
                        }
                        
                        
                        function expandCakes(id){
                            $("#cakescontent"+id).toggle()
                        }
                        
                        
                        var orderdetails = {
                            cakes : []
                        }
                        
                        
                        function addThisCake(n){
                            if(orderdetails.cakes.length > 0){
                                for(var i = 0; i < orderdetails.cakes.length; i++){
                                    if(orderdetails.cakes[i].id == n){
                                        orderdetails.cakes[i].q ++
                                        markAsAdded(n)
                                        return
                                    }
                                }
                            }
                            orderdetails.cakes.push({ id : n, q : 1})
                            markAsAdded(n)
                        }
                        
                        function removeThisCake(n){
                            if(orderdetails.cakes.length > 0){
                                for(var i = 0; i < orderdetails.cakes.length; i++){
                                    if(orderdetails.cakes[i].id == n){
                                        orderdetails.cakes[i].q --
                                        if(orderdetails.cakes[i].q == 0){
                                            orderdetails.cakes.splice(i,1)
                                        }
                                        markAsAdded(n)
                                    }
                                }
                            }
                        }
                        
                        function markAsAdded(n){
                            var currentq
                            for(var i = 0; i < orderdetails.cakes.length; i++){
                                if(orderdetails.cakes[i].id == n)
                                    currentq = orderdetails.cakes[i].q
                            }
                            if(currentq > 0){
                                $("#pb" + n).css({ "background-color" : "white", "color" : "#00cd05", "border" : "2px solid #00cd05", "filter" : "grayscale(0%)", "font-weight" : "bold" })
                                $("#pbq" + n).html("<div class='qtyholder'>x" + currentq + "</div>")
                                $("#pbclose" + n).html("<div style='padding: 10px;' onclick=removeThisCake("+n+")><i class='fa fa-minus-circle' style='color: red;'></i></div>")
                            }else{
                                $("#pb" + n).css({ "background-color" : "rgba(255,255,255,.5)", "color" : "black", "border" : "2px solid gray", "filter" : "grayscale(10%)", "font-weight" : "normal" })
                                $("#pbq" + n).html("")
                                $("#pbclose" + n).html("")
                            }
                        }
                        
                        
                        
                        function updateselectedcakes(){
                            var oi = ""
                            var ttl = 0
                            if(orderdetails.cakes.length > 0){
                                for(var i = 0; i < orderdetails.cakes.length; i++){
                                    oi += "-> " + products[orderdetails.cakes[i].id].name + " - " + products[orderdetails.cakes[i].id].price + " x" + orderdetails.cakes[i].q + "<br>"
                                    ttl += products[orderdetails.cakes[i].id].pricevalue * orderdetails.cakes[i].q
                                }
                                $("#selectedcakes").html("<p>Your selected cakes:</p><p>" + oi + "</p><p>Total = $"+ttl+" (approx.)</p><p>Click here again to modify it.</p>")
                            }else{
                                $("#selectedcakes").html("Click to choose your cakes...")
                            }
                                
                        }
                        
                        function ordernow(orderstatus){
                            var ordernumber = $("#ordernumber").val()
                            var orderdate = $("#currentdate").val()
                            var ordername = $("#ordername").val().replace("#", "")
                            var orderaddress = $("#orderaddress").val().replace("#", "")
                            var orderphone = $("#orderphone").val()
                            var deliverydate = $("#datepicker").val()
                            var deliverytime = $("#deliverytime").val()
                            
                            //check if all input are filled
                            var notcomplete = false
                            for(var i = 0; i < $("input").length; i++){
                                if($("input").eq(i).val() == "")
                                    notcomplete = true
                            }
                            if(notcomplete)
                                alert("Please fill all the form fields.")
                            else{
                                
                                if(orderphone.length < 8 || orderphone.length > 10){
                                    alert("Please enter a valid phone number.")
                                }else{
                                    var oi = "";
                                    var ois = "";
                                    var ttl = 0
                                    if(orderdetails.cakes.length > 0){
                                        for(var i = 0; i < orderdetails.cakes.length; i++){
                                            oi += "-> " + products[orderdetails.cakes[i].id].name + " - " + products[orderdetails.cakes[i].id].price + " x" + orderdetails.cakes[i].q + "\n"
                                            ois += "-> " + products[orderdetails.cakes[i].id].name + " - " + products[orderdetails.cakes[i].id].price + " x" + orderdetails.cakes[i].q + "<br>"
                                            ttl += products[orderdetails.cakes[i].id].pricevalue * orderdetails.cakes[i].q
                                        }
                                        
                                        var ordermessage = "Hello Pretty Bakes, we would like to order these products:\n\nOrder number: " + ordernumber + "\nName: " + ordername + "\nAddress: " + orderaddress + "\nPhone: " + orderphone + "\nDelivery date: " + deliverydate + "\nDelivery Time: " + deliverytime + "\nOrdered Items:\n" + oi + "Total = $" + ttl + " (approx.)"
                                        var ordersummary =  "Name: " + ordername + "<br>Address: " + orderaddress + "<br>Phone: " + orderphone + "<br>Delivery date: " + deliverydate + "<br>Delivery Time: " + deliverytime + "<br>Ordered Items:\n" + ois + "Total = $" + ttl + " (approx.)"
                                        
                                        if(orderstatus == 0){
                                            summary(ordersummary.replace("\n", "<br>"))
                                        }else{
                                            $("#cover").fadeIn()
                                        
                                            //post to php
                                            $.post( "<?php echo $siteurl ?>", { 
                                                submitorder: "yes!", 
                                                ordernumber : ordernumber,
                                                ordername : ordername,
                                                orderaddress : orderaddress,
                                                orderphone : orderphone,
                                                deliverydate : deliverydate,
                                                deliverytime : deliverytime,
                                                cakes : oi,
                                            }).done(function( data ) {
                                                console.log("Response: " + data)
                                                //send wa
                                                var omuri = encodeURI(ordermessage)
                                                location.href = "https://wa.me/<?php echo $mobilenumber ?>?text=" + omuri
                                            });
                                        }
                                        
                                    }
                                    else{
                                        alert("You did not choose any cake yet.")
                                        
                                    }
                                }
                                
                            }
                            
                            function summary(s){
                            
                                $("#whole").slideUp()
                                $("#summary").fadeIn()
                                $("#summarycontent").html(s)
                            }
                            
                        }
                        
                        function editorder(){
                            $("#whole").slideDown()
                            $("#summary").fadeOut()
                            showcakechooser()
                        }
                        
                        //alert("This website is under maintenance. Please come back again later.")
                        
                        
                        //appending cakes gallery to the customised cakes
                        var data1 = ""
                        for(var i = 0; i < 3; i++){ // 3 because by default I have 3 custom designed cake examples
                            data1 += "<div style='margin: 5px; display: inline-block;'><a href='pastdesigns1/"+(i+1)+".jpg' target='_blank'><img src='pastdesigns1/"+(i+1)+".jpg' width='64px' style='border-radius: 3px;'/></a></div>"
                        }
                        var data2 = ""
                        for(var i = 0; i < 3; i++){ // 3 because by default I have 3 custom designed cake examples
                            data2 += "<div style='margin: 5px; display: inline-block; vertical-align: top; max-height: 64px;'><a href='pastdesigns2/"+(i+1)+".jpg' target='_blank'><img src='pastdesigns2/"+(i+1)+".jpg' width='64px' style='border-radius: 3px; ' /></a></div>"
                        }
                        $("#cakescontentCustomisedCake").append("<div style='margin-bottom: 30px;'><h3 style='margin-top: 15px;'>Examples 1</h3><div>" + data1 + "</div><h3 style='margin-top: 15px;'>Examples 2</h3><div>"+data2+"</div></div>")
                        
                        
                        
                    </script>
                    <?php
                }
                
                ?>
                
                
            </body>
        </html>
        <?php
    }
//}
?>

