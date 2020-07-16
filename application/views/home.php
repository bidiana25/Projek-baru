<h1> HALO PEMIRSA </h1>
    <br />
    <?php echo $this->session->userdata('nama') ?>

    <label>Role</label>
    <br /><?php echo ucwords($this->session->userdata('role')) ?>

<?php
// Cek role user
if($this->session->userdata('role') == 'bendahara'){ // Jika role-nya admin
    ?>
   <h1> Ini Bendahara </h1>
    <?php
}else{ // Jika role-nya operator
    ?>
  </h1> Ini yayasan </h1>
    <?php
}
?>
