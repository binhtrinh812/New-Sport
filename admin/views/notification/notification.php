<?php

if (!empty($_SESSION['notification'])) {
    if ($_SESSION['notification'] == 1) {
?>
        <div class="alert alert-success">
            Add success
        </div>
<?php
    } else if ($_SESSION['notification'] == 2) {
?>
        <div class="alert alert-success">
            Delete success
        </div>
<?php
    } else if ($_SESSION['notification'] == 3) {
?>
        <div class="alert alert-success">
            Update success
        </div>
<?php
    } else if ($_SESSION['notification'] == 4) {
?>
        <div class="alert alert-success">
            Retype Password !
        </div>
<?php
    }

    unset($_SESSION['notification']);
}