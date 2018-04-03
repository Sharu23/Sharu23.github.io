<?php include 'header.php';?>

<?php
	//include 'application/config/database.php';

	$tbl_name="multiple_choice_quiz";
	$adjacents = 3;

	$db = mysqli_connect("localhost","root","sharugi23","quiz");

	$query = "SELECT COUNT(*) as num FROM $tbl_name";
	$result = mysqli_query($db,$query);
	$total_pages = mysqli_fetch_array($result,MYSQLI_BOTH);
	$total_pages = $total_pages['num'];

	$targetpage = "QuizQuestionTEST.php";
	$limit = 1;

	if(!isset($_GET['page']) || empty($_GET['page']))
	{
		$_GET['page'] ="";

	}
	$page = $_GET['page'];
	if($page)
	{
		$start = ($page - 1) * $limit;
	}
	else
	{
		$start = 0;
	}
	$sql = "SELECT Question FROM $tbl_name LIMIT $start, $limit";
	$result = mysqli_query($db,$sql);

	if ($page == 0)
	{
		 $page = 1;
	}
	$prev = $page - 1;
	$next = $page + 1;
	$lastpage = ceil($total_pages/$limit);
	$lpm1 = $lastpage - 1;

	$pagination = "";
	if($lastpage > 1)
	{
		$pagination .= "<div class=\"pagination\">";

		if($page > 1)
		{
			$pagination .= "<a href=\"$targetpage?page=$prev\">previous</a>";
		}
		else
		{
			$pagination .= "<span class=\"disabled\">previous</span>";
		}


		if ($lastpage < 7 + ($adjacents * 2))
		{
			for($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
				{
					$pagination .= "<span class=\"current\">$counter</span>";
				}
				else
				{
						$pagination .= "<a href=\"$targetpage?page=$counter\">$counter</a>";
				}
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))
		{
			if($page < 1 + ($adjacents * 2))
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
					{
						$pagination.= "<span class=\"current\">$counter</span>";
					}
					else
					{
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";
					}
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";
			}
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
					{
						$pagination.= "<span class=\"current\">$counter</span>";
					}
					else
					{
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";
					}
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";
			}
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
					{
						$pagination.= "<span class=\"current\">$counter</span>";
					}
					else
					{
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";
					}
				}
			}
		}
			if ($page < $counter - 1)
			{
				$pagination.= "<a href=\"$targetpage?page=$next\">next</a>";
			}
			else
			{
				$pagination.= "<span class=\"disabled\">next</span>";
			}
			$pagination.= "</div>\n";
		}
	?>

		<?php


		for ($x = 0; $x <=$limit-1; $x++)
		{
			$test = "SELECT * FROM $tbl_name";
			$result = mysqli_query($db,$test);
			$row = mysqli_fetch_array($result,MYSQLI_BOTH);

			$ans_array = array($row['choice1'], $row['choice2'], $row['choice3'], $row['CorrectAnswer']);
			shuffle($ans_array);

			include 'Question_display.php';

			$x = $counter;
		}
		?>

	<?=$pagination?>

	<?php include 'footer.php';?>
