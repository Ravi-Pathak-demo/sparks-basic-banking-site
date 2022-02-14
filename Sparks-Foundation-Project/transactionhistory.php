

 <?php
  include 'nav.php';
?> 
<div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto" id="navbar_left">
        <li class="nav-item active">
          <a class="nav-link" href="./index.html">Home Page<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transactionhistory.php">Transaction History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transfer_money.php">Transfer Money</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.thesparksfoundationsingapore.org/" target="_blank">About TSF</a>
        </li>
      </ul>
    </div>

	<div class="container">
        <h2 class="text-center pt-4">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>

<?php include('footer.php'); ?>

</body>
</html>