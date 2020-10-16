<?php
print_r($_POST);
echo '<div class="alert alert-danger">' . $_POST['txn_id'] . ' payer ID <br> ' . $_POST['payer_id'] . ' and Email <br> ' . $_POST['payer_email'] . ' and Payment <br> ' . $_POST['mc_gross'] . '</div>';
