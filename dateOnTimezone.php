<?php

function dateOnTimezone($timestamp)
{
    return date("d/m/Y h:m", strtotime($timestamp));
}