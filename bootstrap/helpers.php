<?php

function respond($status, $respond)
{
    return response()->json(['status' => $status, is_string($respond) ? 'message' : 'data' => $respond]);
}

function succeed($respond = 'Request success!')
{
    return respond(true, $respond);
}

function failed($respond = 'Request failed!')
{
    return respond(false, $respond);
}