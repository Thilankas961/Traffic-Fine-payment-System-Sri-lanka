<?php require APPROOT . '/views/inc/header.php'; ?>
<h3 class="i-name">
    Dashboard
</h3>
<div class="values">
    <div class="val-box">
        <span class="material-symbols-outlined">
            <i class='bx bx-user'></i>
        </span>
        <div>
            <h3>Overdue Fines</h3>
            <span>15</span>
        </div>
    </div>



    <div class="val-box">
        <span class="material-symbols-outlined">
            <i class='bx bx-shield-minus'></i>


        </span>
        <div>
            <h3>Paid fines</h3>
            <span>15</span>
        </div>
    </div>

    <div class="val-box">
        <span class="material-symbols-outlined">
            <i class='bx bxs-error'></i>
        </span>
        <div>
            <h3>Total fines for this month</h3>
            <span>10</span>
        </div>

    </div>
</div>
<h3 class="i-name">
    OverView
</h3>
<div class="board">
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>