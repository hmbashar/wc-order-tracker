<?php 
 // Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;
get_header();
?>


		<?php 
		
	$order = wc_get_order( 783 );
echo $order->get_status();


		?>


	<div class="alishop-tracking-container">
		<div class="alishop-tracking">

			<div class="alishop-tracking-title">
				<h2>Project Tracker</h2>
			</div>

			<div class="alishop-tracking-porgressbar">
				<div class="alishop-tracking-progress" style="width: 50%;"></div>
			</div>

			<div class="alishop-tracking-list">
				<table>
					<tr>
						<td>Project ID:</td>
						<td>1234567</td>
					</tr>
					<tr>
						<td>Project name:</td>
						<td>Web Content Management Integration </td>
					</tr>
					<tr>
						<td>Project notes:</td>
						<td>New process to be included</td>
					</tr>
					<tr>
						<td>Customer Notes:</td>
						<td>Ytrds</td>
					</tr>
					<tr>
						<td>Deadline:</td>
						<td>2016-08-17</td>
					</tr>
					<tr>
						<td>Start Date:</td>
						<td>2016-08-01</td>
					</tr>
					<tr>
						<td>Budget</td>
						<td>$60,000</td>
					</tr>
					<tr>
						<td>Implementation</td>
						<td>2016-11-01 10:07:35</td>
					</tr>
					<tr>
						<td>Project ID:</td>
						<td>1234567</td>
					</tr>
					<tr>
						<td>Project name:</td>
						<td>Web Content Management Integration </td>
					</tr>
					<tr>
						<td>Project notes:</td>
						<td>New process to be included</td>
					</tr>
					<tr>
						<td>Customer Notes:</td>
						<td>Ytrds</td>
					</tr>
					<tr>
						<td>Deadline:</td>
						<td>2016-08-17</td>
					</tr>
					<tr>
						<td>Start Date:</td>
						<td>2016-08-01</td>
					</tr>
					<tr>
						<td>Budget</td>
						<td>$60,000</td>
					</tr>
					<tr>
						<td>Implementation</td>
						<td>2016-11-01 10:07:35</td>
					</tr>
				</table>
			</div>
			<div class="alishop-tracking-from">
				<form>
					<label for="fname">Product ID:</label>
					<input type="text" id="fname" name="fname" placeholder="Product ID..."> 
					<input type="submit" value="Track Project">
				</form>
			</div>
		</div>
	</div>


<?php get_footer();