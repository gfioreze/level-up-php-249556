<style>
	.coin {
		background: #999999;
		color: #333333;
		border-radius: 50%;
		padding: 50px;
		text-align: center;
		font-size: 2rem;
		font-weight: bold;
		width: 50px;
	}
</style>

<?php

function flip(): string
{
	// Challenge: define this function
	$number = rand(0, 1);
	if ($number == 0) {
		return "Heads";
	} else {
		return "Tails";
	}
}

?>

<div class="coin">
	<?php echo flip(); ?>
</div>