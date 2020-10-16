<?php

//Component for Cards

function card($ngo_id, $name, $about, $image)
{
    $element = '<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="business" value="sb-skvsj3413110@business.example.com">
                    <div class="card text-center mt-3">
                        <img class="card-img-top mx-auto pt-3 card-img" src="' . $image . '" alt="card-img">
                        <div class="card-body">
                            <h4 class="card-title pt-3">' . $name . '</h4>
                            <p class="card-text pt-2">' . $about . '</p>
                            <input type="hidden" name="item_name" value="' . $name . '">
                            <input type="hidden" name="item_number" value="' . $ngo_id . '">
                            <input type="number" class="mt-2 form-control" name="amount">
                            <input type="hidden" name="no_shipping" value="0">
                            <input type="hidden" name="no_note" value="1">
                            <input type="hidden" name="current_code" value="USD">
                            <input type="hidden" name="1c" value="AU">
                            <input type="hidden" name="rm" value="2">
        <input type="hidden" name="notify_url" value="http://localhost/my%20projects/donation/success2.php">
        <input type="hidden" name="return" value="http://localhost/my%20projects/donation/success2.php">
        <input type="hidden" name="cancel" value="http://localhost/my%20projects/donation/cancel.php">
        <input type="submit" class="btn btn-outline-danger mt-3 form-control" name="pay" value="Donate">
                        </div>
                     </div></form>';

    echo $element;
}
