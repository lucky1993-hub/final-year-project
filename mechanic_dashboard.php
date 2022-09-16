<?php
session_start();
$con = mysqli_connect("localhost","root","","fleet");

?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title>autoMan</title>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel ="stylesheet" href="css/dashboard.css"> 
</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class=""></span>autoMan</h2>
        </div>
        
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-users"></span>
                    <span>Customer</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-wrench"></span>
                    <span>Mechanic</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-warehouse"></span>
                    <span>Garages</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-store"></span>
                    <span>Shops</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-book"></span>
                    <span>Appointment</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user-circle"></span>
                    <span>Account</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span>
                    <span>Tasks</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-shopping-bag"></span>
                    <span>Orders</span></a>
                </li>

             </ul>
        </div>

 
</div>
<div class="main-content">
  <header>
     <h2>    
       <label for="nav-toggle">
             <span class="las la-bars"></span>

        </label>

        Dashboard
    
    </h2>
    <div class="search-wrapper">
        <span class="las la-search"></span>
        <input type="search" placeholder="Search here"/>
    </div>

      <div class="user-wrapper">
      <span class="las la-bell"></span>
          <img src="images/customers-icon-ico-11569045710h8ovyma84h.png" alt="" width="30px" height="30px">
          <div>
              <h4>Nimal Perera</h4>
              <small>Super Admin</small>
              
          </div>
          
      </div>
      

     
  </header>
  <main>
      <div class="cards">
          <div class="card-single">
              <div>
                  <h1>54</h1>
                  <span>Customer</span>

              </div>
              <div>
                  <span class="las la-users"></span>
              </div>
          </div>
          <div class="card-single">
              <div>
                  <h1>79</h1>
                  <span>Vehicles</span>

              </div>
              <div>
                  <span class="las la-car"></span>
              </div>
          </div>
          <div class="card-single">
              <div>
                  <h1>63</h1>
                  <span>Income</span>

              </div>
              <div>
                  <span class="las la-money-bill"></span>
              </div>
          </div>
          <div class="card-single">
              <div>
                  <h1>153</h1>
                  <span>Appointments</span>

              </div>
              <div>
                  <span class="las la-book"></span>
              </div>
          </div>

      </div>

    <div class="recent-grid">
        <div class="mechanic">
            <div class="card">
              <div class="card-header">
                <h3> Recent Appointment</h3>

                <button>See all <span class="las la-arrow-right">
                </span></button>
               
               </div> 
               <div class="card-body">
                       <div class="table-responsive">
                       <?php
                    $sql = "SELECT a_id,user.user_name,vehicles.v_name,a_type,status FROM ((appointment INNER JOIN user ON appointment.cus_id = user.user_id)INNER JOIN vehicles ON appointment.v_id = vehicles.v_id)";
                    $result = $con->query($sql);
                    if($result->num_rows>0){
                    echo"
                   <table width='100%'>
                       <thead>
                           <tr>
                               <td>Id</td>
                               <td>Customer Name</td>
                               <td>Vehicle</td>
                               <td>Type</td>
                               <td><span class='status'>Status</span></td>
                               
                           </tr>
                       </thead>
                       <tbody>";
                         
                             

                                  while($row = $result->fetch_assoc()){
                                      //$t_id    = 
                                      //$d_name = $row['d_name'];
                                      //$d_address =  $row['d_address'];

                          echo"
                           <tr>
                           
                               <td>".$row["a_id"]."</td>
                               <td>".$row["user_name"]."</td>
                               <td>".$row["v_name"]."</td>
                               <td>".$row["a_type"]."</td>";
                               
                               if ($row["status"]=="Pending"){
                                echo "<td><span class='status purple'></span> ".$row["status"]."</td>";
                            } else if ($row["status"]=="Accepted"){

                                echo "<td><span class='status blue'></span> ".$row["status"]."</td>";
                            }else if ($row["status"]=="Rejected"){
                                echo "<td><span class='status red'></span> ".$row["status"]."</td>";
                            }else {
                                echo "<td><span class='status green'></span> ".$row["status"]."</td>";
                            }  
                             
                               
                           echo "</tr>";
                           
                        }
				
		
                      echo "</tbody>

                   </table>";
                    }
                    ?>
               
                       </div>
               
               </div>
            </div>
        </div>


       

    </div>

</main>

</div>
</body>
</html>