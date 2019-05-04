<?php
function free($con)
{
	$thread = mysqli_thread_id($con);
	mysqli_kill($con, $thread);
}