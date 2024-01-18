<?php include "header.php" ;
//written to prevent direct access
if($role!=0) {
  header("loaction:../404.php");
}
// written for collecting user data from database
if (isset($_SESSION['u_data'])) {
   $user= $_SESSION['u_data'];
}

?>
<div class="container mt-5 mb-2">
  <div class="row m-2">
    <div class="col-md-7 m-auto emp_profile p-4 border border-secondary">
      <p class="text-center bg-white p-3"> <span class="emp_name"><?= ucwords($user['0'])?></span>
        <br> <span>(<?= ucwords($user['1'])?></span> <span><?= ucwords($user['2'])?>)</span> </p>
      <div class="bg-white p-3">
        <form action="" method="POST">
          <label><strong>Daily Work</strong></label>
          <input type="date" name="work_date" class="form-control" required>
          <button name="report_btn" class="btn btn-primary mt-2">Report Generate</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include "footer.php" ?>