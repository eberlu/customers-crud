<?php

function formatDate($timestamp)
{
    return date("d/m/Y h:m", strtotime($timestamp));
}