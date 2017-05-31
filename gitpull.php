<?php

// This file is used to auto-update the project on a live server when a git-push is initiated
// Resource used:
//     https://code.tutsplus.com/tutorials/the-perfect-workflow-with-git-github-and-ssh--net-19564

echo shell_exec("/usr/bin/git pull 2>&1");

?>