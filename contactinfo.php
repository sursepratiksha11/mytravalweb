 <?php
//   $Fullname=$_POST['fullname'];
//   $Email=$_POST['email'];
//   $Messages=$_POST['messages'];

//   if(!empty($Fullname)|| !empty($Email)||!empty($Messages)){
//       $host="localhost";
//       $dbUsername="root";
//       $dbPassword="";
//       $dbname="contact";

//       $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

//       if(mysqli_connect_error()){
//           die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
//       }
//       else{
//           $SELECT="SELECT email From contact info Where email = ? Limit 1";
//           $INSERT="INSERT Into contact info (fullname ,email,messages) values(?,?,?)";

//           $stmt=$conn->prepare($SELECT);
//           $stmt->bind_param('s'. $Email);
//           $stmt->execute();
//           $stmt->bind_result($Email);
//        //$stmt->store_result();
//           $rnum=$stmt->num_rows;

//           if($rnum==0){
//               $stmt->close();

//               $stmt=$conn->prepare($INSERT);
//               $stmt->bind_param('s ,s ,s',$Fullname,$Email,$Messages);
//               $stmt->execute();
//               echo "New record inserted sucessfully";
            
//           }
//           else{
//               echo "Someone Already checkout using this email";
//           }
//           $stmt->close();
//           $conn->close();
//       }
//   }
//       else{
//           echo "All field are required";
//           die();
//       }  -->
     
 $conn=mysqli_connect('localhost','root');

 if($conn){
     echo "connection is eastablish";
 }
 else{
     echo "error connection failed";
 }

 mysqli_select_db($conn,'contact');

 $Fullname=$_POST['fullname'];
 $Email=$_POST['email'];
  $Messages=$_POST['messages'];
 
  $data="INSERT INTO contactinfo (fullname , email , messages) VALUES ('$Fullname' ,'$Email' ,'$Messages')";

  mysqli_query($conn, $data);
  header('location:p.php');

 ?>