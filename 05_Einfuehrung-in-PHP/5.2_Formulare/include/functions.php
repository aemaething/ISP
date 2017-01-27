<?php

/**
 * Handles highlighting of navigation elements.
 * Supports li-nodes and also screenreader settings.
 *
 * @param string $active    Name of active nav-element
 * @param string $elem      Name of nav-element to check
 * @param string $mode      Mode of operation
 * @return string           Appropriate response to current mode
 */
function isActiveNavigation(string $active, string $elem, string $mode) : string
{
    switch ($mode) {
        case "list":
            return $elem === $active ? "active" : "";
        case "screenreader":
            return $elem === $active ? ' <span class="sr-only">(current)</span>' : '';
        default:
            return "";
    }
}