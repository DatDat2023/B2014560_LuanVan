

<?php


$conn = mysqli_connect("localhost","root","","tdbook");
mysqli_set_charset($conn, 'UTF8');


if($conn){
$user_messages = mysqli_real_escape_string($conn, $_POST['messageValue']);// tra v

$query = "SELECT * FROM chatbot WHERE messages LIKE '%$user_messages%'";
$runQuery = mysqli_query($conn, $query);

if(mysqli_num_rows($runQuery) > 0){
    // fetch result
    $result = mysqli_fetch_assoc($runQuery);
    // echo result
    echo $result['response'];
}else{
    echo "TDBook xin chào!!!
    Quý khách muốn biết về câu hỏi khác vui lòng chọn liên hệ và đặt câu, TDBook sẽ trả lời bạn trong vòng 15 phút!! ";
}
}else{
    echo "connection Failed " . mysqli_connect_errno();
}
?>