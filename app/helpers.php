<?php
/**
 * Created by IntelliJ IDEA.
 * User: Mattsmith
 * Date: 1/18/15
 * Time: 11:29 PM
 */

function  set_active($path, $active = 'active') {

    return Request::is($path) ? $active : '';
}