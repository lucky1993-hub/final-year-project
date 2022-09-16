<?php
session_start();
$con = mysqli_connect("localhost","root","","fleet");

?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <title>autoMan</title>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel ="stylesheet" href="css/dashboard.css">
</head>
<body>
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
       <label for="">
             <span class="las la-bars"></span>

        </label>

        Dashboard
    
    </h2>
    <div class="search-wrapper">
        <span class="las la-search"></span>
        <input type="search" placeholder="Search here"/>
    </div>

      <div class="user-wrapper">
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
                  <span>Mechanic</span>

              </div>
              <div>
                  <span class="las la-wrench"></span>
              </div>
          </div>
          <div class="card-single">
              <div>
                  <h1>63</h1>
                  <span>Garages</span>

              </div>
              <div>
                  <span class="las la-warehouse"></span>
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
                <h3> Recent Mechanic</h3>

                <button>See all <span class="las la-arrow-right">
                </span></button>
               
               </div> 
               <div class="card-body">
               <?php
                    $sql = "SELECT *  FROM drivers";
                    $result = $con->query($sql);
                    if($result->num_rows>0){
                    echo"
                   <table width='100%'>
                       <thead>
                           <tr>
                               <td>Id</td>
                               <td>Mechanic Name</td>
                               <td>Address</td>
                               <td>Status</td>
                           </tr>
                       </thead>
                       <tbody>";
                         
                             

                                  while($row = $result->fetch_assoc()){
                                      //$t_id    = 
                                      //$d_name = $row['d_name'];
                                      //$d_address =  $row['d_address'];

                          echo"
                           <tr>
                           
                               <td>".$row["d_id"]."</td>
                               <td>".$row["d_name"]."</td>
                               <td>".$row["d_address"]."</td>
                               
                               <td>
                               <span class='status'>";
                               if ($row["d_is_active"]==1){
                                echo "<span class='fw-500  bg-success'>Active</span>";
                            } else{

                                echo "<span class='fw-500  bg-danger'>Inactive</span>";
                            }
													
														
                               echo "<span></td>
                               

                              
                                 
                                   
                               
                           </tr>";
                           
                        }
				
		
                      echo "</tbody>

                   </table>";
                    }
                    ?>
               
            </div>
            </div>
        </div>

        <div class="customers">
        <div class="card">
            <div class="card-header">
                <h3> Recent Mechanic</h3>

                <button>See all <span class="las la-arrow-right">
                </span></button>
               
               </div> 
               <div class="card-body">
               <?php
                    $sql = "SELECT *  FROM drivers";
                    $result = $con->query($sql);
                    if($result->num_rows>0){
                    echo"
                   <table width='100%'>
                       <thead>
                           <tr>
                               <td>Id</td>
                               <td>Mechanic Name</td>
                               <td>Address</td>
                               <td>Status</td>
                           </tr>
                       </thead>
                       <tbody>";
                         
                             

                                  while($row = $result->fetch_assoc()){
                                      //$t_id    = 
                                      //$d_name = $row['d_name'];
                                      //$d_address =  $row['d_address'];

                          echo"
                           <tr>
                           
                               <td>".$row["d_id"]."</td>
                               <td>".$row["d_name"]."</td>
                               <td>".$row["d_address"]."</td>
                               
                               <td>
                               <span class='status'>";
                               if ($row["d_is_active"]==1){
                                echo "<span class='fw-500  bg-success'>Active</span>";
                            } else{

                                echo "<span class='fw-500  bg-danger'>Inactive</span>";
                            }
													
														
                               echo "<span></td>
                               

                              
                                 
                                   
                               
                           </tr>";
                           
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