<?php

/*
 *  Copyright © All Rights Reserved by Vizrex (Private) Limited 
 *  Usage or redistribution of this code is strictly prohibited
 *  without written consent of Vizrex (Private) Limited.
 *  Queries are welcomed at copyright@vizrex.com
 */

/**
 * Description of PathHelper
 *
 * @author Zeshan
 */

function merge_url($urlA, $urlB)
{
    /*
     * Improve this function to detect trailing slashes
     * and apply other necessary checks
     */
    
    return $urlA.'/'.$urlB;
}