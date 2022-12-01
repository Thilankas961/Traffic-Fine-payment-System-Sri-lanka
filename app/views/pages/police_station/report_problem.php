<?php require APPROOT . '/views/inc/header.php'; ?>
<h3 class="i-name">
    Report a Problem
</h3>
<div class="board">

    <div class="contactform">
        <h3>Send Your Request</h3>
        <form action="./include/add_report_problem.php" method="POST">
            <div class="input-row">
                <div class="input-requestform">
                    <label for="">Name</label>
                    <input type="text" placeholder="Full Name" name="name">
                </div>
                <div class="input-requestform">
                    <label for="">Licence NO</label>
                    <input type="text" placeholder="Licence" name="licence_no">
                </div>
            </div>

            <div class="input-row">
                <div class="input-requestform">
                    <label for="">Email</label>
                    <input type="email" placeholder="email" name="email">
                </div>
                <div class="input-requestform">
                    <label for="">Mobile No</label>
                    <input type="text" placeholder="Mobile No" name="mobile_no">
                </div>
            </div>
            <label for="">Message</label>
            <textarea rows="10" placeholder="Write your problem" name="message"></textarea>
            <button type="submit" name="submit_btn">Submit</button>

        </form>

    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php';
