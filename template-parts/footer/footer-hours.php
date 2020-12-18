<?php
/**
 * Displays the footer opening hours
 * 
 * @package StuCowley
 * @subpackage bellezashop
 * @since 1.0.0
 */

$regularDays  = 'Monday - Wednesday';
$regularHours = '09:00am - 05:00pm';

$lateDays = 'Thursday';
$lateHours = '10:00am - 08:00pm';

$earlyDays = 'Friday';
$earlyHours = '09:00am - 04:00pm';

$weekendDays = 'Saturday';
$weekendHours = '09:00am - 12:00pm';

$closedDays = 'Sunday &plus; Public Holidays';
?>

<div>
  <div class="sc-footer-opening-hours">
    <ul>
      <li><?php echo $regularDays; ?></li>
      <li><?php echo $regularHours; ?></li>
    </ul>

    <ul>
      <li><?php echo $lateDays; ?></li>
      <li><?php echo $lateHours; ?></li>
    </ul>

    <ul>
      <li><?php echo $earlyDays; ?></li>
      <li><?php echo $earlyHours; ?></li>
    </ul>

    <ul>
      <li><?php echo $weekendDays; ?></li>
      <li><?php echo $weekendHours; ?></li>
    </ul>

    <ul>
      <li><?php echo $closedDays; ?></li>
      <li>CLOSED</li>
    </ul>
  </div><!-- /.sc-footer-opening-hours -->
</div>
