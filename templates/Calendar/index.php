<style>
    table {
        border:1px solid #050;
    }

    .fontb {
        color:white;
        background:blue;
    }
    

    th {
        width:80px;
    }

    td,th {
        height:80px;
        text-align:center;
        
    }
    form {
        margin:0px;
        padding:0px;
    }
</style>
<?php
    include "calendar.php";

    $calendar=new Calendar;

    $calendar->out();