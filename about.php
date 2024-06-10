<!-- /about.php -->
<?php include 'includes/header.php'; ?>
<main>
    <h1>About Radisson Blu</h1>
    <p>Welcome to Radisson Blu, where luxury meets impeccable service. We take pride in offering our guests a unique blend of comfort, style, and personalized hospitality. Our dedicated team ensures that your stay with us is nothing short of exceptional.</p>
    
    <?php
    $team = [
        ["name" => "Jack Henderson", "role" => "CEO", "description" => "Jack brings over 25 years of experience in the hospitality industry, leading Radisson Blu to new heights of excellence."],
        ["name" => "Jane Smith", "role" => "CTO", "description" => "Jane is a visionary in hotel technology, ensuring our guests have access to the latest innovations for a seamless experience."],
        ["name" => "Michael Brown", "role" => "CFO", "description" => "Michael's expertise in finance has been crucial in our growth and success, managing our resources with utmost efficiency."],
    ];
    ?>
    
    <h2>Our Leadership Team</h2>
    <div class="team">
        <?php foreach ($team as $member): ?>
            <div class="team-member">
                <h3><?= $member['name'] ?></h3>
                <p><strong><?= $member['role'] ?></strong></p>
                <p><?= $member['description'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</main>
<?php include 'includes/footer.php'; ?>
