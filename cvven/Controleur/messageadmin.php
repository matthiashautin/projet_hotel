<?php 
    if(isset($_SESSION['message'])){
?>
<div class="alert alert-info text-center">
    <?php echo $_SESSION['message']; ?>
</div>
<?php
    unset($_SESSION['message']);
    }
?>