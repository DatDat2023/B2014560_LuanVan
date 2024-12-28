<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Chating Bot</title>
    <link rel="stylesheet" href="css/chatbot.css">
</head>
<body>
    <div id="container">
        <div id="dot1"> 
            
        </div>
        <div id="dot2">
       
        </div>
        <div id="screen">
            <div id="header">ONLINE CHAT</div>
            <div id="messageDisplaySection">
                <!-- bot messages -->
                <!-- <div class="chat botMessages">Hello there, how can I help you?</div> -->

                <!-- usersMessages -->
                <!-- <div id="messagesContainer">
                <div class="chat usersMessages">I need your help to build a website.</div>
            </div> -->
        </div>
            <!-- messages input field -->
            <div id="userInput">
                <input type="text" name="messages" id="messages" autocomplete="OFF" placeholder="Nhập tại đây" required>
                <input type="submit" value="Send" id="send" name="send">
            </div>
        </div>
        
    </div>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <!-- Jquery Start -->
    <script>
        $(document).ready(function(){
            $("#messages").on("keyup",function(){

                if($("#messages").val()){
                    $("#send").css("display","block");
                }else{
                    $("#send").css("display","none");
                }
            });
        });
        // 
        $("#send").on("click",function(e){
            $userMessage = $("#messages").val();
            $appendUserMessage = '<div  class="chat usersMessages">  <img src="./img/blog/img-avata.png" alt="image" class="col-md-3 col-sm-3 float-right img-avata mediaImg" style="width:30px;">'+  $userMessage +'</div>';
            $("#messageDisplaySection").append($appendUserMessage);

            // sử dụng ajax 
            $.ajax({
                url: "bot.php",
                type: "POST",
                // sending data
                data: {messageValue: $userMessage},
                // response text
                success: function(data){
                    // show response
                    $appendBotResponse = '<div id="messagesContainer"><div class="chat botMessages">'+data+'</div></div>';
                    $("#messageDisplaySection").append($appendBotResponse);
                }
            });
            $("#messages").val("");
            $("#send").css("display","none");
        });
    </script>
</body>
</html>