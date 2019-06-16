<?php
include 'includes/header.php';
?>
<div id="wrapper">
<main id="services">
<h1>Fees and Scheduling</h1>

<img src="images/money-desktop.png" alt="money" id="money" class="desktop">
        <img src="images/money-phone.png" alt="money" id="money" class="phone">

<h3>Rates</h3>
<p>$100 per 45-minute session</p>
<p>$140 per 60-minute session</p>
<p>$180 per per initial session (75 minutes)</p>
<h3>Insurance</h3>
<p>I am an In-Network provider (Preferred Provider) for the following health insurance plans:
</p>
<ul>
    <li>Blue Cross/Blue Shield</li>
    <li>First Choice Health Network</li>
    <li>Group Health (PPO)</li>
    <li>Lifewise</li>
    <li>Premera Blue Cross</li>
    <li>Regence Blue Shield</li>
    <li>Uniform Medical Plan</li>
    </ul>
<p>
    I am an Out-of-Network provider and will bill on your behalf the following health insurance plans:
</p>
<ul>
    <li>Aenta</li>
    <li>Cigna</li>
    <li>Optum</li>
    <li>United Behavioral Health</li>
    <li>United Healthcare</li>

</ul>

<div id="docs">
<h3>Print Forms</h3>
<ul>
<li><a href="pdf/registration.pdf" target="blank">Patient Registration Form</a></li>
<li><a href="pdf/privacy.pdf" target="blank">Notice of Privacy Practices</a></li>
<li><a href="pdf/cancellation.pdf" target="blank">No Show, Late Cancellation and Co-payment Policy</a></li>
</ul>
</div>


    </main>
    <div id="intro">
        <h1>Request a Free 20 Minute First Meeting</h1>
    <?php
    include 'includes/simple-schedule.php';
    ?>
    <p class="clear-recaptcha"></p>
</div>
<?php
include 'includes/footer.php';
?>
<script>
$(".home").attr('class', 'scheduling');
</script>